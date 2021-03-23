<?php
declare(strict_types=1);

namespace App\Entity;

use DateTimeImmutable;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class Client
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\Column(type="string", length=120)
     */
    private string $name;

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private DateTimeImmutable $startDate;

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private DateTimeImmutable $endDate;

    /**
     * @ORM\Column(type="text")
     */
    private string $about;

    /**
     * @ORM\Column(type="text")
     */
    private string $jobDescription;

    /**
     * @ORM\Column(type="text")
     */
    private string $responsibilities;

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getStartDate(): DateTimeImmutable
    {
        return $this->startDate;
    }

    public function setStartDate(DateTimeImmutable $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): DateTimeImmutable
    {
        return $this->endDate;
    }

    public function setEndDate(DateTimeImmutable $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    public function getAbout(): string
    {
        return $this->about;
    }

    public function setAbout(string $about): self
    {
        $this->about = $about;

        return $this;
    }

    public function getJobDescription(): string
    {
        return $this->jobDescription;
    }

    public function setJobDescription(string $jobDescription): self
    {
        $this->jobDescription = $jobDescription;

        return $this;
    }

    public function getResponsibilities(): string
    {
        return $this->responsibilities;
    }

    public function setResponsibilities(string $responsibilities): self
    {
        $this->responsibilities = $responsibilities;

        return $this;
    }
}
