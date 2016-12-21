<!DOCTYPE html>
<html>
<head>
</head>

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
    
    .hehe {
        width: 200px;
        height: 100px;
    }
    
    p{
        text-align:center;
        font-family:Times New Roman;
        font-size: 15pt;
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
	table {
		font-size: 20px;
		font-family: Lucida Calligraphy;
		cellpadding: 5px;
		table-layout: fixed;
		font-size: 30px;
	}
	tr, td {
		width: 220px;
		font-size: 20px;
	}
	
</style>
<body>
<center>
<br>
<br>
<br>
<table cellpadding="5px">
	<tr>
		<td>
			<label for="name">Name:</label>
		</td>
		<td>
			<?php echo $users_item['name'];?>
		</td>
	</tr>
	
	<tr>
		<td>
			<label for="nickname">Nickname:</label>
		</td>
		<td>
			<?php echo $users_item['nickname'];?>
		</td>
	</tr>
	
	<tr>
		<td>
			<label for="email">E-mail:</label>
		</td>
		<td>
			<?php echo $users_item['email'];?>
		</td>
	</tr>
	
	<tr>
		<td>
			<label for="home">Home Address:</label>
		</td>
		<td>
			<?php echo $users_item['home'];?>
		</td>
	</tr>
	
	<tr>
		<td>
			<label for="gender">Gender:</label>
		</td>
		<td>
			<?php echo $users_item['gender'];?>
		</td>
	</tr>
	
	<tr>
		<td>
			<label for="number">Cellphone Number:</label>
		</td>
		<td>
			<?php echo $users_item['number'];?>
		</td>
	</tr>
	
	<tr>
		<td>
			<label for="comment">Comment:</label>
		</td>
		<td>
			<?php echo $users_item['comment'];?>
		</td>
	</tr>
</table>
</body>
</head>
</html>
