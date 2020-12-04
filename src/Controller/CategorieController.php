<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategorieController extends AbstractController
{
    /**
     * @Route("/categorie/show", name="categorie_show",methods={"POST","GET"})
     */
    public function index(CategorieRepository $repo): Response
    {

         $categories= $repo->findAll();
        return $this->render('categorie/index.html.twig', [
           "categories"=>$categories
        ]);
    }
}
