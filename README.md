# symfony-technos-perso

Site de présentation personnelle de langages et projets informatiques.

## Déploiement

### Prerequis

    php >= v7.3.0
    symfony 4
    
### Installation

    composer install
    php bin/console doctrine:database:create # le .env est configuré pour gérer une bdd sqlite simple
    
    Deux migrations à la suite :
    1.
    php bin/console doctrine:migrations:migrate 20191206141047
    php bin/console doctrine:fixtures:load --group=AppFixtures
    
    2.
    php bin/console doctrine:migrations:migrate 20191208111400
    ./bin/console doctrine:fixtures:load --append --group=MeetupFixtures

    # car une bdd est utilisée
    
### Démarrer un server de dev local 
    
Depuis Symfony 5, pour démarrer un server de dev local, il est nécessaire d'installer l'exécutable symfony ( marche à suivre ici : https://symfony.com/download )
      
Une fois ceci installé, exécuter depuis la racine du projet un simple
    
    symfony server:start

## Utilisation

Sur la branche master, trois pages sont disponibles :
    "/" qui correspond à mes langages favoris
    "/projet" qui correspond à mes projets fullStack avec liens github
    "/meetup" qui correspond aux meetups de Montpellier auxquels j'assiste
