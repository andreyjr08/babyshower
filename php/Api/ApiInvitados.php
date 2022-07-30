<?php

namespace clases_pdo;
require_once dirname(__FILE__) . '/../Clases/Conexion.php';

class ApiInvitados
{
    private $nuIdInvitado;
    private $sbNombres;
    private $sbApellidos;
    private $sbCodigoUnico;
    private $sbUrl;

    public function __construct()
    {
        $this->pdo = new Conexion();
    }

    public function getInvitados($nuCodigoInvitado)
    {
        $pdo = $this->pdo;
        $sql = "SELECT * FROM invitados 
                WHERE (CASE WHEN -1 = :codigoinvitado THEN true ELSE id = :codigoinvitado END)";

        $prepared = $pdo->prepare($sql);
        $prepared->execute(['codigoinvitado' => $nuCodigoInvitado]);
        $result = $prepared->fetchAll(\PDO::FETCH_ASSOC);

        return $result;
    }
    public function getInvitadoByCodigoUnico($sbCodigoUnico)
    {
        $pdo = $this->pdo;
        $sql = "SELECT * FROM invitados 
                WHERE codigounico = :codigounico";

        $prepared = $pdo->prepare($sql);
        $prepared->execute(['codigounico' => $sbCodigoUnico]);
        $result = $prepared->fetchAll(\PDO::FETCH_ASSOC);

        return $result;
    }

    public function guardarInvitados(
        $nuIdInvitado,
        $sbNombres,
        $sbApellidos,
        $sbCodigoUnico,
        $sbUrl
    )
    {
        $this->nuIdInvitado = $nuIdInvitado;
        $this->sbNombres = $sbNombres;
        $this->sbApellidos = $sbApellidos;
        $this->sbCodigoUnico = $sbCodigoUnico;
        $this->sbUrl = $sbUrl;

        if (strlen($nuIdInvitado) == "") {
            $result = $this->insertarInvitados();

        } else {
            $result = $this->actualizarInvitados();

        }
        
        return $result;
    }

    private function insertarInvitados()
    {
        $pdo = $this->pdo;
        $sql = "INSERT INTO invitados(
                      nombres,
                      apellidos, 
                      codigounico, 
                      link) 
                      VALUES(
                             :nombres,
                             :apellidos,
                             :codigounico,
                             :link)";

        $query = $pdo->prepare($sql);
        $result = $query->execute([
            'nombres' => $this->sbNombres,
            'apellidos' => $this->sbApellidos,
            'codigounico' => $this->sbCodigoUnico,
            'link' => $this->sbUrl
        ]);

        $nuId = $pdo->lastInsertId();
        return array('id' => $nuId, 'validacion' => $result);
    }

    private function actualizarInvitados()
    {
        $pdo = $this->pdo;
        $sql = "UPDATE invitados 
                    SET nombres = :nombres,
                    apellidos = :apellidos
                    WHERE id = :id";

        $query = $pdo->prepare($sql);
        $result = $query->execute([
            'nombres' => $this->sbNombres,
            'apellidos' => $this->sbApellidos,
            'id' => $this->nuIdInvitado,
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

}