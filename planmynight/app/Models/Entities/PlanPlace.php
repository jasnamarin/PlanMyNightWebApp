<?php

namespace App\Models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlanPlace
 *
 * @ORM\Table(name="plan_place", indexes={@ORM\Index(name="id_place_conn_idx", columns={"idplace"}), @ORM\Index(name="id_plan_conn", columns={"idplan"})})
 * @ORM\Entity
 */
class PlanPlace
{
    /**
     * @var int
     *
     * @ORM\Column(name="idplan_place", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idplanPlace;

    /**
     * @var \App\Models\Entities\Place
     *
     * @ORM\ManyToOne(targetEntity="App\Models\Entities\Place")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idplace", referencedColumnName="idplace")
     * })
     */
    private $idplace;

    /**
     * @var \App\Models\Entities\Plan
     *
     * @ORM\ManyToOne(targetEntity="App\Models\Entities\Plan")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idplan", referencedColumnName="idplan")
     * })
     */
    private $idplan;


}
