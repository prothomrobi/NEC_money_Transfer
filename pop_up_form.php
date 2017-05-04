<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/form_style.css" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container1">
  
  <!-- Trigger the modal with a button -->
	<div  style="float: right; width:150px; margin-bottom:10px;">
		<button style="background:#8CBE42; border-color: yellow;" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Apply Now</button>
	</div>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close"  data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
		  <?php //session_start();

if(isset($_POST["btnSubmit"])){
	
	$user_name=$_POST["txtUn"];
	$password=$_POST["txtPass"];
	$full_name=$_POST["txtFn"];
	$email=$_POST["txtEmail"];
	$phone=$_POST["phn"];
	$sex=$_POST["rdo"];
	$dof=$_POST["dof"];
	$address=htmlspecialchars($_POST["ads"]);
	
	$dof = date('d-m-y', strtotime($dof));
		//--provide validation here---//
	
	//Radio button code
	
	/*$a=array("male","female");
	foreach($a as $k=>$v){
	 if($_POST["rdo"]==$v){
	 	$sex=$v;
	 }
	}*/
	/*$ar=array("php","java","c++","perl");
	
	foreach($ar as $k=>$vr){
	
	echo "<option value='$k'>$vr</option>";
	}*/
	

	$r=$db->query("insert into user (user_name,password,full_name,email,phone_no,sex,dof,address) values ('$user_name','$password','$full_name','$email','$phone','$sex','$dof','$address')");
	
	if($r){
		
		echo "<div class='success'>Successfully created at id $db->insert_id</div>";	
	 	 
	}else{
	   echo "<div class='error'>Fail to Create</div>";	
	  
	}
	
}

?>

<script>
$(function() {
$( "#datepicker" ).datepicker({
changeMonth: true,
changeYear: true
});
});
</script>

<div style="width:100%; margin-top:20px;" class="form-style-10">
<h1>Application Form!<span>Please input information carefully !</span></h1>
<form action="#" method="post" enctype="multipart/form-data">
    <div class="section"><span>1</span>Information</div>
    <div class="inner-wrap">
        <label>First Name <input type="text" name="txtFn" required /></label>
        <label>Last Name <input type="text" name="texLn" required /></label>
    </div>
		
	<div class="section"><span>2</span>Mail Information</div>
        <div class="inner-wrap">
              
        <label>Email ID<input type="text" name="txtEmail" required /></label>
        
    </div>
		
	<div class="section"><span>3</span>Personal Information</div>
        <div class="inner-wrap">
        <label>Phone <input type="text" name="phn" required/></label>
        
        <label>Applied For <textarea name="ads" required="required" ></textarea></label>
    </div>

	
		<?php 
			if(isset($_POST["btnSubmit"])){
		
			//define("LOCATION","images");
			$id=$_SESSION["s_id"];
			
			$file_name=$_FILES["file"]["name"];
			$file_type=$_FILES["file"]["type"];
			$file_tmp_name=$_FILES["file"]["tmp_name"];
			
			$file_size=$_FILES["file"]["size"];
			
			$r=move_uploaded_file($file_tmp_name,"Image/".$db->insert_id.".jpg");
			
			if($r==1){
			echo "<div>Successfully uploaded!<div>";
			
			echo "<img src='Image/".$db->insert_id.".jpg' width='100' />"; 
			
			}else{
				 
			 echo "File could not be uploaded.";	 
				 
			}
		}
		?>

		<div class="file">
		<input type="file" name="file">
        
        	
        </div>
		<div class="section"></div>
        <div class="button-section">
        
        <input type="submit" name="btnSubmit" value="Submit" />
     
        </div>
    
 </form>
</div>
	<div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
	</div>
	
		
    </div>
  </div>
 </div>

</div>
</body>

</html>
	
      
  


