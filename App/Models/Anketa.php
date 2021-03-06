<?php

namespace App\Models;

use App\Model;


class Anketa extends Model
{

    const TABLE = 'ankets';

    public $id;
    public $title;
    public $text;
    public $action;
    public $visible;
    public $count;

    public static function getByAction($action)
    {
        $db = \App\Db::instance();
        $res = $db->query_one_element(
            'SELECT * FROM ' . self::TABLE
            . ' WHERE action=:action',
            __CLASS__,
            array('action' => $action)
        );
        return $res;
    }

    public function __get($k)
    {
        if ($k == 'elements'){
            if (isset($this->id)){
                return \App\Models\Element::getElements($this->id);
            } else {
                return FALSE;
            }
        }

        if ($k == 'count'){
            if (isset($this->id)){
                return $this->getCountValues($this->action);
            } else {
                return FALSE;
            }
        }

        return NULL;
    }

    public static function saveValues($table, $substitution)
    {
        foreach ($substitution as $k => $v) {
            if ('id' == $k) {
                continue;
            }
            $columns[] = $k;
            $values[':'.$k] = $v;
        }
        $sql = '
            INSERT INTO ' . $table . '
            (' . implode(',', $columns) . ')
            VALUES
            (' . implode(',', array_keys($values)) . ')
                    ';
        $db = \App\Db::instance();
        return $db->execute($sql, $values);
    }

    public static function getCountValues($table)
    {
        $sql = 'SELECT COUNT(*) as count FROM ' . $table;
        $db = \App\Db::instance();
        return $db->queryRaw($sql);
    }


}