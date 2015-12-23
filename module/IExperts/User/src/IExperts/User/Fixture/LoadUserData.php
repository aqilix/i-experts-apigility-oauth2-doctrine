<?php
namespace IExperts\User\Fixture;

use Doctrine\Common\Persistence\ObjectManager;
// use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use IExperts\User\Entity\User;
use Zend\Crypt\Password\Bcrypt;

// class LoadUserData implements FixtureInterface
class LoadUserData extends AbstractFixture implements OrderedFixtureInterface
{
    public function getOrder()
    {
        return 0;
    }
    
    public function load(ObjectManager $manager)
    {
        $bcrypt   = new Bcrypt();
        $password = $bcrypt->create('2015');
        
        $userData = array(
            array(
                'username' => 'aqilix',
                'email'    => 'aqilix@example.com',
                'password' => $password,
            ),
            array(
                'username' => 'dolly',
                'email'    => 'dolly@example.com',
                'password' => $password,
            ),
            array(
                'username' => 'aswin',
                'email'    => 'aswin@example.com',
                'password' => $password,
            )
        );
        
        foreach ($userData as $key => $data) {
            $user[$key] = new User();
            $user[$key]->setUsername($data['username']);
            $user[$key]->setEmail($data['email']);
            $user[$key]->setPassword($data['password']);
            $manager->persist($user[$key]);
        }
        
        $manager->flush();
        foreach ($userData as $key => $data) {
            $this->addReference('user' . $key, $user[$key]);
        }
    }
}
