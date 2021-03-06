<?php

namespace App\Controller;

use App\Service\dataService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LangageController extends AbstractController
{
    /**
     * @Route("/", name="langage")
     */
    public function index(dataService $dataser)
    {

        $dataser->setData("langage");


        return $this->render('langage/index.html.twig', [
            "langages" => $dataser->getEntities(),
            'controller_name' => 'LangageController',
        ]);
     }
 
}
