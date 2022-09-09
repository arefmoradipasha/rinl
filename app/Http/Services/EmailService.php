<?php
namespace app\Http\Services;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class EmailService {

    /**
     * @throws Exception
     */

    public static function SendEmail($subject, $body, $receiver): void
    {
        try {
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->isHTML(true);
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port= '465';
            $mail->Username = 'arefps1234@gmail.com';
            $mail->Password = 'AB.25.cd#6201';
            $mail->Subject = $subject;
            $mail->setFrom($receiver);
            $mail->addAddress($receiver);
            $mail->Body = $body;
            // $mail->clearReplyTos();
            $mail->send();
            $mail->smtpClose();
        } catch (Exception $exception){
            echo $exception->errorMessage();
        }

    }
}