<?php

namespace Meldon\CatalogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MeldonCatalogBundle:Default:index.html.twig');
    }
}
