<?php
/**
 * @var \Pimcore\Templating\PhpEngine $this
 * @var \Pimcore\Templating\PhpEngine $view
 * @var \Pimcore\Templating\GlobalVariables $app
 */


?>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>


    <div id="product">
        <?php
            $prod = new \Pimcore\Model\DataObject\Products\Listing();
            foreach($prod as $products) 
            {
                $prod = $this->relation('products')->getElement();?>
                <table>
                    <tr>
                        <td><?= $products->getSKU(); ?></td>
                        <td><?= $products->getName(); ?></td>
                        <td><?= $products->getDescription(); ?></td>
                        <td><?= $products->getPrice(); ?></td>
                        <td><?= $products->getGender(); ?></td>
                        <td><?= $products->getTest(); ?></td>
                        <td><?= $products->getMadeIn(); ?></td>
                        <td><?= $products->getFabric(); ?></td>
                        <td><?= $products->getBrand(); ?></td>
                        <td><?= $products->getSize(); ?></td>
                        <td><?= $products->getDiscount(); ?></td>
                        <td><?= $products->getLanguageKnown(); ?></td>
                    </tr>
                </table>
                
    
    
            <?php } ?>
    
    </div>
