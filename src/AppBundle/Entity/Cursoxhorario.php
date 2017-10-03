<?php

namespace AppBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Cursoxhorario
 */
class Cursoxhorario
{
    /**
     * @var integer
     */
    private $idCursoxhorario;

    /**
     * @var \AppBundle\Entity\Horario
     */
    private $horario;

    /**
     * @var \AppBundle\Entity\Curso
     */
    private $curso;


    /**
     * Get idCursoxhorario
     *
     * @return integer
     */
    public function getIdCursoxhorario()
    {
        return $this->idCursoxhorario;
    }

    /**
     * Set horario
     *
     * @param \AppBundle\Entity\Horario $horario
     *
     * @return Cursoxhorario
     */
    public function setHorario(\AppBundle\Entity\Horario $horario = null)
    {
        $this->horario = $horario;

        return $this;
    }

    /**
     * Get horario
     *
     * @return \AppBundle\Entity\Horario
     */
    public function getHorario()
    {
        return $this->horario;
    }

    /**
     * Set curso
     *
     * @param \AppBundle\Entity\Curso $curso
     *
     * @return Cursoxhorario
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

