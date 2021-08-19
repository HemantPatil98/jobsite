<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Testmail extends Controller
{
    public function index()
    {
        $to = 'sbvishal100@gmail.com';
        $subject = 'Test mail';
        $message = 'This is a test mail';

        $email = \Config\Services::email();
        $email->setTo($to);
        $email->setFrom('Cravita Technologies India.com','Info');
        $email->setSubject($subject);
        $email->setMessage($message);

        if ($email->send()) {
            echo "Email sent successfully to ".$to;
        }
        else{
            $data = $email->printDebugger(['header']);
            print_r($data);
        }
    }
}
?>