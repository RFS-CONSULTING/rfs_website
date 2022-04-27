<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- SEO Meta Tags -->
    @if (isset($title))
        {{ $title }}
    @endif
    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    @notifyCss

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
    <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-CFTKVHJYFW"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-CFTKVHJYFW');
  </script>

  
  <!-- Scripts -->

    @livewireStyles

    <!-- Page loading styles -->
    <style>
      .page-loading {
          position: fixed;

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
      #moonIcon{
        display: none;
      }

      #sunIcon{
        display: none;
      }
    </style>

        <!-- Theme mode -->
        <!-- Scripts -->
    <script>

  </script>

    <script>
      let mode = window.localStorage.getItem('mode'),
          root = document.getElementsByTagName('html')[0];
      if (mode !== undefined && mode === 'dark') {
          root.classList.add('dark-mode');
      } else {
          root.classList.remove('dark-mode');
      }


    </script>

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


  </head>
  <body class="font-sans antialiased">


    <!-- Body -->
    <!-- Page loading spinner -->
    {{-- <div class="page-loading active">
        <div class="page-loading-inner">
            <div class="page-spinner"></div>
            <span>Loading...</span>
            <img src="/assets/img/logo.svg"  />
        </div>
    </div> --}}


  <!-- Page wrapper for sticky footer -->
  <!-- Wraps everything except footer to push footer to the bottom of the page if there is little content -->
    <main class="page-wrapper">

      <div class="min-h-screen bg-gray-100">
        {{-- @livewire('navigation-menu') --}}
        @include('partials.navbar')
    <!-- Newsletter Popup Start -->
    <div id="max-popup" class="max-popup-section section " >
        <div class="max-popup-dialog animated fadeInUp">
            <button id="max-popup-close" class="max-popup-close">Fermer</button>
            <div class="max-popup-dialog-inner">
                <div class="row">

                    <div class="col-12 align-self-center">
                        <div class="">
                             <h3 class=" text-white">Newsletter</h3>

                            <h6 class="sub-title text-white">Vous souhaitez être informé des nouveaux tutoriels ? Être au courant des évènements en lien avec les SIG, télédétection, environnement ? Bénéficier des offres spéciales de formations certifiantes et Masterclass ?</h6>
                            <div class="freecourse-download-form">
                                {{-- @livewire('pending-book') --}}
                                <form method="POST" action="{{ route('newsletter.store') }}" class="input-group input-group-lg needs-validation" novalidate>
                                 @csrf
                                  <input type="email" id="subscr-email" name="email" class="form-control rounded-start ps-5" placeholder="Votre adresse e-mail" required>
                                  <i class="bx bx-envelope fs-xl text-muted position-absolute top-50 start-0 translate-middle-y ms-3 zindex-5"></i>
                                  <div class="invalid-tooltip position-absolute top-100 start-0">Veuillez fournir une adresse email valide.</div>
                                  <button type="submit" class="btn btn-primary px-sm-4" id="newsletter">S'abonner</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Newsletter Popup End -->

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
        <!-- Footer -->
        <section>
          <footer class="footer dark-mode bg-dark  pb-4 pb-lg-5">
            <div class="container pt-lg-4">
              <div class="row pb-5">
                <div class=" col-md-4">
                  <div class="navbar-brand text-dark p-0 me-0 mb-3 mb-lg-4">
                    <img src="/assets/img/logo.png" width="47" alt="Silicon">
                    RFS Consulting
                  </div>

                  <p class=" text-justify text-light opacity-70 pb-lg-3 mb-4">Nous sommes missionnés pour nos études précises, nos conseils avisés, nos expertises et évaluations justes, et nos réalisations réussites.</p>
                  <div>
                    <a href="https://twitter.com/rfs_consulting" target="_blank" class="me-2" ><i class="bx bxl-twitter bx-sm"></i></a>
                    <a href="https://fb.me/RFS.CONSULTING" target="_blank" class="me-2" ><i class="bx bxl-facebook bx-sm"></i></a>
                    <a href="https://www.instagram.com/rfs_consulting/" target="_blank" class="me-2" ><i class="bx bxl-instagram bx-sm"></i></a>
                    <a href="https://www.youtube.com/c/RFSACADEMIA" target="_blank" class="me-2" ><i class="bx bxl-youtube bx-sm"></i></a>
                    <a href="https://www.linkedin.com/in/rfs-consulting-6671671a7/" target="_blank" class="me-2"    ><i class="bx bxl-linkedin bx-sm"></i></a>

                  </div>

                </div>
                <div class=" col-md-8 ">
                  <div id="footer-links" class="row">
                    <div class="col-md-6">
                      <h6 class="mb-2">
                        <a href="#useful-links" class="d-block text-dark dropdown-toggle d-lg-none py-2 text-sm" data-bs-toggle="collapse">Liens utiles</a>
                      </h6>
                      <div id="useful-links" class="collapse d-lg-block text-sm" data-bs-parent="#footer-links">
                        <ul class="nav flex-column pb-lg-1 mb-lg-3">
                          <li class="nav-item"><a href="{{ route('home')}}" class="nav-link d-inline-block px-0 pt-1 pb-2">Accueil</a></li>
                          {{-- <li class="nav-item"><a href="{{ route('formation.index')}}" class="nav-link d-inline-block px-0 pt-1 pb-2">Formations</a></li> --}}
                          {{-- <li class="nav-item"><a href="{{ route('post.index')}}" class="nav-link d-inline-block px-0 pt-1 pb-2">Blog</a></li> --}}
                          <li class="nav-item"><a href="{{ route('contact')}}" class="nav-link d-inline-block px-0 pt-1 pb-2">Nous contacter</a></li>
                          <li class="nav-item"><a href="{{ route('service.index')}}" class="nav-link d-inline-block px-0 pt-1 pb-2">Services</a></li>
                          <li class="nav-item"><a href="{{ route('ambassador')}}" class="nav-link d-inline-block px-0 pt-1 pb-2">Devenir ambassadeur</a></li>
                          <li class="nav-item"><a href="{{ route('jobs.index')}}" class="nav-link d-inline-block px-0 pt-1 pb-2">Emplois</a></li>
                          <li class="nav-item"><a href="{{ route('about')}}" class="nav-link d-inline-block px-0 pt-1 pb-2">A propos de nous</a></li>

                        </ul>
                    </div>
                  </div>
                  <div class="col-md-6 ">
                    <h6 class="mb-2">
                      <a href="#address" class="d-block text-dark dropdown-toggle d-lg-none py-2 text-sm" data-bs-toggle="collapse">Nos contacts</a>
                      <p id="address"class="collapse d-lg-block  text-light pb-lg-3 mb-4 text-sm">
                        364, avenue MASANO, 1ere Rue Limete<br>
                        Réf. Derrière Dépôt Kin Marché<br>
                        Limete / Industriel ( Funa )<br>
                        Republique Democratique du Congo<br>
                        <strong>Phone:</strong><a href="tel:+243 817663799"> +243 817663799</a><br>
                        <strong>Email:</strong> <a href="mailto:info@rfs-congo.com">info@rfs-congo.com</a><br>
                      </p>

                    </h6>
                  </div>
                </div>
              </div>
            </div>
            <p class="fs-xs text-center pb-2 pb-lg-0 mb-0">
              <span class="text-light opacity-50">RFS Consulting 2022 &copy; Tous droits réservés </span>
            </p>
          </div>
          </footer>
        </section>
        @include('notify::components.notify')

        <!-- Javascript -->
        @notifyJs


      <!-- Back to top button -->
      {{-- <a href="#top" class="btn-scroll-top" data-scroll>
        <span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span>
        <i class="btn-scroll-top-icon bx bx-chevron-up"></i>
      </a> --}}
      <!-- Main Theme Script -->

      <script src="https://www.google.com/recaptcha/api.js"></script>

        <!-- Vendor Scripts -->
    <script async src="/assets/js/jquery.js"></script>

      <script src="/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
      {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script> --}}
      {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script> --}}
      <script src="/assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
      <script src="/assets/vendor/jarallax/dist/jarallax.min.js"></script>
      <script src="/assets/vendor/jarallax/dist/jarallax-element.min.js"></script>
      <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
      <script src="/assets/vendor/lightgallery.js/dist/js/lightgallery.min.js"></script>
      <script src="/assets/vendor/lg-video.js/dist/lg-video.min.js"></script>
      <script src="/assets/vendor/%40lottiefiles/lottie-player/dist/lottie-player.js"></script>
      <script src="/assets/vendor/cleave.js/dist/cleave.min.js"></script>
      <script src="/assets/vendor/parallax-js/dist/parallax.min.js"></script>

      <script src="/assets/js/theme.min.js"></script>

      <!-- Messenger Plugin de discussion Code -->


      <div id="fb-root"></div>

    <!-- Your Plugin de discussion code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "103681187982106");
    chatbox.setAttribute("attribution", "biz_inbox");

    window.fbAsyncInit = function() {
        FB.init({
        xfbml            : true,
        version          : 'v12.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/fr_FR/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>
    </div>

    <div id="fb-root"></div>


    @stack('modals')
    @livewireScripts
  </body>
</html>
