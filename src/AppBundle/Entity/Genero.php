<?php

namespace AppBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Genero
 */
class Genero
{
    /**
     * @var integer
     */
    private $idGenero;

    /**
     * @var string
     */
    private $descripcion;


    /**
     * Get idGenero
     *
     * @return integer
     */
    public function getIdGenero()
    {
        return $this->idGenero;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Genero
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
}

