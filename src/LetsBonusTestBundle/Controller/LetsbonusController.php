<?php

namespace LetsBonusTestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class LetsbonusController extends Controller
{
    /**
     * @Route("/", name="lb_home")
     */
    public function indexAction()
    {
        return $this->render('LetsBonusTestBundle::index.html.twig');
    }
}
