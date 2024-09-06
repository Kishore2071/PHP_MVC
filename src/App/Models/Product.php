<?php

declare(strict_types=1);

namespace App\Models;

use PDO;
use App\Database;

class Product
{
    public function __construct(private Database $database)
    {
    }

    public function getData(): array
    {
        $pdo = $this->database->getConnection();

        $stmt = $pdo->query("SELECT * FROM product");

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}