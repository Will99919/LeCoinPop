<?php

namespace App\Controller\Admin;

use App\Entity\Carrier;
use App\Entity\Category;
use App\Entity\Order;
use App\Entity\Product;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{

    

    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        //$routeBuilder = $this->getUser(AdminUrlGenerator::class)->build();

        //return $this->redirect($routeBuilder->setController(OrderCrudController::class)->generateUrl());
        

         //$adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
         //return $this->redirect($adminUrlGenerator->setController(UserCrudController::class)->generateUrl());

        
        return $this->render('Admin/index.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Le coin pop');
    }

    public function configureMenuItems(): iterable
    {
       
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Utilisateur', 'fas fa-user', User::class);
        yield MenuItem::linkToCrud('Categories', 'fas fa-list', Category::class);
/*         yield MenuItem::linkToCrud('Films', 'fa-solid fa-film', Product::class);
        yield MenuItem::linkToCrud('Séries', 'fas fa-truck', Carrier::class); */
    }
}
