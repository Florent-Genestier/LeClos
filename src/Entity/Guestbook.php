<?php

namespace App\Entity;

use App\Repository\GuestbookRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GuestbookRepository::class)
 */
class Guestbook
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $firstname;

    // /**
    //  * @ORM\Column(type="string", length=255)
    //  */
    // private $pseudo;

    /**
     * @ORM\Column(type="text")
     */
    private $message;

    // /**
    //  * @ORM\Column(type="date")
    //  */
    // private $date;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->firstname;
    }

    public function setFirstName(?string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }
    
    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    // public function getPseudo(): ?string
    // {
    //     return $this->pseudo;
    // }

    // public function setPseudo(string $pseudo): self
    // {
    //     $this->pseudo = $pseudo;

    //     return $this;
    // }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    // public function getDate(): ?\DateTimeInterface
    // {
    //     return $this->date;
    // }

    // public function setDate(\DateTimeInterface $date): self
    // {
    //     $this->date = $date;

    //     return $this;
    // }
}
