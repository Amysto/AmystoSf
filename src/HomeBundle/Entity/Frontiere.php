<?php

namespace HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Frontiere
 *
 * @ORM\Table(name="frontiere")
 * @ORM\Entity
 */
class Frontiere
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idfrontiere", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfrontiere;

    /**
     * @var string
     *
     * @ORM\Column(name="coordonnees", type="string", length=45, nullable=true)
     */
    private $coordonnees;


    /**
     * @ORM\ManyToOne(targetEntity="HomeBundle\Entity\CustomDate")
     * @ORM\JoinColumn(nullable=false)
     */
    private $date;


    /**
     * Set date
     *
     * @param integer $date
     * @return CustomDate
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return integer 
     */
    public function getDate()
    {
        return $this->date;
    }


    /**
     * Get idfrontiere
     *
     * @return integer 
     */
    public function getIdfrontiere()
    {
        return $this->idfrontiere;
    }

    /**
     * Set coordonnees
     *
     * @param string $coordonnees
     * @return Frontiere
     */
    public function setCoordonnees($coordonnees)
    {
        $this->coordonnees = $coordonnees;

        return $this;
    }

    /**
     * Get coordonnees
     *
     * @return string 
     */
    public function getCoordonnees()
    {
        return $this->coordonnees;
    }
}
