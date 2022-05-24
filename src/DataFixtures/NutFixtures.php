<?php

namespace App\DataFixtures;

use App\Entity\Nut;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class NutFixtures extends Fixture
{
    public const NUTS = [
        ['name' => 'Noix', 'stock' => 129],
        ['name' => 'Noisette', 'stock' => 364],
        ['name' => 'Amande', 'stock' => '53'],
    ];
    
    public function load(ObjectManager $manager)
    {
        foreach (self::NUTS as $nut) {
            $newNut = new Nut();
            $newNut->setName($nut['name']);
            $newNut->setStock($nut['stock']);
            $manager->persist($newNut);
        }
        $manager->flush();
    }
}
