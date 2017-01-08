

<!DOCTYPE html>


<html>
<head>
    <title> @yield('title')</title>
    @include('includes.css')
    
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">


@yield('nav_bar')

    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->


            <!-- search form (Optional) -->

            <!-- /.search form -->

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu">
                <li class="header">HEADER</li>
                <!-- Optionally, you can add icons to the links -->
                <li><a href="{{ URL::to('admin')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span> </i></a></li>
                <li><a href="{{ URL::to('addu') }}"><i class='fa  fa-user-plus'></i> <span>Add Users</span> </a></li>
                <li><a href="{{ URL::to('rel1')}}"><i class='fa fa-shopping-cart'></i> <span>Vendor</span></a></li>
                <li><a href="{{ URL::to('rel1')}}"><i class='fa fa-link'></i> <span>Relations</span></a></li>
                <li><a href="#"><i class='fa fa-phone-square'></i> <span>Contact Developer</span></a></li>

            </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
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
@include('includes.js')
</body>
</html>



