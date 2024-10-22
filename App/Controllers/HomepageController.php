<?php

namespace App\Controllers;

class HomepageController
{
    public function index()
    {
        require '../resources/views/homepage.blade.php';
    }

}