<?php
namespace services;

class UsuarioDAO {
    private $conexion;

    public function __construct(Conexion $conexion) {
        $this->conexion = $conexion->getConexion();
    }

    public function create(Usuario $usuario) {
        $sql = "INSERT INTO usuario (password, nombre, apellidos, rol, email, telefono, estado, fecha_registro) 
                VALUES (:password, :nombre, :apellidos, :rol, :email, :telefono, :estado, NOW())";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bindValue(':password', password_hash($usuario->getPassword(), PASSWORD_DEFAULT));
        $stmt->bindValue(':nombre', $usuario->getNombre());
        $stmt->bindValue(':apellidos', $usuario->getApellidos());
        $stmt->bindValue(':rol', $usuario->getRol());
        $stmt->bindValue(':email', $usuario->getEmail());
        $stmt->bindValue(':telefono', $usuario->getTelefono());
        $stmt->bindValue(':estado', $usuario->getEstado());
        return $stmt->execute();
    }

    public function readAll() {
        $sql = "SELECT * FROM usuario";
        $stmt = $this->conexion->query($sql);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function update(Usuario $usuario) {
        $sql = "UPDATE usuario SET nombre = :nombre, apellidos = :apellidos, rol = :rol, email = :email, telefono = :telefono, estado = :estado 
                WHERE id = :id";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bindValue(':nombre', $usuario->getNombre());
        $stmt->bindValue(':apellidos', $usuario->getApellidos());
        $stmt->bindValue(':rol', $usuario->getRol());
        $stmt->bindValue(':email', $usuario->getEmail());
        $stmt->bindValue(':telefono', $usuario->getTelefono());
        $stmt->bindValue(':estado', $usuario->getEstado());
        $stmt->bindValue(':id', $usuario->getId());
        return $stmt->execute();
    }

    public function delete($id) {
        $sql = "DELETE FROM usuario WHERE id = :id";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bindValue(':id', $id);
        return $stmt->execute();
    }

    public function findByEmail($email) {
        $sql = "SELECT * FROM usuario WHERE email = :email";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bindValue(':email', $email);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
}