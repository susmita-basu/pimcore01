<?php

namespace AppBundle\Controller;

use Pimcore\Controller\FrontendController;
use Pimcore\Model\DataObject\AbstractObject;
use Pimcore\Model\DataObject\ClassDefinition\Data\UrlSlug;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends FrontendController
{
    public function defaultAction(Request $request)
    {
        //return $this->render('product/default.html.twig', $product);
      
    }
    // public function productDetailSlugAction(Request $request, AbstractObject $object, UrlSlug $urlSlug) {
    //     return $this->forward('App\Controller\ProductController::detailAction', ['product' => $object]);
    // }

}
