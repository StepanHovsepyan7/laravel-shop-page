@php
$trendingItems = [
[
'image' => 'trend.jpg',
'name' => 'Cool & Sexy Calvin Klein',
'category' => 'Dotted dress Casual',
'price' => 89,
],
[
'image' => 'trend2.jpg',
'name' => 'Cool & Sexy Calvin Klein',
'category' => 'Dotted dress Casual',
'price' => 89,
],
[
'image' => 'trend3.jpg',
'name' => 'Beige coat Zara',
'category' => 'Cream-Brown-Formal',
'price' => 102,
],
];
@endphp

<section class="px-4 sm:px-6 lg:px-8 py-10 max-w-[1440px] mx-auto fontLato">
    <div class="flex items-center justify-between mb-4">
        <h2 class="text-[28px] font-medium text-[#000000] leading-5">Trending must-haves</h2>
        <a href="#" class="text-sm text-[#262626] hover:text-[#00A95D] flex items-center gap-1">
            View all <span>&rsaquo;</span>
        </a>
    </div>

    <div data-aos="fade-up"
        data-aos-duration="800"
        data-aos-offset="150"
         class="flex md:block xl:grid xl:grid-cols-3
                gap-4 md:gap-0 md:space-y-4 xl:gap-4 xl:space-y-0
                overflow-x-auto md:overflow-visible
                snap-x snap-mandatory md:snap-none scroll-smooth
                -mx-4 px-4 md:mx-0 md:px-0 pb-2 no-scrollbar mt-[50px]">

        @foreach ($trendingItems as $item)
        <div class="snap-start shrink-0 w-[80%] sm:w-[357px]
                        md:w-full md:shrink md:snap-none xl:w-auto cursor-pointer">
            <div class="relative rounded-xl overflow-hidden group h-[460px] xl:h-[480px]">
                <img src="{{ asset('images/' . $item['image']) }}" alt="{{ $item['name'] }}"
                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">

                <div class="absolute w-[85px] h-[26px] top-3 left-3 flex items-center gap-1 whitespace-nowrap bg-[#00A95D] backdrop-blur-sm
                                px-2 py-1 rounded-md text-[10px] font-medium text-white">
                    <img src="{{ asset('images/cart.svg') }}" alt="" class="w-4 h-4">
                    New Arivals
                </div>

                <div class="absolute bottom-0 left-0 right-0 bg-[#262626] px-4 py-3
                                flex items-center justify-between">
                    <div>
                        <p class="text-white text-[16px] font-bold leading-7">
                            {{ $item['name'] }}
                        </p>
                        <p class="text-[#C4C4C4] text-[14px] mt-[15px]">
                            {{ $item['category'] }}
                        </p>
                    </div>

                    <div class="flex items-center gap-2 shopbtn">
                        <span class="text-white text-[14px] font-semibold">
                            ${{ $item['price'] }}
                        </span>
                        <a href="#"
                            class="text-white text-[14px] font-bold
                                      whitespace-nowrap transition-colors">
                            Shop Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>