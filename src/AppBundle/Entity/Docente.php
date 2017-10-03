<?php

namespace AppBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Docente
 */
class Docente
{
    /**
     * @var integer
     */
    private $idDocente;

    /**
     * @var boolean
     */
    private $activo;

    /**
     * @Assert\Type(
     *        type="string",
     *        message=" "
     *              )
     * @var string
     */
    private $foja;

    /**
     * @Assert\Type(
     *        type="string",
     *        message=" "
     *              )
     * @var string
     */
    private $numeroRegistro;

    /**
     * @Assert\Type(
     *        type="string",
     *        message=" "
     *              )
     * @var string
     */
    private $certificadoActitudFisica;

    /**
     * @var \AppBundle\Entity\Persona
     */
    private $persona;


    /**
     * Get idDocente
     *
     * @return integer
     */
    public function getIdDocente()
    {
        return $this->idDocente;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Docente
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
     * Set foja
     *
     * @param string $foja
     *
     * @return Docente
     */
    public function setFoja($foja)
    {
        $this->foja = $foja;

        return $this;
    }

    /**
     * Get foja
     *
     * @return string
     */
    public function getFoja()
    {
        return $this->foja;
    }

    /**
     * Set numeroRegistro
     *
     * @param string $numeroRegistro
     *
     * @return Docente
     */
    public function setNumeroRegistro($numeroRegistro)
    {
        $this->numeroRegistro = $numeroRegistro;

        return $this;
    }

    /**
     * Get numeroRegistro
     *
     * @return string
     */
    public function getNumeroRegistro()
    {
        return $this->numeroRegistro;
    }

    /**
     * Set certificadoActitudFisica
     *
     * @param string $certificadoActitudFisica
     *
     * @return Docente
     */
    public function setCertificadoActitudFisica($certificadoActitudFisica)
    {
        $this->certificadoActitudFisica = $certificadoActitudFisica;

        return $this;
    }

    /**
     * Get certificadoActitudFisica
     *
     * @return string
     */
    public function getCertificadoActitudFisica()
    {
        return $this->certificadoActitudFisica;
    }

    /**
     * Set persona
     *
     * @param \AppBundle\Entity\Persona $persona
     *
     * @return Docente
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

