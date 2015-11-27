<?php

namespace FStudio\model\base;

use FStudio \fsModel as model; 
use FStudio \myConfig as config;


class  pqrsfBaseTable  extends  model{

  const ID  =  ' cat_id ' ; 
  const NOMBRE  =  ' cat_nombre ' ; 
  const NOMBRE_LENGTH  =  30 ; 
  const ACTIVO  =  ' cat_activo ' ; 
  const CAT_ID  =  ' cat_cat_id ' ; 
  const CREATED_AT  =  'cat_created_at' ; 
  const UPDATE_AT  =  'cat_update_at' ; 
  const DELETED_AT  =  'cat_deleted_at' ; 
  
 
  /** 
   * Configuracion del sistema 
   * @var config 
   */ 
  
   protected  $config; 
  PRIVATE $ID  ;
  PRIVATE $NOMBRE ; 
  PRIVATE $ACTIVO ; 
  PRIVATE $CAT_ID ;
  PRIVATE $CREATED_AT  ;
  PRIVATE $UPDATE_AT  ;
  PRIVATE $DELETED_AT  ;
  
  function __construct(config $config, $ID, $NOMBRE, $ACTIVO, $CAT_ID, $CREATED_AT, $UPDATE_AT, $DELETED_AT) {
      $this->config = $config;
      $this->ID = $ID;
      $this->NOMBRE = $NOMBRE;
      $this->ACTIVO = $ACTIVO;
      $this->CAT_ID = $CAT_ID;
      $this->CREATED_AT = $CREATED_AT;
      $this->UPDATE_AT = $UPDATE_AT;
      $this->DELETED_AT = $DELETED_AT;
  }
  public function getConfig() {
      return $this->config;
  }

  public function getID() {
      return $this->ID;
  }

  public function getNOMBRE() {
      return $this->NOMBRE;
  }

  public function getACTIVO() {
      return $this->ACTIVO;
  }

  public function getCAT_ID() {
      return $this->CAT_ID;
  }

  public function getCREATED_AT() {
      return $this->CREATED_AT;
  }

  public function getUPDATE_AT() {
      return $this->UPDATE_AT;
  }

  public function getDELETED_AT() {
      return $this->DELETED_AT;
  }

  public function setConfig(config $config) {
      $this->config = $config;
  }

  public function setID($ID) {
      $this->ID = $ID;
  }

  public function setNOMBRE($NOMBRE) {
      $this->NOMBRE = $NOMBRE;
  }

  public function setACTIVO($ACTIVO) {
      $this->ACTIVO = $ACTIVO;
  }

  public function setCAT_ID($CAT_ID) {
      $this->CAT_ID = $CAT_ID;
  }

  public function setCREATED_AT($CREATED_AT) {
      $this->CREATED_AT = $CREATED_AT;
  }

  public function setUPDATE_AT($UPDATE_AT) {
      $this->UPDATE_AT = $UPDATE_AT;
  }

  public function setDELETED_AT($DELETED_AT) {
      $this->DELETED_AT = $DELETED_AT;
  }


  
}