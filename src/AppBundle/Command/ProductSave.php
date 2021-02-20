<?php
namespace AppBundle\Command;

use Pimcore;
use Pimcore\Console\AbstractCommand;
use Pimcore\Console\Dumper;
use Pimcore\Model\Asset\MetaData\ClassDefinition\Data\Asset;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Pimcore\Model\DataObject;
use Symfony\Component\Console\Input\InputOption;

class ProductSave extends AbstractCommand
{
    /**
     * Configure command
     */
    protected function configure()
    {
        $this
            ->setName('productdata')
            ->setDescription('Saves data for Product class')
            ->setHelp('This command saves data manually for Product class and creates Object')
            ->addOption('file', 'f', InputOption::VALUE_REQUIRED, 'xyz');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|null|void
     * @throws \Exception
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $object = new Pimcore\Model\DataObject\Products();
        $category = new Pimcore\Model\DataObject\Category\Listing();
        // $category->setCondition("name = ?", 'Shirt');
        // $category->addConditionParam("description = ?", 'description');
        // $category->setLimit(1);
    
            // foreach($category as $entry){
            //     return $entry;
            //     // p_r($entry); 
            //     // die;
            // }

            // foreach($category as $entry){
            //     $object->setCategory($entry);   
            //    }
            
            $path = $input->getOptions()['file'];
            $json = file_get_contents($path);
            $data = json_decode($json);
            foreach ($data as $prod){

/////////////////// Passing data through json file ////////////////////////////

            
            $object->setKey($prod->key);
            $object->setParentId(8);
            $object->setPublished(true);
            $category->setCondition('name = ?', $prod->category);
            $category->setLimit(1);
            foreach ($category as $cat) {
                $object->setCategory($cat);
            }
            $object->setName($prod->name);
            $object->setSku($prod->sku);
            $t = new \Pimcore\Model\DataObject\Data\RgbaColor();
            $t->setRgba($prod->color);
            $object->setColors($t);
            $object->setPrice($prod->price);
            $object->setGender($prod->gender);
            $object->setTest([$prod->test]);
            $object->setMadeIn($prod->madeIn);
            $object->setFabric($prod->fabric);
            $object->setBrand($prod->brand);
            $object->setSize($prod->size);
            $object->setDiscount($prod->discount);
            $object->setLanguageKnown('bn');
            $object->setDescription($prod->description);
            $startDate = \Carbon\Carbon::parse('2020-02-02');
            $object->setAvailableFrom($startDate);
            // $object->setAvailableFrom($prod->date);
            //$a = new \Pimcore\Model\Asset\Image();
            $image = \Pimcore\Model\Asset\Image::getByPath($prod->image);
            $object->setProductImage($image);
            $object->setWarranty(new DataObject\Data\QuantityValue($prod->warranty,$prod->months));

///////////////////// Object brick code  //////////////////////////////
            if($object->getName() == 'Shirt'){
                
                $objBrick = new DataObject\Objectbrick\Data\Shirt($object);
                $objBrick->setSleeves($prod->sleeves);
                $objBrick->setSuitableFor($prod->suitable);
                $object->getClassification()->setShirt($objBrick);
                // p_r($objBrick);
                // $objBrick = new DataObject\Objectbrick\Data\Shirt($object);
                // $objBrick->setSuitableFor($prod->suitable);
                // $object->getClassification ()->setShirt($objBrick);
            }
            elseif($object->getName() == 'Kurti'){
                $Brick = new DataObject\Objectbrick\Data\Kurti($object);
                $Brick->setNeck($prod->neck);
                $object->getClassification ()->setKurti($Brick);
            }
            
            
            $object->save();

        }
        
    }
}