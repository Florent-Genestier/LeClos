<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/front/room", name="app_front_room")
 */
class RoomController extends AbstractController
{
    /**
     * @Route("/room", name="_index")
     */
    public function index(): Response
    {
        return $this->render('front/room/index.html.twig', [
            'controller_name' => 'RoomController',
        ]);
    }
}
