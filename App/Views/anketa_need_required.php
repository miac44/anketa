<?php include_once 'header.php';?>
<div class="text-center">
    <h1>Ошибка</h1>
    <h3>Не заполнены следующие необходимые поля</h3>
    <div><?php echo $errors;?></div>
    <button class="btn btn-primary" onclick="history.back();" >Вернуться назад</button>
</div>
<?php include_once 'footer.scripts.php';?>
<?php include_once 'footer.php';?>
