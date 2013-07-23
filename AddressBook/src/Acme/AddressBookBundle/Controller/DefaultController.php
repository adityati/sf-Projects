<?php

namespace Acme\AddressBookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\AddressBookBundle\Form\AddressBookType;
use Symfony\Component\HttpFoundation\Request;
use Acme\AddressBookBundle\Entity\AddressBook;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeAddressBookBundle:Default:index.html.twig');
    }
    
    public function addaddressAction()
    {
         $request = $this->get('request');
         $addressbook = new AddressBook();
         $oForm = $this->createForm(new AddressBookType(),$addressbook);
        
         if ($request->isMethod('POST')) 
         {
            $oForm->submit($request->get('acme_addressbookbundle_addressbooktype')); 
           
            $oEM = $this->getDoctrine()->getManager();
            $oEM->persist($addressbook);
            $oEM->flush();
            $this->get('session')->getFlashBag()->set('notice', ' Your Address is Saved!');
             
            return $this->redirect($this->generateUrl('acme_address_book_homepage'));
                     
         }
         return $this->render('AcmeAddressBookBundle:Default:addaddress.html.twig',array('oForm' => $oForm->createView()));
    }
}
