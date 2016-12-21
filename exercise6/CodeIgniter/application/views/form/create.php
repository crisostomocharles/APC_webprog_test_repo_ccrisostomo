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
    </style>
<body>
<center>
<p id="form">Just enter the following details: </p>
<p><span class="error"><u>* required field.</u></p>

<?php echo validation_errors(); ?>
 <?php echo form_open('form/create'); ?>    
   
<table BORDER="1" BORDERCOLOR="BLACK" cellpadding="5px">
    <tr> 
        <td>
            <label for="name">Name:</label>
        </td>
        <td>
            <input type="text" name="name" size="30" />
            <span class="error">*</span>
        </td>
    </tr>
    
    <tr>
        <td>
            <label for="nickname">Nickname:</label>
        </td>
        <td>
            <input type="text" name="nickname" size="30" />
            <span class="error">*</span>
        </td>
    </tr>
        
    <tr>
        <td>
            <label for="email">E-mail:</label>
        </td>
        <td>
            <input type="text" name="email" size="30" />
            <span class="error">*</span>
        </td>
    </tr>
        
    <tr>
        <td>
            <label for="home">Home Address:</label>
        </td>
        <td>
            <textarea name="home" rows="5" cols="30"></textarea>
        </td>
    </tr>

    <tr>
        <td>
            <label for="gender">Gender:</label>
        </td>
        <td>
            <input type="radio" name="gender"<?php if (isset($gender) && $gender=="Female") echo "checked";?> value="Female">Female
            <input type="radio" name="gender"<?php if (isset($gender) && $gender=="Male") echo "checked";?> value="Male">Male
            <span class="error">*</span>
        </td>
    </tr>

    <tr>
        <td>
            <label for="number">Cellphone Number:</label>
        </td>
        <td>
            <input type="text" name="number" size="30" />
            <span class="error">*</span>
        </td>
    </tr>   
    
    <tr>
        <td>
            <label for="comment">Comment:</label>
        </td>
        <td>
            <textarea name="comment" rows="5" size="30"></textarea>
        </td>
    </tr>
</table>
<br>    
        <input id="btn" type="submit" name="btn-save" onclick="location.href='form';">
</form>
</center>
<br>
</body>
</html>