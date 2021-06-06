<?php

namespace App\Models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Place
 *
 * @ORM\Table(name="place", uniqueConstraints={@ORM\UniqueConstraint(name="idplace_UNIQUE", columns={"idplace"})}, indexes={@ORM\Index(name="id_user_idx", columns={"iduser"})})
 * @ORM\Entity(repositoryClass="App\Models\Repositories\PlaceRepo")
 */
class Place
{
    /**
     * @var int
     *
     * @ORM\Column(name="idplace", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idplace;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=45, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=90, nullable=false)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="pricing", type="string", length=90, nullable=false)
     */
    private $pricing;

    /**
     * @var \App\Models\Entities\Owner
     *
     * @ORM\ManyToOne(targetEntity="App\Models\Entities\Owner")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iduser", referencedColumnName="iduser")
     * })
     */
    private $iduser;
    function getIdplace(): int {
        return $this->idplace;
    }

    function getName(): string {
        return $this->name;
    }

    function getAddress(): string {
        return $this->address;
    }

    function getPricing(): string {
        return $this->pricing;
    }

    function getIduser(): \App\Models\Entities\Owner {
        return $this->iduser;
    }

    function setIdplace(int $idplace): void {
        $this->idplace = $idplace;
    }

    function setName(string $name): void {
        $this->name = $name;
    }

    function setAddress(string $address): void {
        $this->address = $address;
    }

    function setPricing(string $pricing): void {
        $this->pricing = $pricing;
    }

    function setIduser(\App\Models\Entities\Owner $iduser): void {
        $this->iduser = $iduser;
    }



}
