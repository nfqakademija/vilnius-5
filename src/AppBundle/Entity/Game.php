<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Game
 *
 * @ORM\Table(name="games")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GameRepository")
 */
class Game
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
     * @var string
     *
     * @ORM\Column(name="secret", type="string", length=255)
     */
    private $secret;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_on", type="datetime")
     */
    private $createdOn;

    /**
     * @var bool
     *
     * @ORM\Column(name="can_register", type="boolean")
     */
    private $canRegister = false;

    /**
     * @var int
     *
     * @ORM\Column(name="score", type="integer", nullable=true)
     */
    private $score;

    /**
     * @var int
     *
     * @ORM\Column(name="time_given", type="integer")
     */
    private $timeGiven;

    /**
     * @var int
     *
     * @ORM\Column(name="time_used", type="integer", nullable=true)
     */
    private $timeUsed;

    /**
     * @var int
     *
     * @ORM\Column(name="questions_given", type="integer")
     * @Assert\NotBlank()
     * @Assert\Type("integer")
     */
    private $questionsGiven;

    /**
     * @var int
     *
     * @ORM\Column(name="questions_answered", type="integer", nullable=true)
     * @Assert\NotBlank()
     * @Assert\Type("integer")
     */
    private $questionsAnswered;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=true)
     * @Assert\NotBlank()
     * @Assert\Type("string")
     * @Assert\Regex("/[a-zA-Z0-9]*$/")
     * @Assert\Length(
     *     min = 2,
     *     max = 50
     * )
     */
    private $username;


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
     * Set secret
     *
     * @param string $secret
     *
     * @return Game
     */
    public function setSecret($secret)
    {
        $this->secret = $secret;

        return $this;
    }

    /**
     * Get secret
     *
     * @return string
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * Set createdOn
     *
     * @param \DateTime $createdOn
     *
     * @return Game
     */
    public function setCreatedOn($createdOn)
    {
        $this->createdOn = $createdOn;

        return $this;
    }

    /**
     * Get createdOn
     *
     * @return \DateTime
     */
    public function getCreatedOn()
    {
        return $this->createdOn;
    }

    /**
     * Set canRegister
     *
     * @param boolean $canRegister
     *
     * @return Game
     */
    public function setCanRegister($canRegister)
    {
        $this->canRegister = $canRegister;

        return $this;
    }

    /**
     * Get canRegister
     *
     * @return bool
     */
    public function getCanRegister()
    {
        return $this->canRegister;
    }

    /**
     * Set score
     *
     * @param integer $score
     *
     * @return Game
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return int
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set timeGiven
     *
     * @param integer $timeGiven
     *
     * @return Game
     */
    public function setTimeGiven($timeGiven)
    {
        $this->timeGiven = $timeGiven;

        return $this;
    }

    /**
     * Get timeGiven
     *
     * @return integer
     */
    public function getTimeGiven()
    {
        return $this->timeGiven;
    }

    /**
     * Set timeUsed
     *
     * @param integer $timeUsed
     *
     * @return Game
     */
    public function setTimeUsed($timeUsed)
    {
        $this->timeUsed = $timeUsed;

        return $this;
    }

    /**
     * Get timeUsed
     *
     * @return integer
     */
    public function getTimeUsed()
    {
        return $this->timeUsed;
    }

    /**
     * Set questionsGiven
     *
     * @param integer $questionsGiven
     *
     * @return Game
     */
    public function setQuestionsGiven($questionsGiven)
    {
        $this->questionsGiven = $questionsGiven;

        return $this;
    }

    /**
     * Get questionsGiven
     *
     * @return integer
     */
    public function getQuestionsGiven()
    {
        return $this->questionsGiven;
    }

    /**
     * Set questionsAnswered
     *
     * @param integer $questionsAnswered
     *
     * @return Game
     */
    public function setQuestionsAnswered($questionsAnswered)
    {
        $this->questionsAnswered = $questionsAnswered;

        return $this;
    }

    /**
     * Get questionsAnswered
     *
     * @return integer
     */
    public function getQuestionsAnswered()
    {
        return $this->questionsAnswered;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return Game
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }
}
