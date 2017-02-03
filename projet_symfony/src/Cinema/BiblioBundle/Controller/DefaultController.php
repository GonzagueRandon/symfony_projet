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
        $films = $this->getDoctrine()->getRepository('CinemaBiblioBundle:Film')->findAll();

        $titre_de_la_page = 'films de la bibliothèques';

        return $this->render(
            'CinemaBiblioBundle:Film:list.html.twig',
            ['films' => $films, 'titre' => $titre_de_la_page]
        );
    }


    /**
     * @Route("/film/{id}", requirements={"id": "\d+"})
     */
    public function showAction($id)
{
    $film = $this->getDoctrine()->getRepository('CinemaBiblioBundle:Film')->find($id);

    return $this->render(
        'CinemaBiblioBundle:Film:show.html.twig',
        ['film' => $film]
    );
}
}