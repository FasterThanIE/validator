<?php

namespace App\Services;

use PDO;

class Database
{
    protected PDO $db;

    public function __construct()
    {
        $this->db = new PDO("mysql:host={$_ENV['DATABASE_HOST']};dbname={$_ENV['DATABASE_DB']};port={$_ENV['DATABASE_PORT']}",
            username: $_ENV['DATABASE_USER'],
            password: $_ENV['DATABASE_PASSWORD'],
        );
    }
}