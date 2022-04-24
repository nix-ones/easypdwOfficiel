<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css'); }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css'); }}">
    <title>@yield('titre')</title>
</head>
<body>

    <div class="container">
        <nav class="navbar navbar-expand-sm navbar-light">
            <a class="navbar-brand" href="/">
                <img src="{{ URL::asset('img/logo.png'); }}" alt="Bootstrap" width="160" height="51" class="d-inline-block align-top">

              </a>
            <button
            	class="navbar-toggler"
            	type="button"
            	data-bs-toggle="collapse"
            	data-bs-target="#toggleMobileMenu"
            	aria-controls="toggleMobileMenu"
            	aria-expanded="false"
            	aria-label="Toggle navigation"
            >
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="toggleMobileMenu">

                <ul class="navbar-nav ms-auto text-center">
                    <li>
                        <a class="nav-link" href="#">Blog/Service</a>
                    </li>
                    <li>
                        <a class="nav-link" href="#">Blog/News</a>
                    </li>
                    <li>
                        <a class="nav-link" href="#">Blog/Chat</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{URL('login')}}">Login</a>
                    </li>
                </ul>


            </div>
        </nav>
     </div>

      @yield('contenu')


    <script src="{{ URL::asset('js/bootstrap.bundle.min.js'); }}"></script>
</body>
</html>

