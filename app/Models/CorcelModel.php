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

    public function getAllPost(){
        return \Corcel\Model\Post::published()->type('post')->get();
    }

    public function getPost($slug){
        return \Corcel\Model\Post::published()->slug($slug)->first();
    }

    public function getMenu(){
        return \Corcel\Model\Menu::slug('Main')->first();
    }
}
