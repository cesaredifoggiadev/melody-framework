<?php

namespace App\Http\Controllers;

use JsonException;
use App\Models\Product;
use PDO;
use Melody\Route;
use Views\Entities;
use Views\Users;

class Controller {

    public function example() {
        view();
        require '../views/welcome.php';
    }

    public function entity($id) {
        $entity = Product::where('id', '=' , $id)->first();
        if ($entity) {
            return 'Entity: ' .$entity->title . ' - ' .$entity->content;
        }

        return 'No Entity Found';
    }

    public function store() {
        $parameters = $_POST;
        $config = include('./config.php');
        $dbConfig = $config['db'];

        $driver = $dbConfig['driver'];
        $host = $dbConfig['host'];
        $port = $dbConfig['port'];
        $db = $dbConfig['db'];
        $username = $dbConfig['username'];
        $password = $dbConfig['password'];
        $connectionString = "$driver:host=$host:$port;dbname=$db";

        $connection = new PDO($connectionString, $username, $password, $dbConfig['options']);
        $stmt = $connection->prepare("INSERT INTO entities (title, content) VALUES ('{$parameters['title']}','{$parameters['content']}')");
        $stmt->execute();


        return header('Location: /genovese/entities');
    }

    public function delete($id) {
        $parameters = $_POST;
        $config = include('./config.php');
        $dbConfig = $config['db'];

        $driver = $dbConfig['driver'];
        $host = $dbConfig['host'];
        $port = $dbConfig['port'];
        $db = $dbConfig['db'];
        $username = $dbConfig['username'];
        $password = $dbConfig['password'];
        $connectionString = "$driver:host=$host:$port;dbname=$db";

        $connection = new PDO($connectionString, $username, $password, $dbConfig['options']);
        $stmt = $connection->prepare("DELETE FROM entities WHERE id=$id");
        $stmt->execute();


        return header('Location: /genovese/entities');
    }
}