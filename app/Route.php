<?php

namespace App;

use App\Controllers\TaskController;

require '../vendor/autoload.php';

if (isset($_POST["route"])) {
    echo Route::route($_POST["route"]);
}

class Route
{
    /**
     * @param $action
     * @return false|string
     */
    public static function route($action)
    {
        switch($action){
            case 'first':
                return json_encode(TaskController::selectFirstTask());
                break;
            case 'second':
                return json_encode(TaskController::selectSecondTask());
                break;
        }
    }
}
