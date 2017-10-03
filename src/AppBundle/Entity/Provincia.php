<?php

namespace AppBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Provincia
 */
class Provincia
{
    /**
     * @var integer
     */
    private $idProvincia;

    /**
     * @Assert\Type(
     *        type="string",
     *        message=" "
     *              )
     * @var string
     */
    private $descripcion;

    /**
     * @var \AppBundle\Entity\Pais
     */
    private $pais;


    /**
     * Get idProvincia
     *
     * @return integer
     */
    public function getIdProvincia()
    {
        return $this->idProvincia;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Provincia
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
     * Set pais
     *
     * @param \AppBundle\Entity\Pais $pais
     *
     * @return Provincia
     */
    public function setPais(\AppBundle\Entity\Pais $pais = null)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return \AppBundle\Entity\Pais
     */
    public function getPais()
    {
        return $this->pais;
    }
}

