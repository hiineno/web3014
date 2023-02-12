<?php
namespace App\Models;
use PDO;
use PDOException;
class BaseModel {
    protected $conn;
    protected $sqlBuilder;
    public function __construct(){
        try{
            $this->conn = new PDO("mysql:host=localhost; dbname=qlhang; charset=utf8", "root", "");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        }catch(PDOException $e){
        }
       echo $e->getMessage();
    }
    public static function getThree(){
        $model = new static;
        $model->sqlBuilder .= "SELECT * FROM " . $model->tableName ." LIMIT 3";
        $stmt = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        if($result){
            return $result;
           
        }
        else return false;

      
    }
    public static function getOne(){
        $model = new static;
        $model->sqlBuilder .= "SELECT * FROM " . $model->tableName ." LIMIT 1";
        $stmt = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        if($result){
            return $result;
           
        }
        else return false;

      
    }
    public static function getAll(){
        $model = new static;
        $model->sqlBuilder .= "SELECT * FROM " . $model->tableName;
        $stmt = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        if($result){
            return $result;
           
        }
        else return false;

      
    }
}
?>