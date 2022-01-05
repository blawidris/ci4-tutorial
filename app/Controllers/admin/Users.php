<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index($id)
    {
        echo '<h3>Single user page with id '.$id.'</h3>';
        //return view('welcome_message');
    }

    public function users(){
       echo "<h2>List of users page</h2>";
        //return view('shop', $data);
    }

    public function addUser(){
        return view('admin/user');
    }
    public function addUsers(){
        echo '<pre> '. print_r($_POST) .'</pre>';
    }
}
