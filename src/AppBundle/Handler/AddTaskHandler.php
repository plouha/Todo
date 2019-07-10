<?php

namespace AppBundle\Handler;

use AppBundle\Entity\Task;
use AppBundle\Repository\TaskRepository;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\TaskType;

class AddTaskHandler extends Handler      /* handler pour AddTask */
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
    $this->em->persist($data);
    $this->em->flush();
    $this->flashBag->add('success', 'La tâche a été bien été ajoutée.');
  }
}
 