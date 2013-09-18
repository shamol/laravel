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

    <script>
        $(function(){
            $('[data-method]').append(function(){
                return "\n"+
                    "<form action='"+$(this).attr('href')+"' method='POST' style='display:none'>\n"+
                    "   <input type='hidden' name='_method' value='"+$(this).attr('data-method')+"'>\n"+
                    "</form>\n"
            })
                .removeAttr('href')
                .attr('style','cursor:pointer;')
                .attr('onclick','$(this).find("form").submit();');
        });
    </script>

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