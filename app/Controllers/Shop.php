<?php

namespace App\Controllers;


class Shop extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function product($type, $id){
       echo "<h2>This is product shop: $type with id: $id </h2>";
        //return view('shop', $data);
    }
}
