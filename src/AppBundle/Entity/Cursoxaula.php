<?php

namespace AppBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Cursoxaula
 */
class Cursoxaula
{
    /**
     * @var integer
     */
    private $idCursoxaula;

    /**
     * @Assert\DateTime()
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var \AppBundle\Entity\Curso
     */
    private $curso;

    /**
     * @var \AppBundle\Entity\Aula
     */
    private $aula;


    /**
     * Get idCursoxaula
     *
     * @return integer
     */
    public function getIdCursoxaula()
    {
        return $this->idCursoxaula;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Cursoxaula
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
     * Set curso
     *
     * @param \AppBundle\Entity\Curso $curso
     *
     * @return Cursoxaula
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
     * Set aula
     *
     * @param \AppBundle\Entity\Aula $aula
     *
     * @return Cursoxaula
     */
    public function setAula(\AppBundle\Entity\Aula $aula = null)
    {
        $this->aula = $aula;

        return $this;
    }

    /**
     * Get aula
     *
     * @return \AppBundle\Entity\Aula
     */
    public function getAula()
    {
        return $this->aula;
    }
}

