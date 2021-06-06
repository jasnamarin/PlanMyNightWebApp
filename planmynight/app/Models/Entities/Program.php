<?php

namespace App\Models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Program
 *
 * @ORM\Table(name="program")
 * @ORM\Entity
 */
class Program
{
    /**
     * @var string
     *
     * @ORM\Column(name="monday", type="string", length=45, nullable=false)
     */
    private $monday;

    /**
     * @var string
     *
     * @ORM\Column(name="tuesday", type="string", length=45, nullable=false)
     */
    private $tuesday;

    /**
     * @var string
     *
     * @ORM\Column(name="wednesday", type="string", length=45, nullable=false)
     */
    private $wednesday;

    /**
     * @var string
     *
     * @ORM\Column(name="thursday", type="string", length=45, nullable=false)
     */
    private $thursday;

    /**
     * @var string
     *
     * @ORM\Column(name="friday", type="string", length=45, nullable=false)
     */
    private $friday;

    /**
     * @var string
     *
     * @ORM\Column(name="saturday", type="string", length=45, nullable=false)
     */
    private $saturday;

    /**
     * @var string
     *
     * @ORM\Column(name="sunday", type="string", length=45, nullable=false)
     */
    private $sunday;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="week_date", type="date", nullable=false)
     */
    private $weekDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="work_time_start", type="time", nullable=false)
     */
    private $workTimeStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="work_time_end", type="time", nullable=false)
     */
    private $workTimeEnd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="programcol", type="string", length=45, nullable=true)
     */
    private $programcol;

    /**
     * @var \App\Models\Entities\Place
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="App\Models\Entities\Place")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idplace", referencedColumnName="idplace")
     * })
     */
    private $idplace;


}
