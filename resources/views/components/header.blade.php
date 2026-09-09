    <header id="navigation" class="fixed top-0 left-0 w-full bg-white border z-50 fontLato">
        <div class="max-w-[1440px] mx-auto px-10 py-[30px]">
            <div class="hidden lg:flex items-center">
                <div class="flex items-center gap-2 shrink-0">
                    <img class="w-[49px] h-[33px] rotate-y-180" src="{{ asset('images/1.png') }}" alt="Luminae">
                    <a href="{{ url('/') }}">
                        <span class="text-[22px] font-bold leading-5 text-[#1A1A1A]">Luminae</span>
                    </a>
                </div>
                <div class="flex items-center ml-auto gap-10">
                    <div class="logoParent relative flex items-center">
                        <input
                            type="text"
                            placeholder="Search Products"
                            class="placeholder:text-[#999999]">

                        <button type="button" class="btn absolute right-3">
                            <img class="pl-[12px]" src="{{ asset('images/search.svg') }}" alt="Search">
                        </button>
                    </div>

                    <nav>
                        <ul class="flex items-center gap-6 text-[#555555] text-[14px] font-normal leading-5">

                            <li>
                                <a href="">About us</a>
                            </li>

                            <li>
                                <a href="">Contact us</a>
                            </li>

                            <li>
                                <a href="">Help & support</a>
                            </li>

                        </ul>
                    </nav>
                </div>
            </div>

            <div class="flex lg:hidden items-center justify-between">
                <button id="menuBtn" type="button" class="text-[#1A1A1A]">
                    <img
                        src="{{ asset('images/menu.svg') }}"
                        alt="Menu">
                </button>

                <div class="flex items-center gap-2">

                    <img
                        class="w-[40px] h-[27px] rotate-y-180"
                        src="{{ asset('images/1.png') }}"
                        alt="Luminae">

                    <span class="text-[22px] font-bold leading-5 text-[#000000]">
                        Luminae
                    </span>

                </div>

                <a href="" class="relative">
                    <img
                        src="{{ asset('images/card.svg') }}"
                        alt="Cart">
                </a>

            </div>
        </div>
    </header>

    <div class="hidden bg-[#262626] text-white w-full h-[78px] mt-[98px] fontLato lg:block">
        <div class="max-w-[1440px] mx-auto px-10 pt-[27px]">
            <div class="flex items-center justify-between">

                <div class="flex items-center gap-[2px]">
                    <img src="{{ asset('images/2.svg') }}" alt="Categories">
                    <span class="font-bold text-[20px] leading-5">
                        Categories
                    </span>
                </div>

                <div class="flex items-center">

                    @auth

                    <span class="text-[14px]">
                        Hi! {{ Auth::user()->first_name }}
                    </span>

                    <form action="{{ route('logout') }}" method="POST" class="ml-5">
                        @csrf
                        <button type="submit" class="text-[14px]">
                            Log out
                        </button>
                    </form>

                    @else

                    <div class="flex items-center gap-[4px]">
                        <img
                            src="{{ asset('images/signin.svg') }}"
                            alt="Sign in">

                        <a
                            class="text-[14px] font-normal leading-5"
                            href="{{ route('login') }}">
                            Login
                        </a>

                        <img
                            class="ml-5"
                            src="{{ asset('images/signin.svg') }}"
                            alt="Sign in">
                        <a
                            class="text-[14px] font-normal leading-5 "
                            href="{{ route('register') }}">
                            Sign up
                        </a>
                    </div>

                    @endauth

                    <div class="flex items-center ml-5">
                        <img
                            src="{{ asset('images/fav.svg') }}"
                            alt="Favorites">

                        <a
                            class="text-[14px] font-normal leading-5 ml-1"
                            href="#">
                            Favorites
                        </a>
                    </div>

                    <div class="flex items-center ml-5">
                        <img
                            src="{{ asset('images/whiteCard.svg') }}"
                            alt="Cart">

                        <a
                            class="text-[14px] font-normal leading-5 ml-1"
                            href="#">
                            Cart
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>