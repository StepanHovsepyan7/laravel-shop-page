  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @extends('layouts.app')

  @section('content')

  <form action="{{ route('register') }}" method="POST">
      @csrf
      <div class="w-full max-w-[1440px] fontLato mx-auto px-4 sm:px-6 lg:px-8">
          <div class="flex justify-end py-6">
              <a href="{{ url('/') }}" class="flex items-center text-sm text-gray-600 hover:text-gray-900">
                  <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                  </svg>
                  Back to the website
              </a>
          </div>

          <div class="w-full max-w-md mx-auto py-8 flex flex-col gap-[28px]">
              <h1 class="text-2xl font-semibold text-gray-900 mb-8">Sign up</h1>

              <form action="{{ route('register') }}" method="POST" class="space-y-[28px]">
                  @csrf

                  <div>
                      <label for="first_name" class="block text-sm text-gray-700 mb-1">
                          Name <span class="text-red-500">*</span>
                      </label>
                      <input
                          type="text"
                          id="first_name"
                          name="first_name"
                          value="{{ old('first_name') }}"
                          placeholder="Full name"
                          class="w-full px-4 py-3 border border-gray-300 rounded-lg text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent transition">
                      @error('first_name')
                      <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                      @enderror
                  </div>

                  <div>
                      <label for="last_name" class="block text-sm text-gray-700 mb-1">
                          Surname <span class="text-red-500">*</span>
                      </label>
                      <input
                          type="text"
                          id="last_name"
                          name="last_name"
                          value="{{ old('last_name') }}"
                          placeholder="Surname"
                          class="w-full px-4 py-3 border border-gray-300 rounded-lg text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent transition">
                      @error('last_name')
                      <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                      @enderror
                  </div>

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
                              class="w-full px-4 py-3 pr-10 border border-gray-300 rounded-lg text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent transition">
                          <svg class="w-5 h-5 text-gray-400 absolute right-3 top-1/2 -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9" />
                          </svg>
                      </div>
                      @error('email')
                      <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                      @enderror
                  </div>

                  <div>
                      <label for="password" class="block text-sm text-gray-700 mb-1">
                          Password <span class="text-red-500">*</span>
                      </label>
                      <input
                          type="password"
                          id="password"
                          name="password"
                          placeholder="password"
                          class="w-full px-4 py-3 border border-gray-300 rounded-lg text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent transition">
                      @error('password')
                      <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                      @enderror
                  </div>

                  <div>
                      <label for="password_confirmation" class="block text-sm text-gray-700 mb-1">
                          Confirm password <span class="text-red-500">*</span>
                      </label>
                      <input
                          type="password"
                          id="password_confirmation"
                          name="password_confirmation"
                          placeholder="Confirm password"
                          class="w-full px-4 py-3 border border-gray-300 rounded-lg text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent transition">
                      @error('password_confirmation')
                      <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                      @enderror
                  </div>

                  <div class="flex items-start gap-3">
                      <input
                          type="checkbox"
                          id="terms"
                          name="terms"
                          class="mt-1 w-4 h-4 rounded border-gray-300 text-gray-900 focus:ring-gray-900 flex-shrink-0">
                      <label for="terms" class="text-sm text-gray-500 leading-relaxed">
                          Terms and conditions agreement should start with an introduction that lets users know they're reading a terms and conditions agreement
                      </label>
                  </div>
                  @error('terms')
                  <p class="text-sm text-red-500">{{ $message }}</p>
                  @enderror

              
                  

                  <button
                      type="submit"
                      class="w-full bg-gray-900 hover:bg-gray-800 text-white font-medium py-3 rounded-lg transition disabled:bg-gray-300 disabled:cursor-not-allowed">
                      SIGN UP
                  </button>
              </form>
          </div>
      </div>
      @endsection