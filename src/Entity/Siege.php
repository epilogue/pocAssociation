<?php

namespace App\Entity;

use App\Repository\SiegeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SiegeRepository::class)
 */
class Siege
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
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $codePostal;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $coordX;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $coordY;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getCoordX(): ?string
    {
        return $this->coordX;
    }

    public function setCoordX(string $coordX): self
    {
        $this->coordX = $coordX;

        return $this;
    }

    public function getCoordY(): ?string
    {
        return $this->coordY;
    }

    public function setCoordY(string $coordY): self
    {
        $this->coordY = $coordY;

        return $this;
    }
}
