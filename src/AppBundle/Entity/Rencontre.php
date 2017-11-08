<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rencontre
 *
 * @ORM\Table(name="rencontre")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RencontreRepository")
 */
class Rencontre
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
     * @ORM\Column(name="score1", type="integer")
     */
    private $score1;

    /**
     * @var int
     *
     * @ORM\Column(name="score2", type="integer")
     */
    private $score2;

    /**
     * @var int
     *
     * @ORM\Column(name="club1_id", type="integer")
     */
    private $club1Id;

    /**
     * @var int
     *
     * @ORM\Column(name="club2_id", type="integer")
     */
    private $club2Id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=255)
     */
    private $lieu;


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
     * Set score1
     *
     * @param integer $score1
     *
     * @return Rencontre
     */
    public function setScore1($score1)
    {
        $this->score1 = $score1;

        return $this;
    }

    /**
     * Get score1
     *
     * @return int
     */
    public function getScore1()
    {
        return $this->score1;
    }

    /**
     * Set score2
     *
     * @param integer $score2
     *
     * @return Rencontre
     */
    public function setScore2($score2)
    {
        $this->score2 = $score2;

        return $this;
    }

    /**
     * Get score2
     *
     * @return int
     */
    public function getScore2()
    {
        return $this->score2;
    }

    /**
     * Set club1Id
     *
     * @param integer $club1Id
     *
     * @return Rencontre
     */
    public function setClub1Id($club1Id)
    {
        $this->club1Id = $club1Id;

        return $this;
    }

    /**
     * Get club1Id
     *
     * @return int
     */
    public function getClub1Id()
    {
        return $this->club1Id;
    }

    /**
     * Set club2Id
     *
     * @param integer $club2Id
     *
     * @return Rencontre
     */
    public function setClub2Id($club2Id)
    {
        $this->club2Id = $club2Id;

        return $this;
    }

    /**
     * Get club2Id
     *
     * @return int
     */
    public function getClub2Id()
    {
        return $this->club2Id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Rencontre
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set lieu
     *
     * @param string $lieu
     *
     * @return Rencontre
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * Get lieu
     *
     * @return string
     */
    public function getLieu()
    {
        return $this->lieu;
    }
}

