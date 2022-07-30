<?php

namespace clases_pdo;
require_once dirname(__FILE__) . '/../Clases/Conexion.php';

class ApiRegalos
{
    private $codigoRegalo;
    private $descripcion;
    private $categoria;

    public function __construct()
    {
        $this->pdo = new Conexion();
    }

    public function getRegalos($nuCodigoRegalo)
    {
        $pdo = $this->pdo;
        $sql = "SELECT r.id, r.descripcion, c.id AS idcategoria, c.descripcion AS nombrecategoria FROM regalos r 
                INNER JOIN categorias c ON c.id = r.categoria_id
                WHERE (CASE WHEN -1 = :codigoregalo THEN true ELSE r.id = :codigoregalo END)";

        $prepared = $pdo->prepare($sql);
        $prepared->execute(['codigoregalo' => $nuCodigoRegalo]);
        $result = $prepared->fetchAll(\PDO::FETCH_ASSOC);

        return $result;
    }

    public function guardarRegalo(
        $codigoRegalo,
        $descripcion,
        $categoria
    )
    {
        $this->codigoRegalo = $codigoRegalo;
        $this->descripcion = $descripcion;
        $this->categoria = $categoria;

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
        $sql = "INSERT INTO regalos(descripcion, 
                                    categoria_id) 
                                    VALUES(:descripcion,
                                           :categoria)";

        $query = $pdo->prepare($sql);
        $result = $query->execute([
            'descripcion' => $this->descripcion,
            'categoria' => $this->categoria,

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

    public function getClienteByCodigo($nuCodigoCliente)
    {
        $pdo = $this->pdo;
        $sql = "SELECT * FROM cliente WHERE id=:codigocliente";
        $prepared = $pdo->prepare($sql);
        $resultQuery = $prepared->execute(['codigocliente' => $nuCodigoCliente]);
        $result = $prepared->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }

    public function getCategorias()
    {
        $pdo = $this->pdo;
        $sql = "SELECT * FROM categorias";
        $prepared = $pdo->prepare($sql);
        $resultQuery = $prepared->execute();
        $result = $prepared->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }

}