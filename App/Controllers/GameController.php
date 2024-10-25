<?php

namespace App\Controllers;

use App\Models\Game;

class GameController
{
    //funcio index
    public function index()
    {
        //obtenim totes les pelis
        $games = Game::getAll();

        //pasem les pelis a la vista
        return view('games/index', ['games' => $games]);
    }

    //funcio per anar a la vista create
    public function create()
    {
        return view('games/create');
    }

    //funcio per guardar les dades i tornar a la vista principal
    public function store($data)
    {
        //cridem funcio create del model
        Game::create($data);
        //retornar a la vista principal
        header('location: /games');
        exit;
    }

    //funcio per a la vista edit
    public function edit($id)
    {
        //si no ens passen la id fem redirect
        if ($id === null) {
            header('location: /games');
            exit;
        }

        $game = Game::find($id);

        if (!$game) {
            require '../../resources/views/errors/404.blade.php';
        }

        //retornem la vista i li passem el joc indicada
        return view('games.edit', ['game' => $game]);
    }

    //funcio update per a modificar el joc a la base de dades
    public function update($id, $data)
    {
        //modifiquem
        Game::update($id, $data);

        //retonem a la pàgina principal
        header('location: /games');
        exit;
    }

    //funcio per anar a la vista delete
    public function delete($id)
    {
        //si no ens passen la id fem redirect
        if ($id === null) {
            header('location: /games');
            exit;
        }

        //busquem el joc
        $game = Game::find($id);
        //retornem la vista en la peli
        return view('games/delete', ['game' => $game]);

    }

    //funcio per eliminar el joc de la base de dades
    public function destroy($id)
    {
        //utilizem la funcio delete del model
        Game::delete($id);

        //retornar a la vista
        header('location: /games');
    }

}

























