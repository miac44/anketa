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

    protected function actionEnterdata()
    {
        $this->view->title .= ' Ввод данных';
        $this->view->ambulances = \App\Models\Ambulance::findAll();
        $this->view->display(__DIR__ . '/../Views/admin_enterdata.php');
    }

    protected function actionEnterdata_stacionar()
    {
        $this->view->ambulance = \App\Models\Ambulance::findById($_REQUEST['id']);
        $this->view->id = $_REQUEST['id'];
        $this->view->title .= " Ввод данных - " . $this->view->ambulance->name;
        $this->view->mzstacionar = \App\Models\MZstacionar::findById($_REQUEST['id']);
        $this->view->mzstacionar_textquestion = \App\Models\MZstacionar::textQuestion();
        $this->view->mzstacionar_textvalue = \App\Models\MZstacionar::textValue();
        $this->view->display(__DIR__ . '/../Views/admin_enterdata_stacionar.php');
    }

    protected function actionEnterdata_ambulatoria()
    {
        $this->view->ambulance = \App\Models\Ambulance::findById($_REQUEST['id']);
        $this->view->id = $_REQUEST['id'];
        $this->view->title .= " Ввод данных - " . $this->view->ambulance->name;
        $this->view->mzambulatoria = \App\Models\MZambulatoria::findById($_REQUEST['id']);
        $this->view->mzambulatoria_textquestion = \App\Models\MZambulatoria::textQuestion();
        $this->view->mzambulatoria_textvalue = \App\Models\MZambulatoria::textValue();
        $this->view->display(__DIR__ . '/../Views/admin_enterdata_ambulatoria.php');
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
            $data->insertwithid();
        } else {
            $data->update();
        }
        $this->view->message = "Данные записаны";
        $this->view->linktext = "Вернуться к списку МО";
        $this->view->link = "/administrator/enterdata/";
        $this->view->display(__DIR__ . '/../Views/ok.php');

    }

    protected function actionIntermediateForm()
    {
        $this->view->display(__DIR__ . '/../Views/admin_intermediateform.php');
    }
}
