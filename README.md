Symfony frontOfficeStar TUTO à lire
========================

Ces informations sont très importantes en cas de modifications du projet

-----------------

1) Installer le projet
----------------------------------

###  STEP 1 : récupérer le projet

Il est nécesaire d'être dans le répertoire `www` :

    cd /var/www

La récupération du projet s'effectue via Github :

     git clone https://github.com/votreNomUtilisateurGithub/frontOfficeStar.git

`(Attention si la commande échoue, c'est que vous n'avez pas installé git) lancez :`

    sudo apt-get install git

`puis relacez la commande d'avant`

###  STEP 2 utilisez composer

Une fois le projet récupéré, il est nécessaire d'y inclure les librairies via Composer (un peu comme avec Maven) pour ce faire :

`À lancer dans le répertoire /frontOfficeStar.`

    cd frontOfficeStar
    curl -s http://getcomposer.org/installer | php

`(Attention si la commande échoue, c'est que vous n'avez pas installé curl) lancez :`

    sudo apt-get install curl

`puis relacez la commande d'avant`

Si vous êtes sur un autre système d'exploitation, je vous invite à visiter le site : http://symfony.com/fr/doc/current/book/installation.html#mettre-a-jour-les-vendors


Un fichier composer.phar est maintenant disponible, il n'y a plus qu'à le mettre à jour. Il faut avant cela supprimer les vendors sur le repos (ils sont corrompus) :

    rm -r vendor
    
Puis installer la nouvelle version des vendors :
    
    php composer.phar update
    
Puis une dernière commande permettant de donner à Symfony les droits d'écriture :

    chmod 777 -R /frontOfficeStar

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

    php composer.phar update
    
Il faut simplement redonner les droits d'écriture pour Symfony 

    chmod 777 -R frontOfficeStar
    
### Impossible to access a key "0" on an object of class "Doctrine\ODM\MongoDB\LoggableCursor"

Cette erreur diffère des systèmes d'exploitation.

Si vous avez cette erreur, il est nécessaire de se rendre dans le repertoire

    frontOfficeStar/src/Star/ChartBundle/Controller/DefaultController.php
    
Remplacez-la methode `indexAction` par la suivante :

    /**
     * page d'accueil
     * 
     * @param Request $request            
     */
    public function indexAction (Request $request)
    {
        $post = Request::createFromGlobals();
        
        //si c'est le formulaire ligne_submit qui a ete renvoye
        if ($post->request->has('ligne_submit')) {
            return $this->redirect($this->generateUrl('star_chart_showLigne', 
                    array(
                        'id_ligne' => $request->get('ligne_id_ligne'), 
                        'direction' => $request->get('ligne_direction')
                    )
            ));
        //si c'est le formulaire arret_submit qui a ete renvoye
        } if ($post->request->has('arret_submit')) {
            return $this->redirect($this->generateUrl('star_chart_showArret', 
                    array(
                        'id_arret' => $request->get('arret_id_arret'), 
                    )
            ));
        //si c'est le formulaire ligne_arret qui a ete renvoye
        } if ($post->request->has('ligne_arret_submit')) {
            return $this->redirect($this->generateUrl('star_chart_showLigneArret', 
                    array(
                        'id_ligne' => $request->get('ligne_arret_id_ligne'),
                        'id_arret' => $request->get('ligne_arret_id_arret'),
                    )
            ));
        }
         
        // recupere le GTFS ligne
        $lignes = $this->get('doctrine_mongodb')
            ->getRepository('StarChartBundle:ligne')
            ->findAll()->toArray();
        
        // recupere le GTFS arret
        $arrets = $this->get('doctrine_mongodb')
            ->getRepository('StarChartBundle:arret')
            ->findBy(array(), array('name' => 'ASC'))->toArray();
        
        return $this->render('StarChartBundle:Default:index.html.twig', 
                array(
                    
                    'arrets' => array_values($arrets),
                    'lignes' => array_values($lignes)
                ));
    }

Sur certains OS, il y a des conflits avec le curseur MongoDb c'est pourquoi une conversion en `->toArray()` est nécessaire ainsi qu'une consertion des clés via `array_values()`.




