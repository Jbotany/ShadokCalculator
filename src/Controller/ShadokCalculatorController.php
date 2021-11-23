<?php

namespace App\Controller;

use App\Entity\ShadokCalculator;
use App\Form\ShadokCalculatorType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShadokCalculatorController extends AbstractController
{
    /**
     * @Route("/", name="shadok_calculator")
     */
    public function index(Request $request): Response
    {
        $shadokCalculator = new ShadokCalculator();

        $form = $this->createForm(ShadokCalculatorType::class, $shadokCalculator);

        return $this->render('shadok_calculator/index.html.twig', [
            'controller_name' => 'ShadokCalculatorController',
            'form' => $form->createView()
        ]);
    }
}
