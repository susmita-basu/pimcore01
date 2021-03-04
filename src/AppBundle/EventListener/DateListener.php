<?php
    namespace AppBundle\EventListener;

    use Pimcore\Event\Model\DataObjectEvent;
    use Pimcore\Model\DataObject\Products;

    class DateListener{

        public function getDate(DataObjectEvent $d){
            if ($d->getObject() instanceof products) {
                $product = $d->getObject();
                if ($product->getStartDate() >= date("Y-m-d")) {
                    throw new \Pimcore\Model\Element\ValidationException("Start date should not be less than current date");
                }
            }
            
            if ($d->getObject() instanceof products) {
                $product = $d->getObject();
                if (($product->getEndDate() < $product->getStartDate()) && ($product->getEndDate() != NULL )) {
                    throw new \Pimcore\Model\Element\ValidationException("End date should be greater than start date");
                }
            }
	
        }
    }