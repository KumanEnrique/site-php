<?php
include_once('C:\xampp\htdocs\fg\inventario_site\v2\confi.php');
class Model extends Database{
    public function __construct()
    {
        parent::__construct();
    }
    public function insert($name,$departament,$email)
    {
        try {
            $sql = "INSERT INTO usuarios (id, nombre, departamento, correo) VALUES (null,:name, :departament, :email)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':departament', $departament);
            $stmt->bindParam(':email', $email);
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
            $sql = "SELECT * FROM usuarios";
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
            $sql = "DELETE FROM usuarios WHERE id=$id";
            $this->conn->exec($sql);
            echo "Record deleted successfully";
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        $this->conn = null;
    }
    public function update($id,$name,$departament,$email)
    {
        try {
            $sql = "UPDATE usuarios SET nombre=:name, departamento=:departament, correo=:email WHERE id=$id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':departament', $departament);
            $stmt->bindParam(':email', $email);
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
            $query = $this->conn->prepare("SELECT * FROM usuarios WHERE id = $id");
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