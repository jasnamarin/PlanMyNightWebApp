<?php

namespace App\Models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Program
 *
 * @ORM\Table(name="program")
 * @ORM\Entity(repositoryClass="App\Models\Repositories\ProgramRepo")
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

    function getMonday(): string {
        return $this->monday;
    }

    function getTuesday(): string {
        return $this->tuesday;
    }

    function getWednesday(): string {
        return $this->wednesday;
    }

    function getThursday(): string {
        return $this->thursday;
    }

    function getFriday(): string {
        return $this->friday;
    }

    function getSaturday(): string {
        return $this->saturday;
    }

    function getSunday(): string {
        return $this->sunday;
    }

    function getWeekDate(): \DateTime {
        return $this->weekDate;
    }

    function getWorkTimeStart(): \DateTime {
        return $this->workTimeStart;
    }

    function getWorkTimeEnd(): \DateTime {
        return $this->workTimeEnd;
    }

    function getProgramcol(): ?string {
        return $this->programcol;
    }

    function getIdplace(): \App\Models\Entities\Place {
        return $this->idplace;
    }

    function setMonday(string $monday): void {
        $this->monday = $monday;
    }

    function setTuesday(string $tuesday): void {
        $this->tuesday = $tuesday;
    }

    function setWednesday(string $wednesday): void {
        $this->wednesday = $wednesday;
    }

    function setThursday(string $thursday): void {
        $this->thursday = $thursday;
    }

    function setFriday(string $friday): void {
        $this->friday = $friday;
    }

    function setSaturday(string $saturday): void {
        $this->saturday = $saturday;
    }

    function setSunday(string $sunday): void {
        $this->sunday = $sunday;
    }

    function setWeekDate(\DateTime $weekDate): void {
        $this->weekDate = $weekDate;
    }

    function setWorkTimeStart(\DateTime $workTimeStart): void {
        $this->workTimeStart = $workTimeStart;
    }

    function setWorkTimeEnd(\DateTime $workTimeEnd): void {
        $this->workTimeEnd = $workTimeEnd;
    }

    function setProgramcol(?string $programcol): void {
        $this->programcol = $programcol;
    }

    function setIdplace(\App\Models\Entities\Place $idplace): void {
        $this->idplace = $idplace;
    }



}
