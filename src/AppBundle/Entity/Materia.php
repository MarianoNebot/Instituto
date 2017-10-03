<?php

namespace AppBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Materia
 */
class Materia
{
    /**
     * @var integer
     */
    private $idMateria;

    /**
     * @Assert\Type(
     *        type="string",
     *        message=" "
     *              )
     * @var string
     */
    private $descripcion;

    /**
     * @Assert\Type(
     *        type="integer",
     *        message=" "
     *              )
     * @var integer
     */
    private $cantModulos;

    /**
     * @Assert\Type(
     *        type="integer",
     *        message=" "
     *              )
     * @var integer
     */
    private $anioCursada;

    /**
     * @var boolean
     */
    private $activo;

    /**
     * @Assert\Type(
     *        type="string",
     *        message=" "
     *              )
     * @var string
     */
    private $cupof;

    /**
     * @var \AppBundle\Entity\Carrera
     */
    private $carrera;


    /**
     * Get idMateria
     *
     * @return integer
     */
    public function getIdMateria()
    {
        return $this->idMateria;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Materia
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
     * Set cantModulos
     *
     * @param integer $cantModulos
     *
     * @return Materia
     */
    public function setCantModulos($cantModulos)
    {
        $this->cantModulos = $cantModulos;

        return $this;
    }

    /**
     * Get cantModulos
     *
     * @return integer
     */
    public function getCantModulos()
    {
        return $this->cantModulos;
    }

    /**
     * Set anioCursada
     *
     * @param integer $anioCursada
     *
     * @return Materia
     */
    public function setAnioCursada($anioCursada)
    {
        $this->anioCursada = $anioCursada;

        return $this;
    }

    /**
     * Get anioCursada
     *
     * @return integer
     */
    public function getAnioCursada()
    {
        return $this->anioCursada;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Materia
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
     * Set cupof
     *
     * @param string $cupof
     *
     * @return Materia
     */
    public function setCupof($cupof)
    {
        $this->cupof = $cupof;

        return $this;
    }

    /**
     * Get cupof
     *
     * @return string
     */
    public function getCupof()
    {
        return $this->cupof;
    }

    /**
     * Set carrera
     *
     * @param \AppBundle\Entity\Carrera $carrera
     *
     * @return Materia
     */
    public function setCarrera(\AppBundle\Entity\Carrera $carrera = null)
    {
        $this->carrera = $carrera;

        return $this;
    }

    /**
     * Get carrera
     *
     * @return \AppBundle\Entity\Carrera
     */
    public function getCarrera()
    {
        return $this->carrera;
    }
}

