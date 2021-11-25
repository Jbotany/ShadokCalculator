<?php

namespace App\Controller;

use App\Entity\ShadokCalculator;
use App\Form\ShadokCalculatorType;
use App\Service\ShadokCalculatorService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
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
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $formData = $form->getData();

            ShadokCalculatorService::calculateShadokNumberFromHumanNumber($formData->getHumanNumber());
        }

        return $this->renderForm('shadok_calculator/index.html.twig', [
            'form' => $form
        ]);
    }

    /**
     * @Route ("/calculator", name="calculator")
     */
    public function transcodeNumberToHumanOrShadok(Request $request): JsonResponse
    {

        ShadokCalculatorService::calculateShadokNumberFromHumanNumber(0);
    }
}
