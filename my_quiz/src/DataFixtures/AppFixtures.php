<?php

namespace App\DataFixtures;

use App\Entity\User;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
// use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class AppFixtures extends Fixture
{
	private $encoder;

	public function __construct(UserPasswordEncoderInterface $encoder)
	{
	    $this->encoder = $encoder;
	}

    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

         // foreach ($this->getUserData() as [$email, $roles, $password]) {
            $admin = new User();
            $admin->setEmail('admin@gmail.com');
            $admin->setRoles(array('ROLE_ADMIN'));
            $admin->setPassword($this->encoder->encodePassword($admin, 'passadmin'));

            $manager->persist($admin);
            // $this->addReference($email, $user);
        // }

        $manager->flush();
    }

    // private function getUserData(): array
    // {
    //     return [
    //         ['admin@gmail.com', ['ROLE_ADMIN'], 'passadmin'],
    //     ];
    // }

}
