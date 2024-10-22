<?php

namespace App\Models;

use Core\App;

class Film
{
    protected static $table = 'films';

    //funcio per a que torne totes les pelis
    public static function getAll()
    {
        $db = App::get('database');
        $statement = $db->getConnection()->prepare('SELECT * FROM ' . self::$table);
        $statement->execute();
        return $statement->fetchAll();
    }

    //funcio per a buscar una peli
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
        $statement = $db->prepare('INSERT INTO '. static::$table . "(title, director, release_date, rating) VALUES (:title, :director, :release_date, :rating)");
        $statement->bindValue(':title', $data['title']);
        $statement->bindValue(':director', $data['director']);
        $statement->bindValue(':release_date', $data['release_date']);
        $statement->bindValue(':rating', $data['rating']);
        $statement->execute();
    }

    //funcio update
    public static function update($id, $data)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare("UPDATE " . static::$table . " SET title = :title, director = :director, release_date = :release_date, rating = :rating WHERE id = :id");
        $statement->bindValue(':id', $id);
        $statement->bindValue(':title', $data['title']);
        $statement->bindValue(':director', $data['director']);
        $statement->bindValue(':release_date', $data['release_date']);
        $statement->bindValue(':rating', $data['rating']);
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