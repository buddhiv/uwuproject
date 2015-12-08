<?php

namespace Application\ClientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Employee
 *
 * @ORM\Table(name="employee", indexes={@ORM\Index(name="work_in", columns={"ag_ofiice_id"})})
 * @ORM\Entity
 */
class Employee
{
    /**
     * @var integer
     *
     * @ORM\Column(name="employee_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $employeeId;

    /**
     * @var string
     *
     * @ORM\Column(name="employee_name", type="string", length=255, nullable=true)
     */
    private $employeeName;

    /**
     * @var string
     *
     * @ORM\Column(name="employee_address", type="string", length=255, nullable=true)
     */
    private $employeeAddress;

    /**
     * @var \AgOffice
     *
     * @ORM\ManyToOne(targetEntity="AgOffice")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ag_ofiice_id", referencedColumnName="ofiice_id")
     * })
     */
    private $agOfiice;


}

