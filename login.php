<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style/signup.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="wrapper container">
        <section class="form-signup">
            <form action="function.php" method="post">
                <div class="title"><h1>Login</h1></div>
                <div class="form-detail">
                    <div class="email-detail">
                        <span>Email</span>
                        <input type="email" required name="email">
                    </div>
                    <div class="username-detail">
                        <span>Username</span>
                        <input type="text" required name="username">
                    </div>
                    <div class="password-detail">
                        <span>Password</span>
                        <input type="password" required="required" name="password">
                    </div>
                    <span>Show password <input type="checkbox" id="showPassword" name="tick" onclick="showpass()"></span>
                </div>
                <div class="link">Haven't created an account? | <a href="signup.php">Signup now</a></div>
                <div class="field">
                    <input type="submit" class="btn btn-primary btn-block" value="Submit" name='signup'>
                </div>
            </form>
        </section>
    </div>
</body>
</html>
