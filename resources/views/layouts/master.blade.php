<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/footer.css">

    <title> @yield('title')</title>

</head>
<body>

<div class="wrapper" style="background-color: #f3f3f3">
    <div class="row">

        @include('includes.jumbotron')

    </div>
    <div class="container">
        <header class="hero-unit">
            <div class="container">

                @yield('content')

            </div>
        </header>
    </div>
    <div class="push"><!--//--></div>
</div> <!-- .wrapper -->




<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
