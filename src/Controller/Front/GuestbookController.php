<?php

namespace App\Controller\Front;

use App\Entity\Guestbook;
use App\Form\GuestbookType;
use App\Repository\GuestbookRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/front/guestbook", name="app_front_guestbook")
 */
class GuestbookController extends AbstractController
{
    /**
     * @Route("/guestbook", name="_index")
     */
    public function index(Request $request, EntityManagerInterface $entityManager, GuestbookRepository $guestbookRepository): Response
    {
        $guestbook = new Guestbook();

        $form = $this->createForm(GuestbookType::class, $guestbook);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $entityManager->persist($form);
            $entityManager->flush();
         dump($guestbook);die;
    }
        return $this->render('front/guestbook/index.html.twig', [
            'guestbook' => $guestbook,
            'form' => $form->createView()
        ]);
    }
}

   
       

