<?php
namespace App;

class CSV
{
    public $csvfile;
    public $action;

    public function __construct($action)
    {
        $this->csvfile = __DIR__ . '/../export/' . $action . '.csv';
        $this->action = $action;
    }

    public function export()
    {
        $content = 'id;ip;Регион;МО;месяц;год;';
        $anketa = \App\Models\Anketa::getByAction($this->action);
        $elements = \App\Models\Element::getElements($anketa->id);
        foreach ($elements as $element) {
            $content .= '"' . $element->title . '";';
        }
        $content .= 'Заполнено;';
        $content .= "\r\n";
        $sql = 'SELECT * FROM anketa_' . $this->action;
        $db = \App\Db::instance();
        $values = $db->queryRaw($sql);
        foreach ($values as $value) {
            foreach ($value as $v) {
                $content .= '"' . $v . '";';
            }
            $content .= "\r\n";
        }
        $content = iconv('UTF-8', 'Windows-1251', $content);
        return file_put_contents($this->csvfile, $content);
    }

}