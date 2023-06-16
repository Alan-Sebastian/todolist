<?php
include 'db_connect.php';
if(isset($_POST['submit']))
{
$tasks=$_POST['tasks'];
$sql="INSERT INTO todo (tasks) values('$tasks')";
$query=mysqli_query($conn,$sql);
if($query)
{
    echo "<script>alert('task added')</script>";
} 
}
 ?>
 <section class="todo">
 <h1 class="text-center">Personal Tasks</h1>
 <blackquote class="blackquote text-center">
          <p>"Set Your Goals."</p>
        </blackquote>
    <div class="container">
    <form action="" method="post">
    
    <div class="form-row pl-5 p-2">
    <div class="col-md-10 mb-3 pl-5 p-3">
      <input type="text"name="tasks" class="form-control" id="tasks" placeholder="Add Your Todo"required="true">
      <!-- <div class="invalid-feedback"> -->
        <!-- Please provide a valid city. -->
      <!-- </div> -->
    </div>
	<!-- <div class="d-flex w-100 justify-content-center align-items-center"> -->
    <!-- <button type="submit" name="submit"  class="btn btn-primary my-1" value="submit">Add</button> -->
    <!-- <input type="submit" name="submit" value="ok"> -->
	<!-- </div> -->
  <div class="row w-100 justify-content-center align-items-center p-2">
  <button type="submit" name="submit"  class="btn btn-success my-1" value="submit">Add Todo</button>
</div>
</div>
</div>
</form>
    </div>
<br>
<br>
<?php
$query="select * from  todo";
$result=mysqli_query($conn,$query);
if (isset($_POST['delete'])){
    $taskno = $_POST['taskno'];
    $delete_q = "DELETE FROM todo WHERE taskno = $taskno";
    $conn->query($delete_q);
}
                  while($row=mysqli_fetch_assoc($result))
                  {
                    ?>
                    <section class="tasks">
                    <div class="container pl-5">
                        <div class="row">
                    <div class="card w-50">
  <div class="card-body">
    <h5 class="card-title"><h5><?php echo $row['day'];?></h5>
    <p class="card-text"> <?php echo $row['tasks'];?></p>
    <form action="" method="post">
        <input type="hidden" name="taskno" value="<?=$row['taskno'] ?>">
    <button  name="delete" class="btn"><i class="fa-solid fa-circle-check"></i></button>
                  </form>  
</div>
 </div>
</div>
                  </div>
                  </section>
<br>
<br>
<?php
                  }
                ?>
<script src="https://kit.fontawesome.com/c2f8e9b88d.js" crossorigin="anonymous"></script>
    <!-- <button type="submit" class="btn" id="check"><i class="fa-solid fa-circle-check"></i></button> -->
    <!-- <button type="submit" class="btn" id="delete"><i class="fa-solid fa-trash-can"></i></button> -->
<!-- <script src="https://kit.fontawesome.com/c2f8e9b88d.js" crossorigin="anonymous"></script> -->
