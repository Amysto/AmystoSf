<?php

namespace HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Geolocalisation
 *
 * @ORM\Table(name="geolocalisation", indexes={@ORM\Index(name="fk_Geolocalisation_Fait1_idx", columns={"Fait_idFait"})})
 * @ORM\Entity
 */
class Geolocalisation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idGeolocalisation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idgeolocalisation;

    /**
     * @var string
     *
     * @ORM\Column(name="points", type="string", length=45, nullable=true)
     */
    private $points;

    /**
     * @var \Fait
     *
     * @ORM\ManyToOne(targetEntity="Fait")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Fait_idFait", referencedColumnName="idFait")
     * })
     */
    private $fait;



    /**
     * Get idgeolocalisation
     *
     * @return integer 
     */
    public function getIdgeolocalisation()
    {
        return $this->idgeolocalisation;
    }

    /**
     * Set points
     *
     * @param string $points
     * @return Geolocalisation
     */
    public function setPoints($points)
    {
        $this->points = $points;

        return $this;
    }

    /**
     * Get points
     *
     * @return string 
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Set fait
     *
     * @param Fait $fait
     * @return Geolocalisation
     */
    public function setfait(Fait $fait = null)
    {
        $this->fait = $fait;

        return $this;
    }

    /**
     * Get fait
     *
     * @return Fait 
     */
    public function getfait()
    {
        return $this->fait;
    }
}
