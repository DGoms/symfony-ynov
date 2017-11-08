<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Club
 *
 * @ORM\Table(name="club")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ClubRepository")
 */
class Club
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var \Sport
     *
     * @ORM\ManyToOne(targetEntity="Sport", inversedBy="clubs")
     */
    private $sport;

    /**
     * @var int
     *
     * @ORM\Column(name="nbTrophees", type="integer", nullable=true)
     */
    private $nbTrophees;

    /**
     * @var \Joueur
     * 
     * @ORM\OneToMany(targetEntity="Joueur", mappedBy="club", cascade={"remove", "persist"})
     */
    private $joueurs;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Club
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set nbTrophees
     *
     * @param integer $nbTrophees
     *
     * @return Club
     */
    public function setNbTrophees($nbTrophees)
    {
        $this->nbTrophees = $nbTrophees;

        return $this;
    }

    /**
     * Get nbTrophees
     *
     * @return int
     */
    public function getNbTrophees()
    {
        return $this->nbTrophees;
    }
}

