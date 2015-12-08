<?php

namespace Application\ClientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AgOffice
 *
 * @ORM\Table(name="ag_office")
 * @ORM\Entity
 */
class AgOffice
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ofiice_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ofiiceId;

    /**
     * @var string
     *
     * @ORM\Column(name="district", type="string", length=255, nullable=false)
     */
    private $district;

    /**
     * @var string
     *
     * @ORM\Column(name="zone", type="string", length=255, nullable=false)
     */
    private $zone;


}

