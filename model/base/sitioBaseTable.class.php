<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

class sitioBaseTable extends model {

    const ID = 'sit_id';
    const NOMBRE = 'sit_nombre';
    const NOMBRE_LENGTH = 80;
    const DESCRIPCION = 'sit_descripcion';
    const DIRECCION = 'sit_descripcion';
    const DIRECCION_LENGTH = 100;
    const TELEFONO = 'sit_telefono';
    const TELEFONO_LENGTH = 40;
    const LATITUD = 'sit_latitud';
    const LATITUD_LENGTH = 70;
    const LONGITUD = 'sit_longitud';
    const LONGITUD_LENGTH = 70;
    const ESTADO_ID = 'est_id';
    const FACEBOOK = 'sit_facebook';
    const FACEBOOK_LENGTH = 80;
    const TWITTER = 'sit_TWITTER';
    const TWITTER_LENGTH = 80;
    const GOOGLE_PLUS = 'sit_google_plus';
    const GOOGLE_PLUS_LENGTH = 80;
    const CREATED_AT = 'sit_created_at';
    const UPDATED_AT = 'sit_updated_at';
    const DELETED_AT = 'sit_deleted_at';
    const USUARIO_ID = 'usu_id';
    const _TABLE = '[dbp_sitio]';

    /**
     * Configuración del sistema
     * @var config
     */
    protected $config;
    private $id;
    private $nombre;
    private $descripcion;
    private $direccion;
    private $telefono;
    private $latitud;
    private $longitud;
    private $estado_id;
    private $facebook;
    private $twitter;
    private $google_plus;
    private $created_at;
    private $updated_at;
    private $deleted_at;
    private $usuario_id;
    
    public function __construct(config $config, $id, $nombre, $descripcion, $direccion, $telefono, $latitud, $longitud, $estado_id, $facebook, $twitter, $google_plus, $created_at, $updated_at, $deleted_at, $usuario_id) {
        $this->config = $config;
        $this->id = $id;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->latitud = $latitud;
        $this->longitud = $longitud;
        $this->estado_id = $estado_id;
        $this->facebook = $facebook;
        $this->twitter = $twitter;
        $this->google_plus = $google_plus;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->deleted_at = $deleted_at;
        $this->usuario_id = $usuario_id;
    }

}
