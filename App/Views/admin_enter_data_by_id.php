<?php include_once 'header.php';?>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="/administrator/">Главная</a></li>
                <li><a href="/administrator/stacionar/">Свод (СТАЦИОНАР)</a></li>
                <li><a href="/administrator/ambulatoria/">Свод (АМБУЛАТОРИЯ)</a></li>
                <li class="active"><a href="/administrator/enter_data/">Ввод данных с МЗ</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 text-center">
      <h1><?php echo $ambulance->name; ?></h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
    <form name="savedata_stacionar" action="/administrator/savedata/?id=<?php echo $id; ?>" method="POST">
    <input name="class" type="hidden" value="MZstacionar">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th colspan="2" class="text-center">
              СТАЦИОНАР
            </th>
          </tr>
        </thead>
        <tbody>
        <?php foreach($mzstacionar_textdata as $k=>$v) : ?>
          <tr>
            <td><?php echo $v; ?></td>
            <td><input size="2" name="<?php echo $k; ?>" type="text" value="<?php if($mzstacionar->$k==""){echo 0;} else {echo $mzstacionar->$k;} ?>" /></td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
    <div class="text-center">
      <button type="submit" class="btn btn-primary">Записать данные</button>
    </div>
    </form>
    </div>
    <div class="col-md-6">
    <form name="savedata_ambulatoria" action="/administrator/savedata/?id=<?php echo $id; ?>" method="POST">
    <input name="class" type="hidden" value="MZambulatoria">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th colspan="2" class="text-center">
              АМБУЛАТОРИЯ
            </th>
          </tr>
        </thead>
        <tbody>
        <?php foreach($mzambulatoria_textdata as $k=>$v) : ?>
          <tr>
            <td><?php echo $v; ?></td>
            <td><input size="2" name="<?php echo $k; ?>" type="text" value="<?php if($mzambulatoria->$k==""){echo 0;} else {echo $mzambulatoria->$k;} ?>" /></td>
          </tr>
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
