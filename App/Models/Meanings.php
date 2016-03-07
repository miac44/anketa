<?php

namespace App\Models;


use App\Model;

class Meanings extends Model
{

    const TABLE = 'meanings';

    public $id;
    public $element_id;
    public $title;
    public $action;
    public $default;

    public static function getValues($element_id)
    {
        $db = \App\Db::instance();
        $res = $db->query(
            'SELECT * FROM ' . self::TABLE
            . ' WHERE element_id=:element_id',
            __CLASS__,
            array('element_id' => $element_id)
        );
        return $res;
    }

}