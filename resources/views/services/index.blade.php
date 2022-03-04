<x-app-layout>

  <x-slot name="title">
    <title>Nos services -- RFS CONSULTING</title>
    <meta name="description" content="Notre équipe de consultants nationaux et internationaux vous accompagne dans les démarches pour la réussite de vos projets"/>
    <meta property="og:url"           content="https://rfs-congo.com/services" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Nos services -- RFS CONSULTING" />
    <meta property="og:description"   content="Notre équipe de consultants nationaux et internationaux vous accompagne dans les démarches pour la réussite de vos projets" />
    <meta property="og:image"         content="/assets/img/hero/hero-bg.jpeg" />
  </x-slot>
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

       <!-- Services -->
       <section class="container ">
        <div class="row justify-content-center text-center">
          <div class="col-xl-6 col-lg-7 col-md-8 col-sm-10">
            <h2 class="h1 mb-4 text-center">Ce que nous offrons</h2>
            <p class="text-muted mb-3 mb-lg-4">Nous apprécions grandement votre confiance. Nos clients nous choisissent, nous et nos services, car ils savent que nous sommes professionnels.</p>
          </div>
        </div>
        {{-- <div class="row justify-content-center text-center">
          @foreach ($services as $service)
            <div class=" h-auto mt-1  col-md-6 order-md-2 text-center text-md-start">
              <div class="card card card-hover h-100 border-0 shadow-sm text-decoration-none">
                <div class="card-body">
                  <h2 class="mb-4">{{ $service->name }}</h2>
                  <x-markdown>{{ $service->description}}</x-markdown>
                </div>
              </div>
            </div>
          @endforeach
        </div> --}}
        

        <!-- Swiper slider -->
        <div class="swiper swiper-nav-onhover mx-n2" data-swiper-options='{
          "slidesPerView": 1,
          "spaceBetween": 8,
          "autoplay":{"delay":2500,"delayOnInteraction":false},
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
                  <h3 class="h6">Apport des technologies géo-spatiales</h3>
                  <ul class="list-unstyled mb-0 fs-sm">
                    <li class="d-flex  align-items-center mb-2">
                      <i class="bx bx-check-circle fs-sm text-muted me-2"></i>
                      Conception et réalisation des projets SIG (cartographie)
                    </li>
                    <li class="d-flex  align-items-center mb-2">
                      <i class="bx bx-check-circle fs-sm text-muted me-2"></i>
                      Etudes et analyses des cartes géologiques, topographiques et géographiques
                    </li>
                    <li class="d-flex align-items-center mb-2">
                      <i class="bx bx-check-circle fs-sm text-muted me-2"></i>
                      Accompagnement des PME, ONGs et particuliers dans les projets SIG, Collectes et analyses des données sur terrain
                    </li>
                    <li class="d-flex align-items-center mb-2">
                      <i class="bx bx-check-circle fs-sm text-muted me-2"></i>
                      Acquisition, analyses et traitement des images satellites
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="swiper-slide h-auto py-3">
              <div class="card border-0 shadow-sm card-hover card-hover-primary h-100 mx-2">
                <div class="card-body">
                  <h3 class="h6">Expertises en aménagement urbain et rural</h3>
                  <ul class="list-unstyled mb-0 fs-sm">
                    <li class="d-flex  align-items-center mb-2">
                      <i class="bx bx-check-circle fs-sm text-muted me-2"></i>
                      Nous réalisons des études, analyses et conceptions des plans d'aménagement urbains et rural
                    </li>
                    <li class="d-flex  align-items-center mb-2">
                      <i class="bx bx-check-circle fs-sm text-muted me-2"></i>
                      Nous offrons des expertises en aménagement du territoire
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="swiper-slide h-auto py-3">
              <div class="card border-0 shadow-sm card-hover card-hover-primary h-100 mx-2">
                <div class="card-body">
                  <h3 class="h6">Expertises en ingénierie forestière</h3>
                  <ul class="list-unstyled mb-0 fs-sm">
                    <li class="d-flex  align-items-center mb-2">
                      <i class="bx bx-check-circle fs-sm text-muted me-2"></i>
                      Inventaire forestier
                    </li>
                    <li class="d-flex  align-items-center mb-2">
                      <i class="bx bx-check-circle fs-sm text-muted me-2"></i>
                      Etudes de faisabilité des projets agro-écologique, apicoles et agro-forestiers
                    </li>
                  </ul>
                </div>
              </div>
            </div>
           
            <div class="swiper-slide h-auto py-3">
              <div class="card border-0 shadow-sm card-hover card-hover-primary h-100 mx-2">
                <div class="card-body">
                  <h3 class="h6">{{ $services[1]->name }}</h3>
                  <div>
                    <x-markdown>
                      {{ $services[1]->description }}
                    </x-markdown>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <!-- Pagination (bullets) -->
          <div class="swiper-pagination position-relative  pt-2 pt-sm-3 mt-4"></div>
        </div>
      </section>


      <!-- Page title + Image -->
      <section class="container mb-5 ">
        <div class="row ">
          {{-- @foreach ($services as $service) --}}
        
          <!-- Item -->
          <div class=" h-auto  col-md-6 mt-1 order-md-2 text-center text-md-start">
            <div class="card card card-hover h-100 border-0 shadow-sm text-decoration-none">
              <div class="card-body">
                <h4 class="mb-4">Entrez en contact avec nous pour pouvoir profiter de nos offres et services, n'hésitez pas!</h4>
                <a href="{{ route('devis.index')}}" class="btn btn-lg btn-primary flex-shrink-0 me-md-4 mb-md-0 mb-sm-4 mb-3">Démander un dévis</a>
                <a href="/assets/pdf/depliant-rfs.pdf" download class="btn btn-lg btn-primary flex-shrink-0 me-md-4 mb-md-0 mb-sm-4 mb-3">Télécharger le dépliant</a>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class=" h-auto  col-md-6 mt-1 order-md-2 text-center text-md-start">
            <div class="card card card-hover h-100 border-0 shadow-sm text-decoration-none">
              <div class="card-body">
                <h4 class="mb-4">Renforcez vos capacités grâce à nos formations certifiantes.</h4>
                <a href="{{ route('formation.index')}}" class="btn btn-lg btn-primary flex-shrink-0 me-md-4 mb-md-0 mb-sm-4 mb-3">Voir nos formations</a>
                <a href="{{ route('instructor.index')}}" class="btn btn-lg btn-primary flex-shrink-0 me-md-4 mb-md-0 mb-sm-4 mb-3">Devenir formateur</a>
              </div>
            </div>
          </div>

          {{-- @endforeach --}}
          

          {{-- @isset($services)
              @if (count($services) > 0)
              <div class="col-md-4 order-md-1 h-auto">
                <div class="position-relative rounded-3 overflow-hidden">
                  <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center zindex-5">
                    <a href="{{'https://www.youtube.com/watch?v='.$services[0]->video_youtube}}" class="btn btn-video btn-icon btn-xl stretched-link bg-white" data-bs-toggle="video">
                      <i class="bx bx-play"></i>
                    </a>
                  </div>
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-35"></span>
                  <img src="{{'storage/'.$services[0]->image_path}}" alt="{{ $services[0]->name }}">
                </div>
              </div>
            </div>
            @endif
          @endisset --}}

      </section>
     


    

      <!-- Customers -->
      {{-- <section class="container pb-5 mb-md-4 mb-lg-5">
        <h2 class="h1 text-center pb-4">Nos clients</h2>
        <div class="position-relative pt-md-5 mt-md-n5">
          <div class="position-absolute top-50 start-0 w-100 text-center mt-sm-n5">
            <h3 class="h2 mx-auto mt-n5" style="max-width: 572px;">
              Approuvé par les plus de 695 clients dans plus de <span class="text-primary">27</span> pays differents</h3>
          </div>
          <img src="/assets/img/services/single/map.png" alt="Map">
        </div>
      </section> --}}

</x-app-layout>