<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Jamie Shepherd - Plymouth, UK</title>
    <meta name="description" content="Jamie Shepherd is a web designer and developer, technology enthusiast, and computer science student"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js"></script>
@yield('lib')
    {{ HTML::script('js/main.js') }}
    <link media="all" type="text/css" rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css"/>
    <link media="all" type="text/css" rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css"/>
    {{ HTML::style('css/main.css') }}
    {{ HTML::style('css/admin.css') }}
@yield('css')
</head>
<body>
@include('layout.nav')
@yield('body')
@include('layout.footer')
</body>
</html>