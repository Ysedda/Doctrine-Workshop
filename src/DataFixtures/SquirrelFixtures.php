<?php

namespace App\DataFixtures;

use App\Entity\Squirrel;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class SquirrelFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 20; $i++) {
            $squirrel = new Squirrel();
            $squirrel->setName('name' . $i);
            $manager->persist($squirrel);
        }
        $manager->flush();
    }
}
