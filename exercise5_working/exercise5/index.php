<?php
include_once 'dbconfig.php';
include 'mypage4.php';
// delete condition
if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM users WHERE user_id=".$_GET['delete_id'];
 mysqli_query($link, $sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
?>
<!DOCTYPE html>
<html>
<head>
<style>
    
    img.upper{
        position:center;
        width:200px;
        height:200px;
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
    
    #content{
        padding: 0.3em;
        color: black;
        clear:left;
        text-align: center;
        font-family: Times New Roman;
        font-size: 16pt;
    }
    
    table, th, td{
        border-style:double;
        border-collapse: collapse;
        text-align: center;
        padding: 5px;
    }
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FORM</title>
<script type="text/javascript">
function edt_id(id)
{
 if(confirm('Sure to edit ?'))
 {
  window.location.href='edit_data.php?edit_id='+id;
 }
}
function delete_id(id)
{
 if(confirm('Sure to Delete ?'))
 {
  window.location.href='index.php?delete_id='+id;
 }
}
</script>
</head>
<body>
<center>
 <header>
    <a href="add_data.php"><font color = "black">You may add your data here</a></font>
    <br>
    <br>
    <br>
    <table align="center">
    <th><font size ="4">Name</th></font>
    <th><font size ="4">Nickname</th></font>
    <th><font size ="4">Email</th></font>
    <th><font size ="4">Home Address</th></font>
    <th><font size ="4">Gender</th></font>
    <th><font size ="4">Cellphone Number</th></font>
    <th><font size ="4">Comment</th></font>
  </header>
    <th colspan="2"><font size="4">Operations</th></font>
    
    
    <?php
 $sql_query="SELECT * FROM users";
 $result_set=mysqli_query($link, $sql_query);
 while($row=mysqli_fetch_row($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
        <td><?php echo $row[4]; ?></td>
        <td><?php echo $row[5]; ?></td>
        <td><?php echo $row[6]; ?></td>
        <td><?php echo $row[7]; ?></td>
        
  <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="b_edit.png" align="EDIT" /></a></td>
  <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="b_drop.png" align="DELETE" /></a></td>
        </tr>
        <?php
 }
 ?>
    </table>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</center>
</body>
</html>