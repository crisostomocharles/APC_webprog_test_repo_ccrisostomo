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
    body {
    background-color: lightblue;
}
h1 {
    color: Red;
    text-align: center;
}
    
    
    p{
        text-align:center;
        font-family:calibri;
        font-size: 20pt;
        color: rgb(0, 0, 0); 
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
<center>
<h1>Welcome to my profile</h1>
<p>My name is: Charles Crisostomo.</p>
<p>You can call me charles.</p>
<p>My hobby is playing video games.</p>

<img src = "<?php echo base_url('css/pics/download.jpg')?>" alt="Playing video games" style="width:300px;height:168px;">
<img src="<?php echo base_url('css/pics/images.jpg')?>" alt="Playing video games" style="width:300px;height:168px;">
</center>
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
<br>
<h1>These are my favourite websites:</h1>
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
<center>
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
</center>

</body>
</html>

