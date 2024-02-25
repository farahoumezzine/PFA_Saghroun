
<!DOCTYPE html>

<html class="template-page-home-5">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

    <title>Saghroun</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700italic,700,400italic%7CLato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic%7COpen+Sans:Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300%7CHandlee">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('logo/LOGO.jpg')}}">

    <link rel="stylesheet" type="text/css" href= "{{asset('siteweb/style/megafish.css')}}" />
    <link rel="stylesheet" type="text/css" href= "{{asset('siteweb/style/superfish.css')}}" />
    <link rel="stylesheet" type="text/css" href= "{{asset('siteweb/style/flexslider.css')}}" />
    <link rel="stylesheet" type="text/css" href= "{{asset('siteweb/style/jquery.qtip.css')}}" />
    <link rel="stylesheet" type="text/css" href= "{{asset('siteweb/style/jquery-ui.min.css')}}" />
    <link rel="stylesheet" type="text/css" href= "{{asset('siteweb/style/jquery-supersized.css')}}" />
    <link rel="stylesheet" type="text/css" href= "{{asset('siteweb/style/jquery.nivo.slider.css')}}" />
    <link rel="stylesheet" type="text/css" href= "{{asset('siteweb/style/fancybox/jquery.fancybox.css')}}" />
    <link rel="stylesheet" type="text/css" href= "{{asset('siteweb/style/fancybox/helpers/jquery.fancybox-buttons.css')}}" />
    <link rel="stylesheet" type="text/css" href= "{{asset('siteweb/style/revslider/layers.css')}}" />
    <link rel="stylesheet" type="text/css" href= "{{asset('siteweb/style/revslider/settings.css')}}" />
    <link rel="stylesheet" type="text/css" href= "{{asset('siteweb/style/revslider/navigation.css')}}" />
    <link rel="stylesheet" type="text/css" href= "{{asset('siteweb/style/base.css')}}"/>
    <link rel="stylesheet" type="text/css" href= "{{asset('siteweb/style/responsive.css')}}" />
    <link rel="stylesheet" type="text/css" href= "{{asset('siteweb/style/retina.css')}}" />

    <script type="text/javascript" src= "{{asset('siteweb/script/jquery.min.js')}}"></script>

</head>
<body class="template-page-home-5">		<!-- Header -->
<div class="template-header">

    <!-- Top header -->
    <div class="template-header-top">

        <div class="template-main template-clear-fix">

            <div class="template-header-top-logo">
                <a href="index55c4.html?page=home-1">
                    <img src="{{asset('logo/LOGO.jpg')}}" alt="" />
                </a>
            </div>

            <div class="template-header-top-menu template-clear-fix">

                <div class="template-component-menu-default">
                    <ul class="sf-menu template-clear-fix">
                        <li><a href="#home"><span class="template-icon-menu template-icon-menu-home"></span>Home</a></li>
                        <li><a href="#about"><span class="template-icon-menu template-icon-menu-book"></span>About</a></li>
                        <li><a href="#classes"><span class="template-icon-menu template-icon-menu-schoolbag "></span>Classes</a></li>
                        <li><a href="#teachers"><span class="template-icon-menu template-icon-menu-diagram"></span>Teachers</a></li>
                        <li><a href="#blog"><span class="template-icon-menu template-icon-menu-printer"></span>Blog</a></li>
                        <li><a href="#contact"><span class="template-icon-menu template-icon-menu-envelope"></span>Contact</a></li>
                        <li><a href="index55c4.html?page=home-1"><span class="template-icon-menu template-icon-menu-stroller"></span>Exit One Page</a></li>
                    </ul>
                </div>

                <div class="template-component-menu-responsive">
                    <ul class="template-clear-fix">
                        <li>
                            <a href="#">Menu<span></span></a>
                            <ul>
                                <li><a href="#home">Home</a></li>
                                <li><a href="#about">About</a></li>
                                <li><a href="#classes">Classes</a></li>
                                <li><a href="#teachers">Teachers</a></li>
                                <li><a href="#blog">Blog</a></li>
                                <li><a href="#contact">Contact</a></li>
                                <li><a href="index55c4.html?page=home-1">Exit One Page</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div>

        </div>
    </div>

    <!-- Bottom header -->
    <div class="template-header-bottom">

        <div class="template-header-bottom-background template-header-bottom-background-img-4 template-header-bottom-background-style-1">
            <div class="template-main">

                <h1>Ruth Foster</h1>
                <h6>Single Teacher Page</h6>
            </div>
        </div>
            <!-- LOGOUT-->
            <form action="{{route('logout')}}" method="post" class="d-flex" role="search">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" >LogOut</button>
            </form>

    </div>
