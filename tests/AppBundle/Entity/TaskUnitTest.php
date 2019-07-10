<?php

namespace Tests\AppBundle\Entity;
use AppBundle\Entity\Task;
use AppBundle\Entity\User;
use PHPUnit\Framework\TestCase;

/**
 * Class TaskUnitTest
 * @package Tests\AppBundle\Entity
 */
class TaskUnitTest extends TestCase
{
    /**
     * @var
     */
    private $task;

    public function setUp()
    {
        $this->task = new Task();
    }

    public function testGetId()
    {
        $this->assertEquals(null, $this->task->getId());
    }

    public function testGetCreatedAt()
    {
        $date = new \DateTime();
        $this->task->setCreatedAt($date);
        static::assertSame($date, $this->task->getCreatedAt());
    }

    public function testGetTitle()
    {
        $this->task->setTitle('test');
        static::assertSame('test', $this->task->getTitle());
    }

    public function testGetContent()
    {
        $this->task->setContent('test');
        static::assertSame('test', $this->task->getContent());
    }

    public function testIsDone()
    {
        $this->task->setIsDone(false);
        static::assertSame(false, $this->task->isDone());
    }

    public function testGetUser()
    {
        $user = new User();
        $this->task->setUser($user);
        static::assertSame($user, $this->task->getUser());
    }

}