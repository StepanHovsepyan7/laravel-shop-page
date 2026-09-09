<div
    id="mobile-menu-overlay"
    class="hidden fixed cursor-pointer inset-0 bg-black/40 z-[60] lg:hidden"></div>

<aside
    id="mobile-menu-drawer"
    class="fixed top-0 left-0 h-full w-[82%] max-w-[320px] bg-white z-[70]
           -translate-x-full transition-transform duration-300 ease-out
           lg:hidden overflow-y-auto fontLato">
    <div class="p-6">
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center gap-2">
                <img class="w-[40px] h-[27px] rotate-y-180" src="{{ asset('images/1.png') }}" alt="Luminae">
                <span class="text-[20px] font-bold leading-5 text-[#1A1A1A]">Luminae</span>
            </div>

            <button type="button" class="text-[#1A1A1A] p-1" aria-label="Close menu">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5 fill-none stroke-current" stroke-width="2">
                    <path stroke-linecap="round" d="M6 6l12 12M18 6 6 18" />
                </svg>
            </button>
        </div>

        <div class="relative mb-6">
            <input
                type="text"
                placeholder="Search Products"
                class="w-full border rounded-md py-2 pl-3 pr-10 text-sm placeholder:text-[#999999]">
            <button type="button" class="absolute right-3 top-1/2 -translate-y-1/2">
                <img src="{{ asset('images/search.svg') }}" alt="Search">
            </button>
        </div>

        <nav class="mb-6">
            <ul class="flex flex-col gap-4 text-[#555555] text-[14px] font-normal leading-5">
                <li><a href="">About us</a></li>
                <li><a href="">Contact us</a></li>
                <li><a href="">Help & support</a></li>
            </ul>
        </nav>

        <div class="border-t"></div>
        <div class="py-6">
            @auth

            <div class="flex flex-col gap-4">
                <p class="text-[14px] text-[#1A1A1A]">
                    Hi! {{ Auth::user()->first_name }}
                </p>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf

                    <button
                        type="submit"
                        class="text-[14px] text-[#555555]">
                        Log out
                    </button>
                </form>
            </div>

            @else

            <div class="flex flex-col gap-4">

                <a
                    href="{{ route('login') }}"
                    class="flex items-center gap-2 text-[14px] font-normal leading-5 text-[#555555]">

                   <i class="fa-solid fa-user" ></i>
                    <span>Login</span>
                </a>
                <a
                    href="{{ route('register') }}"
                    class="flex items-center gap-2 text-[14px] font-normal leading-5 text-[#555555]">
                    <i class="fa-solid fa-user" ></i>
                    <span>Sign up</span>
                </a>

            </div>

            @endauth
        </div>


        <div class="border-t"></div>

        <div class="pt-6 flex flex-col gap-4">
            <a href="" class="flex items-center gap-2">
            <i class="fa-solid fa-heart" ></i>
            <span class="text-[14px] font-normal leading-5 text-[#1A1A1A]">Favorites</span>
            </a>

            <a href="" class="flex items-center gap-2">
            <i class="fa-solid fa-cart-shopping"></i>
            <span class="text-[14px] font-normal leading-5 text-[#1A1A1A]">Cart</span>
            </a>
        </div>
    </div>
</aside>