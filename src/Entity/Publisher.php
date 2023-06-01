<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Entity\Repository\PublisherRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PublisherRepository::class)]
#[ORM\Table(name: 'publisher')]
#[ApiResource]
class Publisher
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'AUTO')]
    #[ORM\Column(type: 'integer', nullable: false)]
    private ?int $id;
    #[ORM\Column(type: 'string', length: 255, nullable: false)]
    private string $name;
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $country;

    /**
     * @param int $id
     * @param string $name
     * @param string|null $country
     */
    public function __construct(int $id, string $name, ?string $country)
    {
        $this->id = $id;
        $this->name = $name;
        $this->country = $country;
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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @param string|null $country
     */
    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }
}
