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

        if ($k == 'stacionar'){
            if (isset($this->name)) {
                return new StatStacionar($this->name);
            } else {
                return FALSE;
            }
        }
        if ($k == 'ambulatoria'){
            if (isset($this->name)) {
                return new StatAmbulatoria($this->name);
            } else {
                return FALSE;
            }
        }
    }

}