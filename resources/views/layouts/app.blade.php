<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>SergioDobri.com</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!--     Fonts and icons     -->
    <!-- <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <!-- <link href='https://fonts.googleapis.com/css?family=Roboto|Noto+Sans:400c' rel='stylesheet'> -->
    <!-- <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300' rel='stylesheet' type='text/css'> -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat|Ubuntu:400,300' rel='stylesheet' type='text/css'>

    <!-- CSS Files -->
    <!-- <link href="/css/bootstrap.min.css" rel="stylesheet" /> -->
    <link href="/css/app.css" rel="stylesheet"/>
</head>

<body>

@yield('modal')

@include('common.alert')

@include('layouts.navbar')

<div class="wrapper">

    <div class="header"></div>

    <div class="container-fluid">

        @yield('content')

    </div>
</div>

</body>

<!--   Core JS Files   -->
<script src="/js/vendor.js"></script>
<script src="/js/app.js"></script>
</html>
