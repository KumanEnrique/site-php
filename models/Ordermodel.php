<?php
namespace Models;
use Libs\Model;
class OrderModel extends Model{
    public function __construct(){
        parent::__construct();
    }
    public function get(){
        try {
            $query = $this->db->conn->query('SELECT * FROM orden');
            $results = $query->fetchAll(\PDO::FETCH_ASSOC);
            return $results;
        } catch (\PDOException $e) {
            print('error de conexion '.$e->getMessage());
            return [];
        }
    }
    public function add($data){
        try{
            $query = $this->db->conn->prepare('INSERT INTO orden (folio,estado,descripcion,departamento,trabajador,fecha_i) VALUES (:folio,:state,:description,:departament,:employee,:begin_date)');
            $query->execute(['folio'=>$data['folio'],'state'=>$data['state'],'description'=>$data['description'],'departament'=>$data['departament'],'employee'=>$data['employee'],'begin_date'=>$data['begin_date'] ] );
            return true;
        } catch (\PDOException $e) {
            print_r('error de conexion '.$e->getMessage());
            return false;
        }
    }
    public function getByID($id){
        try{
            $query = $this->db->conn->prepare('SELECT * FROM orden WHERE id = :id');
            $query->execute(['id' => $id]);
            $row = $query->fetch(\PDO::FETCH_ASSOC);
            return $row;
        } catch (\PDOException $e) {
            print('error de conexion '.$e->getMessage());
        }
    }
    public function update($data){
        try{
            $query = $this->db->conn->prepare('UPDATE orden SET folio = :folio, estado = :state,descripcion = :description, departamento = :departament, trabajador = :employee, fecha_i = :begin_date WHERE id = :id');
            $query->execute(['id'=>$data['id'],'folio'=>$data['folio'],'state'=>$data['state'],'description'=>$data['description'],'departament'=>$data['departament'],'employee'=>$data['employee'],'begin_date'=>$data['begin_date'] ]);
            return true;
        } catch (\PDOException $e) {
            print_r('error de conexion '.$e->getMessage());
            return false;
        }
    }
    public function delete($id){
        try{
            $query = $this->db->conn->prepare('DELETE FROM orden WHERE id = :id');
            $query->execute(['id' => $id]);
            return true;
        } catch (\PDOException $e) {
            print('error de conexion '.$e->getMessage());
            return false;
        }
    }
}