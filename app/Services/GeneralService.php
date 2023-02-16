<?php


namespace App\Services;


use mysql_xdevapi\DatabaseObject;

class GeneralService
{
    public static function getStatusForResponseByData($data)
    {
        if ($data->count() > 0) {
            return 'success';
        }
        return 'error';
    }
}
