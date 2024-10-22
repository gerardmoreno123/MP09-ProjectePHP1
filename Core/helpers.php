<?php
//Funcions globals
function dd($var)
{
    var_dump($var);
    die();
}

//pasem variable i dades
function view($view, $data = [])
{
    //extraem les dades del array
    extract($data);
    $view = str_replace('.', '/', $view);
    return require "../resources/views/{$view}.blade.php";
}
