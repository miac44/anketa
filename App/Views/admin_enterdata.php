<?php include_once 'header.php';?>
<?php include_once 'menu.php';?>

<div class="container-fluid">
    <table class="table table-bordered">
      <thead class="thead-inverse">
        <tr>
          <th class="text-center">id</th>
          <th class="text-center">МО</th>
          <th class="text-center">СТАЦИОНАР</th>
          <th class="text-center">АМБУЛАТОРИЯ</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($ambulances as $ambulance) : ?>
        <tr>
          <td><?php echo $ambulance->id; ?></td>
          <td><?php echo $ambulance->name; ?></td>
          <td><a href="/administrator/enterdata_stacionar/?id=<?php echo $ambulance->id; ?>">ввести данные</a></td>
          <td><a href="/administrator/enterdata_ambulatoria/?id=<?php echo $ambulance->id; ?>">ввести данные</a></td>
        </tr>
      <?php endforeach; ?>  
      </tbody>
    </table>
</div>
<?php include_once 'footer.php';?>
