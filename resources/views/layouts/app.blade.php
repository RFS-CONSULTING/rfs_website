<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>RFS Consulting</title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="Nous sommes missionnés pour nos études précises, nos conseils avisés, nos expertises et évaluations justes, et nos réalisations réussites.">

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <!-- Favicon and Touch Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png"  href="/assets/favicon/favicon.png">
    <link rel="manifest" href="/assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="/assets/favicon/safari-pinned-tab.svg" color="#6366f1">
    <link rel="shortcut icon" href="/assets/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#080032">
    <meta name="msapplication-config" content="/assets/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- Vendor Styles -->
    <link rel="stylesheet" media="screen" href="/assets/vendor/boxicons/css/boxicons.min.css"/>
    <link rel="stylesheet" media="screen" href="/assets/vendor/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" media="screen" href="/assets/vendor/lightgallery.js/dist/css/lightgallery.min.css"/>
    <!-- Styles -->
    <!-- Main Theme Styles + Bootstrap -->
    <link rel="stylesheet" media="screen" href="/assets/css/theme.min.css">
    
    @livewireStyles
    <!-- Page loading styles -->
    <style>
      .page-loading {
          position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            -webkit-transition: all .4s .2s ease-in-out;
            transition: all .4s .2s ease-in-out;
            background-color: #fff;
            opacity: 0;
            visibility: hidden;
            z-index: 9999;
      }
      .dark-mode .page-loading {
          background-color: #131022;
      }
      .page-loading.active {
          opacity: 1;
          visibility: visible;
      }
      .page-loading-inner {
          position: absolute;
          top: 50%;
          left: 0;
          width: 100%;
          text-align: center;
          -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
          -webkit-transition: opacity .2s ease-in-out;
          transition: opacity .2s ease-in-out;
          opacity: 0;
      }
      .page-loading.active > .page-loading-inner {
          opacity: 1;
      }
      .page-loading-inner > span {
          display: block;
          font-size: 1rem;
          font-weight: normal;
          color: #9397ad;
      }
      .dark-mode .page-loading-inner > span {
          color: #fff;
          opacity: .6;
      }
      .page-spinner {
          display: inline-block;
          width: 2.75rem;
          height: 2.75rem;
          margin-bottom: .75rem;
          vertical-align: text-bottom;
          border: .15em solid #b4b7c9;
          border-right-color: transparent;
          border-radius: 50%;
          -webkit-animation: spinner .75s linear infinite;
          animation: spinner .75s linear infinite;
      }
      .dark-mode .page-spinner {
          border-color: rgba(255,255,255,.4);
          border-right-color: transparent;
      }
      @-webkit-keyframes spinner {
          100% {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
          }
      }
      @keyframes spinner {
          100% {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
          }
      }
    </style>

        <!-- Theme mode -->
        <!-- Scripts -->
    <script>
     
  </script> 

    {{-- <script>
      let mode = window.localStorage.getItem('mode'),
          root = document.getElementsByTagName('html')[0];
      if (mode !== undefined && mode === 'dark') {
          root.classList.add('dark-mode');
      } else {
          root.classList.remove('dark-mode');
      }
    </script> --}}

    <!-- Page loading scripts -->
    <script>
      (function () {
          window.onload = function () {
          const preloader = document.querySelector('.page-loading');
          preloader.classList.remove('active');
          setTimeout(function () {
              preloader.remove();
          }, 1000);
          };
      })();
    </script>
        

      <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
  </head>
  <body class="font-sans antialiased">
    <!-- Body -->
    <!-- Page loading spinner -->
    <div class="page-loading active">
        <div class="page-loading-inner">
            {{-- <div class="page-spinner"></div>
            <span>Loading...</span> --}}
            <img src="/assets/img/logo.svg"  />
        </div>
    </div>


  <!-- Page wrapper for sticky footer -->
  <!-- Wraps everything except footer to push footer to the bottom of the page if there is little content -->
    <main class="page-wrapper">
      <x-jet-banner />

      <div class="min-h-screen bg-gray-100">
        {{-- @livewire('navigation-menu') --}}
        @include('partials.navbar')

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
        <!-- Footer -->
        <section>
          <footer class="footer dark-mode bg-dark  pb-4 pb-lg-5">
            <div class="container pt-lg-4">
              <div class="row pb-5">
                <div class="col-lg-4 col-md-6">
                  <div class="navbar-brand text-dark p-0 me-0 mb-3 mb-lg-4">
                    <img src="/assets/img/logo.png" width="47" alt="Silicon">
                    RFS Consulting
                  </div>
                  <p class="fs-sm text-light opacity-70 pb-lg-3 mb-4">Nous sommes missionnés pour nos études précises, nos conseils avisés, nos expertises et évaluations justes, et nos réalisations réussites.</p>
              
                </div>
                <div class="col-xl-6 col-lg-7 col-md-5 offset-xl-2 offset-md-1 pt-4 pt-md-1 pt-lg-0">
                  <div id="footer-links" class="row">
                    <div class="col-lg-4">
                      <h6 class="mb-2">
                        <a href="#useful-links" class="d-block text-dark dropdown-toggle d-lg-none py-2" data-bs-toggle="collapse">Liens utiles</a>
                      </h6>
                      <div id="useful-links" class="collapse d-lg-block" data-bs-parent="#footer-links">
                        <ul class="nav flex-column pb-lg-1 mb-lg-3">
                          <li class="nav-item"><a href="{{ route('home')}}" class="nav-link d-inline-block px-0 pt-1 pb-2">Accueil</a></li>
                          <li class="nav-item"><a href="{{ route('formation.index')}}" class="nav-link d-inline-block px-0 pt-1 pb-2">Formations</a></li>
                          <li class="nav-item"><a href="{{ route('post.index')}}" class="nav-link d-inline-block px-0 pt-1 pb-2">Blog</a></li>
                          <li class="nav-item"><a href="{{ route('contact')}}" class="nav-link d-inline-block px-0 pt-1 pb-2">Nous contacter</a></li>
                          <li class="nav-item"><a href="{{ route('service.index')}}" class="nav-link d-inline-block px-0 pt-1 pb-2">Services</a></li>

                        </ul>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-3">
                    <h6 class="mb-2">
                      <a href="#social-links" class="d-block text-dark dropdown-toggle d-lg-none py-2" data-bs-toggle="collapse">Socials</a>
                    </h6>
                  </div>
                </div>
              </div>
            </div>
            <p class="fs-xs text-center text-md-start pb-2 pb-lg-0 mb-0">
              <span class="text-light opacity-50">&copy; Tous droits réservés </span>
            </p>
          </div>
          </footer>
        </section>
      <!-- Back to top button -->
      <a href="#top" class="btn-scroll-top" data-scroll>
        <span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span>
        <i class="btn-scroll-top-icon bx bx-chevron-up"></i>
      </a>

        <!-- Vendor Scripts -->
      <script src="/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
      <script src="/assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
      <script src="/assets/vendor/jarallax/dist/jarallax.min.js"></script>
      <script src="/assets/vendor/jarallax/dist/jarallax-element.min.js"></script>
      <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
      <script src="/assets/vendor/lightgallery.js/dist/js/lightgallery.min.js"></script>
      <script src="/assets/vendor/lg-video.js/dist/lg-video.min.js"></script>
      <script src="/assets/vendor/%40lottiefiles/lottie-player/dist/lottie-player.js"></script>
      <script src="/assets/vendor/cleave.js/dist/cleave.min.js"></script>
      <script src="/assets/vendor/parallax-js/dist/parallax.min.js"></script>
      <!-- Main Theme Script -->
      <script src="/assets/js/theme.min.js"></script>
    </div>

    @stack('modals')
    @livewireScripts
  </body>
</html>
