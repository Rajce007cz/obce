<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Okres;
use App\Models\Obec;

class Main extends BaseController
{
    var $okres;
    var $data;
    var $obec;
    public function __construct(){
        $this->okres= new Okres();
        $this->obec= new Obec();
        $okresy = $this->okres->where("kraj", 141)->findall();
        $this->data["okresy"] = $okresy;
    }
    
    public function index(){
        echo view("indexx", $this->data);
    }
    public function getOkres($id)
    {
        $perPage = $this->request->getVar("per_page") ?? 20;
        $this->data["obec"] = $this->obec
        ->select("obec.nazev, count(*) as pocet")
        ->where("okres", $id)->join('cast_obce', 'obec.kod = cast_obce.obec',"inner")
        ->join('ulice', 'ulice.cast_obce = cast_obce.kod',"inner")
        ->join('adresni_misto', 'adresni_misto.ulice = ulice.kod',"inner")
        ->groupBy("obec.kod")
        ->orderBy("pocet", "desc")
        ->paginate(20);
        $this->data["pager"] = $this->obec->pager;
        $this->data["per_page"] = $perPage;

        echo view("nejakyOkres", $this->data);
    }
    
}