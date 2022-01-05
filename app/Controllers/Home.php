<?php

namespace App\Controllers;

use App\Controllers\admin\Shop as adminShop;
class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    function validation(){

        $shop = new Shop();
        $shop->product('pc', 'hp');

        // admin method
        $adminShop = new adminShop();
        $adminShop->product('pc', 'lenovo');
    }
}
