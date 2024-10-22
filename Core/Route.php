<?php
//Fitxer per gestionar les rutes
namespace Core;

use RuntimeException;

class Route
{
    //creem array en les rutes
    protected $routes = [];

    //creem funcio per afegir rutes a l'array
    public function register($route)
    {
        $this->routes[] = $route;
    }

    //funcio per rebre un array de rutes i assignar a la propietat routes
    public function define($route)
    {
        $this->routes = $route;
        return $this;
    }

    //funcio per redirigir la url solicitada a un controlador
    public function redirect($uri)
    {
        // Partim la URL
        $parts = explode('/', trim($uri, '/'));

        // Pàgina principal (Landing Page)
        if ($uri === '/') {
            // Carreguem el controlador de la landing page
            $controller = 'App\Controllers\HomepageController';
            require '../App/Controllers/HomepageController.php';
            $controllerInstance = new $controller();
            return $controllerInstance->index();
        }

        // CRUD Films (Pàgina secundària)
        if ($parts[0] === 'films') {
            $controller = 'App\Controllers\FilmController';
            require '../App/Controllers/FilmController.php';
            $controllerInstance = new $controller();

            // Index (listar films)
            if (!isset($parts[1])) {
                return $controllerInstance->index();
            }

            // Create
            if ($parts[1] === 'create') {
                return $controllerInstance->create();
            }

            // Guardar (Store)
            if ($parts[1] === 'store' && $_SERVER['REQUEST_METHOD'] === 'POST') {
                $data = $_POST;
                return $controllerInstance->store($data);
            }

            // Delete (GET)
            if ($parts[1] === 'delete' && isset($parts[2])) {
                return $controllerInstance->delete($parts[2]);
            }

            // Destroy (POST)
            if ($parts[1] === 'destroy' && $_SERVER['REQUEST_METHOD'] === 'POST') {
                if (!isset($_POST['id'])) {
                    throw new RuntimeException('No id provided');
                }
                return $controllerInstance->destroy($_POST['id']);
            }

            // Editar (GET)
            if ($parts[1] === 'edit' && isset($parts[2])) {
                return $controllerInstance->edit($parts[2]);
            }

            // Actualitzar (POST)
            if ($parts[1] === 'update' && $_SERVER['REQUEST_METHOD'] === 'POST') {
                $data = $_POST;
                if (!isset($_POST['id'])) {
                    throw new RuntimeException('No id provided');
                }
                return $controllerInstance->update($_POST['id'], $data);
            }
        }

        // Si no es troba cap ruta, carregar 404
        return require '../resources/views/errors/404.blade.php';
    }

}