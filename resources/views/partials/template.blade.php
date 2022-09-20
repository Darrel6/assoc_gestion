<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('page')</title>
    <!-- plugins:css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js">
    </script>
    <link rel="stylesheet" href="{{ asset('admin/vendors/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('admin/vendors/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}" />
    <link rel="shortcut icon" href="{{ asset('pictures/favi.png') }}" />
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}" />
    <link rel="stylesheet" href="/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />

    <!-- select2 -->

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
     <!-- sweet alert -->
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- detail -->
<link rel="stylesheet" href="{{ asset('css/detail.css')}}">
   @if ($message = Session::get('success'))
    <div>
        <p>
            <script>
                swal("Bravo!", "{{ $message }}", "success");
            </script>
        </p>
    </div>
    @endif

    <!-- message d'erreur -->
    @if ($errors->any())
    <div>
        <script>
            swal({
                title: "Echec",
                text: "Il y a une erreur.",
                icon: "warning",
                // buttons: true,
                dangerMode: true,
            })
        </script>
    </div>
    @endif

</head>

<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex align-items-center py-3" style="background: white; box-shadow:1px 1px 1px rgba(192, 192, 192, 0.246)">
                <a class="col logo d-flex align-items-center text-decoration-none text-dark" style="cursor: pointer;" href="">
                    <img src="{{ asset('pictures/logo.png') }}" alt="" style="width: 160px; height:100px ; object-fit: fill">

                </a>
                <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="{{ asset('img/user.svg') }}" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1 py-3">
                <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Bienvenu {{ auth()->user()->name }} </h5>
                <ul class="navbar-nav navbar-nav-right ml-auto">
                    <form class="search-form d-none d-md-block" action="#">
                        <i class="icon-magnifier"></i>
                        <input type="search" class="form-control" placeholder="Search Here" title="Search here">
                    </form>


                    <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
                        <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                            <img class="img-xs rounded-circle ml-2" src="{{ asset('img/user.svg') }}" alt="Profile image"> <span class="font-weight-normal"> {{ auth()->user()->name }}
                            </span></a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                            <div class="dropdown-header text-center">
                                <img class="img-md rounded-circle" src="{{ asset('img/user.svg') }}" alt="Profile image">
                                <p class="mb-1 mt-3">{{ auth()->user()->name }}</p>
                                <p class="font-weight-light text-muted mb-0">{{ auth()->user()->email }}</p>
                            </div>

                            <a>
                                <form method="POST" action="{{ route('logout') }}" class="text-center pb-2 ">

                                    @csrf

                                    <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                        this.closest('form').submit();" class=" text-decoration-none ">
                                        <i class="dropdown-item-icon icon-power text-primary"></i>
                                        {{ __('Déconnexion') }}
                                    </x-responsive-nav-link>
                                </form>
                            </a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item nav-profile">
                        <a href="#" class="nav-link">
                            <div class="profile-image">
                                <img class="img-xs rounded-circle" src="{{ asset('img/user.svg') }}" alt="profile image">
                                <div class="dot-indicator bg-success"></div>
                            </div>
                            <div class="text-wrapper">
                                <p class="profile-name">{{ auth()->user()->name }}</p>
                                <p class="designation">Administrator</p>
                            </div>
                            <div class="icon-container">
                                <i class="icon-bubbles"></i>
                                <div class="dot-indicator bg-danger"></div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item nav-category">
                        <span class="nav-link">Dashboard</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">
                            <span class="menu-title">Dashboard</span>

                        </a>
                    </li>
                    <li class="nav-item nav-category"><span class="nav-link">Operations</span></li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('add') }}">
                            <span class="menu-title">Ajouter une Structure</span>

                        </a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('activite.create')}}">
                            <span class="menu-title">Ajouter une activité</span>

                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('members.create')}}">
                            <span class="menu-title">Ajouter un membre</span>

                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('fonctionView') }}">
                            <span class="menu-title">Ajouter une Fonction</span>

                        </a>
                    </li>
                    <li class="nav-item nav-category">
                        <span class="nav-link">Listes</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('listStructure') }}">
                            <span class="menu-title">Listes des structures</span>

                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('members.index')}}">
                            <span class="menu-title">Listes des membres</span>

                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('activite.index')}}">
                            <span class="menu-title">Listes des activités</span>

                        </a>
                    </li>

                </ul>
            </nav>
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="card-title">@yield('title')</h3>

                    </div>
                    @yield('content')


                </div>

            </div>

        </div>

        <footer class="footer text-light " style="background-color: #181824 ;">
            <div class="d-sm-flex justify-content-center" style="padding-left: 186px">
                <span class="text-muted d-block text-center text-sm-center d-sm-inline-block pt-3 ">Copyright © fedSAEI
                    2022</span>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="{{ asset('admin/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('admin/vendors/select2/select2.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/typeahead.js/typeahead.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/js/off-canvas.js') }}"></script>
    <script src="{{ asset('admin/js/misc.js') }}"></script>
    <script src="{{ asset('admin/js/typeahead.js') }}"></script>
    <script src="{{ asset('admin/js/select2.js') }}"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script type="text/javascript" src="/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <script>
        $(document).ready(function() {

/* This is basic - uses default settings */

$("a#single_image").fancybox();

/* Using custom settings */

$("a#inline").fancybox({
    'hideOnContentClick': true
});

/* Apply fancybox to multiple items */

$("a.group").fancybox({
    'transitionIn'	:	'elastic',
    'transitionOut'	:	'elastic',
    'speedIn'		:	600,
    'speedOut'		:	200,
    'overlayShow'	:	false
});

});
    </script>

</body>

</html>
