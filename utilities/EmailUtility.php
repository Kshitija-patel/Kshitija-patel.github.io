<?php
//Created by : Priyanka Khadilkar

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once "ConstantStr.php";

require_once "../vendor/autoload.php";

class EmailUtility
{
    public static function SendEmail($to_address, $to_name,
                                     $subject, $body, $is_body_html = false)
    {

        $mail = new PHPMailer();
        // **** You must change the following to match your
        // **** SMTP server and account information.
        $mail->isSMTP();                             // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';              // Set SMTP server
        $mail->SMTPSecure = 'tls';                   // Set encryption type
        $mail->Port = 587;                           // Set TCP port
        $mail->SMTPAuth = true;                      // Enable SMTP authentication
        $mail->Username = ConstantStr::EmailUSerName; // Set SMTP username
        $mail->Password = ConstantStr::EmailPassword;           // Set SMTP password
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        // Set From address, To address, subject, and body
        $mail->setFrom(ConstantStr::EmailUSerName, 'iTutor');
        $mail->addAddress($to_address, $to_name);
        $mail->Subject = $subject;
        //$mail->AltBody = strip_tags($body);   // Body without HTML
        $mail->Body = $body;
        if ($is_body_html) {
            $mail->isHTML(true);              // Enable HTML
        }

        if (!$mail->send()) {
            return false;
            //throw new Exception('Error sending email: ' .
            // htmlspecialchars($mail->ErrorInfo));
        } else {
            return true;
        }
    }

    public static function ForgotPasswordTemplate($firstname, $link)
    {
        $emailtemplate = "<div><b> Hi " . $firstname . ",</b></div><p> You recently requested to reset your password for your iTutor Account.Please Click the below link to reset it.</p>" .
            "<div><a href='". $link ."'>".$link."</a></div><br/><br/><div>Thanks,</div><div>The iTutor Team</div>";

        return $emailtemplate;

    }

    public static function JobApplicationTemplate($firstname, $message)
    {
        $emailtemplate = "<div><b> Hi " . $firstname . ",</b></div><p>".$message."</p><br/><br/><div>Thanks,</div><div>The iTutor Team</div>";

        return $emailtemplate;

    }

}