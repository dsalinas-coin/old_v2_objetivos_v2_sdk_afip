<?php

namespace App\Entity;

use App\Repository\ConsultaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ConsultaRepository::class)]
class Consulta
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;



    #[ORM\Column]
    private ?float $cuit = null;

    #[ORM\Column(length: 255)]
    private ?string $tipoPersona = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $razonSocial = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $apellido = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nombre = null;

    #[ORM\Column(length: 255)]
    private ?string $estadoClave = null;

    #[ORM\Column(length: 255)]
    private ?string $tipoClave = null;

    #[ORM\Column]
    private ?int $provinciaId = null;

    #[ORM\Column(length: 255)]
    private ?string $provinciaNombre = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $categoria = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $status = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTipoPersona(): ?string
    {
        return $this->tipoPersona;
    }

    public function setTipoPersona(string $tipoPersona): static
    {
        $this->tipoPersona = $tipoPersona;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCuit(): ?float
    {
        return $this->cuit;
    }

    /**
     * @param string|null $cuit
     */
    public function setCuit(?float $cuit): void
    {
        $this->cuit = $cuit;
    }



    public function getRazonSocial(): ?string
    {
        return $this->razonSocial;
    }

    public function setRazonSocial(?string $razonSocial): static
    {
        $this->razonSocial = $razonSocial;

        return $this;
    }

    public function getApellido(): ?string
    {
        return $this->apellido;
    }

    public function setApellido(?string $apellido): static
    {
        $this->apellido = $apellido;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(?string $nombre): static
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getEstadoClave(): ?string
    {
        return $this->estadoClave;
    }

    public function setEstadoClave(string $estadoClave): static
    {
        $this->estadoClave = $estadoClave;

        return $this;
    }

    public function getTipoClave(): ?string
    {
        return $this->tipoClave;
    }

    public function setTipoClave(string $tipoClave): static
    {
        $this->tipoClave = $tipoClave;

        return $this;
    }

    public function getProvinciaId(): ?int
    {
        return $this->provinciaId;
    }

    public function setProvinciaId(int $provinciaId): static
    {
        $this->provinciaId = $provinciaId;

        return $this;
    }

    public function getProvinciaNombre(): ?string
    {
        return $this->provinciaNombre;
    }

    public function setProvinciaNombre(string $provinciaNombre): static
    {
        $this->provinciaNombre = $provinciaNombre;

        return $this;
    }

    public function getCategoria(): ?string
    {
        return $this->categoria;
    }

    public function setCategoria(?string $categoria): static
    {
        $this->categoria = $categoria;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): static
    {
        $this->status = $status;

        return $this;
    }
}
