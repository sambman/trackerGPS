<?php

namespace GPS\TrackerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Commom\Collections\ArrayCollection;

use GPS\TrackerBundle\Entity\Utilisateur;
use GPS\TrackerBundle\Entity\Appareil;
use GPS\TrackerBundle\Entity\Credential;
use GPS\TrackerBundle\Form\UtilisateurType;
use GPS\TrackerBundle\Form\AppareilType;
use GPS\TrackerBundle\Entity\UtilisateurRepository;
use GPS\TrackerBundle\Entity\AppareilRepository;

class UtilisateurController extends Controller {
    public function indexAction(){
        $user = new Utilisateur();

        //creation de notre formulaire d'inscription
        $form = $this->createForm(new UtilisateurType(), $user);

        $request = $this->getRequest();

        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository("GPSTrackerBundle:Utilisateur");

        if($request->isMethod('POST')){
            $user->setLogin($request->request->get('login'));
            $user->setPassword($request->request->get('password'));

            if($repository->isValidUser($user)!=null){
                $request->getSession()->set('user', $repository->isValidUser($user));
                return $this->redirect($this->generateUrl('user_accueil'));
            }
            else {
                $request->getSession()->getFlashBag()->add('error_connect', 'Le mot de passe ou le login saisis sont incorrects');
            }
        }

        if($request->getSession()->get('user')!=null)
            $request->getSession()->remove('user');

        return $this->render('GPSTrackerBundle:Utilisateur:index.html.twig', array(
            'form'  =>  $form->createView()
        ));
    }

    //fonction qui gere l'accueil du Site
    public function accueilAction(){
        $request = $this->getRequest();
        if($request->getSession()->get('user')==null){
            $request->getSession()->getFlashBag()->add('error_connect', 'Veuillez vous connecter d\'abord SVP');
            return $this->redirect($this->generateUrl('user_index'));
        }

        $appareil = new Appareil();
        //Creation formulaire d'ajout d'un appareil
        $form = $this->createForm(new AppareilType(), $appareil);
        $form->handleRequest($request);

        //Creation de l'objet de type EntityManager
        $em = $this->getDoctrine()->getManager();

        $user = new Utilisateur();
        //recuperation de l'entite du user connecte
        $user = $em->getRepository('GPSTrackerBundle:Utilisateur')
                ->findByLogin($request->getSession()->get('user')->getLogin())[0];

        if($request->isMethod('POST')){
            $appareil = $form->getData();
            $appareil->setUtilisateur($user);

            $user->addAppareil($appareil);
            $em->flush();

            //message de confirmation de l'ajout de l'appareil
            $request->getSession()->getFlashBag()->add('addAppSuccess', 'Votre appareil a été ajouté avec succès');
        }

        //partie responsable de la trace des chemins

        if($request->isXmlHttpRequest()){
            $codeApp = $request->get('codeApp');

            //creation de la requete
            $query = $em->createQuery('SELECT a FROM GPS\TrackerBundle\Entity\Appareil a WHERE a.codeAppareil=:code')
                    ->setParameter('code', $codeApp);
            $appareils = $query->getArrayResult();

            if(count($appareils)==1){
                //requete contenant tous les points occupes par notre appareil GPS
                $points = $em->getRepository('GPSTrackerBundle:Credential')
                        ->findByAppareil($appareils[0]);
                /*$points = $em->createQuery('SELECT c FROM GPS\TrackerBundle\Entity\Credential a WHERE c.appareil=:app')
                        ->setParameter('app', $appareils[0]);*/
                $creds = array();
                for ($i=0; $i < count($points); $i++) {
                    $creds[] = array('lat'=> $points[$i]->getLat(),
                                'lng'=>$points[$i]->getLng()
                            );

                }

                return new JsonResponse(json_encode($creds));
            }
            else {
                return new Response("Erreur de la requete qw", 400);
            }
        }

        return $this->render('GPSTrackerBundle:Utilisateur:accueil.html.twig', array(
            'form'   =>  $form->createView(),
            'appareils'  =>  $user->getAppareils()
        ));
    }

    public function inscriptionAction() {

        $em = $this->getDoctrine()->getManager();
        $user = new Utilisateur();

        $form = $this->createForm(new UtilisateurType(), $user);//creation du formulaire de connexion

        $request = $this->getRequest();

        $form->handleRequest($request);

        $user = $form->getData();
        $em->persist($user);
        $em->flush();

        $request->getSession()->getFlashBag()->add('msg', 'Utilisateur ajouté avec succès');

        return $this->redirect($this->generateUrl('user_index'));
    }
}

 ?>
