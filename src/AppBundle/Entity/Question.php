<?php


namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table(name="question", indexes={@ORM\Index(name="quizid", columns={"quizid"})})
 * @ORM\Entity
 */
class Question
{
    /**
     * @var integer
     *
     * @ORM\Column(name="questionID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $questionid;

    /**
     * @var string
     *
     * @ORM\Column(name="question", type="string", length=200, nullable=false)
     */
    private $question;

    /**
     * @var integer
     *
     * @ORM\Column(name="quizid", type="integer", nullable=true)
     */
    private $quizid;


}

