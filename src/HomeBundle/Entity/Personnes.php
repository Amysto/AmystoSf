<?php

namespace HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personnes
 *
 * @ORM\Table(name="personnes")
 * @ORM\Entity
 */
class Personnes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idPersonnes", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpersonnes;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=45, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom", type="string", length=45, nullable=true)
     */
    private $prenom;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Fait", mappedBy="personnes")
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
     * Get idpersonnes
     *
     * @return integer 
     */
    public function getIdpersonnes()
    {
        return $this->idpersonnes;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Personnes
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
     * Set prenom
     *
     * @param string $prenom
     * @return Personnes
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Add fait
     *
     * @param Fait $fait
     * @return Personnes
     */
    public function addfait(Fait $fait)
    {
        $this->fait[] = $fait;

        return $this;
    }

    /**
     * Remove fait
     *
     * @param Fait $fait
     */
    public function removefait(Fait $fait)
    {
        $this->fait->removeElement($fait);
    }

    /**
     * Get fait
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getfait()
    {
        return $this->fait;
    }
}
