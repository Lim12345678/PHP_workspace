<?php
require_once ("DB.php");

class add
{
    private $db;

    public function __construct()
    {
        $db = new DB();
        $this->db = $db->getDB();
    }

}