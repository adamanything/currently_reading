<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo asset('styles/styles.css')?>" type="text/css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="/currently_reading/">Home</a></li>
            @if(!Auth::id())
            <li><a href="/auth/login">Login</a></li>
            <li><a href="/auth/register">register</a></li>
            @else
            <li><a href="/auth/logout">Logout</a></li>
            <li><a href="/currently_reading/create">Create</a>
            @endif

        </ul>
    </nav>

  <div class='container'>
	<h1>Master Template Working</h1>
    @yield('content')

  </div><!--end of container div-->
</body>


