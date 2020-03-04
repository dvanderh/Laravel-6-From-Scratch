<!DOCTYPE html>
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : SimpleWork
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140225

-->
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title></title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
        <link href="{{ asset('css/default.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/fonts.css') }}" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="header-wrapper">
            <div id="header" class="container">
                <div id="logo">
                    <h1><a href="/">SimpleWork</a></h1>
                </div>
                <div id="menu">
                    <ul>
                        <li class="{{ Request::path() === '/' ? 'current_page_item' : '' }}"><a href="/" accesskey="1" title="">Homepage</a></li>
                        <li class="{{ Request::path() === 'clients' ? 'current_page_item' : '' }}"><a href="#" accesskey="2" title="">Our Clients</a></li>
                        <li class="{{ Request::path() === 'about' ? 'current_page_item' : '' }}"><a href="/about" accesskey="3" title="">About Us</a></li>
                        <li class="{{ Request::path() === route('articles.index') ? 'current_page_item' : '' }}"><a href="{{ route('articles.index') }}" accesskey="4" title="">Articles</a></li>
                        <li class="{{ Request::path() === 'contact' ? 'current_page_item' : '' }}"><a href="#" accesskey="5" title="">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            @yield('header-featured')
        </div>

        @yield('content')

        <div id="copyright" class="container">
            <p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
        </div>
    </body>
</html>