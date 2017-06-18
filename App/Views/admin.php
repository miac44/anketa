<?php include_once 'header.php';?>
<?php include_once 'menu.php';?>
    <div class="container-fluid">
        <table class="table table-bordered">
            <thead class="thead-inverse">
            <tr>
                <th class="text-center">id</th>
                <th class="text-center">МО</th>
                <?php foreach ($ankets as $anketa) : ?>
                <th class="text-center"><?php echo $anketa->title; ?></th>
                <?php endforeach; ?>
                <th class="text-center">Всего</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($ambulances as $ambulance) : ?>
                <tr>
                    <td><?php echo $ambulance->id; ?></td>
                    <td><?php echo $ambulance->name; ?></td>
                    <?php foreach ($ankets as $anketa) : ?>
                    <td><?php var_dump($ambulance->count->{$anketa->action}); ?></td>
                    <?php endforeach; ?>
                    <td>Общееколво</td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

<?php include_once 'footer.php';?>