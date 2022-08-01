<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/default", name="default")
     */
    public function index(): Response
    {
        return $this->render('index.html.twig');
    }

    /**
     * @Route ("contact", name="contact")
     */
    public function contact(): Response
    {
        $postJson = file_get_contents('php://input');
        $postArray = json_decode($postJson);
        mail('adam.zielinski1@wp.pl',$postArray->title,$postArray->content);

    /*    return $this->render('index.html.twig', [
            'zmienna' => $zmienna
        ]); */
    }
}
