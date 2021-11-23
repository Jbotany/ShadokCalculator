<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShadokCalculatorController extends AbstractController
{
    /**
     * @Route("/shadok/calculator", name="shadok_calculator")
     */
    public function index(): Response
    {
        return $this->render('shadok_calculator/index.html.twig', [
            'controller_name' => 'ShadokCalculatorController',
        ]);
    }
}
