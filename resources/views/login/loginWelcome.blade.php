<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Login Account</title>

    <!-- Favicons-->

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('logo/LOGO.jpg')}}">

    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{asset('child/css/bootstrap.min.css')}}"  rel="stylesheet">
    <link href="{{asset('child/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('child/css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('child/css/menu.css')}}" rel="stylesheet">
    <link href="{{asset('child/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('child/css/icon_fonts/css/all_icons_min.css')}}" rel="stylesheet">
    <link href="{{asset('child/css/skins/square/grey.css')}}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{asset('child/css/custom.css')}}" rel="stylesheet">

    <script src="{{asset('child/js/modernizr.js')}}"></script>
    <!-- Modernizr -->

    <!-- Toastr CSS -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <!-- LINEARICONS -->
    <link rel="stylesheet" href="{{asset('login/fonts/linearicons/style.css')}}">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href= "{{asset('login/css/style.css')}}">
</head>

<body>

<div id="preloader">
    <div data-loader="circle-side"></div>
</div><!-- /Preload -->



<div class="min-vh-100 d-flex flex-column">

    <header>
        <div class="container-fluid">
            <div class="row d-flex align-items-center">
                <div class="col-3">
                    <a href="index.html"><img src="{{asset('/logo/LOGO.jpg')}}" alt="" width="25%" height="20%"></a>
                </div>
                <div class="col-9">
                    <nav >
                            <ul class="cd-primary-nav" >
                            <li><a href="index.html" class="animated_link">Register Version</a></li>
                            <li><a href="reservation_version.html" class="animated_link">Reservation Version</a></li>
                            <li><a href="questionnaire_version.html" class="animated_link">Questionnaire Version</a></li>
                            <li><a href="review_version.html" class="animated_link">Review Version</a></li>
                            <li><a href="about.html" class="animated_link">About Us</a></li>
                            <li><a href="contacts.html" class="animated_link">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- container -->
    </header>
    <!-- End Header -->





<div class="cd-overlay-nav">
    <span></span>
</div>
<!-- cd-overlay-nav -->

<div class="cd-overlay-content">
    <span></span>
</div>
<!-- cd-overlay-content -->

<a href="#0" class="cd-nav-trigger">Menu<span class="cd-icon"></span></a>


    <div class="wrapper">
        <div class="inner">
            <img src="{{asset('login/images/image-1.png')}}" alt="" class="image-1">
            <form action="" style="position: relative;
    z-index: 1;
">
                <h3>Login Account</h3>

                <div class="form-holder"  >
                    <span class="lnr lnr-envelope" style="margin-right: 10px;" ></span>
                    <input type="text" class="form-control" placeholder="Mail" style="padding-left: 20px;">
                </div>
                <div class="form-holder">
                    <span class="lnr lnr-lock" style="margin-right: 10px;"></span>
                    <input type="password" class="form-control" placeholder="Password" style="padding-left: 20px;">
                </div>

                <button>
                    <span>Login</span>
                </button>
            </form>
            <img src="{{asset('login/images/image-2.png')}}" alt="" class="image-2">
        </div>

    </div>


<!-- SCRIPTS -->

<!-- toaster notif -->
<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}

<script>
    function showAllergies() {
        var allergiesSection = document.getElementById("allergies_section");
        var hasAllergiesCheckbox = document.getElementById("has_allergies_checkbox");

        if (hasAllergiesCheckbox.checked) {
            allergiesSection.style.display = "block";
        } else {
            allergiesSection.style.display = "none";
        }
    }

    function showConditions() {
        var conditionsSection = document.getElementById("conditions_section");
        var hasconditionsCheckbox = document.getElementById("has_conditions_checkbox");

        if (hasconditionsCheckbox.checked) {
            conditionsSection.style.display = "block";
        } else {
            conditionsSection.style.display = "none";
        }
    }
</script>
    <script src="{{asset('login/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('login/js/main.js')}}"></script>
<script src="{{asset('child/js/common_scripts.js')}}"></script>
<!-- Wizard script -->
<script src="{{asset('child/js/sign-up-validate.js')}}"></script>
<!-- Menu script -->
<script src="{{asset('child/js/velocity.min.js')}}"></script>
<script src="{{asset('child/js/main.js')}}"></script>
<!-- Theme script -->
<script src="{{asset('child/js/functions.js')}}"></script>



</body>

</html>
