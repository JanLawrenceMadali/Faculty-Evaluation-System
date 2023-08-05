<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="justify-center mx-auto text-left align-bottom transition-all transform bg-white rounded-lg sm:align-middle sm:max-w-2xl sm:w-full">
        <div class="grid flex-wrap items-center justify-center grid-cols-1 mx-auto shadow-xl lg:grid-cols-2 rounded-xl">
            <div class="w-full px-6 py-3">
                <div>
                    <div class="mt-3 text-left sm:mt-5">
                        <div class="inline-flex items-center w-full">
                            <h3 class="text-lg font-bold text-neutral-600 l eading-6 lg:text-5xl">Sign in</h3>
                        </div>
                    </div>
                </div>

                <div class="mt-6 space-y-2">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Address -->
                        <!-- <div>
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div> -->
                        <div>
                            <x-input-label for="id_number" :value="__('ID Number')" />
                            <x-text-input id="id_number" class="block w-full mt-1" type="number" name="id_number" :value="old('id_number')" required autofocus autocomplete="id_number" />
                            <x-input-error :messages="$errors->get('id_number')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" />

                            <x-text-input id="password" class="block w-full mt-1" type="password" name="password" required autocomplete="current-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Remember Me -->
                        <div class="block mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" class="text-indigo-600 border-gray-300 rounded shadow-sm focus:ring-indigo-500" name="remember">
                                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                            <a class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                            @endif

                            <x-primary-button class="ml-3">
                                {{ __('Log in') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="order-first hidden w-full lg:block">
                <a href="/" title="Home">
                    <img class="object-cover bg-cover rounded-l-lg h-80" src="../assets/images/giants-logo.png" alt="">
                </a>
            </div>
        </div>
    </div>
</x-guest-layout>