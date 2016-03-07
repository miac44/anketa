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
        $this->anketa = \App\Models\Anketa::getByAction($_REQUEST['action']);
        $this->view->title .= $this->anketa->title;
        $this->view->anketa = $this->anketa;
        $this->view->regions = \App\Models\Region::findAll();
        $this->view->ambulances = \App\Models\Ambulance::findAll();
        $this->view->display(__DIR__ . '/../Views/anketa.php');
    }

    protected function actionSave()
    {
        $this->view->title .= ' Сохранить страницу';
        echo "<pre>";
        print_r($_REQUEST);
        echo "</pre>";
    }

}