<!-- Content -->
<div class="template-content">

    <!-- Section -->
    <div class="template-content-section template-main">

        <!-- Team -->
        <div class="template-component-team template-component-team-style-1">
            <ul class="template-layout-100 template-clear-fix">
                <li class="template-layout-column-left">
                    <ul class="template-layout-33x66 template-clear-fix">
                        <li class="template-layout-column-left">
                            <div class="template-component-image template-component-image-hover-slide-enable template-fancybox template-preloader">
                                <a href="{{asset('siteweb/media/image/_sample/525x560/11.jpg')}}">
                                    <img src="{{asset('siteweb/media/image/_sample/525x560/11.jpg')}}" alt="" />
                                    <span><span><span></span></span></span>
                                </a>
                                <div>

                                    <h6>Ruth Foster</h6>
                                    <span>Teacher</span>
                                </div>

                                <p><b>Ruth Foster</b> Teacher</p>
                            </div>
                            <div class="template-component-social-icon template-component-social-icon-style-1 template-clear-fix">
                                <ul>
                                    <li><a href="#" class="template-component-social-icon-behance"></a></li>
                                    <li><a href="#" class="template-component-social-icon-bing"></a></li>
                                    <li><a href="#" class="template-component-social-icon-blogger"></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="template-layout-column-right">
                            <!-- user name -->
                            @if(Auth::check())
                                <h3 class="template-component-team-name">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</h3>
                            @endif
                            <span class="template-component-team-position">Teacher</span>
                            <p class="template-component-team-description">My name is Ruth. I grew up and studied in Canada. This is my second year at Fable and love every minute of it, making the children’s learning experience fun. I love giving children opportunities to make discoveries about their world by providing them with the time and space to explore.</p>
                            <h6 class="template-margin-top-3">Personal Info</h6>
                            <div class="template-component-vertical-grid">
                                <ul>
                                    <li class="template-component-vertical-grid-line-1n">
                                        <div>Degree:</div>
                                        <div>Childhood Education</div>
                                    </li>
                                    <li class="template-component-vertical-grid-line-2n">
                                        <div>Class Educator:</div>
                                        <div>Tenderhearts</div>
                                    </li>
                                    <li class="template-component-vertical-grid-line-1n">
                                        <div>My Languages:</div>
                                        <div>English, Arabic</div>
                                    </li>
                                    <li class="template-component-vertical-grid-line-2n">
                                        <div>My Hobby:</div>
                                        <div>Collecting Stamps, Playing Basketball</div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

    </div>

    <!-- Section -->
    <div class="template-content-section template-padding-bottom-5 template-background-image template-background-image-5 template-section-white">

        <!-- Main -->
        <div class="template-main">

            <!-- Layout 50x50 -->
            <div class="template-layout-50x50 template-clear-fix">

                <!-- Left column -->
                <div class="template-layout-column-left">

                    <!-- Header -->
                    <h5>Questions and Answers</h5>

                    <!-- Accordion -->
                    <div class="template-component-accordion">
                        <h6><a href="#">Educational Field Trips and Presentations</a></h6>
                        <div>
                            <p>
                                Maecenas prion neque vuluptat sem in porttitil curabitur mattis, vitae elite forte, adiscipling elit. Novum elementum est dosis cuprum gravida.
                            </p>
                        </div>
                        <h6><a href="#">Reporting on Individual Achievement</a></h6>
                        <div>
                            <p>
                                Phasellus consequat est eleifend, leo condimentum nec nllam ut lectus turpis. Nunc sharme nullam an suscipit bibendum sagittis.
                            </p>
                        </div>
                        <h6><a href="#">Writing and Reading Classes</a></h6>
                        <div>
                            <p>
                                Maecenas prion neque vuluptat sem in porttitil curabitur mattis, vitae elite forte, adiscipling elit. Novum elementum est dosis cuprum gravida.
                            </p>
                        </div>
                        <h6><a href="#">Scientific Investigation Opportunities</a></h6>
                        <div>
                            <p>
                                Phasellus consequat est eleifend, leo condimentum nec nllam ut lectus turpis. Nunc sharme nullam an suscipit bibendum sagittis.
                            </p>
                        </div>
                    </div>

                </div>

                <!-- Right column -->
                <div class="template-layout-column-right">

                    <!-- Header -->
                    <h5>My Skills</h5>

                    <!-- Counters list -->
                    <div class="template-component-counter-list">
                        <ul class="template-layout-100 template-clear-fix">
                            <li class="template-layout-column-left">
                                <span class="template-component-counter-list-label">Preschool Education</span>
                                <span class="template-component-counter-list-counter">
											<span class="template-component-counter-list-counter-value">100</span>
											<span class="template-component-counter-list-counter-character">%</span>
										</span>
                                <span class="template-component-counter-list-timeline">
											<span></span>
										</span>
                            </li>
                            <li class="template-layout-column-left">
                                <span class="template-component-counter-list-label">French Language</span>
                                <span class="template-component-counter-list-counter">
											<span class="template-component-counter-list-counter-value">90</span>
											<span class="template-component-counter-list-counter-character">%</span>
										</span>
                                <span class="template-component-counter-list-timeline">
											<span></span>
										</span>
                            </li>
                            <li class="template-layout-column-left">
                                <span class="template-component-counter-list-label">Italian Language</span>
                                <span class="template-component-counter-list-counter">
											<span class="template-component-counter-list-counter-value">75</span>
											<span class="template-component-counter-list-counter-character">%</span>
										</span>
                                <span class="template-component-counter-list-timeline">
											<span></span>
										</span>
                            </li>
                            <li class="template-layout-column-left template-margin-bottom-reset">
                                <span class="template-component-counter-list-label">Physical Education</span>
                                <span class="template-component-counter-list-counter">
											<span class="template-component-counter-list-counter-value">50</span>
											<span class="template-component-counter-list-counter-character">%</span>
										</span>
                                <span class="template-component-counter-list-timeline">
											<span></span>
										</span>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Section -->
    <div class="template-content-section template-padding-bottom-5 template-background-color-2">

        <!-- Main -->
        <div class="template-main">

            <!-- Feature -->
            <div class="template-component-feature template-component-feature-style-5 template-component-feature-position-top template-component-feature-size-large">
                <ul class="template-layout-33x33x33 template-clear-fix">
                    <li class="template-layout-column-left">
                        <div class="template-icon-feature template-icon-feature-name-book"></div>
                        <h5>Morbi Skill</h5>
                        <p>Pulvinar est metro ligula blandit maecenas retrum gravida cuprum magna terminal est nulla.</p>
                    </li>
                    <li class="template-layout-column-center">
                        <div class="template-icon-feature template-icon-feature-name-bell-alt"></div>
                        <h5>Novum Element</h5>
                        <p>Elipsis magna a terminal nulla elementum elite forte maecenas est magna etos interdum vitae est.</p>
                    </li>
                    <li class="template-layout-column-right">
                        <div class="template-icon-feature template-icon-feature-name-rattle"></div>
                        <h5>Diaspis Forte</h5>
                        <p>Diaspis movum blandit elementum pulvinar detos morbi a dosis maecenas retrum gravida.</p>
                    </li>
                </ul>
            </div>

        </div>

    </div>

