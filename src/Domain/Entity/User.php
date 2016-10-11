<?php
/**
 * Created by PhpStorm.
 * User: dzaki
 * Date: 10/10/16
 * Time: 8:56
 */

namespace Malang\Mcf\Domain\Entity;

/**
 * Class User
 * @Entity(repositoryClass="Malang\Mcf\Domain\Repository\DoctrineUserRepository")
 * @package Malang\Mcf\Domain\Entity
 * @HasLifecycleCallbacks
 * @Table(name="users")
 */
class User
{
    /**
     * @Id
     * @Column(type="integer",nullable=false)
     * @var int
     * @GeneratedValue
     */
    private $id;

    /**
     * @Column(type="string" length=255,nullable=false)
     * @var string
     */
    private $name;

    /**
     * @Column(type="string",length=255,nullable=false)
     * @var string
     */
    private $username;

    /**
     * @Column(type="string",length=255,nullable=false)
     * @var string
     */
    private $password;

    /**
     * @Column(type="integer",nullable=false)
     * @var int
     */
    private $role;

    /**
     * @Column(type="datetime",name="created_at",nullable=false)
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @Column(type="datetime",name="updated_at",nullable=false)
     * @var \DateTime
     */
    private $updatedAt;

    public static function create()
    {

    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return int
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param int $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

}