<?php

namespace App\Controller;

use App\Entity\JobOffer;
use App\Repository\JobCategoryRepository;
use App\Repository\JobOfferRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(JobOfferRepository $jobOfferRepository, JobCategoryRepository $JobCategoryRepository): Response
    {
        $categories = $JobCategoryRepository -> findAll();
        $jobs = $jobOfferRepository -> findAll();
        $offers = $jobOfferRepository -> findBy ([ 'category' => 7]);
        return $this->render('home/index.html.twig', [
            'jobs' => $jobs,
            'offers' => $offers,
            'categories' => $categories,
      ]);
    }
}
