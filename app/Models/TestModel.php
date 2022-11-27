<?php

namespace App\Models;

use CodeIgniter\Model;

class TestModel extends Model
{
    protected $table      = 'wp_options';
    protected $primaryKey = 'option_id';
    protected $useTimestamps = false;
    protected $allowedFields = ['option_name','option_value','autoload']; 
    
    public function getBeUrl(){
        return $this->where('option_name','home')->first();
    }
}
