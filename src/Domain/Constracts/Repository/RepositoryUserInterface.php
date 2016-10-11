<?php
/**
 * Created by PhpStorm.
 * User: dzaki
 * Date: 10/10/16
 * Time: 10:37
 */

namespace Malang\Mcf\Domain\Constracts\Repository;

use Malang\Mcf\Domain\Entity\User;


interface RepositoryUserInterface
{

    /**
     * @param $id
     * @return User
     */
    public function findById($id);

    /**
     * @param $username
     * @return User
     */
    public function findByUsername($username);

    /**
     * @param $role
     * @return User
     */
    public function findByRole($role);

}