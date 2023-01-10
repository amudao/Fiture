<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="bootstrap-4.6.2/dist/js/bootstrap.min.js"></script>
    <script src="jquery.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>signUp</title>
 
</head>

<body>

    <form action="process.php" method="POST">
        <h3>Sign Up</h3>
        <div class="form-row">
            <div class="form-group col-md-12">
                <input type="text" class="form-control" name="username" placeholder="Username">
                <i class="fa-solid fa-user"></i>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <input type="text" class="form-control" name="fname" placeholder="First Name">
                <i class="fa-solid fa-user"></i>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <input type="text" class="form-control" name="lname" placeholder="Last Name">
                <i class="fa-solid fa-user"></i>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <input type="password" class="form-control"  name="pass" placeholder="Password">
                <i class="fa-solid fa-lock"></i>
                <i class="fa-solid fa-eye-slash" id="hidepass"></i>
                <i class="fa-solid fa-eye" id="viewpass"></i>
            </div>
        </div>


        <button type="submit" name="reg_user" class="btn btn-primary">Sign Up </button>
        <p> Already have an Account? <a href="login.php">Sign In</a> </p>
    </form>


</body>

<script>
    $('#hidepass').click(function (){
        $(this).hide();
        $('#viewpass').css('display','block');

        $('#password').attr('type','text');
    });
    $('#viewpass').click(function (){
        $(this).hide();
        $('#hidepass').css('display','block');

        $('#password').attr('type','password');
    });
</script>

</html>