<?php include_once 'header.php';?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/admin/">Главная</a></li>
        <li><a href="/admin/stacionar/">Свод (СТАЦИОНАР)</a></li>
        <li><a href="/admin/ambulatoria/">Свод (АМБУЛАТОРИЯ)</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid">
    <table class="table table-bordered">
      <thead class="thead-inverse">
        <tr>
          <th rowspan="2" class="text-center">id</th>
          <th rowspan="2" class="text-center">МО</th>
          <th colspan="2" class="text-center">Анкет на сайте</th>
          <th colspan="2" class="text-center">Анкет вручную</th>
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
          <td><?php echo $ambulance->name; ?></td>
          <td><?php echo $ambulance->ambulatoria->getCountByType('Сайт'); ?></td>
          <td><?php echo $ambulance->stacionar->getCountByType('Сайт'); ?></td>
          <td><?php echo $ambulance->ambulatoria->getCountByType('Вручную'); ?></td>
          <td><?php echo $ambulance->stacionar->getCountByType('Вручную'); ?></td>
          <td><?php echo $ambulance->ambulatoria->getCount(); ?></td>
          <td><?php echo $ambulance->stacionar->getCount(); ?></td>
          <td><?php echo $ambulance->stacionar->getCount()+$ambulance->ambulatoria->getCount(); ?></td>
        </tr>
      <?php endforeach; ?>  
      </tbody>
    </table>
</div>

<?php include_once 'footer.php';?>
