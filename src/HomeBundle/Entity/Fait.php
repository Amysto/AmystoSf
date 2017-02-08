<?php

namespace HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* Fait
*
* @ORM\Table(name="fait")
* @ORM\Entity
*/
class Fait
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idFait", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfait;

    /**
     * @var string
     *
     * @ORM\Column(name="nomFait", type="string", length=45, nullable=true)
     */
    private $nomfait;

    /**
     * @var integer
     *
     * @ORM\Column(name="idDate", type="integer", nullable=true)
     */
    private $iddate;

    /**
     * @var integer
     *
     * @ORM\Column(name="idLocalisation", type="integer", nullable=true)
     */
    private $idlocalisation;

    /**
     * @var integer
     *
     * @ORM\Column(name="idType", type="integer", nullable=true)
     */
    private $idtype;

    // /**
    //  * @var \Niveaudroits
    //  *
    //  * @ORM\ManyToOne(targetEntity="Niveaudroits")
    //  * @ORM\JoinColumns({
    //  *   @ORM\JoinColumn(name="niveauDroits_idniveauDroits", referencedColumnName="idniveauDroits")
    //  * })
    //  */
     
    //private $niveaudroits;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Domaine", inversedBy="fait")
     * @ORM\JoinTable(name="fait_has_domaine",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Fait_idFait", referencedColumnName="idFait")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Domaine_idDomaine", referencedColumnName="idDomaine")
     *   }
     * )
     */
     
    private $domaine;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Pays", inversedBy="fait")
     * @ORM\JoinTable(name="fait_has_pays",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Fait_idFait", referencedColumnName="idFait")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Pays_idPays", referencedColumnName="idPays")
     *   }
     * )
     */
    private $pays;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Personnes", inversedBy="fait")
     * @ORM\JoinTable(name="fait_has_personnes",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Fait_idFait", referencedColumnName="idFait")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Personnes_idPersonnes", referencedColumnName="idPersonnes")
     *   }
     * )
     */
    private $personnes;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Reference", mappedBy="fait")
     */
    private $reference;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->domaine = new \Doctrine\Common\Collections\ArrayCollection();
        $this->pays = new \Doctrine\Common\Collections\ArrayCollection();
        $this->personnes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->reference = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idfait
     *
     * @return integer 
     */
    public function getIdfait()
    {
        return $this->idfait;
    }

    /**
     * Set nomfait
     *
     * @param string $nomfait
     * @return Fait
     */
    public function setNomfait($nomfait)
    {
        $this->nomfait = $nomfait;

        return $this;
    }

    /**
     * Get nomfait
     *
     * @return string 
     */
    public function getNomfait()
    {
        return $this->nomfait;
    }

    /**
     * Set iddate
     *
     * @param integer $iddate
     * @return Fait
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
     * Set idlocalisation
     *
     * @param integer $idlocalisation
     * @return Fait
     */
    public function setIdlocalisation($idlocalisation)
    {
        $this->idlocalisation = $idlocalisation;

        return $this;
    }

    /**
     * Get idlocalisation
     *
     * @return integer 
     */
    public function getIdlocalisation()
    {
        return $this->idlocalisation;
    }

    /**
     * Set idtype
     *
     * @param integer $idtype
     * @return Fait
     */
    public function setIdtype($idtype)
    {
        $this->idtype = $idtype;

        return $this;
    }

    /**
     * Get idtype
     *
     * @return integer 
     */
    public function getIdtype()
    {
        return $this->idtype;
    }/*

    // /**
    //  * Set niveaudroits
    //  *
    //  * @param Niveaudroits $niveaudroits
    //  * @return Fait
    //  */
    // public function setNiveaudroits(Niveaudroits $niveaudroits = null)
    // {
    //     $this->niveaudroits = $niveaudroits;

    //     return $this;
    // }

    // /**
    //  * Get niveaudroits
    //  *
    //  * @return Niveaudroits 
    //  */
    // public function getNiveaudroits()
    // {
    //     return $this->niveaudroits;
    // }*/

    /**
     * Add domaine
     *
     * @param Domaine $domaine
     * @return Fait
     */
    public function addDomaine(Domaine $domaine)
    {
        $this->domaine[] = $domaine;

        return $this;
    }

    /**
     * Remove domaine
     *
     * @param Domaine $domaine
     */
    public function removeDomaine(Domaine $domaine)
    {
        $this->domaine->removeElement($domaine);
    }

    /**
     * Get domaine
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDomaine()
    {
        return $this->domaine;
    }

    /**
     * Add pays
     *
     * @param Pays $pays
     * @return Fait
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

    /**
     * Add personnes
     *
     * @param Personnes $personnes
     * @return Fait
     */
    public function addPersonne(Personnes $personnes)
    {
        $this->personnes[] = $personnes;

        return $this;
    }

    /**
     * Remove personnes
     *
     * @param Personnes $personnes
     */
    public function removePersonne(Personnes $personnes)
    {
        $this->personnes->removeElement($personnes);
    }

    /**
     * Get personnes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPersonnes()
    {
        return $this->personnes;
    }

    /**
     * Add reference
     *
     * @param Reference $reference
     * @return Fait
     */
    public function addReference(Reference $reference)
    {
        $this->reference[] = $reference;

        return $this;
    }

    /**
     * Remove reference
     *
     * @param Reference $reference
     */
    public function removeReference(Reference $reference)
    {
        $this->reference->removeElement($reference);
    }

    /**
     * Get reference
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReference()
    {
        return $this->reference;
    }
}
