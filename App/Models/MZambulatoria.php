<?php

namespace App\Models;

use App\Model;


class MZambulatoria extends Model
{

    const TABLE = 'MZambulatoria';

    public $id;
    public $count;
//    public $mzambulatoria_01;
    public $mzambulatoria_02;
    public $mzambulatoria_03;
    public $mzambulatoria_04;
    public $mzambulatoria_05;
    public $mzambulatoria_06;
    public $mzambulatoria_07;
    public $mzambulatoria_08;
    public $mzambulatoria_09;
    public $mzambulatoria_10;
    public $mzambulatoria_11;
    public $mzambulatoria_12;
    public $mzambulatoria_13;
    public $mzambulatoria_14;
    public $mzambulatoria_15;
    public $mzambulatoria_16;
    public $mzambulatoria_17;
    public $mzambulatoria_18;
    public $mzambulatoria_19;
    public $mzambulatoria_20;
    public $mzambulatoria_21;
    public $mzambulatoria_22;
    public $mzambulatoria_23;
    public $mzambulatoria_24;
    public $mzambulatoria_25;
    public $mzambulatoria_26;
    public $mzambulatoria_27;
    public $mzambulatoria_28;
    public $mzambulatoria_29;
    public $mzambulatoria_30;
    public $mzambulatoria_31;
    public $mzambulatoria_32;
    public $mzambulatoria_33;
    public $mzambulatoria_34;
    public $mzambulatoria_35;
    public $mzambulatoria_36;
    public $mzambulatoria_37;
    public $mzambulatoria_38;
    public $mzambulatoria_39;
    public $mzambulatoria_40;
    public $mzambulatoria_41;
    public $mzambulatoria_42;
    public $mzambulatoria_43;
    public $mzambulatoria_44;
    public $mzambulatoria_45;
    public $mzambulatoria_46;
    public $mzambulatoria_47;
    public $mzambulatoria_48;
    public $mzambulatoria_49;
    public $mzambulatoria_50;
    public $mzambulatoria_51;
    public $mzambulatoria_52;
    public $mzambulatoria_53;
    public $mzambulatoria_54;
    public $mzambulatoria_55;
    public $mzambulatoria_56;
    public $mzambulatoria_57;
    public $mzambulatoria_58;
    public $mzambulatoria_59;
    public $mzambulatoria_60;
    public $mzambulatoria_61;
    public $mzambulatoria_62;
    public $mzambulatoria_63;
    public $mzambulatoria_64;

