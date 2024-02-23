<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>RegistrationForm_v10 by Colorlib</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- LINEARICONS -->
    <link rel="stylesheet" href="{{asset('login/fonts/linearicons/style.css')}}">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href= "{{asset('login/css/style.css')}}">
</head>

<body>

<div class="wrapper">

    <div class="inner">
        <img src="{{asset('login/images/image-1.png')}}" alt="" class="image-1">
        <form action="">
            <h3>Login Account</h3>

            <div class="form-holder">
                <span class="lnr lnr-envelope"></span>
                <input type="text" class="form-control" placeholder="Mail">
            </div>
            <div class="form-holder">
                <span class="lnr lnr-lock"></span>
                <input type="password" class="form-control" placeholder="Password">
            </div>

            <button>
                <span>Login</span>
            </button>
        </form>
        <img src="{{asset('login/images/image-2.png')}}" alt="" class="image-2">
    </div>

</div>

<script src="{{asset('login/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('login/js/main.js')}}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
