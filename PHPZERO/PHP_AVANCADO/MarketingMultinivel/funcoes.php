<?php
/**
 * Created by PhpStorm.
 * User: Carlos-TP
 * Date: 09/04/2019
 * Time: 13:53
 */

function listar($id, $limite)
{
    $lista = array();

    global $pdo;
    $sql = $pdo->prepare('SELECT u.id, u.id_pai, u.patente, u.nome,      p.nome as p_nome  
                                    FROM usuarios u 
                                    
                                    LEFT JOIN patentes p ON 
                                    p.id = u.patente
                                    
                                    WHERE u.id_pai = :id');
    $sql->bindValue(':id', $id);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        $lista = $sql->fetchAll(PDO::FETCH_ASSOC);

        foreach ($lista as $chave => $usuario) {
            $lista[$chave]['filhos'] = array();

            if ($limite > 0) {
                $lista[$chave]['filhos'] = listar($usuario['id'], $limite - 1);
            }
        }

    }

    return $lista;
}

function exibir($array)
{
    echo '<ul class="list-group">';
    foreach ($array as $usuario) {
        echo '<li class="list-group-item">';
        echo $usuario['nome'] . ' (' . count($usuario['filhos']) . ' cadastros diretos) - ' . $usuario['p_nome'];

        if (count($usuario['filhos']) > 0) {
            exibir($usuario['filhos']);
        }

        echo '</li>';
    }
    echo '</ul>';
}

function calcularCadastros($id, $limite)
{
    $filhos = 0;
    global $pdo;
    $sql = $pdo->prepare('SELECT *
                                    FROM usuarios u 
                                    
                                    WHERE u.id_pai = :id');
    $sql->bindValue(':id', $id);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        $lista = $sql->fetchAll(PDO::FETCH_ASSOC);

        $filhos = $sql->rowCount();

        foreach ($lista as $chave => $usuario) {
            if ($limite > 0) {
                $filhos += calcularCadastros($usuario['id'], $limite - 1);
            }
        }
    }
    return $filhos;
}


