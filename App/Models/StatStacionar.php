<?php

namespace App\Models;

use App\Model;

class StatStacionar extends Model
{
    const TABLE = 'anketa_stacionar';
    public $ambulance;
    public $id;
    public $countbytype = array(0);
    public $mzstacionar;

    public function __construct($ambulance)
    {
        $this->ambulance = $ambulance;
        $sql = 'SELECT type, COUNT(*) as count FROM ' . static::TABLE . ' WHERE ambulance=:ambulance AND type<>"" GROUP BY type';
        $db = \App\Db::instance();
        $res = $db->queryRaw($sql, array('ambulance' => $ambulance ));
        foreach ($res as $value) {
            $this->countbytype[$value['type']] = (int)$value['count'];
        };
        $sql = 'SELECT id FROM ambulances WHERE name=:ambulance';
        $db = \App\Db::instance();
        $res = $db->queryRaw($sql, array('ambulance' => $ambulance ));
        $this->id = $res[0]['id'];
        $this->mzstacionar = \App\Models\MZstacionar::findById($this->id);
        $this->countbytype['mz'] = (int)$this->mzstacionar->count;
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

    private function getStatPerYES_new($stat, $stat_mz){
        return new Stat($stat->count_true+$stat_mz->count_true, $stat->count_false+$stat_mz->count_false);
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
        $sitestat = $this->getStatPerYes('row16');
        $mzstat = new Stat($this->mzstacionar->mzstacionar_22_1,$this->mzstacionar->mzstacionar_22_2);
        $stat = $this->getStatPerYES_new($sitestat,$mzstat);
        $stat->points = $this->getPointsFromPercentDefault($stat->getPercent());
        return $stat;
    }

    public function get_1_5()
    {
        $sitestat = $this->getStatPerYes('row14');
        $mzstat = new Stat($this->mzstacionar->mzstacionar_20_1,$this->mzstacionar->mzstacionar_20_2);
        $stat = $this->getStatPerYES_new($sitestat,$mzstat);
        $stat->points = $this->getPointsFromPercentDefault($stat->getPercent());
        return $stat;
    }

    public function get_2_1()
    {
        $sitestat = $this->getStatPerYes('row25');
        $mzstat = new Stat($this->mzstacionar->mzstacionar_31_1,$this->mzstacionar->mzstacionar_31_2);
        $stat = $this->getStatPerYES_new($sitestat,$mzstat);
        $stat->points = $this->getPointsFromPercentDefault($stat->getPercent());
        return $stat;
    }

    public function get_2_2()
    {
        $sitestat = $this->getStatPerYes('row18');
        $mzstat = new Stat($this->mzstacionar->mzstacionar_24_1,$this->mzstacionar->mzstacionar_24_2);
        $stat = $this->getStatPerYES_new($sitestat,$mzstat);
        $stat->points = $this->getPointsFromPercentDefault($stat->getPercent());
        return $stat;
    }

    public function get_2_3()
    {
        $sitestat = $this->getStatPerYes('row21');
        $mzstat = new Stat($this->mzstacionar->mzstacionar_27_1,$this->mzstacionar->mzstacionar_27_2);
        $stat = $this->getStatPerYES_new($sitestat,$mzstat);
        $stat->points = $this->getPointsFromPercentVariant1($stat->getPercent());
        return $stat;
    }

    public function get_2_4()
    {
        $sitestat = $this->getStatPerYes('row20');
        $mzstat = new Stat($this->mzstacionar->mzstacionar_26_1,$this->mzstacionar->mzstacionar_26_2);
        $stat = $this->getStatPerYES_new($sitestat,$mzstat);
        $stat->points = $this->getPointsFromPercentVariant1($stat->getPercent());
        return $stat;
    }

    public function get_2_5()
    {
        $all = $this->getStatPerYes('row25')->count_true+$this->mzstacionar->mzstacionar_31_1;
        $invalid = $this->getStatPerYes('row9')->count_true+$this->mzstacionar->mzstacionar_15_1;
        if ($all==0) {
            $percent = 0;
        } else {
            $percent = round(100/$all*$invalid);
        }
        $points = 0;
        if ($percent>=70) $points++;
        if ($percent>=65) $points++;
        if ($percent>=60) $points++;
        if ($percent>=55) $points++;
        if ($percent>=50) $points++;
        $stat = new Stat();
        $stat->points = $points;
        return $stat;
    }

    public function get_3_1()
    {
        $sql = 'SELECT COUNT(*) as count FROM ' . static::TABLE . ' WHERE ambulance=:ambulance AND row6="до 30 мин"';
        $db = \App\Db::instance();
        $res = $db->queryRaw($sql, array('ambulance' => $this->ambulance ));
        $a = (int)$res[0]['count'] + $this->mzstacionar->mzstacionar_12_5;
        $sql = 'SELECT COUNT(*) as count FROM ' . static::TABLE . ' WHERE ambulance=:ambulance AND row6="до 45 мин"';
        $db = \App\Db::instance();
        $res = $db->queryRaw($sql, array('ambulance' => $this->ambulance ));
        $b = (int)$res[0]['count'] + $this->mzstacionar->mzstacionar_12_4;
        $sql = 'SELECT COUNT(*) as count FROM ' . static::TABLE . ' WHERE ambulance=:ambulance AND row6="до 60 мин"';
        $db = \App\Db::instance();
        $res = $db->queryRaw($sql, array('ambulance' => $this->ambulance ));
        $c = (int)$res[0]['count'] + $this->mzstacionar->mzstacionar_12_3;
        $sql = 'SELECT COUNT(*) as count FROM ' . static::TABLE . ' WHERE ambulance=:ambulance AND row6="до 90 мин"';
        $db = \App\Db::instance();
        $res = $db->queryRaw($sql, array('ambulance' => $this->ambulance ));
        $d = (int)$res[0]['count'] + $this->mzstacionar->mzstacionar_12_2;
        $sql = 'SELECT COUNT(*) as count FROM ' . static::TABLE . ' WHERE ambulance=:ambulance AND row6="90 мин и более"';
        $db = \App\Db::instance();
        $res = $db->queryRaw($sql, array('ambulance' => $this->ambulance ));
        $e = (int)$res[0]['count'] + $this->mzstacionar->mzstacionar_12_1;
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
        $a = (int)$res[0]['count'] + $this->mzstacionar->mzstacionar_3_6;
        $sql = 'SELECT COUNT(*) as count FROM ' . static::TABLE . ' WHERE ambulance=:ambulance AND row2="15 календарных дней"';
        $db = \App\Db::instance();
        $res = $db->queryRaw($sql, array('ambulance' => $this->ambulance ));
        $b = (int)$res[0]['count'] + $this->mzstacionar->mzstacionar_3_5;
        $sql = 'SELECT COUNT(*) as count FROM ' . static::TABLE . ' WHERE ambulance=:ambulance AND row2="27 календарных дней"';
        $db = \App\Db::instance();
        $res = $db->queryRaw($sql, array('ambulance' => $this->ambulance ));
        $c = (int)$res[0]['count'] + $this->mzstacionar->mzstacionar_3_4;
        $sql = 'SELECT COUNT(*) as count FROM ' . static::TABLE . ' WHERE ambulance=:ambulance AND row2="28 календарных дней"';
        $db = \App\Db::instance();
        $res = $db->queryRaw($sql, array('ambulance' => $this->ambulance ));
        $d = (int)$res[0]['count'] + $this->mzstacionar->mzstacionar_3_3;
        $sql = 'SELECT COUNT(*) as count FROM ' . static::TABLE . ' WHERE ambulance=:ambulance AND row2="29 календарных дней"';
        $db = \App\Db::instance();
        $res = $db->queryRaw($sql, array('ambulance' => $this->ambulance ));
        $e = (int)$res[0]['count'] + $this->mzstacionar->mzstacionar_3_2;
        $sql = 'SELECT COUNT(*) as count FROM ' . static::TABLE . ' WHERE ambulance=:ambulance AND row2="30 календарных дней и более"';
        $db = \App\Db::instance();
        $res = $db->queryRaw($sql, array('ambulance' => $this->ambulance ));
        $f = (int)$res[0]['count'] + $this->mzstacionar->mzstacionar_3_1;
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
        $sitestat = $this->getStatPerYes('row3');
        $count_true = $this->mzstacionar->mzstacionar_4_1 + $this->mzstacionar->mzstacionar_5_1 + $this->mzstacionar->mzstacionar_6_1 + $this->mzstacionar->mzstacionar_7_1 + $this->mzstacionar->mzstacionar_8_1 + $this->mzstacionar->mzstacionar_9_1;
        $count_false = this->mzstacionar->mzstacionar_4_2 + $this->mzstacionar->mzstacionar_5_2 + $this->mzstacionar->mzstacionar_6_2 + $this->mzstacionar->mzstacionar_7_2 + $this->mzstacionar->mzstacionar_8_2 + $this->mzstacionar->mzstacionar_9_2;

        $mzstat = new Stat($count_true,$count_false);
        $stat = $this->getStatPerYES_new($sitestat,$mzstat);
        $stat->points = $this->getPointsFromPercentDefault($stat->getPercent());
        return $stat;
    }

    public function get_4_1()
    {
        $sitestat = $this->getStatPerYes('row19');
        $mzstat = new Stat($this->mzstacionar->mzstacionar_25_1,$this->mzstacionar->mzstacionar_25_2);
        $stat = $this->getStatPerYES_new($sitestat,$mzstat);
        $stat->points = $this->getPointsFromPercentDefault($stat->getPercent());
        return $stat;
    }
    public function get_4_2()
    {
        $sitestat = $this->getStatPerYes('row23');
        $mzstat = new Stat($this->mzstacionar->mzstacionar_29_1,$this->mzstacionar->mzstacionar_29_2);
        $stat = $this->getStatPerYES_new($sitestat,$mzstat);
        $stat->points = $this->getPointsFromPercentDefault($stat->getPercent());
        return $stat;
    }
    public function get_5_1()
    {
        $sitestat = $this->getStatPerYes('row27');
        $mzstat = new Stat($this->mzstacionar->mzstacionar_33_1,$this->mzstacionar->mzstacionar_33_2);
        $stat = $this->getStatPerYES_new($sitestat,$mzstat);
        $stat->points = $this->getPointsFromPercentDefault($stat->getPercent());
        return $stat;
    }
    public function get_5_2()
    {
        $sitestat = $this->getStatPerYes('row29');
        $mzstat = new Stat($this->mzstacionar->mzstacionar_35_1,$this->mzstacionar->mzstacionar_35_2);
        $stat = $this->getStatPerYES_new($sitestat,$mzstat);
        $stat->points = $this->getPointsFromPercentDefault($stat->getPercent());
        return $stat;
    }
    public function get_5_3()
    {
        $sitestat = $this->getStatPerYes('row28');
        $mzstat = new Stat($this->mzstacionar->mzstacionar_34_1,$this->mzstacionar->mzstacionar_34_2);
        $stat = $this->getStatPerYES_new($sitestat,$mzstat);
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