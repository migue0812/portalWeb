<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

class eventoBaseTable extends model {

    const ID = 'eve_id';
    const USUARIO_ID = 'usu_id';
    const CATEGORIA_ID = 'cat_id';
    const NOMBRE = 'eve_nombre';
    const NOMBRE_LENGTH = 80;
    const FECHA_HORA = 'eve_fecha_hora';
    const DIRECCION = 'eve_direccion';
    const DIRECCION_LENGTH = 100;
    const NOMBRE_CONTACTO = 'eve_nombre_contacto';
    const NOMBRE_CONTACTO_LENGTH = 100;
    const CORREO_CONTACTO = 'eve_correo_contacto';
    const CORREO_CONTACTO_LENGTH = 100;
    const TELEFONO_CONTACTO = 'eve_telefono_contacto';
    const TELEFONO_CONTACTO_LENGTH = 100;
    const VALOR_BOLETA = 'eve_valor_boleta';
    const LATITUD = 'eve_latitud';
    const LATITUD_LENGTH = 100;
    const LONGITUD = 'eve_longitud';
    const LONGITUD_LENGTH = 100;
    const FECHA_INICIO_PUBLICACION = 'fecha_inicio_publicacion';
    const FECHA_FIN_PUBLICACION = 'fecha_fin_publicacion';
    const ESTADO_ID = 'est_id';
    const CREATED_AT = 'eve_created_at';
    const UPDATED_AT = 'eve_updated_at';
    const DELETED_AT = 'eve_deleted_at';
    const _TABLE = 'evento';

    /**
     * Configuración del sistema
     * @var config
     */
    protected $config;
    private $id;
    private $usuario_id;
    private $categoria_id;
    private $nombre;
    private $fecha_hora;
    private $direccion;
    private $nombre_contacto;
    private $correo_contacto;
    private $telefono_contacto;
    private $valor_boleta;
    private $latitud;
    private $longitud;
    private $fecha_inicio_publicacion;
    private $fecha_fin_publicacion;
    private $estado_id;
    private $created_at;
    private $updated_at;
    private $deleted_at;

    public function __construct(config $config, $id = null, $usuario_id = null, $categoria_id = null, $nombre = null, $fecha_hora = null, $direccion = null, $nombre_contacto = null, $correo_contacto = null, $telefono_contacto = null, $valor_boleta = null, $latitud = null, $longitud = null, $fecha_inicio_publicacion = null, $fecha_fin_publicacion = null, $estado_id = null, $created_at = null, $updated_at = null, $deleted_at = null) {
        $this->config = $config;
        $this->id = $id;
        $this->usuario_id = $usuario_id;
        $this->categoria_id = $categoria_id;
        $this->nombre = $nombre;
        $this->fecha_hora = $fecha_hora;
        $this->direccion = $direccion;
        $this->nombre_contacto = $nombre_contacto;
        $this->correo_contacto = $correo_contacto;
        $this->telefono_contacto = $telefono_contacto;
        $this->valor_boleta = $valor_boleta;
        $this->latitud = $latitud;
        $this->longitud = $longitud;
        $this->fecha_inicio_publicacion = $fecha_inicio_publicacion;
        $this->fecha_fin_publicacion = $fecha_fin_publicacion;
        $this->estado_id = $estado_id;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->deleted_at = $deleted_at;
    }

    public function getId() {
        return $this->id;
    }

    public function getUsuarioId() {
        return $this->usuario_id;
    }

    public function getCategoriaId() {
        return $this->categoria_id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getFechaHora() {
        return $this->fecha_hora;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function getNombreContacto() {
        return $this->nombre_contacto;
    }

    public function getCorreoContacto() {
        return $this->correo_contacto;
    }

    public function getTelefonoContacto() {
        return $this->telefono_contacto;
    }

    public function getValorBoleta() {
        return $this->valor_boleta;
    }

    public function getLatitud() {
        return $this->latitud;
    }

    public function getLongitud() {
        return $this->longitud;
    }

    public function getFechaInicioPublicacion() {
        return $this->fecha_inicio_publicacion;
    }

    public function getFechaFinPublicacion() {
        return $this->fecha_fin_publicacion;
    }

    public function getEstadoId() {
        return $this->estado_id;
    }

    public function getCreatedAt() {
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

    public function setUsuarioId($usuario_id) {
        $this->usuario_id = $usuario_id;
    }

    public function setCategoriaId($categoria_id) {
        $this->categoria_id = $categoria_id;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setFechaHora($fecha_hora) {
        $this->fecha_hora = $fecha_hora;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function setNombreContacto($nombre_contacto) {
        $this->nombre_contacto = $nombre_contacto;
    }

    public function setCorreoContacto($correo_contacto) {
        $this->correo_contacto = $correo_contacto;
    }

    public function setTelefonoContacto($telefono_contacto) {
        $this->telefono_contacto = $telefono_contacto;
    }

    public function setValorBoleta($valor_boleta) {
        $this->valor_boleta = $valor_boleta;
    }

    public function setLatitud($latitud) {
        $this->latitud = $latitud;
    }

    public function setLongitud($longitud) {
        $this->longitud = $longitud;
    }

    public function setFechaInicioPublicacion($fecha_inicio_publicacion) {
        $this->fecha_inicio_publicacion = $fecha_inicio_publicacion;
    }

    public function setFechaFinPublicacion($fecha_fin_publicacion) {
        $this->fecha_fin_publicacion = $fecha_fin_publicacion;
    }

    public function setEstadoId($estado_id) {
        $this->estado_id = $estado_id;
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
