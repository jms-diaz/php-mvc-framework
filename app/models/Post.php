<?php

class Post
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getNotes()
    {
        $this->db->query('SELECT * FROM notes');
        return $this->db->resultSet();
    }
}
