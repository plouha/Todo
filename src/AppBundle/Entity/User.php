<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * @ORM\Table("user")
 * @ORM\Entity
 * @UniqueEntity(
 *      fields= {"email"},
 *      message = "Cet email est déjà utilisé"
 *      )
 */
class User implements UserInterface
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25, unique=true)
     * @Assert\NotBlank(message="Vous devez saisir un nom d'utilisateur.")
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=60, unique=true)
     * @Assert\NotBlank(message="Vous devez saisir une adresse email.")
     * @Assert\Email(message="Le format de l'adresse n'est pas correcte.")
     */
    private $email;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Task", cascade={"remove"}, mappedBy="user")
     */
    private $tasks;

    /**
     * @ORM\Column(type="array")
     */
    private $roles;
    
    public function __construct() {
        $this->roles = array('ROLE_USER');
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
     * getUsername
     *
     * @return void
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * setUsername
     *
     * @param  mixed $username
     *
     * @return void
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * getSalt
     *
     * @return void
     */
    public function getSalt()
    {
        return null;
    }

    /**
     * getPassword
     *
     * @return void
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * setPassword
     *
     * @param  mixed $password
     *
     * @return void
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * getEmail
     *
     * @return void
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * setEmail
     *
     * @param  mixed $email
     *
     * @return void
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * getRoles
     *
     * @return array
     */
    public function getRoles(): ?array 
    {
        return $this->roles;
    }

    /**
     * eraseCredentials
     *
     * @return void
     */
    public function eraseCredentials()
    {
    }

    /**
     * Get the value of tasks
     *
     * @return  ArrayCollection
     */ 
    public function getTasks()
    {
        return $this->tasks;
    }

    /**
     * Set the value of tasks
     *
     * @param  Task  $tasks
     */ 
    public function setTask(Task $tasks)
    {
        $this->tasks[] = $task;

        $task->setUser($this);
    }

    /**
     * Set the value of roles
     *
     * @return  self
     */ 
    public function setRoles($roles)
    {
        $this->roles = $roles;

        return $this;
    }
}
