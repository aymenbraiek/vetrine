<?php

namespace Smart\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Smart\UserBundle\Form\UserType;
use Symfony\Component\HttpFoundation\Request;
use Smart\AnnonceBundle\Entity\Annonce;
use Smart\AnnonceBundle\Form\AnnonceInsertType;
class MembreController extends Controller
{
    public function compteAction()
    {
    	if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
		
		
        return $this->render('SmartUserBundle:Membre:index.html.twig');
		}		
	else {
				return $this->redirect( $this->generateUrl('fos_user_security_login') ); 
		 }
    }
	   public function editAction($salt,Request $request)
    {
    	if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
			
			$em = $this->getDoctrine()->getManager();
			$user = $em->getRepository('SmartUserBundle:User')->findOneBy(array('salt'=>$salt));
			$form_edit = $this -> createForm(new UserType(), $user);
			if ($request->isMethod('POST'))
			{
				$form_edit->handleRequest($request);
					if ($form_edit->isValid())
					{
						$em->persist($user);
						$em->flush();
						return $this->redirect($this->generateUrl('index_membre'));
					}
					}
        	return $this->render('SmartUserBundle:Membre:edit.html.twig',array('form'=>$form_edit->createView(),'user'=>$user));
		}
		else {
				return $this->redirect( $this->generateUrl('fos_user_security_login') ); 
			}
    }
	   public function annonceAction()
    {
    	if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
    	$em = $this->getDoctrine()->getManager();
		$annonces = $em->getRepository('SmartAnnonceBundle:Annonce')->findByUser($this->getUser());
		
        return $this->render('SmartUserBundle:Membre:annonce.html.twig',array('annonces'=>$annonces));
	}
		else {
				return $this->redirect( $this->generateUrl('fos_user_security_login') ); 
			}
    }
	   public function newannonceAction(Request $request)
    {
    	if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
		
		$annonce= new Annonce ;

		// creation du formulaire grace au classe ArticleType
		$form_ajout = $this -> createForm(new AnnonceInsertType(), $annonce);

		//teste si la méthode est POST

		

		if ($request->isMethod('POST'))

		{
			
			$form_ajout->handleRequest($request);
			
			if ($form_ajout->isValid())
			{
				
				$annonce->setUser($this->getUser());
				//creation d'objet d'octrine
				$em=$this->getDoctrine()->getManager();
			    $em->persist($annonce);
		
				$em->flush();
				//$this->get('session')->getFlashBag()->add('info', 'Categories  bien ajouté ('.$Categories->getTitre().').');
				
			
				return $this->redirect($this->generateUrl('front_annonce_detail',array('token'=>$annonce->getToken())));
			
        
    		}
		}
		
        return $this->render('SmartUserBundle:Membre:new.html.twig',array('form'=>$form_ajout->createView()));
		
		
		}
		else {
				return $this->redirect( $this->generateUrl('fos_user_security_login') ); 
			}
    }
	   public function editannoncection()
    {
    	if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
		
        return $this->render('SmartUserBundle:Membre:index.html.twig');
        }
		else {
				return $this->redirect( $this->generateUrl('fos_user_security_login') ); 
			}
    }
	   public function deleteannoncection()
    {
    	if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
		
        return $this->render('SmartUserBundle:Membre:index.html.twig');
        }
		else {
				return $this->redirect( $this->generateUrl('fos_user_security_login') ); 
			}
    }
}
