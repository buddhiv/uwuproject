<?php

namespace Application\ClientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Model
 *
 * @ORM\Table(name="model")
 * @ORM\Entity
 */
class Model
{
    /**
     * @var integer
     *
     * @ORM\Column(name="model_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $modelId;

    /**
     * @var integer
     *
     * @ORM\Column(name="name", type="integer", nullable=true)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="engine_cc", type="integer", nullable=true)
     */
    private $engineCc;


}

