<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

if (isset($_POST['Enviar'])) {

    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'SEU_EMAIL@GMAIL.COM';                 //SMTP username
        $mail->Password   = 'SUA_SENHA_DO_EMAIL';                     //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('SEU_EMAIL@GMAIL.COM', 'Site');
        $mail->addAddress('SEU_EMAIL@GMAIL.COM', 'Kleber');     //Add a recipient
        $mail->addAddress('SEU_EMAIL@GMAIL.COM.com');               //Name is optional
        $mail->addReplyTo('SEU_EMAIL@GMAIL.COM', 'Sk8NoFront');
        //$mail->addCC('SEU_EMAIL@GMAIL.COM');
        //$mail->addBCC('bcc@example.com');

        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Mensagem enviada via site - formulario de contato';

        $body = "Mensagem enviada através do site, segue informações abaixo:<br>
                Nome: ".$_POST['nome']."<br>
                Email: ".$_POST['email']."<br>
                Tel: ".$_POST['fone']."<br>
                Assunto: ".$_POST['assunto']."<br>
                Msg: ".$_POST['mensagem']."<br>";

        $mail->Body    = $body;
        $mail->AltBody = 'Mensagem enviada via site - formulario de contato';

        $mail->send();
        //echo 'Mensagem enviada com sucesso';
        echo "<script>window.location='index.php';alert('Mensagem enviada com sucesso, entraremos em contato em breve. Obrigado');</script>";

    } catch (Exception $e) {
        //echo "Erro ao enviar o email: {$mail->ErrorInfo}";
        echo "<script>window.location='index.php#contato-section';alert('Erro -  mensagem não enviada, por favor tente novamente');</script>";
    }
}else{
    //echo 'Erro ao enviar mensagem - acesso fora do formulário';
    echo "<script>window.location='index.php';alert('Acesso não permitido - acesso realizado fora do formulário, você será redirecionado para a home');</script>";

}
