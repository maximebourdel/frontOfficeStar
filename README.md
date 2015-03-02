Symfony frontOfficeStar TUTO à lire
========================

Ces informations sont très importantes en cas de modifications du projet

-----------------

1) Installer le projet
----------------------------------

###  STEP 1 : récupérer le projet

Il est nécesaire d'être dans le répertoire `www` :

    $ cd /var/www

La récupération du projet s'effectue via Github :

     $ git clone https://github.com/votreNomUtilisateurGithub/frontOfficeStar.git

`(Attention si la commande échoue, c'est que vous n'avez pas installé git) lancez :`

    $ apt-get install git

`puis relacez la commande d'avant`

###  STEP 2 : utiliser composer

Une fois le projet récupéré, il est nécessaire d'y inclure les librairies via Composer (un peu comme avec Maven) pour ce faire :

`À lancer dans le répertoire /frontOfficeStar.`

    $ cd frontOfficeStar
    $ curl -s http://getcomposer.org/installer | php

`(Attention si la commande échoue, c'est que vous n'avez pas installé curl) lancez :`

    $ apt-get install curl

`puis relacez la commande d'avant`

Si vous êtes sur un autre système d'exploitation, je vous invite à visiter le site : http://symfony.com/fr/doc/current/book/installation.html#mettre-a-jour-les-vendors


Un fichier composer.phar est maintenant disponible, il n'y a plus qu'à le mettre à jour. Il faut avant cela supprimer les vendors sur le repos (ils sont corrompus) :

    $ rm -r vendor
    
Puis installer la nouvelle version des vendors :
    
    $ php composer.phar update
    
Puis une dernière commande permettant de donner à Symfony les droits d'écriture :

    $ chmod 777 -R /frontOfficeStar

Voilà, votre projet est maintenant disponible via les url :

http://127.0.0.1/frontOfficeStar/web/app_dev.php pour le mode DEV

http://127.0.0.1/frontOfficeStar/web/app.php pour le mode utilisateur

-----------------

2) J'ai des erreurs :(
----------------------------------

Pas de panique, nous avons eu les mêmes.

Pour visualiser les erreurs, il est nécessaire d'aller sur le mode DEV, car le mode utilisateur masque les erreurs ;)


### Failed to write cache file
Cette erreur a lieu quand on lance la commande :

    $ php composer.phar update
    
Il faut simplement redonner les droits d'écriture pour Symfony 

    $ chmod 777 -R frontOfficeStar
    
### Impossible to access a key "0" on an object of class "Doctrine\ODM\MongoDB\LoggableCursor"

Cette erreur diffère des systèmes d'exploitation.

Si vous avez cette erreur, il est nécessaire de se rendre dans le repertoire

    $ frontOfficeStar/src/Star/ChartBundle/Controller/DefaultController.php

Sur certains OS, il y a des conflits avec le curseur MongoDb c'est pourquoi une conversion en `->toArray()` est nécessaire ainsi qu'une consertion des clés via `array_values()` pour toutes les variables appelant :

    $this->get('doctrine_mongodb')

### Impossible to connect to database

C'estune erreur de `.lock` de la base de données. Elle apparait de façon inconnue.
Lancez les commandes :

    $ rm /var/lib/mongodb/mongod.lock
    $ mongod --repair
    $ service mongodb start
    
Attendez 5 secondes et votre BDD sera à nouveau opérationnelle.
    




