<?php

namespace AppBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Tablanota
 */
class Tablanota
{
    /**
     * @var integer
     */
    private $idNota;

    /**
     * @Assert\Type(
     *        type="integer",
     *        message=" "
     *              )
     * @var integer
     */
    private $nota;

    /**
     * @Assert\Type(
     *        type="string",
     *        message=" "
     *              )
     * @var string
     */
    private $tipoEvaluacion;

    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var \AppBundle\Entity\Alumno
     */
    private $alumno;

    /**
     * @var \AppBundle\Entity\Materia
     */
    private $materia;


    /**
     * Get idNota
     *
     * @return integer
     */
    public function getIdNota()
    {
        return $this->idNota;
    }

    /**
     * Set nota
     *
     * @param integer $nota
     *
     * @return Tablanota
     */
    public function setNota($nota)
    {
        $this->nota = $nota;

        return $this;
    }

    /**
     * Get nota
     *
     * @return integer
     */
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * Set tipoEvaluacion
     *
     * @param string $tipoEvaluacion
     *
     * @return Tablanota
     */
    public function setTipoEvaluacion($tipoEvaluacion)
    {
        $this->tipoEvaluacion = $tipoEvaluacion;

        return $this;
    }

    /**
     * Get tipoEvaluacion
     *
     * @return string
     */
    public function getTipoEvaluacion()
    {
        return $this->tipoEvaluacion;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Tablanota
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set alumno
     *
     * @param \AppBundle\Entity\Alumno $alumno
     *
     * @return Tablanota
     */
    public function setAlumno(\AppBundle\Entity\Alumno $alumno = null)
    {
        $this->alumno = $alumno;

        return $this;
    }

    /**
     * Get alumno
     *
     * @return \AppBundle\Entity\Alumno
     */
    public function getAlumno()
    {
        return $this->alumno;
    }

    /**
     * Set materia
     *
     * @param \AppBundle\Entity\Materia $materia
     *
     * @return Tablanota
     */
    public function setMateria(\AppBundle\Entity\Materia $materia = null)
    {
        $this->materia = $materia;

        return $this;
    }

    /**
     * Get materia
     *
     * @return \AppBundle\Entity\Materia
     */
    public function getMateria()
    {
        return $this->materia;
    }
}

