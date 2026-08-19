<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Shop')</title>
</head>
<body>
    <header>
        <ul>
            <li>
                <a href="{{ route('home') }}">Home</a>
            </li>
            <li>
                <a href="">
                    About us
                </a>
            </li>
        </ul>
    </header>

    @yield('content')

    <footer>
        <p>this is footer</p>
    </footer>
</body>
</html>