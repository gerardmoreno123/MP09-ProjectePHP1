<?php

namespace App\Controllers;

class HomepageController
{
    public function index()
    {
        require __DIR__ . '/../../resources/views/home.blade.php';
    }

}