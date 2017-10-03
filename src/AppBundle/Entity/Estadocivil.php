<?php

namespace AppBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Estadocivil
 */
class Estadocivil
{
    /**
     * @var integer
     */
    private $idEstadocivil;

    /**
     * @Assert\Type(
     *        type="string",
     *        message=" "
     *              )
     * @var string
     */
    private $descripcion;

    /**
     * @var boolean
     */
    private $activo;


    /**
     * Get idEstadocivil
     *
     * @return integer
     */
    public function getIdEstadocivil()
    {
        return $this->idEstadocivil;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Estadocivil
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Estadocivil
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
}

