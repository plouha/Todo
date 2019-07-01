<?php

namespace AppBundle\Handler;

use AppBundle\Entity\Task;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

abstract class Handler
{  
  private $formFactory;
  
  protected $flashBag;
  
  protected $em;
  
  private $form;
  
  public function __construct(FormFactoryInterface $formFactory, FlashBagInterface $flashBag, EntityManagerInterface $em)
  {
    $this->formFactory = $formFactory;
    $this->flashBag = $flashBag;
    $this->em = $em;
  }
  
  abstract public function getFormType(): string;
  
  abstract public function process($data);
  
  public function handle(Request $request, $data): bool
  {
    $this->form = $this->formFactory->create($this->getFormType(), $data)->handleRequest($request);
    
    if ($this->form->isSubmitted() && $this->form->isValid()) {
      $this->process($data);
      
      return true;
    }
    
    return false;
  }
  
  public function getForm()
  {
    return $this->form; 
  }

}