<?php
namespace App\Controllers;
use App\View, App\Controller;
class Admin extends Controller
{

    protected function beforeAction()
    {
    }
    protected function actionIndex()
    {
        $this->view->title .= ' Админка';
        $this->view->ambulances = \App\Models\Ambulance::findAll();
        $this->view->display(__DIR__ . '/../Views/admin.php');
    }
    protected function actionStacionar()
    {
        $this->view->title .= ' Cвод(СТАЦИОНАР)';
        $this->view->ambulances = \App\Models\Ambulance::findAll();
        $this->view->display(__DIR__ . '/../Views/admin_stacionar.php');
    }

    protected function actionAmbulatoria()
    {
        $this->view->title .= ' Cвод(АМБУЛАТОРИЯ)';
        $this->view->ambulances = \App\Models\Ambulance::findAll();
        $this->view->display(__DIR__ . '/../Views/admin_ambulatoria.php');
    }

}
