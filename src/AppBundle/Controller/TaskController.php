<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use AppBundle\Entity\Task;
use AppBundle\Form\TaskType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use AppBundle\Handler\AddTaskHandler;
use AppBundle\Handler\EditTaskHandler;
use Symfony\Component\Form\FormFactoryInterface;


class TaskController extends AbstractController
{
    /**
     * Affiche la liste des tâches à faire
     * @Route("/tasks", name="task_list", methods="GET")
     * @Security("is_granted('ROLE_USER')")
     */
    public function listAction()
    {
  
        $user = $this->getUser()->getId();

        $repo = $this->getDoctrine()->getRepository('AppBundle:Task');

        $tasks = $repo->findBy(
                        array('isDone' => false),
                        array('createdAt' => 'asc'),
                        null,
                        null
                    );

        return $this->render('task/list.html.twig', array(
            'tasks' => $tasks,
            'user' => $user,
            ));
    }

    /**
     * Afiiche la liste des tâches terminées
     * @Route("/tasksdone", name="task_done", methods="GET")
     * @Security("is_granted('ROLE_USER')")
     */
    public function listDoneAction()
    {
                
        $user = $this->getUser()->getId();

        $repo = $this->getDoctrine()->getRepository('AppBundle:Task');

        $tasks = $repo->findBy(
                          array('isDone' => true),
                          array('createdAt' => 'asc'),
                          null,
                          null
                      );

        return $this->render('task/done.html.twig', array(
            'tasks' => $tasks,
            'user' => $user,
        ));
    }

    /**
     * Création d'une tâche
     * @param Request $request
     * @Route("/tasks/create", name="task_create")
     * @Security("is_granted('ROLE_USER')")
     */
    public function createAction(Request $request, AddTaskHandler $addTaskHandler)
    {
        $task = new Task();
        $task->setUser($this->getUser());    
            if ($addTaskHandler->handle($request, $task)) { 
                return $this->redirectToRoute('task_list');
            }
        return $this->render('task/create.html.twig', [
            'form' => $addTaskHandler->getForm()->createView()]);
    }

    /**
     * Edite une tâche
     * @Route("/tasks/{id}/edit", name="task_edit")
     * @Security("is_granted('ROLE_USER')")
     * editAction
     *
     * @param  mixed $task
     * @param  mixed $request
     * @param  mixed $editTaskHandler
     *
     * @return void
     */
    public function editAction(Task $task, Request $request, EditTaskHandler $editTaskHandler)
    {
        $this->denyAccessUnlessGranted('edit', $task);
        
        if ($editTaskHandler->handle($request, $task)) { 
            return $this->redirectToRoute('task_list');
        }
        return $this->render('task/edit.html.twig', [
            'form' => $editTaskHandler->getForm()->createView(),
            'task' => $task,
        ]);
    }
    
    /**
     * Permet de changer le toggle
     * @Route("/tasks/{id}/toggle", name="task_toggle")
     * @Security("is_granted('ROLE_USER')")
     * toggleTaskAction
     *
     * @param  mixed $task
     *
     * @return void
     */
    public function toggleTaskAction(Task $task)
    {
        $this->denyAccessUnlessGranted('edit', $task);

        $task->toggle(!$task->isDone());
        $this->getDoctrine()->getManager()->flush();

        $this->addFlash('success', sprintf('La tâche %s a bien changé d\'état.', $task->getTitle()));

        return $this->redirectToRoute('homepage');
    }

    /**
     * Supprime une tâche
     * @Route("/tasks/{id}/delete", name="task_delete")
     * @Security("is_granted('ROLE_USER')")
     * deleteTaskAction
     *
     * @param  mixed $task
     *
     * @return void
     */
    public function deleteTaskAction(Task $task)
    {
        $this->denyAccessUnlessGranted('delete', $task);
        
        $em = $this->getDoctrine()->getManager();
        $em->remove($task);
        $em->flush();

        $this->addFlash('success', 'La tâche a bien été supprimée.');

        return $this->redirectToRoute('task_list');
    }
}
