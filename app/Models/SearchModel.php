<?php

class SearchModel
{

    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    // Get single post ( [0]'st element from results array)
    public function getPost(string $title): array
    {
        return $this->db->select("SELECT *, SUBSTRING(`body`, 1, 100) as readmore FROM posts WHERE title = :title", ["titile" => $title])[0];
    }

    // Get all posts
    public function getPosttext($name): array
    {
        return $this->db->select("SELECT *, SUBSTRING(`body`, 1, 100) as readmore FROM posts WHERE UPPER(title) LIKE ? OR UPPER(body) LIKE ?", ["%$name%","%$name%"]);
    }

}
