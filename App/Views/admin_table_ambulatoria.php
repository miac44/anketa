<?php include_once 'header.php';?>
<?php include_once 'menu.php';?>
<div class="container-fluid">
    <table class="table table-bordered">
      <thead class="thead-inverse">
		<tr>
			<th colspan="7">1. пустые ячейки анкеты в расчете НЕ УЧИТЫВАТЬ<br/>2. строки по одинаковым МО всех анкет (Сайта ДЗ КО, бумажные и МЗ РФ) считать вместе, ЗНАЧЕНИЯ ЗАПИСЫВАТЬ ОДНОЙ СТРОКОЙ</th>
			<th colspan="6">открытость и доступность</th>
			<th colspan="13">комфортность</th>
			<th colspan="3"></th>
			<th colspan="14">время ожидания</th>
			<th colspan="6">доброжелательность и компетентность</th>
			<th colspan="6">удовлетворенность</th>
			<th colspan="86"></th>
		</tr>
		<tr>
			<th rowspan="3">№ п/п</th>
			<th rowspan="2">Лечебное учреждение</th>
			<th rowspan="2">Год</th>
			<th rowspan="2">Количество респондентов</th>
			<th colspan="3">Причина, по которой Вы обратились в медицинскую организацию?</th>
			<th colspan="3">Удовлетворены ли Вы качеством и полнотой информации о работе МО и порядке предоставления мед.услуг, доступной в помещениях медицинской организации (стенды, инфоматы и др.)?</th>
			<th colspan="3">Удовлетворены ли Вы качеством и полнотой информации о работе МО и порядке предоставления мед.услуг, доступной на официальном сайте МО?</th>
			<th colspan="3">При первом обращении в медицинскую организацию Вы сразу записались на прием к врачу (получили талон с указанием времени приема и ФИО врача)?</th>
			<th colspan="7">Срок ожидания приема у врача, к которому Вы записались, с момента записи на прием?</th>
			<th colspan="3">Вы удовлетворены условиями пребывания в медицинской организации?</th>
			<th colspan="3">Имеете ли Вы установленную группу ограничения трудоспособности?</th>
			<th colspan="8">Срок ожидания диагностического исследования (диагностические инструментальные и лабораторные исследования, МРТ) с момента получения направления на диагностическое исследование?</th>
			<th colspan="3">Врач Вас принял во время, установленное по записи?</th>
			<th colspan="3">Диагностическое исследование выполнено во время, установленное по записи?</th>
			<th colspan="3">Вы удовлетворены обслуживанием (доброжелательность, вежливость) у врачей-специалистов?</th>
			<th colspan="3">Удовлетворены ли Вы компетентностью врачей-специалистов?</th>
			<th colspan="3">Вы удовлетворены оказанными услугами в медицинской организации?</th>
			<th colspan="3">Рекомендовали бы Вы данную медицинскую организацию для получения медицинской помощи?</th>
			<th colspan="3">Ваше обслуживание в медицинской организации?</th>
			<th colspan="2">Вы знаете своего участкового терапевта (педиатра) (ФИО, график работы, N кабинета и др.)?</th>
			<th colspan="5">Как часто Вы обращаетесь к участковому терапевту (педиатру)?</th>
			<th colspan="5">Как часто Вы обращаетесь к узким специалистам (лор, хирург, невролог, офтальмолог и др.)?</th>
			<th colspan="2">Оставляли ли Вы комментарий о качестве обслуживания в медицинской организации и о медицинских работниках этой организации в социальных сетях?</th>
			<th colspan="2">Характеристика оставленного комментария</th>
			<th colspan="2">Вы благодарили персонал медицинской организации за оказанные Вам медицинские услуги?</th>
			<th colspan="4">При обращении в МО Вы обращались к информации, размещенной в помещениях МО?</th>
			<th colspan="4">Перед госпитализацией Вы заходили на официальный сайт МО?</th>
			<th colspan="4">Вы записались на прием к врачу (вызвали врача на дом)?</th>
			<th colspan="4">По какой причине записались на прием к врачу не сразу?</th>
			<th colspan="4">Какую группу ограничения трудоспособности Вы имеете?</th>
			<th colspan="2">МО оборудована для лиц с ограниченными возможностями?</th>
			<th colspan="9">Укажите что именно отсутствует (для лиц с ограниченными возможностями)?</th>
			<th colspan="2">Вы удовлетворены обслуживанием (доброжелательность, вежливость) у участкового терапевта (педиатра, врача общей практики (семейного врача)?</th>
			<th colspan="2">Вы удовлетворены обслуживанием (доброжелательность, вежливость) у врачей- специалистов (лор, хирург, невролог, офтальмолог, стоматолог, другие)?</th>
			<th colspan="2">Удовлетворены ли Вы компетентностью участкового терапевта (педиатра, врача общей практики (семейного врача)?</th>
			<th colspan="2">Удовлетворены ли Вы компетентностью врачей-специалистов (лор, хирург, невролог, офтальмолог, стоматолог, другие)?</th>
			<th colspan="5">Что именно не удовлетворило в компетентности МР?</th>
			<th colspan="2">Форма обращения</th>
			<th colspan="6">Время ожидания приема у врача, к которому Вы записались, с момента записи на прием?</th>
			<th colspan="6">Что не удовлетворяет в условиях пребывания в МО?</th>
			<th colspan="2">Кто был инициатором дарения?</th>
			<th colspan="5">Форма благодарения</th>
		</tr>
		<tr>
			<th>к врачу-специалисту</th>
			<th>к врачу участковому (педиатр, терапевт, воп)</th>
			<th>другое</th>
			<th colspan="2">да</th>
			<th>нет</th>
			<th colspan="2">да</th>
			<th>нет</th>
			<th colspan="2">да</th>
			<th>нет</th>
			<th>14 к.дн. и более</th>
			<th>13 к.дн.</th>
			<th>12 к.дн.</th>
			<th>10 к.дн.</th>
			<th>7 к.дн.</th>
			<th>менее 7 к.дн.</th>
			<th>Средний срок, дн</th>
			<th colspan="2">да</th>
			<th>нет</th>
			<th colspan="2">да</th>
			<th>нет</th>
			<th>не назначалось</th>
			<th>14 к.дн и более</th>
			<th>13 к.дн.</th>
			<th>12 к.дн</th>
			<th>10 к.дн.</th>
			<th>7 к.дн.</th>
			<th>менее 7 к.дн.</th>
			<th>Средний срок, дн</th>
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
			<th colspan="2">да</th>
			<th>нет</th>
			<th>за счет ОМС</th>
			<th>засчет ДМС</th>
			<th>на платной основе</th>
			<th>да</th>
			<th>нет</th>
			<th>раз в месяц</th>
			<th>раз в квартал</th>
			<th>раз в полугодие</th>
			<th>раз в год</th>
			<th>не обращаюсь</th>
			<th>раз в месяц</th>
			<th>раз в квартал</th>
			<th>раз в полугодие</th>
			<th>раз в год</th>
			<th>не обращаюсь</th>
			<th>нет</th>
			<th>да</th>
			<th>положительный</th>
			<th>отрицательный</th>
			<th>нет</th>
			<th>да</th>
			<th colspan="2">нет</th>
			<th colspan="2">да</th>
			<th colspan="2">нет</th>
			<th colspan="2">да</th>
			<th>по телефону</th>
			<th>с использование сети Интернет</th>
			<th>в регистратуре лично</th>
			<th>лечащим врачом на приеме при посещении</th>
			<th>не дозвонился</th>
			<th>не было талонов</th>
			<th>не было техн. Возможности записаться в эл.виде</th>
			<th>другое</th>
			<th>I</th>
			<th>II</th>
			<th>III</th>
			<th>ребенок-инвалид</th>
			<th>да</th>
			<th>нет</th>
			<th>отсутствие выделенного места стоянки авто для инвалидов</th>
			<th>отсутствие пандусов, поручней</th>
			<th>отсутствие подъемных платформ (аппарелей)</th>
			<th>отсутствие адаптированных лифтов</th>
			<th>отсутствие сменных кресел-колясок</th>
			<th>отсутствие информационных бегущих строк и тд.</th>
			<th>отсутствие информации шрифтом Брайля</th>
			<th>отсутствие доступных санитарно-гигиенических помещений</th>
			<th>отсутствие сопровождающих работников</th>
			<th>да</th>
			<th>нет</th>
			<th>да</th>
			<th>нет</th>
			<th>да</th>
			<th>нет</th>
			<th>да</th>
			<th>нет</th>
			<th>не разъяснили информацию о состоянии здоровья</th>
			<th>не дали рекомендации по диагностике, лечению и реабилитации</th>
			<th>не дали выписку</th>
			<th>не выписали рецепт</th>
			<th>другое</th>
			<th>на прием</th>
			<th>вызов на дом</th>
			<th>24 часа и более</th>
			<th>12 часов</th>
			<th>8 часов</th>
			<th>6 часов</th>
			<th>3 часа</th>
			<th>менее 1 часа</th>
			<th>отсутствие свободных мест ожидания</th>
			<th>состояние гардероба</th>
			<th>состояние туалета</th>
			<th>отсутствие питьевой воды</th>
			<th>санитарные условия</th>
			<th>отсутствие мест для детских колясок</th>
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
			<th colspan="5"></th>
			<th colspan="3">1.4</th>
			<th colspan="3">1.5</th>
			<th colspan="3">2.1</th>
			<th colspan="6">2.2</th>
			<th></th>
			<th colspan="3">2.4</th>
			<th colspan="3">2.5 (из ДА 2.4)</th>
			<th colspan="7">3.1 (по 12 вопросу анкеты)</th>
			<th></th>
			<th colspan="3">3.2</th>
			<th colspan="3">3.3 (по 12 вопросу анкеты)</th>
			<th colspan="3">4.1</th>
			<th colspan="3">4.2</th>
			<th colspan="3">5.1</th>
			<th colspan="3">5.2</th>
			<th colspan="3"></th>
			<th colspan="2"></th>
			<th colspan="5"></th>
			<th colspan="5"></th>
			<th colspan="2"></th>
			<th colspan="2"></th>
			<th></th>
			<th></th>
			<th colspan="3"></th>
			<th></th>
			<th colspan="3"></th>
			<th></th>
			<th colspan="4"></th>
			<th colspan="4"></th>
			<th colspan="4"></th>
			<th colspan="2"></th>
			<th colspan="9"></th>
			<th colspan="2"></th>
			<th colspan="2"></th>
			<th colspan="2"></th>
			<th colspan="2"></th>
			<th colspan="5"></th>
			<th colspan="2"></th>
			<th colspan="6"></th>
			<th colspan="6"></th>
			<th colspan="2"></th>
			<th colspan="5"></th>
		</tr>
	</thead>
	  <tbody>
	    <?php foreach ($ambulances as $ambulance) : ?>
        <tr>
          	<td><?php echo $ambulance->id; ?></td>
          	<td><?php echo $ambulance->name; ?></td>
          	<td>2016</td>
    		<td><?php echo $ambulance->ambulatoria->getCountByType('Сайт'); ?>+<?php echo $ambulance->ambulatoria->getCountByType('Вручную'); ?>+<?php echo $ambulance->ambulatoria->getCountByType('mz'); ?>=<?php echo $ambulance->ambulatoria->getCount(); ?></td>
	        <?php foreach ($ambulance->ambulatoria->get_MZ02() as $value) : ?>
	          <td><?php echo $value; ?></td>
	        <?php endforeach; ?>
			<td><?php echo $ambulance->ambulatoria->get_1_4()->count_true; ?></td>
            <td><?php echo $ambulance->ambulatoria->get_1_4()->getPercent(); ?>%</td>
            <td><?php echo $ambulance->ambulatoria->get_1_4()->count_false; ?></td>
			<td><?php echo $ambulance->ambulatoria->get_1_5()->count_true; ?></td>
            <td><?php echo $ambulance->ambulatoria->get_1_5()->getPercent(); ?>%</td>
            <td><?php echo $ambulance->ambulatoria->get_1_5()->count_false; ?></td>
			<td><?php echo $ambulance->ambulatoria->get_2_1()->count_true; ?></td>
            <td><?php echo $ambulance->ambulatoria->get_2_1()->getPercent(); ?>%</td>
            <td><?php echo $ambulance->ambulatoria->get_2_1()->count_false; ?></td>
	        <?php foreach ($ambulance->ambulatoria->get_2_2_value() as $value) : ?>
	          <td><?php echo $value; ?></td>
	        <?php endforeach; ?>
			<td><?php echo $ambulance->ambulatoria->get_2_4()->count_true; ?></td>
            <td><?php echo $ambulance->ambulatoria->get_2_4()->getPercent(); ?>%</td>
            <td><?php echo $ambulance->ambulatoria->get_2_4()->count_false; ?></td>
			<td><?php echo $ambulance->ambulatoria->get_2_5()->count_true; ?></td>
            <td><?php echo $ambulance->ambulatoria->get_2_5()->getPercent(); ?>%</td>
            <td><?php echo $ambulance->ambulatoria->get_2_5()->count_false; ?></td>
	        <?php foreach ($ambulance->ambulatoria->get_3_1_value() as $value) : ?>
	          <td><?php echo $value; ?></td>
	        <?php endforeach; ?>
			<td><?php echo $ambulance->ambulatoria->get_3_2()->count_true; ?></td>
            <td><?php echo $ambulance->ambulatoria->get_3_2()->getPercent(); ?>%</td>
            <td><?php echo $ambulance->ambulatoria->get_3_2()->count_false; ?></td>
			<td><?php echo $ambulance->ambulatoria->get_3_3()->count_true; ?></td>
            <td><?php echo $ambulance->ambulatoria->get_3_3()->getPercent(); ?>%</td>
            <td><?php echo $ambulance->ambulatoria->get_3_3()->count_false; ?></td>
			<td><?php echo $ambulance->ambulatoria->get_4_1()->count_true; ?></td>
            <td><?php echo $ambulance->ambulatoria->get_4_1()->getPercent(); ?>%</td>
            <td><?php echo $ambulance->ambulatoria->get_4_1()->count_false; ?></td>
			<td><?php echo $ambulance->ambulatoria->get_4_2()->count_true; ?></td>
            <td><?php echo $ambulance->ambulatoria->get_4_2()->getPercent(); ?>%</td>
            <td><?php echo $ambulance->ambulatoria->get_4_2()->count_false; ?></td>
			<td><?php echo $ambulance->ambulatoria->get_5_1()->count_true; ?></td>
            <td><?php echo $ambulance->ambulatoria->get_5_1()->getPercent(); ?>%</td>
            <td><?php echo $ambulance->ambulatoria->get_5_1()->count_false; ?></td>
			<td><?php echo $ambulance->ambulatoria->get_5_2()->count_true; ?></td>
            <td><?php echo $ambulance->ambulatoria->get_5_2()->getPercent(); ?>%</td>
            <td><?php echo $ambulance->ambulatoria->get_5_2()->count_false; ?></td>
	        <?php foreach ($ambulance->ambulatoria->get_MZ56() as $value) : ?>
	          <td><?php echo $value; ?></td>
	        <?php endforeach; ?>
			<td><?php echo $ambulance->ambulatoria->get_MZ57()->count_true; ?></td>
            <td><?php echo $ambulance->ambulatoria->get_MZ57()->count_false; ?></td>
	        <?php foreach ($ambulance->ambulatoria->get_MZ58() as $value) : ?>
	          <td><?php echo $value; ?></td>
	        <?php endforeach; ?>
	        <?php foreach ($ambulance->ambulatoria->get_MZ59() as $value) : ?>
	          <td><?php echo $value; ?></td>
	        <?php endforeach; ?>
			<td><?php echo $ambulance->ambulatoria->get_MZ60()->count_false; ?></td>
			<td><?php echo $ambulance->ambulatoria->get_MZ60()->count_true; ?></td>
	        <?php foreach ($ambulance->ambulatoria->get_MZ61() as $value) : ?>
	          <td><?php echo $value; ?></td>
	        <?php endforeach; ?>
			<td><?php echo $ambulance->ambulatoria->get_MZ62()->count_false; ?></td>
			<td><?php echo $ambulance->ambulatoria->get_MZ62()->count_true; ?></td>
			<td><?php echo $ambulance->ambulatoria->get_MZ30()->count_false; ?></td>
			<td><?php echo 100-$ambulance->ambulatoria->get_MZ30()->getPercent(); ?>%</td>
			<td><?php echo $ambulance->ambulatoria->get_MZ30()->count_true; ?></td>
			<td><?php echo $ambulance->ambulatoria->get_MZ30()->getPercent(); ?>%</td>
			<td><?php echo $ambulance->ambulatoria->get_MZ32()->count_false; ?></td>
			<td><?php echo 100-$ambulance->ambulatoria->get_MZ32()->getPercent(); ?>%</td>
			<td><?php echo $ambulance->ambulatoria->get_MZ32()->count_true; ?></td>
			<td><?php echo $ambulance->ambulatoria->get_MZ32()->getPercent(); ?>%</td>
	        <?php foreach ($ambulance->ambulatoria->get_MZ27() as $value) : ?>
	          <td><?php echo $value; ?></td>
	        <?php endforeach; ?>
	        <?php foreach ($ambulance->ambulatoria->get_MZ28() as $value) : ?>
	          <td><?php echo $value; ?></td>
	        <?php endforeach; ?>
	        <?php foreach ($ambulance->ambulatoria->get_MZ37() as $value) : ?>
	          <td><?php echo $value; ?></td>
	        <?php endforeach; ?>
			<td><?php echo $ambulance->ambulatoria->get_MZ38()->count_true; ?></td>
			<td><?php echo $ambulance->ambulatoria->get_MZ38()->count_false; ?></td>
	        <?php foreach ($ambulance->ambulatoria->get_MZ39() as $value) : ?>
	          <td><?php echo $value; ?></td>
	        <?php endforeach; ?>
			<td><?php echo $ambulance->ambulatoria->get_MZ03()->count_true; ?></td>
			<td><?php echo $ambulance->ambulatoria->get_MZ03()->count_false; ?></td>
			<td><?php echo $ambulance->ambulatoria->get_MZ18()->count_true; ?></td>
			<td><?php echo $ambulance->ambulatoria->get_MZ18()->count_false; ?></td>
			<td><?php echo $ambulance->ambulatoria->get_MZ04()->count_true; ?></td>
			<td><?php echo $ambulance->ambulatoria->get_MZ04()->count_false; ?></td>
			<td><?php echo $ambulance->ambulatoria->get_MZ19()->count_true; ?></td>
			<td><?php echo $ambulance->ambulatoria->get_MZ19()->count_false; ?></td>
	        <?php foreach ($ambulance->ambulatoria->get_MZ24() as $value) : ?>
	          <td><?php echo $value; ?></td>
	        <?php endforeach; ?>
	        <?php foreach ($ambulance->ambulatoria->get_MZ06() as $value) : ?>
	          <td><?php echo $value; ?></td>
	        <?php endforeach; ?>
	        <?php foreach ($ambulance->ambulatoria->get_MZ07() as $value) : ?>
	          <td><?php echo $value; ?></td>
	        <?php endforeach; ?>
	        <?php foreach ($ambulance->ambulatoria->get_MZ35() as $value) : ?>
	          <td><?php echo $value; ?></td>
	        <?php endforeach; ?>
	        <?php foreach ($ambulance->ambulatoria->get_MZ63() as $value) : ?>
	          <td><?php echo $value; ?></td>
	        <?php endforeach; ?>
	        <?php foreach ($ambulance->ambulatoria->get_MZ64() as $value) : ?>
	          <td><?php echo $value; ?></td>
	        <?php endforeach; ?>
        </tr>
	    <?php endforeach; ?>
	  </tbody>
	</table>
</div>
<?php include_once 'footer.php';?>
