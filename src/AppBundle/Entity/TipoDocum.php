<?php

namespace AppBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * TipoDocum
 */
class TipoDocum
{
    /**
     * @var integer
     */
    private $idTipoDocum;

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
    private $a;


    /**
     * Get idTipoDocum
     *
     * @return integer
     */
    public function getIdTipoDocum()
    {
        return $this->idTipoDocum;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return TipoDocum
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
     * Set a
     *
     * @param boolean $a
     *
     * @return TipoDocum
     */
    public function setA($a)
    {
        $this->a = $a;

        return $this;
    }

    /**
     * Get a
     *
     * @return boolean
     */
    public function getA()
    {
        return $this->a;
    }
}

