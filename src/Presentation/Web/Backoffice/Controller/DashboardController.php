<?php

namespace App\Presentation\Web\Backoffice\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class DashboardController
 * @package App\Presentation\Web\Backoffice\Controller
 */
final class DashboardController extends Controller
{
    /**
     * @Route("/", name="dashboard")
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('@BackOffice/dashboard/index.html.twig');
    }
}
