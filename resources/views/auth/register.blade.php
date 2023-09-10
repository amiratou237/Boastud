{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
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
		<div class="verticle-center">
			<div class="welcome-note">
				<div class="logo"><img src="{{asset('socimo/images/logo.png')}}" alt=""><span>Socimo</span></div>
				<h1>Welcome to Socimo</h1>
				<p>
					Socimo is a one and only plateform for the researcheres, students, and Acdamic people. Every one can join this plateform free and share his ideas and research with seniors and juniours comments and openions. 
				</p>
			</div>
			<div class="bg-image" style="background-image: url({{asset('socimo/images/resources/login-bg.png')}})"></div>
		</div>
	</div>
	<div class="auth-login">
		<div class="verticle-center">
			<div class="signup-form">
				<h4><i class="icofont-lock"></i> Singup</h4>
				<form method="post" class="c-form">
					<div class="row merged-10">
						<div class="col-lg-12"><h4>What type of researcher are you?</h4></div>
						<div class="col-lg-6 col-sm-6 col-md-6">
							<input type="text" placeholder="First Name">
						</div>
						<div class="col-lg-6 col-sm-6 col-md-6">
							<input type="text" placeholder="Last Name">
						</div>
						<div class="col-lg-6 col-sm-6 col-md-6">
							<input type="text" placeholder="Email@">
						</div>
						<div class="col-lg-6 col-sm-6 col-md-6">
							<input type="password" placeholder="Password">
						</div>
						<div class="col-lg-6 col-sm-6 col-md-6">
							<input type="radio" id="student" name="acdamic" value="student">
							<label for="student">Academic Or Student</label>
						</div>
						<div class="col-lg-6 col-sm-6 col-md-6">
							<input type="radio" id="ngo" name="acdamic" value="ngo">
							<label for="ngo">Corporate, Govt, Or NGO Person</label>
						</div>
						<div class="col-lg-6 col-sm-6 col-md-6">
							<input type="radio" id="medical" name="acdamic" value="medical">
							<label for="medical">Medical</label>
						</div>
						<div class="col-lg-6 col-sm-6 col-md-6">
							<input type="radio" id="other" name="acdamic" value="other">
							<label for="other">Not a Rsearcher</label>
						</div>
						<div class="col-lg-6 col-sm-6 col-md-6">
							<input type="text" placeholder="Institute, Company">
						</div>
						<div class="col-lg-6 col-sm-6 col-md-6">
							<input type="text" placeholder="Department">
						</div>
						<div class="col-lg-12">
							<input type="text" placeholder="Your Position">
						</div>
						<div class="col-lg-12">
							<div class="gender">
							  <input type="radio" id="male" name="gender" value="male">
							  <label for="male">Male</label>
							  <input type="radio" id="female" name="gender" value="female">
							  <label for="female">Female</label>
							</div>	
						</div>
						
						<div class="col-lg-12">
							<div class="checkbox">
								<input type="checkbox" id="checkbox" checked>
								<label for="checkbox"><span>I agree the terms of Services and acknowledge the privacy policy</span></label>
							</div>
							<button class="main-btn" type="submit"><i class="icofont-key"></i> Signup</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	
</div>
	
	<script src="{{asset('socimo/js/main.min.js')}}"></script>
	<script src="{{asset('socimo/js/script.js')}}"></script>
	

</body>	
</html>
