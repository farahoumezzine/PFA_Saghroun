<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Register Teacher </title>

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
                    <nav>
                        <ul class="cd-primary-nav">
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

    <div class="d-flex flex-column my-auto">
        <main class="container">
            <div class="row justify-content-center">
                <div class="col-xl-11">
                    <div class="form_container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div id="left_form">
                                    <figure><img src="child/img/registration_bg.svg" alt="" width="120" height="120"></figure>
                                    <h2>Registration</h2>
                                    <p>Welcome to our kindergarten registration! We're thrilled to embark on this educational journey with you and your child.</p>
                                    <a href="#0" id="more_info" data-bs-toggle="modal" data-bs-target="#more-info"><i class="pe-7s-info"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <!-- Session -->

                                <ul>

                                </ul>
                                <form id="custom" action="{{route('teacherForm.ajouter')}}" method="POST">
                                    @csrf
                                    <input id="website" name="website" type="text" value=""><!-- Leave for security protection, read docs for details. Delete this comment before to publish. -->
                                    <fieldset title="Step 1">
                                        <legend>Teacher Information</legend>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="nic" class="form-control" placeholder="NIC">
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="firstname" class="form-control" placeholder="First name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="lastname" class="form-control" placeholder="Last name">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /row -->
                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group">

                                                    <input type="text" name="phone" class="form-control" placeholder="Phone">
                                                </div>

                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">

                                                    <input type="text" name="address" class="form-control" placeholder="Address">
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">

                                                    <input type="email" name="email" class="form-control" placeholder="E-mail address">
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="date" name="dateofbirth" class="form-control" placeholder="Date of Birth">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="gender">Sex :</label>
                                                    <div>
                                                        <label><input type="radio" value="Male" name="gender" class="icheck">Male</label>
                                                        <label><input type="radio" value="Female" name="gender" class="icheck">Female</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="marital-status">Marital status :</label>
                                                    <div>
                                                        <label class="radio-inline"><input type="radio" value="single" name="status" class="icheck">Single</label>
                                                        <label class="radio-inline"><input type="radio" value="married" name="status" class="icheck">Married</label>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="type_degree">Type of degree :</label>
                                                    <div>
                                                        <label class="radio-inline"><input type="radio" value="Bachelor" name="type_degree" class="icheck">Bachelor</label>
                                                        <label class="radio-inline"><input type="radio" value="Master" name="type_degree" class="icheck">Master</label>

                                                        <label class="radio-inline"><input type="radio" value="Other" name="type_degree" class="icheck">Other</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">

                                                    <label for="languages">Spoken languages :</label><br>
                                                    <input type="checkbox" id="french" name="languages[]" value="french ">
                                                    <label for="french">French</label><br>

                                                    <input type="checkbox" id="english" name="languages[]" value="english">
                                                    <label for="english">English</label><br>

                                                    <input type="checkbox" id="other" name="languages[]" value="other">
                                                    <label for="other">Other</label><br>


                                                </div>

                                            </div>

                                        <!-- /row -->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Put the file your CV :</label>
                                                <input type="file" id="myFile" name="filename">

                                            </div>
                                            <div class="col-md-6">
                                                <label>Put the image your :</label>
                                                <input type="file" id="myFile" name="imagename">

                                            </div>



                                        </div>
                                        <!-- /row -->
                                    </fieldset><!-- End Step one -->





                                    <input type="submit" class="finish" value="Finish!">
                                </form>
                            </div>
                        </div><!-- /Row -->
                    </div><!-- /Form_container -->

                </div>
            </div>
            <!-- End row -->
        </main>
    </div>
    <!-- /flex-column -->
</div>
<!-- /flex-column -->

<div class="cd-overlay-nav">
    <span></span>
</div>
<!-- cd-overlay-nav -->

<div class="cd-overlay-content">
    <span></span>
</div>
<!-- cd-overlay-content -->

<a href="#0" class="cd-nav-trigger">Menu<span class="cd-icon"></span></a>

<!-- Modal terms -->
<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>1-Enrollment Process:
                    Parents/guardians must complete and submit the enrollment forms provided by the kindergarten.
                    Enrollment is subject to availability and is confirmed upon receipt of the completed forms and applicable fees.</p>
                <p>2-Fees and Payments:
                    Parents/guardians are responsible for paying tuition fees as outlined in the fee schedule provided by the kindergarten.
                    Fees are payable in advance and are non-refundable unless otherwise specified in writing by the kindergarten administration.</p>
                <p>3-Attendance and Punctuality:
                    Children are expected to attend kindergarten regularly and punctually.
                    Parents/guardians must notify the kindergarten of any absences or late arrivals.</p>
                <p>4-Health and Safety:
                    Parents/guardians must provide up-to-date medical records and emergency contact information for their child.
                    Children must be kept home if they are unwell or contagious to prevent the spread of illness to other children and staff.</p>
                <p>5-Behavior and Discipline:
                    Children are expected to respect others, follow instructions, and behave appropriately while in the kindergarten.
                    The kindergarten employs positive reinforcement and age-appropriate discipline techniques to promote positive behavior.</p>
                <p>6-Communication:
                    The kindergarten will communicate important information, updates, and events to parents/guardians via email, newsletters, or other means of communication.
                    Parents/guardians are encouraged to communicate any concerns or feedback with the kindergarten administration in a timely manner.</p>
                <p>7-Privacy and Confidentiality:
                    The kindergarten respects the privacy and confidentiality of children and their families and will not disclose personal information without consent, except as required by law.</p>
                <p>8-Attendance and Punctuality:
                    Children are expected to attend kindergarten regularly and punctually.
                    Parents/guardians must notify the kindergarten of any absences or late arrivals.</p>
                <p>9-Termination of Enrollment:
                    The kindergarten reserves the right to terminate a child's enrollment due to non-payment of fees, behavior issues, or other reasons deemed necessary by the administration.
                    Parents/guardians may also choose to withdraw their child from the kindergarten with written notice provided to the administration.</p>
                <p>10-Changes to Terms and Conditions:
                    The kindergarten reserves the right to update or modify these terms and conditions at any time. Parents/guardians will be notified of any changes in writing.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn_1" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- Modal info -->
<div class="modal fade" id="more-info" tabindex="-1" role="dialog" aria-labelledby="more-infoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="more-infoLabel">Frequently asked questions about Saghroun</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><strong>1-What is the age range for children attending your Saghroun?</strong> Our kindergarten welcomes children between the ages of 5 years, typically ranging from <strong>3 years old to 8 years old</strong> </p>

                <p><strong>2-What are your operating hours?</strong><br> We operate from <strong>7h30</strong> to<strong> 18h30</strong> on 6 days per week. We also offer extended care options for families who require childcare outside of regular hours (on demand).</p>
                <p><strong>3-What are the qualifications and experience of your teachers and staff?</strong> <br>Our teachers and staff are highly qualified and experienced in early childhood education. They undergo continuous professional development to stay updated on best practices in early childhood pedagogy.</p>

                <div class="modal-footer"></div>
                <button type="button" class="btn_1" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

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
