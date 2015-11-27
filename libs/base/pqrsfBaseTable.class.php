<?php

namespace FStudio\model\base;

use FStudio \fsModel as model; 
use FStudio \myConfig as config;


class  pqrsfBaseTable  extends  model{

  const ID  =  ' pqrsf_id ' ; 
  const USUARIO_ID  =  ' Usu_id ' ; 
  const ESTADO_ID  =  ' est_id ' ; 
  const MENSAJE  =  ' pqrsf_mensaje ' ; 
  const CREATED_AT  =  ' pqrsf_created_at' ; 
  const APDATE_AT  =  ' pqrsf_update_at ' ; 
  const DELETED_AT  =  ' pqrsf_deleted_at ' ;
  
 
  /** 
   * Configuracion del sistema 
   * @var config 
   */ 
  
   protected  $config; 
  PRIVATE $ID  ;
  PRIVATE $USUARIO_ID ; 
  PRIVATE $ESTADO_ID ; 
  PRIVATE $MENSAJE  ;
  PRIVATE $CREATED_AT  ;
  PRIVATE $APDATE_AT  ;
  PRIVATE $DELETED_AT  ;
  
  
  function __construct(config $config, $ID, $USUARIO_ID, $ESTADO_ID, $MENSAJE, $CREATED_AT, $APDATE_AT, $DELETED_AT) {
      $this->config = $config;
      $this->ID = $ID;
      $this->USUARIO_ID = $USUARIO_ID;
      $this->ESTADO_ID = $ESTADO_ID;
      $this->MENSAJE = $MENSAJE;
      $this->CREATED_AT = $CREATED_AT;
      $this->APDATE_AT = $APDATE_AT;
      $this->DELETED_AT = $DELETED_AT;
  }
  
  public function getConfig() {
      return $this->config;
  }

  public function getID() {
      return $this->ID;
  }

  public function getUSUARIO_ID() {
      return $this->USUARIO_ID;
  }

  public function getESTADO_ID() {
      return $this->ESTADO_ID;
  }

  public function getMENSAJE() {
      return $this->MENSAJE;
  }

  public function getCREATED_AT() {
      return $this->CREATED_AT;
  }

  public function getAPDATE_AT() {
      return $this->APDATE_AT;
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

  public function setUSUARIO_ID($USUARIO_ID) {
      $this->USUARIO_ID = $USUARIO_ID;
  }

  public function setESTADO_ID($ESTADO_ID) {
      $this->ESTADO_ID = $ESTADO_ID;
  }

  public function setMENSAJE($MENSAJE) {
      $this->MENSAJE = $MENSAJE;
  }

  public function setCREATED_AT($CREATED_AT) {
      $this->CREATED_AT = $CREATED_AT;
  }

  public function setAPDATE_AT($APDATE_AT) {
      $this->APDATE_AT = $APDATE_AT;
  }

  public function setDELETED_AT($DELETED_AT) {
      $this->DELETED_AT = $DELETED_AT;
  }



}
