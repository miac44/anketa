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
            <td>Ключ</td>
            <td>Значение</td>
          </tr>
          <tr>
            <td>Ключ</td>
            <td>Значение</td>
          </tr>
          <tr>
            <td>Ключ</td>
            <td>Значение</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="col-md-6">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th colspan="2" class="text-center">
              АМБУЛАТОРИЯ
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Ключ</td>
            <td>Значение</td>
          </tr>
          <tr>
            <td>Ключ</td>
            <td>Значение</td>
          </tr>
          <tr>
            <td>Ключ</td>
            <td>Значение</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php include_once 'footer.php';?>
