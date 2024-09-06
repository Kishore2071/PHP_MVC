<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\Viewer;

class Home
{
    public function index()
    {
        $viewer = new Viewer;

        echo $viewer->render("shared/header.php", [
            "title" => "Home"
        ]);

        echo $viewer->render("Home/index.php");
    }
}