<?php

namespace App\Controller;

use App\Service\dataService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MeetupController extends AbstractController
{
    /**
     * @Route("/meetup", name="meetup")
     */
    public function index(dataService $dataser)
    {
        $dataser->setData("meetup");

        return $this->render('meetup/index.html.twig', [
            "meetups" => $dataser->getEntities(),
            'controller_name' => 'MeetupController',
        ]);
    }
}
