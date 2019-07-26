<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TransactionRepository")
 */
class Transaction
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $somme;

    /**
     * @ORM\Column(type="date")
     */
    private $dateTransaction;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Partenaire", inversedBy="transactions")
     */
    private $prestataire;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSomme(): ?int
    {
        return $this->somme;
    }

    public function setSomme(int $somme): self
    {
        $this->somme = $somme;

        return $this;
    }

    public function getDateTransaction(): ?\DateTimeInterface
    {
        return $this->dateTransaction;
    }

    public function setDateTransaction(\DateTimeInterface $dateTransaction): self
    {
        $this->dateTransaction = $dateTransaction;

        return $this;
    }

    public function getPrestataire(): ?Partenaire
    {
        return $this->prestataire;
    }

    public function setPrestataire(?Partenaire $prestataire): self
    {
        $this->prestataire = $prestataire;

        return $this;
    }
}
