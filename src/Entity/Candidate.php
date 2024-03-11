<?php

namespace App\Entity;

use App\Repository\CandidateRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CandidateRepository::class)]
class Candidate
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $lastname = null;

    #[ORM\Column(length: 255)]
    private ?string $firstname = null;

    #[ORM\Column(length: 255)]
    private ?string $phone = null;

    #[ORM\Column(length: 255)]
    private ?string $city = null;

    #[ORM\Column]
    private ?bool $availability = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $registratedAt = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $birthDate = null;

    #[ORM\Column(length: 255)]
    private ?string $birthCity = null;

    #[ORM\Column(length: 255)]
    private ?string $sectorActivity = null;

    #[ORM\ManyToOne(inversedBy: 'candidates')]
    #[ORM\JoinColumn(nullable: false)]
    private ?JobCategory $category = null;

    #[ORM\OneToOne(inversedBy: 'candidate', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Gender $gender = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\OneToMany(targetEntity: Experience::class, mappedBy: 'candidate')]
    private Collection $experience;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?File $passport = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?File $pictureProfil = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?File $curriculumVitae = null;

    public function __construct()
    {
        $this->experience = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): static
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): static
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): static
    {
        $this->phone = $phone;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): static
    {
        $this->city = $city;

        return $this;
    }

    public function isAvailability(): ?bool
    {
        return $this->availability;
    }

    public function setAvailability(bool $availability): static
    {
        $this->availability = $availability;

        return $this;
    }

    public function getRegistratedAt(): ?\DateTimeImmutable
    {
        return $this->registratedAt;
    }

    public function setRegistratedAt(\DateTimeImmutable $registratedAt): static
    {
        $this->registratedAt = $registratedAt;

        return $this;
    }

    public function getBirthDate(): ?\DateTimeInterface
    {
        return $this->birthDate;
    }

    public function setBirthDate(\DateTimeInterface $birthDate): static
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    public function getBirthCity(): ?string
    {
        return $this->birthCity;
    }

    public function setBirthCity(string $birthCity): static
    {
        $this->birthCity = $birthCity;

        return $this;
    }

    public function getSectorActivity(): ?string
    {
        return $this->sectorActivity;
    }

    public function setSectorActivity(string $sectorActivity): static
    {
        $this->sectorActivity = $sectorActivity;

        return $this;
    }

    public function getCategory(): ?JobCategory
    {
        return $this->category;
    }

    public function setCategory(?JobCategory $category): static
    {
        $this->category = $category;

        return $this;
    }

    public function getGender(): ?Gender
    {
        return $this->gender;
    }

    public function setGender(Gender $gender): static
    {
        $this->gender = $gender;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(User $user): static
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return Collection<int, experience>
     */
    public function getExperience(): Collection
    {
        return $this->experience;
    }

    public function addExperience(Experience $experience): static
    {
        if (!$this->experience->contains($experience)) {
            $this->experience->add($experience);
            $experience->setCandidate($this);
        }

        return $this;
    }

    public function removeExperience(Experience $experience): static
    {
        if ($this->experience->removeElement($experience)) {
            // set the owning side to null (unless already changed)
            if ($experience->getCandidate() === $this) {
                $experience->setCandidate(null);
            }
        }

        return $this;
    }

    public function getPassport(): ?File
    {
        return $this->passport;
    }

    public function setPassport(?File $passport): static
    {
        $this->passport = $passport;

        return $this;
    }

    public function getPictureProfil(): ?File
    {
        return $this->pictureProfil;
    }

    public function setPictureProfil(?File $pictureProfil): static
    {
        $this->pictureProfil = $pictureProfil;

        return $this;
    }

    public function getCurriculumVitae(): ?File
    {
        return $this->curriculumVitae;
    }

    public function setCurriculumVitae(?File $curriculumVitae): static
    {
        $this->curriculumVitae = $curriculumVitae;

        return $this;
    }
}
