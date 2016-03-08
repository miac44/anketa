<?php
namespace App\Controllers;
use App\View, App\Controller;
class Anketa extends Controller
{

    protected function beforeAction()
    {
    }
    protected function actionIndex()
    {
        $this->view->title .= ' Главная страница';
        $this->view->ankets = \App\Models\Anketa::findAll();
        $this->view->display(__DIR__ . '/../Views/index.php');
    }
    protected function actionView()
    {
        if (!$this->anketa = \App\Models\Anketa::getByAction($_REQUEST['action'])){
            throw new \App\Exceptions\DBException('Данной анкеты нет в базе');
        };
        $this->view->title .= $this->anketa->title;
        $this->view->anketa = $this->anketa;
        $this->view->regions = \App\Models\Region::findAll();
        $this->view->ambulances = \App\Models\Ambulance::findAll();
        $this->view->display(__DIR__ . '/../Views/anketa.php');
    }

    protected function actionSave()
    {
        if (!$this->anketa = \App\Models\Anketa::getByAction($_REQUEST['action'])){
            throw new \App\Exceptions\DBException('Данной анкеты нет в базе');
        };
        $this->view->title .= ' Сохранение анкеты';
        $ip = $_SERVER['REMOTE_ADDR'];
        $this->view->errors = "";

        //TODO: Поправить для общего случая. Пока затычка

        if (empty($_REQUEST['region'])){
            $this->view->errors .= "<p>Район</p>";
        }
        if (empty($_REQUEST['ambulance'])){
            $this->view->errors .= "<p>Медицинское учреждение</p>";
        }
        if (empty($_REQUEST['month'])){
            $this->view->errors .= "<p>Месяц посещения</p>";
        }
        if (empty($_REQUEST['year'])){
            $this->view->errors .= "<p>Год посещения</p>";
        }

        foreach ($this->anketa->elements as $element) {
            if (!array_key_exists($element->id,$_REQUEST[$this->anketa->action]) && $element->required){
                $this->view->errors .= "<p>" . $element->title . "</p>";
            }
        }

        if ($this->view->errors != ''){
            $this->view->display(__DIR__ . '/../Views/anketa_need_required.php');
        }

        echo "<pre>";
        print_r($_REQUEST);
        echo "</pre>";
    }

}