<?php

namespace Tests\AppBundle\Form;

use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use Symfony\Component\Form\Test\TypeTestCase;


class UserTypeTest extends TypeTestCase
{

    public function testForm()  /*test du formulaire User */
    {
        $formData = [
            'username' => 'test',
            'password' => [
                'first_option' => 'pass',
                'second_option' => 'pass'
            ],
            'email' => 'test@mail.com',
            'roles' => ['test']
        ];
        
        $userToCompare = $this->createMock(User::class);
        $form = $this->factory->create(UserType::class, $userToCompare);
        
        $user = $this->createMock(User::class);
        $user->setUsername('test');
        $user->setPassword('pass');
        $user->setEmail('test@mail.com');
        $user->setRoles(['test']);
        
        $form->submit($formData);
        
        $this->assertTrue($form->isValid());
        $this->assertEquals($user, $userToCompare);
        $this->assertInstanceOf(User::class, $form->getData());
    }
}