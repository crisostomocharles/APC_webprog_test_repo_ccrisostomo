<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM users WHERE user_id=".$_GET['edit_id'];
 $result_set=mysqli_query($link, $sql_query);
 $fetched_row=mysqli_fetch_array($result_set);
}

if(isset($_POST['btn-update']))
{
 // variables for input data
 $name = $_POST['name'];
 $nickname = $_POST['nickname'];
 $email = $_POST['email'];
 $home = $_POST['home'];
 $gender = $_POST['gender'];
 $number = $_POST['number'];
 $comment = $_POST['comment'];

 // sql query for update data into database
 $sql_query = "UPDATE users SET name='$name', nickname='$nickname',email='$email', home='$home', gender='$gender', number='$number', comment='$comment' WHERE user_id=".$_GET['edit_id'];
 
 // sql query execution function
 if(mysqli_query($link,$sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Updated Successfully');
  window.location.href='index.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while updating data');
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

<!DOCTYPE html PUBLIC>
<html>
<head>
<style>
    
    img.upper{
        position:center;
        width:200px;
        height:200px;
    }
    
    p.intro{
        text-align:center;
        font family:Times New Roman;
        font-size: 20pt;
        color:rgb(253, 253, 253);
    }
    
    img.myself{
        width: 950px;
        height: 200px;
        position: center;
    }
    
    li.aboutMe{
        font-family: Times New Roman;
        font-size:20pt;
        color:rgb(253, 253, 253);
    }
    
    p{
        text-align:center;
        font-family:Times New Roman;
        font-size: 20pt;
        color: rgb(253, 253, 253); 
    }
    
    p.form{
        font-size: 16pt;
        color:rgb(253, 253, 253);
        font-family: Times New Roman;
    }
</style>
</head>

<body>

<title>Add Data</title>

</head>
<body>

<center>

<div id="header">
 <div id="content">
    <label><font color="white" font face = "Lucida Calligraphy">You can edit your entered data here<font size = "5"></label>
    </div>
</div>

<div id="body">
 <div id="content">
    <form method="post"><br>
  
    <table align="center">
    <tr><td><label>Name:</label></td>
  <td><input type="text" name="name" placeholder="Name" value="<?php echo $fetched_row['name'];?>" required/></td>
    </tr>
  
    <tr><td><label>Nickname:</label></td>
  <td><input type="text" name="nickname" placeholder="Nickname" value="<?php echo $fetched_row['nickname'];?>"required/></td>
    </tr>
  
    <tr><td><label>Email:</label></td>
  <td><input type="text" name="email" placeholder="Email" value="<?php echo $fetched_row['email'];?>" required></td>
    </tr>
  
  <tr><td><label>Home Address:</label></td>
  <td><textarea id ="txt" name="home" placeholder ="home address" rows ="3" cols="30"><?php echo $fetched_row['home'];?></textarea></td>
    </tr>
  
  <tr><td><label>Gender:</label></td>
    <td>
      <input type="radio" name="gender"  <?php if (isset($gender) && $gender=="female") echo $fetched_row['gender']; ?> value="female">Female
      <input type="radio" name="gender"  <?php if (isset($gender) && $gender=="male") echo $fetched_row['gender']; ?> value="male">Male
    </td>
    </tr>
  
  <tr><td><label>Cellphone Number:</label></td>
    <td><input type="text" name="number" placeholder="Cellphone Number" value="<?php echo $fetched_row['number'];?>"required></td>
    </tr>
  
  <tr><td><label>Comment:</label></td>
  <td><textarea id ="txt" name="comment" placeholder="Comment" rows="5" cols="40"><?php echo $fetched_row['comment'];?></textarea></td>
    </tr>
  
  <tr>
  <td>
    <button id="btn" type="submit" name="btn-update"><strong>UPDATE</strong></button>
  <button id="btn" type="submit" name="btn-cancel"><strong>Cancel</strong></button>
  </td>
  </tr>
  
  </table>  
    </form>
    </div>
</div>
</center>

</body>
</html>