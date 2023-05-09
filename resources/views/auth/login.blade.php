<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lottery</title>
    <link rel="shortcut icon" href="../Images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<section>
    <div class="form-box">
        <div class="form-value">
            <form action="{{ route('login') }}" method="post">
                @csrf
                <h2>Login</h2>
                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="email" name="email" required>
                    <label for="">Email</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" name="password" required>
                    <label for="">Password</label>
                </div>
                <div class="forget">
                    <label for=""><input type="checkbox" name="remember">Remember Me</label>
                    <a href="{{ route('password.request') }}">Forget Password</a>
                </div>
                <button type="submit">Login</button>
                <div class="social-login">
                    <button type="button" class="social-btn google" onclick="location.href='{{ route('login.provider', 'google') }}'">
                        <ion-icon name="logo-google"></ion-icon>
                        <span>Google</span>
                    </button>
                    <button type="button" class="social-btn facebook" onclick="location.href='{{ route('login.provider', 'facebook') }}'">
                        <ion-icon name="logo-facebook"></ion-icon>
                        <span>Facebook</span>
                    </button>
                    <button type="button" class="social-btn microsoft" onclick="location.href='{{ route('login.provider', 'microsoft') }}'">
                        <ion-icon name="logo-microsoft"></ion-icon>
                        <span>Microsoft</span>
                    </button>
                </div>
                <div class="register">
                    <p>Don't have an account <a href="{{ route('register') }}">Register</a></p>
                </div>
            </form>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
</section>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
