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

}
