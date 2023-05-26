<?php

namespace App\Entity;

use App\Entity\Repository\BookRepository;
use App\Enum\BookCondition;
use DateTime;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BookRepository::class)]
#[ORM\Table(name: 'book')]
class Book
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'AUTO')]
    #[ORM\Column(type: 'integer')]
    private int $id;

    #[ORM\Column(type: 'string')]
    private string $title;

    #[ORM\ManyToMany(targetEntity: 'App\Entity\Author')]
    private array $authors;

    #[ORM\ManyToOne(targetEntity: 'App\Entity\Publisher', cascade: ['all'])]
    #[ORM\JoinColumn(onDelete: 'SET NULL')]
    private Publisher $publisher;

    #[ORM\Column(type: 'datetime')]
    private DateTime $publishingDate;

    #[ORM\Column(type: 'string')]
    private string $isbn;

    #[ORM\Column(type: 'integer')]
    private int $edition;

    #[ORM\Column(type: 'string')]
    private string $publishingOrigin; //city

    #[ORM\Column(type: 'string')]
    private BookCondition $bookCondition;

    #[ORM\ManyToMany(targetEntity: 'App\Entity\Genre')]
    private Genre $genre;

    /**
     * @param int $id
     * @param string $title
     * @param Author[] $authors
     * @param Publisher $publisher
     * @param DateTime $publishingDate
     * @param string $isbn
     * @param int $edition
     * @param string $publishingOrigin
     * @param BookCondition $bookCondition
     * @param Genre $genre
     */
    public function __construct(int $id, string $title, array $authors, Publisher $publisher,
                                DateTime $publishingDate, string $isbn, int $edition, string $publishingOrigin,
                                BookCondition $bookCondition, Genre $genre)
    {
        $this->id = $id;
        $this->title = $title;
        $this->authors = $authors;
        $this->publisher = $publisher;
        $this->publishingDate = $publishingDate;
        $this->isbn = $isbn;
        $this->edition = $edition;
        $this->publishingOrigin = $publishingOrigin;
        $this->bookCondition = $bookCondition;
        $this->genre = $genre;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
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
     * @return Author[]
     */
    public function getAuthors(): array
    {
        return $this->authors;
    }

    /**
     * @param Author[] $authors
     */
    public function setAuthor(array $authors): void
    {
        $this->authors = $authors;
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
     * @return DateTime
     */
    public function getPublishingDate(): DateTime
    {
        return $this->publishingDate;
    }

    /**
     * @param DateTime $publishingDate
     */
    public function setPublishingDate(DateTime $publishingDate): void
    {
        $this->publishingDate = $publishingDate;
    }

    /**
     * @return string
     */
    public function getIsbn(): string
    {
        return $this->isbn;
    }

    /**
     * @param string $isbn
     */
    public function setIsbn(string $isbn): void
    {
        $this->isbn = $isbn;
    }

    /**
     * @return int
     */
    public function getEdition(): int
    {
        return $this->edition;
    }

    /**
     * @param int $edition
     */
    public function setEdition(int $edition): void
    {
        $this->edition = $edition;
    }

    /**
     * @return string
     */
    public function getPublishingOrigin(): string
    {
        return $this->publishingOrigin;
    }

    /**
     * @param string $publishingOrigin
     */
    public function setPublishingOrigin(string $publishingOrigin): void
    {
        $this->publishingOrigin = $publishingOrigin;
    }

    /**
     * @return BookCondition
     */
    public function getBookCondition(): BookCondition
    {
        return $this->bookCondition;
    }

    /**
     * @param BookCondition $bookCondition
     */
    public function setBookCondition(BookCondition $bookCondition): void
    {
        $this->bookCondition = $bookCondition;
    }

    /**
     * @return Genre
     */
    public function getGenre(): Genre
    {
        return $this->genre;
    }

    /**
     * @param Genre $genre
     */
    public function setGenre(Genre $genre): void
    {
        $this->genre = $genre;
    }
}
