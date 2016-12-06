<?php

namespace Controller;

use \W\Controller\Controller;
//require '../vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
use PHPMailer;
class ContactController extends Controller
{

    /**
     * Page d'accueil par défaut
     */
    public function home()
    {
        $this->show('contact/index');
    }

    public function traitement() {
        /*echo "<pre>";
        print_r($_POST);
        echo "</pre>";*/
        $mail = new PHPMailer;
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.orange.fr;smtp2.example.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'emmanuel.landry@wanadoo.fr';                 // SMTP username
        $mail->Password = 'Agoria78';                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;
        // Enable TLS encryption, `ssl` also accepted                                      // TCP port to connect to

        $mail->setFrom('emmanuel.landry@wanadoo.fr', 'FrameworkW');
        $mail->addAddress("emmanuel.landry@gmail.com");     // Add a recipient{$user['emailClient']}
        // Name is optional


        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = 'Un message provenant de frameworkW';
        $mail->Body    = "<html><head><style>{color:blue;}</style></head><body><h1>Message de :{$_POST['email']}</h1><br><br>{$_POST['textarea']}</body></html>";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
        echo 'Message has been sent';
        }
        //$this->redirectToRoute('contact_home', ['flash' => 'Votre message a été envoyé']);
        $this->show('contact/index', ['flash' => 'Votre message a été envoyé']);
    }

}