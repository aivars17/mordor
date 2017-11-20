<?php

class BannerModel
{

    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    // Get single post ( [0]'st element from results array)
    public function getOne(string $count): array
    {
        return $this->db->select("SELECT *, rand() as rand FROM banner ORDER By rand LIMIT $count");
    }

    // Get all posts
    public function getAll(): array
    {
        return $this->db->select("SELECT * FROM banner");
    }

}
