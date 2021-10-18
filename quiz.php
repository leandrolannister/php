<?php
  $string = "PHP 7.1";
  $regexp = "/??/";

  preg_match_all($regexp, $string, $ocorrencias);
  print_r($ocorrencias);
?>

Qual dos seguintes meta-caracteres (sinalizados por ??) pode ser usado para pesq\
uisar qualquer caractere que não seja dígito decimal? 
A: \s
B: \S
C: \d
D: \D

*****************************************************************************************

Qual dos seguintes meta-caracteres (sinalizados por ??) pode ser usado para pe\
squisar qualquer caractere que não seja espaço em branco?
A: \s
B: \S
C: \d
D: \D

*****************************************************************************************
O que sera impresso?
<?php 
    if ('um' == 0):
	    echo "true";
    else:
	    echo "false";
    endif;
?>
*****************************************************************************************
Qual a saída do código a seguir:
<?php
    function ExibeFilme($filme = ""){
       if(8 == "8 Mile"){
           $resultado = "Verdadeiro";
       }else {
           $resultado = "Falso";
       }
       echo $filme;
    }
    echo ExibeFilme(); ?>

	A: Verdadeiro
	B: Falso
	C: Parse error
	D: (vazio)
	E: 8 Mile
*****************************************************************************************
De acordo com o código abaixo:

<?='ZCPE'?>

Assinale a alternativa correta:
    A: Gera um Parse error, pois não há instruções PHP válidas
    B: Gera um Fatal error, pois o bloco PHP não está devidamente delimitado com as \
    tags padrão <?php ${"code"} ?>
    C: As "short tags" <? ${"code"} ?> devem estar especificadas no php.ini para funcionar
    D: Essa construção é particularmente possível e exibe "ZCPE"
    E: Gera um mensagem do tipo Notice pois considera "ZCPE" como uma constante
*****************************************************************************************
Quais alternativas abaixo são identificadores válidos?

    A: $1 = "Ari";
    B: $_1 = "Ari";
    C: function object() {}
    D: function 6Pack() {}
    E: function _6Pack() {}    
*****************************************************************************************Qual a saída do código abaixo?
<?php echo '5'. (print '2') + 3; ?>

*****************************************************************************************
Qual será a saída?
<?php
  $a=20%-8;
  echo $a;
?>

A: Script exibe uma mensagem de erro
B: 4
C: -4
D: -2
*****************************************************************************************
O código a seguir atribui verdadeiro a variável $a?
<?php $a = 123 !== 1230E-1; ?>
A: Sim
B: Não
****************************************************************************************
Qual a saída do código abaixo?
<?php
$p = "PHP";
$P = "php";
echo ($p < $P) + 2 * ($p > $P) + 3 * ($p == $P); ?>

A: 0
B: 1
C: 2
D: 3
****************************************************************************************
Das alternativas a seguir, qual a forma mais elegante de se elevar o decimal 5 à\
potência 3:
<?php
  'A:' . 5^3;
  'B:' . 5 * 5 * 5;
  'C:' . pow(5,3);
  'D:' . pow(3,5);
  'E:' . 5 ** 3;  ?>
****************************************************************************************
Considere o trecho de código a seguir e diga qual será a saída:
<?php 
  $var=10 & 2;
  echo $var; ?>
  A: 3
  B: 0
  C: 10
  D: 2 
**************************************************************************************
Qual a saída do código a seguir?
<?php
  echo 4 >> 3; ?>
A: 32
B: 1
C: 0
D: 0.5
***************************************************************************************
Qual a saída do script a seguir:
<?php
    function BancoDeHoras(){
        define("EXPEDIENTE_INICIAL", 8);
    }
    echo EXPEDIENTE_INICIAL ?>

A: 8
B: <vazio>
C: "8"
D: Notice: Use of undefined constant EXPEDIENTE_INICIAL...
****************************************************************************************
Digamos que você tenha um script.php com o conteúdo abaixo rodando na raiz do se\
rvidor /var/www:

<?php include "constantesmagicas.php"; ?>

E o script constantesmagicas.php contém __FILE__, que é a constante mágica que e\
xibe o nome do arquivo:
<?php echo __FILE__; ?>

Portanto qual a saída do código script.php?

