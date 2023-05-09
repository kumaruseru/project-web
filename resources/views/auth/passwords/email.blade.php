<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
</head>
<body>
<h1>{{ config('app.name') }}</h1>
<p>You are receiving this email because we received a password reset request for your account.</p>
<p>Click the button below to reset your password:</p>
<a href="{{ $actionUrl }}">Reset Password</a>
<p>If you did not request a password reset, no further action is required.</p>
<p>Regards,</p>
<p>{{ config('app.name') }}</p>
</body>
</html>
