<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>login to your account</title>
    <link rel="stylesheet" href="../css/signup.css">
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
        <span><button type="button" class="btn btn-outline-success">About Project</button>
         </span>

      </nav>
</div>

    <div class="signup-form">
        <form action="signup_user.php" method="post">
            <div class="form-header">
                <h2>Sign Up </h2>
                <p> SignUp to SecureChat </p>
                <p>Fill the form details to connect! </p>
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control " name="user_name" placeholder="example" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" class="form-control " name="user_email" placeholder="something@gmail.com" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control " name="user_pass" placeholder="password" autocomplete="off" required>
            </div>



            <div class="form-group">
                <label>country</label>
                <select class="form-control " name="user_country">
                <option disabled=""> select country</option>
                <option>India</option>
                <option>Bangladesh</option>
                <option>Shri lanka </option>
                <option>China</option>
                <option>USA</option>
                </select>
            </div>
            <div class="form-group">
                <label>Gender</label>
                <select class="form-control " name="user_gender">
                <option disabled=""> select gender</option>
                <option>Male</option>
                <option>Female</option>
                <option>Others</option>
                </select>
            </div>
            <div class="form-group">
                <label class="checkbox_inline"><input type="checkbox" required>I accept terms and conditions<a href="#">. know more</a>.</label>
                
            </div>
            <div class=" form-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_up">Sign Up</button>
            </div>
            <div class="text-center">Already hava Account! <a href="signin.php"> SignIn</a></div>
        </form>
        <?php include("signup_user.php"); ?>

    </div>
</body>

</html>