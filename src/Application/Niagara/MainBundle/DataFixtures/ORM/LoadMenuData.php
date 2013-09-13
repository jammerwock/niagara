<?php
namespace Application\Niagara\MainBundle\DataFixtures\ORM;

use Application\Niagara\MainBundle\Entity\Menu;
use Doctrine\Common\DataFixtures\Doctrine;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadMenuData implements FixtureInterface {
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param Doctrine\Common\Persistence\ObjectManager $manager
     */
    function load(ObjectManager $manager)
    {
        $mainMenu = new Menu();
        $mainMenu->setLabel('Home Label');
        $mainMenu->setTitle('Home Title');
        $mainMenu->setLink('homepage');
        $mainMenu->setParent(0);

        $manager->persist($mainMenu);
        $manager->flush();

        $mainMenu = new Menu();
        $mainMenu->setLabel('Sub Home Label');
        $mainMenu->setTitle('Sub Home Title');
        $mainMenu->setLink('homepage');
        $mainMenu->setParent(1);

        $manager->persist($mainMenu);
        $manager->flush();
    }
}