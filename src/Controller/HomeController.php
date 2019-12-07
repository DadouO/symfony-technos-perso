<?php

namespace App\Controller;

use App\Entity\Langage;
use App\Entity\Projet;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        $entityManager=$this->getDoctrine()->getManager();
        $projetRepo = $entityManager->getRepository(Projet::class);
        $langageRepo = $entityManager->getRepository(Langage::class);
        $projet = $projetRepo->findAll();

        return $this->render('home/index.html.twig', [
            'projets' => $projetRepo->findAll(),
        ]);
    }
}
