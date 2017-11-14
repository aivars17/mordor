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
        return $this->db->select("SELECT * FROM posts");
    }

}
