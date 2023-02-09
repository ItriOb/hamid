<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use App\Entity\User;

class UserFixtures extends Fixture
{
    private UserPasswordHasherInterface $passwordHasher;


    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {

        $user=  new User();
        $user->setLogin("admin")
            ->setPassword($this->passwordHasher->hashPassword($user, "admin"))
            ->setNom("admin")
            ->setPrenom("admin");
        // $product = new Product();
        $manager->persist($user);

        $user2=  new User();
        $user2->setLogin("user")
            ->setPassword($this->passwordHasher->hashPassword($user2, "user"))
            ->setNom("user")
            ->setPrenom("user")
            ->setRoles(["ROLE_USER"]);
        // $product = new Product();
        $manager->persist($user2);

        $manager->flush();
    }
}
