<?php

namespace App\DataFixtures;

use App\Entity\Langage;
use App\Entity\Projet;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{

    // function tab(array $arr, String $t, ObjectManager $m){
    //     for($count = 0; $count<count($arr); $count++)
    //     {
    //     $nom = $arr[$count];
    //     $type= $t;

    //     $langage = new langage();
    //     $langage->setNom($nom);
    //     $langage->setType($type);

    //     $m->persist($langage);
        
    //     }
    // }

    public function load(ObjectManager $m)
    {

        $back = array("node.js", "Java", "Python", "PHP", "Kotlin");
        $front=array("Angular 8", "React", "JavaScript", "HTML5", "CSS3");
        $bd=array("MYSQL","Oracle","PL/SQL","SPARQL","MongoDB");
        // $pnom=array()
        // https://github.com/claimskg/claimskg-statistical-observatory
        // tab($back,"Backend");
        // tab($front,"Frontend");
        // tab($bd,"Base de données");

        $p1 = new Projet();
        $p1->setNom("Stack MEAN");
        $p1->setLiens(array("https://github.com/DadouO/node-back-sf-store","https://github.com/DadouO/angular-sf-store"));
        $m->persist($p1);

        $p2 = new Projet();
        $p2->setNom("Python");
        $p2->setLiens(array("https://github.com/claimskg/claimskg-statistical-observatory"));
        $m->persist($p2);

        $p3 = new Projet();
        $p3->setNom("Stack MERN");
        $p3->setLiens(array("https://github.com/DadouO/node-back-sf-store","https://github.com/DadouO/react-sf-store"));
        $m->persist($p3);

        $p4 = new Projet();
        $p4->setNom("Symfony");
        $p4->setLiens(array("https://github.com/DadouO/symfony-technos-perso"));
        $m->persist($p4);

            for($count = 0; $count<count($back); $count++)
            {
            $nom = $back[$count];
            $type= "Backend";
    
            $langage = new langage();
            $langage->setNom($nom);
            $langage->setType($type);
    
            if($nom=="node.js"){
                $langage->setProjet($p1);
            }
            if($nom=="Python"){
                $langage->setProjet($p2);
            }
            if($nom=="PHP"){
                $langage->setProjet($p4);
            }
            $m->persist($langage);
            
            }
        
            for($count = 0; $count<count($front); $count++)
            {
            $nom = $front[$count];
            $type= "Frontend";
    
            $langage = new langage();
            $langage->setNom($nom);
            $langage->setType($type);
    
            if($nom=="Angular 8"){
                $langage->setProjet($p1);
            }
            if($nom=="React"){
                $langage->setProjet($p3);
            }
            $m->persist($langage);
            
            }

            for($count = 0; $count<count($bd); $count++)
            {
            $nom = $bd[$count];
            $type= "Base de données";
    
            $langage = new langage();
            $langage->setNom($nom);
            $langage->setType($type);

            if($nom=="MongoDB"){
                $langage->setProjet($p1);
            }
            if($nom=="SPARQL"){
                $langage->setProjet($p2);
            }
            $m->persist($langage);
            
            }

          
            // $p1

        $m->flush();
    }


}
