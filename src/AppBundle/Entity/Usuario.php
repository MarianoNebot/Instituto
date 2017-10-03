<?php

namespace AppBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Usuario
 */
class Usuario
{
    /**
     * @var integer
     */
    private $idUsuario;

    /**
     * @Assert\Length(
     *      min = 6
     *      minMessage = "Tu contraseña debe tener al menos {{ limit }} caracteres"
     * )
     * @var string 
     */
    private $contraseña;

    /**
     * @var string
     */
    private $correoElectronico;

    /**
     * @var string
     */
    
    private $roles;
    
    /**
     * @var integer
     */
    
    private $Nro_Registro;
    
    /**
     * @var string
     */
    
    private $Nom_Usu;
    

    /**
     * Get idUsuario
     *
     * @return integer
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Set contraseña
     *
     * @param string $contraseña
     *
     * @return Usuario
     */
    public function setContraseña($contraseña)
    {
        $this->contraseña = $contraseña;

        return $this;
    }

    /**
     * Get contraseña
     *
     * @return string
     */
    public function getContraseña()
    {
        return $this->contraseña;
    }

    /**
     * Set correoElectronico
     *
     * @param string $correoElectronico
     *
     * @return Usuario
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
     * Set roles
     *
     * @param string $roles
     *
     * @return Usuario
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * Get roles
     *
     * @return string
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * Set nomUsu
     *
     * @param string $nomUsu
     *
     * @return Usuario
     */
    public function setNomUsu($nomUsu)
    {
        $this->Nom_Usu = $nomUsu;

        return $this;
    }

    /**
     * Get nomUsu
     *
     * @return string
     */
    public function getNomUsu()
    {
        return $this->Nom_Usu;
    }

    /**
     * Set nroRegistro
     *
     * @param integer $nroRegistro
     *
     * @return Usuario
     */
    public function setNroRegistro($nroRegistro)
    {
        $this->Nro_Registro = $nroRegistro;

        return $this;
    }

    /**
     * Get nroRegistro
     *
     * @return integer
     */
    public function getNroRegistro()
    {
        return $this->Nro_Registro;
    }
}
