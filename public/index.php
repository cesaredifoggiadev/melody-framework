<?php

require_once('../vendor/autoload.php');

require_once('../routes/router.php');


use Melody\Http\Route;
use Melody\Views\Error;

try {
    echo Route::resolve();
} catch (Throwable $e) {
    $view = new Error(['exception' => $e]);

    echo $view->render();
}

?>
