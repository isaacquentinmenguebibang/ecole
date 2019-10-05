<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UtilisateurRepository")
 */
class Utilisateur
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pseudo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mdp;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateNaissance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nationalite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="integer")
     */
    private $telephone;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateInscription;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateEmbauche;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Nouvelle", mappedBy="utilisateur")
     */
    private $nouvelles;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Payement", mappedBy="utilisateur")
     */
    private $payements;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Classe", mappedBy="utilisateur")
     */
    private $classes;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Note", mappedBy="utilisateur")
     */
    private $notes;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Cours", mappedBy="utilisateur")
     */
    private $cours;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CahierTexte", mappedBy="utilisateur")
     */
    private $cahierTextes;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Utilisateur", inversedBy="utilisateurs")
     */
    private $administration;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Utilisateur", mappedBy="administration")
     */
    private $utilisateurs;

    public function __construct()
    {
        $this->nouvelles = new ArrayCollection();
        $this->payements = new ArrayCollection();
        $this->classes = new ArrayCollection();
        $this->notes = new ArrayCollection();
        $this->cours = new ArrayCollection();
        $this->cahierTextes = new ArrayCollection();
        $this->utilisateurs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function setMdp(string $mdp): self
    {
        $this->mdp = $mdp;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(\DateTimeInterface $dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getNationalite(): ?string
    {
        return $this->nationalite;
    }

    public function setNationalite(string $nationalite): self
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(int $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getDateInscription(): ?\DateTimeInterface
    {
        return $this->dateInscription;
    }

    public function setDateInscription(?\DateTimeInterface $dateInscription): self
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }

    public function getDateEmbauche(): ?\DateTimeInterface
    {
        return $this->dateEmbauche;
    }

    public function setDateEmbauche(?\DateTimeInterface $dateEmbauche): self
    {
        $this->dateEmbauche = $dateEmbauche;

        return $this;
    }

    /**
     * @return Collection|Nouvelle[]
     */
    public function getNouvelles(): Collection
    {
        return $this->nouvelles;
    }

    public function addNouvelle(Nouvelle $nouvelle): self
    {
        if (!$this->nouvelles->contains($nouvelle)) {
            $this->nouvelles[] = $nouvelle;
            $nouvelle->setUtilisateur($this);
        }

        return $this;
    }

    public function removeNouvelle(Nouvelle $nouvelle): self
    {
        if ($this->nouvelles->contains($nouvelle)) {
            $this->nouvelles->removeElement($nouvelle);
            // set the owning side to null (unless already changed)
            if ($nouvelle->getUtilisateur() === $this) {
                $nouvelle->setUtilisateur(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|CahierText[]
     */
    public function getCahierTexts(): Collection
    {
        return $this->cahierTexts;
    }

    public function addCahierText(CahierText $cahierText): self
    {
        if (!$this->cahierTexts->contains($cahierText)) {
            $this->cahierTexts[] = $cahierText;
            $cahierText->setUtilisateur($this);
        }

        return $this;
    }

    public function removeCahierText(CahierText $cahierText): self
    {
        if ($this->cahierTexts->contains($cahierText)) {
            $this->cahierTexts->removeElement($cahierText);
            // set the owning side to null (unless already changed)
            if ($cahierText->getUtilisateur() === $this) {
                $cahierText->setUtilisateur(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Payement[]
     */
    public function getPayements(): Collection
    {
        return $this->payements;
    }

    public function addPayement(Payement $payement): self
    {
        if (!$this->payements->contains($payement)) {
            $this->payements[] = $payement;
            $payement->setUtilisateur($this);
        }

        return $this;
    }

    public function removePayement(Payement $payement): self
    {
        if ($this->payements->contains($payement)) {
            $this->payements->removeElement($payement);
            // set the owning side to null (unless already changed)
            if ($payement->getUtilisateur() === $this) {
                $payement->setUtilisateur(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Classe[]
     */
    public function getClasses(): Collection
    {
        return $this->classes;
    }

    public function addClass(Classe $class): self
    {
        if (!$this->classes->contains($class)) {
            $this->classes[] = $class;
            $class->setUtilisateur($this);
        }

        return $this;
    }

    public function removeClass(Classe $class): self
    {
        if ($this->classes->contains($class)) {
            $this->classes->removeElement($class);
            // set the owning side to null (unless already changed)
            if ($class->getUtilisateur() === $this) {
                $class->setUtilisateur(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Note[]
     */
    public function getNotes(): Collection
    {
        return $this->notes;
    }

    public function addNote(Note $note): self
    {
        if (!$this->notes->contains($note)) {
            $this->notes[] = $note;
            $note->setUtilisateur($this);
        }

        return $this;
    }

    public function removeNote(Note $note): self
    {
        if ($this->notes->contains($note)) {
            $this->notes->removeElement($note);
            // set the owning side to null (unless already changed)
            if ($note->getUtilisateur() === $this) {
                $note->setUtilisateur(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Cours[]
     */
    public function getCours(): Collection
    {
        return $this->cours;
    }

    public function addCour(Cours $cour): self
    {
        if (!$this->cours->contains($cour)) {
            $this->cours[] = $cour;
            $cour->setUtilisateur($this);
        }

        return $this;
    }

    public function removeCour(Cours $cour): self
    {
        if ($this->cours->contains($cour)) {
            $this->cours->removeElement($cour);
            // set the owning side to null (unless already changed)
            if ($cour->getUtilisateur() === $this) {
                $cour->setUtilisateur(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|CahierTexte[]
     */
    public function getCahierTextes(): Collection
    {
        return $this->cahierTextes;
    }

    public function addCahierTexte(CahierTexte $cahierTexte): self
    {
        if (!$this->cahierTextes->contains($cahierTexte)) {
            $this->cahierTextes[] = $cahierTexte;
            $cahierTexte->setUtilisateur($this);
        }

        return $this;
    }

    public function removeCahierTexte(CahierTexte $cahierTexte): self
    {
        if ($this->cahierTextes->contains($cahierTexte)) {
            $this->cahierTextes->removeElement($cahierTexte);
            // set the owning side to null (unless already changed)
            if ($cahierTexte->getUtilisateur() === $this) {
                $cahierTexte->setUtilisateur(null);
            }
        }

        return $this;
    }

    public function getAdministration(): ?self
    {
        return $this->administration;
    }

    public function setAdministration(?self $administration): self
    {
        $this->administration = $administration;

        return $this;
    }

    /**
     * @return Collection|self[]
     */
    public function getUtilisateurs(): Collection
    {
        return $this->utilisateurs;
    }

    public function addUtilisateur(self $utilisateur): self
    {
        if (!$this->utilisateurs->contains($utilisateur)) {
            $this->utilisateurs[] = $utilisateur;
            $utilisateur->setAdministration($this);
        }

        return $this;
    }

    public function removeUtilisateur(self $utilisateur): self
    {
        if ($this->utilisateurs->contains($utilisateur)) {
            $this->utilisateurs->removeElement($utilisateur);
            // set the owning side to null (unless already changed)
            if ($utilisateur->getAdministration() === $this) {
                $utilisateur->setAdministration(null);
            }
        }

        return $this;
    }
}
