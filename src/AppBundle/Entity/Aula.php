<?php

namespace AppBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Aula
 */
class Aula
{
    /**
     * @var integer
     */
    private $idAula;

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
    private $activa;


    /**
     * Get idAula
     *
     * @return integer
     */
    public function getIdAula()
    {
        return $this->idAula;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Aula
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
     * Set activa
     *
     * @param boolean $activa
     *
     * @return Aula
     */
    public function setActiva($activa)
    {
        $this->activa = $activa;

        return $this;
    }

    /**
     * Get activa
     *
     * @return boolean
     */
    public function getActiva()
    {
        return $this->activa;
    }
}

