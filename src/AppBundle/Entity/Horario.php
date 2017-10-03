<?php

namespace AppBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Horario
 */
class Horario
{
    /**
     * @var integer
     */
    private $idHorario;

    /**
     * @var \DateTime
     */
    private $dia;

    /**
     * @Assert\DateTime()
     * @var \DateTime
     */
    private $hora;

    /**
     * @var boolean
     */
    private $activo;


    /**
     * Get idHorario
     *
     * @return integer
     */
    public function getIdHorario()
    {
        return $this->idHorario;
    }

    /**
     * Set dia
     *
     * @param \DateTime $dia
     *
     * @return Horario
     */
    public function setDia($dia)
    {
        $this->dia = $dia;

        return $this;
    }

    /**
     * Get dia
     *
     * @return \DateTime
     */
    public function getDia()
    {
        return $this->dia;
    }

    /**
     * Set hora
     *
     * @param \DateTime $hora
     *
     * @return Horario
     */
    public function setHora($hora)
    {
        $this->hora = $hora;

        return $this;
    }

    /**
     * Get hora
     *
     * @return \DateTime
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Horario
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
}

