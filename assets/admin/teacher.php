<?php include 'nav.php'; ?>

    <section class="section dashboard">
      
  <!-- Button trigger modal -->
<button style="float: right;" type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><small>New Teacher.<i class="fa fa-plus"></i></small>
  
  
</svg>
</button><br><br>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div style="height: 2rem;" class="modal-header">
        <small class="modal-title" id="staticBackdropLabel">Register Teacher</small>
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
  
   <label for="username">username:</label><br>
  <input type="text" id="username" name="username" value=""><br>
   <label for="contact">contact:</label><br>
  <input type="number" id="phone" name="phone" value=""><br>
  <label for="class">Type:</label><br>
 <!--  <input type="text" id="class" name="class" value=""><br><br> -->

<select name="account_type">
    <option>--------Select Type--------</option>
    <option>Admin</option>
    <option>Staff</option>
    
</select><br>


  <label for="password">password:</label><br>
  <input type="password" id="password" name="password" value=""><br><br>
  



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
  $username=$_POST['username'];
  $password=$_POST['password'];
  $email=$_POST['email'];
  $position=$_POST['position'];
  $account_type=$_POST['account_type'];
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
        <th>Clafication</th>
        <th>Contact</th>
        <th>email</th>
       
        <th>Date</th>
        
         <th>Status</th>
        <th>Update</th>
        <th>Delete</th>
        

</tr>


    </tr>

<?php


$sql="SELECT* FROM teachers";
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
        <td>' .$row["clafication"]. '</td>
        <td>' .$row["contact"]. '</td>
        <td>' .$row["email"]. '</td>
        
        <td>' .$row["dates"]. '</td>
      
        <td>' .$row["status"]. '</td>
        <td><a class="a" href="edit.php?s_id='.$row["te_id"].'">Update</a></td>
     <td><a class="a" href="delete.php?s_id='.$row["te_id"].'">Delete</a></td>
        </tr>';
        $count++;

    }
   
}
?>
</table>
</section>
       
   

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 <?php include 'footer.php'; ?>