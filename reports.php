<?php 
require_once('db_connect.php');
$query="select * from  project_list where status=5";
$result=mysqli_query($conn,$query);
?>
 <section class="todo">
 <h2 class="text-center p-5">Completed Projects</h2>
 <table class="table">
  <thead class="table-primary">
    <tr>
      <th scope="col">Project Name</th>
      <th scope="col">start_date</th>
      <th scope="col">end_date</th>
      <th scope="col">status</th>
    </tr>
  </thead>
                  <?php
                  $stat = array("Pending","Started","On-Progress","On-Hold","Over Due","Done");
                  while($row=mysqli_fetch_assoc($result))
                  {
                    ?>
                   <tr>
                    <td><?php echo $row['name'];?></td>
                  <td><?php echo $row['start_date'];?></td>
                  <td><?php echo $row['end_date'];?></td>
                  <td><a class="btn btn-primary btn-sm" href="./index.php?page=view_project&id=<?php echo $row['id'] ?>">
                              <i class="fas fa-folder">
                              </i>
                              View
                        </a></td>
                  </tr>
<?php
                  }
                ?>
                
                <section>