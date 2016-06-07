<?php

namespace App\Models;


use App\Model;

class StatAmbulatoria extends Model
{
    const TABLE = 'anketa_ambulatoria';
    public $ambulance;
    public $countbytype = array(0);

    public function __construct($ambulance)
    {
        $this->ambulance = $ambulance;
        $sql = 'SELECT type, COUNT(*) as count FROM ' . static::TABLE . ' WHERE ambulance=:ambulance AND type<>"" GROUP BY type';
        $db = \App\Db::instance();
        $res = $db->queryRaw($sql, array('ambulance' => $ambulance ));
        foreach ($res as $value) {
            $this->countbytype[$value['type']] = (int)$value['count'];
        }
    }

    private function getPointsFromPercentDefault($percent)
    {
        $point = 0;
        if ($percent>=70)$point++;
        if ($percent>=75)$point++;
        if ($percent>=80)$point++;
        if ($percent>=85)$point++;
        if ($percent>=90)$point++;
        return $point;
    }

    private function getStatPerYES($row)
    {
        $sql = 'SELECT COUNT(*) as count_true FROM ' . static::TABLE . ' WHERE ambulance=:ambulance AND ' . $row . '="Да"';
        $db = \App\Db::instance();
        $res = $db->queryRaw($sql, array('ambulance' => $this->ambulance ));
        $count_true = (int)$res[0]['count_true'];
        $sql = 'SELECT COUNT(*) as count_false FROM ' . static::TABLE . ' WHERE ambulance=:ambulance AND ' . $row . '="Нет"';

        $db = \App\Db::instance();
        $res = $db->queryRaw($sql, array('ambulance' => $this->ambulance ));
        $count_false = (int)$res[0]['count_false'];
        $stat = new Stat($count_true, $count_false);

        return $stat;
    }

    public function get_1_2()
    {
        $stat = new Stat();
        $stat->points = 1;
        return $stat;
    }

    public function get_1_3()
    {
        $stat = new Stat();
        $stat->points = 2;
        return $stat;
    }

    public function get_1_4()
    {

        $stat = $this->getStatPerYes('row50');
        $stat->points = $this->getPointsFromPercentDefault($stat->getPercent());
        return $stat;
    }

    public function get_1_5()
    {
        $stat = $this->getStatPerYes('row52');
        $stat->points = $this->getPointsFromPercentDefault($stat->getPercent());
        return $stat;
    }

    public function get_2_1()
    {
        $stat = $this->getStatPerYes('row45');
        $stat->points = $this->getPointsFromPercentDefault($stat->getPercent());
        return $stat;
    }

    public function get_2_2()
    {
        return FALSE;
    }

    public function get_2_3()
    {
        return FALSE;
    }

    public function get_2_4()
    {
        $stat = $this->getStatPerYes('row53');
        $stat->points = $this->getPointsFromPercentDefault($stat->getPercent());
        return $stat;
    }

    public function get_2_5()
    {
        $stat = $this->getStatPerYes('row57');
        $stat->points = $this->getPointsFromPercentDefault($stat->getPercent());
        return $stat;
    }

    public function get_3_1()
    {
        return FALSE;
    }
    public function get_3_2()
    {
        $stat = $this->getStatPerYes('row48');
        $stat->points = $this->getPointsFromPercentDefault($stat->getPercent());
        return $stat;
    }

    public function get_3_3()
    {
        return FALSE;
    }

    public function get_4_1()
    {
        $stat = $this->getStatPerYes('row41');
        $stat->points = $this->getPointsFromPercentDefault($stat->getPercent());
        return $stat;
    }
    public function get_4_2()
    {
        return FALSE;
    }
    public function get_5_1()
    {
        $stat = $this->getStatPerYes('row63');
        $stat->points = $this->getPointsFromPercentDefault($stat->getPercent());
        return $stat;
    }
    public function get_5_2()
    {
        $stat = $this->getStatPerYes('row64');
        $stat->points = $this->getPointsFromPercentDefault($stat->getPercent());
        return $stat;
    }

    public function getCountByType($type){
        if (isset($this->countbytype[$type])){
            return $this->countbytype[$type];
        } else {
            return 0;
        }
    }

    public function getCount(){
        return array_sum($this->countbytype);
    }

}