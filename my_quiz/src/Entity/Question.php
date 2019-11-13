<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table(name="question")
 * @ORM\Entity
 */
class Question
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_categorie", type="integer", nullable=true)
     */
    private $idCategorie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="question", type="string", length=255, nullable=true)
     */
    private $question;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdCategorie(): ?int
    {
        return $this->idCategorie;
    }

    public function setIdCategorie(?int $idCategorie): self
    {
        $this->idCategorie = $idCategorie;

        return $this;
    }

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(?string $question): self
    {
        $this->question = $question;

        return $this;
    }


}
