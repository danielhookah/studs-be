<?php

namespace App\Domain\User;

use App\Domain\Entities\Entity;
use App\Domain\Traits\EntityHelperTrait;
use App\Domain\Traits\EntitySoftDeleteTrait;
use App\Infrastructure\Shared\DTO\AbstractDTOInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use DateTime;
use Exception;

/**
 * @ORM\Entity
 * @ORM\Table(name="`user`")
 */
class UserEntity extends Entity
{
    use EntityHelperTrait;
    use EntitySoftDeleteTrait;

    /**
     * @ORM\Column(name="`status`", type="integer")
     * @var integer
     */
    private int $status;

    /**
     * @ORM\Column(name="`role`", type="integer")
     * @var integer
     */
    private int $role;

    /**
     * @var string
     * @ORM\Column(name="`first_name`", type="string", nullable=true)
     */
    private string $firstName;

    /**
     * @var string
     * @ORM\Column(name="`last_name`", type="string", nullable=true)
     */
    private string $lastName;

    /**
     * @var string
     * @ORM\Column(name="`phone`", type="string", nullable=true)
     */
    private string $phone;

    /**
     * @var string
     * @ORM\Column(name="`email`", type="string", nullable=true)
     */
    private string $email;

    /**
     * @var string|null
     * @ORM\Column(name="`reset_pass_hash`", type="string", length=60, nullable=true)
     */
    private ?string $resetPassHash = null;

    /**
     * @var string|null
     * @ORM\Column(name="`confirm_email_hash`", type="string", length=60, nullable=true)
     */
    private $confirmEmailHash = null;

    /**
     * @var string|null
     * @ORM\Column(name="`password`", type="string", length=60, nullable=true)
     */
    private ?string $password = null;

    // Joins

    /**
     * @var Collection|null
     * @ORM\OneToMany(targetEntity="App\Domain\ProjectUser\ProjectUserEntity", mappedBy="user", cascade={"all"})
     */
    private ?Collection $projectUsers;

    /**
     * Entity constructor.
     * @param array $initData
     * @throws Exception
     */
    public function __construct(array $initData = [])
    {
        parent::__construct();

        $this->status = $initData['status'] ?? 1;
        $this->role = $initData['role'];
        $this->firstName = $initData['firstName'];
        $this->lastName = $initData['lastName'];
        $this->phone = $initData['phone'];
        $this->email = $initData['email'];
        $this->confirmEmailHash ??= $initData['confirmEmailHash'];

        $this->projectUsers = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    /**
     * @return int
     */
    public function getRole(): int
    {
        return $this->role;
    }

    /**
     * @param int $role
     */
    public function setRole(int $role): void
    {
        $this->role = $role;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string|null
     */
    public function getResetPassHash(): ?string
    {
        return $this->resetPassHash;
    }

    /**
     * @param string|null $resetPassHash
     */
    public function setResetPassHash(?string $resetPassHash): void
    {
        $this->resetPassHash = $resetPassHash;
    }

    /**
     * @return string|null
     */
    public function getConfirmEmailHash(): ?string
    {
        return $this->confirmEmailHash;
    }

    /**
     * @param string|null $confirmEmailHash
     */
    public function setConfirmEmailHash(?string $confirmEmailHash): void
    {
        $this->confirmEmailHash = $confirmEmailHash;
    }

    /**
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    /**
     * @param $password
     * @return bool
     */
    public function verifyPassword($password): bool
    {
        return password_verify($password, $this->getPassword());
    }

    /**
     * @return Collection|null
     */
    public function getProjectUsers(): ?Collection
    {
        return $this->projectUsers;
    }

    /**
     * @param Collection|null $projectUsers
     */
    public function setProjectUsers(?Collection $projectUsers): void
    {
        $this->projectUsers = $projectUsers;
    }

}