</div>
<!-- Footer -->
<div class="template-footer">

    <!-- Top footer -->
    <div class="template-footer-top">

        <!-- Main -->
        <div class="template-main">

            <!-- Widget list -->
            <ul class="template-widget-list template-layout-25x25x25x25 template-clear-fix">

                <!-- Left column -->
                <li class="template-layout-column-left">
                    <h6>
                        <span>About Us</span>
                        <span></span>
                    </h6>
                    <div>
                        <div class="template-widget-text">
                            <p class="template-margin-reset">
                                Elipsis magna a nulla elite forte maecenas est elementum magna etos interdum movum morbi vehicula morbi.
                            </p>
                            <img src="{{asset('logo/LOGO-tran.png')}}" class="template-footer-logo template-margin-top-2" alt="" />
                        </div>
                    </div>
                </li>

                <!-- Center left column -->
                <li class="template-layout-column-center-left">
                    <h6>
                        <span>Archives</span>
                        <span></span>
                    </h6>
                    <div>
                        <div class="template-widget-archive template-widget-archive-style-1">
                            <ul>
                                <li>
                                    <a href="index6b4a.html?page=blog-page-archive" title="January 2014 (8)">January 2014 (8)</a>
                                </li>
                                <li>
                                    <a href="index6b4a.html?page=blog-page-archive" title="February 2014 (7)">February 2014 (7)</a>
                                </li>
                                <li>
                                    <a href="index6b4a.html?page=blog-page-archive" title="March 2014 (6)">March 2014 (6)</a>
                                </li>
                                <li>
                                    <a href="index6b4a.html?page=blog-page-archive" title="April 2014 (5)">April 2014 (5)</a>
                                </li>
                                <li>
                                    <a href="index6b4a.html?page=blog-page-archive" title="May 2014 (4)">May 2014 (4)</a>
                                </li>
                                <li>
                                    <a href="index6b4a.html?page=blog-page-archive" title="June 2014 (3)">June 2014 (3)</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <!-- Center right column -->
                <li class="template-layout-column-center-right">
                    <h6>
                        <span>Features</span>
                        <span></span>
                    </h6>
                    <div>
                        <p>Nunc gravida rutrum mauris vehin hasellus ac pretium augue vivamul lacus ligul mattis ac vene:</p>
                        <div class="template-component-list template-component-list-style-1-alt template-margin-top-2">
                            <ul>
                                <li>Friendly and welcoming place</li>
                                <li>Science and art classes</li>
                                <li>Positive learning environment</li>
                                <li>Educational field trips</li>
                                <li>Writing and reading classes</li>
                                <li>Science and art classes</li>
                            </ul>
                        </div>
                    </div>
                </li>

                <!-- Right column -->
                <li class="template-layout-column-right">
                    <h6>
                        <span>Recent Posts</span>
                        <span></span>
                    </h6>
                    <div>
                        <div class="template-widget-recent-post template-widget-recent-post-style-1">
                            <ul>
                                <li>
                                    <a href="index14e9.html?page=post-image">
                                        <img src="{{asset('siteweb/media/image/_sample/150x150/7.jpg')}}" alt="View Post &quot;Drawing Lesson&quot;"/>
                                    </a>
                                    <h6>
                                        <a href="index14e9.html?page=post-image" title="View Post &quot;Drawing Lesson&quot;">
                                            Drawing Lesson
                                        </a>
                                    </h6>
                                    <span class="template-icon-blog template-icon-blog-date">October 03, 2014</span>
                                </li>
                                <li>
                                    <a href="index14e9.html?page=post-image">
                                        <img src="{{asset('siteweb/media/image/_sample/150x150/4.jpg')}}" alt="View Post &quot;Fall Parents Meeting Day&quot;"/>
                                    </a>
                                    <h6>
                                        <a href="index14e9.html?page=post-image" title="View Post &quot;Fall Parents Meeting Day&quot;">
                                            Fall Parents Meeting Day
                                        </a>
                                    </h6>
                                    <span class="template-icon-blog template-icon-blog-date">October 03, 2014</span>
                                </li>
                                <li>
                                    <a href="index14e9.html?page=post-image">
                                        <img src="{{asset('siteweb/media/image/_sample/150x150/9.jpg')}}" alt="View Post &quot;Birthday in Kindergarten&quot;"/>
                                    </a>
                                    <h6>
                                        <a href="index14e9.html?page=post-image" title="View Post &quot;Birthday in Kindergarten&quot;">
                                            Birthday in Kindergarten
                                        </a>
                                    </h6>
                                    <span class="template-icon-blog template-icon-blog-date">May 20, 2014</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

            </ul>

        </div>

    </div>

    <!-- Bottom footer -->
    <div class="template-footer-bottom">
        <div class="template-align-center template-main">
            <div class="template-component-social-icon template-component-social-icon-style-1 template-clear-fix template-margin-bottom-2">
                <ul>
                    <li><a href="#" class="template-component-social-icon-behance"></a></li>
                    <li><a href="#" class="template-component-social-icon-dribbble"></a></li>
                    <li><a href="#" class="template-component-social-icon-envato"></a></li>
                    <li><a href="#" class="template-component-social-icon-facebook"></a></li>
                    <li><a href="#" class="template-component-social-icon-twitter"></a></li>
                </ul>
            </div>
            <div>
                &copy;&nbsp;
                <a href="http://themeforest.net/user/QuanticaLabs/portfolio?ref=QuanticaLabs">Fable - Children Kindergarten Template</a>
                by <a href="http://themeforest.net/user/QuanticaLabs/portfolio?ref=QuanticaLabs">QuanticaLabs</a>
            </div>
        </div>
    </div>

