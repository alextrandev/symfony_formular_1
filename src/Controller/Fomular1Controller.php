<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class Fomular1Controller extends AbstractController {
    #[Route('/', name: 'app_fomular1')]
    public function index(): Response {
        return $this->render('fomular1/index.html.twig', [
            'controller_name' => 'Fomular1Controller',
        ]);
    }
}
