<x-app-layout>
     <!-- Breadcrumb -->
     <section>
      <nav class="container py-4 mb-lg-2 mt-lg-3" aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center justify-content-md-start mb-0">
          <li class="breadcrumb-item">
            <a href="{{ route('home') }}"><i class="bx bx-home-alt fs-lg me-1"></i>Accueil</a>
          </li>
 
          <li class="breadcrumb-item active" aria-current="page">Services</li>
        </ol>
      </nav>
     </section>

      <!-- Page title + Image -->
      @foreach ($services as $service)
      <section class="container mb-5 ">
        <div class="row ">
          <div class=" col-md-8 order-md-2 text-center text-md-start mb-4 ">
            <h2 class="mb-4">{{ $service->name }}</h2>
            <p class=" d-md-none d-lg-block ">{{ $service->description}}</p>
            {{-- <a href="{{ route('contact')}}" class="btn btn-primary shadow-primary ">Nous contacter</a> --}}
          </div>
          <div class="col-md-4 order-md-1">
            <div class="position-relative rounded-3 overflow-hidden">
              <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center zindex-5">
                <a href="{{'https://www.youtube.com/watch?v='.$service->video_youtube}}" class="btn btn-video btn-icon btn-xl stretched-link bg-white" data-bs-toggle="video">
                  <i class="bx bx-play"></i>
                </a>
              </div>
              <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-35"></span>
              <img src="{{'storage/'.$service->image_path}}" alt="{{ $service->name }}">
            </div>
          </div>
        </div>
      </section>
      @endforeach
     


      <!-- Services -->
      <section class="container ">
        <div class="row justify-content-center text-center">
          <div class="col-xl-6 col-lg-7 col-md-8 col-sm-10">
            <h2 class="h1 mb-4">Ce que nous offrons</h2>
            <p class="text-muted mb-3 mb-lg-4">Nous apprécions grandement votre confiance. Nos clients nous choisissent, nous et nos services, car ils savent que nous sommes les meilleurs.</p>
          </div>
        </div>
        

        <!-- Swiper slider -->
        <div class="swiper swiper-nav-onhover mx-n2" data-swiper-options='{
          "slidesPerView": 1,
          "spaceBetween": 8,
          "pagination": {
            "el": ".swiper-pagination",
            "clickable": true
          },
          "breakpoints": {
            "0": {
              "slidesPerView": 1
            },
            "560": {
              "slidesPerView": 2
            },
            "992": {
              "slidesPerView": 3
            }
          }
        }'>
          <div class="swiper-wrapper">

            <!-- Item -->
            <div class="swiper-slide h-auto py-3">
              <div class="card border-0 shadow-sm card-hover card-hover-primary h-100 mx-2">
                <div class="card-body">
                  <h3 class="h6">Evaluations environnementales</h3>
                  <ul class="list-unstyled mb-0 fs-sm">
                    <li class="d-flex  align-items-center mb-2">
                      <i class="bx bx-check-circle fs-sm text-muted me-2"></i>
                      Nous offrons des Conseils, Expertises en matière d'environnement, Assainissement.
                    </li>
                    <li class="d-flex  align-items-center mb-2">
                      <i class="bx bx-check-circle fs-sm text-muted me-2"></i>
                      Nous réalisons des Etudes d'Impact Environnemental et Social, Etudes de danger, Etudes de faisabilité, ...
                    </li>
                    <li class="d-flex align-items-center mb-2">
                      <i class="bx bx-check-circle fs-sm text-muted me-2"></i>
                      Nous élaborons, analysons et évaluons des projets agro-écologiques et agroforestiers
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="swiper-slide h-auto py-3">
              <div class="card border-0 shadow-sm card-hover card-hover-primary h-100 mx-2">
                <div class="card-body">
                  <h3 class="h6">Evaluations environnementales</h3>
                  <ul class="list-unstyled mb-0 fs-sm">
                    <li class="d-flex  align-items-center mb-2">
                      <i class="bx bx-check-circle fs-sm text-muted me-2"></i>
                      Nous offrons des Conseils, Expertises en matière d'environnement, Assainissement.
                    </li>
                    <li class="d-flex  align-items-center mb-2">
                      <i class="bx bx-check-circle fs-sm text-muted me-2"></i>
                      Nous réalisons des Etudes d'Impact Environnemental et Social, Etudes de danger, Etudes de faisabilité, ...
                    </li>
                    <li class="d-flex align-items-center mb-2">
                      <i class="bx bx-check-circle fs-sm text-muted me-2"></i>
                      Nous élaborons, analysons et évaluons des projets agro-écologiques et agroforestiers
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="swiper-slide h-auto py-3">
              <div class="card border-0 shadow-sm card-hover card-hover-primary h-100 mx-2">
                <div class="card-body">
                  <h3 class="h6">Evaluations environnementales</h3>
                  <ul class="list-unstyled mb-0 fs-sm">
                    <li class="d-flex  align-items-center mb-2">
                      <i class="bx bx-check-circle fs-sm text-muted me-2"></i>
                      Nous offrons des Conseils, Expertises en matière d'environnement, Assainissement.
                    </li>
                    <li class="d-flex  align-items-center mb-2">
                      <i class="bx bx-check-circle fs-sm text-muted me-2"></i>
                      Nous réalisons des Etudes d'Impact Environnemental et Social, Etudes de danger, Etudes de faisabilité, ...
                    </li>
                    <li class="d-flex align-items-center mb-2">
                      <i class="bx bx-check-circle fs-sm text-muted me-2"></i>
                      Nous élaborons, analysons et évaluons des projets agro-écologiques et agroforestiers
                    </li>
                  </ul>
                </div>
              </div>
            </div>
           
          </div>

          <!-- Pagination (bullets) -->
          <div class="swiper-pagination position-relative d-lg-none pt-2 pt-sm-3 mt-4"></div>
        </div>
      </section>


      <!-- Customers -->
      <section class="container pb-5 mb-md-4 mb-lg-5">
        <h2 class="h1 text-center pb-4">Nos clients</h2>
        <div class="position-relative pt-md-5 mt-md-n5">
          <div class="position-absolute top-50 start-0 w-100 text-center mt-sm-n5">
            <h3 class="h2 mx-auto mt-n5" style="max-width: 572px;">
              Approuvé par les plus de 695 clients dans plus de <span class="text-primary">27</span> pays differents</h3>
          </div>
          <img src="/assets/img/services/single/map.png" alt="Map">
        </div>
      </section>

</x-app-layout>