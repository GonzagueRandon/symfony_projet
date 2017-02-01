<?php

namespace Cinema\BiblioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('CinemaBiblioBundle:Default:index.html.twig');
    }

    /**
     * @Route("/films")
     */
    public function listAction()
    {
        $films = $this->getDoctrine()->getRepository('CinemaBiblioBundle:film')->findAll();
        return $this->render('CinemaBiblioBundle:film:list.html.twig');
    }

    /**
     * @Route("/film/{id}", requirements={"id": "\d+"})
     */
    public function showAction($id)
    {
        return $this->render('CinemaBiblioBundle:film:show.html.twig');
    }
}