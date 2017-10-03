<?php

namespace AppBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Alumno
 */
class Alumno
{
    /**
     * @var integer
     */
    private $idAlumno;

    /**
     * @var boolean
     */
    private $activo;

    /**
     * @var boolean
     */
    private $trabaja;

    /**
     * @Assert\Type(
     *        type="string",
     *        message=" "
     *              )
     * @var string
     */
    private $actividad;

    /**
     * @Assert\Type(
     *        type="string",
     *        message=" "
     *              )
     * @var string
     */
    private $obraSocial;

    /**
     * @Assert\Type(
     *        type="integer",
     *        message=" "
     *              )
     * @var integer
     */
    private $numeroRegistro;

    /**
     * @var \AppBundle\Entity\Persona
     */
    private $persona;


    /**
     * Get idAlumno
     *
     * @return integer
     */
    public function getIdAlumno()
    {
        return $this->idAlumno;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Alumno
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
     * Set trabaja
     *
     * @param boolean $trabaja
     *
     * @return Alumno
     */
    public function setTrabaja($trabaja)
    {
        $this->trabaja = $trabaja;

        return $this;
    }

    /**
     * Get trabaja
     *
     * @return boolean
     */
    public function getTrabaja()
    {
        return $this->trabaja;
    }

    /**
     * Set actividad
     *
     * @param string $actividad
     *
     * @return Alumno
     */
    public function setActividad($actividad)
    {
        $this->actividad = $actividad;

        return $this;
    }

    /**
     * Get actividad
     *
     * @return string
     */
    public function getActividad()
    {
        return $this->actividad;
    }

    /**
     * Set obraSocial
     *
     * @param string $obraSocial
     *
     * @return Alumno
     */
    public function setObraSocial($obraSocial)
    {
        $this->obraSocial = $obraSocial;

        return $this;
    }

    /**
     * Get obraSocial
     *
     * @return string
     */
    public function getObraSocial()
    {
        return $this->obraSocial;
    }

    /**
     * Set numeroRegistro
     *
     * @param integer $numeroRegistro
     *
     * @return Alumno
     */
    public function setNumeroRegistro($numeroRegistro)
    {
        $this->numeroRegistro = $numeroRegistro;

        return $this;
    }

    /**
     * Get numeroRegistro
     *
     * @return integer
     */
    public function getNumeroRegistro()
    {
        return $this->numeroRegistro;
    }

    /**
     * Set persona
     *
     * @param \AppBundle\Entity\Persona $persona
     *
     * @return Alumno
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

