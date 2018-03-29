<?php


namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Games
 *
 * @ORM\Table(name="games")
 * @ORM\Entity
 */
class Games
{
    /**
     * @var integer
     *
     * @ORM\Column(name="gameID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $gameid;

    /**
     * @var string
     *
     * @ORM\Column(name="gameNom", type="string", length=20, nullable=false)
     */
    private $gamenom;

    /**
     * @var string
     *
     * @ORM\Column(name="gameLink", type="string", length=50, nullable=false)
     */
    private $gamelink;

    /**
     * @var string
     *
     * @ORM\Column(name="gameImage", type="string", length=1000, nullable=false)
     */
    private $gameimage;


}

