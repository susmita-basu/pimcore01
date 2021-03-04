<?php
    namespace AppBundle\EventListener;
    use Pimcore\Event\Model\DataObjectEvent;
    use Pimcore\Model\DataObject\Products;

    class TestListener {

        /**
        * @param DataObjectEvent $e
        */
     
        public function onPostUpdate (DataObjectEvent $e) {
       
      
            if ($e->getObject() instanceof Products) {
                $prod = $e->getObject();
                if($prod->getPrice() >1000 ){
                    throw new \Pimcore\Model\Element\ValidationException("Price too high");
                }
            }
        }
    }
