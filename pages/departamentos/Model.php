<?php
include_once('C:\xampp\htdocs\fg\inventario_site\v2\confi.php');
class Model extends Database{
    public function __construct()
    {
        parent::__construct();
    }
    public function insert($in_charge,$name,$extension)
    {
        try {
            $sql = "INSERT INTO departamentos (id, encargado, nombre, extension) VALUES (null,:in_charge, :name, :extension)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':in_charge', $in_charge);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':extension', $extension);
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
            $sql = "SELECT * FROM departamentos";
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
            $sql = "DELETE FROM departamentos WHERE id=$id";
            $this->conn->exec($sql);
            echo "Record deleted successfully";
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        $this->conn = null;
    }
    public function update($id, $in_charge, $name_, $extension)
    {
        try {
            $sql = "UPDATE departamentos SET encargado=:in_charge, nombre=:name_, extension=:extension WHERE id=$id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':in_charge', $in_charge);
            $stmt->bindParam(':name_', $name_);
            $stmt->bindParam(':extension', $extension);
            $stmt->execute();
            echo " records UPDATED successfully";
            header("Location: http://localhost:8080/fg/inventario_site/v2/pages/departamentos/");
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        $this->conn = null;
    }
    public function where($id)
    {
        try {
            $query = $this->conn->prepare("SELECT * FROM departamentos WHERE id = $id");
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