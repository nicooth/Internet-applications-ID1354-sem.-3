<!DOCTYPE html>
<html>
<head>
    <title>Tasty Recipes</title>  
    <link href="resources/css/reset.css" rel ="stylesheet" type="text/css">
    <link href="resources/css/style.css" rel="stylesheet" type="text/css"> 
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>   
    <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="calendar.php">CALENDAR</a></li>
        <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">RECIPES</a>
        <div class="dropdown-content">
            <a href="meatballs.php">Meatballs</a>
            <a href="pancakes.php">Pancakes</a>
        </div>
        <li class = "login"><a href="doLogin.php">LOGIN</a></li>
    </ul>
    <h1>Login</h1> 
    <div class="logintransbox">
        <div class="imgcontainer">
            <img src="resources/images/chef.png" alt="Avatar" class="avatar">
        </div>
        <form method="post" action="doLoggedIn.php" >
            <div class="container">
                <p>*All fields required</p><br>
                <p><a href="doNewUser.php">Don't have an account? Sign up here!</a></p><br>
                <label>Username</label>
                <input type="text" placeholder="Enter Username" name="uname" required>
                <label>Password</label>
                <input type="password" placeholder="Enter Password" name="psw" required>
                <button type="submit">Login</button>
                <input type="checkbox" checked="checked"> Remember me
            </div>
            <div class="container">
                <button type="button" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>        
    </div>
</body>
</html>