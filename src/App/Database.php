<?php

declare(strict_types=1);

namespace App;

use PDO;

class Database
{
    public function __construct(private string $host,
                                private string $name,
                                private string $user,
                                private string $password)
    {
    }

    public function getConnection(): PDO
    {
        $dsn = "mysql:host={$this->host};dbname={$this->name};charset=utf8;port=3306";

        return new PDO($dsn, $this->user, $this->password, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
    }
}