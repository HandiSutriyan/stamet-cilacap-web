<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\TestModel;

class Display extends BaseController
{
    protected $testModel;
    protected $db;
    public function __construct(){
        $this->testModel = new TestModel();
        $params = [
            'database'  => 'stametcilacap',
            'username'  => 'stametcilacap',
            'password'  => 'stametcilacap',
            'prefix'    => 'wp_' // default prefix is 'wp_', you can change to your own prefix
        ];
        \Corcel\Database::connect($params);
    }

    public function index()
    {
        $be_url = $this->testModel->getBeUrl();
        $post = \Corcel\Model\Post::status('publish')->type('post')->get();
        $data = ['be_url'=> $be_url,'post'=>$post];
        return view('display_data', $data);
    }
}
