@extends('layouts.app')

@section('content')
<div class="w-full max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-end py-6">
        <a href="{{ url('/') }}" class="flex items-center text-sm text-gray-600 hover:text-gray-900">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            Back to the website
        </a>
    </div>

    <div class="w-full max-w-md mx-auto py-8">
        <h1 class="text-2xl font-semibold text-gray-900 mb-8">Login</h1>

        <form action="{{ route('login') }}" method="POST" class="space-y-[28px]">
            @csrf

            {{-- Email --}}
            <div>
                <label for="email" class="block text-sm text-gray-700 mb-1">
                    Email <span class="text-red-500">*</span>
                </label>
                <div class="relative">
                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="Email address"
                        class="w-full px-4 py-3 pr-10 border border-gray-300 rounded-lg text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent transition"
                    >
                    <svg class="w-5 h-5 text-gray-400 absolute right-3 top-1/2 -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9" />
                    </svg>
                </div>
                @error('email')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            {{-- Password --}}
            <div>
                <label for="password" class="block text-sm text-gray-700 mb-1">
                    Password <span class="text-red-500">*</span>
                </label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="password"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent transition"
                >
                @error('password')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            {{-- Remember me / Forgot password --}}
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <input
                        type="checkbox"
                        id="remember"
                        name="remember"
                        class="w-4 h-4 rounded border-gray-300 text-gray-900 focus:ring-gray-900"
                    >
                    <label for="remember" class="text-sm text-gray-600">Remember me</label>
                </div>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-sm text-gray-600 hover:text-gray-900">
                        Forgot password?
                    </a>
                @endif
            </div>

            {{-- General errors --}}
            @if ($errors->any())
                <div class="rounded-lg bg-red-50 border border-red-200 p-4">
                    <div class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-red-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                        <ul class="text-sm text-red-700 space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

            {{-- Submit --}}
            <button
                type="submit"
                class="w-full bg-gray-900 hover:bg-gray-800 text-white font-medium py-3 rounded-lg transition disabled:bg-gray-300 disabled:cursor-not-allowed"
            >
                LOGIN
            </button>
        </form>
    </div>
</div>
@endsection