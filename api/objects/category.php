<?php
class Category {

    private $conn;
    private string $table_name;

    private $category_id;
    private $category_name;

    public function __construct($db) {
        $this->conn = $db;
        $this->table_name = "mm_category";
    }

    function getCategories(){
        $sQuery = "SELECT * FROM " . $this->table_name;
        $oStmt = $this->conn->prepare($sQuery);
        $oStmt->execute();
        return $oStmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function getCategoryById($id){
        $sQuery = "SELECT * FROM " . $this->table_name . " WHERE category_id = " . $id;
        $oStmt = $this->conn->prepare($sQuery);
        $oStmt->execute();
        return $oStmt->fetchAll(PDO::FETCH_ASSOC);
    }
}