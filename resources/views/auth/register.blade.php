{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

		<!-- prénom -->
		<div>
            <x-input-label for="prenom" :value="__('prenom')" />
            <x-text-input id="prenom" class="block mt-1 w-full" type="text" name="prenom" :value="old('prenom')" required autofocus autocomplete="prenom" />
            <x-input-error :messages="$errors->get('prenom')" class="mt-2" />
        </div>

		<!-- age -->
		<div>
            <x-input-label for="age" :value="__('age')" />
            <x-text-input id="age" class="block mt-1 w-full" type="number" name="age" :value="old('age')" required autofocus autocomplete="age" />
            <x-input-error :messages="$errors->get('age')" class="mt-2" />
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

		<!-- niveau -->
		<div>
            <x-input-label for="niveau_étude" :value="__('niveau_étude')" />
            <x-text-input id="niveau_étude" class="block mt-1 w-full" type="number" name="niveau_étude" :value="old('niveau_étude')" required autofocus autocomplete="niveau_etude" />
            <x-input-error :messages="$errors->get('niveau_étude')" class="mt-2" />
        </div>

        <!-- université -->
        <div>
            <x-input-label for="université" :value="__('université')" />
            <x-text-input id="université" class="block mt-1 w-full" type="text" name="université" :value="old('université')" required autofocus autocomplete="universite" />
            <x-input-error :messages="$errors->get('université')" class="mt-2" />
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
				<div class="logo"><img src="{{asset('socimo/images/logo.png')}}" alt=""><span>Boastud</span></div>
				<h1>Bienvenue à Boastud</h1>
				<p>
					Boastud est le reseau social pour les étudiants, et tous les professionels de l'académie. Faites partie de la grande equipe, publier,commenter et partager.
				</p>
			</div>
			<div class="bg-image" style="background-image: url({{asset('socimo/images/resources/login-bg.png')}})"></div>
		</div>
	</div>
	<div class="auth-login">
		<div class="verticle-center">
			<div class="signup-form">
				<h4><i class="icofont-lock"></i> Inscription</h4>
				<form method="POST" action="{{ route('register') }}" class="c-form">
				@csrf
					<div class="row merged-10">
						<div class="col-lg-12"><h4>Parlez nous un peu de vous !</h4></div>
						<div class="col-lg-6 col-sm-6 col-md-6">
							<input type="text" name="name" placeholder="Votre nom">
						</div>
						<div class="col-lg-6 col-sm-6 col-md-6">
							<input type="text" name="prenom" placeholder="Votre prénom">
						</div>
						<div class="col-lg-6 col-sm-6 col-md-6">
							<input type="number" name="age" placeholder="Votre âge">
						</div>
						<div class="col-lg-6 col-sm-6 col-md-6">
							<input type="text" name="email" placeholder="Email@">
						</div>
						<div class="col-lg-6 col-sm-6 col-md-6">
							<input type="password" id="password" placeholder="Mot de passe">
						</div>
						
						<div class="col-lg-6 col-sm-6 col-md-6">
							<input type="number" name="niveau_etude" placeholder="Niveau d'etude actuelle">
						</div>
						<div class="col-lg-6 col-sm-6 col-md-6">
							<input type="text" name="universite" placeholder="Votre université">
						</div>
						
						<div class="col-lg-12">
							<div class="checkbox">
								<input type="checkbox" id="checkbox" checked>
								<label for="checkbox"><span>J'accepte les conditions des services et je reconnais la politique de confidentialité</span></label>
							</div>
							<button class="main-btn" type="submit"><i class="icofont-key"></i> Je m'inscris</button>
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
