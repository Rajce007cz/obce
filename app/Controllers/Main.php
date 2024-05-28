<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Okres;

class Main extends BaseController
{
    var $okres;
    public function __construct(){
        $this->okres= new Okres();
        $okresy = $this->okres->where("kraj", 141)->findall();
        $this->data["okresy"] = $okresy;
    }
    
    public function index(){   
        echo view("indexx");
    }
    public function getOkres($id)
    {
        $this->data["okres"] = $this->okres->find($id);
        echo view("nejakyOkres", $data);
    }
    
}