<?php
    namespace AppBundle\EventListener;
    use Pimcore\Event\Model\DataObjectEvent;
    use Pimcore\Model\DataObject\Products;

    class EmailListener {

        /**
        * @Param DataObjectEvent $e
        */
     
        public function onEmailUpdate (DataObjectEvent $e) {
       
      
        //     $params = array('sku' => '00058');
 
        //     //sending the email
        //     $mail = new \Pimcore\Mail();
        //     $mail->addTo('susmitbasumallick51@gmail.com');
        //     $mail->setDocument('\productAssigned');
        //     $mail->setParams($params);
        //     $mail->send();
        }
    }
