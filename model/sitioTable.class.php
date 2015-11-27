<?php

use FStudio\model\base\sitioBaseTable;

class sitioTable extends sitioBaseTable {

    public function getAll() {
        $conn = $this->getConnection($this->config);
        $sql = 'SELECT sit_id as id,' . '
            sit_nombre as    nombre,' . '       
                sit_descripcion as descripcion,  sit_direccion as direccion,' . '
                          sit_telefono as telefono,    sit_latitud as latitud,' . '
                                      sit_longitud as longitud,       est_id as estado_id,' . '
    sit_facebook as facebook,        sit_twitter as twitter,' . '
    sit_google_plus as google_plus,        sit_created_at as created_at,' . '
    sit_updated_at as updated_at,    sit_deleted_at as deleted_at,' . '
    usu_id as usuario_id,'
                . 'FROM bdp_sitio '
                . 'WHERE sit_deleted_at IS NULL '
                . 'ORDER BY sit_created_at ASC';
        $answer = $conn->prepare($sql);
        $answer->execute();
        return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
    }

    public function getById($id) {
        $conn = $this->getConnection($this->config);
        $sql = 'SELECT sit_id as id,' . '
            sit_nombre as    nombre,' . '       
                sit_descripcion as descripcion,  sit_descripcion as direccion,' . '
                          sit_telefono as telefono,    sit_latitud as latitud,' . '
                                      sit_longitud as longitud,       est_id as estado_id,' . '
    sit_facebook as facebook,        sit_twitter as twitter,' . '
    sit_google_plus as google_plus,        sit_created_at as created_at,' . '
    sit_updated_at as updated_at,    sit_deleted_at as deleted_at,' . '
    usu_id as usuario_id,'
                . 'FROM bdp_sitio '
                . 'WHERE sit_deleted_at IS NULL '
                . 'AND sit_id = :id';
        $params = array(
            ':id' => $id
        );
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
    }

    public function save() {
        $conn = $this->getConnection($this->config);
        $sql = 'INSERT INTO bdp_sitio '
                . '(sit_nombre, 
        sit_descripcion, 
    sit_descripcion, 
        sit_telefono, 
    sit_latitud, 
        sit_longitud, 
        est_id, 
    sit_facebook, 
        sit_twitter, 
    sit_google_plus, 
sit_created_at, 
    sit_updated_at, 
    sit_deleted_at, 
    usu_id)'
                . 'VALUES ( :nombre, :descripcion, :direccion, :telefono, :latitud, :longitud, :estado_id, :facebook, :twitter, :google_plus, :created_at, :updated_at, :deleted_at, :usuario_id)';
        $params = array(
             ':id' => $this->getId(),
            ':nombre' => $this->getNombre(),
            ':descripción' => $this->getDescripcion(),
            ':direccion' => $this->getDireccion(),
            ':telefono' => $this->getTelefono(),
            ':latitud' => $this->getLatitud(),
            ':longitud' => $this->getLongitud(),
            ':estado_id' => $this->getEstado_id(),
            ':Facebook' => $this->getFacebook(),
            ':twitter' => $this->getTwitter(),
            ':google_plus' => $this->getGoogle_plus(),
            ':created_at' => $this->getCreated_at(),
            ':updated_at' => $this->getUpdated_at(),
            ':deleted_at' => $this->getDeleted_at(),
            ':usuario_id' => $this->getUsuario_id(),
        );
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        return $conn->lastInsertId(self::_SEQUENCE);
    }

    public function update() {
        $conn = $this->getConnection($this->config);
        $sql = 'UPDATE bdp_sitio SET '.
                'sit_nombre = :nombre'.
                'sit_descripcion = :descripcion' .
                'sit_descripcion = :direccion' .
                'sit_telefono = :telefono' .
                'sit_latitud = :latitud' .
                'sit_longitud = :longitud' .
                'est_id = : estado_id' .
                'sit_facebook = :facebook' .
                'sit_twitter = :twitter' .
                'sit_google_plus = :google_plus' .
                'sit_created_at = :created_at' .
                'sit_updated_at = :updated_at' .
                'sit_deleted_at = :deleted_at' .
                'usu_id = :usuario_id'
                . 'WHERE usu_id = :id';
        $params = array(
            ':id' => $this->getId(),
            ':nombre' => $this->getNombre(),
            ':descripción' => $this->getDescripcion(),
            ':direccion' => $this->getDireccion(),
            ':telefono' => $this->getTelefono(),
            ':latitud' => $this->getLatitud(),
            ':longitud' => $this->getLongitud(),
            ':estado_id' => $this->getEstado_id(),
            ':Facebook' => $this->getFacebook(),
            ':twitter' => $this->getTwitter(),
            ':google_plus' => $this->getGoogle_plus(),
            ':created_at' => $this->getCreated_at(),
            ':updated_at' => $this->getUpdated_at(),
            ':deleted_at' => $this->getDeleted_at(),
            ':usuario_id' => $this->getUsuario_id(),
        );
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        return true;
    }

    public function delete($deleteLogical = true) {
        $conn = $this->getConnection($this->config);
        $params = array(
            ':id' => $this->getId()
        );
        switch ($deleteLogical) {
            case true:
                $sql = 'UPDATE bdp_sitio SET sit_deleted_at = now() WHERE sit_id = :id';
                break;
            case false:
                $sql = 'DELETE FROM bd_usuario WHERE sit_id = :id';
                break;
            default:
                throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
        }
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        return true;
    }

}
