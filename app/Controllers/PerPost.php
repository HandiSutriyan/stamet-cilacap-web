<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\CorcelModel;
use Corcel\Model\Post;


class PerPost extends BaseController
{
    protected $corcel;
    public function __construct(){
        $this->corcel = new CorcelModel();
    }
    public function index($slug=null)
    {
        $postData = Post::published()->slug($slug)->first(); 
        if($postData){
            $data = ['postdata'=> $postData];
            return view('display_post',$data);
        }else{
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
       
    }
}
