<?php

namespace AppBundle\Handler;

use AppBundle\Entity\Task;
use AppBundle\Repository\TaskRepository;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\TaskType;

class EditTaskHandler extends Handler
{

  public function getFormType(): string
    {
      return TaskType::class; 
    }
      
  public function process($data)
    {
      $this->em->flush();
      $this->flashBag->add('success', 'La tâche a été bien été modifiée.');
    }
}
