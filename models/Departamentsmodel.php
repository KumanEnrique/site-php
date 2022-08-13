<?php
namespace Models;

use Libs\Model;

class DepartamentsModel extends Model{
    public function __construct(){
        parent::__construct();
    }
    public function get(){
        try{
            $query = $this->db->conn->query("SELECT * FROM departamentos");
            $query->execute();
            $results = $query->fetchAll(\PDO::FETCH_ASSOC);
            $items = $results;
            return $items;
        } catch (\PDOException $e) {
            print_r('error de conexion '.$e->getMessage());
            return [];
        }
    }
    public function getByID($id){
        try {
            $query = $this->db->conn->prepare("SELECT * FROM departamentos WHERE id = :id");
            $query->execute(['id' => $id]);
            $row = $query->fetch(\PDO::FETCH_ASSOC);
            return $row;
        } catch (\PDOException $e) {
            print('error de conexion '.$e->getMessage());
        }
    }
    public function add($data){
        try{
            $query = $this->db->conn->prepare('INSERT INTO departamentos (encargado,nombre,extension) VALUES (:in_charge,:name,:extension)');
            $query->execute(['in_charge'=>$data['in_charge'],'name'=>$data['name'],'extension'=>$data['extension'] ] );
            return true;
        } catch (\PDOException $e) {
            print_r('error de conexion '.$e->getMessage());
            return false;
        }
    }
    public function delete($id){
        try{
            $query = $this->db->conn->prepare('DELETE FROM departamentos WHERE id = :id');
            $query->execute(['id'=>$id ]);
            return true;
        } catch (\PDOException $e) {
            print_r('error de conexion '.$e->getMessage());
            return false;
        }
    }
    public function update($data){
        try{
            $query = $this->db->conn->prepare('UPDATE departamentos SET encargado = :in_charge,nombre = :name, extension = :extension WHERE id = :id');
            $query->execute(['id'=>$data['id'],'in_charge'=>$data['in_charge'],'name'=>$data['name'],'extension'=>$data['extension'] ]);
            return true;
        } catch (\PDOException $e) {
            print_r('error de conexion '.$e->getMessage());
            return false;
        }
    }
}