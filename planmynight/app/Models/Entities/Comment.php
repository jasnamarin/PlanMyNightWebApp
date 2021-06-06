<?php

namespace App\Models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 *
 * @ORM\Table(name="comment", uniqueConstraints={@ORM\UniqueConstraint(name="idcomment_UNIQUE", columns={"idcomment"})}, indexes={@ORM\Index(name="id_user_comm_idx", columns={"iduser"}), @ORM\Index(name="id_place_comm_idx", columns={"idplace"})})
 * @ORM\Entity
 */
class Comment
{
    /**
     * @var int
     *
     * @ORM\Column(name="idcomment", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcomment;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=500, nullable=false)
     */
    private $comment;

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
