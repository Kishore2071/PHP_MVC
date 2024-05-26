<?php

class Article
{
    public function getData()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'mvc');

        $result = mysqli_query($conn, 'SELECT * FROM article');

        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
}
