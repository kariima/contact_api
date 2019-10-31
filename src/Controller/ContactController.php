<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends Controller
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index()
    {
        return $this->render('base.html.twig');
    }
}
