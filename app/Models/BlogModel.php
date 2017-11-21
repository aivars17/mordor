<?php

class BlogModel
{

    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    // Get single post ( [0]'st element from results array)
    public function getOne(string $id): array
    {
        return $this->db->select("SELECT * FROM posts WHERE id = :id", ["id" => $id])[0];
    }

    // Get all posts
    public function getAll(): array 
    {
        return $this->db->select("SELECT count(*) as navi FROM posts");
    }
    
    
    // Get paginate 10 post limit
    public function getposts($lim,$skip): array
    {
        return $this->db->select("SELECT *, SUBSTRING(`body`, 1, 100) as readmore FROM posts ORDER By date LIMIT $lim OFFSET $skip");
    }
    

}
