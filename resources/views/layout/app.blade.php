<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Tech-Hub</title>
</head>
<body>
        <div class="topnav">
                <a href="/about">About</a>
                <a href="/service">Services</a>
                <a href="/posts">Blogs</a>
                <a href="/home">Home</a>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/posts/create">Create Post</a></li>
                </ul>
        </div>
        <div class="bc">
            <div class="container">
                @include('inc.message')
                @yield('content')
            </div>
        </div>
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script>
</body>
</html>