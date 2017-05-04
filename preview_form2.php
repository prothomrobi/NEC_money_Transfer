<!DOCTYPE html>
<html>
<head>
	<title>Preview Page </title>
</head>
<body>
<?php
include('header.php');
?>

<hr>
 <div style="margin-left: 500px;">
 <form action="" method="POST">
  <table border="2" style="color: #70BF73">
      <tr>
          <th>Attributes</th>
          <th>Value</th>
      </tr>
      <tr>
          <td>Name</td>
          <td><?php echo $_POST['name']; ?></td>
      </tr>
      <tr>
          <td>Father Name</td>
          <td><?php echo $_POST['f_name']; ?></td>
      </tr>
      <tr>
          <td>Date Of Birth</td>
          <td><?php echo $_POST['date']; ?></td>
      </tr>
      <tr>
          <td>Birth City</td>
          <td><?php echo $_POST['b_city']; ?></td>
      </tr>
      <tr>
          <td>Birth Country</td>
          <td><?php echo $_POST['b_country']; ?></td>
      </tr>
      <tr>
          <td>Nationality</td>
          <td><?php echo $_POST['nationality']; ?></td>
      </tr>
      <tr>
          <td>Division/Region</td>
          <td><?php echo $_POST['region']; ?></td>
      </tr>
      <tr>
          <td>City/Distict</td>
          <td><?php echo $_POST['city']; ?></td>
      </tr>
      <tr>
          <td>City/District Code</td>
          <td><?php echo $_POST['city_code']; ?></td>
      </tr>
      <tr>
          <td>State/Province</td>
          <td><?php echo $_POST['state']; ?></td>
      </tr>
      <tr>
          <td>State/Province Code</td>
          <td><?php echo $_POST['state_code']; ?></td>
      </tr>
      <tr>
          <td>Post Code</td>
          <td><?php echo $_POST['p_code']; ?></td>
      </tr>
      <tr>
          <td>Mobile</td>
          <td><?php echo $_POST['mobile']; ?></td>
      </tr>
      <tr>
          <td>Phone</td>
          <td><?php echo $_POST['phone']; ?></td>
      </tr>
      <tr>
          <td>Fax</td>
          <td><?php echo $_POST['fax']; ?></td>
      </tr>
      <tr>
          <td>E-mail</td>
          <td><?php echo $_POST['email']; ?></td>
      </tr>
      <tr>
          <td>Contract Person</td>
          <td><?php echo $_POST['c_person']; ?></td>
      </tr>

      <tr>
          <td>Image</td>
          <td><?php echo $_POST['image']; ?></td>
      </tr>
      <tr>
          <td>Sign</td>
          <td><?php echo $_POST['sign']; ?></td>
      </tr>
      <tr>
          <td>Address</td>
          <td><?php echo $_POST['address']; ?></td>
      </tr>
      
      <tr>
          <td><button style="width: 80px; float: right; border-radius: 10px; margin-right:15px;" name="edit" type="">Edit</button></td>
          <td><button style="width: 100px; float: right; border-radius: 10px; margin-right:15px;" name="submit" type="submit">Sign Up</button></td>
      </tr>
  </table>
    
  </form>
 </div>
<?php include 'preview_form.php'; ?>

<?php
include('footer.php');
?>
</body>
</html>
