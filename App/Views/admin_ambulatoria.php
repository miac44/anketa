<?php include_once 'header.php';?>
<?php include_once 'menu.php';?>
<div class="container-fluid">
    <table class="table table-bordered">
        <thead class="thead-inverse">
        <tr>
            <th rowspan="3" class="text-center">id</th>
            <th rowspan="3" class="text-center">МО</th>
            <th rowspan="3" class="text-center">Кол-во (сайт + вручную + МЗ)</th>
            <th colspan="5" class="text-center">1. Показатели, характеризующие открытость и доступность информации о медицинской организации</th>
            <th rowspan="3" class="text-center info">ИТОГО по п.1</th>
            <th colspan="5" class="text-center">2. Показатели, характеризующие комфортность условий предоставления медицинских услуг и доступность их получения</th>
            <th rowspan="3" class="text-center info">ИТОГО по п.2</th>
            <th colspan="3" class="text-center">3. Показатели, характеризующие время ожидания в очереди при получении медицинской услуги</th>
            <th rowspan="3" class="text-center info">ИТОГО по п.3</th>
            <th colspan="2" class="text-center">4. Показатели, характеризующие доброжелательность, вежливость и компетентность работников МО</th>
            <th rowspan="3" class="text-center info">ИТОГО по п.4</th>
            <th colspan="2" class="text-center">5. Показатели, характеризующие удовлетворенность оказанными услугами в МО</th>
            <th rowspan="3" class="text-center info">ИТОГО по п.5</th>
            <th rowspan="3" class="text-center active">ИТОГО по МО</th>
        </tr>
        <tr>
            <th class="text-center">Показатель рейтинга на официальном сайте в сети Интернет для размещения информации о государственных и муниципальных учреждениях (www.bus.gov.ru)</th>
            <th class="text-center">Полнота, актуальность и понятность информации о МО, размещаемой на официальном сайте МО</th>
            <th class="text-center">Наличие  и доступность на официальном сайте медицинской организации способов обратной связи с потребителями услуг (форма электронного обращения, анкета для ОКОУ) </th>
            <th class="text-center">Доля потребителей услуг, удовлетворенных качеством и полнотой информации о работе МО и порядке предоставления медицинских услуг, доступной в помещениях медицинской организации</th>
            <th class="text-center">Доля потребителей услуг, удовлетворенных качеством и полнотой информации о работе МО и порядке предоставления медицинских услуг, доступной на официальном сайте медицинской организации</th>
            <th class="text-center">Доля потребителей услуг, которые записались на прием к врачу (получили талон с указанием времени приема и ФИО врача) при первом обращении в МО</th>
            <th class="text-center">Средний срок ожидания приема врача с момента записи на прием (относительно сроков ожидания, установленных ТП ГГБОГМП)</th>
            <th class="text-center">Доступность записи на прием к врачу (по телефону, с использованием сети Интернет, в регистратуре лично, лечащим врачом на приеме при посещении)</th>
            <th class="text-center">Доля потребителей услуг, удовлетворенных условиями пребывания в МО</th>
            <th class="text-center">Доля потребителей услуг с ограниченными возможностями здоровья, удовлетворенных условиями пребывания в МО</th>
            <th class="text-center">Средний срок ожидания диагностического исследования с момента получения направления на диагностическое исследование (относительно сроков ожидания, установленных ТП ГГБОГМП)</th>
            <th class="text-center">Доля потребителей услуг, которых врач принял во время, установленное по записи</th>
            <th class="text-center">Доля потребителей услуг, которым диагностическое исследование выполнено во время, установленное по записи</th>
            <th class="text-center">Доля потребителей услуг, положительно оценивающих доброжелательность и вежливость работников МО</th>
            <th class="text-center">Доля потребителей услуг, положительно оценивающих компетентность медицинских работников МО</th>
            <th class="text-center">Доля потребителей услуг, удовлетворенных оказанными услугами</th>
            <th class="text-center">Доля потребителей услуг, готовых рекомендовать МО для получения медицинской помощи</th>
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
            <th class="text-center">3.2</th>
            <th class="text-center">3.3</th>
            <th class="text-center">4.1</th>
            <th class="text-center">4.2</th>
            <th class="text-center">5.1</th>
            <th class="text-center">5.2</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($ambulances as $ambulance) : ?>
            <tr>
                <td><?php echo $ambulance->id; ?></td>
                <td><?php echo $ambulance->name; ?></td>
                <td><?php echo $ambulance->ambulatoria->getCountByType('Сайт'); ?>+<?php echo $ambulance->ambulatoria->getCountByType('Вручную'); ?>+<?php echo $ambulance->ambulatoria->getCountByType('mz'); ?>=<?php echo $ambulance->ambulatoria->getCount(); ?></td>
                <td>-</td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"><?php echo $ambulance->ambulatoria->get_1_4()->points; ?></td>
                <td class="text-center"><?php echo $ambulance->ambulatoria->get_1_5()->points; ?></td>
                <td class="text-center info"><?php echo $points_1=$ambulance->ambulatoria->get_1_2()->points+$ambulance->ambulatoria->get_1_3()->points+$ambulance->ambulatoria->get_1_4()->points+$ambulance->ambulatoria->get_1_5()->points; ?></td>
                <td class="text-center"><?php echo $ambulance->ambulatoria->get_2_1()->points; ?></td>
                <td class="text-center"><?php echo $ambulance->ambulatoria->get_2_2()->points; ?></td>
                <td class="text-center"><?php echo $ambulance->ambulatoria->get_2_3()->points; ?></td>
                <td class="text-center"><?php echo $ambulance->ambulatoria->get_2_4()->points; ?></td>
                <td class="text-center"><?php echo $ambulance->ambulatoria->get_2_5()->points; ?></td>
                <td class="text-center info"><?php echo $points_2=$ambulance->ambulatoria->get_2_1()->points+$ambulance->ambulatoria->get_2_2()->points+$ambulance->ambulatoria->get_2_3()->points+$ambulance->ambulatoria->get_2_4()->points+$ambulance->ambulatoria->get_2_5()->points; ?></td>
                <td class="text-center"><?php echo $ambulance->ambulatoria->get_3_1()->points; ?></td>
                <td class="text-center"><?php echo $ambulance->ambulatoria->get_3_2()->points; ?></td>
                <td class="text-center"><?php echo $ambulance->ambulatoria->get_3_3()->points; ?></td>
                <td class="text-center info"><?php echo $points_3=$ambulance->ambulatoria->get_3_1()->points+$ambulance->ambulatoria->get_3_2()->points+$ambulance->ambulatoria->get_3_3()->points; ?></td>
                <td class="text-center"><?php echo $ambulance->ambulatoria->get_4_1()->points; ?></td>
                <td class="text-center"><?php echo $ambulance->ambulatoria->get_4_2()->points; ?></td>
                <td class="text-center info"><?php echo $points_4=$ambulance->ambulatoria->get_4_1()->points+$ambulance->ambulatoria->get_4_2()->points; ?></td>
                <td class="text-center"><?php echo $ambulance->ambulatoria->get_5_1()->points; ?></td>
                <td class="text-center"><?php echo $ambulance->ambulatoria->get_5_2()->points; ?></td>
                <td class="text-center info"><?php echo $points_5=$ambulance->ambulatoria->get_5_1()->points+$ambulance->ambulatoria->get_5_2()->points; ?></td>
                <td class="text-center active"><?php echo $points_1+$points_2+$points_3+$points_4+$points_5; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include_once 'footer.php';?>
