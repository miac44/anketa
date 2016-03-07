<?php

namespace App\Models;

use App\Model;


class Element extends Model
{

    const TABLE = 'elements';

    public $id;
    public $anketa_id;
    public $type;
    public $title;
    public $required;
    public $parent_id;

    public static function getElements($anketa_id)
    {
        $db = \App\Db::instance();
        $res = $db->query(
            'SELECT * FROM ' . self::TABLE
            . ' WHERE anketa_id=:anketa_id',
            __CLASS__,
            array('anketa_id' => $anketa_id)
        );
        return $res;
    }

    public function __get($k)
    {
        if ($k == 'values'){
            if (isset($this->id)){
                return \App\Models\Meanings::getValues($this->id);
            } else {
                return FALSE;
            }
        }
        return NULL;
    }

}


