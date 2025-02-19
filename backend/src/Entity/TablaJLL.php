<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "secretosJLL")]
class TablaJLL
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $id;

    #[ORM\Column(type: "string", length: 255)]
    private string $fraseJLL;

    public function getId(): int
    {
        return $this->id;
    }

    public function getFraseJLL(): string
    {
        return $this->fraseJLL;
    }

    public function setFraseJLL(string $fraseJLL): self
    {
        $this->fraseJLL = $fraseJLL;
        return $this;
    }
}
