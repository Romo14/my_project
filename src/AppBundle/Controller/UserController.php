<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    /**
     * @Route(path ="/", name="app_user_index")
     */
    public function indexAction()
    {
        $m = $this->getDoctrine()->getManager();
        $repository = $m->getRepository('AppBundle:User');
        $users = $repository->findAll();

        return $this->render(':user:index.html.twig', array('users' => $users));
    }


    /**
     * @Route(path ="/insert", name="app_user_insert")
     */
    public function insertAction()
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        return $this->render(':user:form.html.twig', [
            'form' => $form->createView(),
            'action' => $this->generateUrl('app_user_doInsert')
        ]);
    }

    /**
     * @Route(path ="/doInsert", name="app_user_doInsert")
     */
    public function doInsert(Request $request)
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $m = $this->getDoctrine()->getManager();
            $m->persist($user);
            $m->flush();

            $this->addFlash('messages', 'User added');

            return $this->redirectToRoute('app_user_index');
        }

        $this->addFlash('messages', 'Review your form data');

        return $this->render(':user:form.html.twig',
            [
                'form' => $form->createView(),
                'action' => $this->generateUrl('app_user_doInsert')
            ]
        );

    }

    /**
     * @Route(path ="/update/{id}", name="app_user_update")
     */
    public function updateFunction($id)
    {
        $m = $this->getDoctrine()->getManager();
        $repository = $m->getRepository('AppBundle:User');
        $user = $repository->find($id);
        $form = $this->createForm(UserType::class, $user);

        return $this->render(':user:form.html.twig', [
            'form' => $form->createView(),
            'action' => $this->generateUrl('app_user_doUpdate', ['id' => $id])
        ]);

    }

    /**
     * @Route(path ="/doUpdate/{id}", name="app_user_doUpdate")
     */
    public function doUpdate(Request $request, $id)
    {
        $m = $this->getDoctrine()->getManager();
        $repository = $m->getRepository('AppBundle:User');
        $user = $repository->find($id);
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $m = $this->getDoctrine()->getManager();
            $m->flush();

            $this->addFlash('messages', 'User updated');

            return $this->redirectToRoute('app_user_index');
        }

        $this->addFlash('messages', 'Review your form data');

        return $this->render(':user:form.html.twig',
            [
                'form' => $form->createView(),
                'action' => $this->generateUrl('app_user_doUpdate', ['id' => $id])
            ]
        );
    }

    /**
     * @Route(path="/delete/{id}", name="app_user_delete")
     *
     * @ParamConverter("user", class="AppBundle:User")
     */
    public function doDelete($user)
    {
        $m = $this->getDoctrine()->getManager();
        $repository = $m->getRepository('AppBundle:User');
        $m->remove($user);
        $m->flush();

        $this->addFlash('messages', 'User deleted');

        return $this->redirectToRoute('app_user_index');
    }

}
