<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://fonts.googleapis.com/earlyaccess/sawarabigothic.css" rel="stylesheet"/>
</head>
<body class="wf-sawarabigothic">
<div class="background-top">
    <div class="container">
    <button class="home-button"><a class="home-button_a" href="/"><img class="home" src="/ie.png" alt=""></a></button>
        @yield('content')
    </div>
    <div class="background-bottom"></div>
</div>
</body>
</html>