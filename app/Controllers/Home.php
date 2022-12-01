<?php

namespace App\Controllers;

use App\Models\CorcelModel;
use Corcel\Model\Post;
use Corcel\Model\Menu;

class Home extends BaseController
{
    protected $corcel;
    public function __construct(){
        $this->corcel = new CorcelModel();
    }

    public function index()
    {
        $post = $this->corcel->getAllPost('berita');
        $artikel = $this->corcel->getAllPost('artikel');
        $featured = $post;
        //dd($featured);
        $perdin = $this->corcel->getPerdin();
        $menu = Menu::slug('Main')->first();
        $data = [
            'post'=>$post,
            'artikel'=>$artikel->reverse(),
            'featured' => $featured,
            'perdin'=>$perdin,
            'menus'=>$menu,
        ];
        return view('pages/home', $data);
    }
}
