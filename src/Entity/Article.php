<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 */
class Article
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
    private $Ref;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Des;

    /**
     * @ORM\Column(type="integer")
     */
    private $Stock_gestion;

    /**
     * @ORM\Column(type="integer")
     */
    private $Stock_mini;

    /**
     * @ORM\Column(type="integer")
     */
    private $Stock_qte;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRef(): ?string
    {
        return $this->Ref;
    }

    public function setRef(string $Ref): self
    {
        $this->Ref = $Ref;

        return $this;
    }

    public function getDes(): ?string
    {
        return $this->Des;
    }

    public function setDes(string $Des): self
    {
        $this->Des = $Des;

        return $this;
    }

    public function getStockGestion(): ?int
    {
        return $this->Stock_gestion;
    }

    public function setStockGestion(int $Stock_gestion): self
    {
        $this->Stock_gestion = $Stock_gestion;

        return $this;
    }

    public function getStockMini(): ?int
    {
        return $this->Stock_mini;
    }

    public function setStockMini(int $Stock_mini): self
    {
        $this->Stock_mini = $Stock_mini;

        return $this;
    }

    public function getStockQte(): ?int
    {
        return $this->Stock_qte;
    }

    public function setStockQte(int $Stock_qte): self
    {
        $this->Stock_qte = $Stock_qte;

        return $this;
    }
}
