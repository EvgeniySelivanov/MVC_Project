<?php
namespace App\Models;
class Category extends Model{

public function all(){
   // $p=new \App\Helpers\Db();//создали объект класса Db

    $result= $this->db->pdo->query('SELECT * FROM categories');//запрос
    return $result->fetchAll();//получи все данные выборки
}

public function find($id){
   // $p=new \App\Helpers\Db();//создали объект класса Db
    $result= $this->db->pdo->query('SELECT * FROM categories WHERE id='.$id);//запрос
    return $result->fetchAll();//получи все данные выборки
}


}