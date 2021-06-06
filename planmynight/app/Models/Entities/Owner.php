<?php

namespace App\Models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Owner
 *
 * @ORM\Table(name="owner", uniqueConstraints={@ORM\UniqueConstraint(name="jmbg_UNIQUE", columns={"jmbg"})})
 * @ORM\Entity
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


}
