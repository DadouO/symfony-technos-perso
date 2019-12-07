<?php

namespace App\Controller;

use App\Service\dataService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjetController extends AbstractController
{
    /**
     * @Route("/projet", name="projet")
     */
    public function index(dataService $dataser)
    {
        $dataser->setData("projet");

        return $this->render('projet/index.html.twig', [
            "projets" => $dataser->getEntities(),
            'controller_name' => 'ProjetController',
        ]);
    }
}
