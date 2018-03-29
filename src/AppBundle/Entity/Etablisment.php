<?php


namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Etablisment
 *
 * @ORM\Table(name="etablisment", indexes={@ORM\Index(name="idUser", columns={"idUser"}), @ORM\Index(name="idUser_2", columns={"idUser"}), @ORM\Index(name="idUser_3", columns={"idUser"})})
 * @ORM\Entity
 */
class Etablisment
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=false)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="fix", type="string", length=255, nullable=false)
     */
    private $fix;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="idUser", type="integer", nullable=false)
     */
    private $iduser;

    /**
     * @var string
     *
     * @ORM\Column(name="proprietaire", type="string", length=255, nullable=false)
     */
    private $proprietaire;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="datecreation", type="string", length=255, nullable=false)
     */
    private $datecreation;

    /**
     * @var integer
     *
     * @ORM\Column(name="capacite", type="integer", nullable=false)
     */
    private $capacite;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="rating", type="integer", nullable=true)
     */
    private $rating;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=true)
     */
    private $enabled;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=1000, nullable=false)
     */
    private $image;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrdispo", type="integer", nullable=false)
     */
    private $nbrdispo;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrparticipants", type="integer", nullable=false)
     */
    private $nbrparticipants;

    /**
     * @var integer
     *
     * @ORM\Column(name="notified", type="integer", nullable=false)
     */
    private $notified;


}

