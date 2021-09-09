<?php
//Em seu servidor é obrigatório que a função "allow_url_fopen" esteja habilitada. Caso não esteja, crie o arquivo "php.ini" na pasta onde esteja o script do nosso exemplo e coloque o seguinte código:

$link = "http://www.devmedia.com.br/xml/devmedia_full.xml";
//link do arquivo xml
$xml = simplexml_load_file($link);

/*echo "<pre>";
print_r($xml->channel->item);
echo "</pre>";*/

foreach($xml->channel as $itens) {
   foreach($itens as $i){
      echo $i . PHP_EOL;
   }
}
