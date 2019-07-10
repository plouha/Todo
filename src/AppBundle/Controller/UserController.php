<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;





class UserController extends AbstractController
{
    private $encoder;

    /**
     * __construct
     *
     * @param  mixed $encoder
     *
     * @return void
     */
    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    /**
     * @var User
     */
    private $user;

    /**
     * Affiche la liste des users
     * @Route("/users", name="user_list")
     * @Security("is_granted('ROLE_ADMIN')")
     * listAction
     *
     * @return void
     */
    public function listAction()
    {
        return $this->render('user/list.html.twig', 
            ['users' => $this->getDoctrine()
                             ->getRepository('AppBundle:User')
                             ->findAll()]
        );
    }

    /**
     * Affiche le formulaire de création d'user
     * @Route("/users/create", name="user_create")
     * createAction
     *
     * @param  mixed $request
     *
     * @return void
     */
    public function createAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $password = $this->encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($password);

            $em->persist($user);
            $em->flush();

            $this->addFlash('success', "L'utilisateur a bien été ajouté.");

            return $this->redirectToRoute('user_list');
        }

        return $this->render('user/create.html.twig', ['form' => $form->createView()]);
    }

    /**
     * Edite un User
     * @Route("/users/{id}/edit", name="user_edit", methods={"GET", "POST"})
     * @Security("is_granted('ROLE_ADMIN')")
     * editAction
     *
     * @param  mixed $user
     * @param  mixed $request
     *
     * @return void
     */
    public function editAction(User $user, Request $request)
    {
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $password = $this->encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($password);

            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', "L'utilisateur a bien été modifié");

            return $this->redirectToRoute('user_list');
        }

        return $this->render('user/edit.html.twig', ['form' => $form->createView(), 'user' => $user]);
    }

    /**
    * @Route("/users/{id}/delete", name="user_delete", methods={"GET", "POST"})
    * @Security("is_granted('ROLE_ADMIN')")    
     * delete
     *
     * @param  mixed $user
     * @param  mixed $request
     *
     * @return void
     */
    public function delete(User $user, Request $request)
    {
        /*$this->denyAccessUnlessGranted('delete', $user);*/
        $formBuilder = $this->createFormBuilder();      //on crée un objet formulaire vide ... on y ajoute un bouton "submit"
        $formBuilder->add("Supprimer", SubmitType::class, array('attr' => array('class' => 'btn btn-danger')));
        $form = $formBuilder->getForm();                //on construit l'objet formulaire
        
        $form->handleRequest($request);                 //on analyse et on le form comme requete


            if($form->isSubmitted())                    //s'il a été soumis on exécute le code dessous
            {
                $em = $this->getDoctrine()->getManager();
                $em->remove($user);
                $em->flush();

                $this->addFlash("Success", "User supprimé !");

            return $this->redirectToRoute('user_list');
            }
        
        return $this->render('user/delete.html.twig', [ // s'il n'a pas été soumis on appelle le fichier twig
            'form' => $form->createView()               // et on crée la vue du fichier de confirmation
        ]);
    }
}
