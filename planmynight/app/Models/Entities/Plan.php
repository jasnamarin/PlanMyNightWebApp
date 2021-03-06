<?php

namespace App\Models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Plan
 *
 * @ORM\Table(name="plan", indexes={@ORM\Index(name="id_user_plan_idx", columns={"iduser"})})
 * @ORM\Entity(repositoryClass="App\Models\Repositories\PlanRepo")
 */
class Plan
{
    /**
     * @var int
     *
     * @ORM\Column(name="idplan", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idplan;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var \App\Models\Entities\User
     *
     * @ORM\ManyToOne(targetEntity="App\Models\Entities\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iduser", referencedColumnName="iduser")
     * })
     */
    private $iduser;

    function getIdplan(): int {
        return $this->idplan;
    }

    function getDate(): \DateTime {
        return $this->date;
    }

    function getIduser(): \App\Models\Entities\User {
        return $this->iduser;
    }

    function setIdplan(int $idplan): void {
        $this->idplan = $idplan;
    }

    function setDate(\DateTime $date): void {
        $this->date = $date;
    }

    function setIduser(\App\Models\Entities\User $iduser): void {
        $this->iduser = $iduser;
    }


}
