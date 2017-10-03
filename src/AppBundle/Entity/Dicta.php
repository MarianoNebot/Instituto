<?php

namespace AppBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Dicta
 */
class Dicta
{
    /**
     * @var integer
     */
    private $idDicta;

    /**
     * @Assert\Type(
     *        type="string",
     *        message=" "
     *              )
     * @var string
     */
    private $situacionRevista;

    /**
     * @var \DateTime
     */
    private $fechaDesde;

    /**
     * @var \DateTime
     */
    private $fechaHasta;

    /**
     * @var \AppBundle\Entity\Docente
     */
    private $docente;

    /**
     * @var \AppBundle\Entity\Curso
     */
    private $curso;


    /**
     * Get idDicta
     *
     * @return integer
     */
    public function getIdDicta()
    {
        return $this->idDicta;
    }

    /**
     * Set situacionRevista
     *
     * @param string $situacionRevista
     *
     * @return Dicta
     */
    public function setSituacionRevista($situacionRevista)
    {
        $this->situacionRevista = $situacionRevista;

        return $this;
    }

    /**
     * Get situacionRevista
     *
     * @return string
     */
    public function getSituacionRevista()
    {
        return $this->situacionRevista;
    }

    /**
     * Set fechaDesde
     *
     * @param \DateTime $fechaDesde
     *
     * @return Dicta
     */
    public function setFechaDesde($fechaDesde)
    {
        $this->fechaDesde = $fechaDesde;

        return $this;
    }

    /**
     * Get fechaDesde
     *
     * @return \DateTime
     */
    public function getFechaDesde()
    {
        return $this->fechaDesde;
    }

    /**
     * Set fechaHasta
     *
     * @param \DateTime $fechaHasta
     *
     * @return Dicta
     */
    public function setFechaHasta($fechaHasta)
    {
        $this->fechaHasta = $fechaHasta;

        return $this;
    }

    /**
     * Get fechaHasta
     *
     * @return \DateTime
     */
    public function getFechaHasta()
    {
        return $this->fechaHasta;
    }

    /**
     * Set docente
     *
     * @param \AppBundle\Entity\Docente $docente
     *
     * @return Dicta
     */
    public function setDocente(\AppBundle\Entity\Docente $docente = null)
    {
        $this->docente = $docente;

        return $this;
    }

    /**
     * Get docente
     *
     * @return \AppBundle\Entity\Docente
     */
    public function getDocente()
    {
        return $this->docente;
    }

    /**
     * Set curso
     *
     * @param \AppBundle\Entity\Curso $curso
     *
     * @return Dicta
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

