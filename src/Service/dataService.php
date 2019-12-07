<?php

namespace App\Service;

use App\Entity\Projet;
use App\Entity\Langage;
use App\Repository\ProjetRepository;
use App\Repository\LangageRepository;
use Doctrine\ORM\EntityManagerInterface;

/**
 * Class dataService
 *
 * Le but de ce service est de récupérer depuis la base de données
 * - les langages
 * - les projets
 *
 * @package App\Service
 */

Class dataService{
        /** @var EntityManagerInterface */
        private $em;


    /** @var string */
    private $data; // stocke l'entité qu'on veut interroger


    /**
     * statsService constructor.
     * @param EntityManagerInterface $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @return EntityManagerInterface
     */
    public function getEm(): EntityManagerInterface
    {
        return $this->em;
    }

    /**
     * @return string
     */
    public function getData(): string
    {
        return $this->data;
    }

    /**
     * @param string $data
     * @return dataService
     */
    public function setData(string $data): dataService
    {
        $this->data = $data;
        return $this;
    }

    // public function getEntities(): Entity 
    public function getEntities()
    {
        if($this->getData() == "langage") {
            return $this->getEm()->getRepository(Langage::class)->findAll();
        }
        if($this->getData() == "projet") {
            return $this->getEm()->getRepository(Projet::class)->findAll();
        }
    }



}