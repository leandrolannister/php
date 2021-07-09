<?php 
$NomeCliente = 'Fernanda';


$html = "
  <html lang='pt-BR'>
      <head>
          <meta charset='UTF-8'>
          <meta name='viewport' content='width=device-width, initial-scale=1.0'>
          <title>Pesquisa de Satisfação</title>         
          <style>
               .container{
                   width: 960px;
                   margin: 0 auto;
               }
               .img-logo{
                   text-align: center;
               }
               img{
                   height: 300px;
               }
               p{
                   text-align: center;
                   font-size: 18px;

}
               }
               .nomeCliente{
                   font-weight: bold;
               }   
               .segundo-paragrafo{
                   font-weight: bold;
               }
               .responder {
                   font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                   padding: 6px 18px;
                   color: #fff;
                   text-align: center; 
                   background: #541570; 
                   position: relative;
                   margin: 0 auto;
                   border-radius: 5px;
                   padding: 15px;
                   width: 91%;
               }
               .linkResp{
                   text-decoration: none;
                   color: #fff;
               }
               .quarto-paragrafo{
                   opacity: 0.5;
               }
               .rodape{
                   text-align: center;
               }
          </style>
      </head> 
                    
      <body>
          <div class='container'>
            <div class='img-logo'>
                <img src='cid:logo_ref' alt='movida banner'>              
            </div>    
            <main>
                <p> Olá, <span class='nomeCliente'>{$NomeCliente}<span></p>
                <p>Para que possamos atender suas expectativas e
                   melhorar cada vez mais nossos serviços,
                   gostaríamos de saber sua opinião.</p>
                 <p class='segundo-paragrafo'>
                   São apenas 5 perguntas que você pode responder em menos
                   de 1 minuto. Vamos lá?</p>
                 <p>  
                     <a href='https://www.totvs.com.br' class='linkResp'>
                         <img src='cid:logo_ref_2' alt='img'>
                     </a>
                 </p>     
                <p class='quarto-paragrafo'>Obrigado por escolher a Seminovos Movida</p>  
            </main> 
          </div>  
            <footer>
              <p>
                  <a href='https://www.seminovosmovida.com.br/seminovosmovida/' target='_blank' rel='noopener noreferrer' class='rodape'> 

                  Movida Seminovos
              </a>
            </footer>
     </body>  
  </html>  
";


require_once('PHPMailer/src/PHPMailer.php');
require_once('PHPMailer/src/SMTP.php');
require_once('PHPMailer/src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);
$NomeCliente = 'Movida';

try{
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "xuradesev23@gmail.com";
    $mail->Password = 'H23e0jlxy@';
    $mail->Port = 587;

    $mail->setFrom('xuradesev23@gmail.com');
    $mail->addAddress('leandro.soares@jsl.com.br');
    //$mail->addAddress('fernandalima@movida.com.br');
    //$mail->addAddress('nandalima_pp@hotmail.com');
    //$mail->addAddress('leandrohendrix@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'Assunto->TESTE';
    $mail->Body = $html;
    $mail->AltBody = 'Chegou email teste';
    $mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    ));
    $mail->AddEmbeddedImage('./img/bannerSnMovida_nova.png', 'logo_ref');
    $mail->AddEmbeddedImage('./img/responda.png', 'logo_ref_2');
    $mail->CharSet = 'UTF-8'; 

    if($mail->send()){
        echo "Email enviado com sucesso";
    }else {
        echo "Email não enviado";
    }

}catch (\Exception $e){
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

 