A: script.php
B: constantesmagicas.php
C: /var/www/script.php
D: /var/www/constantesmagicas.php
E: Nenhuma das alternativas
****************************************************************************************
Qual a saída do código abaixo?
<?php echo "3" + 5 * "0x02"; ?>
A: Parse errorFundamentos do PHP 74
B: 3
C: 13
D: 310
E: Notice e o valor 3
****************************************************************************************
Qual a saída do código a seguir?
<?php $a = array('a', 'b'=>'c'); ?>
<?php echo property_exists((object) $a, 'a') ? 'verdadeiro' : 'falso';
echo property_exists((object) $a, 'b') ? 'verdadeiro' : 'falso'; ?>
****************************************************************************************
Qual a saída do código a seguir:
<?php
$n = "Ari Stopassola Junior";
$n1 = "Ari";
$n2 = "Stopassola";
$n3 = "Junior";
$saudacao = "Olá $n2";
echo $saudacao; ?>
A: Olá Ari Stopassola Junior2
B: Olá
C: Olá Stopassola2
D: Olá Stopassola
****************************************************************************************
Qual a saída do código a seguir:
<?php echo strlen('1\n2') * strlen("1\n2"); ?>
****************************************************************************************
Qual a saída do código a seguir?
<?php echo true ? 'verdadeiro' : false ? 'v' : 'f'; ?>
A: 'verdadeiro'
B: true
B: 'v'
C: 'f'
D: false
****************************************************************************************
Qual a saída do código abaixo?
<?php echo (bool)(new stdClass)? (bool)true : (bool)false; ?>
_____________ (campo aberto)
****************************************************************************************
Qual a saída do código abaixo?
<?php
function fibonacci (&$x1 = 0, &$x2 = 1){
$result= $x1 + $x2;
$x1 = $x2;
$x2 = $result;
return $result;
}
for ($i = 0; $i < 10; $i++) {
echo fibonacci() . ',';
} ?>
A: Erro
B: 1,1,1,1,1,1,1,1,1,1,
C: 1,1,2,3,5,8,13,21,34,55,
D: Vazio
***************************************************************************************
Qual a saída do código a seguir?
<?php
namespace MinhaBiblioteca;
function count($a)
{
return "Contando";
}
$a = ["Ari", "Stopassola", "Junior"];
echo count($a); ?>
A: 3
B: Contando
C: Fatal error: Cannot redeclare count() in ...
D: Nenhuma das alternativas
***************************************************************************************
Quais dos seguintes métodos estão disponíveis para limitar a quantidade de recur\
sos disponíveis ao PHP, configurados através do php.ini?
[ escolha 2 ]
A: Limitar a quantidade de memória que um script pode consumir
B: Limitar a quantidade total de memória que PHP usa em todo o servidor
C: Limitar o tempo máximo de execução de um script
D: Limitar o número máximo de processos simultâneos do PHP
E: Limitar o número máximo de threads simultâneas do PHP
**************************************************************************************
Como exibir os nomes com suas respectivas profissões?
<?php
$vetor[] = "Ari Stopassola Junior";
$vetor['profissao'] = "Desenvolvedor";
$vetor[] = "Ariel Stopassola";
$vetor['profissao'] = "Advogado";
$vetor[] = "Laci Stopassola";
$vetor['profissao'] = "Artista plástica";

