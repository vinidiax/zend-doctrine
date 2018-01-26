<?php

namespace User\Fixture;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use User\Entity\User;

class UserFixture implements FixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $user = new User();

        $user->setUserBirthDate(\DateTime::createFromFormat('Y-m-d', '1986-02-11'));
        $user->setUserPassword(password_hash('123456',PASSWORD_DEFAULT));
        $user->setUserContactPhone('48999236161');
        $user->setUserDocumentId('05957856975');
        $user->setUserEmail('vinidiax@gmail.com');
        $user->setUserGender(1);
        $user->setUserLastName('Dias Fernandes');
        $user->setUserLogin('vinidiax');
        $user->setUserName('Vinicius');
        $user->setUserPhoto('teste');
        $user->setUserRegisteredDate(\DateTime::createFromFormat('Y-m-d', '2018-01-26'));
        $user->setUserRegisteredTime(\DateTime::createFromFormat('Y-m-d H:i:s', '2018-01-26 08:05:26'));
        $user->setUserSelfDescription('Teste descrição');
        $user->setUserTotalScore(5);

        $manager->persist($user);
        $manager->flush();
    }
}