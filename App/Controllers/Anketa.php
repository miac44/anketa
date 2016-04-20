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
        foreach($this->view->ankets as $k=>$v){
            $this->view->ankets[$k]->count = \App\Models\Anketa::getCountValues('anketa_' . $this->view->ankets[$k]->action)[0]['count'];
        }
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
        $this->view->errors = "";
        $values = array(
            'ip' => $_SERVER['REMOTE_ADDR'],
            'region' => $_REQUEST['region'],
            'ambulance' => $_REQUEST['ambulance'],
            'month' => $_REQUEST['month'],
            'year' => $_REQUEST['year'],
        );
        if (isset($_REQUEST['type'])){
            $values['type'] = 'Вручную';
        }

        foreach($_REQUEST[$this->anketa->action] as $k=>$v){
            if(count($v)>1){
                $values['row'.$k] = implode(', ', $v);
            } else {
                $values['row'.$k] = $v[0];
            }
        }

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
        if (empty($_REQUEST['year'])) {
            $this->view->errors .= "<p>Год посещения</p>";
        }
        foreach ($this->anketa->elements as $element) {
            if (!array_key_exists($element->id,$_REQUEST[$this->anketa->action]) && $element->required){
                $this->view->errors .= "<p>" . $element->title . "</p>";
            }
        }

        if ($this->view->errors != ''){
            $this->view->display(__DIR__ . '/../Views/anketa_need_required.php');
        } else {
            \App\Models\Anketa::saveValues('anketa_' . $this->anketa->action, $values);
            $csvfile = new \App\CSV($this->anketa->action);
            $csvfile->export();
            $this->view->display(__DIR__ . '/../Views/anketa_saved.php');
        }

    }

}