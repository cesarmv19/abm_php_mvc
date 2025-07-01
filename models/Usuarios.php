<?php

class Usuario{
    private $id;
    private $nombre;
    private $email;

    public function __construct($id = null, $nombre, $email){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->email = $email;
    }

    public static function listar(){
        $conn = Database::connect();
        $stmt = $conn->prepare("SELECT * FROM usuarios");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function guardar(){
        $conn = Database::connect();
        if ($this->id) {
            $stmt = $conn->prepare("Update usuarios SET nombre = ?, email = ? where id = ?");
            return $stmt->execute([$this->nombre, $this->email, $this->id]);
        }else{
            $stmt = $conn->prepare("insert into usuarios (nombre, email) values(?, ?)");
            return $stmt->execute([$this->nombre, $this->email]);
        }
    }

    public static function obtenerId($id){
        $conn = Database::connect();
        $stmt = $conn->prepare("SELECT * FROM usuarios where id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function eliminar($id){
        $conn = Database::connect();
        $stmt = $conn->prepare("delete from usuarios where id= ?");
            return $stmt->execute([$id]);
    }
}



?>