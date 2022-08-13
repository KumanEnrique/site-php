<?php
namespace Models;
use Libs\Model;

class RequestModel extends Model{
    public function __construct(){
        parent::__construct();
    }
    public function get(){
        try {
            $query = $this->db->conn->query('SELECT * FROM solicitud');
            $results = $query->fetchAll(\PDO::FETCH_ASSOC);
            return $results;
        } catch (\PDOException $e) {
            print('error de conexion '.$e->getMessage());
            return [];
        }
    }
    public function add($data){
        try{
            $query = $this->db->conn->prepare('INSERT INTO solicitud (folio,estado,descripcion,departamento,trabajador,fecha_i,fecha_fin) VALUES (:folio,:state,:description,:departament,:employee,:begin_date,:end_date)');
            $query->execute(['folio'=>$data['folio'],'state'=>$data['state'],'description'=>$data['description'],'departament'=>$data['departament'],'employee'=>$data['employee'],'begin_date'=>$data['begin_date'],'end_date'=>$data['end_date'] ] );
            return true;
        } catch (\PDOException $e) {
            print_r('error de conexion '.$e->getMessage());
            return false;
        }
    }
    public function getByID($id){
        try{
            $query = $this->db->conn->prepare('SELECT * FROM solicitud WHERE id = :id');
            $query->execute(['id' => $id]);
            $row = $query->fetch(\PDO::FETCH_ASSOC);
            return $row;
        } catch (\PDOException $e) {
            print('error de conexion '.$e->getMessage());
        }
    }
    public function update($data){
        try{
            $query = $this->db->conn->prepare('UPDATE solicitud SET folio = :folio, estado = :state,descripcion = :description, departamento = :departament, trabajador = :employee, fecha_i = :begin_date, fecha_fin = :end_date WHERE id = :id');
            $query->execute(['id'=>$data['id'],'folio'=>$data['folio'],'state'=>$data['state'],'description'=>$data['description'],'departament'=>$data['departament'],'employee'=>$data['employee'],'begin_date'=>$data['begin_date'],'end_date'=>$data['end_date'] ]);
            return true;
        } catch (\PDOException $e) {
            print_r('error de conexion '.$e->getMessage());
            return false;
        }
    }
    public function delete($id){
        try{
            $query = $this->db->conn->prepare('DELETE FROM solicitud WHERE id = :id');
            $query->execute(['id' => $id]);
            return true;
        } catch (\PDOException $e) {
            print('error de conexion '.$e->getMessage());
            return false;
        }
    }
}