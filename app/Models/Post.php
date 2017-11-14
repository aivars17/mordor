<?php

class Post
{

    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    // Get single post ( [0]'st element from results array)
    public function getPost(string $id): array
    {
        return $this->db->select("SELECT * FROM posts WHERE id = :id", ["id" => $id])[0];
    }

    // Get all posts
    public function allPosts(): array
    {
        return $this->db->select("SELECT * FROM posts");
    }

}
