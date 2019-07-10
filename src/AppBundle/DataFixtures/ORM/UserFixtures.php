<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\User;
use AppBundle\Entity\Task;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class UserFixtures extends Fixture          /* Fichier de création des fixtures */
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }
    public function load(ObjectManager $manager)
    {
        
        $user = new User();      // on crée un objet user
        $user 
            ->setUsername("User1");      // on affecte des valeurs à chaque champ
            $password = $this->encoder->encodePassword($user, 'password');
            $user->setPassword($password);
            $user->setEmail("user1@email.com");
            
        $manager->persist($user);   // on fait persister le User

            for($j=1; $j <= 3; $j++) {   // On fait une boucle qui s'arrête à 3 Tâches par user
                $task = new Task();      // on crée une tâche x 3 pour chaque user
 
                $task->setCreatedAt(new \DateTime());      // on affecte des valeurs à chaque champ
                $task->setTitle("Tache".$j);
                $task->setContent("Action à faire");
                $task->setIsDone("0");
                $task->setUser($user);
                    
                $manager->persist($task);   // on fait persister les tâches
            }

        $user = new User();      // on crée un objet user
        $user 
            ->setUsername("User2");      // on affecte des valeurs à chaque champ
            $password = $this->encoder->encodePassword($user, 'password');
            $user->setPassword($password);
            $user->setEmail("user2@email.com");
            
        $manager->persist($user);   // on fait persister le User

            for($j=4; $j <= 6; $j++) {   // On fait une boucle qui s'arrête à 3 Tâches par user
                $task = new Task();      // on crée une tâche x 3 pour chaque user
 
                $task->setCreatedAt(new \DateTime());      // on affecte des valeurs à chaque champ
                $task->setTitle("Tache".$j);
                $task->setContent("Action à faire");
                $task->setIsDone("0");
                $task->setUser($user);
                    
                $manager->persist($task);   // on fait persister les tâches
            }
        
        $user = new User();      // on crée un objet user
        $user 
            ->setUsername("User3");      // on affecte des valeurs à chaque champ
            $password = $this->encoder->encodePassword($user, 'password');
            $user->setPassword($password);
            $user->setEmail("user3@email.com");
            
        $manager->persist($user);   // on fait persister le User

            for($j=7; $j <= 9; $j++) {   // On fait une boucle qui s'arrête à 3 Tâches par user
                $task = new Task();      // on crée une tâche x 3 pour chaque user
 
                $task->setCreatedAt(new \DateTime());      // on affecte des valeurs à chaque champ
                $task->setTitle("Tache".$j);
                $task->setContent("Action à faire");
                $task->setIsDone("0");
                $task->setUser($user);
                    
                $manager->persist($task);   // on fait persister les tâches
            }

        $user = new User();      // on crée l'administrateur
        $user 
            ->setUsername("Admin");      // on affecte des valeurs à chaque champ
            $password = $this->encoder->encodePassword($user, 'password');
            $user->setPassword($password);
            $user->setEmail("admin@email.com");
            $user->setRoles(["ROLE_ADMIN"]);
            
        $manager->persist($user);   // on fait persister l'administrateur

        $manager->flush();          // on injecte toutes les informations en base de données
    }
}
