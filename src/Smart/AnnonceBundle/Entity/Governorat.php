<?php

namespace Smart\AnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Governorat
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Smart\AnnonceBundle\Entity\GovernoratRepository")
 */
class Governorat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255)
     */
    private $ville;


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
     * Set ville
     *
     * @param string $ville
     * @return Governorat
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }
}
