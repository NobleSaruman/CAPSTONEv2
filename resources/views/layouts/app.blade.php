<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="../assets/img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>
            Material Dashboard PRO by Creative Tim
        </title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        {{--     Fonts and icons     --}}
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
        {{-- CSS Files --}}
        <link href="{{URL::asset('/css/material-dashboard.css?v=2.0.2')}}" rel="stylesheet" />
        {{-- CSS Just for demo purpose, don't include it in your project --}}
        <style>
            .card .card-body img {
                border-radius: 6px;
                width: 100%;
            }
            .content .container-fluid {
                max-width: 700px;
            }
            .card-title{
                top: 15px;
                margin-bottom: -20px !important;
            }
            .card-title a {
                color: #3C4858;
                text-decoration: none;
            }
        </style>
    </head>
    <body class="">
        <div class="wrapper ">
            <div class="sidebar" data-color="rose" data-background-color="black" data-image="{{URL::asset('img/sidebar-1.jpg')}}">
            {{--
            Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

            Tip 2: you can also add an image using data-image tag
            --}}
            <div class="logo">
                <a href="" class="simple-text logo-mini">

                </a>
                <a href="" class="simple-text logo-normal">
                    LifeShare
                </a>
            </div>
            <div class="sidebar-wrapper">
                <div class="user">
                    <div class="photo">
                        <img src="{{URL::asset('img/faces/avatar.jpg')}}" />
                        </div>
                        <div class="user-info">
                        <a data-toggle="collapse" href="#collapseExample" class="username">
                            <span>
                                Tania Andrew
                                <b class="caret"></b>
                            </span>
                        </a>
                        <div class="collapse" id="collapseExample">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="">
                                        <span class="sidebar-mini"> MP </span>
                                        <span class="sidebar-normal"> My Profile </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">
                                        <span class="sidebar-mini"> EP </span>
                                        <span class="sidebar-normal"> Edit Profile </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">
                                        <span class="sidebar-mini"> S </span>
                                        <span class="sidebar-normal"> Settings </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="">
                            <i class="material-icons">add_circle</i>
                            <p> Post Story </p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="">
                            <i class="material-icons">view_agenda</i>
                            <p> Browse Stories </p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" data-toggle="collapse" href="#tablesExamples">
                            <i class="material-icons">view_headline</i>
                            <p> Categories
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="tablesExamples">
                            <ul class="nav">
                                <li class="nav-item ">
                                    <a class="nav-link" href="">
                                        <i class="material-icons">category</i>
                                        <span class="sidebar-normal"> All </span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="">
                                        <i class="material-icons">local_hospital</i>
                                        <span class="sidebar-normal"> Health </span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="">
                                        <i class="material-icons">local_movies</i>
                                        <span class="sidebar-normal"> Entertainment </span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="">
                                        <i class="material-icons">local_activity</i>
                                        <span class="sidebar-normal"> Events </span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="">
                                        <i class="material-icons">local_atm</i>
                                        <span class="sidebar-normal"> Financial </span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="">
                                        <i class="material-icons">directions_bike</i>
                                        <span class="sidebar-normal"> Sports </span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="">
                                        <i class="material-icons">people</i>
                                        <span class="sidebar-normal"> Community </span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="">
                                        <i class="material-icons">local_library</i>
                                        <span class="sidebar-normal"> Fiction </span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="">
                                        <i class="material-icons">restaurant</i>
                                        <span class="sidebar-normal"> Food </span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="">
                                        <i class="material-icons">restaurant</i>
                                        <span class="sidebar-normal"> Inspiration </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
        {{-- Navbar --}}
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-minimize">
                        <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
                            <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
                            <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
                        </button>
                    </div>
                    <a class="navbar-brand" href="#pablo"></a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">notifications</i>
                            <span class="notification">5</span>
                                <p class="d-lg-none d-md-block">
                                    Some Actions
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Mike John responded to your email</a>
                                <a class="dropdown-item" href="#">You have 5 new tasks</a>
                                <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                                <a class="dropdown-item" href="#">Another Notification</a>
                                <a class="dropdown-item" href="#">Another One</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#pablo">
                                <i class="material-icons">power_settings_new</i>
                                <p>
                                    Logout
                                </p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        {{-- End Navbar --}}
        <div class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
        {{--   Core JS Files   --}}
        <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
        <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
        <script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
        <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
        {{-- Plugin for the momentJs  --}}
        <script src="../assets/js/plugins/moment.min.js"></script>
        {{--  Plugin for Sweet Alert --}}
        <script src="../assets/js/plugins/sweetalert2.js"></script>
        {{-- Forms Validations Plugin --}}
        <script src="../assets/js/plugins/jquery.validate.min.js"></script>
        {{--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard --}}
        <script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
        {{--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select --}}
        <script src="../assets/js/plugins/bootstrap-selectpicker.js"></script>
        {{--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ --}}
        <script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
        {{--  DataTables.net Plugin, full documentation here: https://datatables.net/    --}}
        <script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
        {{--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  --}}
        <script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
        {{-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput --}}
        <script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>
        {{--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    --}}
        <script src="../assets/js/plugins/fullcalendar.min.js"></script>
        {{-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ --}}
        <script src="../assets/js/plugins/jquery-jvectormap.js"></script>
        {{--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ --}}
        <script src="../assets/js/plugins/nouislider.min.js"></script>
        {{-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
        {{-- Library for adding dinamically elements --}}
        <script src="../assets/js/plugins/arrive.min.js"></script>
        {{--  Google Maps Plugin    --}}
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
        {{-- Chartist JS --}}
        <script src="../assets/js/plugins/chartist.min.js"></script>
        {{--  Notifications Plugin    --}}
        <script src="../assets/js/plugins/bootstrap-notify.js"></script>
        {{-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc --}}
        <script src="../assets/js/material-dashboard.min.js?v=2.0.2" type="text/javascript"></script>
        {{-- Material Dashboard DEMO methods, don't include it in your project! --}}
        <script src="../assets/demo/demo.js"></script>
        <script>
            $(document).ready(function() {
                $().ready(function() {
                    $sidebar = $('.sidebar');

                    $sidebar_img_container = $sidebar.find('.sidebar-background');

                    $full_page = $('.full-page');

                    $sidebar_responsive = $('body > .navbar-collapse');

                    window_width = $(window).width();

                    fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

                    if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
                        if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                            $('.fixed-plugin .dropdown').addClass('open');
                        }

                    }

                    $('.fixed-plugin a').click(function(event) {
                        // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                        if ($(this).hasClass('switch-trigger')) {
                            if (event.stopPropagation) {
                                event.stopPropagation();
                            } else if (window.event) {
                                window.event.cancelBubble = true;
                            }
                        }
                    });

                    $('.fixed-plugin .active-color span').click(function() {
                        $full_page_background = $('.full-page-background');

                        $(this).siblings().removeClass('active');
                        $(this).addClass('active');

                        var new_color = $(this).data('color');

                        if ($sidebar.length != 0) {
                            $sidebar.attr('data-color', new_color);
                        }

                        if ($full_page.length != 0) {
                            $full_page.attr('filter-color', new_color);
                        }

                        if ($sidebar_responsive.length != 0) {
                            $sidebar_responsive.attr('data-color', new_color);
                        }
                    });

                    $('.fixed-plugin .background-color .badge').click(function() {
                        $(this).siblings().removeClass('active');
                        $(this).addClass('active');

                        var new_color = $(this).data('background-color');

                        if ($sidebar.length != 0) {
                            $sidebar.attr('data-background-color', new_color);
                        }
                    });

                    $('.fixed-plugin .img-holder').click(function() {
                        $full_page_background = $('.full-page-background');

                        $(this).parent('li').siblings().removeClass('active');
                        $(this).parent('li').addClass('active');

                        var new_image = $(this).find("img").attr('src');

                        if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                            $sidebar_img_container.fadeOut('fast', function() {
                                $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                                $sidebar_img_container.fadeIn('fast');
                            });
                        }

                        if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                            $full_page_background.fadeOut('fast', function() {
                                $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                                $full_page_background.fadeIn('fast');
                            });
                        }

                        if ($('.switch-sidebar-image input:checked').length == 0) {
                            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                        }

                        if ($sidebar_responsive.length != 0) {
                            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
                        }
                    });

                    $('.switch-sidebar-image input').change(function() {
                        $full_page_background = $('.full-page-background');

                        $input = $(this);

                        if ($input.is(':checked')) {
                            if ($sidebar_img_container.length != 0) {
                                $sidebar_img_container.fadeIn('fast');
                                $sidebar.attr('data-image', '#');
                            }

                            if ($full_page_background.length != 0) {
                                $full_page_background.fadeIn('fast');
                                $full_page.attr('data-image', '#');
                            }

                            background_image = true;
                        } else {
                            if ($sidebar_img_container.length != 0) {
                                $sidebar.removeAttr('data-image');
                                $sidebar_img_container.fadeOut('fast');
                            }

                            if ($full_page_background.length != 0) {
                                $full_page.removeAttr('data-image', '#');
                                $full_page_background.fadeOut('fast');
                            }

                            background_image = false;
                        }
                    });

                    $('.switch-sidebar-mini input').change(function() {
                        $body = $('body');

                        $input = $(this);

                        if (md.misc.sidebar_mini_active == true) {
                            $('body').removeClass('sidebar-mini');
                            md.misc.sidebar_mini_active = false;

                            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

                        } else {

                            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

                            setTimeout(function() {
                                $('body').addClass('sidebar-mini');

                                md.misc.sidebar_mini_active = true;
                            }, 300);
                        }

                        // we simulate the window Resize so the charts will get updated in realtime.
                        var simulateWindowResize = setInterval(function() {
                            window.dispatchEvent(new Event('resize'));
                        }, 180);

                        // we stop the simulation of Window Resize after the animations are completed
                        setTimeout(function() {
                            clearInterval(simulateWindowResize);
                        }, 1000);

                    });
                });
            });
        </script>
        <script>
            $(document).ready(function() {
                md.initFullCalendar();
            });
        </script>
    </body>
</html>