<?php include_once 'header.php';?>
<div class="container-fluid">
<h1 class="text-center">Анкеты ДЗКО</h1>
<?php foreach ($ankets as $anketa) : ?>

<div class="panel panel-default">
    <div id="head_<?php echo $anketa->action; ?>" class="panel-heading row" data-toggle="collapse" data-target="#body_<?php echo $anketa->action; ?>" >
    	<div class="col-md-8">
            <h4><?php echo $anketa->title; ?></h4>
            <h5>Заполненных анкет - <?php echo $anketa->count; ?></h5>
        </div>
        <div class="col-md-4 text-right">
            <a href="/anketa/view/?action=<?php echo $anketa->action; ?>" class="btn btn-primary">Заполнить анкету</a>
        </div>
    </div>
    <div id="body_<?php echo $anketa->action; ?>" class="panel-body collapse">
    	<p><?php echo $anketa->text; ?></p>
    </div>
</div>
<?php endforeach; ?>
</div>
<?php include_once 'footer.scripts.php';?>
<?php include_once 'footer.php';?>