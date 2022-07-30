<?php

namespace clases_pdo;
require_once dirname(__FILE__) . '/../Clases/Conexion.php';

class ApiListaRegalos
{
    private $codigoRegalo;
    private $descripcion;
    private $codigoInvitado;

    public function __construct()
    {
        $this->pdo = new Conexion();
    }

    public function getListaRegalos($nuCodigoInvitado = -1)
    {
        $pdo = $this->pdo;
        $sql = "SELECT r.id, r.descripcion, c.id AS idcategoria, c.descripcion AS nombrecategoria FROM regalos r 
                INNER JOIN categorias c ON c.id = r.categoria_id
                LEFT JOIN regaloxinvitados ri ON ri.regalo_id = r.id 
                WHERE ri.id IS null";

        $prepared = $pdo->prepare($sql);
        $prepared->execute(['codigoinvitado' => $nuCodigoInvitado]);
        $result = $prepared->fetchAll(\PDO::FETCH_ASSOC);

        return $result;
    }

    public function getListaRegalosInvitado($nuCodigoInvitado = -1)
    {
        $pdo = $this->pdo;
        $sql = "SELECT r.id, r.descripcion, c.id AS idcategoria, c.descripcion AS nombrecategoria FROM regalos r 
                INNER JOIN categorias c ON c.id = r.categoria_id
                INNER JOIN regaloxinvitados ri ON ri.regalo_id = r.id 
                WHERE ri.invitado_id = :codigoinvitado";

        $prepared = $pdo->prepare($sql);
        $prepared->execute(['codigoinvitado' => $nuCodigoInvitado]);
        $result = $prepared->fetchAll(\PDO::FETCH_ASSOC);

        return $result;
    }

    public function guardarRegalo(
        $codigoRegalo,
        $descripcion
    )
    {
        $this->codigoRegalo = $codigoRegalo;
        $this->descripcion = $descripcion;

        if (strlen($codigoRegalo) == "") {
            $result = $this->insertarRegalo();

        } else {
            $result = $this->actualizarRegalo();

        }

        return $result;
    }

    private function insertarRegalo()
    {
        $pdo = $this->pdo;
        $sql = "INSERT INTO regalos(descripcion) 
                                    VALUES(:descripcion)";

        $query = $pdo->prepare($sql);
        $result = $query->execute([
            'descripcion' => $this->descripcion
        ]);

        $nuId = $pdo->lastInsertId();
        return array('id' => $nuId, 'validacion' => $result);
    }

    private function actualizarRegalo()
    {
        $pdo = $this->pdo;
        $sql = "UPDATE regalos set descripcion = :descripcion WHERE id = :id";

        $query = $pdo->prepare($sql);
        $result = $query->execute([
            'descripcion' => $this->descripcion,
            'id' => $this->codigoRegalo
        ]);

        $nuId = $pdo->lastInsertId();
        return array('id' => $nuId, 'validacion' => $result);
    }

    public function guardarRegalosInvitado(
        $codigoRegalo,
        $codigoInvitado
    )
    {
        $this->codigoRegalo = $codigoRegalo;
        $this->codigoInvitado = $codigoInvitado;

        $result = $this->insertarRegalosInvitado();


        return $result;
    }

    private function insertarRegalosInvitado()
    {
        $pdo = $this->pdo;
        $sql = "INSERT INTO regaloxinvitados(invitado_id, regalo_id) 
                                    VALUES(:invitadoid, :regaloid )";

        $query = $pdo->prepare($sql);
        $result = $query->execute([
            'invitadoid' => $this->codigoInvitado,
            'regaloid' => $this->codigoRegalo
        ]);

        $nuId = $pdo->lastInsertId();
        return array('id' => $nuId, 'validacion' => $result);
    }

    public function getClienteByCodigo($nuCodigoCliente)
    {
        $pdo = $this->pdo;
        $sql = "SELECT * FROM cliente WHERE id=:codigocliente";
        $prepared = $pdo->prepare($sql);
        $resultQuery = $prepared->execute(['codigocliente' => $nuCodigoCliente]);
        $result = $prepared->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }

    public function consultarRegalosInvitado($codigosRegalo)
    {
        $pdo = $this->pdo;
        $sql = "SELECT * FROM `regaloxinvitados` WHERE regalo_id IN(:codigosRegalo)";
        $prepared = $pdo->prepare($sql);
        $resultQuery = $prepared->execute(['codigosRegalo' => $codigosRegalo]);
        $result = $prepared->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }

}