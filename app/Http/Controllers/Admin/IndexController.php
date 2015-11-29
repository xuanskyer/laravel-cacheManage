<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\CommonController;

class IndexController extends CommonController
{
    public function index(){
        var_dump('perfect!');
        return view('welcome');
    }
}
