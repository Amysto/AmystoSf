<?php

namespace HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pays
 *
 * @ORM\Table(name="pays", indexes={@ORM\Index(name="fk_Pays_frontiere1_idx", columns={"frontiere_idfrontiere"})})
 * @ORM\Entity
 */
class Pays
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idPays", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpays;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=45, nullable=true)
     */
    private $nom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_start", type="date", nullable=true)
     */
    private $dateStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_end", type="date", nullable=true)
     */
    private $dateEnd;

    /**
     * @var \Frontiere
     *
     * @ORM\ManyToOne(targetEntity="Frontiere")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="frontiere_idfrontiere", referencedColumnName="idfrontiere")
     * })
     */
    private $frontierefrontiere;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Fait", mappedBy="pays")
     */
    private $fait;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Entity", inversedBy="pays")
     * @ORM\JoinTable(name="pays_has_entity",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Pays_idPays", referencedColumnName="idPays")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Entity_idEntity", referencedColumnName="idEntity")
     *   }
     * )
     */
    private $entity;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fait = new \Doctrine\Common\Collections\ArrayCollection();
        $this->entity = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idpays
     *
     * @return integer 
     */
    public function getIdpays()
    {
        return $this->idpays;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Pays
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
     * Set dateStart
     *
     * @param \DateTime $dateStart
     * @return Pays
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;

        return $this;
    }

    /**
     * Get dateStart
     *
     * @return \DateTime 
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * Set dateEnd
     *
     * @param \DateTime $dateEnd
     * @return Pays
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd;

        return $this;
    }

    /**
     * Get dateEnd
     *
     * @return \DateTime 
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * Set frontierefrontiere
     *
     * @param Frontiere $frontierefrontiere
     * @return Pays
     */
    public function setFrontierefrontiere(Frontiere $frontierefrontiere = null)
    {
        $this->frontierefrontiere = $frontierefrontiere;

        return $this;
    }

    /**
     * Get frontierefrontiere
     *
     * @return Frontiere 
     */
    public function getFrontierefrontiere()
    {
        return $this->frontierefrontiere;
    }

    /**
     * Add fait
     *
     * @param Fait $fait
     * @return Pays
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

    /**
     * Add entity
     *
     * @param Entity $entity
     * @return Pays
     */
    public function addentity(Entity $entity)
    {
        $this->entity[] = $entity;

        return $this;
    }

    /**
     * Remove entity
     *
     * @param Entity $entity
     */
    public function removeentity(Entity $entity)
    {
        $this->entity->removeElement($entity);
    }

    /**
     * Get entity
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getentity()
    {
        return $this->entity;
    }
}
