
   
<?php
session_start();

include ("lidhja.php");

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($lidhja, "select 'username', 'password' from admin
        where username='$username' and password='$password'");

 
    $user_matched = mysqli_num_rows($result);

   
    if ($user_matched > 0) {
        
        $_SESSION['password'] = $password;
        header("location: dashbord.php");
    } else {
        echo "<b>username  ose password nuk perputhen <b><br/><br/>";
    }
}
?> 

<html>  
<head>  
    <title>Log In</title>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">  
</head>  
<body>  
    
    <div style="margin-top:250px; margin-left:500px;" >  
        <h1>Login</h1>  
        <form  action = "login.php"  method = "POST">  
            <p>  
                <label> UserName*: </label>  
                <input type = "text" id ="username" name  = "username" required/>  
            </p>  
            <p>  
                <label> Password*: </label>  
                <input type = "password" id ="password" name  ="password" required />  
            </p>  
            <p>     
                <input class="btn btn-secondary" type =  "submit" id = "btn"  name="login" value = "Login" />  
            </p>  
        </form>  
    </div>  
</body>    

</html> 