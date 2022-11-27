<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\TestModel;

class Display extends BaseController
{
    protected $testModel;
    public function __construct(){
        $this->testModel = new TestModel();
    }

    public function index()
    {
        $be_url = $this->testModel->getBeUrl();
        $data = ['be_url'=> $be_url];
        return view('display_data', $data);
    }
}
