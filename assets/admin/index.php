<?php include 'nav.php'; ?>

    <section class="section dashboard">
      <div class="row">
     <div class="col-lg-4" style="margin: 2rem;  box-shadow: 0px 0px 20px rgba(1, 41, 112, 0.1);
  background-color: #F9F5F5; height: 5rem; width: auto;">New Message Of The Day
  <div style="display: flex;">
	<?php
$today=date('D,M,Y');
	$sql="SELECT count(sms_id) FROM sms WHERE day='$today'";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_num_rows($result);
	if($row>0){
		while($row=mysqli_fetch_array($result)){
			echo'
			<tr>
			<td><div style="font-size: 3rem">'.$row['count(sms_id)'].'</div></td>
			
			

			</tr>

			';
		}}
			?><i style="font-size: 2rem" class="fa fa-book"></i>
              </div>
       </div>
       

      
    </section>

  </main><!-- End #main -->

  <?php include 'footer.php'; ?>