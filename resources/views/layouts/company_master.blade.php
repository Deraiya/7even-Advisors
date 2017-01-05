

<!DOCTYPE html>


<html>
<head>
    <title> @yield('title')</title>
    @include('includes.css')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">


@yield('nav_bar')

@yield('side_bar')

@yield('content')


    <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
            Crafted By Deraiya Inc.
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2017 <a href="#">7even Advisors</a>.</strong>
    </footer>

</div>
@include('includes.js')
</body>
</html>



