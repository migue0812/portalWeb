<?php

namespace FStudio\model\base;

use FStudio \fsModel as model; 
use FStudio \myConfig as config;


class  pqrsfBaseTable  extends  model{

  const ID  =  ' img_id ' ; 
  const EVENTO_ID  =  ' eve_id ' ; 
  const SIT_ID  =  ' sit_id ' ; 
  const RUTA  =  ' img_ruta ' ; 
  const CREATED_AT  =  ' img_created_at' ; 
  
 
  /** 
   * Configuracion del sistema 
   * @var config 
   */ 
  
   protected  $config; 
  PRIVATE $ID  ;
  PRIVATE $EVENTO_ID ; 
  PRIVATE $SIT_ID ; 
  PRIVATE $RUTA  ;
  PRIVATE $CREATED_AT  ;
  
  function __construct(config $config, $ID, $EVENTO_ID, $SIT_ID, $RUTA, $CREATED_AT) {
      $this->config = $config;
      $this->ID = $ID;
      $this->EVENTO_ID = $EVENTO_ID;
      $this->SIT_ID = $SIT_ID;
      $this->RUTA = $RUTA;
      $this->CREATED_AT = $CREATED_AT;
  }
  public function getConfig() {
      return $this->config;
  }

  public function getID() {
      return $this->ID;
  }

  public function getEVENTO_ID() {
      return $this->EVENTO_ID;
  }

  public function getSIT_ID() {
      return $this->SIT_ID;
  }

  public function getRUTA() {
      return $this->RUTA;
  }

  public function getCREATED_AT() {
      return $this->CREATED_AT;
  }

  public function setConfig(config $config) {
      $this->config = $config;
  }

  public function setID($ID) {
      $this->ID = $ID;
  }

  public function setEVENTO_ID($EVENTO_ID) {
      $this->EVENTO_ID = $EVENTO_ID;
  }

  public function setSIT_ID($SIT_ID) {
      $this->SIT_ID = $SIT_ID;
  }

  public function setRUTA($RUTA) {
      $this->RUTA = $RUTA;
  }

  public function setCREATED_AT($CREATED_AT) {
      $this->CREATED_AT = $CREATED_AT;
  }


  
  
}