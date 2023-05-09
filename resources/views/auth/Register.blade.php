<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lottery</title>
    <link rel="shortcut icon" href="../Images/logo.png" type="image/x-icon">
    <link href="../css/login.css" rel="stylesheet" type="text/css"> <!-- Thay đổi đường dẫn đến tệp CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body style="overflow: hidden">
<section>
    <div class="form-box">
        <h2>Register</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="inputbox">
                <ion-icon name="people-outline"></ion-icon>
                <input type="text" name="name" id="name" required>
                <label for="name">Name</label>
            </div>
            <div class="inputbox">
                <ion-icon name="mail-outline"></ion-icon>
                <input type="email" name="email" id="email" required>
                <label for="email">Email</label>
            </div>
            <div class="inputbox">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input type="password" name="password" id="password" required>
                <label for="password">Password</label>
            </div>
            <div class="inputbox">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input type="password" name="password_confirmation" id="re-password" required>
                <label for="re-password">Confirm Password</label>
            </div>
            <button type="submit">Sign In</button>
            <div class="register">
                <p>You are have account? <a href="{{ route('login') }}">Login</a></p>
            </div>
        </form>
    </div>
</section>
<script>
    $(document).ready(function () {
        $('#sub').on('click', function (e) {
            const password = $('#password').val();
            const confirmPassword = $('#re-password').val();

            if (password !== confirmPassword) {
                e.preventDefault();
                alert('Mật khẩu và mật khẩu xác nhận không trùng khớp. Vui lòng kiểm tra lại.');
            }
        });
    });
</script>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>
