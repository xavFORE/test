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
        $dep->setMail( 'RH@toto.com' );
        $manager->persist( $dep );

        $dep = new Departement();
        $dep->setName( 'Direction' );
        $dep->setMail( 'direction@toto.com' );
        $manager->persist( $dep );

        $dep = new Departement();
        $dep->setName( 'Com' );
        $dep->setMail( 'com@toto.com' );
        $manager->persist( $dep );

        $dep = new Departement();
        $dep->setName( 'Développement' );
        $dep->setMail( 'dev@toto.com' );
        $manager->persist( $dep );
        
        $manager->flush();
    }
}
