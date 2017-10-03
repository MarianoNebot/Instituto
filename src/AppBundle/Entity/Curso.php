<?php

namespace AppBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Curso
 */
class Curso
{
    /**
     * @var integer
     */
    private $idCurso;

    /**
     * @Assert\DateTime()
     * @var \DateTime
     */
    private $anio;

    /**
     * @var boolean
     */
    private $activo;

    /**
     * @var \AppBundle\Entity\Carrera
     */
    private $carrera;

    /**
     * @var \AppBundle\Entity\Materia
     */
    private $materia;


    /**
     * Get idCurso
     *
     * @return integer
     */
    public function getIdCurso()
    {
        return $this->idCurso;
    }

    /**
     * Set anio
     *
     * @param \DateTime $anio
     *
     * @return Curso
     */
    public function setAnio($anio)
    {
        $this->anio = $anio;

        return $this;
    }

    /**
     * Get anio
     *
     * @return \DateTime
     */
    public function getAnio()
    {
        return $this->anio;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Curso
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
     * Set carrera
     *
     * @param \AppBundle\Entity\Carrera $carrera
     *
     * @return Curso
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

    /**
     * Set materia
     *
     * @param \AppBundle\Entity\Materia $materia
     *
     * @return Curso
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

