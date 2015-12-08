<?php

namespace Application\ClientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SeTest
 *
 * @ORM\Table(name="se_test", indexes={@ORM\Index(name="checked_by", columns={"vehicle_number"}), @ORM\Index(name="FKSE_Test283067", columns={"station_id"})})
 * @ORM\Entity
 */
class SeTest
{
    /**
     * @var integer
     *
     * @ORM\Column(name="test_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $testId;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=255, nullable=false)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="odometer", type="integer", nullable=false)
     */
    private $odometer;

    /**
     * @var integer
     *
     * @ORM\Column(name="valid_till", type="integer", nullable=false)
     */
    private $validTill;

    /**
     * @var integer
     *
     * @ORM\Column(name="test_type", type="integer", nullable=false)
     */
    private $testType;

    /**
     * @var \Station
     *
     * @ORM\ManyToOne(targetEntity="Station")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="station_id", referencedColumnName="station_id")
     * })
     */
    private $station;

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

