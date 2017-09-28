<?php

namespace FileBundle\Controller;

use AppBundle\Entity\Category;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/list/categories", name="category")
     */
    public function categoryAction(Request $request)
    {
       $categories = $this->getDoctrine()
       ->getRepository(Category::class)
       ->findByOrder();
        // replace this example code with whatever you need
        return $this->render('AppBundle:Default:index.html.twig', 
            ['categories' => $categories]);

    }
}
