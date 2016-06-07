<?php
namespace App\Models;

use App\Model, App\Db;


class Stacionar extends Model
{
	const TABLE = 'anketa_stacionar';
	public $ambulance_stat;

    public function instance($ambulance)
    {
        $db = Db::instance();
        $res = $db->query(
            'SELECT * FROM ' . static::TABLE
            . ' WHERE ambulance=:ambulance',
            static::class,
            array('ambulance' => $ambulance)
        );
        return $res;
     }

    public function get_point_1_2()
    {
    	return 1;
    }

	public function get_point_1_3()
    {
    	return 2;
    }

    public function get_1_4()
    {
    	$count_true = 0;
    	$count_false = 0;
    	foreach ($this->ambulance_stat as $anketa) {
    		if ($anketa->row16=='Да'){
    			$count_true++;
    		}
    		if ($anketa->row16=='Нет'){
    			$count_true++;
    		}
    	}
    	return new App\Models\Stat($count_true,$count_false);

    }

}