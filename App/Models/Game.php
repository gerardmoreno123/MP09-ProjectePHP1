<?php

namespace App\Models;

use Core\App;

class Game
{
    protected static $table = 'games';

    //funcio per a que torne tots els jocs
    public static function getAll()
    {
        $db = App::get('database');
        $statement = $db->getConnection()->prepare('SELECT * FROM ' . self::$table);
        $statement->execute();
        return $statement->fetchAll();
    }

    //funcio per a buscar una joc
    public static function find($id)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('SELECT * FROM ' . self::$table . ' WHERE id = :id');
        $statement->execute(array('id' => $id));
        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    //funcio create
    public static function create($data)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('INSERT INTO '. static::$table . "(title, price, release_date, is_multiplayer, metacritic) VALUES (:title, :price, :release_date, :is_multiplayer, :metacritic)");
        $statement->bindValue(':title', $data['title']);
        $statement->bindValue(':price', $data['price']);
        $statement->bindValue(':release_date', $data['release_date']);
        $statement->bindValue(':is_multiplayer', $data['is_multiplayer']);
        $statement->bindValue(':metacritic', $data['metacritic']);
        $statement->execute();
    }

    //funcio update
    public static function update($id, $data)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare("UPDATE " . static::$table . " SET title = :title, price = :price, release_date = :release_date, is_multiplayer = :is_multiplayer, metacritic = :metacritic WHERE id = :id");
        $statement->bindValue(':id', $id);
        $statement->bindValue(':title', $data['title']);
        $statement->bindValue(':price', $data['price']);
        $statement->bindValue(':release_date', $data['release_date']);
        $statement->bindValue(':is_multiplayer', $data['is_multiplayer']);
        $statement->bindValue(':metacritic', $data['metacritic']);
        $statement->execute();
    }

    //funcio delete
    public static function delete($id)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('DELETE FROM '. static::$table . ' WHERE id = :id');
        $statement->bindValue(':id', $id);
        $statement->execute();
    }

}