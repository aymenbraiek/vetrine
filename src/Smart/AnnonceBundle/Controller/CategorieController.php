<?php

namespace Smart\AnnonceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Smart\AnnonceBundle\Entity\Categorie;
use Smart\AnnonceBundle\Form\CategorieType;
class CategorieController extends Controller
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
    public function indexAction()
    {
    	$ns = 'SmartAnnonceBundle';
    	$entity = 'Categorie';
    	$categories = $this->getEntity($ns, $entity)->findAll();
    	return array('categories'=>$categories);
    }
	/**
     * @Template()
     */
    public function NewAction(Request $request)
    {
    	$categorie= new Categorie ;

		// creation du formulaire grace au classe ArticleType
		$form_ajout = $this -> createForm(new CategorieType(), $categorie);

		//teste si la méthode est POST

		

		if ($request->isMethod('POST'))

		{
			
			$form_ajout->handleRequest($request);
			
			if ($form_ajout->isValid())
			{
				
		
				//creation d'objet d'octrine
				$em=$this->getEntityManager();
				$em->persist($categorie);
		
				$em->flush();
				//$this->get('session')->getFlashBag()->add('info', 'Categories  bien ajouté ('.$Categories->getTitre().').');
				
		
				return $this->redirect($this->generateUrl('index_categorie'));
			
        
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
    	$entity = 'Categorie';
    	$categorie = $this->getEntity($ns, $entity)->findOneBy(array('token'=>$token));

		// creation du formulaire grace au classe ArticleType
		$form_edit = $this -> createForm(new CategorieType(), $categorie);

		//teste si la méthode est POST

		

		if ($request->isMethod('POST'))

		{
			
			$form_edit->handleRequest($request);
			
			if ($form_edit->isValid())
			{
				
		
				//creation d'objet d'octrine
				$em=$this->getEntityManager();
				$em->persist($categorie);
		
				$em->flush();
				//$this->get('session')->getFlashBag()->add('info', 'Categories  bien ajouté ('.$Categories->getTitre().').');
				
		
				return $this->redirect($this->generateUrl('index_categorie'));
			
        
    		}
		}
	
    
    	    	return array('form' => $form_edit->createView(), ); 
	}
    
	
	 
	
	public function DeleteAction()
    {
    	$request = $this->getRequest();
         
        if($request->isXmlHttpRequest()) // pour vérifier la présence d'une requete Ajax
        {
            $id= $request->request->get('id');
             
            if ($id != null)
            {
            	$ns = 'SmartAnnonceBundle';
    	$entity = 'Categorie';
    	$categorie = $this->getEntity($ns, $entity)->find($id);   
                
                 $em=$this->getEntityManager();
				$em->remove($categorie);
		
				$em->flush();        
                
            }
		
        }
		return new  Response('noooo');
    }

}
