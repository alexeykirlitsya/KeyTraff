<?php

namespace App\Controllers;

use App\Models\Tasks;

class TaskController
{
    /**
     * @return array
     */
    public static function selectFirstTask()
    {
        return (new Tasks())->selectFirstTask();
    }

    /**
     * @return array
     */
    public static function selectSecondTask()
    {
        return (new Tasks())->selectSecondTask();
    }
}
