<!DOCTYPE html>
<html>
<head>
<style>
body {
    background-color: lightblue;
}
h1 {
    color: Red;
    text-align: center;
}
p {
    font-family: calibri;
    font-size: 20px;
}
</style>
</head>
<body>


</body>
</html>

<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>Welcome to my profile</h1>
<p>My name is: Charles Crisostomo.</p>
<p>You can call me charles.</p>
<p>My hobby is playing video games.</p>

<img src="dota2.jpg" alt="Playing video games" style="width:300px;height:168px;">
<img src="dota_2.jpg" alt="Playing video games" style="width:300px;height:168px;">

</body>
</html>



<!DOCTYPE html>
<html>
<head>
<style>
div {
    border: 1px solid black;
    margin-top: 100px;
    margin-bottom: 100px;
    margin-right: 150px;
    margin-left: 80px;
    background-color: lightgreen;
}
h1 {
    color: Red;
    text-align: center;
}
p {
    font-family: calibri;
    font-size: 12px;
}
</style>
</head>
<body>

<h1>These are my favourite websites:</h2>

<div>

<p><a href="http://www.facebook.com/html/">www.facebook.com</a></p>
<p><a href="http://www.dotabuff.com/html/">www.dotabuff.com</a></p>
<p><a href="http://www.jobstreet.com/html/">www.jobstreet.com</a></p>
<p><a href="http://www.youtube.com/html/">www.youtube.com</a></p>.</div>

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<h1>Trivia Questions:</h1>
<style>
p {
    font-family: calibri;
    font-size: 18px;
</style>
<p id="demo"> </p>


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


<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr =  $addressErr = $cellphoneErr= "";
$name = $nickname = $email = $cellphone = $gender = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
  
     if (empty($_POST["nickname"])) {
    $nickname = "";
  } else {
    $nickname = test_input($_POST["nickname"]);
  }

 if (empty($_POST["cellphone"])) {
    $cellphoneErr= "Cellphone number is required.";
  } else {
    $cellphone = test_input($_POST["cellphone"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9 ]*$/",$cellphone)) {
      $cellphoneErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Nickname: <input type="text" name="nickname" value="<?php echo $nickname;?>">
  <br><br>
  Cellphone No.: <input type="number" name="cellphone" value="<?php echo $cellphone;?>">
  <span class="error">* 
  <br><br> 
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $nickname;
echo "<br>";
echo $cellphone;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>

</button>
</body>
</html>

