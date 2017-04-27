<?php

namespace KikiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * score
 *
 * @ORM\Table(name="score")
 * @ORM\Entity(repositoryClass="KikiceBundle\Repository\scoreRepository")
 */
class score
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="resultat", type="integer", nullable=true)
     */
    private $resultat;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set resultat
     *
     * @param integer $resultat
     *
     * @return score
     */
    public function setResultat($resultat)
    {
        $this->resultat = $resultat;

        return $this;
    }

    /**
     * Get resultat
     *
     * @return int
     */
    public function getResultat()
    {
        return $this->resultat;
    }
}

