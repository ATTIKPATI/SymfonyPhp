<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i=1; $i <=20 ; $i++) { 
            $cat = new  Categorie();
             $cat->setLibelle("Categorie".$i);
             $manager->persist($cat);
        }
       

        $manager->flush(); 
         
        
    }
}
