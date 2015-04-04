<?php

namespace Smart\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Smart\UserBundle\Entity\User;
use Symfony\Component\HttpFoundation\Response;
use Smart\UserBundle\Form\EditFormType;
use Smart\UserBundle\Form\UserType;
use Symfony\Component\HttpFoundation\Request;
class UserController extends Controller
{
   public function indexmembreAction($page)
	{
				$em = $this->getDoctrine()->getManager();
				$role = 'ROLE_MEMBRE';
				$users = $em->getRepository('SmartUserBundle:User')->getUserByRole($role,5,$page);
				return $this->render('SmartUserBundle:User:index_membre.html.twig', array('users'=>$users,'page' => $page, 'nombrePage' => ceil(count($users)/5)));
    
    
	}
	public function indexadminAction($page)
	{
				$em = $this->getDoctrine()->getManager();
				$role = 'ROLE_ADMIN';
				$users = $em->getRepository('SmartUserBundle:User')->getUserByRole($role,5,$page);
				return $this->render('SmartUserBundle:User:index_admin.html.twig', array('users'=>$users,'page' => $page, 'nombrePage' => ceil(count($users)/5)));
    
    
	}
	public function activeAction($salt)
	{
				$em = $this->getDoctrine()->getManager();
					$user = $em->getRepository('SmartUserBundle:User')->findOneBy(array('salt'=>$salt));
					$user->setEnabled(TRUE); 
					$em->persist($user);
					$em->flush();		
					return $this->redirect( $this->generateUrl('index_user') );    
	}
	
	public function desactiveAction($salt)
	{
					$em = $this->getDoctrine()->getManager();
					$user = $em->getRepository('SmartUserBundle:User')->findOneBy(array('salt'=>$salt));;
					$user->setEnabled(FALSE); 
					
					$em->persist($user);
					$em->flush();				
					return $this->redirect( $this->generateUrl('index_user') );    
	}

	public function roleadminAction($salt)
	{
					$em = $this->getDoctrine()->getManager();
					$user = $em->getRepository('SmartUserBundle:User')->findOneBy(array('salt'=>$salt));
					$role = array('ROLE_ADMIN');
					$user->setRoles($role); 
					
					$em->persist($user);
					$em->flush();				
					return $this->redirect( $this->generateUrl('index_user_admin') );    
	}
	public function roleuserAction($salt)
	{
					$em = $this->getDoctrine()->getManager();
					$user = $em->getRepository('SmartUserBundle:User')->findOneBy(array('salt'=>$salt));
					$role = array("1"=>'ROLE_MEMBRE');
					$user->setRoles($role); 
					
					$em->persist($user);
					$em->flush();				
					return $this->redirect( $this->generateUrl('index_user_membre') );    
	}
	public function deleteAction()
	{
		$request = $this->getRequest();
         
        if($request->isXmlHttpRequest()) // pour vérifier la présence d'une requete Ajax
        {
            $id= $request->request->get('id');
             
            if ($id != null)
            {
            	$em = $this->getDoctrine()->getManager();
				
		    	$user= $em->getRepository('SmartUserBundle:User')->find($id);   
		                
		                
						$em->remove($user);
				
						$em->flush();        
		                
            }
		
        }
		
		return new  Response('noooo');  
	}
	
		public function editAction($salt,Request $request)
	{
		
		$em = $this->getDoctrine()->getManager();
		
    	$user = $em->getRepository('SmartUserBundle:User')->findOneBy(array('salt'=>$salt));

		// creation du formulaire grace au classe ArticleType
		$form_edit = $this -> createForm(new UserType(), $user);

		//teste si la méthode est POST

		

		if ($request->isMethod('POST'))

		{
			
			$form_edit->handleRequest($request);
			
			if ($form_edit->isValid())
			{
				
		
				//creation d'objet d'octrine
				
				$em->persist($user);
		
				$em->flush();
				//$this->get('session')->getFlashBag()->add('info', 'Categories  bien ajouté ('.$Categories->getTitre().').');
				
		
				return $this->redirect($this->generateUrl('index_user_admin'));
			
        
    		}
		}
	
    
    	    	return $this->render('SmartUserBundle:User:edit.html.twig',array('form' => $form_edit->createView(),'user'=>$user )); 
	}
	
	
	public function chowAction($salt)
	{
				$em = $this->getDoctrine()->getManager();
				
				$user = $em->getRepository('SmartUserBundle:User')->findOneBy(array('salt'=>$salt));
				return $this->render('SmartUserBundle:User:chow.html.twig', array('user'=>$user));
    
    
	}
}



