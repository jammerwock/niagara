<?php
/**
 * Created by JetBrains PhpStorm.
 * User: aizen
 * Date: 02.09.13
 * Time: 17:14
 * To change this template use File | Settings | File Templates.
 */

namespace Application\Niagara\MainBundle\Menu;

use Doctrine\ORM\EntityManager;
use Knp\Menu\FactoryInterface;
use Symfony\Component\HttpFoundation\Request;

class MenuBuilder
{
    private $factory;
    private $em;

    function __construct(FactoryInterface $factory, EntityManager $em)
    {
        $this->factory = $factory;
        $this->em = $em;
    }

    public function createMainMenu(Request $request)
    {

        $menuRepo = $this->em->getRepository('MainBundle:MenuItem');
        $menuItems = $menuRepo->findAll();
        $menu = $this->factory->createItem('root');

        $iterator = new \ArrayIterator($menuItems);
        $currentUrl = $request->getRequestUri();
        $menu->setCurrentUri($currentUrl);
        foreach ($iterator as $item) {

            $menu->addChild($item->getLabel(), array('route' => $item->getLink()));
        }

//
//        $menu = $this->factory->createItem('root');
//        $menu->addChild('MainHome', array('route' => 'homepage','label' => 'Back to homepage'));
        return $menu;
    }
}