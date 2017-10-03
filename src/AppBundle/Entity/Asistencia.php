<?php

namespace AppBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Asistencia
 */
class Asistencia
{
    /**
     * @var integer
     */
    private $idAsistencia;

    /**
     * @Assert\DateTime()
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var boolean
     */
    private $asistencia;

    /**
     * @var \AppBundle\Entity\Curso
     */
    private $curso;

    /**
     * @var \AppBundle\Entity\Alumno
     */
    private $alumno;


    /**
     * Get idAsistencia
     *
     * @return integer
     */
    public function getIdAsistencia()
    {
        return $this->idAsistencia;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Asistencia
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
     * Set asistencia
     *
     * @param boolean $asistencia
     *
     * @return Asistencia
     */
    public function setAsistencia($asistencia)
    {
        $this->asistencia = $asistencia;

        return $this;
    }

    /**
     * Get asistencia
     *
     * @return boolean
     */
    public function getAsistencia()
    {
        return $this->asistencia;
    }

    /**
     * Set curso
     *
     * @param \AppBundle\Entity\Curso $curso
     *
     * @return Asistencia
     */
    public function setCurso(\AppBundle\Entity\Curso $curso = null)
    {
        $this->curso = $curso;

        return $this;
    }

    /**
     * Get curso
     *
     * @return \AppBundle\Entity\Curso
     */
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Set alumno
     *
     * @param \AppBundle\Entity\Alumno $alumno
     *
     * @return Asistencia
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
}

