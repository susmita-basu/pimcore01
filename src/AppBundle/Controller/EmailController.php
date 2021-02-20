<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;


class EmailController extends AbstractController{

    public function emailAction(Request $request)
    {

        // $params = array('firstName' => 'Pim',
        //         'lastName' => 'Core');
        
        // //sending the email
        // $mail = new \Pimcore\Mail();
        // $mail->addTo('susmitabasumallick51@gmail.com');
        // $mail->setDocument('productAssigned');
        // $mail->setParams($params);
        // $mail->send();

    }
    public function productAssignedAction(Request $request){

    }

}