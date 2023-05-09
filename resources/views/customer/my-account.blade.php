<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lottery</title>
    <link rel="shortcut icon" href="../Images/logo.png" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
    <link href="../css/my-account.css" rel="stylesheet" type="text/css" />
    <script href="../js/myaccount.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>My Account</h2>
        <form id="account-form" action="{{ route('my-account.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', Auth::user()->name) }}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', Auth::user()->email) }}">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone:</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', Auth::user()->phone) }}">
            </div>
            <div class="mb-3">
                <label for="dob" class="form-label">Date of Birth:</label>
                <input type="date" class="form-control" id="dob" name="dob" value="{{ old('dob', Auth::user()->dob) }}">
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Gender:</label>
                <select class="form-control" id="gender" name="gender">
                    <option value="">Select Gender</option>
                    <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                    <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="id_number" class="form-label">ID Number (ID card/CCCD/Passport):</label>
                <input type="text" class="form-control" id="id_number" name="id_number" value="{{ old('id_number', Auth::user()->id_number) }}">
            </div>
            <button id="saveBtn" type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('customer.index') }}" class="btn btn-secondary">Exit</a>
        </form>
    </div>
@endsection
</body>
</html>
