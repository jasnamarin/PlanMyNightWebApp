<?php

namespace App\Models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mark
 *
 * @ORM\Table(name="mark", indexes={@ORM\Index(name="id_place_mark_idx", columns={"idplace"}), @ORM\Index(name="id_user_mark", columns={"iduser"})})
 * @ORM\Entity(repositoryClass="App\Models\Repositories\MarkRepo")
 */
class Mark
{
    /**
     * @var int
     *
     * @ORM\Column(name="idmark", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmark;

    /**
     * @var int
     *
     * @ORM\Column(name="mark", type="integer", nullable=false)
     */
    private $mark;

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
     * @var \App\Models\Entities\User
     *
     * @ORM\ManyToOne(targetEntity="App\Models\Entities\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iduser", referencedColumnName="iduser")
     * })
     */
    private $iduser;

    function getIdmark(): int {
        return $this->idmark;
    }

    function getMark(): int {
        return $this->mark;
    }

    function getIdplace(): \App\Models\Entities\Place {
        return $this->idplace;
    }

    function getIduser(): \App\Models\Entities\User {
        return $this->iduser;
    }

    function setIdmark(int $idmark): void {
        $this->idmark = $idmark;
    }

    function setMark(int $mark): void {
        $this->mark = $mark;
    }

    function setIdplace(\App\Models\Entities\Place $idplace): void {
        $this->idplace = $idplace;
    }

    function setIduser(\App\Models\Entities\User $iduser): void {
        $this->iduser = $iduser;
    }


}
