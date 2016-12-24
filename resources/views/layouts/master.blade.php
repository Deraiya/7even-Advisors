<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <title> @yield('title')</title>

</head>
<body>
<div class="wrapper">
    @include('includes.header')
    <div class="container">
        <header class="hero-unit">
            <div class="container">
                @yield('content')
            </div>
        </header>
    </div>
    <div class="push"><!--//--></div>
</div> <!-- .wrapper -->
@include('includes.footer')

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/side_bar.js"></script>
</body>
</html>
