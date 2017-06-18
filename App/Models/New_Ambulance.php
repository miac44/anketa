<?php

namespace App\Models;

use App\Model;


class NEW_Ambulance extends Model
{

    const TABLE = 'NEW_ambulances';

    public $id;
    public $region_id;
    public $name;

    public function __get($k)
    {
        if ($k == 'count'){
            if (isset($this->id)){
/*
 * нужно прописать количество
 */
            } else {
                return FALSE;
            }
        }
 /*
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

        if ($k == 'ambulatoriamz'){
            if (isset($this->name)) {
                return new StatAmbulatoriaMZ($this->name);
            } else {
                return FALSE;
            }
        }
        if ($k == 'stacionarmz'){
            if (isset($this->name)) {
                return new StatStacionarMZ($this->name);
            } else {
                return FALSE;
            }
        }
 */
    }

}