<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use DateTime;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'author')]
#[ApiResource]
class Author
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'AUTO')]
    #[ORM\Column(type: 'integer', nullable: false)]
    private ?int $id;
    #[ORM\Column(type: 'string', length: 255, nullable: false)]
    private string $first_name;
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $last_name;
    #[ORM\Column(type: 'datetime', nullable: true)]
    private ?DateTime $birthday;
    #[ORM\Column(type: 'datetime', nullable: true)]
    private ?DateTime $death;
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $country;

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
    public function getFirstName(): string
    {
        return $this->first_name;
    }

    /**
     * @param string $first_name
     */
    public function setFirstName(string $first_name): void
    {
        $this->first_name = $first_name;
    }

    /**
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->last_name;
    }

    /**
     * @param string|null $last_name
     */
    public function setLastName(?string $last_name): void
    {
        $this->last_name = $last_name;
    }

    /**
     * @return DateTime|null
     */
    public function getBirthday(): ?DateTime
    {
        return $this->birthday;
    }

    /**
     * @param DateTime|null $birthday
     */
    public function setBirthday(?DateTime $birthday): void
    {
        $this->birthday = $birthday;
    }

    /**
     * @return DateTime|null
     */
    public function getDeath(): ?DateTime
    {
        return $this->death;
    }

    /**
     * @param DateTime|null $death
     */
    public function setDeath(?DateTime $death): void
    {
        $this->death = $death;
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
