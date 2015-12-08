<?php

namespace Application\ClientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LicenseRecord
 *
 * @ORM\Table(name="license_record", indexes={@ORM\Index(name="confirmed_2", columns={"SE_test_id"}), @ORM\Index(name="confirmed", columns={"Insurance_Recordrecord_id"})})
 * @ORM\Entity
 */
class LicenseRecord
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="valid_till", type="date", nullable=false)
     */
    private $validTill;

    /**
     * @var \InsuranceRecord
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="InsuranceRecord")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Insurance_Recordrecord_id", referencedColumnName="record_id")
     * })
     */
    private $insuranceRecordrecord;

    /**
     * @var \SeTest
     *
     * @ORM\ManyToOne(targetEntity="SeTest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="SE_test_id", referencedColumnName="test_id")
     * })
     */
    private $seTest;


}

