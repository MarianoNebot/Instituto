<?php

namespace AppBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Localidad
 */
class Localidad
{
    /**
     * @var integer
     */
    private $idLocalidad;

    /**
     * @Assert\Type(
     *        type="string",
     *        message=" "
     *              )
     * @var string
     */
    private $descripcion;

    /**
     * @var \AppBundle\Entity\Provincia
     */
    private $provincia;


    /**
     * Get idLocalidad
     *
     * @return integer
     */
    public function getIdLocalidad()
    {
        return $this->idLocalidad;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Localidad
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
     * Set provincia
     *
     * @param \AppBundle\Entity\Provincia $provincia
     *
     * @return Localidad
     */
    public function setProvincia(\AppBundle\Entity\Provincia $provincia = null)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return \AppBundle\Entity\Provincia
     */
    public function getProvincia()
    {
        return $this->provincia;
    }
}

