<?php


namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Participationcovo
 *
 * @ORM\Table(name="participationcovo")
 * @ORM\Entity
 */
class Participationcovo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="notify", type="integer", nullable=false)
     */
    private $notify;

    /**
     * @var integer
     *
     * @ORM\Column(name="iduser", type="integer", nullable=false)
     */
    private $iduser;

    /**
     * @var integer
     *
     * @ORM\Column(name="idparticipant", type="integer", nullable=false)
     */
    private $idparticipant;

    /**
     * @var string
     *
     * @ORM\Column(name="arriver", type="string", length=50, nullable=false)
     */
    private $arriver;

    /**
     * @var string
     *
     * @ORM\Column(name="depart", type="string", length=50, nullable=false)
     */
    private $depart;


}

