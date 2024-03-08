<?php

namespace App\Entity;

use App\Repository\CandidacyRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CandidacyRepository::class)]
class Candidacy
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $candidate = null;

    #[ORM\Column(length: 255)]
    private ?string $jobOffer = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(length: 255)]
    private ?string $status = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCandidate(): ?string
    {
        return $this->candidate;
    }

    public function setCandidate(string $candidate): static
    {
        $this->candidate = $candidate;

        return $this;
    }

    public function getJobOffer(): ?string
    {
        return $this->jobOffer;
    }

    public function setJobOffer(string $jobOffer): static
    {
        $this->jobOffer = $jobOffer;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }
}
