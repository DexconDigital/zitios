<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './vendor/autoload.php';

if ($_POST) {
    $email = $_POST['email'];
    $nombre = $_POST['name'];
    $mensaje = $_POST['message'];
    $telefono = $_POST['telefono']; 
    $correoasesor = $_POST['asesor'];
    $codigo_inmueble = $_POST['id_inmueble'];
}

$mail = new PHPMailer(true);

try{
    $mail->isSMTP();

    $mail->Host = 'mail.zitios.com.co';
    $mail->SMTPAuth = true;

    $mail->Username = 'no-reply@zitios.com.co';
    $mail->Password = 'zitios2019@';

    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Mensaje para enviar
    
    $mail->isHTML(true);
    $mail->setFrom('no-reply@zitios.com', 'No-Reply@zitios.com');
    $mail->addAddress($correoasesor);
    $mail->Subject='Mensaje desde la pagina web Zitios';
    $mail->Body = '<span>Hola, '.$nombre.' quiere recibir informacion sobre el inmueble con el codigo: '.$codigo_inmueble.' </span>
                    <ul>
                        <li>Correo: '.$email.'</li>
                        <li>Telefono: '.$telefono.'</li>
                        <li>Mensaje: '.$mensaje.'</li>
                    </ul>
    ';
    $mail->send();
    echo "<script>window.location.href='./detalle-inmueble.php?co='.$codigo_inmueble.';</script>";

}catch(Exception $e){
    echo 'algo salio mal' , $e->getMessage();
}
?>