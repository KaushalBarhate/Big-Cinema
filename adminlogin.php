<!DOCTYPE html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>BIG Cinema</title>
    <link rel="icon" type="image/png" href="img/logo.png">
</head>
<body>
    <div class="box">
        <img src="img/avatar.png" class="user">
        <h1>Login Here</h1>
        <form name="myform"  action="admin.php" method="POST" >
            <p>Email</p>
            <input type="email" name="email" placeholder="Enter Email ID " required="">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password" required="">
            <input type="submit" name="" value="Login" >
            <br><br>
            <a href="login.html">Customer Login</a>
        </form>      
    </div>
</body>
</html>