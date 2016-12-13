<?php

namespace HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Domaine
 *
 * @ORM\Table(name="domaine")
 * @ORM\Entity
 */
class Domaine
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idDomaine", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddomaine;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=45, nullable=true)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="idDate", type="integer", nullable=true)
     */
    private $iddate;

    /**
     * @var integer
     *
     * @ORM\Column(name="niveau", type="integer", nullable=true)
     */
    private $niveau;

    /**
     * @var integer
     *
     * @ORM\Column(name="idDomaineParent", type="integer", nullable=true)
     */
    private $iddomaineparent;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Fait", mappedBy="domaine")
     */
    private $fait;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fait = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get iddomaine
     *
     * @return integer 
     */
    public function getIddomaine()
    {
        return $this->iddomaine;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Domaine
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
     * Set iddate
     *
     * @param integer $iddate
     * @return Domaine
     */
    public function setIddate($iddate)
    {
        $this->iddate = $iddate;

        return $this;
    }

    /**
     * Get iddate
     *
     * @return integer 
     */
    public function getIddate()
    {
        return $this->iddate;
    }

    /**
     * Set niveau
     *
     * @param integer $niveau
     * @return Domaine
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

    /**
     * Set iddomaineparent
     *
     * @param integer $iddomaineparent
     * @return Domaine
     */
    public function setIddomaineparent($iddomaineparent)
    {
        $this->iddomaineparent = $iddomaineparent;

        return $this;
    }

    /**
     * Get iddomaineparent
     *
     * @return integer 
     */
    public function getIddomaineparent()
    {
        return $this->iddomaineparent;
    }

    /**
     * Add fait
     *
     * @param Fait $fait
     * @return Domaine
     */
    public function addFait(Fait $fait)
    {
        $this->fait[] = $fait;

        return $this;
    }

    /**
     * Remove fait
     *
     * @param Fait $fait
     */
    public function removeFait(Fait $fait)
    {
        $this->fait->removeElement($fait);
    }

    /**
     * Get fait
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFait()
    {
        return $this->fait;
    }
}
