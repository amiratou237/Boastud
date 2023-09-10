{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>Socimo | Social Media Network Template</title>
    <link rel="icon" href="{{asset('socimo/images/fav.png')}}" type="image/png" sizes="16x16"> 
    
    <link rel="stylesheet" href="{{asset('socimo/css/main.min.css')}}">
    <link rel="stylesheet" href="{{asset('socimo/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('socimo/css/color.css')}}">
    <link rel="stylesheet" href="{{asset('socimo/css/responsive.css')}}">

</head>
<body>
<div class="page-loader" id="page-loader">

  <div class="loader"><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span></div>

</div><!-- page loader -->
<div class="theme-layout">
	
	<div class="authtication bluesh high-opacity">
		<div class="bg-image" style="background-image: url({{asset('socimo/images/resources/login-bg3.jpg')}})"></div>
		<ul class="welcome-caro">
			<li class="welcome-box">
				<figure><img src="{{asset('socimo/images/resources/login-1.png')}}" alt=""></figure>
				<h4>Ask questions with seniors Researchers</h4>
				<p>
					Ask questions and get the experienced answer by researchers and others fellows.
				</p>
			</li>
			<li class="welcome-box">
				<figure><img src="{{asset('socimo/images/resources/login-2.png')}}" alt=""></figure>
				<h4>Find New Researchers or Friends</h4>
				<p>
					Join Socimo and make your network of university or college fellows.
				</p>
			</li>
			<li class="welcome-box">
				<figure><img src="{{asset('socimo/images/resources/login-3.png')}}" alt=""></figure>
				<h4>Sell Your Online paid Content</h4>
				<p>
					Sell your online lectures, videos, books and many more with Socimo.
				</p>
			</li>
			
		</ul>
	</div>
	<div class="auth-login">
		<div class="logo"><img src="{{asset('socimo/images/logo.png')}}" alt=""><span>Socimo</span></div>
		<div class="mockup left-bottom"><img src="{{asset('socimo/images/mockup.png')}}" alt=""></div>
		<div class="verticle-center">
			<div class="login-form">
				<h4><i class="icofont-key-hole"></i> Login</h4>
				<form method="POST" {{ route('login') }} class="c-form">
                    @csrf
					<input type="text" name="email" placeholder="User Name @">
					<input type="password" name="password" placeholder="xxxxxxxxxx">
					<div class="checkbox">
						<input type="checkbox" id="checkbox" checked>
						<label for="checkbox"><span>Remember Me</span></label>
                        <div class="d-flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                                <a class="text-end underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                        </div>
                        {{-- <div class="d-flex items-center justify-end mt-4" style="float: right">
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                {{ __('You don\'t have account ?') }}
                            </a>
                        </div> --}}
					</div>
					<button class="main-btn" type="submit"><i class="icofont-key"></i> Login</button>
				</form>
			</div>
		</div>
		<div class="mockup right"><img src="{{asset('socimo/images/star-shape.png')}}" alt=""></div>
	</div>
	
</div>
	
	<script src="{{asset('socimo/js/main.min.js')}}"></script>
	<script src="{{asset('socimo/js/script.js')}}"></script>
	

</body>	
</html>