<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Enum\BookCondition;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'book')]
#[ApiResource]
class Book
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'AUTO')]
    #[ORM\Column(type: 'integer', nullable: false)]
    private ?int $id;

    #[ORM\Column(type: 'string', length: 255, nullable: false)]
    private string $title;

    #[ORM\ManyToMany(targetEntity: 'App\Entity\Author')]
    private iterable $authors;

    #[ORM\ManyToOne(targetEntity: 'App\Entity\Publisher', cascade: ['all'])]
    #[ORM\JoinColumn(onDelete: 'SET NULL')]
    private Publisher $publisher;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private ?DateTime $publishingDate;

    #[ORM\Column(type: 'string', length: 20, nullable: true)]
    private ?string $isbn;

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $edition;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $publishingOrigin; //city

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?BookCondition $bookCondition;

    #[ORM\ManyToMany(targetEntity: 'App\Entity\Genre')]
    private iterable $genres;

    public function __construct()
    {
        $this->authors = new ArrayCollection();
        $this->genres = new ArrayCollection();
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return Publisher
     */
    public function getPublisher(): Publisher
    {
        return $this->publisher;
    }

    /**
     * @param Publisher $publisher
     */
    public function setPublisher(Publisher $publisher): void
    {
        $this->publisher = $publisher;
    }

    /**
     * @return DateTime|null
     */
    public function getPublishingDate(): ?DateTime
    {
        return $this->publishingDate;
    }

    /**
     * @param DateTime|null $publishingDate
     */
    public function setPublishingDate(?DateTime $publishingDate): void
    {
        $this->publishingDate = $publishingDate;
    }

    /**
     * @return string|null
     */
    public function getIsbn(): ?string
    {
        return $this->isbn;
    }

    /**
     * @param string|null $isbn
     */
    public function setIsbn(?string $isbn): void
    {
        $this->isbn = $isbn;
    }

    /**
     * @return int|null
     */
    public function getEdition(): ?int
    {
        return $this->edition;
    }

    /**
     * @param int|null $edition
     */
    public function setEdition(?int $edition): void
    {
        $this->edition = $edition;
    }

    /**
     * @return string|null
     */
    public function getPublishingOrigin(): ?string
    {
        return $this->publishingOrigin;
    }

    /**
     * @param string|null $publishingOrigin
     */
    public function setPublishingOrigin(?string $publishingOrigin): void
    {
        $this->publishingOrigin = $publishingOrigin;
    }

    /**
     * @return BookCondition|null
     */
    public function getBookCondition(): ?BookCondition
    {
        return $this->bookCondition;
    }

    /**
     * @param BookCondition|null $bookCondition
     */
    public function setBookCondition(?BookCondition $bookCondition): void
    {
        $this->bookCondition = $bookCondition;
    }

    /**
     * @return Author[]|ArrayCollection
     */
    public function getAuthors(): iterable|ArrayCollection
    {
        return $this->authors;
    }

    /**
     * @param Author[]|ArrayCollection $authors
     */
    public function setAuthors(iterable|ArrayCollection $authors): void
    {
        $this->authors = $authors;
    }

    /**
     * @return Genre[]|ArrayCollection
     */
    public function getGenres(): iterable|ArrayCollection
    {
        return $this->genres;
    }

    /**
     * @param Genre[]|ArrayCollection $genres
     */
    public function setGenres(iterable|ArrayCollection $genres): void
    {
        $this->genres = $genres;
    }
}