</div>

<!-- Go to top button -->
<a href="#go-to-top" class="template-component-go-to-top"></a>

<script type="text/javascript" src="{{asset('siteweb/script/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('siteweb/script/jquery.vide.js')}}"></script>
<script type="text/javascript" src="{{asset('siteweb/script/superfish.min.js')}}"></script>
<script type="text/javascript" src="{{asset('siteweb/script/jquery.easing.js')}}"></script>
<script type="text/javascript" src="{{asset('siteweb/script/jquery.blockUI.js')}}"></script>
<script type="text/javascript" src="{{asset('siteweb/script/jquery.qtip.min.js')}}"></script>
<script type="text/javascript" src="{{asset('siteweb/script/jquery.actual.min.js')}}"></script>
<script type="text/javascript" src="{{asset('siteweb/script/jquery.jplayer.min.js')}}"></script>
<script type="text/javascript" src="{{asset('siteweb/script/jquery.scrollTo.min.js')}}"></script>
<script type="text/javascript" src="{{asset('siteweb/script/jquery.waypoints.min.js')}}"></script>
<script type="text/javascript" src="{{asset('siteweb/script/jquery.countdown.min.js')}}"></script>
<script type="text/javascript" src="{{asset('siteweb/script/jplayer.playlist.min.js')}}"></script>
<script type="text/javascript" src="{{asset('siteweb/script/jquery.zaccordion.min.js')}}"></script>
<script type="text/javascript" src="{{asset('siteweb/script/jquery.flexslider-min.js')}}"></script>
<script type="text/javascript" src="{{asset('siteweb/script/jquery.supersized.min.js')}}"></script>
<script type="text/javascript" src="{{asset('siteweb/script/jquery.nivo.slider.pack.js')}}"></script>
<script type="text/javascript" src="{{asset('siteweb/script/jquery.touchSwipe.min.js')}}"></script>
<script type="text/javascript" src="{{asset('siteweb/script/jquery.infieldlabel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('siteweb/script/jquery.carouFredSel.packed.js')}}"></script>
<script type="text/javascript" src="{{asset('siteweb/script/jquery.fancybox.js')}}"></script>
<script type="text/javascript" src="{{asset('siteweb/script/jquery.fancybox-media.js')}}"></script>
<script type="text/javascript" src="{{asset('siteweb/script/jquery.fancybox-buttons.js')}}"></script>
<script type="text/javascript" src="{{asset('siteweb/script/jquery.windowDimensionListener.js')}}"></script>
<script type="text/javascript" src="{{asset('siteweb/script/jquery.responsiveElement.js')}}"></script>

