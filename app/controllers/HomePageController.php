<?php

namespace app\controllers;

use app\models\HomePage;
use app\models\Product;

class HomePageController extends controller
{
    public function Home()
    {
        $data = HomePage::all();
        return $this->view("index",$data);
    }
    public function about()
    {
        echo "About Page Agaaaaaaaaaaaaaaain ";

    }

}
