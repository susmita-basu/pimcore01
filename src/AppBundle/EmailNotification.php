<?php

    namespace AppBundle;
    class EmailNotification{
        public $fileNameMap = [];

        /**
         * @param $templateKey
         * @return mixed|string
         */
        public static function getEmailTemplateId($templateKey){
            $templateId = '';
            $setting = \Pimcore\Model\WebsiteSetting::getByName($templateKey);
            if (!empty($setting)){
                return $setting->getData();
            }
            return $templateId;
        }

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