<?php

namespace App\Models;

use CodeIgniter\Model;

class CorcelModel extends Model
{
    public function __construct(){
        $params = [
            'database'  => 'stametcilacap',
            'username'  => 'stametcilacap',
            'password'  => 'stametcilacap',
            'prefix'    => 'wp_' // default prefix is 'wp_', you can change to your own prefix
        ];
        \Corcel\Database::connect($params);
    }

    public function getAllPost($category=null){
        if($category != null){
            return \Corcel\Model\Post::taxonomy('category', $category)->published()->type('post')->take(3)->get();
        }else {
            return \Corcel\Model\Post::published()->type('post')->take(4)->get();
        }
    }

    public function getPerdin(){
        return \Corcel\Model\Post::taxonomy('category', 'perdin')->published()->type('post')->newest()->first();
    }

    public function getPost($slug){
        return \Corcel\Model\Post::published()->slug($slug)->first();
    }

    public function getMenu(){
        return \Corcel\Model\Menu::slug('Main')->first();
    }

    public function search($keyword){
        
    }
}

