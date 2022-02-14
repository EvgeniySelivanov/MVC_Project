<?php
namespace App\Controllers;
use App\Helpers\View;
use App\Models\Category;
class MainController extends Controller{
    public function index()
    {


 //$p=new \App\Helpers\Db();//создали объект класса Db
 //$result= $p->pdo->query('SELECT * FROM categories');//запрос
 //self::dump($result->fetchAll());//получи все данные выборки
        
        $modelCategory=new Category();
        $categories=$modelCategory->find(1);
        self::dump($categories);

        $title='Home Page';
        $products=['p1','p2','p3'];
        /* self::dump($products); */
     View::render('home',compact('title','products'));   
    }
    public function contacts()
    {
        View::render('main/contacts'); 
    }
}