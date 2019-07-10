<?php

namespace Tests\AppBundle\Entity;

use AppBundle\Entity\Task;
use AppBundle\Entity\User;
use PHPUnit\Framework\TestCase;

/**
 * Class UserUnitTest
 * @package Tests\AppBundle\Entity
 */
class UserUnitTest extends TestCase
{
    /**
     * @var
     */
    private $user;

    public function setUp()
    {
        $this->user = new User();
    }

    public function testGetId()
    {
        $this->assertEquals(null, $this->user->getId());
    }

    public function testGetUsername()
    {
        $this->user->setUsername('test');
        static::assertSame('test', $this->user->getUsername());
    }

    public function testGetPassword()
    {
        $this->user->setPassword('test');
        static::assertSame('test', $this->user->getPassword());
    }

    public function testGetEmail()
    {
        $this->user->setEmail('test@email.com');
        static::assertSame('test@email.com', $this->user->getEmail());
    }

    public function testGetRoles()
    {
        $this->user->setRoles(['ROLE_USER']);
        static::assertSame(['ROLE_USER'], $this->user->getRoles());
    }

    public function testGetSalt()
    {
        static::assertSame(null, $this->user->getSalt());
    }

    public function testEraseCredential()
    {
        static::assertSame(null, $this->user->eraseCredentials());
    }
}