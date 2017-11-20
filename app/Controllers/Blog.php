<?php

use uFrame\Controller;

class Blog extends Controller
{

    public function index()
    {
        //show all blog records
        $blogModel = $this->model('BlogModel');
        $data['postList'] = $blogModel->getAll();
        $this->view("blog/list", $data);
    }

    public function show($id)
    {
        //show single blog post by id

        $blogModel = $this->model("BlogModel");
        $data['post'] = $blogModel->getOne($id);

       
         $this->view("blog/single", $data);
    }
     public function search()
    {
        //show single blog post by id
        if (empty($_GET['query'])){
            $this->index();
        } else {
            $blogModel = $this->model("SearchModel");
            $data['S_post'] = $blogModel->getPosttext(strtoupper($_GET['query']));
            if (count($data['S_post']) < 1) {
                $data['error'] = ['er'=>'NOT FOUND'];
                $this->view("search", $data);
            } else {
                $data['error'] = ['er'=>''];
                $this->view("search", $data);
            }
            

       
         
        }
        
    }

}
