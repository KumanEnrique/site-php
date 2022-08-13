<?php
namespace Models;

use Libs\Model;

class UsersModel extends Model{
    public function __construct(){
        parent::__construct();
    }
    public function get(){
        try{
            $query = $this->db->conn->query("SELECT * FROM usuarios");
            $results = $query->fetchAll(\PDO::FETCH_ASSOC);
            return $results;
        } catch (\PDOException $e) {
            print_r('error de conexion '.$e->getMessage());
            return [];
        }
    }
    public function getById($id){
        try{
            $query = $this->db->conn->prepare("SELECT * FROM usuarios wHERE id = :id");
            $query->execute(['id' => $id]);
            $row = $query->fetch(\PDO::FETCH_ASSOC);
            return $row;
        } catch (\PDOException $e) {
            print_r('error de conexion '.$e->getMessage());
        }
    }
    public function add($data){
        try{
            $query = $this->db->conn->prepare('INSERT INTO usuarios (nombre,departamento,correo) VALUES (:name,:departament,:email)');
            $query->execute(['name'=>$data['name'],'departament'=>$data['departament'],'email'=>$data['email'] ] );
            return true;
        } catch (\PDOException $e) {
            print_r('error de conexion '.$e->getMessage());
            return false;
        }
    }
    public function delete($id){
        try{
            $query = $this->db->conn->prepare('DELETE FROM usuarios WHERE id = :id');
            $query->execute(['id'=>$id ]);
            return true;
        } catch (\PDOException $e) {
            print_r('error de conexion '.$e->getMessage());
            return false;
        }
    }
    public function update($data){
        try{
            $query = $this->db->conn->prepare('UPDATE usuarios SET nombre = :name,departamento = :departament, correo = :email WHERE id = :id');
            $query->execute(['id'=>$data['id'],'name'=>$data['name'],'departament'=>$data['departament'],'email'=>$data['email'] ]);
            return true;
        } catch (\PDOException $e) {
            print_r('error de conexion '.$e->getMessage());
            return false;
        }
    }
}