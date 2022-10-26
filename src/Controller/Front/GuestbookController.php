<?php

namespace App\Controller\Front;

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
    public function index(): Response
    {
        return $this->render('front/guestbook/index.html.twig', [
            'controller_name' => 'GuestbookController',
        ]);
    }
}
