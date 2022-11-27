<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\TestModel;
use App\Models\CorcelModel;
use Corcel\Model\Menu;

class Display extends BaseController
{
    protected $testModel;
    protected $corcel;
    public function __construct(){
        $this->testModel = new TestModel();
        $this->corcel = new CorcelModel();
    }

    public function index()
    {
        $be_url = $this->testModel->getBeUrl();
        $post = $this->corcel->getAllPost();
        $menu = Menu::slug('Main')->first();

        $data = ['be_url'=> $be_url,'post'=>$post,'menus'=>$menu];
        return view('display_data', $data);
    }
}
