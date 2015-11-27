<?php

use FStudio\model\base\etiquetaBaseTable;

class etiquetaTable extends etiquetaBaseTable {

    public function getAll() {
        $conn = $this->getConnection($this->config);
        $sql = 'SELECT eti_id AS id, eti_nombre AS nombre, sit_id AS sitio_id, '
                . 'eve_id AS evento_id, eti_created_at AS created_at, '
                . 'eti_updated_at AS updated_at, eti_deleted_at AS deleted_at '
                . 'FROM bdp_etiqueta '
                . 'WHERE eti_deleted_at IS NULL '
                . 'ORDER BY eti_created_at ASC';
        $answer = $conn->prepare($sql);
        $answer->execute();
        return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
    }

    public function getById($id = null) {
        $conn = $this->getConnection($this->config);
        $sql = 'SELECT eti_id AS id, eti_nombre AS nombre, sit_id AS sitio_id, '
                . 'eve_id AS evento_id, eti_created_at AS created_at, '
                . 'eti_updated_at AS updated_at, eti_deleted_at AS deleted_at '
                . 'FROM bdp_etiqueta '
                . 'WHERE eti_deleted_at IS NULL '
                . 'AND eti_id = :id';
        $params = array(
            ':id' => ($id !== null) ? $id : $this->getById()
        );
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
    }

    public function save() {
        $conn = $this->getConnection($this->config);
        $sql = 'INSERT INTO etiqueta '
                . '(eti_id, eti_nombre, sit_id, eve_id) '
                . 'VALUES (:id, :nombre, :sitio_id, :evento_id)';
        $params = array(
            ':id' => $this->getId(),
            ':nombre' => $this->getNombre(),
            ':sitio_id' => $this->getSitioId(),
            ':evento_id' => $this->getEventoId()
        );
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        $this->setId($conn->lastInsertId());
        return true;
    }

    public function update() {
        $conn = $this->getConnection($this->config);
        $sql = 'UPDATE bdp_etiqueta SET '
                . 'eti_nombre = :nombre, '
                . 'sit_id = :sitio_id, '
                . 'eve_id = :evento_id, '
                . 'WHERE eti_id = :id';
        $params = array(
            ':nombre' => $this->getNombre(),
            ':sitio_id' => $this->getSitioId(),
            ':evento_id' => $this->getEventoId(),
            ':id' => $this->getId()
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
                $sql = 'UPDATE bdp_etiqueta SET eti_deleted_at = now() WHERE eti_id = :id';
                break;
            case false:
                $sql = 'DELETE FROM bdp_etiqueta WHERE eti_id = :id';
                break;
            default:
                throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
        }
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        return true;
    }

}
