<?php

namespace App\Controller\Admin;

use App\Entity\Candidacy;
use App\Entity\Candidate;
use App\Entity\Customer;
use App\Entity\Experience;
use App\Entity\File;
use App\Entity\Gender;
use App\Entity\JobCategory;
use App\Entity\JobOffer;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminDashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        // return parent::index();

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        // $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        // return $this->redirect($adminUrlGenerator->setController(OneOfYourCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        return $this->render('admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Luxury Service');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Candidate', 'fa-solid fa-user', Candidate::class);
        yield MenuItem::linkToCrud('Gender', 'fa-solid fa-person', Gender::class);
        yield MenuItem::linkToCrud('File', 'fa-solid fa-folder-open', File::class);
        yield MenuItem::linkToCrud('Experience', 'fa-solid fa-briefcase', Experience::class);
        yield MenuItem::linkToCrud('JobCategory', 'fa-solid fa-table', JobCategory::class);
        yield MenuItem::linkToCrud('Customer', 'fa-solid fa-user-secret', Customer::class);
        yield MenuItem::linkToCrud('JobOffer', 'fa-solid fa-flag', JobOffer::class);
        yield MenuItem::linkToCrud('Candidacy', 'fa-solid fa-square-check', Candidacy::class);
    }
}
