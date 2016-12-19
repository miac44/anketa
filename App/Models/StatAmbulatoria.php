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
        $sql = 'SELECT id FROM ambulances WHERE name=:ambulance';
        $db = \App\Db::instance();
        $res = $db->queryRaw($sql, array('ambulance' => $ambulance ));
        $this->id = $res[0]['id'];
        $this->mzambulatoria = \App\Models\MZambulatoria::findById($this->id);
        $this->countbytype['mz'] = (int)$this->mzambulatoria->count;

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

        $sitestat = $this->getStatPerYes('row50');
        $mzstat = new Stat($this->mzambulatoria->mzambulatoria_31_1,$this->mzambulatoria->mzambulatoria_31_2);
        $stat = $this->getStatPerYES_new($sitestat,$mzstat);
        $stat->points = $this->getPointsFromPercentDefault($stat->getPercent());
        return $stat;
    }

    public function get_1_5()
    {
        $sitestat = $this->getStatPerYes('row52');
        $mzstat = new Stat($this->mzambulatoria->mzambulatoria_33_1,$this->mzambulatoria->mzambulatoria_33_2);
        $stat = $this->getStatPerYES_new($sitestat,$mzstat);
        $stat->points = $this->getPointsFromPercentDefault($stat->getPercent());
        return $stat;
    }

    public function get_2_1()
    {
        $sitestat = $this->getStatPerYes('row45');
        $mzstat = new Stat($this->mzambulatoria->mzambulatoria_26_1,$this->mzambulatoria->mzambulatoria_26_2);
        $stat = $this->getStatPerYES_new($sitestat,$mzstat);
        $stat->points = $this->getPointsFromPercentDefault($stat->getPercent());
        return $stat;
    }

    public function get_2_2()
    {
        $row = 'row44';
        $sql = 'SELECT COUNT(*) as count FROM ' . static::TABLE . ' WHERE ambulance=:ambulance AND ' . $row . '="менее 7 календарных дней"';
        $db = \App\Db::instance();
        $res = $db->queryRaw($sql, array('ambulance' => $this->ambulance ));
        $a = (int)$res[0]['count'] + $this->mzambulatoria->mzambulatoria_21_6 + $this->mzambulatoria->mzambulatoria_25_6;
        $sql = 'SELECT COUNT(*) as count FROM ' . static::TABLE . ' WHERE ambulance=:ambulance AND ' . $row . '="7 календарных дней"';
        $db = \App\Db::instance();
        $res = $db->queryRaw($sql, array('ambulance' => $this->ambulance ));
        $b = (int)$res[0]['count'] + $this->mzambulatoria->mzambulatoria_21_5 + $this->mzambulatoria->mzambulatoria_25_5;
        $sql = 'SELECT COUNT(*) as count FROM ' . static::TABLE . ' WHERE ambulance=:ambulance AND ' . $row . '="10 календарных дней"';
        $db = \App\Db::instance();
        $res = $db->queryRaw($sql, array('ambulance' => $this->ambulance ));
        $c = (int)$res[0]['count'] + $this->mzambulatoria->mzambulatoria_21_4 + $this->mzambulatoria->mzambulatoria_25_4;
        $sql = 'SELECT COUNT(*) as count FROM ' . static::TABLE . ' WHERE ambulance=:ambulance AND ' . $row . '="12 календарных дней"';
        $db = \App\Db::instance();
        $res = $db->queryRaw($sql, array('ambulance' => $this->ambulance ));
        $d = (int)$res[0]['count'] + $this->mzambulatoria->mzambulatoria_21_3 + $this->mzambulatoria->mzambulatoria_25_3;
        $sql = 'SELECT COUNT(*) as count FROM ' . static::TABLE . ' WHERE ambulance=:ambulance AND ' . $row . '="13 календарных дней"';
        $db = \App\Db::instance();
        $res = $db->queryRaw($sql, array('ambulance' => $this->ambulance ));
        $e = (int)$res[0]['count'] + $this->mzambulatoria->mzambulatoria_21_2 + $this->mzambulatoria->mzambulatoria_25_2;
        $sql = 'SELECT COUNT(*) as count FROM ' . static::TABLE . ' WHERE ambulance=:ambulance AND ' . $row . '="14 календарных дней"';
        $db = \App\Db::instance();
        $res = $db->queryRaw($sql, array('ambulance' => $this->ambulance ));
        $f = (int)$res[0]['count'] + $this->mzambulatoria->mzambulatoria_21_1 + $this->mzambulatoria->mzambulatoria_25_1;
        if ($a+$b+$c+$d+$e+$f==0){
            $time = 99999;
        } else {
            $time = ($a * 6 + $b * 7 + $c * 10 + $d * 12 + $e * 13 + $f * 14) / ($a + $b + $c + $d + $e + $f);
        };
        $points = 0;
        if ($time<=10) $points++;
        if ($time<=9) $points++;
        if ($time<=8) $points++;
        if ($time<=7) $points++;
        if ($time<=5) $points++;
        $stat = new Stat();
        $stat->points = $points;
        return $stat;

    }

    public function get_2_3()
    {
        $stat = new Stat();
        $stat->points = 4;
        return $stat;
    }

    public function get_2_4()
    {
        $sitestat = $this->getStatPerYes('row53');
        $mzstat = new Stat($this->mzambulatoria->mzambulatoria_34_1,$this->mzambulatoria->mzambulatoria_34_2);
        $stat = $this->getStatPerYES_new($sitestat,$mzstat);
        $stat->points = $this->getPointsFromPercentDefault($stat->getPercent());
        return $stat;
    }

    public function get_2_5()
    {
        $all = $this->getStatPerYes('row53')->count_true+$this->mzambulatoria->mzambulatoria_34_1;
        $invalid = $this->getStatPerYes('row55')->count_true+$this->mzambulatoria->mzambulatoria_36_1;
        if ($all==0) {
            $percent = 0;
        } else {
            $percent = round(100/$all*$invalid);
        }
        $stat = new Stat();
        $stat->points = $this->getPointsFromPercentDefault($percent);
        return $stat;
    }

    public function get_3_1()
    {
        $row = 'row59';
        $sql = 'SELECT COUNT(*) as count FROM ' . static::TABLE . ' WHERE ambulance=:ambulance AND ' . $row . '="менее 7 календарных дней"';
        $db = \App\Db::instance();
        $res = $db->queryRaw($sql, array('ambulance' => $this->ambulance ));
        $a = (int)$res[0]['count']+$this->mzambulatoria->mzambulatoria_40_6;
        $sql = 'SELECT COUNT(*) as count FROM ' . static::TABLE . ' WHERE ambulance=:ambulance AND ' . $row . '="7 календарных дней"';
        $db = \App\Db::instance();
        $res = $db->queryRaw($sql, array('ambulance' => $this->ambulance ));
        $b = (int)$res[0]['count']+$this->mzambulatoria->mzambulatoria_40_5;
        $sql = 'SELECT COUNT(*) as count FROM ' . static::TABLE . ' WHERE ambulance=:ambulance AND ' . $row . '="10 календарных дней"';
        $db = \App\Db::instance();
        $res = $db->queryRaw($sql, array('ambulance' => $this->ambulance ));
        $c = (int)$res[0]['count']+$this->mzambulatoria->mzambulatoria_40_4;
        $sql = 'SELECT COUNT(*) as count FROM ' . static::TABLE . ' WHERE ambulance=:ambulance AND ' . $row . '="12 календарных дней"';
        $db = \App\Db::instance();
        $res = $db->queryRaw($sql, array('ambulance' => $this->ambulance ));
        $d = (int)$res[0]['count']+$this->mzambulatoria->mzambulatoria_40_3;
        $sql = 'SELECT COUNT(*) as count FROM ' . static::TABLE . ' WHERE ambulance=:ambulance AND ' . $row . '="13 календарных дней"';
        $db = \App\Db::instance();
        $res = $db->queryRaw($sql, array('ambulance' => $this->ambulance ));
        $e = (int)$res[0]['count']+$this->mzambulatoria->mzambulatoria_40_2;
        $sql = 'SELECT COUNT(*) as count FROM ' . static::TABLE . ' WHERE ambulance=:ambulance AND ' . $row . '="14 календарных дней"';
        $db = \App\Db::instance();
        $res = $db->queryRaw($sql, array('ambulance' => $this->ambulance ));
        $f = (int)$res[0]['count']+$this->mzambulatoria->mzambulatoria_40_1;
        if ($a+$b+$c+$d+$e+$f==0){
            $time = 99999;
        } else {
            $time = ($a * 6 + $b * 7 + $c * 10 + $d * 12 + $e * 13 + $f * 14) / ($a + $b + $c + $d + $e + $f);
        };
        $points = 0;
        if ($time<=10) $points++;
        if ($time<=9) $points++;
        if ($time<=8) $points++;
        if ($time<=7) $points++;
        if ($time<=5) $points++;
        $stat = new Stat();
        $stat->points = $points;
        return $stat;
    }
    public function get_3_2()
    {
        $sitestat = $this->getStatPerYes('row48');
        $mzstat = new Stat($this->mzambulatoria->mzambulatoria_29_1,$this->mzambulatoria->mzambulatoria_29_2);
        $stat = $this->getStatPerYES_new($sitestat,$mzstat);
        $stat->points = $this->getPointsFromPercentDefault($stat->getPercent());
        return $stat;
    }

    public function get_3_3()
    {
        $count_true = $this->mzambulatoria->mzambulatoria_41_1 + $this->mzambulatoria->mzambulatoria_42_1 + $this->mzambulatoria->mzambulatoria_43_1 + $this->mzambulatoria->mzambulatoria_44_1 + $this->mzambulatoria->mzambulatoria_45_1 + $this->mzambulatoria->mzambulatoria_46_1;
        $count_false = $this->mzambulatoria->mzambulatoria_41_2 + $this->mzambulatoria->mzambulatoria_42_2 + $this->mzambulatoria->mzambulatoria_43_2 + $this->mzambulatoria->mzambulatoria_44_2 + $this->mzambulatoria->mzambulatoria_45_2 + $this->mzambulatoria->mzambulatoria_46_2;
        $sitestat = $this->getStatPerYes('row60');
        $mzstat = new Stat($count_true, $count_false);
        $stat = $this->getStatPerYES_new($sitestat,$mzstat);
        $stat->points = $this->getPointsFromPercentDefault($stat->getPercent());
        return $stat;
    }

    public function get_4_1()
    {
        $count_true = $this->mzambulatoria->mzambulatoria_3_1 + $this->mzambulatoria->mzambulatoria_8_1 + $this->mzambulatoria->mzambulatoria_13_1 + $this->mzambulatoria->mzambulatoria_18_1 + $this->mzambulatoria->mzambulatoria_22_1;
        $count_false = $this->mzambulatoria->mzambulatoria_3_2 + $this->mzambulatoria->mzambulatoria_8_2 + $this->mzambulatoria->mzambulatoria_13_2 + $this->mzambulatoria->mzambulatoria_18_2 + $this->mzambulatoria->mzambulatoria_22_2;
        $sitestat = $this->getStatPerYes('row41');
        $mzstat = new Stat($count_true, $count_false);
        $stat = $this->getStatPerYES_new($sitestat,$mzstat);
        $stat->points = $this->getPointsFromPercentDefault($stat->getPercent());
        return $stat;
    }
    public function get_4_2()
    {
        $count_true = $this->mzambulatoria->mzambulatoria_4_1 + $this->mzambulatoria->mzambulatoria_9_1 + $this->mzambulatoria->mzambulatoria_14_1 + $this->mzambulatoria->mzambulatoria_19_1 + $this->mzambulatoria->mzambulatoria_23_1;
        $count_false = $this->mzambulatoria->mzambulatoria_4_2 + $this->mzambulatoria->mzambulatoria_9_2 + $this->mzambulatoria->mzambulatoria_14_2 + $this->mzambulatoria->mzambulatoria_19_2 + $this->mzambulatoria->mzambulatoria_23_2;
        $sitestat = $this->getStatPerYes('row42');
        $mzstat = new Stat($count_true, $count_false);
        $stat = $this->getStatPerYES_new($sitestat,$mzstat);        
        $stat->points = $this->getPointsFromPercentDefault($stat->getPercent());
        return $stat;
    }
    public function get_5_1()
    {
        $sitestat = $this->getStatPerYes('row63');
        $mzstat = new Stat($this->mzambulatoria->mzambulatoria_54_1,$this->mzambulatoria->mzambulatoria_54_2);
        $stat = $this->getStatPerYES_new($sitestat,$mzstat);

        $stat->points = $this->getPointsFromPercentDefault($stat->getPercent());
        return $stat;
    }
    public function get_5_2()
    {
        $sitestat = $this->getStatPerYes('row64');
        $mzstat = new Stat($this->mzambulatoria->mzambulatoria_55_1,$this->mzambulatoria->mzambulatoria_55_2);
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