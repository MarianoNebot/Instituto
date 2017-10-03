<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Persona
 *
 * @ORM\Table(name="persona")
 * @ORM\Entity
 */
class Persona
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_Persona", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPersona;

    /**
     * @Assert\Type(
     *        type="string",
     *        message=" "
     *              )
     * @var string
     *
     * @ORM\Column(name="Apellido", type="string", length=100, nullable=false)
     */
    private $apellido;

    /**
     * @Assert\Type(
     *        type="string",
     *        message=" "
     *              )
     * @var string
     * @ORM\Column(name="Nombres", type="string", length=100, nullable=false)
     */
    private $nombres;

    /**
    * @Assert\Type(
     *        type="integer",
     *        message="el numero de DNI no es valido."
     *              )
     * @var integer
     * @ORM\Column(name="Numero_Documento", type="integer", nullable=false)
     */
    private $numeroDocumento;

    /**
     * @Assert\Type(
     *        type="string",
     *        message="el numero no es valido."
     *              )
     * @var string
     * @ORM\Column(name="Domicilio", type="string", length=100, nullable=false)
     */
    private $domicilio;

    /**
     * @Assert\DateTime()
     * @var \DateTime
     * @ORM\Column(name="Fecha_Nacimiento", type="date", nullable=false)
     */
    private $fechaNacimiento;

    /**
     * @Assert\Type(
     *        type="integer",
     *        message="el numero no es valido."
     *              )
     * @var string
     * @ORM\Column(name="Telefono", type="string", nullable=false)
     */
    private $telefono;

    /**
     * @Assert\Type(
     *        type="integer",
     *        message="el numero no es valido."
     *              )
     * @var string
     * @ORM\Column(name="Celular", type="string", nullable=false)
     */
    private $celular;

    /**
     * @Assert\Email(message = "Ingrese un correo valido")
     * @var string
     * @ORM\Column(name="Correo_Electronico", type="string", length=100, nullable=false)
     */
    private $correoElectronico;

    /**
     * @var boolean
     * @ORM\Column(name="Activo", type="boolean", nullable=false)
     */
    private $activo;

    /**
     * @var \AppBundle\Entity\Provincia
     * @ORM\Column(name="Nac_Pronvicia_ID", type="integer", nullable=false)
     */
    private $nacProvincia;

    /**
     * @Assert\Choice(choices = {"Soltero/a","Casado/a","Viudo/a","divorciado/a"}, message="elige ")
     * @var \AppBundle\Entity\Estadocivil
     * @ORM\Column(name="estado_civil_ID", type="integer", nullable=false)
     */
    private $estadoCivil;

    /**
     * @var \AppBundle\Entity\Provincia
     * @ORM\Column(name="Resi_Provincia_ID", type="integer", nullable=false)
     */
    private $resiProvincia;

    /**
     * @Assert\Choice(choices = {"hombre","mujer","otro"}, message="elige un genero valido.")
     * @var \AppBundle\Entity\Genero
     * @ORM\Column(name="Genero_ID", type="integer", nullable=false)
     */
    private $genero;

    /**
     * @var \AppBundle\Entity\Localidad
     * @ORM\Column(name="Resi_Localidad_ID", type="integer", nullable=false)
     */
    private $resiLocalidad;

    /**
     * @ORM\ManyToOne(targetEntity="Localidad", inversedBy="Persona")
     * @ORM\JoinColumn(name="ID_Localidad", referencedColumnName="Nac_Localidad_ID", nullable=false)
     */
    protected $nacLocalidad;

    /**
     * @var \AppBundle\Entity\Pais
     */
    private $resiPais;

    /**
     * @ORM\ManyToOne(targetEntity="Pais", inversedBy="Persona")
     * @ORM\JoinColumn(name="ID_Pais", referencedColumnName="Nac_Pais_ID", nullable=false)
     */
    protected $nacPais;

    /**
     * @Assert\Choice(choices = {"DNI","Libreta de enrrolamiento",""}, message="elige un  tipo de documento de identidad.")
     * @var \AppBundle\Entity\TipoDocum
     * @ORM\Column(name="Tipo_Docum_ID", type="integer", nullable=false)
     */
    private $tipoDocum;


    /**
     * Set apellido
     *
     * @param string $apellido
     *
     * @return Persona
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set nombres
     *
     * @param string $nombres
     *
     * @return Persona
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;

        return $this;
    }

    /**
     * Get nombres
     *
     * @return string
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Set numeroDocumento
     *
     * @param integer $numeroDocumento
     *
     * @return Persona
     */
    public function setNumeroDocumento($numeroDocumento)
    {
        $this->numeroDocumento = $numeroDocumento;

        return $this;
    }

    /**
     * Get numeroDocumento
     *
     * @return integer
     */
    public function getNumeroDocumento()
    {
        return $this->numeroDocumento;
    }

    /**
     * Set domicilio
     *
     * @param string $domicilio
     *
     * @return Persona
     */
    public function setDomicilio($domicilio)
    {
        $this->domicilio = $domicilio;

        return $this;
    }

    /**
     * Get domicilio
     *
     * @return string
     */
    public function getDomicilio()
    {
        return $this->domicilio;
    }

    /**
     * Set fechaNacimiento
     *
     * @param \DateTime $fechaNacimiento
     *
     * @return Persona
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    /**
     * Get fechaNacimiento
     *
     * @return \DateTime
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Persona
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set celular
     *
     * @param string $celular
     *
     * @return Persona
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;

        return $this;
    }

    /**
     * Get celular
     *
     * @return string
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * Set correoElectronico
     *
     * @param string $correoElectronico
     *
     * @return Persona
     */
    public function setCorreoElectronico($correoElectronico)
    {
        $this->correoElectronico = $correoElectronico;

        return $this;
    }

    /**
     * Get correoElectronico
     *
     * @return string
     */
    public function getCorreoElectronico()
    {
        return $this->correoElectronico;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Persona
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
     * Get idPersona
     *
     * @return integer
     */
    public function getIdPersona()
    {
        return $this->idPersona;
    }

    /**
     * Set nacProvincia
     *
     * @param \AppBundle\Entity\Provincia $nacProvincia
     *
     * @return Persona
     */
    public function setNacProvincia(\AppBundle\Entity\Provincia $nacProvincia = null)
    {
        $this->nacProvincia = $nacProvincia;

        return $this;
    }

    /**
     * Get nacProvincia
     *
     * @return \AppBundle\Entity\Provincia
     */
    public function getNacProvincia()
    {
        return $this->nacProvincia;
    }

    /**
     * Set estadoCivil
     *
     * @param \AppBundle\Entity\Estadocivil $estadoCivil
     *
     * @return Persona
     */
    public function setEstadoCivil(\AppBundle\Entity\Estadocivil $estadoCivil = null)
    {
        $this->estadoCivil = $estadoCivil;

        return $this;
    }

    /**
     * Get estadoCivil
     *
     * @return \AppBundle\Entity\Estadocivil
     */
    public function getEstadoCivil()
    {
        return $this->estadoCivil;
    }

    /**
     * Set resiProvincia
     *
     * @param \AppBundle\Entity\Provincia $resiProvincia
     *
     * @return Persona
     */
    public function setResiProvincia(\AppBundle\Entity\Provincia $resiProvincia = null)
    {
        $this->resiProvincia = $resiProvincia;

        return $this;
    }

    /**
     * Get resiProvincia
     *
     * @return \AppBundle\Entity\Provincia
     */
    public function getResiProvincia()
    {
        return $this->resiProvincia;
    }

    /**
     * Set genero
     *
     * @param \AppBundle\Entity\Genero $genero
     *
     * @return Persona
     */
    public function setGenero(\AppBundle\Entity\Genero $genero = null)
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get genero
     *
     * @return \AppBundle\Entity\Genero
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set resiLocalidad
     *
     * @param \AppBundle\Entity\Localidad $resiLocalidad
     *
     * @return Persona
     */
    public function setResiLocalidad(\AppBundle\Entity\Localidad $resiLocalidad = null)
    {
        $this->resiLocalidad = $resiLocalidad;

        return $this;
    }

    /**
     * Get resiLocalidad
     *
     * @return \AppBundle\Entity\Localidad
     */
    public function getResiLocalidad()
    {
        return $this->resiLocalidad;
    }

    /**
     * Set nacLocalidad
     *
     * @param \AppBundle\Entity\Localidad $nacLocalidad
     *
     * @return Persona
     */
    public function setNacLocalidad(\AppBundle\Entity\Localidad $nacLocalidad = null)
    {
        $this->nacLocalidad = $nacLocalidad;

        return $this;
    }

    /**
     * Get nacLocalidad
     *
     * @return \AppBundle\Entity\Localidad
     */
    public function getNacLocalidad()
    {
        return $this->nacLocalidad;
    }

    /**
     * Set resiPais
     *
     * @param \AppBundle\Entity\Pais $resiPais
     *
     * @return Persona
     */
    public function setResiPais(\AppBundle\Entity\Pais $resiPais = null)
    {
        $this->resiPais = $resiPais;

        return $this;
    }

    /**
     * Get resiPais
     *
     * @return \AppBundle\Entity\Pais
     */
    public function getResiPais()
    {
        return $this->resiPais;
    }

    /**
     * Set nacPais
     *
     * @param \AppBundle\Entity\Pais $nacPais
     *
     * @return Persona
     */
    public function setNacPais(\AppBundle\Entity\Pais $nacPais = null)
    {
        $this->nacPais = $nacPais;

        return $this;
    }

    /**
     * Get nacPais
     *
     * @return \AppBundle\Entity\Pais
     */
    public function getNacPais()
    {
        return $this->nacPais;
    }

    /**
     * Set tipoDocum
     *
     * @param \AppBundle\Entity\TipoDocum $tipoDocum
     *
     * @return Persona
     */
    public function setTipoDocum(\AppBundle\Entity\TipoDocum $tipoDocum = null)
    {
        $this->tipoDocum = $tipoDocum;

        return $this;
    }

    /**
     * Get tipoDocum
     *
     * @return \AppBundle\Entity\TipoDocum
     */
    public function getTipoDocum()
    {
        return $this->tipoDocum;
    }

}

