<?php

namespace App\DataFixtures;


use App\Entity\Categorie;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CategorieFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
       $cat = new Categorie();
       $cat = setLibelle("Categorie1"); 
       $cat = new Categorie();
       $cat = setCreateAt(new \DateTime()); 

       $manager->persist($cat);
       $manager->flush();

    }
}
