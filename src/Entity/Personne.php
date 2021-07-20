<?php

namespace App\Entity;

use App\Repository\PersonneRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PersonneRepository::class)
 */
class Personne
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
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
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $codePostal;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ville;

    /**
     * @ORM\OneToMany(targetEntity=Association::class, mappedBy="president")
     */
    private $presidAssociations;

    /**
     * @ORM\OneToMany(targetEntity=Association::class, mappedBy="tresorier")
     */
    private $tresorierAssociations;

    /**
     * @ORM\OneToMany(targetEntity=Association::class, mappedBy="secretaire")
     */
    private $secretaireAssociations;

    public function __construct()
    {
        $this->presidAssociations = new ArrayCollection();
        $this->tresorierAssociations = new ArrayCollection();
        $this->secretaireAssociations = new ArrayCollection();
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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

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

    public function getCodePostal(): ?string
    {
        return $this->codePostal;
    }

    public function setCodePostal(string $codePostal): self
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * @return Collection|Association[]
     */
    public function getPresidAssociations(): Collection
    {
        return $this->presidAssociations;
    }

    public function addPresidAssociation(Association $presidAssociation): self
    {
        if (!$this->presidAssociations->contains($presidAssociation)) {
            $this->presidAssociations[] = $presidAssociation;
            $presidAssociation->setPresident($this);
        }

        return $this;
    }

    public function removePresidAssociation(Association $presidAssociation): self
    {
        if ($this->presidAssociations->removeElement($presidAssociation)) {
            // set the owning side to null (unless already changed)
            if ($presidAssociation->getPresident() === $this) {
                $presidAssociation->setPresident(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Association[]
     */
    public function getTresorierAssociations(): Collection
    {
        return $this->tresorierAssociations;
    }

    public function addTresorierAssociation(Association $tresorierAssociation): self
    {
        if (!$this->tresorierAssociations->contains($tresorierAssociation)) {
            $this->tresorierAssociations[] = $tresorierAssociation;
            $tresorierAssociation->setTresorier($this);
        }

        return $this;
    }

    public function removeTresorierAssociation(Association $tresorierAssociation): self
    {
        if ($this->tresorierAssociations->removeElement($tresorierAssociation)) {
            // set the owning side to null (unless already changed)
            if ($tresorierAssociation->getTresorier() === $this) {
                $tresorierAssociation->setTresorier(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Association[]
     */
    public function getSecretaireAssociations(): Collection
    {
        return $this->secretaireAssociations;
    }

    public function addSecretaireAssociation(Association $secretaireAssociation): self
    {
        if (!$this->secretaireAssociations->contains($secretaireAssociation)) {
            $this->secretaireAssociations[] = $secretaireAssociation;
            $secretaireAssociation->setSecretaire($this);
        }

        return $this;
    }

    public function removeSecretaireAssociation(Association $secretaireAssociation): self
    {
        if ($this->secretaireAssociations->removeElement($secretaireAssociation)) {
            // set the owning side to null (unless already changed)
            if ($secretaireAssociation->getSecretaire() === $this) {
                $secretaireAssociation->setSecretaire(null);
            }
        }

        return $this;
    }
}
