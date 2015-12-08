<?php

namespace Application\ClientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vehicle
 *
 * @ORM\Table(name="vehicle", indexes={@ORM\Index(name="having", columns={"brand_id"}), @ORM\Index(name="FKVehicle582048", columns={"customer_id"}), @ORM\Index(name="has", columns={"model_id"})})
 * @ORM\Entity
 */
class Vehicle
{
    /**
     * @var string
     *
     * @ORM\Column(name="vehicle_number", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $vehicleNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="engine_number", type="integer", nullable=true)
     */
    private $engineNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="chassis_number", type="integer", nullable=true)
     */
    private $chassisNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="fuel_type", type="string", length=255, nullable=true)
     */
    private $fuelType;

    /**
     * @var string
     *
     * @ORM\Column(name="year", type="string", length=255, nullable=true)
     */
    private $year;

    /**
     * @var \Model
     *
     * @ORM\ManyToOne(targetEntity="Model")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="model_id", referencedColumnName="model_id")
     * })
     */
    private $model;

    /**
     * @var \Customer
     *
     * @ORM\ManyToOne(targetEntity="Customer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customer_id", referencedColumnName="customer_id")
     * })
     */
    private $customer;

    /**
     * @var \Brand
     *
     * @ORM\ManyToOne(targetEntity="Brand")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="brand_id", referencedColumnName="brand_id")
     * })
     */
    private $brand;


}

