<?php


namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Bus
 *
 * @ORM\Table(name="bus")
 * @ORM\Entity
 */
class Bus
{
    /**
     * @var integer
     *
     * @ORM\Column(name="matricule", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $matricule;

    /**
     * @var integer
     *
     * @ORM\Column(name="iduser", type="integer", nullable=false)
     */
    private $iduser;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=10, nullable=false)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="depart", type="string", length=50, nullable=false)
     */
    private $depart;

    /**
     * @var string
     *
     * @ORM\Column(name="arriver", type="string", length=50, nullable=false)
     */
    private $arriver;

    /**
     * @var string
     *
     * @ORM\Column(name="horraire", type="string", length=50, nullable=false)
     */
    private $horraire;


}

