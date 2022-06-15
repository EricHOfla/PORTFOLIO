<?php
include('nav.php');
?>
<div style="display: flex; flex-wrap: wrap; ">
	<div class="col-lg-4" style="margin: 2rem; padding: 2rem; box-shadow: 0px 0px 20px rgba(1, 41, 112, 0.1);
  background-color: #F9F5F5; height: 24rem;">
		<form class="form-control" method="POST">
			<span>ADD CLASS</span><br>
			<label>Class Name</label>
			<input type="text" name="class" placeholder="e.g: senior 1">
			<input class="btn btn-success" type="submit" name="ADD" value="ADD">
		</form><br><br>
		<form class="form-control" method="POST">
			<span>ADD SECTION</span><br>
			<label>Section Name</label>
			<input type="text" name="class" placeholder="e.g: MPC">
			<input class="btn btn-success" type="submit" name="SAVE" value="ADD">
		</form>

	</div>
<div class="col-lg-4" style="box-shadow: 0px 0px 20px rgba(1, 41, 112, 0.1);
  background-color: #F9F5F5; margin: 2rem; margin-left: 10rem; padding: 2rem">
		<table border="1" style="background: #fff">
    <tr>
        <th style="margin-left:  30rem">Number</th>
        <th>Class Name</th>
        <th>Action</th>
       
        

</tr>


    </tr>

<?php


$sql="SELECT* FROM class";
$result=mysqli_query($conn,$sql);
$row=mysqli_num_rows($result);
if ($row>0) {
    $count=1;
    while($row=mysqli_fetch_array($result)){
        echo'
        <tr>

        <td>' .$count. '</td>
      
        <td>' .$row["class"]. '</td>
       
       <td><a class="a" href="edit.php?s_id='.$row["c_id"].'">Update</a>
       <br><a class="a" href="delete.php?s_id='.$row["c_id"].'">Delete</a></td>
       
        </tr>';
        $count++;

    }
   
}
?>

</table><br><br>

	<table border="1" style="background: #fff">
    <tr>
        <th style="margin-left:  30rem">Number</th>
        <th>Class Name</th>
        <th>Action</th>
       
        

</tr>


    </tr>

<?php


$sql="SELECT* FROM section";
$result=mysqli_query($conn,$sql);
$row=mysqli_num_rows($result);
if ($row>0) {
    $count=1;
    while($row=mysqli_fetch_array($result)){
        echo'
        <tr>


        <td>' .$count. '</td>
      
        <td>' .$row["section"]. '</td>
       
       <td><a class="a" href="edit.php?s_id='.$row["id"].'">Update</a>
       <br><a class="a" href="delete.php?s_id='.$row["id"].'">Delete</a></td>
       
        </tr>';
        $count++;

    }
   
}
?>
</table>
	</div>

	
</section>
<?php
include('footer.php');?>