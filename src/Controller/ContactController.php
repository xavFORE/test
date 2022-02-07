<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(): Response
    {
        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }

    public function contact( Request $request, MailerInterface $mailer ): Response
    {
        $contact = new Contact();
        $form = $this->createForm( ContactType::class, $contact );

        $form->handleRequest($request);
        if ( $form->isSubmitted() && $form->isValid() ) 
        {
            // expedition du mail
            $dep = $contact->getDepartement();
            $name = $contact->getName();
            $mail = $dep->getMail();
            
            

            $email = (new Email())
                        ->from( 'hello@example.com')
                        ->to( $mail )
                        ->subject("un message de $name ")
                        ->text("$name a déposé un contact pour vous");
            
            $mailer->send($email);
        

            // sauvegarde du contact            
            $doctrine = $this->getDoctrine();
            $entityManager = $doctrine->getManager();
            $entityManager->persist($contact); 
            $entityManager->flush();            

            return new Response( "<h1>formulaire OK<br>mail envoyé à $mail</h1>");
        }
        return $this->render('contact/formulaire.html.twig', [
            'formulaire' => $form->createView(),
        ]);
    }
}
