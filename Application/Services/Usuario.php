<?php
namespace services;

class Usuario {
    private $id;
    private $password;
    private $nombre;
    private $apellidos;
    private $rol;
    private $email;
    private $telefono;
    private $estado;
    private $fecha_registro;

    private $estado_hora_registro;

   
    public function __construct($id, $password, $nombre, $apellidos, $rol, $email, $telefono, $estado, $fecha_registro) {
        $this->id = $id;
        $this->password = $password;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->rol = $rol;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->estado = $estado;
        $this->fecha_registro = $fecha_registro;
    }

    public function __toString() {
        return $this->nombre . ' ' . $this->apellidos;
    }

    public function __toArray() {
        return array(
            'id' => $this->id,
            'password' => $this->password,
            'nombre' => $this->nombre,
            'apellidos' => $this->apellidos,
            'rol' => $this->rol,
            'email' => $this->email,
            'telefono' => $this->telefono,
            'estado' => $this->estado,
            'fecha_registro' => $this->fecha_registro
        );
    }
    public static function create($id, $password, $nombre, $apellidos, $rol, $email, $telefono, $estado, $fecha_registro) {
        return new Usuario($id, $password, $nombre, $apellidos, $rol, $email, $telefono, $estado, $fecha_registro);
    }
    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
    }       
    public function getPassword() {
        return $this->password;
    }
    public function setPassword($password) {
        $this->password = $password;
    }
    public function getNombre() {
        return $this->nombre;
    }
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    public function getApellidos() {
        return $this->apellidos;
    }
    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }
    public function getRol() {
        return $this->rol;
    }
    public function setRol($rol) {
        $this->rol = $rol;
    }
    public function getEmail() {
        return $this->email;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    public function getTelefono() {
        return $this->telefono;
    }
    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }
    public function getEstado() {
        return $this->estado;
    }
    public function setEstado($estado) {
        $this->estado = $estado;
    }
    public function getFecha_registro() {
        return $this->fecha_registro;
    }
    public function setFecha_registro($fecha_registro) {
        $this->fecha_registro = $fecha_registro;
    }
    public function getEstado_hora_registro() {
        return $this->estado_hora_registro;
    }
    
}