<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daisyui@5" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <title>{{$title}}</title>
</head>

<body class="min-h-screen flex flex-col" style="background: #0F0E17;">
<header>
    <div class="navbar shadow-sm" style="background-color: #1B192A">

        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0"
                     role="button"
                     class="btn btn-ghost lg:hidden">

                    <svg aria-label="Menu"
                         xmlns="http://www.w3.org/2000/svg"
                         class="h-5 w-5"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor">

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M4 6h16M4 12h8m-8 6h16"/>
                    </svg>
                </div>
            </div>

            <form action="/" method="GET">
                <button class="btn btn-ghost text-amber-50 text-2xl btn-hover hover:bg-transparent hover:border-0">
                    {{ $title }}
                </button>
            </form>

        </div>

        @auth
            <ul class="menu menu-horizontal bg-base-200 navbar-center space-x-2" style="background-color: #1B192A">
                <li style="background: #2c273a; color: white" class="rounded">
                    <a href="/get_cookie">Get A New Cookie</a>
                </li>
                <li style="background: #2c273a; color: white" class="rounded">
                    <a href="/my_cookies">View Your Cookies</a>
                </li>
            </ul>
        @endauth

        <div class="navbar-end space-x-2">
            @guest()
                <form action="/signup" method="GET">
                    <button class="btn btn-active btn-neutral rounded-2xl w-35">
                        Signup
                    </button>
                </form>

                <form action="/login" method="GET">
                    <button class="btn btn-active btn-neutral rounded-2xl w-30"
                            style="background-color: #38BDF8">
                        Login
                    </button>
                </form>
            @endguest

            @auth
                <form action="/logout" method="POST">
                    <button class="btn btn-active btn-neutral rounded-2xl w-30"
                            style="background-color: darkred">
                        Logout
                    </button>
                </form>

            @endauth

        </div>

    </div>
</header>

{{$slot}}

</body>
</html>
