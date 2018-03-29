<?php


namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Answer
 *
 * @ORM\Table(name="answer", indexes={@ORM\Index(name="answerID", columns={"answerID"}), @ORM\Index(name="questionID", columns={"questionID"})})
 * @ORM\Entity
 */
class Answer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="answerID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $answerid;

    /**
     * @var string
     *
     * @ORM\Column(name="answer", type="string", length=200, nullable=false)
     */
    private $answer;

    /**
     * @var integer
     *
     * @ORM\Column(name="correct", type="integer", nullable=false)
     */
    private $correct;

    /**
     * @var integer
     *
     * @ORM\Column(name="questionID", type="integer", nullable=false)
     */
    private $questionid;


}

