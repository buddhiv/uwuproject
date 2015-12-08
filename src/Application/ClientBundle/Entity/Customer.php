<?php

namespace Application\ClientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Customer
 *
 * @ORM\Table(name="customer")
 * @ORM\Entity
 */
class Customer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="customer_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $customerId;

    /**
     * @var integer
     *
     * @ORM\Column(name="mobile_number", type="integer", nullable=false)
     */
    private $mobileNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="service_provider", type="integer", nullable=false)
     */
    private $serviceProvider;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_name", type="integer", nullable=false)
     */
    private $customerName;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_address", type="integer", nullable=false)
     */
    private $customerAddress;


}

