<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PostRepository")
 */
class Post
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=100000, nullable=true)
     */
    private $content;

    /**
     * @ORM\Column(type="string", length=2200, nullable=true)
     */
    private $exerpt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_add;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $author;

    /**
     * @ORM\Column(type="string", length=2000, nullable=true)
     *
     * @Assert\File(mimeTypes={ "image/*" })
     */
    private $thumbnail;

    /**
     * @ORM\Column(type="boolean")
     */
    private $published;

    public function __construct()
    {
        $this->date_add = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getExerpt(): ?string
    {
        return $this->exerpt;
    }

    public function setExerpt(?string $exerpt): self
    {
        $this->exerpt = $exerpt;

        return $this;
    }

    public function getDateAdd(): ?\DateTimeInterface
    {
        return $this->date_add;
    }

//    public function setDateAdd(\DateTimeInterface $date_add): self
//    {
//        $this->date_add = $date_add;
//
//        return $this;
//    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(?string $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getThumbnail(): ?string
    {
        return $this->thumbnail;
    }

    public function setThumbnail(?string $thumbnail): self
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    public function getPublished(): ?bool
    {
        return $this->published;
    }

    public function setPublished(bool $published): self
    {
        $this->published = $published;

        return $this;
    }
}
