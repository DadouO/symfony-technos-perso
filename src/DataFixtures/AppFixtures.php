<?php

namespace App\DataFixtures;

use App\Entity\Langage;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $back = array("node.js", "Java", "Python", "PHP", "Kotlin");
        $front=array("Angular 8", "React", "JavaScript", "HTML5", "CSS3");
        $bd=array("MYSQL","Oracle","PL/SQL","SPARQL","MongoDB");

        // for($count = 0; $count<10; $count++)
        // {
        // $titre = "Titre Fixture";
        // $description = "Description Fixture";
        // $note = mt_rand(1,5);

        // $book = new Book();
        // $book->setTitre($titre);
        // $book->setDescription($description);
        // $book->setNote($note);

        // $manager->persist($book);
        
        // }

        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }

    public function tab(array $arr, String $t){
        for($count = 0; $count<count($arr); $count++)
        {
        $nom = $arr[$count];
        $type= $t;

        $langage = new langage();
        $langage->setNom($nom);
        $langage->setType($type);

        $manager->persist($langage);
        
        }
    }
}
