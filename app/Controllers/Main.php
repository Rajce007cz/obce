<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Okres;

class Main extends BaseController
{
    var $okres;
    var $data;
    public function __construct(){
        $this->okres= new Okres();
        $okresy = $this->okres->where("kraj", 141)->findall();
        $this->data["okresy"] = $okresy;
    }
    
    public function index(){
        echo view("indexx", $this->data);
    }
    public function getOkres($id)
    {
        $data["okres"] = $this->okres->join('obec', 'obec.okres = "okres.kod',"inner")->find($id);

        echo view("nejakyOkres", $this->data);
    }
    
}