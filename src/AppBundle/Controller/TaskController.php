<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use AppBundle\Entity\Task;
use AppBundle\Form\TaskType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class TaskController extends AbstractController
{
    /**
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
     * @param Request $request
     * 
     * @Route("/tasks/create", name="task_create")
     * @Security("is_granted('ROLE_USER')")
     */
    public function createAction(Request $request)
    {
        $task = new Task();
        $task->setUser($this->getUser());
        $form = $this->createForm(TaskType::class, $task);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($task);
            $em->flush();

            $this->addFlash('success', 'La tâche a été bien été ajoutée.');

            return $this->redirectToRoute('task_list');
        }

        return $this->render('task/create.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("/tasks/{id}/edit", name="task_edit")
     * @Security("is_granted('ROLE_USER')")
     */
    public function editAction(Task $task, Request $request)
    {
        $this->denyAccessUnlessGranted('edit', $task);
        
        $form = $this->createForm(TaskType::class, $task);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', 'La tâche a bien été modifiée.');

            return $this->redirectToRoute('task_list');
        }

        return $this->render('task/edit.html.twig', [
            'form' => $form->createView(),
            'task' => $task,
        ]);
    }

    /**
     * @Route("/tasks/{id}/toggle", name="task_toggle")
     * @Security("is_granted('ROLE_USER')")
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
     * @Route("/tasks/{id}/delete", name="task_delete")
     * @Security("is_granted('ROLE_USER')")
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
