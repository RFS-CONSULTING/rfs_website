<x-app-layout>
  


    <!-- Sign up form -->
    <div class="container d-flex flex-wrap justify-content-center pt-5">
        <div class="w-100 align-self-end pt-1 pt-md-4 pb-4" style="max-width: 526px;">
          <h1 class="text-center text-xl-start">Créer un compte</h1>
          <p class="text-center text-xl-start pb-3 mb-3">Vous avez déjà un compte? <a href="{{ route('login')}}">Se connecter ici.</a></p>
          
        <x-jet-validation-errors class="mb-4 text-danger"  />
          
          <form class="needs-validation" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="row">
              <div class="col-sm-6">
                <div class="position-relative mb-4">
                  <label for="name" class="form-label fs-base">{{ __('Name') }}</label>
                  <input type="text" id="name" class="form-control form-control-lg " name="name" :value="old('name')" required>
                  <div class="invalid-feedback position-absolute start-0 top-100">Please enter your name!</div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="position-relative mb-4">
                  <label for="email" class="form-label fs-base">{{ __('Email') }}</label>
                  <input type="email" id="email" class="form-control form-control-lg" name="email" :value="old('email')" required>
                  <div class="invalid-feedback position-absolute start-0 top-100">Please enter a valid email address!</div>
                </div>
              </div>
              <div class="col-12 mb-4">
                <label for="password" class="form-label fs-base">{{ __('Password') }}</label>
                <div class="password-toggle">
                  <input type="password" id="password" class="form-control form-control-lg" name="password" required>
                  <label class="password-toggle-btn" aria-label="Show/hide password">
                    <input class="password-toggle-check" type="checkbox">
                    <span class="password-toggle-indicator"></span>
                  </label>
                  <div class="invalid-feedback position-absolute start-0 top-100">Please enter a password!</div>
                </div>
              </div>
              <div class="col-12 mb-4">
                <label for="password-confirm" class="form-label fs-base">{{ __('Confirm Password') }}</label>
                <div class="password-toggle">
                  <input type="password" id="password-confirm" class="form-control form-control-lg"  name="password_confirmation" required>
                  <label class="password-toggle-btn" aria-label="Show/hide password">
                    <input class="password-toggle-check" type="checkbox">
                    <span class="password-toggle-indicator"></span>
                  </label>
                  <div class="invalid-feedback position-absolute start-0 top-100">Please enter a password!</div>
                </div>
              </div>
            </div>
            <div class="mb-4">
                <div class="form-check">
                  <input type="checkbox" id="terms" name="terms" class="form-check-input" required>
                  <label for="terms" class="form-check-label fs-base">
                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                ]) !!}</label>
                </div>
              </div>
            <button type="submit" class="btn btn-primary shadow-primary btn-lg w-100">{{__('Sign up')}}</button>
          </form>
          <hr class="my-4">
          <h6 class="text-center mb-4">Ou inscrivez-vous avec votre réseau social</h6>
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
