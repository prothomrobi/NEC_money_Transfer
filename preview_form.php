<?php 
session_start();

if( isset($_POST['submit']) ){

if (isset($_POST['name'])&& isset($_POST['f_name'])&& isset($_POST['date'])&& isset($_POST['b_city'])&& isset($_POST['b_country'])&& isset($_POST['nationality'])&& isset($_POST['region'])&& isset($_POST['city'])&& isset($_POST['city_code'])&& isset($_POST['state'])&& isset($_POST['state_code'])&& isset($_POST['p_code'])&& isset($_POST['mobile'])&& isset($_POST['phone'])&& isset($_POST['fax'])&& isset($_POST['email'])&& isset($_POST['c_person'])&& isset($_POST['image'])&& isset($_POST['sign'])&& isset($_POST['address'])) {

  include 'db_connect.php';

    $sql="INSERT INTO agent_registration(name,f_name,b_date,b_city,b_country,
      nationality,region,city,city_code,state,s_code,s_post_code,mobile,phone,fax,email,cont_person,
      image,sign,address)
    VALUES
     ('$_POST[name]','$_POST[f_name]','$_POST[date]','$_POST[b_city]','$_POST[b_country]','$_POST[nationality]','$_POST[region]','$_POST[city]','$_POST[city_code]','$_POST[state]','$_POST[state_code]','$_POST[p_code]','$_POST[mobile]','$_POST[phone]','$_POST[fax]','$_POST[email]','$_POST[c_person]','$_POST[image]','$_POST[sign]','$_POST[address]')";
  
  if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
echo '<script>alert("Entered data successfully");</script>';
}

}

// $con = mysqli_connect("localhost","root","","db_nec");

// // Check connection
// if (mysqli_connect_errno())
//   {
//   echo "Failed to connect to MySQL: " . mysqli_connect_error();
//   }

// if (isset($_POST['submit']))
// {

// $name = $_POST["name"];
// $f_name = $_POST["fname"];
// $date = $_POST["date"];
// $b_city = $_POST["b_city"];
// $b_country = $_POST["b_country"];
// $nationality = $_POST["nationality"];
// $region = $_POST["region"];
// $city = $_POST["city"];
// $city_code = $_POST["city_code"];
// $state = $_POST["state"];
// $state_code = $_POST["state_code"];
// $p_code = $_POST["p_code"];
// $mobile = $_POST["mobile"];
// $phone = $_POST["phone"];
// $fax = $_POST["fax"];
// $email = $_POST["email"];
// $c_person = $_POST["c_person"];
// $image = $_POST["image"];
// $address = $_POST["address"];
// $sign = $_POST["sign"];


// require("fpdf/fpdf.php");

//  $pdf=new FPDF();
//  $pdf->AddPage();
//  $pdf->SetFont("Arial","B",16);
//  $pdf->Cell(0,10,"Welcome {$name}",1,0,C);
//  $pdf->output();

// }

?>