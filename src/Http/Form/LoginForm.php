<?php
/**
 * Created by PhpStorm.
 * User: dzaki
 * Date: 10/10/16
 * Time: 11:24
 */

namespace Malang\Mcf\Http\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

class LoginForm extends AbstractType
{

    private $username;

    private $password;

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
    }

}