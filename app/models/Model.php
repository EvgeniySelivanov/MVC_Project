<?php
namespace App\Models;
use App\Helpers\Db;

class Model
{
protected $db;

public function __construct()
{
    $this->db=new Db();
}


}