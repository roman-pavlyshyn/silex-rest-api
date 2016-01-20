<?php

namespace Products\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass="Spray\PersistenceBundle\Repository\FilterableEntityRepository")
 * @ORM\Table(name="items")
 */
class Item {

    /**
     * @Type("integer")
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     * @Groups({"list", "detail"})
     */
    protected $id;

    /**
     * @Type("string")
     * @ORM\Column(type="string")
     * @Groups({"list", "detail"})
     */
    protected $name;

    /**
     * @Type("integer")
     * @ORM\Column(type="integer")
     * @Groups({"list", "detail"})
     */
    protected $price;

    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="items")
     * @Groups({"detail"})
     */
    protected $category;

}
