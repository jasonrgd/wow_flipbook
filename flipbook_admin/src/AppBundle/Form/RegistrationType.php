<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add("fName", null, array('label' => 'First Name', 'translation_domain' => 'FOSUserBundle'));
        $builder->add("lName", null, array('label' => 'Last Name', 'translation_domain' => 'FOSUserBundle'));
        $builder->add("title", null, array('label' => 'Title', 'translation_domain' => 'FOSUserBundle'));
        $builder->add("company", null, array('label' => 'Company', 'translation_domain' => 'FOSUserBundle'));
        $builder->add("phone", null, array('label' => 'Phone Number', 'translation_domain' => 'FOSUserBundle'));
        $builder->add("mobile", null, array('required' => false,'label' => 'Mobile Number', 'translation_domain' => 'FOSUserBundle'));
        $builder->add("address", null, array('label' => 'Postal Address', 'translation_domain' => 'FOSUserBundle'));
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

        // Or for Symfony < 2.8
        // return 'fos_user_registration';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

    // For Symfony 2.x
    public function getName()
    {
        return $this->getBlockPrefix();
    }
}