<?php

namespace tp\examBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use  tp\examBundle\Entity\tache;
use Doctrine\ORM\EntityRepository;
use Symfony\component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }
     
    
   
        /**
     * @Route("/listtaches",name="list")
     * @Template()
     */
    public function listtachesAction()
   {
       $tache=$this->getDoctrine()->getRepository("tpexamBundle:tache")->findByPT(new \DateTime());
       return array('tache' => $tache);
    }
        /**
     * @Route("/listunetache/{id}",name="listune")
     * @Template()
     */
    public function listunetacheAction($id)
       {
        $tache=new tache();
       $tache->getId($id);
              $tache=$this->getDoctrine()->getRepository("tpexamBundle:tache")->find($id);
                    
       return array('tache' => $tache);
    }
    
    
       /**
     * @Route("/newtache",name="ajoutertache")
     * @Template()
     */
     public function newtacheAction(Request $request)
    {
        
           $p=new tache();
          $form=$this->createFormBuilder($p)
                ->add('intitule','text')
                ->add('description','textarea')
                   ->add('date','datetime')
                   ->add('Valider','submit')
                 ->add('Retour','button')
                
                ->getForm();
        
         $form->handleRequest($request);
        if ($form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($p);
            $em->flush();
                return  $this->redirect($this->generateUrl("list"));
                   }
        return array('form' => $form->createView());
                      }
    
    
    
}
