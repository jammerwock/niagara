<?php
/**
 * Created by JetBrains PhpStorm.
 * User: aizen
 * Date: 02.09.13
 * Time: 17:41
 * To change this template use File | Settings | File Templates.
 */

namespace Application\Niagara\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Form\Extension\Core\DataTransformer\BooleanToStringTransformer;

/**
 * Class Menu
 * @package Application\Niagara\MainBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="menu")
 */
class MenuItem {
    /**
     * @var integer $id
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @var string $label
     * @ORM\Column(type="string", length=100)
     *
     */
    protected $label;
    /**
     * @var string $title
     * @ORM\Column(type="string", length=100)
     *
     */
    protected $title;
    /**
     * @var string $link
     * @ORM\Column(type="string", length=100)
     */
    protected $link;
    /**
     * @var integer $parent
     * @ORM\Column(type="integer")
     */
    protected $parent;

    /**
     * @param string $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param int $parent
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
    }

    /**
     * @return int
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }


}