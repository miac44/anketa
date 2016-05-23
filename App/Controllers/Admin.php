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
        $this->view->display(__DIR__ . '/../Views/admin.php');
    }
}