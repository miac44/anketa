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
        return NULL;
    }

}