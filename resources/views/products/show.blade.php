@extends('layouts.app')
@section('title', 'Product')
@section('content')
<div class="max-w-[1440px] mx-auto pt-[120px] fontLato px-4 sm:px-6 lg:px-8 lg:pt-[35px]">
    <div class="text-[12px] sm:text-[13px] text-[#767676] mb-6 flex flex-wrap items-center gap-x-2 gap-y-1">
        <a href="{{ route('home') }}" class="hover:text-[#262626] hover:underline transition">Homepage</a>
        <span>></span>
        <a href="#" class="hover:text-[#262626] hover:underline transition">Women</a>
        <span>></span>
        <a href="#" class="hover:text-[#262626] hover:underline transition">Clothes</a>
        <span>></span>
        <span class="text-[#262626]">{{ $product->name ?? 'Unknown Product' }}</span>
    </div>

    <div class="flex flex-col md:flex-row gap-8 lg:gap-12">
        <div class="w-full md:w-[56%]">
            <div class="flex flex-col-reverse sm:flex-row gap-3">
                <div class="flex flex-row sm:flex-col gap-2 overflow-x-auto sm:overflow-visible shrink-0 pb-1 sm:pb-0">
                    @foreach($product->gallery ?? [] as $index => $thumb)
                    <button
                        type="button"
                        class="shrink-0 w-[58px] h-[72px] sm:w-[64px] sm:h-[80px] border {{ $index === 0 ? 'border-[#262626]' : 'border-[#e5e5e5]' }} overflow-hidden hover:border-[#262626] transition">
                        <img
                            src="{{ asset($thumb) }}"
                            alt="{{ $product->name }} thumbnail {{ $index + 1 }}"
                            class="w-full h-full object-cover">
                    </button>
                    @endforeach
                </div>

                <div class="flex-1 min-w-0 h-[430px] sm:h-[500px] md:h-[520px] lg:h-[600px] bg-[#f5f5f500] overflow-hidden">
                    <img
                        src="{{ asset($product->image) }}"
                        alt="{{ $product->name }}"
                        class="w-full h-full object-cover transition-opacity duration-200">
                </div>
            </div>
        </div>

        <div class="w-full md:w-[44%] lg:flex-1 pt-1">
            <div class="flex items-start justify-between gap-4">
                <h1 class="text-[21px] sm:text-[24px] lg:text-[27px] leading-[1.15] font-extrabold text-[#262626]">
                    {{ $product->name }}
                </h1>

                <button
                    id="favBtn"
                    type="button"
                    class="shrink-0 w-10 h-10 rounded-full border border-[#e5e5e5] flex items-center justify-center hover:border-[#262626] transition"
                    aria-label="Add to wishlist">
                    <i class="fa-regular fa-heart text-[15px]"></i>
                </button>
            </div>

            <div class="mt-3 flex flex-wrap items-center gap-2">
                <span class="text-[18px] sm:text-[19px] font-bold text-[#262626]">
                    ${{ number_format($product->price, 2) }}
                </span>

                @if($product->old_price)
                <span class="text-[13px] sm:text-[14px] text-[#999] line-through">
                    ${{ number_format($product->old_price, 2) }}
                </span>
                @endif

                @if($product->sale_percent)
                <span class="text-[12px] sm:text-[13px] text-[#c33]">
                    -{{ $product->sale_percent }}%
                </span>
                @endif
            </div>

            <div class="border-t border-[#e5e5e5] mt-6"></div>

            <div class="mt-6">
                <div class="flex items-center justify-between mb-3">
                    <span class="text-[13px] font-medium text-[#262626]">Size</span>
                    <button type="button" class="text-[12px] text-[#262626] underline hover:no-underline">
                        Size guide
                    </button>
                </div>

                <div class="flex flex-wrap gap-2">
                    @foreach(json_decode($product->sizes ?? '[]', true) as $size)
                    <button
                        type="button"
                        class="size-option min-w-[44px] h-[40px] px-3 border border-[#c7c7c7] text-[13px] text-[#262626] hover:border-[#262626] transition"
                        data-selected="false">
                        {{ $size }}
                    </button>
                    @endforeach
                </div>
            </div>

            <div class="mt-6">
                <span class="block text-[13px] font-medium text-[#262626] mb-3">Color</span>

                <div class="flex items-center gap-3 flex-wrap">
                    @foreach(json_decode($product->colors ?? '[]', true) as $color)
                    <button
                        type="button"
                        class="w-7 h-7 shrink-0 rounded-full border border-[#d5d5d5] hover:ring-1 hover:ring-[#262626] hover:ring-offset-2 transition"
                        style="background-color: {{ $color }}"
                        aria-label="Select color {{ $color }}"></button>
                    @endforeach
                </div>
            </div>

            <div class="mt-7">
                <span class="block text-[13px] font-medium text-[#262626] mb-2">Shipping</span>

                <div class="border border-[#e5e5e5] px-4 py-3 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2 text-[12px] sm:text-[13px]">
                    <span class="text-[#262626]">Free Shipping to Victoria territory</span>
                    <span class="text-[#767676]">Delivery Time: 14 - 21 days</span>
                </div>
            </div>

            <div class="mt-6">
                <span class="block text-[13px] font-medium text-[#262626] mb-2">Quantity</span>

                <div class="flex flex-wrap items-center gap-4">
                    <div class="flex items-center border border-[#c7c7c7]">
                        <button id="minusBtn" type="button" class="w-10 h-10 text-[17px] hover:bg-[#f5f5f5] transition">-</button>

                        <input
                            id="count"
                            type="text"
                            value="1"
                            readonly
                            class="w-10 h-10 text-center text-[13px] bg-white">

                        <button id="plusBtn" type="button" class="w-10 h-10 text-[17px] hover:bg-[#f5f5f5] transition">+</button>
                    </div>

                    <span class="text-[12px] text-[#767676]">
                        {{ $product->available ?? 50 }} available / {{ $product->sold ?? 304 }} sold
                    </span>
                </div>
            </div>

            <div
                class="product mt-6 bg-[#f5f5f5] px-4 py-4 text-[19px] font-bold text-[#262626]"
                data-price="{{ $product->price }}">
                ${{ number_format($product->price, 2) }}
            </div>

            <div class="mt-4 flex gap-2 sm:gap-3">
                <button
                    type="button"
                    class="flex-1 h-12 bg-[#262626] text-white text-[12px] sm:text-[13px] font-bold tracking-wide hover:bg-[#111] transition">
                    SHOP NOW
                </button>

                <button
                    type="button"
                    class="shrink-0 w-12 h-12 border border-[#c7c7c7] flex items-center justify-center hover:border-[#262626] transition"
                    aria-label="Add to basket">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="w-4 h-4"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="#262626"
                        stroke-width="1.5">
                        <path d="M6 7h12l-1 13H7L6 7Z" />
                        <path d="M9 7a3 3 0 0 1 6 0" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div class="mt-14 sm:mt-16 border-t border-[#e5e5e5] pt-10 pb-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 lg:gap-20">
            <div>
                <h2 class="text-[17px] sm:text-[18px] font-bold text-[#262626] mb-4">Product Description</h2>

                @if($product->description)
                <p class="text-[13px] sm:text-[14px] text-[#4a4a4a] leading-7">
                    {{ $product->description }}
                </p>
                @endif

                @if($product->specs)
                <div class="mt-6">
                    <h3 class="text-[14px] font-bold text-[#262626] mb-3">Product Details</h3>

                    <ul class="text-[13px] text-[#4a4a4a] leading-7 space-y-1">
                        @foreach($product->specs ?? [] as $label => $value)
                        <li class="flex gap-2">
                            <span class="text-[#262626] font-medium">{{ $label }}:</span>
                            <span>{{ $value }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>

            <div>
                <h2 class="text-[17px] sm:text-[18px] font-bold text-[#262626] mb-4">Composition</h2>

                @if($product->composition)
                <p class="text-[13px] sm:text-[14px] text-[#4a4a4a] leading-7">
                    {{ $product->composition }}
                </p>
                @endif

                @if($product->care_instructions)
                <div class="mt-7">
                    <h3 class="text-[14px] font-bold text-[#262626] mb-3">Care Instructions</h3>

                    <ul class="text-[13px] text-[#4a4a4a] leading-7 space-y-2">
                        @foreach($product->care_instructions ?? [] as $instruction)
                        <li class="flex items-start gap-2">
                            <span class="w-4 h-4 mt-[6px] shrink-0 inline-block border border-[#767676]"></span>
                            <span>{{ $instruction }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        </div>

        <div class="mt-12 pt-8 border-t border-[#e5e5e5]">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2">
                <h2 class="text-[17px] sm:text-[18px] font-bold text-[#262626]">Reviews</h2>
                <span class="text-[12px] text-[#767676]">
                    {{ $product->reviews_count ?? 0 }} reviews
                </span>
            </div>

            <div class="mt-5 border border-[#e5e5e5] px-4 py-6 text-[13px] text-[#767676]">
                No reviews yet.
            </div>
        </div>

        <div class="mt-12 pt-8 border-t border-[#e5e5e5]">
            <h2 class="text-[17px] sm:text-[18px] font-bold text-[#262626] mb-4">
                Shipping & Payment
            </h2>

            <p class="text-[13px] sm:text-[14px] text-[#4a4a4a] leading-7">
                {{ $product->shipping_info ?? 'Shipping and payment details go here.' }}
            </p>
        </div>
    </div>
</div>

@endsection