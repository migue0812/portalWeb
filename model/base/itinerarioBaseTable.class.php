<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

class itinerarioBaseTable extends model {

    const ID = 'iti_id';
    const USUARIO_ID = ';usu_id';
    const SITIO_ID = ';sit_id';
    const POSICION = 'iti_posicion';
    const CREATED_AT = 'iti_created_at';
    const UPDATED_AT = 'iti_updated_at';
    const DELETED_AT = 'iti_deleted_at';
    const _TABLE = '[dbp_sitio]';

    /**
     * Configuración del sistema
     * @var config
     */
    protected $config;
        private $id;
    private $usuario_id;
    private $sitio_id;
    private $posicion;
    private $created_at;
    private $updated_at;
    private $deleted_at;
    
    public function __construct(config $config, $id, $usuario_id, $sitio_id, $posicion, $created_at, $updated_at, $deleted_at) {
        $this->config = $config;
        $this->id = $id;
        $this->usuario_id = $usuario_id;
        $this->sitio_id = $sitio_id;
        $this->posicion = $posicion;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->deleted_at = $deleted_at;
    }
    public function getConfig() {
        return $this->config;
    }

    public function getId() {
        return $this->id;
    }

    public function getUsuario_id() {
        return $this->usuario_id;
    }

    public function getSitio_id() {
        return $this->sitio_id;
    }

    public function getPosicion() {
        return $this->posicion;
    }

    public function getCreated_at() {
        return $this->created_at;
    }

    public function getUpdated_at() {
        return $this->updated_at;
    }

    public function getDeleted_at() {
        return $this->deleted_at;
    }

    public function setConfig(config $config) {
        $this->config = $config;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setUsuario_id($usuario_id) {
        $this->usuario_id = $usuario_id;
    }

    public function setSitio_id($sitio_id) {
        $this->sitio_id = $sitio_id;
    }

    public function setPosicion($posicion) {
        $this->posicion = $posicion;
    }

    public function setCreated_at($created_at) {
        $this->created_at = $created_at;
    }

    public function setUpdated_at($updated_at) {
        $this->updated_at = $updated_at;
    }

    public function setDeleted_at($deleted_at) {
        $this->deleted_at = $deleted_at;
    }


}

    