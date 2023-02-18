<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>Login</header>
            <form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
                @csrf
                <div class="error-text"></div>
                <div class="field input">
                    <label>Username</label>
                    <input type="text" name="username" placeholder="Enter your Username" required>
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter your password" required>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field button">
                    <input type="submit" name="submit" value="Login">
                </div>
            </form>
            <div class="link">Not yet signed up? <a href="/view/signup.php">Signup now</a></div>
        </section>
    </div>

    <script src="assets/js/script.js"></script>
    <script src="javascript/signup.js"></script>
</body>
</html>