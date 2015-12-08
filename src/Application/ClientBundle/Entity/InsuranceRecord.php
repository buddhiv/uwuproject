<?php

namespace Application\ClientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InsuranceRecord
 *
 * @ORM\Table(name="insurance_record", indexes={@ORM\Index(name="has_2", columns={"vehicle_number"})})
 * @ORM\Entity
 */
class InsuranceRecord
{
    /**
     * @var integer
     *
     * @ORM\Column(name="record_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $recordId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="valid_till", type="date", nullable=false)
     */
    private $validTill;

    /**
     * @var \Vehicle
     *
     * @ORM\ManyToOne(targetEntity="Vehicle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vehicle_number", referencedColumnName="vehicle_number")
     * })
     */
    private $vehicleNumber;


}

