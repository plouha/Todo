<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table
 */
class Task
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank(message="Vous devez saisir un titre.")
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank(message="Vous devez saisir du contenu.")
     */
    private $content;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isDone;

    /**
     * @var User
     * 
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="tasks")
     * @ORM\JoinColumn(nullable=true)
     */
    private $user;    

    public function __construct()
    {
        $this->createdAt = new \Datetime();
        $this->isDone = false;
    }

    /**
     * getId
     *
     * @return void
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * getCreatedAt
     *
     * @return void
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * setCreatedAt
     *
     * @param  mixed $createdAt
     *
     * @return void
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * getTitle
     *
     * @return void
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * setTitle
     *
     * @param  mixed $title
     *
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * getContent
     *
     * @return void
     */
    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * isDone
     *
     * @return void
     */
    public function isDone()
    {
        return $this->isDone;
    }

    /**
     * toggle
     *
     * @param  mixed $flag
     *
     * @return void
     */
    public function toggle($flag)
    {
        $this->isDone = $flag;
    }

    /**
     * Get the value of user
     *
     * @return  User
     */ 
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set the value of user
     *
     * @param  User  $user
     *
     * @return  self
     */ 
    public function setUser(User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Set the value of isDone
     *
     * @return  self
     */ 
    public function setIsDone($isDone)
    {
        $this->isDone = $isDone;

        return $this;
    }
}
