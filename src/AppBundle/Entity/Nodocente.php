<?php

namespace AppBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Nodocente
 */
class Nodocente
{
    /**
     * @var integer
     */
    private $idNodocente;

    /**
     * @var boolean
     */
    private $activo;

    /**
     * @var \AppBundle\Entity\Persona
     */
    private $persona;


    /**
     * Get idNodocente
     *
     * @return integer
     */
    public function getIdNodocente()
    {
        return $this->idNodocente;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Nodocente
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set persona
     *
     * @param \AppBundle\Entity\Persona $persona
     *
     * @return Nodocente
     */
    public function setPersona(\AppBundle\Entity\Persona $persona = null)
    {
        $this->persona = $persona;

        return $this;
    }

    /**
     * Get persona
     *
     * @return \AppBundle\Entity\Persona
     */
    public function getPersona()
    {
        return $this->persona;
    }
}

