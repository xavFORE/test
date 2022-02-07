<?php

namespace App\DataFixtures;

use App\Entity\Departement;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $dep = new Departement();
        $dep->setName( 'RH' );
        $manager->persist( $dep );

        $dep = new Departement();
        $dep->setName( 'Direction' );
        $manager->persist( $dep );

        $dep = new Departement();
        $dep->setName( 'Com' );
        $manager->persist( $dep );

        $dep = new Departement();
        $dep->setName( 'Développement' );
        $manager->persist( $dep );
        
        $manager->flush();
    }
}
