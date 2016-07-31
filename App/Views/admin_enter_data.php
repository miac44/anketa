<?php include_once 'header.php';?>
<?php include_once 'menu.php';?>

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
