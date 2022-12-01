<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\CorcelModel;
use Corcel\Model\Page;

class PerPage extends BaseController
{
    protected $corcel;
    public function __construct(){
        $this->corcel = new CorcelModel();
    }
    public function index($slug){
        $page = Page::published()->slug($slug)->first();
        $data = ['page'=>$page];
        if($page){
            return view('pages/webpages/page',$data);
        }else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }
    public function forecast(){
        return view('pages/webpages/detail-forecast');
    }
}
