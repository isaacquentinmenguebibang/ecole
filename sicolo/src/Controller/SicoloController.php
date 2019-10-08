<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SicoloController extends AbstractController
{
    /**
     * @Route("/accueil", name="accueil")
     */
    public function accueil()
    {
        $nom = "isaac";
        return $this->render('sicolo/accueil.html.twig', [
            'nom' => $nom,
        ]);
    }
    /**
     * @Route("/accueil/nouvelle", name="nouvelle")
     */
    public function nouvelle(){
        return $this->render('sicolo/nouvelle.html.twig');
    }
}
