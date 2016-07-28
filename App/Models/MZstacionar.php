<?php

namespace App\Models;

use App\Model;


class MZstacionar extends Model
{

    const TABLE = 'MZstacionar';

    public $id;
    public $count;
//    public $mzstacionar_01;
    public $mzstacionar_02;
    public $mzstacionar_03;
    public $mzstacionar_04;
    public $mzstacionar_05;
    public $mzstacionar_06;
    public $mzstacionar_07;
    public $mzstacionar_08;
    public $mzstacionar_09;
    public $mzstacionar_10;
    public $mzstacionar_11;
    public $mzstacionar_12;
    public $mzstacionar_13;
    public $mzstacionar_14;
    public $mzstacionar_15;
    public $mzstacionar_16;
    public $mzstacionar_17;
    public $mzstacionar_18;
    public $mzstacionar_19;
    public $mzstacionar_20;
    public $mzstacionar_21;
    public $mzstacionar_22;
    public $mzstacionar_23;
    public $mzstacionar_24;
    public $mzstacionar_25;
    public $mzstacionar_26;
    public $mzstacionar_27;
    public $mzstacionar_28;
    public $mzstacionar_29;
    public $mzstacionar_30;
    public $mzstacionar_31;
    public $mzstacionar_32;
    public $mzstacionar_33;
    public $mzstacionar_34;
    public $mzstacionar_35;
    public $mzstacionar_36;
    public $mzstacionar_37;
    public $mzstacionar_38;
    public $mzstacionar_39;
    public $mzstacionar_40;

    static public function textData()
    {
        $textdata = [];
        $textdata['count'] = 'Количество';
//        $textdata['mzstacionar_01'] = '1. Месяц и год обращения в данную медицинскую организацию';
        $textdata['mzstacionar_02'] = '2. Госпитализация была:';
        $textdata['mzstacionar_03'] = '3. Срок ожидания плановой госпитализации с момента получения направления на плановую госпитализацию?';
        $textdata['mzstacionar_04'] = '4. Вы были госпитализированы в назначенный срок?';
        $textdata['mzstacionar_05'] = '5. Вы были госпитализированы в назначенный срок?';
        $textdata['mzstacionar_06'] = '6. Вы были госпитализированы в назначенный срок?';
        $textdata['mzstacionar_07'] = '7. Вы были госпитализированы в назначенный срок?';
        $textdata['mzstacionar_08'] = '8. Вы были госпитализированы в назначенный срок?';
        $textdata['mzstacionar_09'] = '9. Вы были госпитализированы в назначенный срок?';
        $textdata['mzstacionar_10'] = '10. Вы удовлетворены условиями пребывания в приемном отделении?';
        $textdata['mzstacionar_11'] = '11. Что не удовлетворяет?';
        $textdata['mzstacionar_12'] = '12. Сколько  времени Вы ожидали в приемном отделении? ';
        $textdata['mzstacionar_13'] = '13. Вы удовлетворены отношением персонала во время пребывания в приемном отделении (доброжелательность, вежливость)?';
        $textdata['mzstacionar_14'] = '14. Вы были госпитализированы:';
        $textdata['mzstacionar_15'] = '15. Имеете ли Вы установленную группу ограничения трудоспособности?';
        $textdata['mzstacionar_16'] = '16. Какую группу ограничения трудоспособности Вы имеете?';
        $textdata['mzstacionar_17'] = '17. Медицинская организация  оборудована для лиц  с ограниченными возможностями? ';
        $textdata['mzstacionar_18'] = '18. Пожалуйста, укажите что именно отсутствует';
        $textdata['mzstacionar_19'] = '19. Перед госпитализацией Вы заходили на официальный сайт медицинской организации?';
        $textdata['mzstacionar_20'] = '20. Удовлетворены ли Вы качеством и полнотой информации о работе медицинской организации и порядке предоставления медицинских услуг, доступной на официальном сайте медицинской организации?';
        $textdata['mzstacionar_21'] = '21. При обращении в медицинскую организацию Вы обращались к информации, размещенной в помещениях медицинской организации (стенды, инфоматы и др.)?';
        $textdata['mzstacionar_22'] = '22. Удовлетворены ли Вы качеством и полнотой информации о работе  медицинской организации и порядке предоставления медицинских услуг, доступной в помещениях медицинской организации? ';
        $textdata['mzstacionar_23'] = '23. В  каком режиме стационара Вы проходили лечение?';
        $textdata['mzstacionar_24'] = '24. Удовлетворены ли Вы питанием во время пребывания в медицинской организации?';
        $textdata['mzstacionar_25'] = '25. Вы удовлетворены отношением персонала во время пребывания в отделении (доброжелательность, вежливость)?';
        $textdata['mzstacionar_26'] = '26. Возникала ли у Вас во время пребывания в стационаре необходимость оплачивать назначенные лекарственные средства  за свой счет?';
        $textdata['mzstacionar_27'] = '27. Возникала ли у Вас во время пребывания в стационаре  необходимость оплачивать  назначенные диагностические исследования  за свой счет?';
        $textdata['mzstacionar_28'] = '28. Необходимость:';
        $textdata['mzstacionar_29'] = '29. Удовлетворены ли Вы компетентностью медицинских работников  медицинской организации?';
        $textdata['mzstacionar_30'] = '30. Что не удовлетворяет?';
        $textdata['mzstacionar_31'] = '31. Удовлетворены ли Вы условиями пребывания в медицинской организации?';
        $textdata['mzstacionar_32'] = '32. Что не удовлетворяет?';
        $textdata['mzstacionar_33'] = '33. Удовлетворены ли Вы оказанными услугами в медицинской организации?';
        $textdata['mzstacionar_34'] = '34. Удовлетворены ли Вы действиями персонала  медицинской организации по уходу?';
        $textdata['mzstacionar_35'] = '35. Рекомендовали бы Вы данную медицинскую организацию для получения медицинской помощи?';
        $textdata['mzstacionar_36'] = '36. Оставляли ли Вы комментарий о качестве обслуживания в медицинской организации и о медицинских работниках этой организации в социальных сетях?';
        $textdata['mzstacionar_37'] = '37. Характеристика комментария';
        $textdata['mzstacionar_38'] = '38. Вы благодарили персонал медицинской организации за оказанные Вам медицинские услуги?';
        $textdata['mzstacionar_39'] = '39. Кто был инициатором благодарения?';
        $textdata['mzstacionar_40'] = '40. Форма благодарения:';
        return $textdata;

    }
}