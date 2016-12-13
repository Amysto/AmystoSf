<?php

namespace HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Auteurreference
 *
 * @ORM\Table(name="auteurreference")
 * @ORM\Entity
 */
class Auteurreference
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idauteurReference", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idauteurreference;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Reference", mappedBy="auteurreference")
     */
    private $reference;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reference = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idauteurreference
     *
     * @return integer 
     */
    public function getIdauteurreference()
    {
        return $this->idauteurreference;
    }

    /**
     * Add reference
     *
     * @param Reference $reference
     * @return Auteurreference
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
