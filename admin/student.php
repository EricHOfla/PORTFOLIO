<?php include 'nav.php'; ?>

    <section class="section dashboard">
      
  <!-- Button trigger modal -->
<button style="float: right;" type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><small>New Student.<i class="fa fa-plus"></i></small>
  
  
</svg>
</button><br><br>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div style="height: 2rem;" class="modal-header">
        <small class="modal-title" id="staticBackdropLabel">Register Student</small>
        <button style="height: 2px; width: 2px;" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        


<center >


<form  style="border-radius: 12px; background: #A49F9F;" method="POST">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value=""><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value=""><br>
  <label for="fname">Email:</label><br>
  <input type="text" id="email" name="email" value=""><br>
  
   <label for="text">Parent Name:</label><br>
  <input type="text" id="pname" name="pname" value=""><br>
  

      <label for="contact">Parent Contact:</label><br>
  <input type="number" id="phone" name="phone" value=""><br>
  
  <label for="class">Class:</label><br>
   <select name="class">
    <option>--------Select Class--------</option>
   <?php


$sql="SELECT* FROM class";
$result=mysqli_query($conn,$sql);
$row=mysqli_num_rows($result);
if ($row>0) {
    while($row=mysqli_fetch_array($result)){
        echo'
     <option value='.$row['c_id'].'>'.$row['class'].' </option>';
   }}?> 

</select><br>

<label for="class">Option:</label><br>
<select name="section">
    <option>--------Select Section--------</option>
   <?php


$sql="SELECT* FROM section";
$result=mysqli_query($conn,$sql);
$row=mysqli_num_rows($result);
if ($row>0) {
    while($row=mysqli_fetch_array($result)){
        echo'
     <option value='.$row['id'].'>'.$row['section'].' </option>';
   }}?> 

</select><br><br>


      </div>
      <div style="height: 3rem;" class="modal-footer">
        <button style="height: 30px;" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button style="height: 30px" type="submit" name="save" class="btn btn-success">ADD</button>
        </form>

       <?php
       
       


if(isset($_POST['save'])) {
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $phone=$_POST['phone'];
  $class=$_POST['class'];
  $section=$_POST['section'];
  $email=$_POST['email'];
  $pname=$_POST['pname'];
 
  $status='normal';
  $datess=date('D,M,Y');
    
     $sql="INSERT INTO `users`(`u_id`, `fname`, `lname`, `email`, `username`, `phone`, `position`, `password`, `dates`, `timess`, `status`, `account_type`) VALUES (null,'$fname','lname','$email','$username','$phone','$position','$password','$datess',null,'$status','$account_type')";


$res=mysqli_query($conn,$sql);
if ($res) {
  ?>
<script>
  alert("successful registration");

</script>

<?php

  }}
  ?>



      </center>
      </div>


    </div>
  </div>
</div>



</div>

<table border="1" style="background: grey;width: 55rem; ">
    <tr>
        <th style="width: 5rem;">#</th>
        <th>Fname</th>
        <th>Lname</th>
        <th>Email</th>
        <th>Class</th>
        <th>Option</th>
        <th>Parent Name</th>
        <th>Parent Phone</th>
        <th>Date</th>
         <th>Vacancy</th>
         <th>Status</th>
        <th>Update</th>
        <th>Delete</th>
        

</tr>


    </tr>

<?php


$sql="SELECT* FROM student";
$result=mysqli_query($conn,$sql);
$row=mysqli_num_rows($result);
if ($row>0) {
    $count=1;
    while($row=mysqli_fetch_array($result)){
        echo'
        <tr>

        <td>' .$count. '</td>
        <td>' .$row["fname"]. '</td>
        <td>' .$row["lname"]. '</td>
        <td>' .$row["email"]. '</td>
        <td>' .$row["class"]. '</td>
        <td>' .$row["combination"]. '</td>
        <td>' .$row["parentname"]. '</td>
        <td>' .$row["parentcontact"]. '</td>
        <td>' .$row["dates"]. '</td>
        <td>' .$row["vacancy"]. '</td>
        
        <td>' .$row["status"]. '</td>
        <td><a class="a" href="edit.php?id='.$row["id"].'">Update</a></td>
     <td><a class="a" href="delete.php?id='.$row["id"].'">Delete</a></td>
        </tr>';
        $count++;

    }
   
}
?>
</table>
</section>



       
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 <?php include 'footer.php'; ?>