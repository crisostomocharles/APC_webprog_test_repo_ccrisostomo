

<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
 $name = $_POST['name'];
 $nickname = $_POST['nickname'];
 $email = $_POST['email'];
 $home = $_POST['home'];
 $gender=$_POST['gender'];
 $number = $_POST['number'];
 $comment = $_POST['comment']; 
 // variables for input data

 // sql query for inserting data into database
 $sql_query = "INSERT INTO users(name,nickname,email,home,gender,number,comment) VALUES('$name','$nickname','$email','$home','$gender','$number','$comment')";
 
 // sql query execution function
 if(mysqli_query($link, $sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Inserted Successfully ');
  window.location.href='index.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while inserting your data');
  </script>
  <?php
 }
 // sql query execution function
}
?>

<?php
// define variables and set to empty values
$nameErr = $nicknameErr = $emailErr = $homeErr = $genderErr = $numberErr = "";
$name = $nickname = $email = $home = $gender = $number = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
      $name = "";
    }
  }
  
  if (empty($_POST["nickname"])) {
    $nicknameErr = "Nickname is required";
  } else {
    $nickname = test_input($_POST["nickname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nicknameErr = "Only letters and white space allowed"; 
      $nickname = "";
    }
  }

  if (!empty($_POST["email"])) {
    $email = test_input($_POST["email"]);
   // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
      $email = "";
    }
  } else {
        $emailErr = "Email is required";
        $email = "";
  }
  
    if (empty($_POST["home address"])) {
    $home = "";
  } else {
    $home = test_input($_POST["home address"]);
  }
  
    if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  
    if (!empty($_POST["number"])) {
        $number = test_input($_POST["number"]);
        if (strlen($number) < 11) {
        $numberErr = "invalid mobile number";
        $number = "";
            if (!$number[0]) {
                $numberErr = "invalid format";
                $number = "";
            }
        }
    } else{
        $numberErr = "Number is required";
    }
    
    if (empty($_POST["comment"])) {
        $comment = "";
    } else {
        $comment = test_input($_POST["comment"]);
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<!DOCTYPE html>
<html>
<head>
<style>
    body{
        background-color: #CFD8DC;
    }
    h1 {
    color: Red;
    text-align: center;
    }
    
    #ha{
        text-align:center;
        font-family:times new roman;
        font-size: 20pt;
        color: black; 
    }
    
    #form{
        font-size: 16pt;
        color:rgb(0, 0, 0);
        font-family: Times New Roman;
    }
    
    #btn {
        font-family: Times New Roman;
        font-size:20px;
    }
    div {
    border: 1px solid black;
    margin-top: 100px;
    margin-bottom: 100px;
    margin-right: 150px;
    margin-left: 80px;
    background-color: lightgreen;
    }


#demo {
    color: Black;
}
</style>
</head>
<body>
<center>
<h1>Welcome to my profile</h1>
<p id="ha">My name is: Charles Crisostomo.</p>
<p id="ha">You can call me charles.</p>
<p id="ha">My hobby is playing video games.</p>

<img src="download.jpg" alt="Playing video games" style="width:300px;height:168px;">
<img src="images.jpg" alt="Playing video games" style="width:300px;height:168px;">


<h1>These are my favourite websites:</h2>

<div>

<p><a href="http://www.facebook.com/html/">www.facebook.com</a></p>
<p><a href="http://www.dotabuff.com/html/">www.dotabuff.com</a></p>
<p><a href="http://www.jobstreet.com/html/">www.jobstreet.com</a></p>
<p><a href="http://www.youtube.com/html/">www.youtube.com</a></p>.</div>

</body>
</html>


<h1>Trivia Questions:</h1>

<p id="demo">What is my favourite online game?</p>

<button type="button" onclick="document.getElementById('demo').innerHTML = 'Dota 2. EZ'">Answer</button>

<p id="demo">What is my favourite social media site?</p>

<button type="button" onclick="document.getElementById('demo').innerHTML = 'www.facebook.com'">Answer</button>

<p id="demo">What site do I use to search for jobs?</p>

<button type="button" onclick="document.getElementById('demo').innerHTML = 'www.jobstreet.com'">Answer</button>

<p id="demo">What site I usually go into when I want to watch videos?</p>

<button type="button" onclick="document.getElementById('demo').innerHTML = 'www.youtube.com'">Answer</button>

<p id="demo">My whole name is Charles Kevin Crisostomo. You can call me ____?</p>

<button type="button" onclick="document.getElementById('demo').innerHTML = 'Charles'">Answer</button>

</center>
<br>
<br>
<br>
<br>
<br>
</body>
</html>

