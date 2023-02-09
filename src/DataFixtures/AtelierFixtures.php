<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Atelier;
use App\Entity\User;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AtelierFixtures extends Fixture
{
    private UserPasswordHasherInterface $passwordHasher;


    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }
    public function load(ObjectManager $manager): void
    {
        $faker = \Faker\Factory::create("fr_FR");
        for($i=1; $i<=10; $i++){
            $user=  new User();
            $user->setLogin($faker->name)
                ->setPassword($this->passwordHasher->hashPassword($user, $faker->password))
                ->setNom($faker->name)
                ->setPrenom($faker->name);
            // $product = new Product();
            $manager->persist($user);


            $atelier = new Atelier();
            $atelier ->setNom($faker -> sentence)
                ->setDescription("<p>".
                    join("<p></p>",$faker->paragraphs). "</p>")->setNomInstructeur($user);
            $manager->persist($atelier);
        }
        $manager->flush();
    }
}