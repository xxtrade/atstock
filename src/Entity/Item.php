<?php

namespace App\Entity;

use App\Repository\ItemRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ItemRepository::class)
 */
class Item
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
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $SKU;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $CostPrice;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $SellPrice;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Filename;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSKU(): ?string
    {
        return $this->SKU;
    }

    public function setSKU(?string $SKU): self
    {
        $this->SKU = $SKU;

        return $this;
    }

    public function getCostPrice(): ?int
    {
        return $this->CostPrice;
    }

    public function setCostPrice(?int $CostPrice): self
    {
        $this->CostPrice = $CostPrice;

        return $this;
    }

    public function getSellPrice(): ?int
    {
        return $this->SellPrice;
    }

    public function setSellPrice(?int $SellPrice): self
    {
        $this->SellPrice = $SellPrice;

        return $this;
    }

    public function getFilename(): ?string
    {
        return $this->Filename;
    }

    public function setFilename(?string $Filename): self
    {
        $this->Filename = $Filename;

        return $this;
    }
}
