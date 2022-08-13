<?php
namespace Models;
use Libs\Model;

class EmployeesModel extends Model{
    public function __construct(){
        parent::__construct();
    }
    public function get(){
        try {
            $query = $this->db->conn->query('SELECT * FROM trabajadores');
            $results = $query->fetchAll(\PDO::FETCH_ASSOC);
            return $results;
        } catch (\PDOException $e) {
            print('error de conexion '.$e->getMessage());
            return [];
        }
    }
    public function add($data){
        try{
            $query = $this->db->conn->prepare('INSERT INTO trabajadores (nombre,numero_control,fecha_i) VALUES (:name,:control_number,:begin_date)');
            $query->execute(['name'=>$data['name'],'control_number'=>$data['control_number'],'begin_date'=>$data['begin_date'] ] );
            return true;
        } catch (\PDOException $e) {
            print_r('error de conexion '.$e->getMessage());
            return false;
        }
    }
    public function getByID($id){
        try{
            $query = $this->db->conn->prepare('SELECT * FROM trabajadores WHERE id = :id');
            $query->execute(['id' => $id]);
            $row = $query->fetch(\PDO::FETCH_ASSOC);
            return $row;
        } catch (\PDOException $e) {
            print('error de conexion '.$e->getMessage());
        }
    }
    public function update($data){
        try{
            $query = $this->db->conn->prepare('UPDATE trabajadores SET nombre = :name, numero_control = :control_number, fecha_i = :begin_date, fecha_fin = :end_date WHERE id = :id');
            $query->execute(['id'=>$data['id'],'name'=>$data['name'],'control_number'=>$data['control_number'],'begin_date'=>$data['begin_date'],'end_date'=>$data['end_date'] ]);
            return true;
        } catch (\PDOException $e) {
            print_r('error de conexion '.$e->getMessage());
            return false;
        }
    }
    public function delete($id){
        try{
            $query = $this->db->conn->prepare('DELETE FROM trabajadores WHERE id = :id');
            $query->execute(['id' => $id]);
            return true;
        } catch (\PDOException $e) {
            print('error de conexion '.$e->getMessage());
            return false;
        }
    }
}