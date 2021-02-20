<?php

namespace AppBundle\Command;

use Pimcore;
use Pimcore\Console\AbstractCommand;
use Pimcore\Console\Dumper;
use Pimcore\Model\Asset\MetaData\ClassDefinition\Data\Asset;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\ImportFile;


class ImportCommand extends AbstractCommand
{
    protected function configure()
    {
        $this
            ->setName('import')
            ->setDescription('add new material');
            
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|null|void
     * @throws \Exception
     */

    protected function execute(InputInterface $input, OutputInterface $output)
    {

    
    	$object = new \Pimcore\Model\DataObject\ImportFile\Listing();
        $object->setCondition('name = ?', 'Products');
        $object->setLimit(1);
            foreach ($object as $path) {
                //p_r($path);
                //die;
                $file = $path->getFile();
                $file=(PIMCORE_PROJECT_ROOT . '/web/var/assets' .$file->getPath().$file->getFilename());
                $json = file_get_contents($file);
            	$data = json_decode($json);
                //p_r($data);
                //die;
         	
            }
            foreach ($data as $prod){
            	//p_r($data);
                //die;
                $object = new Pimcore\Model\DataObject\Products();
                $category = new Pimcore\Model\DataObject\Category\Listing();
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
                $startDate = \Carbon\Carbon::parse($prod->date);
                $object->setWarranty(new DataObject\Data\QuantityValue($prod->warranty,$prod->months));
                $object->setAvailableFrom($startDate);
                if($object->getName() == 'Shirt'){
                
                    $objBrick = new DataObject\Objectbrick\Data\Shirt($object);
                    $objBrick->setSleeves($prod->sleeves);
                    $objBrick->setSuitableFor($prod->suitable);
                    $object->getClassification()->setShirt($objBrick);
                }
                elseif($object->getName() == 'Kurti'){
                    $Brick = new DataObject\Objectbrick\Data\Kurti($object);
                    $Brick->setNeck($prod->neck);
                    $Brick->setLength($prod->length);
                    $Brick->setSleeves($prod->sleeves);
                    $object->getClassification ()->setKurti($Brick);
                }
                $image = \Pimcore\Model\Asset\Image::getByPath($prod->image);
                $object->setProductImage($image);
                $object->save();
                
                }
           
            
            $this->dump('saved');
       }
}