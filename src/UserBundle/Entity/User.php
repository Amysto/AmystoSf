<?php

namespace UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * User
 *
 * @ORM\Table(name="utilisateurs")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\UserRepository")
 */
class User extends BaseUser
{

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var \Niveaudroits
     *
     * @ORM\ManyToOne(targetEntity="HomeBundle\Entity\Niveaudroits")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="niveauDroits_idniveauDroits", referencedColumnName="idniveauDroits")
     * })
     */
    private $niveaudroits;


    public function __construct()
    {
        parent::__construct();
    }


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set niveaudroits
     *
     * @param Niveaudroits $niveaudroits
     * @return Niveaudroits
     */
    public function setNiveaudroits(Niveaudroits $niveaudroits = null)
    {
        $this->niveaudroits = $niveaudroits;

        return $this;
    }

    /**
     * Get niveaudroits
     *
     * @return Niveaudroits 
     */
    public function getNiveaudroits()
    {
        return $this->niveaudroits;
    }
  
}
