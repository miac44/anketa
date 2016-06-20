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
    <table class="table table-bordered">
      <thead class="thead-inverse">
        <tr>
          <th class="text-center">id</th>
          <th class="text-center">МО</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($ambulances as $ambulance) : ?>
        <tr>
          <td><?php echo $ambulance->id; ?></td>
          <td><a href="/administrator/enter_data/?id=<?php echo $ambulance->id; ?>"><?php echo $ambulance->name; ?></a></td>
        </tr>
      <?php endforeach; ?>  
      </tbody>
    </table>
</div>
<?php include_once 'footer.php';?>
