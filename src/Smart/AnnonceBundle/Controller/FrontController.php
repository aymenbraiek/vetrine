<?php

namespace Smart\AnnonceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Smart\AnnonceBundle\Entity\Annonce;
use Smart\AnnonceBundle\Entity\Governorat;
use Smart\AnnonceBundle\Entity\Categorie;
use Smart\AnnonceBundle\Form\RechercheType;
class FrontController extends Controller
{
	
    public function indexAction($page)
    {
    	$em = $this->getDoctrine()->getManager();
    	$annonces = $em->getRepository('SmartAnnonceBundle:Annonce')->getAnnonce(5, $page);
        return $this->render('SmartAnnonceBundle:Front:index.html.twig',array('annonces'=>$annonces,'page' => $page, 'nombrePage' => ceil(count($annonces)/5)));
    }
	
	public function regionAction($page,$id)
    {
    	$em = $this->getDoctrine()->getManager();
    	$annonces = $em->getRepository('SmartAnnonceBundle:Annonce')->getAnnonceByRegion(5, $page,$id);
        return $this->render('SmartAnnonceBundle:Front:region.html.twig',array('annonces'=>$annonces,'page' => $page, 'nombrePage' => ceil(count($annonces)/5)));
    }
	
	public function chowAction($token)
    {
    	$em = $this->getDoctrine()->getManager();
		$annonce = $em->getRepository('SmartAnnonceBundle:Annonce')->findOneBy(array('token'=>$token));
        return $this->render('SmartAnnonceBundle:Front:annonce.html.twig',array('annonce'=>$annonce));
    }
	
	public function offreAction()
    {
    	
    	$form_recherche = $this -> get('form.factory')->create(new RechercheType());

		//teste si la méthode est POST

		$request = $this->get('request');
		
		if ($request->getMethod() == 'POST')

		{
			$categorie = new Categorie;
			$governorat = new Governorat;
			$annonces = new Annonce;
			
				
			$form_recherche->bind($request);
			
			if ($form_recherche->isValid())
			{
				$data= $form_recherche->getData();
				$categorie=$data['categorie'];
				$governorat=$data['governorat'];
				$cle=$data['cle'];
			
				$id_cat= $categorie->getId();
				$id_gov= $governorat->getId();
				
				
				$twig = 'SmartAnnonceBundle:Front:offre.html.twig';
				//creation d'objet d'octrine
				return $this->recherche($cle,$id_gov,$id_cat,$form_recherche,$twig);
				 
				
			}
 		}
	
		$em = $this->getDoctrine()->getManager();
		$annonces = $em->getRepository('SmartAnnonceBundle:Annonce')->findAll();
		
		return $this->render('SmartAnnonceBundle:Front:offre.html.twig', array('annonces'=>$annonces, 'form'=>$form_recherche->createView(),));
	    }


		//fonction de recherche by categories
	public function recherche($cle, $id_gov, $id_cat , $form,  $twig)
	
	{
		
		var_dump($id_gov);var_dump($id_cat);
		$mot=$cle;
		$em = $this->getDoctrine()->getManager();
		if ($mot != NULL and $id_cat =! NULL and $id_gov =! NULL )
		{
			
		$annonces = $em->getRepository('SmartAnnonceBundle:Annonce')->rechercheAvance($mot,$id_cat,$id_gov);
		var_dump($annonce);
		return $this->render($twig, array('annonces'=>$annonces, 'form'=>$form->createView(),));
			
		}
	elseif($mot == NULL and $id_cat =! NULL and $id_gov =! NULL) {
			var_dump($id_gov);var_dump($id_cat);
		$annonces = $em->getRepository('SmartAnnonceBundle:Annonce')->findByCategorieAndGovernorat($id_cat,$id_gov);
		
		return $this->render($twig, array('annonces'=>$annonces, 'form'=>$form->createView(),));
		}
	elseif($mot == NULL and $id_cat == NULL and $id_gov =! NULL) {
			
		$annonces = $em->getRepository('SmartAnnonceBundle:Annonce')->findByGovernorat($id_gov);
		
		return $this->render($twig, array('annonces'=>$annonces, 'form'=>$form->createView(),));
		}
	elseif($mot == NULL and $id_cat =! NULL and $id_gov == NULL) {
			
		$annonces = $em->getRepository('SmartAnnonceBundle:Annonce')->findByCategorie($id_cat);
		
		return $this->render($twig, array('annonces'=>$annonces, 'form'=>$form->createView(),));
		}
	elseif($mot =! NULL and $id_cat =! NULL and $id_gov == NULL) {
			
		$annonces = $em->getRepository('SmartAnnonceBundle:Annonce')->findByCategorieAndMot($id_cat,$mot);
		
		return $this->render($twig, array('annonces'=>$annonces, 'form'=>$form->createView(),));
		}
	elseif($mot =! NULL and $id_cat == NULL and $id_gov == NULL) {
			
		$annonces = $em->getRepository('SmartAnnonceBundle:Annonce')->findByMot($mot);
		
		return $this->render($twig, array('annonces'=>$annonces, 'form'=>$form->createView(),));
		}
	else{
		$annonces = $em->getRepository('SmartAnnonceBundle:Annonce')->findAll();
		
		return $this->render($twig, array('annonces'=>$annonces, 'form'=>$form->createView(),));
	}
		
		
	}
}
