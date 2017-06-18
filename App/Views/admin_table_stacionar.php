<?php include_once 'header.php';?>
<?php include_once 'menu.php';?>
<div class="container-fluid">
    <table class="table table-bordered">
      <thead class="thead-inverse">
        <tr>
          <th colspan="6">1. пустые ячейки анкеты в расчете НЕ УЧИТЫВАТЬ<br/>2. строки по одинаковым МО всех анкет (Сайта ДЗ КО, бумажные и МЗ РФ) считать вместе, ЗНАЧЕНИЯ ЗАПИСЫВАТЬ ОДНОЙ СТРОКОЙ
          </th>
          <th colspan="6">открытость и доступность</th>
          <th colspan="12">комфортность</th>
          <th colspan="3"></th>
          <th colspan="16">время ожидания</th>
          <th colspan="2"></th>
          <th colspan="6">доброжелательноть и компетентность</th>
          <th colspan="9">удовлетворенность</th>
          <th colspan="59"></th>
        </tr>
        <tr>
          <th rowspan="3">№ п/п</th>
          <th rowspan="2">Лечебное учреждение</th>
          <th rowspan="2">Год</th>
          <th rowspan="2">Количество респондентов</th>
          <th colspan="2">Госпитализация была</th>
          <th colspan="3">Удовлетворены ли Вы качеством и полнотой информации о работе МО и порядке предоставления мед.услуг, доступной в помещениях медицинской организации (стенды, инфоматы и др.)?</th>
          <th colspan="3">Удовлетворены ли Вы качеством и полнотой информации о работе МО и порядке предоставления мед.услуг, доступной на официальном сайте МО?</th>
          <th colspan="3">Вы удовлетворены условиями пребывания в медицинской организации?</th>
          <th colspan="3">Удовлетворены ли Вы питанием во время пребывания в медицинской организации?</th>
          <th colspan="3">Возникала ли у Вас во время пребывания в стационаре необходимость оплачивать назначенные диагностические исследования за свой счет?</th>
          <th colspan="3">Возникала ли у Вас во время пребывания в стационаре необходимость оплачивать назначенные лекарственные средства за свой счет?</th>
          <th colspan="3">Имеете ли Вы установленную группу ограничения трудоспособности?</th>
          <th colspan="6">Сколько времени Вы ожидали в приемном отделении?</th>
          <th colspan="7">Срок ожидания плановой госпитализации с момента получения направления на плановую госпитализацию?</th>
          <th colspan="3">Вы были госпитализированы в назначенный срок?</th>
          <th colspan="2">Вы удовлетворены условиями пребывания в приемном отделении?</th>
          <th colspan="3">Вы удовлетворены обслуживанием (доброжелательность, вежливость) у врачей-специалистов?</th>
          <th colspan="3">Удовлетворены ли Вы компетентностью врачей-специалистов?</th>
          <th colspan="3">Вы удовлетворены оказанными услугами в медицинской организации?</th>
          <th colspan="3">Рекомендовали бы Вы данную медицинскую организацию для получения медицинской помощи?</th>
          <th colspan="3">Удовлетворены ли Вы действиями персонала медицинской организации по уходу?</th>
          <th colspan="3">Перед госпитализацией Вы заходили на официальный сайт МО?</th>
          <th colspan="3">При обращении в МО Вы обращались к информации, размещенной в помещениях МО?</th>
          <th colspan="4">В каком режиме стационара Вы проходили лечение?</th>
          <th colspan="3">Вы были госпитализированы?</th>
          <th colspan="2">Оставляли ли Вы комментарий о качестве обслуживания в медицинской организации и о медицинских работниках этой организации в социальных сетях?</th>
          <th colspan="2">Вы благодарили персонал медицинской организации за оказанные Вам медицинские услуги?</th>
          <th colspan="2">МО оборудована для лиц с ограниченными возможностями?</th>
          <th colspan="4">Какую группу ограничения трудоспособности Вы имеете?</th>
          <th colspan="2">Вы удовлетворены отношением персонала во время пребывания в приемном отделении (доброжелательность, вежливость)?</th>
          <th colspan="5">Что не удовлетворяет в условиях пребывания в приемном отделении?</th>
          <th colspan="9">Укажите что именно отсутствует (для лиц с ограниченными возможностями)?</th>
          <th colspan="3">Необходимость оплачивать ЛС и ДИ?</th>
          <th colspan="4">Что именно не удовлетворило в компетентности МР?</th>
          <th colspan="4">Что не удовлетворяет в условиях пребывания в МО?</th>
          <th colspan="2">Характеристика оставленного комментария</th>
          <th colspan="2">Кто был инициатором дарения?</th>
          <th colspan="5">Форма благодарения</th>
        </tr>
        <tr>
          <th>экстренная</th>
          <th>плановая</th>
          <th colspan="2">да (% от обращавшихся к информации в МО)</th>
          <th>нет</th>
          <th colspan="2">да (% от заходивших на сайт)</th>
          <th>нет</th>
          <th colspan="2">да</th>
          <th>нет</th>
          <th colspan="2">да (% от круглосуточного пребывания)</th>
          <th>нет</th>
          <th colspan="2">да</th>
          <th>нет</th>
          <th colspan="2">да</th>
          <th>нет</th>
          <th colspan="2">да</th>
          <th>нет</th>
          <th>90 мин и более</th>
          <th>до 90 мин</th>
          <th>до 60 мин</th>
          <th>до 45 мин</th>
          <th>до 30 мин</th>
          <th>Средний срок, мин</th>
          <th>30 к.дн. и более</th>
          <th>29 к.дн.</th>
          <th>28 к.дн.</th>
          <th>27 к.дн.</th>
          <th>15 к.дн.</th>
          <th>менее 15 к.дн.</th>
          <th>Средний срок, дн</th>
          <th colspan="2">да</th>
          <th>нет</th>
          <th>да</th>
          <th>нет</th>
          <th colspan="2">да</th>
          <th>нет</th>
          <th colspan="2">да</th>
          <th>нет</th>
          <th colspan="2">да</th>
          <th>нет</th>
          <th colspan="2">да</th>
          <th>нет</th>
          <th colspan="2">да</th>
          <th>нет</th>
          <th colspan="2">нет</th>
          <th>да</th>
          <th colspan="2">нет</th>
          <th>да</th>
          <th colspan="2">дневного</th>
          <th colspan="2">круглосуточного</th>
          <th>за счет ОМС</th>
          <th>засчет ДМС</th>
          <th>на платной основе</th>
          <th>нет</th>
          <th>да</th>
          <th>нет</th>
          <th>да</th>
          <th>да</th>
          <th>нет</th>
          <th>I</th>
          <th>II</th>
          <th>III</th>
          <th>ребенок-инвалид</th>
          <th>да</th>
          <th>нет</th>
          <th>отсутствие свободных мест ожидания</th>
          <th>состояние гардероба</th>
          <th>состояние туалета</th>
          <th>отсутствие питьевой воды</th>
          <th>санитарные условия</th>
          <th>отсутствие выделенного места стоянки авто для инвалидов</th>
          <th>отсутствие пандусов, поручней</th>
          <th>отсутствие подъемных платформ (аппарелей)</th>
          <th>отсутствие адаптированных лифтов</th>
          <th>отсутствие сменных кресел-колясок</th>
          <th>отсутствие информационных бегущих строк и тд.</th>
          <th>отсутствие информации шрифтом Брайля</th>
          <th>отсутствие доступных санитарно-гигиенических помещений</th>
          <th>отсутствие сопровождающих работников</th>
          <th>для уточнения диагноза</th>
          <th>с целью сокращения срока лечения</th>
          <th>приобретение расходных материалов</th>
          <th>не разъяснили информацию о состоянии здоровья</th>
          <th>не дали рекомендации по диагностике, лечению и реабилитации</th>
          <th>не дали выписку</th>
          <th>другое</th>
          <th>уборка помещений</th>
          <th>освещение, температурный режим</th>
          <th>МО требуется ремонт</th>
          <th>в МО старая мебель</th>
          <th>положительный</th>
          <th>отрицательный</th>
          <th>я сам (а)</th>
          <th>персонал МО</th>
          <th>письменная благодарность (в журнале, на сайте)</th>
          <th>цветы</th>
          <th>подарки</th>
          <th>услуги</th>
          <th>деньги</th>
        </tr>
        <tr>
          <th>№ показателя по пр МЗ 787н</th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th colspan="3">1.4</th>
          <th colspan="3">1.5</th>
          <th colspan="3">2.1</th>
          <th colspan="3">2.2</th>
          <th colspan="3">2.3</th>
          <th colspan="3">2.4</th>
          <th colspan="3">2.5 (% удовлетворенных 2.1)</th>
          <th colspan="6">3.1</th>
          <th colspan="6">3.2</th>
          <th></th>
          <th colspan="3">3.3 (от плановой госпитализации)</th>
          <th colspan="2"></th>
          <th colspan="3">4.1</th>
          <th colspan="3">4.2</th>
          <th colspan="3">5.1</th>
          <th colspan="3">5.2</th>
          <th colspan="3">5.3</th>
          <th colspan="3"></th>
          <th colspan="3"></th>
          <th colspan="4"></th>
          <th></th>
          <th colspan="2"></th>
          <th colspan="2"></th>
          <th colspan="2"></th>
          <th colspan="2"></th>
          <th colspan="4"></th>
          <th></th>
          <th></th>
          <th colspan="5"></th>
          <th colspan="9"></th>
          <th colspan="3"></th>
          <th colspan="4"></th>
          <th colspan="4"></th>
          <th colspan="2"></th>
          <th colspan="2"></th>
          <th colspan="5"></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($ambulances as $ambulance) : ?>
          <?php if ($ambulance->type == 'stacionar') : ?>
            <tr>
              <td><?php echo $ambulance->id; ?></td>
              <td><?php echo $ambulance->name; ?></td>
              <td>2017</td>
              <td><?php echo $ambulance->stacionar->getCountByType('Сайт'); ?>+<?php echo $ambulance->stacionar->getCountByType('Вручную'); ?>+<?php echo $ambulance->stacionar->getCountByType('mz'); ?>=<?php echo $ambulance->stacionar->getCount(); ?></td>
              <td><?php echo $ambulance->stacionar->getHospitalExt()+$ambulance->stacionarmz->getRawData('02_2'); ?></td>
              <td><?php echo $ambulance->stacionar->getHospitalPlan()+$ambulance->stacionarmz->getRawData('02_1'); ?></td>
              <td><?php echo $ambulance->stacionar->get_1_4()->count_true; ?></td>
              <td><?php echo $ambulance->stacionar->get_1_4()->getPercent(); ?>%</td>
              <td><?php echo $ambulance->stacionar->get_1_4()->count_false; ?></td>
              <td><?php echo $ambulance->stacionar->get_1_5()->count_true; ?></td>
              <td><?php echo $ambulance->stacionar->get_1_5()->getPercent(); ?>%</td>
              <td><?php echo $ambulance->stacionar->get_1_5()->count_false; ?></td>
              <td><?php echo $ambulance->stacionar->get_2_1()->count_true; ?></td>
              <td><?php echo $ambulance->stacionar->get_2_1()->getPercent(); ?>%</td>
              <td><?php echo $ambulance->stacionar->get_2_1()->count_false; ?></td>
              <td><?php echo $ambulance->stacionar->get_2_2()->count_true; ?></td>
              <td><?php echo $ambulance->stacionar->get_2_2()->getPercent(); ?>%</td>
              <td><?php echo $ambulance->stacionar->get_2_2()->count_false; ?></td>
              <td><?php echo $ambulance->stacionar->get_2_3()->count_true; ?></td>
              <td><?php echo $ambulance->stacionar->get_2_3()->getPercent(); ?>%</td>
              <td><?php echo $ambulance->stacionar->get_2_3()->count_false; ?></td>
              <td><?php echo $ambulance->stacionar->get_2_4()->count_true; ?></td>
              <td><?php echo $ambulance->stacionar->get_2_4()->getPercent(); ?>%</td>
              <td><?php echo $ambulance->stacionar->get_2_4()->count_false; ?></td>
              <td><?php echo $ambulance->stacionar->get_2_5()->count_true; ?></td>
              <td><?php echo $ambulance->stacionar->get_2_5()->getPercent(); ?>%</td>
              <td><?php echo $ambulance->stacionar->get_2_5()->count_false; ?></td>
              <?php foreach ($ambulance->stacionar->get_3_1_value() as $value) : ?>
                <td><?php echo $value; ?></td>
              <?php endforeach; ?>
              <?php foreach ($ambulance->stacionar->get_3_2_value() as $value) : ?>
                <td><?php echo $value; ?></td>
              <?php endforeach; ?>
              <td><?php echo $ambulance->stacionar->get_3_3()->count_true; ?></td>
              <td><?php echo $ambulance->stacionar->get_3_3()->getPercent(); ?>%</td>
              <td><?php echo $ambulance->stacionar->get_3_3()->count_false; ?></td>
              <td><?php echo $ambulance->stacionar->get_MZ10()->count_true; ?></td>
              <td><?php echo $ambulance->stacionar->get_MZ10()->count_false; ?></td>
              <td><?php echo $ambulance->stacionar->get_4_1()->count_true; ?></td>
              <td><?php echo $ambulance->stacionar->get_4_1()->getPercent(); ?>%</td>
              <td><?php echo $ambulance->stacionar->get_4_1()->count_false; ?></td>
              <td><?php echo $ambulance->stacionar->get_4_2()->count_true; ?></td>
              <td><?php echo $ambulance->stacionar->get_4_2()->getPercent(); ?>%</td>
              <td><?php echo $ambulance->stacionar->get_4_2()->count_false; ?></td>
              <td><?php echo $ambulance->stacionar->get_5_1()->count_true; ?></td>
              <td><?php echo $ambulance->stacionar->get_5_1()->getPercent(); ?>%</td>
              <td><?php echo $ambulance->stacionar->get_5_1()->count_false; ?></td>
              <td><?php echo $ambulance->stacionar->get_5_2()->count_true; ?></td>
              <td><?php echo $ambulance->stacionar->get_5_2()->getPercent(); ?>%</td>
              <td><?php echo $ambulance->stacionar->get_5_2()->count_false; ?></td>
              <td><?php echo $ambulance->stacionar->get_5_3()->count_true; ?></td>
              <td><?php echo $ambulance->stacionar->get_5_3()->getPercent(); ?>%</td>
              <td><?php echo $ambulance->stacionar->get_5_3()->count_false; ?></td>
              <td><?php echo $ambulance->stacionar->get_MZ19()->count_false; ?></td>
              <td><?php echo 100-$ambulance->stacionar->get_MZ10()->getPercent(); ?>%</td>
              <td><?php echo $ambulance->stacionar->get_MZ10()->count_true; ?></td>
              <td><?php echo $ambulance->stacionar->get_MZ21()->count_false; ?></td>
              <td><?php echo 100-$ambulance->stacionar->get_MZ21()->getPercent(); ?>%</td>
              <td><?php echo $ambulance->stacionar->get_MZ21()->count_true; ?></td>
              <td><?php echo $ambulance->stacionar->get_MZ23()->count_false; ?></td>
              <td><?php echo 100-$ambulance->stacionar->get_MZ23()->getPercent(); ?>%</td>
              <td><?php echo $ambulance->stacionar->get_MZ23()->count_true; ?></td>
              <td><?php echo $ambulance->stacionar->get_MZ23()->getPercent(); ?>%</td>
              <?php foreach ($ambulance->stacionar->get_MZ14() as $value) : ?>
                <td><?php echo $value; ?></td>
              <?php endforeach; ?>
              <td><?php echo $ambulance->stacionar->get_MZ36()->count_false; ?></td>
              <td><?php echo $ambulance->stacionar->get_MZ36()->count_true; ?></td>
              <td><?php echo $ambulance->stacionar->get_MZ38()->count_false; ?></td>
              <td><?php echo $ambulance->stacionar->get_MZ38()->count_true; ?></td>
              <td><?php echo $ambulance->stacionar->get_MZ17()->count_true; ?></td>
              <td><?php echo $ambulance->stacionar->get_MZ17()->count_false; ?></td>
              <?php foreach ($ambulance->stacionar->get_MZ16() as $value) : ?>
                <td><?php echo $value; ?></td>
              <?php endforeach; ?>
              <td><?php echo $ambulance->stacionar->get_MZ13()->count_true; ?></td>
              <td><?php echo $ambulance->stacionar->get_MZ13()->count_false; ?></td>
              <?php foreach ($ambulance->stacionar->get_MZ11() as $value) : ?>
                <td><?php echo $value; ?></td>
              <?php endforeach; ?>
              <?php foreach ($ambulance->stacionar->get_MZ18() as $value) : ?>
                <td><?php echo $value; ?></td>
              <?php endforeach; ?>
              <?php foreach ($ambulance->stacionar->get_MZ28() as $value) : ?>
                <td><?php echo $value; ?></td>
              <?php endforeach; ?>
              <?php foreach ($ambulance->stacionar->get_MZ30() as $value) : ?>
                <td><?php echo $value; ?></td>
              <?php endforeach; ?>
              <?php foreach ($ambulance->stacionar->get_MZ32() as $value) : ?>
                <td><?php echo $value; ?></td>
              <?php endforeach; ?>
              <?php foreach ($ambulance->stacionar->get_MZ27() as $value) : ?>
                <td><?php echo $value; ?></td>
              <?php endforeach; ?>
              <?php foreach ($ambulance->stacionar->get_MZ39() as $value) : ?>
                <td><?php echo $value; ?></td>
              <?php endforeach; ?>
              <?php foreach ($ambulance->stacionar->get_MZ40() as $value) : ?>
                <td><?php echo $value; ?></td>
              <?php endforeach; ?>
            </tr>
          <?php endif; ?>
        <?php endforeach; ?>
      </tbody>
    </table>
</div>
<?php include_once 'footer.php';?>
