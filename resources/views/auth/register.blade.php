<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('sus.css')}}">
    <title>Registration Form Using HTML/CSS</title>
</head>
<body>
<!-- Container Start -->
<div id="container">
    <!-- Form Wrap Start -->
    <div class="form-wrap">
        <h1>Sign Up</h1>
{{--        <p>It's Free and Only takes a minute</p>--}}
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <!-- Form Start -->
        <form action="{{route('register')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="first-name">First Name</label>
                <input type="text" name="name" id="first-name">
            </div>
{{--            <div class="form-group">--}}
{{--                <label for="last-name">Last Name</label>--}}
{{--                <input type="text" name="firstname" id="last-name">--}}
{{--            </div>--}}
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="designation">Designation</label>
                <select class="form-control" name="designation" id="designation">
                    <option value="">choose</option>
                    <option value="professor">Professor</option>
                    <option value="associate">Associate Professor</option>
                    <option value="assistant">Assistant Professor</option>
                    <option value="lecturer">Lecturer</option>
                </select>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="first-name">
            </div>
            <div class="form-group">
                <label for="cpass">Confirm Password</label>
                <input type="password" name="password_confirmation" id="first-name">
            </div>
            <button type="submit">Sign Up</button>
            <p class="bottom-text">
                By Clicking the Sign Up Button, you agree to our
                <a href="#">Term & Conditions</a> and <a href="#">Primary Policy</a>
            </p>
        </form>
        <!-- Form Close -->
    </div>
    <!-- Form Wrap Close -->
    <footer>
        <p>Already Registered?<a href="{{route('login')}}">Login Here</a></p>
    </footer>
</div>
<!-- Container Close -->


</body>
</html>
