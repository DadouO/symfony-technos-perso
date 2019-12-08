<?php

namespace App\DataFixtures;

use App\Entity\Meetups;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $m)
    {
        $p1 = new Meetups();
        $p1->setNom("JUG Montpellier");
        $p1->setLien("https://www.jug-montpellier.org/");
        $m->persist($p1);

        $p2 = new Meetups();
        $p2->setNom("Montpellier JS");
        $p2->setLien("https://www.meetup.com/fr-FR/MontpellierJS/");
        $m->persist($p2);

        $p3 = new Meetups();
        $p3->setNom("Sunny Tech");
        $p3->setLien("https://sunny-tech.io/");
        $m->persist($p3);

        $p4 = new Meetups();
        $p4->setNom("MTH: le hub des Meetups");
        $p4->setLien("https://www.montpellier-techhub.org/");
        $m->persist($p4);


        $m->flush();
    }

}