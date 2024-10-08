<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

use App\Entity\PythagoreUtility;

class PythagoreController extends AbstractController
{

    private $pythagoreUtility;

    // Constructeur qui charge la classe PythagoreUtility
    public function __construct()
    {
        $this->pythagoreUtility = new PythagoreUtility();
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
        $pythagoreHTML = $this->pythagoreUtility->display(); 
        /*
        return $this->render('pythagore/displayPythagore.html.twig', [
            'controller_name' => 'PythagoreController',
        ]);
        */
        return $this->render('pythagore/displayPythagore.html.twig', [
            'pythagoreHTML' => $pythagoreHTML
        ]);
    }
}
