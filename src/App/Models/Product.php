<?php

namespace App\Models;

use PDO;

class Product
{
    public function getData(): array
    {
        $dsn = "mysql:host=localhost;dbname=product_db;charset=utf8;port=3306";

        $pdo = new PDO($dsn, "test", "Password@12345", [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);

        $stmt = $pdo->query("SELECT * FROM product");

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}