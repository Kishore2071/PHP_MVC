<?php

class Controller
{
    public function index()
    {
        require "model.php";

        $model = new Model;

        $products = $model->getData();

        require "view.php";
    }
}