<?php
include_once('C:\xampp\htdocs\fg\inventario_site\v2\confi.php');
class Model extends Database{
    public function __construct()
    {
        parent::__construct();
    }
    public function insert($name,$control_number,$end_date)
    {
        try {
            $sql = "INSERT INTO trabajadores (id, nombre, numero_control, fecha_i, fecha_fin) VALUES (null,:name, :control_number, NOW(), :end_date)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':control_number', $control_number);
            $stmt->bindParam(':end_date', $end_date);
            $stmt->execute();
            echo "New record created successfully";
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        $this->conn = null;
    }
    public function select()
    {
        try {
            $sql = "SELECT * FROM trabajadores";
            $datos = $this->conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
            return $datos;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $this->conn = null;
    }
    public function delete($id)
    {
        try {
            $sql = "DELETE FROM trabajadores WHERE id=$id";
            $this->conn->exec($sql);
            echo "Record deleted successfully";
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        $this->conn = null;
    }
    public function update($id,$name,$control_number,$end_date)
    {
        try {
            $sql = "UPDATE trabajadores SET nombre=:name, numero_control=:control_number, fecha_fin=:end_date WHERE id=$id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':control_number', $control_number);
            $stmt->bindParam(':end_date', $end_date);
            $stmt->execute();
            echo " records UPDATED successfully";
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        $this->conn = null;
    }
    public function where($id)
    {
        try {
            $query = $this->conn->prepare("SELECT * FROM trabajadores WHERE id = $id");
            $query->execute();
            // $results = $query -> fetchAll(PDO::FETCH_OBJ);
            $results = $query->fetchAll(PDO::FETCH_ASSOC);
            // if($query -> rowCount() > 0){}
            $row = $results[0];
            return $row;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}