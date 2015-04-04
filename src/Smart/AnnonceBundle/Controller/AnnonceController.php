<?php

namespace Smart\AnnonceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Smart\AnnonceBundle\Entity\Annonce;
use Smart\AnnonceBundle\Form\AnnonceInsertType;
class AnnonceController extends Controller
{
	// fonction pour recupérer directement entity manager
	public function getEntityManager()
	{
		return $this->getDoctrine()->getManager();
	}
	// fonction pour recuperer l'entité a la base du donnée
	public function getEntity($namespace,$entity)
	{
		$em = $this->getEntityManager();
		$result = $em->getRepository(''.$namespace.':'.$entity.'');
		return $result;
	}
	/**
     * @Template()
     */
    public function indexAction($page)
    {
    	
    	
		$ns = 'SmartAnnonceBundle';
    	$entity = 'Annonce';
    	$annonces = $this->getEntity($ns, $entity)->getAnnonce(5, $page);
    	return array('annonces'=>$annonces,'page' => $page, 'nombrePage' => ceil(count($annonces)/5));
    }
	/**
     * @Template()
     */
    public function newAction(Request $request)
    {
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
				$em=$this->getEntityManager();
				$em->persist($annonce);
		
				$em->flush();
				//$this->get('session')->getFlashBag()->add('info', 'Categories  bien ajouté ('.$Categories->getTitre().').');
				
		
				return $this->redirect($this->generateUrl('index_annonce'));
			
        
    		}
		}
	
    
    	    	return array('form' => $form_ajout->createView(), );
    }
	/**
     * @Template()
     */
    public function EditAction(Request $request, $token)
    {
    	$ns = 'SmartAnnonceBundle';
    	$entity = 'Annonce';
    	$annonce = $this->getEntity($ns, $entity)->findOneBy(array('token'=>$token));

		// creation du formulaire grace au classe ArticleType
		$form_edit = $this -> createForm(new AnnonceInsertType(), $annonce);

		//teste si la méthode est POST

		

		if ($request->isMethod('POST'))

		{
			
			$form_edit->handleRequest($request);
			
			if ($form_edit->isValid())
			{
				
		
				//creation d'objet d'octrine
				$em=$this->getEntityManager();
				$em->persist($annonce);
		
				$em->flush();
				//$this->get('session')->getFlashBag()->add('info', 'Categories  bien ajouté ('.$Categories->getTitre().').');
				
		
				return $this->redirect($this->generateUrl('index_annonce'));
			
        
    		}
		}
	
    
    	    	return array('form' => $form_edit->createView(), ); 
    }
	/**
     * @Template()
     */
    public function deleteAction()
    {
    	$request = $this->getRequest();
         
        if($request->isXmlHttpRequest()) // pour vérifier la présence d'une requete Ajax
        {
            $id= $request->request->get('id');
             
            if ($id != null)
            {
            	$ns = 'SmartAnnonceBundle';
    			$entity = 'Annonce';
		    	$annonce = $this->getEntity($ns, $entity)->find($id);   
		                
		                $em=$this->getEntityManager();
						$em->remove($annonce);
				
						$em->flush();        
		                
            }
		
        }
		return new  Response('noooo');
    }

   
	/**
     * @Template()
     */
    public function chowAction($token)
	{
		$ns = 'SmartAnnonceBundle';
    	$entity = 'Annonce';
    	$annonce = $this->getEntity($ns, $entity)->findOneBy(array('token'=>$token));
    	return array('annonce'=>$annonce);
    }

}
