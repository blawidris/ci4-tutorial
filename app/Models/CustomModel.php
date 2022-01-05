<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;

class CustomModel{
    protected $db;
    protected $connect_table;
    
    public function __construct(ConnectionInterface &$db){
        $this->db = &$db;
        $this->connect_table = $this->db->table('blog');
    }
    function all()
    {
        return $this->connect_table
            ->orderBy('id','DESC')
            ->get()->getResult();
    }
    function joinWithUserId(){
        return $this->connect_table
            ->join('users', 'blog.blog_author_id = users.id')
            ->get()->getResult();
    }

    function where(){
        return $this->connect_table
            ->where('blog_created_at =', '14:47:03')
            ->get()->getResult();
    }

    function whereWithJoin(){
        return $this->connect_table
            ->where('blog_created_at =', '14:47:03')
            ->join('users', 'blog.blog_author_id = users.id')
            ->get()->getResult();
    }
    
    function getPost(){
        
        return $this->connect_table
            ->where(['blog.id <'=> '2'])
            ->join('users', 'blog.blog_author_id = users.id')
            ->get()->getRow();
    }

    function getByLike(){
        return $this->connect_table
                    ->like('blog_description', 'form', 'both')  //%string%
                    ->get()->getResult();
    }
    
    function groupingWithWhere(){
        
        return $this->connect_table
                    ->groupStart()
                        ->where(['id >'=>'25', 'blog_created_at <'=>'1990-01-01 00:00:00'])
                    ->groupEnd()
                    ->get()->getResult();
    }

    function whereOr(){
         return $this->connect_table
            ->orWhere('id >=', '10')
            ->get()->getResult();
    }
    
    public function getPosts(){
        $builder = $this->db->table('blog');
        $builder->join('users', 'blog.blog_author_id = users.id');
        $post = $builder->get()->getResult();

        return $post;
    }
}