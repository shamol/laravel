<!DOCTYPE html>
<html lang=”en”>
<head>
    <meta charset="UTF-8" />
    <link
        type="text/css"
        rel="stylesheet"
        href="{{ URL::asset('assets/css/layout.css')}}"/>
    <link
        type="text/css"
        rel="stylesheet"
        href="{{ URL::asset('assets/css/bootstrap.css')}}"/>
    <script
        type="text/javascript"
        src="{{ URL::asset('assets/js/jquery.min.js')}}"></script>
    <script
        type="text/javascript"
        src="{{ URL::asset('assets/js/ajax.js')}}"></script>

    <title>
        Laravel
    </title>
</head>
<body>
@include("header")
<div class="content">
    <div class="container">
        @yield("content")
    </div>
</div>
@include("footer")
</body>
</html>