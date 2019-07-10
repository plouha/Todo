<?php

namespace AppBundle\Handler;

use AppBundle\Entity\Task;
use AppBundle\Repository\TaskRepository;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\TaskType;

class EditTaskHandler extends Handler     /* handler pour EditTask */
{

  /**
   * getFormType
   *
   * @return string
   */
  public function getFormType(): string
    {
      return TaskType::class; 
    }
      
  /**
   * process
   *
   * @param  mixed $data
   *
   * @return void
   */
  public function process($data)
    {
      $this->em->flush();
      $this->flashBag->add('success', 'La tâche a été bien été modifiée.');
    }
}
