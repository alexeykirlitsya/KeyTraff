<?php

use App\Controllers\TaskController;

require '../vendor/autoload.php';

if (isset($_POST["route"])) {
    echo json_encode(Route::res($_POST["route"]));
}

class Route
{
    /**
     * @param $action
     * @return array
     */
    public static function res($action)
    {
        switch($action){
            case 'first':
                return TaskController::selectFirstTask();
                break;
            case 'second':
                return TaskController::selectSecondTask();
                break;
        }
    }
}
