<?php

namespace AppBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Cursa
 */
class Cursa
{
    /**
     * @var integer
     */
    private $idCursa;

    /**
      * @Assert\Type(
     *        type="strings",
     *        message=" "
     *              )
     * @var string
     */
    private $condicion;

    /**
     * @var \AppBundle\Entity\Alumno
     */
    private $alumno;

    /**
     * @var \AppBundle\Entity\Curso
     */
    private $curso;


    /**
     * Get idCursa
     *
     * @return integer
     */
    public function getIdCursa()
    {
        return $this->idCursa;
    }

    /**
     * Set condicion
     *
     * @param string $condicion
     *
     * @return Cursa
     */
    public function setCondicion($condicion)
    {
        $this->condicion = $condicion;

        return $this;
    }

    /**
     * Get condicion
     *
     * @return string
     */
    public function getCondicion()
    {
        return $this->condicion;
    }

    /**
     * Set alumno
     *
     * @param \AppBundle\Entity\Alumno $alumno
     *
     * @return Cursa
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
     * Set curso
     *
     * @param \AppBundle\Entity\Curso $curso
     *
     * @return Cursa
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
}

