<?php

namespace AppBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Analitico
 */
class Analitico
{
    /**
     * @var integer
     */
    private $idAnalitico;

    /**
     * @Assert\Type(
     *        type="float",
     *        message=" "
     *              )
     * @var float
     */
    private $nota;

    /**
     * @Assert\DateTime()
     * @var \DateTime
     */
    private $fecha;

    /**
      * @Assert\Type(
     *        type="integer",
     *        message=" "
     *              )
     * @var integer
     */
    private $folio;

    /**
      * @Assert\Type(
     *        type="integer",
     *        message=" "
     *              )
     * @var integer
     */
    private $libro;

    /**
     * @var \AppBundle\Entity\Materia
     */
    private $materia;

    /**
     * @var \AppBundle\Entity\Alumno
     */
    private $alumno;


    /**
     * Get idAnalitico
     *
     * @return integer
     */
    public function getIdAnalitico()
    {
        return $this->idAnalitico;
    }

    /**
     * Set nota
     *
     * @param float $nota
     *
     * @return Analitico
     */
    public function setNota($nota)
    {
        $this->nota = $nota;

        return $this;
    }

    /**
     * Get nota
     *
     * @return float
     */
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Analitico
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
     * Set folio
     *
     * @param integer $folio
     *
     * @return Analitico
     */
    public function setFolio($folio)
    {
        $this->folio = $folio;

        return $this;
    }

    /**
     * Get folio
     *
     * @return integer
     */
    public function getFolio()
    {
        return $this->folio;
    }

    /**
     * Set libro
     *
     * @param integer $libro
     *
     * @return Analitico
     */
    public function setLibro($libro)
    {
        $this->libro = $libro;

        return $this;
    }

    /**
     * Get libro
     *
     * @return integer
     */
    public function getLibro()
    {
        return $this->libro;
    }

    /**
     * Set materia
     *
     * @param \AppBundle\Entity\Materia $materia
     *
     * @return Analitico
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

    /**
     * Set alumno
     *
     * @param \AppBundle\Entity\Alumno $alumno
     *
     * @return Analitico
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

