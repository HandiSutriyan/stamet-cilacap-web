<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Error extends BaseController
{
    public function index()
    {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }
}
