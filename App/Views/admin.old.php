<?php include_once 'header.php';?>
<?php include_once 'menu.php';?>
<div class="container-fluid">
    <table class="table table-bordered">
        <thead class="thead-inverse">
        <tr>
            <th rowspan="2" class="text-center">id</th>
            <th rowspan="2" class="text-center">МО</th>
            <th colspan="2" class="text-center">Анкет вручную</th>
            <th colspan="2" class="text-center">Анкет МЗ</th>
            <th colspan="2" class="text-center">Анкет всего</th>
            <th rowspan="2" class="text-center">Анкет всего</th>
        </tr>
        <tr>
            <th class="text-center">Амбулатория</th>
            <th class="text-center">Стационар</th>
            <th class="text-center">Амбулатория</th>
            <th class="text-center">Стационар</th>
            <th class="text-center">Амбулатория</th>
            <th class="text-center">Стационар</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($ambulances as $ambulance) : ?>
            <tr>
                <td><?php echo $ambulance->id; ?></td>
                <td><?php echo $ambulance->name; ?>(<?php echo $ambulance->type; ?>)</td>
                <td><?php echo $ambulance->ambulatoria->getCountByType('Вручную'); ?></td>
                <td><?php if ($ambulance->type != 'stacionar') echo "x"; else echo $ambulance->stacionar->getCountByType('Вручную'); ?></td>
                <td><?php echo $ambulance->ambulatoria->getCountByType('mz')+$ambulance->ambulatoria->getCountByType('Сайт'); ?></td>
                <td><?php if ($ambulance->type != 'stacionar') echo "x"; else echo $ambulance->stacionar->getCountByType('mz')+$ambulance->stacionar->getCountByType('Сайт'); ?></td>
                <td><?php echo $ambulance->ambulatoria->getCount(); ?></td>
                <td><?php if ($ambulance->type != 'stacionar') echo "x"; else echo $ambulance->stacionar->getCount(); ?></td>
                <td><?php if ($ambulance->type != 'stacionar') echo $ambulance->ambulatoria->getCount(); else echo $ambulance->stacionar->getCount()+$ambulance->ambulatoria->getCount(); ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include_once 'footer.php';?>
