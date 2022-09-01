<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />
<<<<<<< HEAD
                @if (Cookie::has('reemail'))
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="Cookie::get('reemail')"
                        required autofocus />
                @else
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                        required autofocus />
                @endif
=======

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
>>>>>>> origin/Duy
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Mật khẩu')" />
<<<<<<< HEAD
                @if (Cookie::has('repass'))
                    <x-input id="password" class="block mt-1 w-full" type="password" name="password"
                        value="{{ Cookie::get('repass') }}" required autocomplete="current-password" />
                @else
                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="current-password" />
                @endif
=======

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
>>>>>>> origin/Duy
            </div>

            <!-- Remember Me -->
            <div class="block mt-4 ">
                <label for="remember_me" class="inline-flex items-center">
<<<<<<< HEAD
                    <input id="remember_me" type="checkbox"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        @if (Cookie::has('repass')) checked @endif name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Ghi nhớ mật khẩu') }}</span>
                </label>

=======
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Ghi nhớ mật khẩu') }}</span>
                </label>
                
>>>>>>> origin/Duy
            </div>
            <!-- <div class="block mt-4  ">
                <a class=" text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">Tạo Tài Khoản</a>
            </label>
            </div> -->
<<<<<<< HEAD
            <div class="inline-flex items-center text-gray-600 mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                        href="{{ route('password.request') }}">
                        {{ __('Quên mật khẩu ?') }}
                    </a>
                @endif
            </div>





            <div class="flex items-center justify-end mt-4">
                <div>
                    <a class=" text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">Tạo Tài
                        Khoản</a>
                </div>


                <!-- @if (Route::has('password.request'))
<a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Quên mật khẩu ?') }}
                    </a>
@endif -->


=======
            <div class="inline-flex items-center text-gray-600 mt-4" >
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Quên mật khẩu ?') }}
                        </a>
                    @endif
                </div>

            
               
            

            <div class="flex items-center justify-end mt-4">
            <div  >
                <a class=" text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">Tạo Tài Khoản</a>
            </div>
            

                <!-- @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Quên mật khẩu ?') }}
                    </a>
                @endif -->

           
>>>>>>> origin/Duy

                <x-button class="ml-3">
                    {{ __('Đăng Nhập') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
