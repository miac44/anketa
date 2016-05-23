<?php

namespace App\Models;

use App\Model;


class Ambulance extends Model
{

    const TABLE = 'ambulances';

    public $id;
    public $region_id;
    public $ident;
    public $name;

    public function __get($k)
    {   
        if ($k == 'region'){
            if (isset($this->region_id)){
                return \App\Models\Region::findById($this->region_id);
            } else {
                return FALSE;
            }
        }
        if ($k == 'count_ambulatoria_site'){
            if (isset($this->name)){
                $sql = 'SELECT COUNT(*) as count_ambulatoria_site FROM `anketa_ambulatoria` WHERE ambulance=:ambulance AND `type`="Сайт"';
                $db = \App\Db::instance();
                $res = $db->queryRaw($sql, array('ambulance' => $this->name ));
                return $res[0]['count_ambulatoria_site'];
            } else {
                return FALSE;
            }
        }
        if ($k == 'count_ambulatoria'){
            if (isset($this->name)){
                $sql = 'SELECT COUNT(*) as count_ambulatoria FROM `anketa_ambulatoria` WHERE ambulance=:ambulance';
                $db = \App\Db::instance();
                $res = $db->queryRaw($sql, array('ambulance' => $this->name ));
                return $res[0]['count_ambulatoria'];
            } else {
                return FALSE;
            }
        }

        if ($k == 'count_ambulatoria_manual'){
            if (isset($this->name)){
                $sql = 'SELECT COUNT(*) as count_ambulatoria_manual FROM `anketa_ambulatoria` WHERE ambulance=:ambulance AND `type`="Вручную"';
                $db = \App\Db::instance();
                $res = $db->queryRaw($sql, array('ambulance' => $this->name ));
                return $res[0]['count_ambulatoria_manual'];
            } else {
                return FALSE;
            }
        }
        if ($k == 'count_stacionar_site'){
            if (isset($this->name)){
                $sql = 'SELECT COUNT(*) as count_stacionar_site FROM `anketa_stacionar` WHERE ambulance=:ambulance AND `type`="Сайт"';
                $db = \App\Db::instance();
                $res = $db->queryRaw($sql, array('ambulance' => $this->name ));
                return $res[0]['count_stacionar_site'];
            } else {
                return FALSE;
            }
        }
        if ($k == 'count_stacionar_manual'){
            if (isset($this->name)){
                $sql = 'SELECT COUNT(*) as count_stacionar_manual FROM `anketa_stacionar` WHERE ambulance=:ambulance AND `type`="Вручную"';
                $db = \App\Db::instance();
                $res = $db->queryRaw($sql, array('ambulance' => $this->name ));
                return $res[0]['count_stacionar_manual'];
            } else {
                return FALSE;
            }
        }
        if ($k == 'count_stacionar'){
            if (isset($this->name)){
                $sql = 'SELECT COUNT(*) as count_stacionar FROM `anketa_stacionar` WHERE ambulance=:ambulance';
                $db = \App\Db::instance();
                $res = $db->queryRaw($sql, array('ambulance' => $this->name ));
                return $res[0]['count_stacionar'];
            } else {
                return FALSE;
            }
        }
    }

}