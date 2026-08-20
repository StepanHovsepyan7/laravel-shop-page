<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title','Shop')</title>
</head>

<body>
    <div class="max-w-[1440px] mx-auto">
        <header class="fixed w-full top-0 left-0 right-0 bg-white border-1 fontLato z-50">

            <div class="hidden lg:flex items-center px-10 py-[30px]">
                <div class="logoParent flex items-center gap-2 shrink-0">
                    <img class="w-[49px] h-[33px] rotate-y-180" src="{{ asset('images/1.png') }}" alt="">
                    <span class="text-[22px] font-bold leading-5 text-[#1A1A1A]">Luminae</span>
                </div>

                <div class="flex flex-wrap items-center ml-auto gap-10">
                    <div class="logoParent mx-8">
                        <div class="relative flex items-center">
                            <input
                                type="text"
                                placeholder="Search Products"
                                class="text-[14px] placeholder:text-[#999999] pr-9">
                            <button type="submit" class="absolute right-3 btn">
                                <img class="ml-3" src="{{ asset('images/search.svg') }}" alt="">
                            </button>
                        </div>
                    </div>

                    <nav>
                        <ul class="flex flex-wrap items-center gap-6 text-[#555555] text-[14px] font-normal leading-5 fontLato">
                            <li><a href="" >About us</a></li>
                            <li><a href="" >Contact us</a></li>
                            <li><a href="" >Help & support</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="flex lg:hidden items-center justify-between px-5 py-4">

                <button type="button" class="text-[#1A1A1A]">
                    <img src="{{ asset('images/menu.svg') }}" alt="menu">
                </button>

                <div class="logoParent flex items-center gap-2">
                    <img class="w-[40px] h-[27px] rotate-y-180" src="{{ asset('images/1.png') }}" alt="">
                    <span class="text-[22px] font-bold leading-5 text-[#000000]">Luminae</span>
                </div>

                <a href="" class="relative text-[#1A1A1A]">
                    <img src="{{ asset('images/card.svg') }}" alt="">
                    
                </a>
            </div>
        </header>
    </div>

    <footer>
        <p>this is footer</p>
    </footer>
</body>

</html>