<?php

class Products
{
    public function index()
    {
        require "src/models/product.php";

        $model = new Product;

        $products = $model->getData();

        require "views/products_index.php";
    }

    public function show()
    {
        require "views/products_show.php";
    }
}