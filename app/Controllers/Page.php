<?php

use uFrame\Controller;

class Page extends Controller
{

    public function index()
    {
        
        $this->show(    );
    }

    public function show($page_name = "Home")
    {
        //echo "This is Page/".$page_name;
        // Should we need some data from the database..

        $pageModel = $this->model("PageModel");
        $data['page'] = $pageModel->getPage(strtolower($page_name));

        $bannerModel = $this->model("BannerModel");
        $data['banner'] = $bannerModel->getOne(3);
        $data['banners'] = $bannerModel->getAll();

       
         $this->view("page", $data);
    }

}
