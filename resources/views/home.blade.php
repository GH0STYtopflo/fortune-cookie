<x-layout title={{$title}}>
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

                    <ul tabindex="-1"
                        class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">

                        <li>
                            <a>Item 1</a>
                        </li>

                        <li>
                            <a>Parent</a>

                            <ul class="p-2">
                                <li>
                                    <a>Submenu 1</a>
                                </li>

                                <li>
                                    <a>Submenu 2</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a>Item 3</a>
                        </li>
                    </ul>
                </div>

                <button class="btn btn-ghost text-amber-50 text-2xl">
                    {{ $title }}
                </button>
            </div>

            <div class="navbar-end space-x-2">
                <button class="btn btn-active btn-neutral rounded-2xl w-35">
                    Signup
                </button>

                <button class="btn btn-active btn-neutral rounded-2xl w-30"
                        style="background-color: #38BDF8">
                    Login
                </button>
            </div>

        </div>
    </header>

    <main class="flex-1 flex items-center justify-center p-6">

        <div class="hero min-h-150 w-1/2 rounded-2xl"
             style="background: #2c273a;">

            <div class="hero-content flex-col w-full items-center">
                <div class="w-full text-center">
                    <h2 class="text-5xl font-bold"
                        style="color: #F3F4F6;">
                        Digital fortune cookies
                    </h2>

                    <p style="color: #F3F4F6;" class="mt-10 w-1/2 mx-auto">
                        Unix wisdom, right in your browser.
                        OpenBSD’s classic fortune application brings
                        decades of short quotes, adages, and computer
                        lore to a straightforward web interface.
                        Built as a Laravel exercise project. Sign up and get your cookies.
                    </p>
                </div>

            </div>
        </div>

    </main>
</x-layout>
