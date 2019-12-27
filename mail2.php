<?php 
require './vendor/phpmailer/phpmailer/src/Exception.php';
require './vendor/phpmailer/phpmailer/src/PHPMailer.php';
require './vendor/phpmailer/phpmailer/src/SMTP.php';
require_once 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);


    $name = $_POST['nombre'];
    $email = $_POST['email'];
    $company = $_POST['empresa'];
    $phone = $_POST['telefono'];
    
    
    
    try {
        //Server settings
        
        $mail->SMTPDebug = 0; 
        $mail->CharSet = "utf-8";
        $mail->Mailer = "smtp";                                     // Enable verbose debug output
        $mail->isSMTP();                                            // Set mailer to use SMTP
        $mail->Host       = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'noreplyorganicfood@gmail.com';               // SMTP username
        $mail->Password   = 'Cambiame1234';                           // SMTP password
        $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port       = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('noreplygiunti@gmail.com', 'Información de Organic Food');
        //$mail->addAddress('eulogioem@gmail.com');             // Add a recipient
        $mail->addAddress('fblanco@learning.eoi.es');  
        //$mail->addAddress('ceblfe@gmail.com');           // Add a recipient

        


        // Content
        $mail->isHTML(true);                                         // Set email format to HTML
        $mail->Subject = 'Formulario Curso';
        $mail->Body    = 'Datos cliente: NOMBRE: ' .$name .' EMAIL: ' .$email .' TELÉFONO: ' .$phone.'EMPRESA'.$company;

        $mail->AltBody = 'Datos cliente: Nombre : ' .$name .' Email: ' .$email .' Teléfono: ' .$phone .'EMPRESA'.$company;

        $mail->send();
        
        // echo 'Message has been sent';
       
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    
?>

<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <!-- <link rel="icon" href="img/favicon.png"> -->

    <title>¡Muchas Gracias!</title>
    <link rel="icon" type="image/x-icon" href="img/logoFood.ico" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
   integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    
</head>

<body>


    <div id="container">
        <header id="main-header">
            <div id=logocontainer>
                <img id="logo" src="img/logo.png" alt="logo" style="width:256px;background-color: #ffffff;">
            </div>
            
        </header>
        <div id="main-text">
            <h1>Welcome To Your New Ecological Experience</h1>
            <h4 id="saludo"> Muchas Gracias por contactar con nosotros </h4>
            <h4 id="contacto"> En breve nos pondremos en contacto contigo <?=$name;?> </h4>
        </div>
        <div id="testmonial">
            <img src="http://www.seniorcareplaza.com/images/testimonial.png">
            <blockquote>
            ”La innovación guiada por pequeños agricultores, adaptada a circunstancias locales y sustentable para la economía y el ambiente será necesaria para asegurar la seguridad alimentaria en el futuro” <strong>Bill Gates</strong>
            </blockquote>
        


   </div>
   <footer id="main-footer">
        
        <div class="redes">
            <div class="contenedor">
                <a href="https://www.instagram.com/" class="github"><i class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/" class="twitter"><i class="fab fa-twitter"></i></a>
                <a href="https://www.facebook.com/" class="facebook"><i class="fab fa-facebook-f"></i></a>

            </div>
        </div>
            <p>Copyright &copy;2019</p>
        </footer>

    <script src="js/main.js"></script>

</body>

</html>