<?php

namespace AppBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Correlatividad
 */
class Correlatividad
{
    /**
     * @var integer
     */
    private $idCorrelatividad;

    /**
     * @var \AppBundle\Entity\Materia
     */
    private $materia1;

    /**
     * @var \AppBundle\Entity\Materia
     */
    private $materia2;


    /**
     * Get idCorrelatividad
     *
     * @return integer
     */
    public function getIdCorrelatividad()
    {
        return $this->idCorrelatividad;
    }

    /**
     * Set materia1
     *
     * @param \AppBundle\Entity\Materia $materia1
     *
     * @return Correlatividad
     */
    public function setMateria1(\AppBundle\Entity\Materia $materia1 = null)
    {
        $this->materia1 = $materia1;

        return $this;
    }

    /**
     * Get materia1
     *
     * @return \AppBundle\Entity\Materia
     */
    public function getMateria1()
    {
        return $this->materia1;
    }

    /**
     * Set materia2
     *
     * @param \AppBundle\Entity\Materia $materia2
     *
     * @return Correlatividad
     */
    public function setMateria2(\AppBundle\Entity\Materia $materia2 = null)
    {
        $this->materia2 = $materia2;

        return $this;
    }

    /**
     * Get materia2
     *
     * @return \AppBundle\Entity\Materia
     */
    public function getMateria2()
    {
        return $this->materia2;
    }
}

