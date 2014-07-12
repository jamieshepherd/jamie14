<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ isset($article->title) ? $article->title.' - ' : '' }}Jamie Shepherd - Plymouth, UK</title>
    <meta name="description" content="Jamie Shepherd is a web designer and developer, technology enthusiast, and computer science student"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
@yield('lib')
    {{ HTML::script('//lib.jamie.sh/jquery.min.js') }}
    {{ HTML::script('//lib.jamie.sh/modernizr.min.js') }}
    {{ HTML::script('//lib.jamie.sh/dropdown.min.js') }}
    {{ HTML::script('js/main.js') }}
    {{ HTML::style('//lib.jamie.sh/reset.min.css') }}
    {{ HTML::style('//lib.jamie.sh/highlight.min.css') }}
    {{ HTML::style('css/main.css') }}
    <link media="all" type="text/css" rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css"/>
@yield('css')
</head>
<body>
@include('layout.nav')
@yield('body')
@include('layout.footer')
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-52110087-1', 'auto');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');

</script>
</body>
</html>
