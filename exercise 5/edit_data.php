<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
 $sql_query ="SELECT * FROM sample WHERE id=".$_GET['edit_id'];
 $result_set=mysqli_query($con,$sql_query);
 $fetched_row=mysqli_fetch_array($result_set);
}//end of isset...
if(isset($_POST['btn-update']))
{
  // variables for input data
 $name = $_POST['name'];
 $email = $_POST['email'];
 $nickname = $_POST['nickname'];
 $address = $_POST['address'];
 $comment = $_POST['comment'];
 $gender = $_POST['gender'];
 $cellphone= $_POST['cellphone'];
 
 
 
		// sql query for inserting data into database 
         $sql_query = "UPDATE sample SET name='$name',nickname='$nickname',address='$address',email='$email',comment='$comment',gender='$gender',cellphone='$cellphone' WHERE id=".$_GET['edit_id'];
    
	  // sql query execution function
     		echo $sql_query;
			

 if(mysqli_query($con,$sql_query))
 {

  ?>
  <script type="text/javascript">
  alert('Updated Successfully');
  window.location.href='index.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert(<?php echo $sql_query; ?>);
  </script>
  <?php
 }
 // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
 header("Location: index.php");
}
?>
<style>
.error{
	color: red;
}
</style>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Editting</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<center>
<div id="header">
 <div id="content">
    <label>Editing Information in the Database</label>
    </div>
</div>

<div id="body">
 <div id="content">
    <center><a href="index.php"><----back to main page</a></center><br>
    <form method="post">
    <table align="center">
    <tr>
    <td><input type="text" name="name" placeholder="Complete Name" value="<?php echo $fetched_row['name']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="nickname" placeholder="Nickname" value="<?php echo $fetched_row['nickname']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="email" placeholder="Email address" value="<?php echo $fetched_row['email']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="address" placeholder="Home address" value="<?php echo $fetched_row['address']; ?>" required /></td>
    </tr>
	<tr>
    <td>
	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo $fetched_row['gender']; ?> value="Female">Female
	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo $fetched_row['gender']; ?> value="Male">Male
	</td>
    </tr>
	<tr>
    <td><input type="number" name="cellphone" placeholder="Cellphone Number" value="<?php echo $fetched_row['cellphone']; ?>" required /></td>
    </tr>
	 <td>Comment: <br>
	 <textarea name="comment" rows="10" cols="144"><?php echo $fetched_row['comment']; ?></textarea>
	 </td>
    <tr>
    <td>
    <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>