<?php
namespace App\Controllers;
use App\View, App\Controller;
class Administrator extends Controller
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

    protected function actionEnter_data()
    {
        if (!isset($_REQUEST['id'])){
            $this->view->title .= ' Ввод данных';
            $this->view->ambulances = \App\Models\Ambulance::findAll();
            $this->view->display(__DIR__ . '/../Views/admin_enter_data.php');
        } else {
            $this->view->ambulance = \App\Models\Ambulance::findById($_REQUEST['id']);
            $this->view->id = $_REQUEST['id'];
            $this->view->title .= " Ввод данных - " . $this->view->ambulance->name;
            $this->view->mzstacionar = \App\Models\MZstacionar::findById($_REQUEST['id']);
            $this->view->mzstacionar_textdata = \App\Models\MZstacionar::textData();
            $this->view->mzambulatoria = \App\Models\MZambulatoria::findById($_REQUEST['id']);
            $this->view->mzambulatoria_textdata = \App\Models\MZambulatoria::textData();
            $this->view->display(__DIR__ . '/../Views/admin_enter_data_by_id.php');
        }
    }

    protected function actionSavedata()
    {
        if ($_REQUEST['class']=="MZambulatoria"){
            $data = new \App\Models\MZambulatoria();    
            $exist = \App\Models\MZambulatoria::findById($_REQUEST['id']);
        } else {
            $data = new \App\Models\MZstacionar();    
            $exist = \App\Models\MZstacionar::findById($_REQUEST['id']);
        }
        foreach ($_REQUEST as $k => $v) {
            if ($k != "class") $data->$k = (int)$v;
        }
        if (!$exist){
            $data->insert();
        } else {
            $data->update();
        }
        $this->view->message = "Данные записаны";
        $this->view->linktext = "Вернуться к МО";
        $this->view->link = "/administrator/enter_data/?id=" . $_REQUEST['id'];
        $this->view->display(__DIR__ . '/../Views/ok.php');

    }

    protected function actionIntermediateForm()
    {
        $this->view->display(__DIR__ . '/../Views/admin_intermediateform.php');
    }
}
