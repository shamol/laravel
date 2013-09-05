<!doctype html>
<head>
    <meta charset="utf-8">
    <title>Laravel Application</title>
    <meta name="description" content="Welcome to my basic template.">

    <style>
            /* page core */
        body {
            margin:0;
            padding:0;
        }
        header {
            width: 100%;
            background-color: #E7E8EC;
            height: 100px;
        }

        header h1 {
            padding-left: 40px;
        }

        div#core {
            width: 100%;
            height: 100%;
            display: block;
            clear: both;
            margin-bottom: 20px;
            padding-left: 45px;
        }
        nav {
            display: block;
            margin-bottom: 10px;
        }
        nav ul {
            list-style: none;
            font-size: 14px;
        }
        nav ul li {
            display: inline;
        }
        nav ul li a {
            display: block;
            float: left;
            padding: 3px 6px;
            color: #575c7d;
            text-decoration: none;
            font-weight: bold;
        }
        nav ul li a:hover {
            background: #deff90;
            color: #485e0f;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            padding: 3px 6px;
            margin: 0;
            text-decoration: none;
        }

        footer {
            width:100%;
            height:80px;
            position:absolute;
            bottom:0;
            left:0;
            background:#E2E4EF;
        }


    </style>
</head>

<body>
<div id="wrapper">
    <header>
        <h1>Laravel App</h1>

        <nav>
            <ul>
                <li><a rel="external" href="#">Home</a></li>
                <li><a rel="external" href="#">About us</a></li>
                <li><a rel="external" href="#">Contacts</a></li>
            </ul>
        </nav>
    </header>

    <div id="core">
        <section id="middle">
            @yield('content')
        </section>

    </div>
</div>

</body>
</html>
