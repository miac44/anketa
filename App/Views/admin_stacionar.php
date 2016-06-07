<?php include_once 'header.php';?>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="/administrator/">Главная</a></li>
                <li class="active"><a href="/administrator/stacionar/">Свод (СТАЦИОНАР)</a></li>
                <li><a href="/administrator/ambulatoria/">Свод (АМБУЛАТОРИЯ)</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <table class="table table-bordered">
        <thead class="thead-inverse">
        <tr>
            <th rowspan="3" class="text-center">id</th>
            <th rowspan="3" class="text-center">МО</th>
            <th rowspan="3" class="text-center">Кол-во</th>
            <th colspan="5" class="text-center">1. Показатели, характеризующие открытость и доступность информации о медицинской организации</th>
            <th rowspan="3" class="text-center info">ИТОГО по п.1</th>
            <th colspan="5" class="text-center">2. Показатели, характеризующие комфортность условий предоставления медицинских услуг и доступность их получения</th>
            <th rowspan="3" class="text-center info">ИТОГО по п.2</th>
            <th colspan="3" class="text-center">3. Показатели, характеризующие время ожидания в очереди при получении медицинской услуги</th>
            <th rowspan="3" class="text-center info">ИТОГО по п.3</th>
            <th colspan="2" class="text-center">4. Показатели, характеризующие доброжелательность, вежливость и компетентность работников МО</th>
            <th rowspan="3" class="text-center info">ИТОГО по п.4</th>
            <th colspan="3" class="text-center">5. Показатели, характеризующие удовлетворенность оказанными услугами в МО</th>
            <th rowspan="3" class="text-center info">ИТОГО по п.5</th>
            <th rowspan="3" class="text-center active">ИТОГО по МО</th>
        </tr>
        <tr>
            <th class="text-center">Показатель рейтинга на официальном сайте в сети Интернет для размещения информации о государственных и муниципальных учреждениях (www.bus.gov.ru)</th>
            <th class="text-center">Полнота, актуальность и понятность информации о МО, размещаемой на официальном сайте МО</th>
            <th class="text-center">Наличие  и доступность на официальном сайте медицинской организации способов обратной связи с потребителями услуг (форма электронного обращения, анкета для ОКОУ) </th>
            <th class="text-center">Доля потребителей услуг, удовлетворенных качеством и полнотой информации о работе МО и порядке предоставления медицинских услуг, доступной в помещениях медицинской организации</th>
            <th class="text-center">Доля потребителей услуг, удовлетворенных качеством и полнотой информации о работе МО и порядке предоставления медицинских услуг, доступной на официальном сайте медицинской организации</th>
            <th class="text-center">Доля потребителей услуг, удовлетворенных условиями пребывания в МО</th>
            <th class="text-center">Доля потребителей услуг, удовлетворенных питанием в МО</th>
            <th class="text-center">Доля потребителей услуг, у которых во время пребывания в стационаре не возникла необходимость оплачивать назначенные диагностические исследования за свой счет</th>
            <th class="text-center">Доля потребителей услуг, у которых во время пребывания в стационаре не возникла необходимость оплачивать назначенные лекарственные средства за свой счет</th>
            <th class="text-center">Доля потребителей услуг с ограниченными возможностями здоровья, удовлетворенных условиями пребывания в МО</th>
            <th class="text-center">Среднее время ожидания в приемном отделении МО</th>
            <th class="text-center">Средний срок ожидания диагностического исследования с момента получения направления на диагностическое исследование (относительно сроков ожидания, установленных ТП ГГБОГМП)</th>
            <th class="text-center">Доля потребителей услуг, госпитализированных в назначенный срок плановой госпитализации</th>
            <th class="text-center">Доля потребителей услуг, положительно оценивающих доброжелательность и вежливость работников МО</th>
            <th class="text-center">Доля потребителей услуг, положительно оценивающих компетентность медицинских работников МО</th>
            <th class="text-center">Доля потребителей услуг, удовлетворенных оказанными услугами</th>
            <th class="text-center">Доля потребителей услуг, готовых рекомендовать МО для получения медицинской помощи</th>
            <th class="text-center">Доля потребителей услуг, удовлетворенных действиями персонала МО по уходу</th>
        </tr>
        <tr>
            <th class="text-center">1.1</th>
            <th class="text-center">1.2</th>
            <th class="text-center">1.3</th>
            <th class="text-center">1.4</th>
            <th class="text-center">1.5</th>
            <th class="text-center">2.1</th>
            <th class="text-center">2.2</th>
            <th class="text-center">2.3</th>
            <th class="text-center">2.4</th>
            <th class="text-center">2.5</th>
            <th class="text-center">3.1</th>
            <th class="text-center">3.2 (до 20 дней)</th>
            <th class="text-center">3.3</th>
            <th class="text-center">4.1</th>
            <th class="text-center">4.2</th>
            <th class="text-center">5.1</th>
            <th class="text-center">5.2</th>
            <th class="text-center">5.3</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($ambulances as $ambulance) : ?>
            <tr>
                <td><?php echo $ambulance->id; ?></td>
                <td><?php echo $ambulance->name; ?></td>
                <td><?php echo $ambulance->stacionar->getCountByType('Сайт'); ?>+<?php echo $ambulance->stacionar->getCountByType('Вручную'); ?>=<?php echo $ambulance->stacionar->getCount(); ?></td>
                <td>-</td>
                <td class="text-center"><?php echo $ambulance->stacionar->get_1_2()->points; ?></td>
                <td class="text-center"><?php echo $ambulance->stacionar->get_1_3()->points; ?></td>
                <td class="text-center"><?php echo $ambulance->stacionar->get_1_4()->points; ?></td>
                <td class="text-center"><?php echo $ambulance->stacionar->get_1_5()->points; ?></td>
                <td class="text-center info"><?php echo $points_1=$ambulance->stacionar->get_1_2()->points+$ambulance->stacionar->get_1_3()->points+$ambulance->stacionar->get_1_4()->points+$ambulance->stacionar->get_1_5()->points; ?></td>
                <td class="text-center"><?php echo $ambulance->stacionar->get_2_1()->points; ?></td>
                <td class="text-center"><?php echo $ambulance->stacionar->get_2_2()->points; ?></td>
                <td class="text-center"><?php echo $ambulance->stacionar->get_2_3()->points; ?></td>
                <td class="text-center"><?php echo $ambulance->stacionar->get_2_4()->points; ?></td>
                <td class="text-center"><?php echo $ambulance->stacionar->get_2_5()->points; ?></td>
                <td class="text-center info"><?php echo $points_2=$ambulance->stacionar->get_2_1()->points+$ambulance->stacionar->get_2_2()->points+$ambulance->stacionar->get_2_3()->points+$ambulance->stacionar->get_2_4()->points+$ambulance->stacionar->get_2_5()->points; ?></td>
                <td class="text-center"><?php echo $ambulance->stacionar->get_3_1()->points; ?></td>
                <td class="text-center"><?php echo $ambulance->stacionar->get_3_2()->points; ?></td>
                <td class="text-center"><?php echo $ambulance->stacionar->get_3_3()->points; ?></td>
                <td class="text-center info"><?php echo $points_3=$ambulance->stacionar->get_3_1()->points+$ambulance->stacionar->get_3_2()->points+$ambulance->stacionar->get_3_3()->points; ?></td>
                <td class="text-center"><?php echo $ambulance->stacionar->get_4_1()->points; ?></td>
                <td class="text-center"><?php echo $ambulance->stacionar->get_4_2()->points; ?></td>
                <td class="text-center info"><?php echo $points_4=$ambulance->stacionar->get_4_1()->points+$ambulance->stacionar->get_4_2()->points; ?></td>
                <td class="text-center"><?php echo $ambulance->stacionar->get_5_1()->points; ?></td>
                <td class="text-center"><?php echo $ambulance->stacionar->get_5_2()->points; ?></td>
                <td class="text-center"><?php echo $ambulance->stacionar->get_5_3()->points; ?></td>
                <td class="text-center info"><?php echo $points_5=$ambulance->stacionar->get_5_1()->points+$ambulance->stacionar->get_5_2()->points+$ambulance->stacionar->get_5_3()->points; ?></td>
                <td class="text-center active"><?php echo $points_1+$points_2+$points_3+$points_4+$points_5; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include_once 'footer.php';?>
