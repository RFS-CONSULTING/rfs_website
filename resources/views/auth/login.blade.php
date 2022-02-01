<x-app-layout>
    {{-- <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card> --}}
    <!-- Sign in form -->
    <div class="container d-flex flex-wrap justify-content-center  ">
        <div class="w-100 align-self-end pt-1 pt-md-4 pb-4" style="max-width: 526px;">
          <h1 class="text-center text-xl-start">Connectez-vous</h1>
          <p class="text-center text-xl-start pb-3 mb-3">Vous n'avez pas encore de compte? <a href="{{ route('register')}}">Inscrivez-vous ici.</a></p>
          <x-jet-validation-errors class="mb-4 text-danger" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-primary">
                    {{ session('status') }}
                </div>
            @endif

          <form class="needs-validation mb-2"  method="POST" action="{{ route('login') }}">
            @csrf
            <div class="position-relative mb-4">
              <label for="email" class="form-label fs-base">Email</label>
              <input type="email" id="email" class="form-control form-control-lg" name="email" :value="old('email')" required>
              <div class="invalid-feedback position-absolute start-0 top-100">Please enter a valid email address!</div>
            </div>
            <div class="mb-4">
              <label for="password" class="form-label fs-base">{{__('Password')}}</label>
              <div class="password-toggle">
                <input type="password" id="password"  name="password" class="form-control form-control-lg" required>
                <label class="password-toggle-btn" aria-label="Show/hide password">
                  <input class="password-toggle-check" name="remember" type="checkbox">
                  <span class="password-toggle-indicator"></span>
                </label>
                <div class="invalid-feedback position-absolute start-0 top-100">Please enter your password!</div>
              </div>
            </div>
            <div class="mb-4">
              <div class="form-check">
                <input type="checkbox" id="remember" class="form-check-input">
                <label for="remember" class="form-check-label fs-base">{{ __('Remember me') }}</label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary shadow-primary btn-lg w-100"> {{ __('Log in') }}
            </button>
          </form>
          <a href="#" class="btn btn-link btn-lg w-100"> {{ __('Forgot your password?') }}</a>
          <hr class="my-4">
          <h6 class="text-center mb-4">Ou connectez-vous avec votre réseau social</h6>
          <div class="row row-cols-1 row-cols-sm-2">
            <div class="col mb-3">
              <a href="#" class="btn btn-icon btn-secondary btn-google btn-lg w-100">
                <i class="bx bxl-google fs-xl me-2"></i>
                Google
              </a>
            </div>
            <div class="col mb-3">
              <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-lg w-100">
                <i class="bx bxl-facebook fs-xl me-2"></i>
                Facebook
              </a>
            </div>
          </div>
        </div>
      </div>
</x-app-layout>
