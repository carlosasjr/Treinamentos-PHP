<?php

//se buscar da internet pega como string
//simplexml_load_string()

//ler xml
$xml = simplexml_load_file("ondas.xml");

echo "Cidade: " . $xml->nome;
echo '<hr>';

echo "Manha: " . $xml->manha->vento . "<br>";
echo "Tarde: " . $xml->tarde->vento . "<br>";
echo "Noite: " . $xml->noite->vento . "<br>";


//criar xml

function arrayToXml($data, &$xmlData)
{
    foreach ($data as $key => $value) {
        if (is_array($value)) {
            if (is_numeric($key)) {
                $key = 'item' . $key;
            }
            $subnode = $xmlData->addChild($key);
            arrayToXml($value, $subnode);
        } else {
            if (is_numeric($key)) {
                $key = 'item' . $key;
            }
            $xmlData->addChild($key, htmlspecialchars($value));
        }
    }
}

$array = array(
    "nome" => "Carlos",
    "Idade" => 34,
    "Sexo" => "M",
    "caracteristicas" => array(
        "amigo",
        "fiel",
        "companheiro",
        "legal"
    )
);

//cria um xml vazio
$xml = new SimpleXMLElement('<data/>');

arrayToXml($array, $xml);

$result = $xml->asXML();
echo $result;









