     <!-- Navbar -->
      <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page -->
      <div class=" text-center bg-white">
        {{-- <p class="p-1 m-0 ">Masterclass édition 1 de ce dimanche 27 février 2022 de 14h à 18h sur ZOOM,  <a href="{{ route('masterclass')}}">en savoir plus</a></p> --}}

        <p class="p-1 m-0 ">Renforcez vos capacités grâce à nos formations certifiantes.&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="{{ route('formation.index')}}">Voir les formations ></a></p>
      </div>
      <header class="px-md-4 header navbar navbar-expand-lg navbar-light bg-light shadow">
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
     
                {{-- <li class="nav-item">
                  <a href="{{ route('formation.index') }}" class="{{ request()->routeIs('formation.index') ? 'active' : '' }} nav-link">Formations</a>
                </li> --}}
            
                {{-- <li class="nav-item">
                  <a href=" {{ route('conference.index')}} " class="{{ request()->routeIs('conference.index') ? 'active' : '' }} nav-link"">Conferences</a>
                </li> --}}
                <li class="nav-item">
                  <a href="{{ route('service.index')}}" class="{{ request()->routeIs('service.index') ? 'active ' : '' }} nav-link">Services</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('formation.index')}}" class="{{ request()->routeIs('formation.index') ? 'active ' : '' }} nav-link">Formations</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('instructor.index')}}" class="{{ request()->routeIs('instructor.index') ? 'active ' : '' }} nav-link">Formateur</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('masterclass')}}" class="{{ request()->routeIs('masterclass') ? 'active ' : '' }} nav-link">Masterclass</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('post.index') }}" class="{{ request()->routeIs('post.index') ? 'active' : '' }} nav-link">Blog</a>
                </li>
                {{-- <li class="nav-item">
                  <a href="{{ route('about')}}" class="{{ request()->routeIs('about') ? 'active ' : '' }} nav-link">Qui sommes-nous</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('contact')}}" class="{{ request()->routeIs('contact') ? 'active ' : '' }} nav-link">Contactez-nous</a>
                </li>
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">A propos</a>
                  <ul class="dropdown-menu">
                    {{-- <li><a href="{{ route('realisation.index') }}" class="dropdown-item">Réalisations</a></li> --}}
                    <li><a href="{{ route('about') }}" class="dropdown-item">Qui sommes-nous ?</a></li>
                    <li><a href="{{ route('contact')}}" class="dropdown-item">Contactez-nous</a></li>

                  </ul>
                </li>
               
              </ul>
            </div>
          @guest
            <div class="offcanvas-footer border-top">
              <a href="{{ route('login')}}" class="btn btn-primary w-100" >
                <i class="bx bx-user fs-5 lh-1 me-1"></i>
                &nbsp;Connexion 
              </a>
            </div>  
          @endguest
          @auth
          <ul class="navbar-nav  d-lg-none m-2">
            <li class="nav-item d-flex align-items-center border-top pt-2">
              @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                  <img src="{{ Auth::user()->profile_photo_url }}" class="d-block rounded-circle" width="35" alt="{{ Auth::user()->name }}">

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
              <span class="ms-2">{{ Auth::user()->name }}</span>

              {{-- <ul class="dropdown-menu px-4"> --}}
                {{-- <li class="block  py-2 text-xs text-gray-400">
                    {{ __('Manage Account') }}
                </li> --}}
                {{-- <li><a href="{{ route('profile.show') }}" class="dropdown-item">{{ __('Profile') }}</a></li>
               
                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                <li><a href="{{ route('api-tokens.index') }}" class="dropdown-item">{{ __('API Tokens') }}</a></li>
                @endif --}}

                {{-- <li>
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf 
                  <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                  this.closest('form').submit();">{{ __('Log Out') }}</a></li>
                </form>
                <li> --}}
              {{-- </ul> --}}
            </li>
          </ul>
          @endauth
          </div>
          
          @auth
          <ul class="navbar-nav  m-2 d-none d-lg-inline-flex">
            <li class="nav-item dropdown ">
              @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                  <img src="{{ Auth::user()->profile_photo_url }}" class="d-block rounded-circle" width="35" alt="{{ Auth::user()->name }}">

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
                {{-- <li class="block  py-2 text-xs text-gray-400">
                    {{ __('Manage Account') }}
                </li> --}}
                {{-- <li><a href="{{ route('profile.show') }}" class="dropdown-item">{{ __('Profile') }}</a></li> --}}
               
                {{-- @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                <li><a href="{{ route('api-tokens.index') }}" class="dropdown-item">{{ __('API Tokens') }}</a></li>
                @endif --}}

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

          <div class="form-check  pe-lg-1 ms-auto me-4" data-bs-toggle="mode">
          
            <svg onclick="toggleMode()" id="moonIcon"   xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(255, 238, 0);transform: ;msFilter:;"><path d="M6.995 12c0 2.761 2.246 5.007 5.007 5.007s5.007-2.246 5.007-5.007-2.246-5.007-5.007-5.007S6.995 9.239 6.995 12zM11 19h2v3h-2zm0-17h2v3h-2zm-9 9h3v2H2zm17 0h3v2h-3zM5.637 19.778l-1.414-1.414 2.121-2.121 1.414 1.414zM16.242 6.344l2.122-2.122 1.414 1.414-2.122 2.122zM6.344 7.759 4.223 5.637l1.415-1.414 2.12 2.122zm13.434 10.605-1.414 1.414-2.122-2.122 1.414-1.414z"></path></svg>
            <svg onclick="toggleMode()" id="sunIcon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: scaleX(-1);msFilter:progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1);"><path d="M12 11.807A9.002 9.002 0 0 1 10.049 2a9.942 9.942 0 0 0-5.12 2.735c-3.905 3.905-3.905 10.237 0 14.142 3.906 3.906 10.237 3.905 14.143 0a9.946 9.946 0 0 0 2.735-5.119A9.003 9.003 0 0 1 12 11.807z"></path></svg>
           {{-- <label class="form-check-label d-none d-sm-block" for="theme-mode">Light</label> --}}
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

