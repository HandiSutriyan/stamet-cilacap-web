<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomPostModel extends Model
{
    protected $table      = 'wp_posts';
    protected $primaryKey = 'ID';
    protected $useTimestamps = false;
    //protected $allowedFields = ['option_name','option_value','autoload']; 
    
    public function search($keyword){
        return $this->select('post_title,post_date,post_excerpt,post_name')->like('post_title',$keyword)->where(['post_status'=>'publish', 'post_type'=>'post'])->paginate(10,'results');
    }
}
