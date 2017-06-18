<?php
namespace App\Controllers;
use App\View, App\Controller;
class Newadm extends Controller
{

    protected function beforeAction()
    {
        $this->view->admin_url= \App\Config::instance()->admin_url;
        $this->view->archive_url= \App\Config::instance()->archive_url;
    }
    protected function actionIndex()
    {
        $this->view->title .= ' Админка';
        $this->view->display(__DIR__ . '/../Views/Admin/admin.php');
    }

    protected function actionArchive()
    {
    	$this->view->filenames= \App\Config::instance()->filenames;
    	$this->view->dirlist = \App\Fs::DirTree(\App\Config::instance()->archive_dir, '*.html');
        $this->view->display(__DIR__ . '/../Views/Admin/archive.php');
    }

    protected function actionViewArchive()
    {
        $this->view->year = $_REQUEST['year'];
        $this->view->file = $_REQUEST['file'] . '.html';
        $this->view->docname = \App\Config::instance()->filenames[$this->view->file];
        $this->view->display(\App\Config::instance()->archive_dir . '/' . $this->view->year . '/' . $this->view->file);
    }
	
}
