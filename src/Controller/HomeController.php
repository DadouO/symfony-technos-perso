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

        // if(empty($projet)){
            // $p1 = new Projet();
            // $p1->setNom("Stack MEAN");
            // $p1->setLiens(array("https://github.com/DadouO/node-back-sf-store","https://github.com/DadouO/angular-sf-store"));
            // $n = $langageRepo->findOneBy(array('nom'=>'node.js'));
            // $a = $langageRepo->findOneBy(array('nom'=>'Angular 8'));
            // $p1->addLangage($n);
            // $p1->addLangage($a);


            // $entityManager->persist($p1);

            // $entityManager->flush();
        // }
        // $entite = $langageRepo->find(1);
        // $entityManager->remove($entite);
        // $entityManager->flush();

        // $entite = $projetRepo->find(1);
        // $entityManager->remove($entite);
        // $entityManager->flush();

        return $this->render('home/index.html.twig', [
            'projets' => $projetRepo->findAll(),
        ]);
    }
}
