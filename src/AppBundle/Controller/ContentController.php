<?php

namespace AppBundle\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;

class ContentController extends FrontendController
{
    public function defaultAction(Request $request)
    {

    }
    public function productAction(Request $request)
    {
        // $prod = new \Pimcore\Model\DataObject\Products\Listing();

        // $this->view->product = $prod;
    }
    
}