<?php

namespace AppBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Titulo
 */
class Titulo
{
    /**
     * @var integer
     */
    private $idTitulo;

    /**
     * @Assert\Type(
     *        type="string",
     *        message=" "
     *              )
     * @var string
     */
    private $nombreTitulo;

    /**
     * @Assert\Type(
     *        type="string",
     *        message=" "
     *              )
     * @var string
     */
    private $lugarEstudio;

    /**
     * @Assert\Type(
     *        type="integer",
     *        message=" "
     *              )
     * @var integer
     */
    private $duracion;

    /**
     * @var boolean
     */
    private $finalizo;

    /**
     * @var \DateTime
     */
    private $fechaEgreso;

    /**
     * @Assert\Type(
     *        type="integer",
     *        message=" "
     *              )
     * @var integer
     */
    private $porcentajeCarrera;

    /**
     * @Assert\Type(
     *        type="float",
     *        message=" "
     *              )
     * @var float
     */
    private $promedio;

    /**
     * @Assert\Type(
     *        type="string",
     *        message=" "
     *              )
     * @var string
     */
    private $distrito;

    /**
     * @var \AppBundle\Entity\Persona
     */
    private $persona;


    /**
     * Get idTitulo
     *
     * @return integer
     */
    public function getIdTitulo()
    {
        return $this->idTitulo;
    }

    /**
     * Set nombreTitulo
     *
     * @param string $nombreTitulo
     *
     * @return Titulo
     */
    public function setNombreTitulo($nombreTitulo)
    {
        $this->nombreTitulo = $nombreTitulo;

        return $this;
    }

    /**
     * Get nombreTitulo
     *
     * @return string
     */
    public function getNombreTitulo()
    {
        return $this->nombreTitulo;
    }

    /**
     * Set lugarEstudio
     *
     * @param string $lugarEstudio
     *
     * @return Titulo
     */
    public function setLugarEstudio($lugarEstudio)
    {
        $this->lugarEstudio = $lugarEstudio;

        return $this;
    }

    /**
     * Get lugarEstudio
     *
     * @return string
     */
    public function getLugarEstudio()
    {
        return $this->lugarEstudio;
    }

    /**
     * Set duracion
     *
     * @param integer $duracion
     *
     * @return Titulo
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
     * Set finalizo
     *
     * @param boolean $finalizo
     *
     * @return Titulo
     */
    public function setFinalizo($finalizo)
    {
        $this->finalizo = $finalizo;

        return $this;
    }

    /**
     * Get finalizo
     *
     * @return boolean
     */
    public function getFinalizo()
    {
        return $this->finalizo;
    }

    /**
     * Set fechaEgreso
     *
     * @param \DateTime $fechaEgreso
     *
     * @return Titulo
     */
    public function setFechaEgreso($fechaEgreso)
    {
        $this->fechaEgreso = $fechaEgreso;

        return $this;
    }

    /**
     * Get fechaEgreso
     *
     * @return \DateTime
     */
    public function getFechaEgreso()
    {
        return $this->fechaEgreso;
    }

    /**
     * Set porcentajeCarrera
     *
     * @param integer $porcentajeCarrera
     *
     * @return Titulo
     */
    public function setPorcentajeCarrera($porcentajeCarrera)
    {
        $this->porcentajeCarrera = $porcentajeCarrera;

        return $this;
    }

    /**
     * Get porcentajeCarrera
     *
     * @return integer
     */
    public function getPorcentajeCarrera()
    {
        return $this->porcentajeCarrera;
    }

    /**
     * Set promedio
     *
     * @param float $promedio
     *
     * @return Titulo
     */
    public function setPromedio($promedio)
    {
        $this->promedio = $promedio;

        return $this;
    }

    /**
     * Get promedio
     *
     * @return float
     */
    public function getPromedio()
    {
        return $this->promedio;
    }

    /**
     * Set distrito
     *
     * @param string $distrito
     *
     * @return Titulo
     */
    public function setDistrito($distrito)
    {
        $this->distrito = $distrito;

        return $this;
    }

    /**
     * Get distrito
     *
     * @return string
     */
    public function getDistrito()
    {
        return $this->distrito;
    }

    /**
     * Set persona
     *
     * @param \AppBundle\Entity\Persona $persona
     *
     * @return Titulo
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

