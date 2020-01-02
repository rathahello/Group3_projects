<?php  
  include "dasboard/dasboard.php";
?>

<div class="container">
<h1 class="text-center text-danger">List of users</h1>
    <hr>
<table class="table table-bordered mt-3">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Fullname</th>
      <th scope="col">Gender</th>
      <th scope="col">Email</th>
      <th scope="col">Book ID</th>
      <th scope="col">StartDate</th>
      <th scope="col">EndDate</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

  <?php
  if (isset($data['view'])) {
    $id = 1;
    foreach ($data['view'] as $rows) {

  ?>
      <tbody>
        <tr>
          <td><?php echo $id; ?></td>
          <td><?php echo $rows['Username']; ?></td>
          <td><?php echo $rows['gender']; ?></td>
          <td><?php echo $rows['email']; ?></td>
          <td><?php echo $rows['book_id']; ?></td>
          <td><?php echo $rows['startdate']; ?></td>
          <td><?php echo $rows['enddate']; ?></td>
          <td>
            <a href="index.php?action=detail&id=<?php echo $rows['id']; ?>"><i class="material-icons">remove_red_eye</i></a>
            <a href="index.php?action=edit&id=<?php echo $rows['id']; ?>"><i class="material-icons">edit</i></a>
            <a href="index.php?action=delete&id=<?php echo $rows['id']; ?>"><i class="material-icons" onclick="return confirm('Are you sure you want to delete?');">delete</i></a>
          </td>
        </tr>

      </tbody>
  <?php
      $id++;
    }
  }
  ?>
</table>
</div>