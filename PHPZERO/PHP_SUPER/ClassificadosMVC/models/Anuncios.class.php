<?php

/**
 * .class [ TIPO ]
 *
 * @copyright (c) 2018, Carlos Junior
 */
class Anuncios extends Model
{
    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */

    public function getUltimosAnuncios($page, $perPage, $filtros)
    {
       $offset = ($page - 1) * $perPage;

        $array = array();

        $filtrosstring = array('1=1');

        if (!empty($filtros['categoria'])) {
            $filtrosstring[] = 'anuncios.id_categoria = :id_categoria';
        }


        if (!empty($filtros['valor'])) {
            $filtrosstring[] = 'anuncios.valor >= :preco1 AND anuncios.valor <= :preco2';
        }

        if (!empty($filtros['estado'])) {
            $filtrosstring[] = 'anuncios.estado = :estado';
        }


        $sql = $this->db->prepare("SELECT *, (select anuncios_imagens.url from anuncios_imagens where anuncios_imagens.id_anuncio = anuncios.id limit 1) as url, (select categorias.nome from categorias where categorias.id = anuncios.id_categoria) as categoria FROM anuncios WHERE ".implode(' AND ', $filtrosstring)." ORDER BY id DESC LIMIT $offset, $perPage");



        if (!empty($filtros['categoria'])) {
            $sql->bindValue(':id_categoria', $filtros['categoria']);
        }


        if (!empty($filtros['valor'])) {
            $preco = explode('-', $filtros['valor']);

            $sql->bindValue(':preco1', $preco[0]);
            $sql->bindValue(':preco2', $preco[1]);
        }

        if (!empty($filtros['estado'])) {
            $sql->bindValue(':estado', $filtros['estado']);
        }

        $sql->execute();


        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }


    public function getTotalAnuncios($filtros)
    {
        $filtrosstring = array('1=1');

        if (!empty($filtros['categoria'])) {
            $filtrosstring[] = 'anuncios.id_categoria = :id_categoria';
        }


        if (!empty($filtros['valor'])) {
            $filtrosstring[] = 'anuncios.valor >= :preco1 AND anuncios.valor <= :preco2';
        }

        if (!empty($filtros['estado'])) {
            $filtrosstring[] = 'anuncios.estado = :estado';
        }

        $sql = $this->db->prepare("SELECT COUNT(*) as c FROM anuncios WHERE ".implode(' AND ', $filtrosstring));


        if (!empty($filtros['categoria'])) {
            $sql->bindValue(':id_categoria', $filtros['categoria']);
        }


        if (!empty($filtros['valor'])) {
            $preco = explode('-', $filtros['valor']);

            $sql->bindValue(':preco1', $preco[0]);
            $sql->bindValue(':preco2', $preco[1]);
        }

        if (!empty($filtros['estado'])) {
            $sql->bindValue(':estado', $filtros['estado']);
        }

        $sql->execute();


        $row = $sql->fetch();

        return $row['c'];
    }


    public function getMeusAnuncios()
    {
        $sql = $this->db->prepare("SELECT *,(select anuncios_imagens.url from anuncios_imagens 
         where anuncios_imagens.id_anuncio = anuncios.id limit 1) 
        as url FROM anuncios WHERE id_usuario = :id_usuario");


        $sql->bindValue(':id_usuario', $_SESSION['cLogin']['id']);
        $sql->execute();

        $array = array();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function getAnuncio($id)
    {
        $array = array();


        $sql = $this->db->prepare("SELECT *,
                              (select categorias.nome from
                               categorias where categorias.id = anuncios.id_categoria) as categoria,
                                (select usuarios.telefone from
                               usuarios where usuarios.id = anuncios.id_usuario) as telefone 
                                FROM anuncios WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetch();

            $array['fotos'] = array();


            $sql = $this->db->prepare("SELECT * FROM anuncios_imagens WHERE id_anuncio = :id_anuncio");
            $sql->bindValue(":id_anuncio", $id);
            $sql->execute();

            if ($sql->rowCount() > 0) {
                $array['fotos'] = $sql->fetchAll();
            }
        }

        return $array;
    }

    public function addAnuncio($titulo, $categoria, $valor, $descricao, $estado)
    {
        $sql = $this->db->prepare("INSERT INTO anuncios SET titulo = :titulo, id_categoria = :id_categoria, id_usuario = :id_usuario, descricao = :descricao, valor = :valor, estado = :estado");

        $sql->bindValue(':titulo', $titulo);
        $sql->bindValue(':id_categoria', $categoria);
        $sql->bindValue(':id_usuario', $_SESSION['cLogin']['id']);
        $sql->bindValue(':descricao', $descricao);
        $sql->bindValue(':valor', $valor);
        $sql->bindValue(':estado', $estado);

        $sql->execute();
    }


    public function editAnuncio($titulo, $categoria, $valor, $descricao, $estado, $fotos, $id)
    {
        $sql = $this->db->prepare("UPDATE anuncios SET titulo = :titulo, id_categoria = :id_categoria, id_usuario = :id_usuario, descricao = :descricao, valor = :valor, estado = :estado WHERE id = :id");

        $sql->bindValue(':titulo', $titulo);
        $sql->bindValue(':id_categoria', $categoria);
        $sql->bindValue(':id_usuario', $_SESSION['cLogin']['id']);
        $sql->bindValue(':descricao', $descricao);
        $sql->bindValue(':valor', $valor);
        $sql->bindValue(':estado', $estado);
        $sql->bindValue(':id', $id);

        $sql->execute();

        //se existir alguma foto
        if (count($fotos) > 0) {
            for ($q = 0; $q < count($fotos['tmp_name']); $q++) {
                $tipo = $fotos['type'][$q];

                if (in_array($tipo, array('image/jpeg', 'image/png'))) {
                    $tmpname = md5(time() . rand(0, 9999)) . '.jpg';

                    move_uploaded_file($fotos['tmp_name'][$q], 'assets/images/anuncios/' . $tmpname);

                    list($width_orig, $height_orig) = getimagesize('assets/images/anuncios/' . $tmpname);

                    $radio = $width_orig / $height_orig;

                    $width = 500;
                    $heigth = 500;

                    if ($width / $heigth > $radio) {
                        $width = $heigth * $radio;
                    } else {
                        $heigth = $width / $radio;
                    }

                    $img = imagecreatetruecolor($width, $heigth);

                    if ($tipo == 'image/jpeg') {
                        $origi = imagecreatefromjpeg('assets/images/anuncios/' . $tmpname);
                    } else {
                        $origi = imagecreatefrompng('assets/images/anuncios/' . $tmpname);
                    }

                    imagecopyresampled($img, $origi, 0, 0, 0, 0, $width, $heigth, $width_orig, $height_orig);

                    imagejpeg($img, 'assets/images/anuncios/' . $tmpname, 80);


                    $sql = $this->db->prepare("INSERT INTO anuncios_imagens SET id_anuncio = :id_anuncio, url = :url");
                    $sql->bindValue(':id_anuncio', $id);
                    $sql->bindValue(':url', $tmpname);
                    $sql->execute();
                }
            }
        }
    }

    public function excluirAnuncio($id)
    {
        $sql = $this->db->prepare("DELETE FROM anuncios WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();
    }

    public function excluirFoto($id)
    {
        $id_anuncio = 0;

        $sql = $this->db->prepare("SELECT id_anuncio FROM anuncios_imagens WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $row = $sql->fetch();
            $id_anuncio = $row['id_anuncio'];
        }

        $sql = $this->db->prepare("DELETE FROM anuncios_imagens WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();

        return $id_anuncio;
    }
}
