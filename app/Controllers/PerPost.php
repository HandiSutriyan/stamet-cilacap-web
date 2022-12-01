<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\CorcelModel;
use Corcel\Model\Post;
use Corcel\Model\User;


class PerPost extends BaseController
{
    protected $corcel;
    public function __construct(){
        $this->corcel = new CorcelModel();
    }
    public function index($slug=null)
    {
        $postData = Post::published()->slug($slug)->first(); 
        $postFeed = $this->corcel->getAllPost('berita');
        $artikelFeed = $this->corcel->getAllPost('artikel');
        $author = User::find($postData->post_author);
        //dd($postData->updated_at->date);
        if($postData){
            $data = ['postdata'=> $postData,'post_author'=>$author,'postFeed'=>$postFeed, 'artikelFeed'=>$artikelFeed];
            return view('pages/posts/post',$data);
        }else{
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
       
    }
}
