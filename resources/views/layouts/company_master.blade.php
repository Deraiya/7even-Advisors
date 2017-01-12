

<!DOCTYPE html>


<html>
<head>
    <title> @yield('title')</title>
    @include('includes.css')
    
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">


    <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
            <span class="logo-mini"><b>7</b>A</span>
            <span class="logo-lg"><b>7even</b>Admin</span>
        </a>

        <nav class="navbar navbar-static-top" role="navigation">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="hidden-xs">Sign Out</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="user-header">
                                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                <p>
                                    Mr. Deepak Raorane
                                    <small>Member</small>
                                </p>
                            </li>
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <aside class="main-sidebar">

        <section class="sidebar">

            <ul class="sidebar-menu">

                <li><a href="{{ URL::to('admin')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span> </i></a></li>
                <li><a href="{{ URL::to('addu') }}"><i class='fa  fa-user-plus'></i> <span>Add Users</span> </a></li>
                <li><a href="{{ URL::to('ven')}}"><i class='fa fa-shopping-cart'></i> <span>Vendor</span></a></li>
                <li><a href="{{ URL::to('rel1')}}"><i class='fa fa-link'></i> <span>Relations</span></a></li>
                <li><a href="#"><i class='fa fa-phone-square'></i> <span>Contact Developer</span></a></li>

            </ul>
        </section>

    </aside>

@yield('content')


    <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
            Crafted At Deraiya
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2017 <a href="#">7even Advisors</a>.</strong>
    </footer>

</div>
@include('includes.fileinput_js')
@include('includes.js')

</body>
</html>



