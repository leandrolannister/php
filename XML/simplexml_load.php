<?php

$xml = simplexml_load_string("<topicos>
<topico id='1'>JSON</topico>
<topico id='2'>XML</topico>
</topicos>");

foreach($xml->topico as $topico){
    echo $topico['id'] . ": ". $topico. PHP_EOL;
}

