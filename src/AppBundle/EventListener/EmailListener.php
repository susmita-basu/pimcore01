<?php
    namespace AppBundle\EventListener;

use AppBundle\EmailNotification;
use Pimcore\Event\Model\DataObjectEvent;
    use Pimcore\Model\DataObject\Products;

    class EmailListener {

        /**
         * @param DataObjectEvent $e
         */

     
        public function onEmailUpdate (DataObjectEvent $e) {
       
      
            $params = array('sku' => '0001100');
 
            //sending the email
            $mail = new \Pimcore\Mail();
            $mail->addTo('susmitbasumallick51@gmail.com');
            $mail->setDocument('\productAssigned');
            $mail->setParams($params);
            $mail->send();
        }

        // /**
        //  * @param EmailNotification $event
        //  */
        // public function sendConfirmationMail(EmailNotification $event)
        // {
            
        //     $order = $event->getEmailTemplateId($templateKey);

        //     $mail = new \Pimcore\Mail();
        //     // $mail->setDocument(Email::getByPath('/' . $this->localeService->getLocale() . '/cat'));
        //     $mail->setDocument('productAssigned');
        //     $mailDocument = $mail->getDocument();
        //     // $mail->setParams([
        //     //     'ordernumber' => $order->getOrdernumber(),
        //     //     'order' => $order
        //     // ]);

        //     $mail->addTo($order->getCustomerEmail());
        //     $mail->send();

        //     $event->setSkipDefaultBehaviour(true);
        // }

        /**
         * @param $templateKey
         * @param $message
         * @throws \Exception
         */

        public static function sendMail($templateKey, $message='',$elementName='',$attachment=array(),$params=array()){
            $getTemplateKey = self::getEmailTemplateId($templateKey);
            if(!empty($getTemplateKey)){
                $mail = new \Pimcore\Mail();
                $mail->setDocument('productAssigned');
                $mailDocument = $mail->getDocument();
            }
            $bodyText = '';
            if($message != ''){
                $bodyText = $message;
            }
            elseif($elementName != ''){
                $document = \Pimcore\Model\Document::getById(6);
                $body = $document->getElement($elementName);
                $bodyText = $body->text;
            }
            $mail->setBodyText($bodyText);
            $mail->send();
         }
    }
