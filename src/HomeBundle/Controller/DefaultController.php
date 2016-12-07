<?php

namespace HomeBundle\Controller;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {

        return $this->render('HomeBundle:Default:index.html.twig',array());
    }

}