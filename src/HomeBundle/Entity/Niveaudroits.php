<?php

namespace HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Niveaudroits
 *
 * @ORM\Table(name="niveaudroits")
 * @ORM\Entity
 */
class Niveaudroits
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idniveauDroits", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idniveaudroits;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=45, nullable=true)
     */
    private $libelle;

    /**
     * @var integer
     *
     * @ORM\Column(name="niveau", type="integer", nullable=true)
     */
    private $niveau;



    /**
     * Get idniveaudroits
     *
     * @return integer 
     */
    public function getIdniveaudroits()
    {
        return $this->idniveaudroits;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Niveaudroits
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
     * Set niveau
     *
     * @param integer $niveau
     * @return Niveaudroits
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get niveau
     *
     * @return integer 
     */
    public function getNiveau()
    {
        return $this->niveau;
    }
}
