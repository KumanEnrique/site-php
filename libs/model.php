<?php
namespace Libs;

class Model extends Database{
    public function __construct(){
        $this->db = new Database();
    }
}