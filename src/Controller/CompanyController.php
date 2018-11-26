<?php
// src/Controller/CompanyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CompanyController extends AbstractController {
    /**
     * @Route({
     *     "nl": "/over-ons",
     *     "en": "/about-us"
     * }, name="about_us")
     */
    public function about() {
        
    }
}