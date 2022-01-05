<?php

namespace App\Controllers;

// use App\Models\BlogModel;
use App\Models\CustomModel;

class Blog extends BaseController
{
    
    
    public function index()
    {
        $db = db_connect();
        $postModel = new CustomModel($db);
       
        echo '<pre>'; 
        var_dump($postModel->whereOr());
        echo '</pre>';
        // return view('blog/index', $data);
    }

    public function posts(){
         $data = array(
            'page_title' => "Blip News - Your forever update joint",
            'post' => array('Title 1', 'Title 2', 'Title 3')
        );
        return view('blog/blog', $data);
    }

    public function post(){
       echo "<h2>This is single post</h2>";
        //return view('shop', $data);
    }
}