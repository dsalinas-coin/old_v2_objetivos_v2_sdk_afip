<?php

namespace App\Entity;

use App\Repository\CompanyWebServiceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CompanyWebServiceRepository::class)]
class CompanyWebService
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $tokenExpireDate = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $wsaaSign = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $wsaaToken = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $wsaaErrorDescription = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $wsaaErrorCode = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $keyPassword = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $creationDate = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $modificationDate = null;

    #[ORM\Column]
    private ?bool $active = null;

    #[ORM\ManyToOne]
    private ?File $certificateFile = null;

    #[ORM\ManyToOne]
    private ?File $privatekeyFile = null;

    #[ORM\ManyToOne]
    private ?WebService $service = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTokenExpireDate(): ?\DateTimeInterface
    {
        return $this->tokenExpireDate;
    }

    public function setTokenExpireDate(\DateTimeInterface $tokenExpireDate): self
    {
        $this->tokenExpireDate = $tokenExpireDate;

        return $this;
    }

    public function getWsaaSign(): ?string
    {
        return $this->wsaaSign;
    }

    public function setWsaaSign(string $wsaaSign): self
    {
        $this->wsaaSign = $wsaaSign;

        return $this;
    }

    public function getWsaaToken(): ?string
    {
        return $this->wsaaToken;
    }

    public function setWsaaToken(string $wsaaToken): self
    {
        $this->wsaaToken = $wsaaToken;

        return $this;
    }

    public function getWsaaErrorDescription(): ?string
    {
        return $this->wsaaErrorDescription;
    }

    public function setWsaaErrorDescription(?string $wsaaErrorDescription): self
    {
        $this->wsaaErrorDescription = $wsaaErrorDescription;

        return $this;
    }

    public function getWsaaErrorCode(): ?string
    {
        return $this->wsaaErrorCode;
    }

    public function setWsaaErrorCode(?string $wsaaErrorCode): self
    {
        $this->wsaaErrorCode = $wsaaErrorCode;

        return $this;
    }

    public function getKeyPassword(): ?string
    {
        return $this->keyPassword;
    }

    public function setKeyPassword(?string $keyPassword): self
    {
        $this->keyPassword = $keyPassword;

        return $this;
    }

    public function getCreationDate(): ?\DateTimeInterface
    {
        return $this->creationDate;
    }

    public function setCreationDate(?\DateTimeInterface $creationDate): self
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    public function getModificationDate(): ?\DateTimeInterface
    {
        return $this->modificationDate;
    }

    public function setModificationDate(?\DateTimeInterface $modificationDate): self
    {
        $this->modificationDate = $modificationDate;

        return $this;
    }

    public function isActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getCertificateFile(): ?File
    {
        return $this->certificateFile;
    }

    public function setCertificateFile(?File $certificateFile): self
    {
        $this->certificateFile = $certificateFile;

        return $this;
    }

    public function getPrivatekeyFile(): ?File
    {
        return $this->privatekeyFile;
    }

    public function setPrivatekeyFile(?File $privatekeyFile): self
    {
        $this->privatekeyFile = $privatekeyFile;

        return $this;
    }

    public function getService(): ?WebService
    {
        return $this->service;
    }

    public function setService(?WebService $service): self
    {
        $this->service = $service;

        return $this;
    }

}
