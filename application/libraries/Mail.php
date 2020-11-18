<?php

class Mail
{
    function send_mail($subject, $send_to, $content)
    {
        require 'sendgrid-php/vendor/autoload.php';
        $email = new \SendGrid\Mail\Mail();
        //$email->setFrom("noreply@jogjawebcom.com", "noreply");
        $email->setFrom("jwcom.jogja@gmail.com");
        $email->setSubject($subject);
        $email->addTo($send_to);
        $email->addContent(
            "text/html",
            $content
        );
        $sendgrid = new \SendGrid("SG.z-2FdMfNRDeCSILW6fLjUg.wPO-Bxg7ivHbnVRK3ldEmOBVl7UXMZ1hGoTk0UBODFw");
        //new \SendGrid(getenv('SG.z-2FdMfNRDeCSILW6fLjUg.wPO-Bxg7ivHbnVRK3ldEmOBVl7UXMZ1hGoTk0UBODFw'));
        try {
            $response = $sendgrid->send($email);
            // print $response->statusCode() . "\n";
            // print_r($response->headers());
            // print $response->body() . "\n";
            return true;
        } catch (Exception $e) {
            echo 'Caught exception: ' . $e->getMessage() . "\n";
            return false;
        }
    }   
}