<?php

namespace Smart\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 * @ORM\Entity(repositoryClass="Smart\UserBundle\Entity\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
	
	/**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;
	
	/**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;
	
	/**
     * @var \DateTime
     *
     * @ORM\Column(name="dateinscription", type="date")
     */
    private $dateinscription;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="tel", type="integer")
     */
    private $tel;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="mobile", type="integer")
     */
    private $mobile;
	
	/**
	*@ORM\OneToOne(targetEntity="Smart\AnnonceBundle\Entity\Image", cascade={"persist", "remove"})
	*/
    private $image;
	
	/**
	 * @ORM\ManyToOne(targetEntity="Smart\AnnonceBundle\Entity\Governorat")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $governorat;
	
	public function __construct()
    {
        parent::__construct();
        $role = array('ROLE_MEMBRE');
		$this->roles=$role; 
		
        $this->dateinscription= new\Datetime();
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
     * Set nom
     *
     * @param string $nom
     * @return User
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
     * @return User
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
     * Set dateinscription
     *
     * @param \DateTime $dateinscription
     * @return User
     */
    public function setDateinscription($dateinscription)
    {
        $this->dateinscription = $dateinscription;

        return $this;
    }

    /**
     * Get dateinscription
     *
     * @return \DateTime 
     */
    public function getDateinscription()
    {
        return $this->dateinscription;
    }

    /**
     * Set tel
     *
     * @param integer $tel
     * @return User
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return integer 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set mobile
     *
     * @param integer $mobile
     * @return User
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return integer 
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set image
     *
     * @param \Smart\AnnonceBundle\Entity\Image $image
     * @return User
     */
    public function setImage(\Smart\AnnonceBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \Smart\AnnonceBundle\Entity\Image 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set governorat
     *
     * @param \Smart\AnnonceBundle\Entity\Governorat $governorat
     * @return User
     */
    public function setGovernorat(\Smart\AnnonceBundle\Entity\Governorat $governorat)
    {
        $this->governorat = $governorat;

        return $this;
    }

    /**
     * Get governorat
     *
     * @return \Smart\AnnonceBundle\Entity\Governorat 
     */
    public function getGovernorat()
    {
        return $this->governorat;
    }
}
