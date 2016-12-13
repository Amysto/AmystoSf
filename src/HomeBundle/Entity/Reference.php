<?php

namespace HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reference
 *
 * @ORM\Table(name="reference")
 * @ORM\Entity
 */
class Reference
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idReference", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idreference;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Auteurreference", inversedBy="reference")
     * @ORM\JoinTable(name="reference_has_auteurreference",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Reference_idReference", referencedColumnName="idReference")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="auteurReference_idauteurReference", referencedColumnName="idauteurReference")
     *   }
     * )
     */
    private $auteurreference;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Fait", inversedBy="reference")
     * @ORM\JoinTable(name="reference_has_fait",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Reference_idReference", referencedColumnName="idReference")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Fait_idFait", referencedColumnName="idFait")
     *   }
     * )
     */
    private $fait;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->auteurreference = new \Doctrine\Common\Collections\ArrayCollection();
        $this->fait = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idreference
     *
     * @return integer 
     */
    public function getIdreference()
    {
        return $this->idreference;
    }

    /**
     * Add auteurreference
     *
     * @param Auteurreference $auteurreference
     * @return Reference
     */
    public function addAuteurreference(Auteurreference $auteurreference)
    {
        $this->auteurreference[] = $auteurreference;

        return $this;
    }

    /**
     * Remove auteurreference
     *
     * @param Auteurreference $auteurreference
     */
    public function removeAuteurreference(Auteurreference $auteurreference)
    {
        $this->auteurreference->removeElement($auteurreference);
    }

    /**
     * Get auteurreference
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAuteurreference()
    {
        return $this->auteurreference;
    }

    /**
     * Add fait
     *
     * @param Fait $fait
     * @return Reference
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
