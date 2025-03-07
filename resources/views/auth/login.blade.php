<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
</head>

<body>
    <main class="w-full max-w-md mx-auto p-6">
        <div class="mt-7 bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-gray-800 dark:border-gray-700">
            <div class="p-4 sm:p-7">
                <div class="text-center">
                    <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Masuk</h1>
                </div>

                <div class="mt-5">
                    <!-- Validation Errors -->
                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            {{-- <strong>{{ $errors->first('email') }}</strong> --}}
                            <div class="bg-red-50 border border-red-200 rounded-md p-4 mb-5" role="alert">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <svg class="h-4 w-4 text-red-400 mt-0.5" xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                                        </svg>
                                    </div>
                                    <div class="ml-4">
                                        <h3 class="text-sm text-red-800 font-semibold">
                                            Email dan Password tidak cocok
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </span>
                    @endif
                    <!-- Form -->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="grid gap-y-4">
                            <!-- Form Group -->
                            <div>
                                <label for="email" class="block text-sm mb-2 dark:text-white">Alamat Email</label>
                                <div class="relative">
                                    <input type="email" id="email" name="email" placeholder="Masukan Email"
                                        class="py-3 px-4 block w-full border border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                                        required aria-describedby="email-error">
                                    <div
                                        class="hidden absolute inset-y-0 right-0 flex items-center pointer-events-none pr-3">
                                        <svg class="h-5 w-5 text-red-500" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                            <path
                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                        </svg>
                                    </div>
                                </div>
                                <p class="hidden text-xs text-red-600 mt-2" id="email-error">Please include a valid
                                    email address so we can get back to you</p>
                            </div>
                            <!-- End Form Group -->

                            <!-- Form Group -->
                            <div>
                                {{-- <div class="flex justify-between items-center">
                                    <label for="password" class="block text-sm mb-2 dark:text-white">Password</label>
                                    <a class="text-sm text-blue-600 decoration-2 hover:underline font-medium"
                                        href="{{ route('password.request') }}">Forgot password?</a>
                                </div> --}}
                                <label for="email" class="block text-sm mb-2 dark:text-white">Password</label>
                                <div class="relative">
                                    <input type="password" id="password" name="password" placeholder="Masukan Password"
                                        class="py-3 px-4 block w-full border border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                                        required aria-describedby="password-error">
                                    <div
                                        class="hidden absolute inset-y-0 right-0 flex items-center pointer-events-none pr-3">
                                        <svg class="h-5 w-5 text-red-500" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                            <path
                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                        </svg>
                                    </div>
                                </div>
                                <p class="hidden text-xs text-red-600 mt-2" id="password-error">8+ characters required
                                </p>
                            </div>
                            <!-- End Form Group -->

                            <!-- Checkbox -->
                            {{-- <div class="flex items-center justify-between">
                                <div class="flex">
                                    <div class="flex">
                                        <input id="remember-me" name="remember-me" type="checkbox"
                                            class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 pointer-events-none focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                                    </div>
                                    <div class="ml-3">
                                        <label for="remember-me"
                                            class="text-sm dark:text-white">{{ __('Remember me') }}</label>
                                    </div>
                                </div>
                                <div>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="text-sm text-blue-600 decoration-2 hover:underline font-medium">Register</a>
                                    @endif
                                </div>
                            </div> --}}
                            <!-- End Checkbox -->
                            <div>

                            </div>
                            <button type="submit"
                                class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                                {{ __('Log in') }}</button>
                        </div>
                    </form>
                    <!-- End Form -->
                </div>
            </div>
        </div>
    </main>
</body>

</html>
