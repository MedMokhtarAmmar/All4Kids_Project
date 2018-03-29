<?php


namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Demandeinscription
 *
 * @ORM\Table(name="demandeinscription")
 * @ORM\Entity
 */
class Demandeinscription
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
     * @ORM\Column(name="id_participant", type="integer", nullable=false)
     */
    private $idParticipant;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbreInscription", type="integer", nullable=false)
     */
    private $nbreinscription;

    /**
     * @var integer
     *
     * @ORM\Column(name="idEtab", type="integer", nullable=false)
     */
    private $idetab;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=false)
     */
    private $enabled;


}

