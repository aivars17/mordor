<?php

use uFrame\Controller;

class Home extends Controller
{

    public function index()
    {
        $data['header'] = "Home";
        $data['body'] = "This is the homepage of µFrame.<br><i>Microframe</i> is the lightweight Model-View-Controller based PHP framework.";
        $this->view("main", $data);
    }

    public function hello()
    {

        // Should we need some data from the database..

        // $post = $this->model("Post");
        // $data['post'] = $post->allPosts();

        $data['header'] = "Hello World";
        $data['body'] = "Be nice - say Hi!";
        $this->view("page", $data);
    }

}
