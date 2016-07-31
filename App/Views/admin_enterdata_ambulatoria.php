<?php include_once 'header.php';?>
<?php include_once 'menu.php';?>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 text-center">
      <h1><?php echo $ambulance->name; ?></h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
    <form name="savedata_ambulatoria" action="/administrator/savedata/?id=<?php echo $id; ?>" method="POST">
    <input name="class" type="hidden" value="MZambulatoria">
    <input name="id" type="hidden" value="<?php echo $id; ?>">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th colspan="2" class="text-center">
              СТАЦИОНАР
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>Количество:</strong></td>
            <td><input size="2" name="count" type="text" value="<?php if($mzambulatoria->count==""){echo 0;} else {echo $mzambulatoria->count;} ?>" /></td>
          </tr>
        <?php foreach($mzambulatoria_textquestion as $k=>$v) : ?>
          <tr>
            <td colspan="2"><strong><?php echo $v; ?></strong></td>
          </tr>
          <?php foreach($mzambulatoria_textvalue[$k] as $id=>$value) : ?>
          <tr>
            <td><?php echo $value; ?></td>
            <td><input size="2" name="<?php echo $full_id = $k . '_' . $id; ?>" type="text" value="<?php if($mzambulatoria->$full_id==""){echo 0;} else {echo $mzambulatoria->$full_id;} ?>" /></td>
          </tr>
          <?php endforeach; ?>
        <?php endforeach; ?>
        </tbody>
      </table>
    <div class="text-center">
      <button type="submit" class="btn btn-primary">Записать данные</button>
    </div>
    </form>
    </div>
  </div>
</div>
<?php include_once 'footer.php';?>