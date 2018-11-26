<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Psr\Log\LoggerInterface;

class LuckyController extends AbstractController {
    /**
     * @Route("/lucky/number/{max}", name="app_lucky_number")
     */
    public function number($max, LoggerInterface $logger) {
        $logger->info('We are logging!');
        $number = random_int(0, $max);

        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
    }

    public function index() {
        // redirects to the "homepage" route
        return $this->redirectToRoute('homepage');

        // redirectToRoute is a shortcut for:
        // return new RedirectResponse($this->generateUrl('homepage'));

        // does a permanent - 301 redirect
        return $this->redirectToRoute('homepage', array(), 301);

        // redirect to a route with parameters
        return $this->redirectToRoute('app_lucky_number', array('max' => 10));

        // redirects to a route and mantains the original query string parameters
        return $this->redirectToRoute('blog_show', $request->query->all());

        // redirects externally
        return $this->redirect('http://symfony.com/doc');
    }
}