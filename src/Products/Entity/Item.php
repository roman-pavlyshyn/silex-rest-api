<?php

namespace Products\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\Groups;
use Swagger\Annotations as SWG;

/**
 * @ORM\Entity(repositoryClass="Spray\PersistenceBundle\Repository\FilterableEntityRepository")
 * @ORM\Table(name="items")
 * @SWG\Model(id="Item")
 */
class Item {

    /**
     * @Type("integer")
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     * @Groups({"list", "detail"})
     * @SWG\Property(name="id",type="integer")
     */
    protected $id;

    /**
     * @Type("string")
     * @ORM\Column(type="string")
     * @Groups({"list", "detail"})
     * @SWG\Property(name="name",type="string")
     */
    protected $name;

    /**
     * @Type("integer")
     * @ORM\Column(type="integer")
     * @Groups({"list", "detail"})
     * @SWG\Property(name="price",type="integer")
     */
    protected $price;

    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="items")
     * @Groups({"detail"})
     */
    protected $category;

}
