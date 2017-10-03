<?php

namespace AppBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Pais
 */
class Pais
{
    /**
     * @var integer
     */
    private $idPais;

    /**
     * @Assert\Type(
     *        type="string",
     *        message=" "
     *              )
     * @var string
     */
    private $descripcion;


    /**
     * Get idPais
     *
     * @return integer
     */
    public function getIdPais()
    {
        return $this->idPais;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Pais
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

