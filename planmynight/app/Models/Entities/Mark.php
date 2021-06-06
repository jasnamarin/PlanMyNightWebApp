<?php

namespace App\Models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mark
 *
 * @ORM\Table(name="mark", indexes={@ORM\Index(name="id_place_mark_idx", columns={"idplace"}), @ORM\Index(name="id_user_mark", columns={"iduser"})})
 * @ORM\Entity
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


}
