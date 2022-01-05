<?php
 namespace App\Libraries;

class Blog{
    public function postItem($params){
        return view('component/post-item', $params);
    }
}

