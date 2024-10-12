<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Utility\PythagoreUtility;

class PythagoreController extends AbstractController
{

    public function __construct()
    {
       // $this->pythagoreUtility ;
    }

    #[Route('/pythagore', name: 'app_pythagore')]
    public function index(): Response
    {
        return $this->render('pythagore/index.html.twig', [
            'controller_name' => 'PythagoreController',
        ]);
    }

    #[Route('/pythagore/view', name: 'app_pythagore')]
    public function DisplayPythagoreAction(): Response
    {
        $pythagoreHTML = PythagoreUtility::display(); 
        
        return $this->render('pythagore/displayPythagore.html.twig', [
            'pythagoreHTML' => $pythagoreHTML
        ]);
    }
}
