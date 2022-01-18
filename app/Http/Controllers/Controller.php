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
}