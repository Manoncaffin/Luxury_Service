<?php

namespace App\Controller;

use App\Entity\JobOffer;
use App\Repository\JobCategoryRepository;
use App\Repository\JobOfferRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class JobsController extends AbstractController
{

    #[Route('/jobs', name: 'app_jobs')]
    public function select(JobOfferRepository $jobOfferRepository, JobCategoryRepository $JobCategoryRepository): Response
    {
        $categories = $JobCategoryRepository -> findAll();
        $jobs = $jobOfferRepository -> findAll();
        $offers = $jobOfferRepository -> findBy ([ 'category' => 7]);
        return $this->render('jobs/index.html.twig', [
            'offers' => $offers,
            'categories' => $categories,
            'jobs' => $jobs,
      ]);
    }





    // DETAILS D'UN JOB
    #[Route('/jobs/show', name: 'app_show')]
    public function jobsshow(): Response
    {
        return $this->render('jobs/show.html.twig', [
            'controller_name' => 'JobsController',
        ]);
    }
}
