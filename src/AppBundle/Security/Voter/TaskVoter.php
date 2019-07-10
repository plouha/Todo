<?php

namespace AppBundle\Security\Voter;

use AppBundle\Entity\Task;
use AppBundle\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

class TaskVoter extends Voter           /* Création du Voter qui autorise ou EDIT et DELETE */
{

    protected function supports($attribute, $subject)
    {

        if (!$subject instanceof Task) {
            return false;
        }

        return in_array($attribute, ["delete", "edit"]);
    }

    protected function voteOnAttribute($attribute, $subject, TokenInterface $token)
    {

        if (!$token->getUser() instanceof User) {
            // the user must be logged in; if not, deny access
            return false;
        }

        return $token->getUser() === $subject->getUser();
    }

}
