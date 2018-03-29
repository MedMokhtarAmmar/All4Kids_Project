<?php

namespace AllForKids\TransportBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Covoiturage
 *
 * @ORM\Table(name="covoiturage")
 * @ORM\Entity(repositoryClass="AllForKids\TransportBundle\Repository\CovoiturageRepository")
 */
class Covoiturage
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="iduser", type="integer")
     */
    private $iduser;

    /**
     * @var string
     *
     * @ORM\Column(name="depart", type="string", length=255)
     */
    private $depart;

    /**
     * @var string
     *
     * @ORM\Column(name="arriver", type="string", length=255)
     */
    private $arriver;

    /**
     * @var string
     *
     * @ORM\Column(name="horraire", type="string", length=255)
     */
    private $horraire;

    /**
     * @var string
     *
     * @ORM\Column(name="dateoffre", type="string", length=255)
     */
    private $dateoffre;

    /**
     * @var int
     *
     * @ORM\Column(name="nbrplacedispo", type="integer")
     */
    private $nbrplacedispo;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set iduser
     *
     * @param integer $iduser
     *
     * @return Covoiturage
     */
    public function setIduser($iduser)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return int
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * Set depart
     *
     * @param string $depart
     *
     * @return Covoiturage
     */
    public function setDepart($depart)
    {
        $this->depart = $depart;

        return $this;
    }

    /**
     * Get depart
     *
     * @return string
     */
    public function getDepart()
    {
        return $this->depart;
    }

    /**
     * Set arriver
     *
     * @param string $arriver
     *
     * @return Covoiturage
     */
    public function setArriver($arriver)
    {
        $this->arriver = $arriver;

        return $this;
    }

    /**
     * Get arriver
     *
     * @return string
     */
    public function getArriver()
    {
        return $this->arriver;
    }

    /**
     * Set horraire
     *
     * @param string $horraire
     *
     * @return Covoiturage
     */
    public function setHorraire($horraire)
    {
        $this->horraire = $horraire;

        return $this;
    }

    /**
     * Get horraire
     *
     * @return string
     */
    public function getHorraire()
    {
        return $this->horraire;
    }

    /**
     * Set dateoffre
     *
     * @param string $dateoffre
     *
     * @return Covoiturage
     */
    public function setDateoffre($dateoffre)
    {
        $this->dateoffre = $dateoffre;

        return $this;
    }

    /**
     * Get dateoffre
     *
     * @return string
     */
    public function getDateoffre()
    {
        return $this->dateoffre;
    }

    /**
     * Set nbrplacedispo
     *
     * @param integer $nbrplacedispo
     *
     * @return Covoiturage
     */
    public function setNbrplacedispo($nbrplacedispo)
    {
        $this->nbrplacedispo = $nbrplacedispo;

        return $this;
    }

    /**
     * Get nbrplacedispo
     *
     * @return int
     */
    public function getNbrplacedispo()
    {
        return $this->nbrplacedispo;
    }
}

