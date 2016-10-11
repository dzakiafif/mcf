<?php
/**
 * Created by PhpStorm.
 * User: dzaki
 * Date: 10/10/16
 * Time: 10:39
 */

namespace Malang\Mcf\Domain\Repository;

use Doctrine\ORM\EntityRepository;
use Malang\Mcf\Domain\Constracts\Repository\RepositoryUserInterface;
use Malang\Mcf\Domain\Entity\User;

class DoctrineUserRepository extends EntityRepository implements RepositoryUserInterface
{

    /**
     * @param $id
     * @return User
     */
    public function findById($id)
    {
        // TODO: Implement findById() method.
        return $this->find($id);
    }

    /**
     * @param $username
     * @return User
     */
    public function findByUsername($username)
    {
        // TODO: Implement findByUsername() method.
        return $this->findOneBy(['username'=>$username]);
    }

    /**
     * @param $role
     * @return User
     */
    public function findByRole($role)
    {
        // TODO: Implement findByRole() method.
        return $this->findBy(['role'=>$role]);
    }
}