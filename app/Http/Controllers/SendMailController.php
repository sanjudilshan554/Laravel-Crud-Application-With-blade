<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class SendMailController extends Controller
{
    // showing mail interface
    public function indexs(Request $request){
        $id=$request->currentId;
        return view('welcome',['id'=>$id]);
    }

    // sending a mail via php mailer
    public function sendMails(Request $request) {
        require base_path("vendor/autoload.php");
        $mail = new PHPMailer();
        
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username =
            $mail->Password = 
            $mail->SMTPSecure = 'TLS';
            $mail->Port = 587;
            $mail->setFrom('sanjudilshan554@gmail.com', 'Checking Example');
    
            // Define the recipient's email address (replace with the actual recipient's email)
            $recipientEmail = $request->mail;
    
            $html = "Hello Check Example here";
            $mail->Body = $html;

            $mail->addAddress($recipientEmail);

            try {
            
                if (!$mail->send()) {
                    return 'Email could not be sent: ' . $mail->ErrorInfo;
                } else {
                    return 'Success: Email has been sent.';
                }
            } catch (Exception $e) {
                return 'Error: ' . $e->getMessage();
            }


        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
}
