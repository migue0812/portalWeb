<?php

use FStudio\model\base\rolBaseTable;

class usuarioTable extends rolBaseTable {

    public function getAll() {
        $conn = $this->getConnection($this->config);
        $sql = 'SELECT rol_id AS id, rol_rol AS rol, rol_created_at AS created_at, '
                . 'rol_updated_at AS updated_at, rol_deleted_at AS deleted_at '
                . 'FROM bdp_rol '
                . 'WHERE rol_deleted_at IS NULL '
                . 'ORDER BY rol_created_at ASC';
        $answer = $conn->prepare($sql);
        $answer->execute();
        return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
    }

    public function getById($id = null) {
        $conn = $this->getConnection($this->config);
        $sql = 'SELECT rol_id AS id, rol_rol AS rol, rol_created_at AS created_at, '
                . 'rol_updated_at AS updated_at, rol_deleted_at AS deleted_at '
                . 'FROM bdp_rol '
                . 'WHERE rol_deleted_at IS NULL '
                . 'AND rol_id = :id';
        $params = array(
            ':id' => ($id !== null) ? $id : $this->getById()
        );
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
    }

    public function save() {
        $conn = $this->getConnection($this->config);
        $sql = 'INSERT INTO rol '
                . '(rol_id, rol_rol) '
                . 'VALUES (:id, :rol)';
        $params = array(
            ':id' => $this->getId(),
            ':rol' => $this->getRol()
        );
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        $this->setId($conn->lastInsertId());
        return true;
    }

    public function update() {
        $conn = $this->getConnection($this->config);
        $sql = 'UPDATE bdp_rol SET '
                . 'rol_rol = :rol, '
                . 'WHERE rol_id = :id';
        $params = array(
            ':rol' => $this->getRol(),
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
                $sql = 'UPDATE bdp_rol SET rol_deleted_at = now() WHERE rol_id = :id';
                break;
            case false:
                $sql = 'DELETE FROM bdp_rol WHERE rol_id = :id';
                break;
            default:
                throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
        }
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        return true;
    }

}
