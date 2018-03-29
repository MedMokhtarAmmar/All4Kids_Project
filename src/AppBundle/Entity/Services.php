<?php


namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Services
 *
 * @ORM\Table(name="services")
 * @ORM\Entity
 */
class Services
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
     * @ORM\Column(name="titre", type="string", length=500, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=5000, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=100, nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=100, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=1000, nullable=false)
     */
    private $adresse;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude", type="float", precision=10, scale=0, nullable=false)
     */
    private $latitude;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude", type="float", precision=10, scale=0, nullable=false)
     */
    private $longitude;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrheures", type="integer", nullable=true)
     */
    private $nbrheures;

    /**
     * @var integer
     *
     * @ORM\Column(name="heure_semaine", type="integer", nullable=true)
     */
    private $heureSemaine;

    /**
     * @var string
     *
     * @ORM\Column(name="matiere", type="string", length=100, nullable=true)
     */
    private $matiere;

    /**
     * @var string
     *
     * @ORM\Column(name="niveau", type="string", length=100, nullable=true)
     */
    private $niveau;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer", nullable=true)
     */
    private $idUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="horraireDebut", type="integer", nullable=true)
     */
    private $horrairedebut;

    /**
     * @var integer
     *
     * @ORM\Column(name="horraireFin", type="integer", nullable=true)
     */
    private $horrairefin;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=1000, nullable=true)
     */
    private $image;

    /**
     * @var integer
     *
     * @ORM\Column(name="vues", type="integer", nullable=true)
     */
    private $vues;


}

