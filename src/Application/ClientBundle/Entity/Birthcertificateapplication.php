<?php

namespace Application\ClientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Birthcertificateapplication
 *
 * @ORM\Table(name="birthcertificateapplication", indexes={@ORM\Index(name="apply_to", columns={"customer_id"}), @ORM\Index(name="directed_for", columns={"ag_ofiice_id"})})
 * @ORM\Entity
 */
class Birthcertificateapplication
{
    /**
     * @var integer
     *
     * @ORM\Column(name="appication_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $appicationId;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=false)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var \AgOffice
     *
     * @ORM\ManyToOne(targetEntity="AgOffice")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ag_ofiice_id", referencedColumnName="ofiice_id")
     * })
     */
    private $agOfiice;

    /**
     * @var \Customer
     *
     * @ORM\ManyToOne(targetEntity="Customer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customer_id", referencedColumnName="customer_id")
     * })
     */
    private $customer;


}

