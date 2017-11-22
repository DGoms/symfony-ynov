<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sport
 *
 * @ORM\Table(name="sport")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SportRepository")
 */
class Sport
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
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;
    
    /**
     * @var \Club
     *
     * @ORM\OneToMany(targetEntity="Club", mappedBy="sport")
     */
    private $clubs;

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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Sport
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->clubs = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add club
     *
     * @param \AppBundle\Entity\Club $club
     *
     * @return Sport
     */
    public function addClub(\AppBundle\Entity\Club $club)
    {
        $this->clubs[] = $club;

        return $this;
    }

    /**
     * Remove club
     *
     * @param \AppBundle\Entity\Club $club
     */
    public function removeClub(\AppBundle\Entity\Club $club)
    {
        $this->clubs->removeElement($club);
    }

    /**
     * Get clubs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getClubs()
    {
        return $this->clubs;
    }
}
