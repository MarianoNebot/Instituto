<?php

namespace AppBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Carrera
 */
class Carrera
{
    /**
     * @var integer
     */
    private $idCarrera;

    /**
      * @Assert\Type(
     *        type="strings",
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
    private $duracion;

    /**
      * @Assert\Type(
     *        type="integer",
     *        message=" "
     *              )
     * @var string
     */
    private $resolucion;

    /**
      * @Assert\Type(
     *        type="integer",
     *        message=" "
     *              )
     * @var integer
     */
    private $plan;

    /**
     * @var boolean
     */
    private $activa;

    /**
      * @Assert\Type(
     *        type="string",
     *        message=" "
     *              )
     * @var string
     */
    private $tituloOtorgado;


    /**
     * Get idCarrera
     *
     * @return integer
     */
    public function getIdCarrera()
    {
        return $this->idCarrera;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Carrera
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
     * Set duracion
     *
     * @param integer $duracion
     *
     * @return Carrera
     */
    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;

        return $this;
    }

    /**
     * Get duracion
     *
     * @return integer
     */
    public function getDuracion()
    {
        return $this->duracion;
    }

    /**
     * Set resolucion
     *
     * @param string $resolucion
     *
     * @return Carrera
     */
    public function setResolucion($resolucion)
    {
        $this->resolucion = $resolucion;

        return $this;
    }

    /**
     * Get resolucion
     *
     * @return string
     */
    public function getResolucion()
    {
        return $this->resolucion;
    }

    /**
     * Set plan
     *
     * @param integer $plan
     *
     * @return Carrera
     */
    public function setPlan($plan)
    {
        $this->plan = $plan;

        return $this;
    }

    /**
     * Get plan
     *
     * @return integer
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * Set activa
     *
     * @param boolean $activa
     *
     * @return Carrera
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

    /**
     * Set tituloOtorgado
     *
     * @param string $tituloOtorgado
     *
     * @return Carrera
     */
    public function setTituloOtorgado($tituloOtorgado)
    {
        $this->tituloOtorgado = $tituloOtorgado;

        return $this;
    }

    /**
     * Get tituloOtorgado
     *
     * @return string
     */
    public function getTituloOtorgado()
    {
        return $this->tituloOtorgado;
    }
}

