<?php
    class Category{
//DB Stuff
private $conn;
private $table = 'categories';

//Properties
public $id;
public $name;
public $created_at;

//Constuctor with DB
public function __construct($db){
    $this->conn = $db;
}

//Get catgories
public function read(){
    //create query
    $query = "SELECT 
    id,
    name,
    created_at
    FROM " . $this->table. "
    ORDER BY
    created_at DESC";

    //Prepare Statement
    $stmt = $this->conn->prepare($query);

    //Execute query
    $stmt->execute();

    return $stmt;
}
    }
?>