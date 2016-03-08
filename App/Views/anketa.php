<?php include_once 'header.php';?>
<h1 class="text-center"><?php echo $anketa->title; ?></h1>
<form name="anketa_<?php echo $anketa->action;?>" action="/anketa/save/?action=<?php echo $anketa->action;?>" method="post">
    <div class="fluid-container">
        <div class="row">
            <div class="col-md-4 text-left">
                Выберите район
            </div>
            <div class="col-md-8">
                <select size="1" id="region" class="" title="Выберите район" name="region" required>
                    <option value="">Выберите район</option>
                    <?php foreach ($regions as $region) : ?>
                    <option value="<?php echo $region->name; ?>"><?php echo $region->name; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                Выберите медицинское учреждение
            </div>
            <div class="col-md-8">
                <select size="1" id="ambulance" class="" title="Выберите поликлинику" name="ambulance" required>
                    <?php foreach ($ambulances as $ambulance) : ?>
                    <option value="<?php echo $ambulance->name; ?>" class="<?php echo $ambulance->region->name; ?>"><?php echo $ambulance->name; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                Выберите месяц посещения
            </div>
            <div class="col-md-8">
                <?php include_once 'months.php'; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                Выберите год посещения
            </div>
            <div class="col-md-8">
                <?php include_once 'years.php'; ?>
            </div>
        </div>
        <?php foreach ($anketa->elements as $element) : ?>
        <div class="row<?php if (!is_null($element->ident)) echo " collapse " . $element->ident;?>">
            <div class="col-md-4">
                <?php echo $element->title; ?>
            </div>
            <div class="col-md-8">
            <?php foreach($element->values as $value) :?>
                <div class="<?php echo $element->type; ?>">
                    <label><input type="<?php echo $element->type; ?>" name="<?php echo $anketa->action . "[" . $element->id; ?>][]" value="<?php echo $value->title; ?>" <?php if($element->required) echo 'required '; ?>
                    onclick="<?php if (!is_null($value->show_element_ident)) echo ' showMe(\'.' . $value->show_element_ident. '\');';?>
                    <?php if (!is_null($value->hide_element_ident)) echo ' hideMe(\'.' . $value->hide_element_ident. '\');';?>"
                    ><?php echo $value->title; ?></label>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
        <p></p>
        <?php endforeach; ?>
        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Отослать</button>
        </div>
    </div>
</form>
<?php include_once 'footer.scripts.php';?>
<script type="text/javascript" src="/js/jquery.chained.js"></script>
<script type="text/javascript"> 
    $(document).ready(function(){ 
        $("#ambulance").chained("#region");
    }); 
    function showMe($obj){
        $($obj).collapse('show');
    };
    function hideMe($obj){
        $($obj).collapse('hide');
    };
</script>
<?php include_once 'footer.php';?>