    static public function textData()
    {
        $textdata = [];
        $textdata['count'] = 'Количество';
//        $textdata['mzambulatoria_01'] = '1. Месяц и год обращения в данную медицинскую организацию';
        $textdata['mzambulatoria_02'] = '2. Вы обратились в медицинскую организацию?';
        $textdata['mzambulatoria_03'] = '3. Вы удовлетворены обслуживанием (доброжелательность, вежливость) у участкового терапевта?';
        $textdata['mzambulatoria_04'] = '4. Удовлетворены ли Вы компетентностью участкового терапевта?';
        $textdata['mzambulatoria_05'] = '5. Что именно Вас не удовлетворило?';
        $textdata['mzambulatoria_06'] = '6. Форма обращения';
        $textdata['mzambulatoria_07'] = '7. Время ожидания приема у врача, к которому Вы записались, с момента записи на прием?';
        $textdata['mzambulatoria_08'] = '8. Вы удовлетворены обслуживанием (доброжелательность, вежливость) у участкового педиатра?';
        $textdata['mzambulatoria_09'] = '9. Удовлетворены ли Вы компетентностью участкового педиатра?';
        $textdata['mzambulatoria_10'] = '10. Что именно Вас не удовлетворило?';
        $textdata['mzambulatoria_11'] = '11. Форма обращения';
        $textdata['mzambulatoria_12'] = '12. Время ожидания приема у врача, к которому Вы записались, с момента записи на прием?';
        $textdata['mzambulatoria_13'] = '13. Вы удовлетворены обслуживанием (доброжелательность, вежливость) у врача общей практики (семейного врача)?';
        $textdata['mzambulatoria_14'] = '14. Удовлетворены ли Вы компетентностью врача общей практики (семейного врача)?';
        $textdata['mzambulatoria_15'] = '15. Что именно Вас не удовлетворило?';
        $textdata['mzambulatoria_16'] = '16. Форма обращения';
        $textdata['mzambulatoria_17'] = '17. Время ожидания приема у врача, к которому Вы записались, с момента записи на прием?';
        $textdata['mzambulatoria_18'] = '18. Вы удовлетворены обслуживанием (доброжелательность,  вежливость) у врачей-специалистов (лор, хирург, невролог, офтальмолог, стоматолог, другие) ?';
        $textdata['mzambulatoria_19'] = '19. Удовлетворены ли Вы компетентностью врачей-специалистов (лор, хирург, невролог, офтальмолог, стоматолог, другие)?';
        $textdata['mzambulatoria_20'] = '20. Что именно Вас не удовлетворило?';
        $textdata['mzambulatoria_21'] = '21. Срок ожидания приема у врача, к которому Вы записались, с момента записи на прием?';
        $textdata['mzambulatoria_22'] = '22. Вы удовлетворены обслуживанием (доброжелательность,  вежливость) у врачей-специалистов (лор, хирург, невролог, офтальмолог, стоматолог, другие) ?';
        $textdata['mzambulatoria_23'] = '23. Удовлетворены ли Вы компетентностью врачей-специалистов (лор, хирург, невролог, офтальмолог, стоматолог, другие)?';
        $textdata['mzambulatoria_24'] = '24. Что именно Вас не удовлетворило?';
        $textdata['mzambulatoria_25'] = '25. Срок ожидания приема у врача, к которому Вы записались, с момента записи на прием?';
        $textdata['mzambulatoria_26'] = '26. При первом обращении в медицинскую организацию Вы сразу записались на прием к  врачу (получили талон с указанием времени приема  и  ФИО врача) (вызвали врача на дом)?';
        $textdata['mzambulatoria_27'] = '27. Вы записались на прием к врачу (вызвали врача на дом)?';
        $textdata['mzambulatoria_28'] = '28. По какой причине';
        $textdata['mzambulatoria_29'] = '29. Врач Вас принял во время, установленное по записи?';
        $textdata['mzambulatoria_30'] = '30. При обращении в медицинскую организацию Вы обращались к информации,  размещенной в помещениях медицинской организации (стенды, инфоматы и др.)?';
        $textdata['mzambulatoria_31'] = '31. Удовлетворены ли Вы качеством и полнотой информации о работе  медицинской  организации и порядке предоставления медицинских услуг, доступной в помещениях   медицинской организации?';
        $textdata['mzambulatoria_32'] = '32. Перед обращением в медицинскую организацию Вы заходили на официальный сайт медицинской организации?';
        $textdata['mzambulatoria_33'] = '33. Удовлетворены ли Вы качеством и полнотой информации о работе медицинской  организации и порядке предоставления медицинских услуг, доступной на официальном   сайте медицинской организации?';
        $textdata['mzambulatoria_34'] = '34. Вы удовлетворены условиями пребывания в медицинской организации?';
        $textdata['mzambulatoria_35'] = '35. Что не удовлетворяет?';
        $textdata['mzambulatoria_36'] = '36. Имеете ли Вы установленную группу ограничения трудоспособности?';
        $textdata['mzambulatoria_37'] = '37. Какую группу ограничения трудоспособности Вы имеете?';
        $textdata['mzambulatoria_38'] = '38. Медицинская организация  оборудована для лиц  с ограниченными возможностями?';
        $textdata['mzambulatoria_39'] = '39. Пожалуйста, укажите что именно отсутствует';
        $textdata['mzambulatoria_40'] = '40. Вы ожидали проведения диагностического  исследования (инструментального, лабораторного) с момента получения направления на диагностическое исследование?';
        $textdata['mzambulatoria_41'] = '41. Диагностическое исследование выполнено во время, установленное по записи?';
        $textdata['mzambulatoria_42'] = '42. Диагностическое исследование выполнено во время, установленное по записи?';
        $textdata['mzambulatoria_43'] = '43. Диагностическое исследование выполнено во время, установленное по записи?';
        $textdata['mzambulatoria_44'] = '44. Диагностическое исследование выполнено во время, установленное по записи?';
        $textdata['mzambulatoria_45'] = '45. Диагностическое исследование выполнено во время, установленное по записи?';
        $textdata['mzambulatoria_46'] = '46. Диагностическое исследование выполнено во время, установленное по записи?';
        $textdata['mzambulatoria_47'] = '47. Вы ожидали проведение диагностического  исследования (компьютерная томография, магнитно-резонансная томография, ангиография) с момента получения направления на диагностическое исследование?';
        $textdata['mzambulatoria_48'] = '48. Диагностическое исследование выполнено во время, установленное по записи?';
        $textdata['mzambulatoria_49'] = '49. Диагностическое исследование выполнено во время, установленное по записи?';
        $textdata['mzambulatoria_50'] = '50. Диагностическое исследование выполнено во время, установленное по записи?';
        $textdata['mzambulatoria_51'] = '51. Диагностическое исследование выполнено во время, установленное по записи?';
        $textdata['mzambulatoria_52'] = '52. Диагностическое исследование выполнено во время, установленное по записи?';
        $textdata['mzambulatoria_53'] = '53. Диагностическое исследование выполнено во время, установленное по записи?';
        $textdata['mzambulatoria_54'] = '54. Вы удовлетворены оказанными услугами в этой медицинской организации?';
        $textdata['mzambulatoria_55'] = '55. Рекомендовали бы Вы данную медицинскую организацию для получения медицинской  помощи?';
        $textdata['mzambulatoria_56'] = '56. Ваше обслуживание в медицинской организации?';
        $textdata['mzambulatoria_57'] = '57. Вы знаете своего участкового терапевта (педиатра, врача общей практики (семейного врача) (ФИО, график работы, № кабинета и  др.)?';
        $textdata['mzambulatoria_58'] = '58. Как часто Вы обращаетесь к участковому терапевту (педиатру, врачу общей практики (семейному врачу)?';
        $textdata['mzambulatoria_59'] = '59. Как часто Вы обращаетесь к врачам-специалистам (лор, хирург, невролог, офтальмолог, стоматолог и другие)?';
        $textdata['mzambulatoria_60'] = '60. Оставляли ли Вы комментарий о качестве обслуживания в медицинской организации и о  медицинских работниках этой организации в социальных сетях?';
        $textdata['mzambulatoria_61'] = '61. Характеристика комментария';
        $textdata['mzambulatoria_62'] = '62. Вы благодарили персонал медицинской организации за оказанные Вам медицинские  услуги?';
        $textdata['mzambulatoria_63'] = '63. Кто был инициатором благодарения?';
        $textdata['mzambulatoria_64'] = '64. Форма благодарения:';
        return $textdata;

    }
}