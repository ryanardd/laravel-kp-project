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
    <div class="wrapper-body">
        <div class="wrapper">
            <section class="form login">
                <header>Login</header>
                <form action="{{ url('/login') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    {{-- cek validasi apakah ada error pada login --}}
                    @if (session()->has('loginError'))
                        <div class="error-text" role="alert">
                            {{ session('loginError') }}
                        </div>
                    @endif
                    <div class="field input">
                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="name@example.com" value="{{ old('email') }}"
                            required oninvalid="this.setCustomValidity('Email tidak boleh kosong')"
                            oninput="setCustomValidity('')">
                        @error('email')
                            <div class="text-danger mt-2">Mohon diisi, Judul tidak boleh kosong!</div>
                        @enderror
                    </div>
                    <div class="field input">
                        <label for="password">Password</label>
                        <input type="password" name="password" placeholder="Enter your password" required
                            oninvalid="this.setCustomValidity('Password tidak boleh kosong')"
                            oninput="setCustomValidity('')">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field button">
                        <input type="submit" name="submit" value="Login">
                    </div>
                </form>
            </section>
        </div>
    </div>
    <script src="assets/js/script.js"></script>
</body>

</html>
