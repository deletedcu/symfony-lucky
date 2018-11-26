<?php
// src/Controller/BlogController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController {
    /**
     * Matches /blog exactly
     * 
     * @Route("/blog/{page<\d+>?1}", name="blog_list")
     */
    public function list($page) {

    }

    /**
     * Matches /blog/*
     * 
     * @Route("/blog/(slug)", name="blog_show")
     */
    public function show($slug) {

    }
}