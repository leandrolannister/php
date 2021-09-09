<?php
$xmlstr = <<<XML
<?xml version='1.0'?>
<cerveja>
<estilo>Irish Red Ale</estilo>
<caracteristica>Aroma de biscoito e caramelo</caracteristica>
</cerveja>
XML;
$xmlObj = simplexml_load_string($xmlstr);

$xmlObj->addChild("caracteristica", "Coloração âmbar");

echo "<pre>";
print_r($xmlObj);
echo "<pre>";
