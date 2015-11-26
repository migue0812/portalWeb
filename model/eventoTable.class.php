<?php

use FStudio\model\base\eventoBaseTable;

class eventoTable extends eventoBaseTable {

    public function getAll() {
        $conn = $this->getConnection($this->config);
        $sql = 'SELECT eve_id AS id, usu_id AS usuario_id, cat_id AS categoria_id, '
                . 'eve_nombre AS nombre, eve_fecha_hora AS fecha_hora, '
                . 'eve_direccion AS direccion, eve_nombre_contacto AS nombre_contacto, '
                . 'eve_correo_contacto AS correo_contacto, eve_telefono_contacto AS '
                . 'telefono_contacto, eve_valor_boleta AS valor_boleta, eve_latitud AS '
                . 'latitud, eve_longitud AS longitud, fecha_inicio_publicacion AS '
                . 'fecha_inicio_publicacion, fecha_fin_publicacion AS fecha_fin_publicacion, '
                . 'est_id AS estado_id, eve_created_at AS created_at, eve_updated_at AS '
                . 'updated_at, eve_deleted_at AS deleted_at '
                . 'FROM bdp_evento '
                . 'WHERE eve_deleted_at IS NULL '
                . 'ORDER BY eve_created_at ASC';
        $answer = $conn->prepare($sql);
        $answer->execute();
        return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
    }

    public function getById($id) {
        $conn = $this->getConnection($this->config);
        $sql = 'SELECT eve_id AS id, usu_id AS usuario_id, cat_id AS categoria_id, '
                . 'eve_nombre AS nombre, eve_fecha_hora AS fecha_hora, '
                . 'eve_direccion AS direccion, eve_nombre_contacto AS nombre_contacto, '
                . 'eve_correo_contacto AS correo_contacto, eve_telefono_contacto AS '
                . 'telefono_contacto, eve_valor_boleta AS valor_boleta, eve_latitud AS '
                . 'latitud, eve_longitud AS longitud, fecha_inicio_publicacion AS '
                . 'fecha_inicio_publicacion, fecha_fin_publicacion AS fecha_fin_publicacion, '
                . 'est_id AS estado_id, eve_created_at AS created_at, eve_updated_at AS '
                . 'updated_at, eve_deleted_at AS deleted_at '
                . 'FROM bdp_evento '
                . 'WHERE eve_deleted_at IS NULL '
                . 'AND eve_id = :id';
        $params = array(
            ':id' => $id
        );
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
    }

    public function save() {
        $conn = $this->getConnection($this->config);
        $sql = 'INSERT INTO evento (eve_id, usu_id, cat_id, eve_nombre, eve_fecha_hora, '
                . 'eve_direccion, eve_nombre_contacto, eve_correo_contacto, eve_telefono_contacto, '
                . 'eve_valor_boleta, eve_latitud eve_longitud, fecha_inicio_publicacion, '
                . 'fecha_fin_publicacion, est_id) '
                . 'VALUES (:id, :usuario_id, :categoria_id, :nombre, :fecha_hora, '
                . ':direccion, :nombre_contacto, :correo_contacto, :telefono_contacto, '
                . ':valor_boleta, :latitud, :longitud, :fecha_inicio_publicacion, '
                . ':fecha_fin_publicacion, :estado_id)';
        $params = array(
            ':id' => $this->getId(),
            ':usuario_id' => $this->getUsuarioId(),
            ':categoria_id' => $this->getCategoriaId(),
            ':nombre' => $this->getNombre(),
            ':fecha_hora' => $this->getFechaHora(),
            ':direccion' => $this->getDireccion(),
            ':nombre_contacto' => $this->getNombreContacto(),
            ':correo_contacto' => $this->getCorreoContacto(),
            ':telefono_contacto' => $this->getTelefonoContacto(),
            ':valor_boleta' => $this->getValorBoleta(),
            ':latitud' => $this->getLatitud(),
            ':longitud' => $this->getLongitud(),
            ':fecha_inicio_publicacion' => $this->getFechaInicioPublicacion(),
            ':fecha_fin_publicacion' => $this->getFechaFinPublicacion(),
            ':estado_id' => $this->getEstadoId(),
        );
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        return $conn->lastInsertId();
    }

    public function update() {
        $conn = $this->getConnection($this->config);
        $sql = 'UPDATE bdp_evento SET '
                . 'eve_id = :id, '
                . 'usu_id = :usuario_id, '
                . 'cat_id = :categoria_id, '
                . 'eve_nombre = :nombre, '
                . 'eve_fecha_hora = :fecha_hora, '
                . 'eve_direccion = :direccion, '
                . 'eve_nombre_contacto = :nombre_contacto '
                . 'eve_correo_contacto = :correo_contacto '
                . 'eve_telefono_contacto = :telefono_contacto '
                . 'eve_valor_boleta = :valor_boleta '
                . 'eve_latitud = :latitud '
                . 'eve_longitud = :longitud '
                . 'fecha_inicio_publicacion = :fecha_inicio_publicacion '
                . 'fecha_fin_publicacion = :fecha_fin_publicacion '
                . 'est_id = :estado_id '
                . 'WHERE eve_id = :id';
        $params = array(
            ':id' => $this->getId(),
            ':usuario_id' => $this->getUsuarioId(),
            ':categoria_id' => $this->getCategoriaId(),
            ':nombre' => $this->getNombre(),
            ':fecha_hora' => $this->getFechaHora(),
            ':direccion' => $this->getDireccion(),
            ':nombre_contacto' => $this->getNombreContacto(),
            ':correo_contacto' => $this->getCorreoContacto(),
            ':telefono_contacto' => $this->getTelefonoContacto(),
            ':valor_boleta' => $this->getValorBoleta(),
            ':latitud' => $this->getLatitud(),
            ':longitud' => $this->getLongitud(),
            ':fecha_inicio_publicacion' => $this->getFechaInicioPublicacion(),
            ':fecha_fin_publicacion' => $this->getFechaFinPublicacion(),
            ':estado_id' => $this->getEstadoId(),
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
                $sql = 'UPDATE bdp_evento SET eve_deleted_at = now() WHERE eve_id = :id';
                break;
            case false:
                $sql = 'DELETE FROM bdp_evento WHERE eve_id = :id';
                break;
            default:
                throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
        }
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        return true;
    }

}
