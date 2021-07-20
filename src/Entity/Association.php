<?php

namespace App\Entity;

use App\Repository\AssociationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AssociationRepository::class)
 */
class Association
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
     * @ORM\Column(type="string", length=14)
     */
    private $siret;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $rna;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateParution;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $logo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $sigle;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telephone;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateMaj;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $validation;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $diffusion;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $courrielMairie;

    /**
     * @ORM\ManyToOne(targetEntity=Personne::class, inversedBy="presidAssociations")
     * @ORM\JoinColumn(nullable=false)
     */
    private $president;

    /**
     * @ORM\ManyToOne(targetEntity=Personne::class, inversedBy="tresorierAssociations")
     * @ORM\JoinColumn(nullable=false)
     */
    private $tresorier;

    /**
     * @ORM\ManyToOne(targetEntity=Personne::class, inversedBy="secretaireAssociations")
     * @ORM\JoinColumn(nullable=false)
     */
    private $secretaire;

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

    public function getSiret(): ?string
    {
        return $this->siret;
    }

    public function setSiret(string $siret): self
    {
        $this->siret = $siret;

        return $this;
    }

    public function getRna(): ?string
    {
        return $this->rna;
    }

    public function setRna(string $rna): self
    {
        $this->rna = $rna;

        return $this;
    }

    public function getDateParution(): ?\DateTimeInterface
    {
        return $this->dateParution;
    }

    public function setDateParution(\DateTimeInterface $dateParution): self
    {
        $this->dateParution = $dateParution;

        return $this;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(?string $logo): self
    {
        $this->logo = $logo;

        return $this;
    }

    public function getSigle(): ?string
    {
        return $this->sigle;
    }

    public function setSigle(?string $sigle): self
    {
        $this->sigle = $sigle;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
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

    public function getDateMaj(): ?\DateTimeInterface
    {
        return $this->dateMaj;
    }

    public function setDateMaj(?\DateTimeInterface $dateMaj): self
    {
        $this->dateMaj = $dateMaj;

        return $this;
    }

    public function getValidation(): ?bool
    {
        return $this->validation;
    }

    public function setValidation(?bool $validation): self
    {
        $this->validation = $validation;

        return $this;
    }

    public function getDiffusion(): ?bool
    {
        return $this->diffusion;
    }

    public function setDiffusion(?bool $diffusion): self
    {
        $this->diffusion = $diffusion;

        return $this;
    }

    public function getCourrielMairie(): ?bool
    {
        return $this->courrielMairie;
    }

    public function setCourrielMairie(?bool $courrielMairie): self
    {
        $this->courrielMairie = $courrielMairie;

        return $this;
    }

    public function getPresident(): ?Personne
    {
        return $this->president;
    }

    public function setPresident(?Personne $president): self
    {
        $this->president = $president;

        return $this;
    }

    public function getTresorier(): ?Personne
    {
        return $this->tresorier;
    }

    public function setTresorier(?Personne $tresorier): self
    {
        $this->tresorier = $tresorier;

        return $this;
    }

    public function getSecretaire(): ?Personne
    {
        return $this->secretaire;
    }

    public function setSecretaire(?Personne $secretaire): self
    {
        $this->secretaire = $secretaire;

        return $this;
    }
}
