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
     * @Route("/accueil/utilisateur/inscription", name="inscription")
     */
    public function inscription(){
        return $this->render('sicolo/utilisateur/inscription.html.twig');
    }
    /**
     * @Route("/accueil/utilisateur/suppression", name="suppression")
     */
    public function suppression(){
        return $this->render('sicolo/utilisateur/suppression.html.twig');
    }
    /**
     * @Route("/accueil/nouvelle/inscription_nouvelle", name="inscription_nouvelle")
     */
    public function inscriptionNouvelle(){
        return $this->render('sicolo/nouvelle/inscription_nouvelle.html.twig');
    }
    /**
     * @Route("/accueil/nouvelle/modification_nouvelle", name="modification_nouvelle")
     */
    public function modificationNouvelle(){
        return $this->render('sicolo/nouvelle/modification_nouvelle.html.twig');
    }
    /**
     * @Route("/accueil/nouvelle/consultation_nouvelle", name="consultation_nouvelle")
     */
    public function consultationNouvelle(){
        return $this->render('sicolo/nouvelle/consultation_nouvelle.html.twig');
    }
    /**
     * @Route("/accueil/nouvelle/suppression_nouvelle", name="suppression_nouvelle")
     */
    public function suppressionNouvelle(){
        return $this->render('sicolo/nouvelle/suppression_nouvelle.html.twig');
    }

     /**
     * @Route("/accueil/note/televersement_note", name="televersement_note")
     */
    public function televersementNote(){
        return $this->render('sicolo/note/televersement_note.html.twig');
    }
     /**
     * @Route("/accueil/note/consultation_note", name="consultation_note")
     */
    public function consultationNote(){
        return $this->render('sicolo/note/consultation_note.html.twig');
    }
    /**
     * @Route("/accueil/payement/consultation_payement", name="consultation_payement")
     */
    public function consultationPayement(){
        return $this->render('sicolo/payement/consultation_payement.html.twig');
    }
    /**
     * @Route("/accueil/payement/modification_payement", name="modification_payement")
     */
    public function modificationPayement(){
        return $this->render('sicolo/payement/modification_payement.html.twig');
    }
     /**
     * @Route("/accueil/payement/suppression_payement", name="suppression_payement")
     */
    public function suppressionPayement(){
        return $this->render('sicolo/payement/suppression_payement.html.twig');
    }
    /**
     * @Route("/accueil/payement/enregistrement_payement", name="enregistrement_payement")
     */
    public function enregistrementPayement(){
        return $this->render('sicolo/payement/enregistrement_payement.html.twig');
    }
     /**
     * @Route("/accueil/cahier/enregistrement_cahier_texte", name="enregistrement_cahier_texte")
     */
    public function enregistrementCahierText(){
        return $this->render('sicolo/cahier/enregistrement_cahier_texte.html.twig');
    }
    /**
     * @Route("/accueil/cahier/modification_cahier_texte", name="modification_cahier_texte")
     */
    public function modificationCahierTexte(){
        return $this->render('sicolo/cahier/modification_cahier_texte.html.twig');
    }
    /**
     * @Route("/accueil/cahier/suppression_cahier_texte", name="suppression_cahier_texte")
     */
    public function suppressionCahierTexte(){
        return $this->render('sicolo/cahier/suppression_cahier_texte.html.twig');
    }
    /**
     * @Route("/accueil/cahier/consultation_cahier_texte.html.twig", name="consultation_cahier_texte")
     */
    public function consultationCahierTexte(){
        return $this->render('sicolo/cahier/consultation_cahier_texte.html.twig');
    }
    /**
     * @Route("/accueil/cours/televersement_cours", name="televersement_cours")
     */
    public function televersementCours(){
        return $this->render('sicolo/cours/televersement_cours.html.twig');
    }
    /**
     * @Route("/accueil/cours/consultation_cours", name="consultation_cours")
     */
    public function consultationCours(){
        return $this->render('sicolo/cours/consultation_cours.html.twig');
    }



}