A:
foreach ($vetor as $conteudo => $indice){
echo $conteudo." ".$indice."<br>";
}
B:
foreach ($vetor as $indice => $conteudo){
echo $conteudo." ".$indice."<br>";
}
C:
foreach ($vetor as $indice => $conteudo){
echo $vetor[$indice]." ".$vetor['profissao']."<br>";
}
D:
for($i=0; $i<3; $i++){
//echo $i;
echo $vetor[$i]." ".$vetor['profissao']."<br>"; 
} ?>
E: Nenhuma das alternativas
***************************************************************************************
Considere o seguinte trecho de código:
< $resultado = $valor1 ??? $valor2; ?>
Que operador deve ser usado ao invés do ??? onde a variável $resultado obtém o $\
valor1 se $valor1 for avaliado como verdadeiro e $resultado recebe $valor2 quand\
o falso? Apenas escreva o operador necessário no código.
***************************************************************************************
Qual a saída do código a seguir:
var_dump(round(1.2));
A: bool(true);
B: float(1);
C: integer(1);
D: float(1.0);
***************************************************************************************
Qual das seguintes opções deve ser usada em conjunto com CASE dentro de uma decl\
aração SWITCH?
A: Scalar
B: Uma expressão
C: Boolean
D: Todas anteriores
***************************************************************************************
Qual a saída do código a seguir?
2 echo "1" + 2 * 0x02;
3
4 A: 1
5 B: 3
6 C: 5
7 D: 20
8 E: 7
**************************************************************************************
Qual das seguintes opções NÃO é uma declaração válida de função?
A: function x ($x1 = array())
B: function x (A $x1)
C: function x (A $x1 = null)
D: function x ($x1 = $x2)4
**************************************************************************************
<?php
function codigoPostalDeOrigem($cep="95670-000", $cidade="Gramado", $uf="RS"){
   echo $cep . " - " . $cidade . " - " . $uf;
} ?>
Para que a função codigoPostalDeOrigem() assuma valores padrão, como ela NÃO dev\
e ser invocada?
A: codigoPostalDeOrigem("54420-240", NULL, "PE");
B: codigoPostalDeOrigem("54420-240", "", "PE");
C: codigoPostalDeOrigem("54420-240", '', "PE");
D: codigoPostalDeOrigem("54420-240", , "PE"); ?>
*************************************************************************************
No contexto de variáveis globais, qual a saída do código a seguir?
<?php
$titulo = "ZCPE 5.5";
function exibe(){
global $titulo;
$titulo = "ZCE 7.1";
}
echo $titulo;
'A:' .  'ZCE 7.1';
'B:' .  'vazio';
'C:' . 'ZCPE 5.5ZCE 7.1';
'D:' . 'ZCPE 5.5'; ?>
*************************************************************************************
Qual a saída do código PHP a seguir:
<?php 
function depois($a){
   $a = "Depois ".$a;
}
function antes(&$a){
   $a = $a." antes";
}
depois(antes($a));
echo $a; ?>
*************************************************************************************
Qual a saída do código a seguir?
<?php $s = function(){
return "Certificamp";
};
echo gettype($s); ?>
A: Certificamp
B: string
C: function
D: object
E: resource
*************************************************************************************
Das alternativas a seguir qual NÃO é uma declaração de função válida?
A: function x (A $x1 = null)
B: function x ($x1 = $x2)
C: function x (A $x1)
D: function x ($x1 = array())
*************************************************************************************
Como permitir passar para uma função um número variável de argumentos?
A: Usando algo como uma function test() com a função get_variable_args() 
no corpo da função.
B: Usando algo como function test($parametros[])
C: Usando algo como function test(... $parameters)
D: Usando algo como uma functiontest() com a função func_get_args() dentro, no c\
orpo da função
E: Isto não é possível em PHP
*************************************************************************************
Considere o código abaixo:
<?php
function cresce($tamanho){
$tamanho .= "bigger ";
$tamanho = encolhe($tamanho);
return $tamanho;
}
function encolhe(&$tamanho){
$tamanho .= "smaller ";
return $tamanho;
}
$tamanho = "normal ";
$tamanho .= cresce($tamanho);
echo $tamanho; ?>
Qual a saída do código acima?
A: normal normal bigger smaller
B: normal bigger smaller bigger smaller
C: Erro na linha "$tamanho = encolhe($tamanho);"
D: Erro na linha "function encolhe(&$tamanho) {"
E: Erro na linha "$tamanho .= cresce($tamanho);"
*************************************************************************************
Qual a saída do código a seguir?
<?php
function ordena_meu_array($array){
   return sort($array);
}
$a = array(3, 2, 1);
var_dump(ordena_meu_array(&$a))?>
A: NULL
B: 0 => 1, 1 => 2, 2 => 3
C: An invalid reference error
D: 2 => 1, 1 => 2, 0 => 3
E: bool(true)
F: Parse error
*************************************************************************************
Quais declarações a seguir, a respeito de funções anônimas em PHP, NÃO são verda\
deiras?
[ Escolha 2 ]
A: Funções anônimas podem ser vinculadas a objetos
B: As funções anônimas criadas no contexto do objeto são sempre vinculadas a ess\
e objeto
C: Atribuir closure a uma propriedade de um objeto o vincula-o a esse objeto
D: Os métodos bind() e bindTo() do objeto Closure fornecem meios para criar clos\
ures com diferentes vínculos e escopo
E: Binding define o valor de $this e o escopo para um closure
************************************************************************************
Declarar um documento XML como standalone (independente) significa que ele não p\
ossui associação com informações externas de marcação.
Qual a alternativa abaixo sinaliza um documento XML como standalone?
A: <?xml version="1.0" standalone='on'?>
B: <?xml version="1.0" standalone='no'?>
C: <?xml version="1.0" standalone='yes'?>
D: <?xml version="1.0" standalone='1'?>
E: <?xml version="1.0" standalone='off'?>
************************************************************************************
$xml é um objeto SimpleXML. Como gravar tal objeto no arquivo saida.xml?
A: simplexml_save_string($xml, "saida.xml");
B: simplexml_save_file($xml, "saida.xml");
C: $xml->saveAs("saida.xml");
D: file_put_contents($xml->asXML(), "saida.xml");
Formatos e tipos de dados 117
E: Nenhuma das alternativas anteriores
************************************************************************************
Se quisermos adicionar uma nova característica a cerveja, qual seria a instrução\
correta a ser substituída?
<?php
$xmlstr = <<<XML
<?xml version='1.0'?>
<cerveja>
<estilo>Irish Red Ale</estilo>
<caracteristica>Aroma de biscoito e caramelo</caracteristica>
</cerveja>
XML;
$xmlObj = simplexml_load_string($xmlstr);
echo $xmlObj->asXML();
?>
A: $xmlObj->cerveja->addChild("caracteristica", "Coloração âmbar");
B: $xmlObj->addChild(new SimpleXMLElement("caracteristica", "Coloração âmbar"));
C: $xmlObj->cerveja[0]->addChild("caracteristica", "Coloração âmbar");
D: $xmlObj->xpath(new SimpleXMLElement("caracteristica", "Coloração âmbar"));
E: $xmlObj->addChild("caracteristica", "Coloração âmbar");
F: $xmlObj->cerveja[0]->addChild(new SimpleXMLElement("caracteristica", "Coloraç\
ão âmbar"));
***********************************************************************************
Dado o seguinte XML...
<?php
$xml = '<?xml version="1.0" encoding="ISO-8859-1"?>
<estilos>
<cerveja alcool="5.5" coloracao="13" amargor="30">Pale Ale</cerveja>
<cerveja alcool="5.5" coloracao="8" amargor="12">Weiss</cerveja>
<cerveja alcool="5.0" coloracao="7" amargor="11">WitBier</cerveja>
<cerveja alcool="6.0" coloracao="27" amargor="40">Amber Ale</cerveja>
<cerveja alcool="6.5" coloracao="30" amargor="18">Red Ale</cerveja>
<cerveja alcool="6.7" coloracao="25" amargor="62">IPA</cerveja>
</estilos>'; ?>
Qual o resultado quando executado...
$e = new SimpleXMLElement($xml);
$x = $e->xpath("//cerveja[@amargor > 35]");
A: Exceção será lançada, pois a expressão XPath está incorreta
B: Exceção, pois o XML é inválido
C: NULL
D: Array contendo dois objetos SimpleXML que representam cervejas com o índice d\
e amargor maior que 35 IBUs (International Bitterness Unit)
***********************************************************************************
Quais das alternativa abaixo são válidas ao implementar um cliente SOAP para con\
sumo de WebServices:
[ Escolha 2 ]
A: $c = new SoapClient(null, array());
B: $c = new SoapClient(null, array(uri => "servico.com.br", location => "servico\
.com.br/ws.php"));
C: $c = new SoapClient(null, null);
D: $c = new SoapClient("arquivo.wsdl");
************************************************************************************
Como setar o formato "2017-06-15 14:59:03" de data e horário através da classe D\
ateTime?
A: date_format($data, 'Y-m-d H:i:s');
B: $data->format('Y-m-d H:i:s');
C: date('Y-m-d H:i:s', $data);
D: nenhuma das alternativas
************************************************************************************
Qual das seguintes funções atua como alias de session_write_close()?
A: session_encode()
B: session_commit()
C: session_id()
D: session_cache_limiter()
*************************************************************************************
Como garantir que outros usuários não leiam os arquivos de sua sessão numa hospe\
dagem compartilhada?
A: direcionar os arquivos temporários de sessão fora do DocumentRoot
B: retirar privilégios do diretório onde eles se encontram
C: armazenar em banco de dados
D: customizar a diretiva session.save_path e direcionar os arquivos de sessão nu\
m diretório próprio
E: todas as alternativas
*************************************************************************************
O que falta no formulário HTML abaixo para garantir que o arquivo seja devidamen\
te submetido como upload para um script PHP?
<form action="upload.php" method="post">
<input type="file" name="arq">
</form>
A: propriedade value no <input type="file">
B: o botão de submissão de formulário <input type="submit">
C: adicionar enctype="multipart/form-data" como atributo da tag <form>
D: alternar o método de envio de post para put
***************************************************************************************