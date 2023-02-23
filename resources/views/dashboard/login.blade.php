<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>

<body>
    <div class="wrapper">

        @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        <section class="form login">
            <header>Login</header>
            <form action="{{ url('/login') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
                @csrf
                <div class="field input">
                    <label for="email">email</label>
                    <input type="email" name="email" placeholder="name@example.com" required
                    oninvalid="this.setCustomValidity('Email tidak boleh kosong')" oninput="setCustomValidity('')">
                </div>
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Enter your password" required oninvalid="this.setCustomValidity('Password tidak boleh kosong')" oninput="setCustomValidity('')">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field button">
                    <input type="submit" name="submit" value="Login">
                </div>
            </form>
            {{-- <div class="link">Not yet signed up? <a href="/view/signup.php">Signup now</a></div> --}}
        </section>
    </div>

    <script src="assets/js/script.js"></script>
    {{-- <script src="javascript/signup.js"></script> --}}
</body>

</html>
