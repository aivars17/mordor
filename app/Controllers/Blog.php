<?php

use uFrame\Controller;

class Blog extends Controller
{

    public function index($lim = 5, $page = 1)
    {

        
        $blogModel = $this->model('BlogModel');

        //counted posts
        $data['navi'] = $blogModel->getAll();
        $data['pages'] = ceil($data['navi'][0]['navi'] / $lim);
       if($page == 1){
        $data['back'] = 1;
        $data['forward'] = 2;
       } else{
        $data['back'] = ($page - 1);
        if ($page == $data['pages']) {
            $data['forward'] = $page;
        }else {
            $data['forward'] = ($page + 1);
        }
       }
        //show all blog records
       if ($page == 1) {
           $pages = $page * $lim - $lim;
       }else {
        $pages = $page * $lim -$lim;
       }
       $data['lim'] = $lim;
        $data['post'] = ['title' => 'Blog'];
        $data['postList'] = $blogModel->getposts($lim,$pages);
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
