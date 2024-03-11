<?php

namespace app\controllers;

use app\models\HomePage;
use app\models\Product;

class HomePageController extends controller
{
    public function Home()
    {
        $data = Product::all();
        return $this->view("index",$data);
    }
    public function about()
    {
        echo "About Page Agaaaaaaaaaaaaaaain ";

    }

}
