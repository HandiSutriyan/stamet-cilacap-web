<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\CorcelModel;
use Corcel\Model\Post;
use App\Models\CustomPostModel;

class Search extends BaseController
{
    protected $corcel;
    protected $custom_post;
    public function __construct(){
        $this->corcel = new CorcelModel();
        $this->custom_post = new CustomPostModel();
    }

    public function index()
    {
        $keyword =  $this->request->getVar('keyword');
        $result = $this->custom_post->search($keyword);
        $pager = $this->custom_post->pager;
        $data = ['results'=>array_reverse($result),'keyword'=>$keyword,'pager'=>$pager];
        //dd($data['results']);
        return view('pages/webpages/search-result',$data);
    }
}
