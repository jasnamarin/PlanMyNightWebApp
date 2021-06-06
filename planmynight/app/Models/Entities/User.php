<?php

namespace App\Models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user", uniqueConstraints={@ORM\UniqueConstraint(name="username_UNIQUE", columns={"username"}), @ORM\UniqueConstraint(name="email_UNIQUE", columns={"email"})})
 * @ORM\Entity(repositoryClass="App\Models\Repositories\UserRepo")
 */
class User
{
    /**
     * @var int
     *
     * @ORM\Column(name="iduser", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iduser;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=45, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=45, nullable=false)
     */
    private $surname;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=45, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=45, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=false)
     */
    private $email;

    /**
     * @var int
     *
     * @ORM\Column(name="role", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $role;
    function getIduser(): int {
        return $this->iduser;
    }

    function getName(): string {
        return $this->name;
    }

    function getSurname(): string {
        return $this->surname;
    }

    function getUsername(): string {
        return $this->username;
    }

    function getPassword(): string {
        return $this->password;
    }

    function getEmail(): string {
        return $this->email;
    }

    function getRole(): int {
        return $this->role;
    }

    function setIduser(int $iduser): void {
        $this->iduser = $iduser;
    }

    function setName(string $name): void {
        $this->name = $name;
    }

    function setSurname(string $surname): void {
        $this->surname = $surname;
    }

    function setUsername(string $username): void {
        $this->username = $username;
    }

    function setPassword(string $password): void {
        $this->password = $password;
    }

    function setEmail(string $email): void {
        $this->email = $email;
    }

    function setRole(int $role): void {
        $this->role = $role;
    }



}
