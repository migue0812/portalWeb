<?php

namespace FStudio\model\base;

use FStudio \fsModel as model; 
use FStudio \myConfig as config;


class  dato_UsuarioBaseTable  extends  model{

  const ID  =  ' dus_id ' ; 
  const USUARIO_ID  =  ' Usu_id ' ; 
  const NOMBRE  =  ' dus_nombre ' ; 
  const NOMBRE_LENGTH  =  80 ; 
  const APELLIDOS  =  ' dus_apellidos ' ; 
  const APELLIDOS_LENGTH  =  80 ; 
  const CORREO  =  ' dus_correo ' ; 
  const CORREO_LENGTH  =  100 ; 
  const GENERO  =  ' dus_genero ' ; 
  const FECHA_NACIMIENTO  =  ' dus_fecha_nacimiento ' ;
  const FACEBOOK  =  ' dus_facebook ' ; 
  const FACEBOOK_LENGTH  =  80; 
  const TWITTER  =  ' dus_twitter ' ;
  const TWITTER_LENGTH  =  80; 
  const GOOGLE_PLUS  =  ' dus_google_plus ' ;
  const GOOGLE_PLUS_LENGTH  =  80;
  const AVATAR  =  ' dus_google_plus ' ;
  const AVATAR_LENGTH  =  100;
  const CREATED_AT  =  ' dus_created_at ' ;
  const UPDATED_AT  =  ' dus_updated_at ';
  const DELETED_AT =  ' dus_deleted_at ';
  const _TABLE = 'bdp_dato_usuario'; 
 
  /** 
   * Configuracion del sistema 
   * @var config 
   */ 
  
   protected  $config; 
   private  $id;
   private  $usuario_id;  
   private  $nombre;  
   private  $apellidos;
   private  $correo;
   private  $genero; 
   private  $fecha_nacimiento;
   private  $facebook;
   private  $twitter;
   private  $google_plus;  
   private  $avatar;
   private  $created_at;
   private  $updated_at;
   private  $delete_at;

   function __construct(config $config, $id, $usuario_id, $nombre, $apellidos, $correo, $genero, $fecha_nacimiento, $facebook, $twitter, $google_plus, $avatar, $created_at, $updated_at, $delete_at) {
       $this->config = $config;
       $this->id = $id;
       $this->usuario_id = $usuario_id;
       $this->nombre = $nombre;
       $this->apellidos = $apellidos;
       $this->correo = $correo;
       $this->genero = $genero;
       $this->fecha_nacimiento = $fecha_nacimiento;
       $this->facebook = $facebook;
       $this->twitter = $twitter;
       $this->google_plus = $google_plus;
       $this->avatar = $avatar;
       $this->created_at = $created_at;
       $this->updated_at = $updated_at;
       $this->delete_at = $delete_at;
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

   public function getNombre() {
       return $this->nombre;
   }

   public function getApellidos() {
       return $this->apellidos;
   }

   public function getCorreo() {
       return $this->correo;
   }

   public function getGenero() {
       return $this->genero;
   }

   public function getFecha_nacimiento() {
       return $this->fecha_nacimiento;
   }

   public function getFacebook() {
       return $this->facebook;
   }

   public function getTwitter() {
       return $this->twitter;
   }

   public function getGoogle_plus() {
       return $this->google_plus;
   }

   public function getAvatar() {
       return $this->avatar;
   }

   public function getCreated_at() {
       return $this->created_at;
   }

   public function getUpdated_at() {
       return $this->updated_at;
   }

   public function getDelete_at() {
       return $this->delete_at;
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

   public function setNombre($nombre) {
       $this->nombre = $nombre;
   }

   public function setApellidos($apellidos) {
       $this->apellidos = $apellidos;
   }

   public function setCorreo($correo) {
       $this->correo = $correo;
   }

   public function setGenero($genero) {
       $this->genero = $genero;
   }

   public function setFecha_nacimiento($fecha_nacimiento) {
       $this->fecha_nacimiento = $fecha_nacimiento;
   }

   public function setFacebook($facebook) {
       $this->facebook = $facebook;
   }

   public function setTwitter($twitter) {
       $this->twitter = $twitter;
   }

   public function setGoogle_plus($google_plus) {
       $this->google_plus = $google_plus;
   }

   public function setAvatar($avatar) {
       $this->avatar = $avatar;
   }

   public function setCreated_at($created_at) {
       $this->created_at = $created_at;
   }

   public function setUpdated_at($updated_at) {
       $this->updated_at = $updated_at;
   }

   public function setDelete_at($delete_at) {
       $this->delete_at = $delete_at;
   }
}