<?php

use FStudio\model\base\sitioBaseTable;

class sitioTable extends sitioBaseTable {

    public function getAll() {
        $conn = $this->getConnection($this->config);
        $sql = 'SELECT iti_id as id,' . '
            usu_id as usuario_id,' . '       
                sit_id as sitio_is, '
                . ' iti_posicion as posicion,' . '
                          iti_created_at as created_at,' .
                'iti_updated_at as updated_at,' . '
                                      iti_deleted_at as deleted_at,'
                . 'FROM bdp_itinerario '
                . 'WHERE iti_deleted_at IS NULL '
                . 'ORDER BY iti_created_at ASC';
        $answer = $conn->prepare($sql);
        $answer->execute();
        return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
    }

    public function getById($id) {
        $conn = $this->getConnection($this->config);
        $sql = 'SELECT iti_id as id,' . '
            usu_id as usuario_id,' . '       
                sit_id as sitio_is, '
                . ' iti_posicion as posicion,' . '
                          iti_created_at as created_at,' .
                'iti_updated_at as updated_at,' . '
                                      iti_deleted_at as deleted_at,'
                . 'FROM bdp_itinerario '
                . 'WHERE iti_deleted_at IS NULL '
                . 'AND iti_id = :id';
        $params = array(
            ':id' => $id
        );
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
    }

    public function save() {
        $conn = $this->getConnection($this->config);
        $sql = 'INSERT INTO bdp_itinerario '
                . '(iti_id, 
                   usu_id, 
                   sit_id, 
                   iti_posicion, 
                   iti_created_at, 
                   iti_updated_at, 
                   iti_deleted_at)'
                . 'VALUES ( :id, :usuario_id, :sitio_id, :posicion :created_at, :updated_at, :deleted_at)';
        $params = array(
            ':id' => $this->getid(),
            ':usuario_id' => $this->getUsuario_id(),
            ':sitio_id' => $this->getSitio_id(),
            ':posicion' => $this->getPosicion(),
            ':created_at' => $this->getCreated_at(),
            ':updated_at' => $this->getUpdated_at(),
            ':deleted_at' => $this->getDeleted_at(),
        );
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        return $conn->lastInsertId(self::_SEQUENCE);
    }

    public function update() {
        $conn = $this->getConnection($this->config);
        $sql = 'UPDATE bdp_itinerario SET ' .
                'usu_id = :usuario_id' .
                'sit_id = :sitio_id' .
                'iti_posicion = :posicion' .
                'iti_created_at = :created_at' .
                'iti_updated_at = :updated_at' .
                'iti_deleted_at = :deleted_at' 
                . 'WHERE iti_id = :id';
        $params = array(
            ':id' => $this->getid(),
            ':usuario_id' => $this->getUsuario_id(),
            ':sitio_id' => $this->getSitio_id(),
            ':posicion' => $this->getPosicion(),
            ':created_at' => $this->getCreated_at(),
            ':updated_at' => $this->getUpdated_at(),
            ':deleted_at' => $this->getDeleted_at(),
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
                $sql = 'UPDATE bdp_sitio SET iti_deleted_at = now() WHERE iti_id = :id';
                break;
            case false:
                $sql = 'DELETE FROM bd_usuario WHERE iti_id = :id';
                break;
            default:
                throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
        }
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        return true;
    }

}
