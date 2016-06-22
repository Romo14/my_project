<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SecurityController extends Controller
{

    /**
     * @param $name
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route(path ="/login", name="app_security_login")
     */
    public function loginAction($name)
    {
        $authenticationUtils = $this->get('security.authentication_utils');
        $error = $authenticationUtils->getLastAuthenticationError();
        $username = $authenticationUtils->getLastUsername();

        return $this->render(':security:login.html.twig', array('last_username' => $username,
            'error' => $error));
    }

    /**
     * @Route(
     *     path="/login_check",
     *     name="app_security_check"
     * )
     */
    public function loginCheckAction()
    {
    }

    /**
     * @Route(
     *     path="/logout",
     *     name="app_security_logout"
     * )
     */
    public function logoutAction()
    {
    }
}
