<?php

namespace App\Models;

use App\Model;

class StatStacionar extends Model
{
    const TABLE = 'anketa_stacionar';
    public $ambulance;
    public $countbytype;

    public function __construct($ambulance)
    {
        $this->ambulance = $ambulance;
        $sql = 'SELECT type, COUNT(*) as count FROM `anketa_stacionar` WHERE ambulance=:ambulance AND type<>"" GROUP BY type';
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

    private function getPointsFromPercentVariant1($percent)
    {
        $point = 0;
        if ($percent>=90)$point++;
        if ($percent>=95)$point++;
        if ($percent=100)$point++;
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

        $stat = $this->getStatPerYes('row16');
        $stat->points = $this->getPointsFromPercentDefault($stat->getPercent());
        return $stat;
    }

    public function get_1_5()
    {
        $stat = $this->getStatPerYes('row14');
        $stat->points = $this->getPointsFromPercentDefault($stat->getPercent());
        return $stat;
    }

    public function get_2_1()
    {
        $stat = $this->getStatPerYes('row25');
        $stat->points = $this->getPointsFromPercentDefault($stat->getPercent());
        return $stat;
    }

    public function get_2_2()
    {
        $stat = $this->getStatPerYes('row18');
        $stat->points = $this->getPointsFromPercentDefault($stat->getPercent());
        return $stat;
    }

    public function get_2_3()
    {
        $stat = $this->getStatPerYes('row21');
        $stat->points = $this->getPointsFromPercentVariant1($stat->getPercent());
        return $stat;
    }

    public function get_2_4()
    {
        $stat = $this->getStatPerYes('row20');
        $stat->points = $this->getPointsFromPercentVariant1($stat->getPercent());
        return $stat;
    }

    public function get_2_5()
    {
        $stat = $this->getStatPerYes('row11');
        $points = 0;
        $percent = $stat->getPercent();
        if ($percent>=70) $points++;
        if ($percent>=65) $points++;
        if ($percent>=60) $points++;
        if ($percent>=55) $points++;
        if ($percent>=50) $points++;
        $stat->points = $points;
        return $stat;
    }

    public function get_3_1()
    {
        $sql = 'SELECT COUNT(*) as count FROM ' . static::TABLE . ' WHERE ambulance=:ambulance AND row6="до 30 мин"';
        $db = \App\Db::instance();
        $res = $db->queryRaw($sql, array('ambulance' => $this->ambulance ));
        $a = (int)$res[0]['count'];
        $sql = 'SELECT COUNT(*) as count FROM ' . static::TABLE . ' WHERE ambulance=:ambulance AND row6="до 45 мин"';
        $db = \App\Db::instance();
        $res = $db->queryRaw($sql, array('ambulance' => $this->ambulance ));
        $b = (int)$res[0]['count'];
        $sql = 'SELECT COUNT(*) as count FROM ' . static::TABLE . ' WHERE ambulance=:ambulance AND row6="до 60 мин"';
        $db = \App\Db::instance();
        $res = $db->queryRaw($sql, array('ambulance' => $this->ambulance ));
        $c = (int)$res[0]['count'];
        $sql = 'SELECT COUNT(*) as count FROM ' . static::TABLE . ' WHERE ambulance=:ambulance AND row6="до 90 мин"';
        $db = \App\Db::instance();
        $res = $db->queryRaw($sql, array('ambulance' => $this->ambulance ));
        $d = (int)$res[0]['count'];
        $sql = 'SELECT COUNT(*) as count FROM ' . static::TABLE . ' WHERE ambulance=:ambulance AND row6="90 мин и более"';
        $db = \App\Db::instance();
        $res = $db->queryRaw($sql, array('ambulance' => $this->ambulance ));
        $e = (int)$res[0]['count'];
        if ($a+$b+$c+$d+$e==0){
            $time = 99999;
        } else {
            $time = ($a * 29 + $b * 44 + $c * 59 + $d * 89 + $e * 90) / ($a + $b + $c + $d + $e);
        };
        $points = 0;
        if ($time<120) $points++;
        if ($time<75) $points++;
        if ($time<60) $points++;
        if ($time<45) $points++;
        if ($time<30) $points++;
        $stat = new Stat();
        $stat->points = $points;
        return $stat;
    }
    public function get_3_2()
    {
        $gos_garant = 20;
        $sql = 'SELECT COUNT(*) as count FROM ' . static::TABLE . ' WHERE ambulance=:ambulance AND row2="меньше 15 календарных дней"';
        $db = \App\Db::instance();
        $res = $db->queryRaw($sql, array('ambulance' => $this->ambulance ));
        $a = (int)$res[0]['count'];
        $sql = 'SELECT COUNT(*) as count FROM ' . static::TABLE . ' WHERE ambulance=:ambulance AND row2="15 календарных дней"';
        $db = \App\Db::instance();
        $res = $db->queryRaw($sql, array('ambulance' => $this->ambulance ));
        $b = (int)$res[0]['count'];
        $sql = 'SELECT COUNT(*) as count FROM ' . static::TABLE . ' WHERE ambulance=:ambulance AND row2="27 календарных дней"';
        $db = \App\Db::instance();
        $res = $db->queryRaw($sql, array('ambulance' => $this->ambulance ));
        $c = (int)$res[0]['count'];
        $sql = 'SELECT COUNT(*) as count FROM ' . static::TABLE . ' WHERE ambulance=:ambulance AND row2="28 календарных дней"';
        $db = \App\Db::instance();
        $res = $db->queryRaw($sql, array('ambulance' => $this->ambulance ));
        $d = (int)$res[0]['count'];
        $sql = 'SELECT COUNT(*) as count FROM ' . static::TABLE . ' WHERE ambulance=:ambulance AND row2="29 календарных дней"';
        $db = \App\Db::instance();
        $res = $db->queryRaw($sql, array('ambulance' => $this->ambulance ));
        $e = (int)$res[0]['count'];
        $sql = 'SELECT COUNT(*) as count FROM ' . static::TABLE . ' WHERE ambulance=:ambulance AND row2="30 календарных дней и более"';
        $db = \App\Db::instance();
        $res = $db->queryRaw($sql, array('ambulance' => $this->ambulance ));
        $f = (int)$res[0]['count'];
        if ($a+$b+$c+$d+$e==0){
            $time = 99999;
        } else {
            $time = ($a * 14 + $b * 15 + $c * 27 + $d * 28 + $e * 29 + $f * 30) / ($a + $b + $c + $d + $e + $f);
        }
        $points = 0;
        if ($time <= $gos_garant) $points++;
        if ($time <= $gos_garant-1) $points++;
        if ($time <= $gos_garant-2) $points++;
        if ($time <= $gos_garant-3) $points++;
        if ($time <= $gos_garant/2) $points++;
        $stat = new Stat();
        $stat->points = $points;
        return $stat;
    }

    public function get_3_3()
    {
        $stat = $this->getStatPerYes('row3');
        $stat->points = $this->getPointsFromPercentDefault($stat->getPercent());
        return $stat;
    }

    public function get_4_1()
    {
        $stat = $this->getStatPerYes('row19');
        $stat->points = $this->getPointsFromPercentDefault($stat->getPercent());
        return $stat;
    }
    public function get_4_2()
    {
        $stat = $this->getStatPerYes('row23');
        $stat->points = $this->getPointsFromPercentDefault($stat->getPercent());
        return $stat;
    }
    public function get_5_1()
    {
        $stat = $this->getStatPerYes('row27');
        $stat->points = $this->getPointsFromPercentDefault($stat->getPercent());
        return $stat;
    }
    public function get_5_2()
    {
        $stat = $this->getStatPerYes('row29');
        $stat->points = $this->getPointsFromPercentDefault($stat->getPercent());
        return $stat;
    }
    public function get_5_3()
    {
        $stat = $this->getStatPerYes('row28');
        $stat->points = $this->getPointsFromPercentDefault($stat->getPercent());
        return $stat;
    }

    public function getCountByType($type){
        return $this->countbytype[$type];
    }

    public function getCount(){
        return array_sum($this->countbytype);
    }


}