<script type="text/javascript" src="{{asset('siteweb/script/revslider/jquery.themepunch.revolution.min.js')}}"></script>
<script type="text/javascript" src="{{asset('siteweb/script/revslider/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{asset('siteweb/script/revslider/extensions/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript" src="{{asset('siteweb/script/revslider/extensions/revolution.extension.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('siteweb/script/revslider/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript" src="{{asset('siteweb/script/revslider/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('siteweb/script/revslider/extensions/revolution.extension.migration.min.js')}}"></script>
<script type="text/javascript" src="{{asset('siteweb/script/revslider/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('siteweb/script/revslider/extensions/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript" src="{{asset('siteweb/script/revslider/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{asset('siteweb/script/revslider/extensions/revolution.extension.video.min.js')}}"></script>

<script type="text/javascript" src="{{asset('siteweb/script/sticky.min.js')}}"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyA2LLXoPbK_YPWDdpwgHaG3-PFYl6KiWhI"></script>

<script type="text/javascript" src="{{asset('siteweb/script/jquery.template.component.js')}}"></script>

<script type="text/javascript" src="plugin/contact-form/jquery.contactForm.js"></script>

<script type="text/javascript" src="{{asset('siteweb/script/public.js')}}"></script>

</body>


<!-- Mirrored from quanticalabs.com/Fable/Template/?page=single-teacher by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2024 10:46:06 GMT -->
</html>
