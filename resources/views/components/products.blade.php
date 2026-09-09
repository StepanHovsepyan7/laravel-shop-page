<div class="max-w-[1440px] mx-auto px-4">

    <div class="flex items-center justify-between mb-4">
        <h2 class="text-[28px] font-medium text-[#000000] leading-5">
            Top 100
        </h2>

        <a href="#" class="text-sm text-[#262626] hover:text-[#00A95D] flex items-center gap-1">
            View all <span>&rsaquo;</span>
        </a>
    </div>

    <div class="mt-[48px]">

        <div class="
            flex gap-4 overflow-x-auto snap-x snap-mandatory
            pb-4
            sm:grid sm:grid-cols-2
            md:grid-cols-3
            lg:grid-cols-4
            sm:overflow-visible
            sm:pb-0
        ">

            @forelse ($products as $product)

            <article class="
                    group bg-white rounded-xl overflow-hidden shadow-sm
                    hover:shadow-lg transition-shadow duration-300
                    flex-shrink-0
                    w-[280px]
                    snap-start
                    sm:w-auto
                ">

                <a href="{{ route('products.show',$product->id) }}" class="block overflow-hidden">

                    <img
                        src="{{ $product->image }}"
                        alt="{{ $product->name }}"
                        class="
                                w-full
                                h-[400px]
                                sm:h-[500px]
                                object-cover
                                group-hover:scale-105
                                transition-transform
                                duration-300
                            ">

                </a>

                <div class="p-4">

                    <p class="text-base font-semibold text-gray-900 truncate">
                        {{ $product->name }}
                    </p>

                    <p class="text-sm text-gray-500 mt-1">
                        {{ $product->brand ?? '' }}
                    </p>

                    <div class="flex items-center gap-2 mt-3">

                        <span class="text-lg font-bold text-[#FF2E00]">
                            ${{ number_format($product->price, 0) }}
                        </span>

                        @if ($product->old_price)
                        <span class="text-sm text-[#9D9D9D] line-through">
                            ${{ number_format($product->old_price, 0) }}
                        </span>
                        @endif

                        @if ($product->sale_percent)
                        <span class="text-sm font-semibold text-[#FF2E00]">
                            -{{ $product->sale_percent }}%
                        </span>
                        @endif

                    </div>

                    <button
                        type="button"
                        class="
                                w-full mt-4
                                bg-gray-900 text-white
                                py-2.5 rounded-lg
                                hover:bg-gray-700
                                transition-colors
                            ">
                        Add to cart
                    </button>

                </div>

            </article>

            @empty

            <p class="text-sm text-gray-500 text-center py-10">
                No products to show.
            </p>

            @endforelse

        </div>

    </div>

</div>