<?php

namespace App\Models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Preferences
 *
 * @ORM\Table(name="preferences")
 * @ORM\Entity(repositoryClass="App\Models\Repositories\PreferencesRepo")
 */
class Preferences {

    /**
     * @var string|null
     *
     * @ORM\Column(name="musictype", type="string", length=150, nullable=true)
     */
    private $musictype;

    /**
     * @var int|null
     *
     * @ORM\Column(name="money", type="integer", nullable=true)
     */
    private $money;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="party_start", type="time", nullable=false)
     */
    private $partyStart;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="party_end", type="time", nullable=true)
     */
    private $partyEnd;

    /**
     * @var int
     *
     * @ORM\Column(name="changelocation", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $changelocation;

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

    function getMusictype(): ?string {
        return $this->musictype;
    }

    function getMoney(): ?int {
        return $this->money;
    }

    function getPartyStart(): \DateTime {
        return $this->partyStart;
    }

    function getPartyEnd(): ?\DateTime {
        return $this->partyEnd;
    }

    function getChangelocation(): int {
        return $this->changelocation;
    }

    function getIduser(): \App\Models\Entities\User {
        return $this->iduser;
    }

    function setMusictype(?string $musictype): void {
        $this->musictype = $musictype;
    }

    function setMoney(?int $money): void {
        $this->money = $money;
    }

    function setPartyStart(\DateTime $partyStart): void {
        $this->partyStart = $partyStart;
    }

    function setPartyEnd(?\DateTime $partyEnd): void {
        $this->partyEnd = $partyEnd;
    }

    function setChangelocation(int $changelocation): void {
        $this->changelocation = $changelocation;
    }

    function setIduser(\App\Models\Entities\User $iduser): void {
        $this->iduser = $iduser;
    }


}
