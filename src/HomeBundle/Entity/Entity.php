<?php

namespace HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity
 *
 * @ORM\Table(name="entity")
 * @ORM\Entity
 */
class Entity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idEntity", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $identity;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=45, nullable=true)
     */
    private $libelle;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Pays", mappedBy="entity")
     */
    private $pays;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->pays = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get identity
     *
     * @return integer 
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Entity
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
     * Add pays
     *
     * @param Pays $pays
     * @return Entity
     */
    public function addPay(Pays $pays)
    {
        $this->pays[] = $pays;

        return $this;
    }

    /**
     * Remove pays
     *
     * @param Pays $pays
     */
    public function removePay(Pays $pays)
    {
        $this->pays->removeElement($pays);
    }

    /**
     * Get pays
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPays()
    {
        return $this->pays;
    }
}
