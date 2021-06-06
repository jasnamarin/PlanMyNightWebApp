<?php

namespace App\Models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Owner
 *
 * @ORM\Table(name="owner", uniqueConstraints={@ORM\UniqueConstraint(name="jmbg_UNIQUE", columns={"jmbg"})})
 * @ORM\Entity(repositoryClass="App\Models\Repositories\OwnerRepo")
 */
class Owner
{
    /**
     * @var string
     *
     * @ORM\Column(name="jmbg", type="string", length=45, nullable=false)
     */
    private $jmbg;

    /**
     * @var string
     *
     * @ORM\Column(name="license", type="string", length=90, nullable=false)
     */
    private $license;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=90, nullable=false)
     */
    private $address;

    /**
     * @var \App\Models\Entities\User
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="App\Models\Entities\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iduser", referencedColumnName="iduser")
     * })
     */
    private $iduser;

    function getJmbg(): string {
        return $this->jmbg;
    }

    function getLicense(): string {
        return $this->license;
    }

    function getAddress(): string {
        return $this->address;
    }

    function getIduser(): \App\Models\Entities\User {
        return $this->iduser;
    }

    function setJmbg(string $jmbg): void {
        $this->jmbg = $jmbg;
    }

    function setLicense(string $license): void {
        $this->license = $license;
    }

    function setAddress(string $address): void {
        $this->address = $address;
    }

    function setIduser(\App\Models\Entities\User $iduser): void {
        $this->iduser = $iduser;
    }


}
