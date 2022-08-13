<?php
include_once('C:\xampp\htdocs\fg\inventario_site\v2\confi.php');
class Model extends Database{
    public function __construct()
    {
        parent::__construct();
    }
    public function insert($folio,$status,$description,$departament,$employee)
    {
        try {
            $sql = "INSERT INTO orden (id, folio, estado, descripcion, departamento, trabajador, fecha_i) VALUES (null,:folio, :status, :description, :departament, :employee, NOW())";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':folio', $folio);
            $stmt->bindParam(':status', $status);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':departament', $departament);
            $stmt->bindParam(':employee', $employee);
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
            $sql = "SELECT * FROM orden";
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
            $sql = "DELETE FROM orden WHERE id=$id";
            $this->conn->exec($sql);
            echo "Record deleted successfully";
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        $this->conn = null;
    }
    public function update($id,$folio,$status,$description,$departament,$employee)
    {
        try {
            $sql = "UPDATE orden SET folio=:folio, estado=:status, descripcion=:description, departamento=:departament, trabajador=:employee WHERE id=$id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':folio', $folio);
            $stmt->bindParam(':status', $status);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':departament', $departament);
            $stmt->bindParam(':employee', $employee);
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
            $query = $this->conn->prepare("SELECT * FROM orden WHERE id = $id");
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