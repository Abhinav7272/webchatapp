<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title> login page </title>
    <link rel="stylesheet" href="../css/signin.css">
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <div class="nav">
    <nav class="navbar">
        <a class="navbar-brand" href="#">
            <img src="../images/download.jpg" width="30" height="30" alt="">
            <span class ="nav-details">SecureChat</span>
        </a>
        <span class="marginaboutbtn"><button type="button" class="btn btn-outline-success">About Project</button>
         </span>

    </nav>
</div>

    <div class="signin-form">
        <form action="signin.php" method="post">
            <div class="form-header">
                <h2>Sign In </h2>
                <p> Login to SecureChat </p>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control " name="email" placeholder="something@gmail.com" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control " name="pass" placeholder="password" autocomplete="off" required>
            </div>
            <div class="small">Forget password? <a href="forget_pass.php">Click Here</a> </div><br>
            <div class=" form-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_in">Sign In</button>
            </div>
            <div class="text-center">Don't have an account! <a href="signup.php">Create one</a></div>
        </form>
        

    </div>
    <?php include("signin_user.php"); ?>

</body>

</html>