     <!-- Navbar -->
      <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page -->
      <header class="px-md-4 header navbar navbar-expand-lg navbar-light bg-light navbar-sticky">
        <div class="container px-3">
          <a href="{{ route('home')}}" class="navbar-brand pe-5">
            <img src="/assets/img/logo.png" width="50" alt="Logo RFS Consulting">
            
          </a>
          <div id="navbarNav" class="offcanvas offcanvas-end">
            <div class="offcanvas-header border-bottom">
              <h5 class="offcanvas-title">Menu</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
               
                <li class="nav-item">
                  <a href="{{ route('home')}}" class="{{ request()->routeIs('home') ? 'active ' : '' }} nav-link">Accueil</a>
                </li>
     
                <li class="nav-item">
                  <a href="{{ route('formation.index') }}" class="{{ request()->routeIs('formation.index') ? 'active' : '' }} nav-link">Formations</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('post.index') }}" class="{{ request()->routeIs('post.index') ? 'active' : '' }} nav-link">Blog</a>
                </li>
            
                <li class="nav-item">
                  <a href="#" class="nav-link">Conferences</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Formateur</a>
                </li>
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">A propos</a>
                  <ul class="dropdown-menu">
                    <li><a href="#" class="dropdown-item">Qui sommes-nous ?</a></li>
                    <li><a href="#" class="dropdown-item">Notre équipe</a></li>
                    <li><a href="#" class="dropdown-item">Nos réalisations</a></li>
                    <li><a href="{{ route('contact')}}" class="dropdown-item">Contactez-nous</a></li>

                  </ul>
                </li>
               
              </ul>
            </div>
            <div class="offcanvas-footer border-top">
              <a href="{{ route('login')}}" class="btn btn-primary w-100" >
                <i class="bx bx-user fs-5 lh-1 me-1"></i>
                &nbsp;Connexion
              </a>
            </div>      
          </div>

          @auth
          <ul class="navbar-nav  m-2">
            <li class="nav-item dropdown ">
              @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                  <img src="{{ Auth::user()->profile_photo_url }}" class="d-block rounded-circle" width="40" alt="{{ Auth::user()->name }}">

                  {{-- <button class="flex text-sm border-2 border-transparent rounded-circle focus:outline-none focus:border-gray-300 transition">
                      <img class="h-8 w-8 rounded-circle object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="" />
                  </button> --}}
              @else
                  <span class="inline-flex rounded-md">
                      <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                          {{ Auth::user()->name }}

                          <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                          </svg>
                      </button>
                  </span>
              @endif
              <ul class="dropdown-menu px-4">
                <div class="block  py-2 text-xs text-gray-400">
                    {{ __('Manage Account') }}
                </div>
                <li><a href="{{ route('profile.show') }}" class="dropdown-item">{{ __('Profile') }}</a></li>
               
                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                <li><a href="{{ route('api-tokens.index') }}" class="dropdown-item">{{ __('API Tokens') }}</a></li>
                @endif

                <div class="border-t border-gray-100"></div>
                <li>
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf 
                  <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                  this.closest('form').submit();">{{ __('Log Out') }}</a></li>
                </form>
                <li>
              </ul>
            </li>
          </ul>
           
          @endauth

          <div class="form-check form-switch mode-switch pe-lg-1 ms-auto me-4" data-bs-toggle="mode">
            <input type="checkbox" class="form-check-input" id="theme-mode">
            {{-- <label class="form-check-label d-none d-sm-block" for="theme-mode">Light</label> --}}
            <label class="form-check-label d-none d-sm-block" for="theme-mode">Mode nuit</label>
          </div>
          <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          @guest
            <a href="{{ route('login')}}" class="btn btn-primary btn-sm fs-sm rounded d-none d-lg-inline-flex">
              <i class="bx bx-user fs-5 lh-1 me-1"></i>
              &nbsp;Connexion
            </a>
          @endguest

          
          
        
          
        </div>
    </header>
