<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

class usuarioBaseTable extends model {

    const ID = 'usu_id';
    const USUARIO = 'usu_usuario';
    const USUARIO_LENGTH = 20;
    const PASSWORD = 'usu_password';
    const PASSWORD_LENGTH = 32;
    const ACTIVADO = 'usu_activado';
    const ROL_ID = 'rol_id';
    const CREATED_AT = 'usu_created_at';
    const UPDATED_AT = 'usu_updated_at';
    const DELETED_AT = 'usu_deleted_at';
    const _TABLE = 'usuario';

    /**
     * Configuración del sistema
     * @var config
     */
    protected $config;
    private $id;
    private $usuario;
    private $password;
    private $activado;
    private $rol_id;
    private $created_at;
    private $updated_at;
    private $deleted_at;

    public function __construct(config $config, $id = null, $usuario = null, $password = null, $activado = null, $rol_id = null, $created_at = null, $updated_at = null, $deleted_at = null) {
        $this->config = $config;
        $this->id = $id;
        $this->usuario = $usuario;
        $this->password = $password;
        $this->activado = $activado;
        $this->rol_id = $rol_id;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->deleted_at = $deleted_at;
    }

    public function getId() {
        return $this->id;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getActivado() {
        return $this->activado;
    }

    public function getRolId() {
        return $this->rol_id;
    }

    public function getCreatedIt() {
        return $this->created_at;
    }

    public function getUpdatedAt() {
        return $this->updated_at;
    }

    public function getDeletedAt() {
        return $this->deleted_at;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setActivado($activado) {
        $this->activado = $activado;
    }

    public function setRolId($rol_id) {
        $this->rol_id = $rol_id;
    }

    public function setCreatedAt($created_at) {
        $this->created_at = $created_at;
    }

    public function setUpdatedAt($updated_at) {
        $this->updated_at = $updated_at;
    }

    public function setDeletedAt($deleted_at) {
        $this->deleted_at = $deleted_at;
    }

}
