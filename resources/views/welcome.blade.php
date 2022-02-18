<x-app-layout>

  <x-slot name="title">
    <title>RFS  CONSULTING, bureau d'études environnementales et d'ingénierie</title>
    <meta name="description" content="RFS CONSULTING est un établissement légalement enregistré au CD/KNM/RCCM/21-A-01181, Bureau d’études environnementales et d’ingénierie, mis sur pied pour remonter les défis environnementaux, organisationnels et d’ingénierie qui menacent l’avenir du Congo et d’Afrique. Il s’engage dans la voie du développement durable."/>
    <meta property="og:url"           content="https://rfs-congo.com/" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="RFS CONSULTING, bureau d'études environnementales et d'ingénierie" />
    <meta property="og:description"   content="RFS CONSULTING est un établissement légalement enregistré au CD/KNM/RCCM/21-A-01181, Bureau d’études environnementales et d’ingénierie, mis sur pied pour remonter les défis environnementaux, organisationnels et d’ingénierie qui menacent l’avenir du Congo et d’Afrique. Il s’engage dans la voie du développement durable." />
    <meta property="og:image"         content="/assets/img/logo.png" />
</x-slot>

  <!-- Hero -->
  <section class="container d-none d-lg-block jarallax position-relative d-flex align-items-center py-5 bg-light mb-5 " style="background-image: url(assets/img/landing/hero-bg.png);" data-jarallax data-img-position="0% 100%" data-speed="0.5">
    <div class="position-relative zindex-5 ">
      <div class="row justify-content-md-start justify-content-center pt-0">
        <div class="col-md-8 col-sm-8 order-md-1 order-2 d-flex flex-column justify-content-between mt-4 pt-2 text-md-start text-center">
          <div class="">

            <!-- Text -->
            <h1 class="display-2 mb-md-5 mb-3 pb-3 mt-lg-5">
              <span class="text-gradient-primary">En plus de la science,</span> <span class="text-gradient-primary">maitrisez les outils</span>
            </h1>
            <div class="d-md-flex align-items-md-start">
              <a href="{{ route('contact')}}" class="btn btn-lg btn-primary flex-shrink-0 me-md-4 mb-md-0 mb-sm-4 mb-3">Travailler avec nous</a>
              <p class="d-lg-block  d-none mb-0 ps-md-3">RFS Consulting offre des services d'expertises, ingénierie et renforcement des capacités dans les domaines de Gestion de l' environnement, Géomatique et Ingénierie forestière.</p>
            </div>
          </div>

          <!-- Scroll down btn -->
          <div class="d-inline-flex align-items-center justify-content-center justify-content-md-start position-relative">
            <a href="#services" data-scroll data-scroll-offset="100" class="btn btn-video btn-icon rounded-circle shadow-sm flex-shrink-0 stretched-link me-3">
              <i class="bx bx-chevron-down"></i>
            </a>
            <span class="fs-sm">Découvrir plus</span>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Hero slider + BG parallax -->
  <section class="container d-lg-none jarallax dark-mode bg-dark py-xxl-5 mb-4" data-jarallax data-speed="0.4">
    <span class="position-absolute top-0 start-0 w-100 h-100 bg-gradient-dark-translucent"></span>
    <div class="jarallax-img" style="background-image: url(assets/img/hero/hero-bg.jpeg);"></div>
    <div class="position-relative text-center zindex-5 overflow-hidden pt-4 py-md-5">

      <!-- Slider controls (Prev / next) -->
      <button type="button" id="hero-prev" class="btn btn-prev btn-icon btn-xl bg-transparent shadow-none position-absolute top-50 start-0 translate-middle-y d-none d-md-inline-flex ms-n3 ms-lg-2">
        <i class="bx bx-chevron-left fs-1"></i>
      </button>
      <button type="button" id="hero-next" class="btn btn-next btn-icon btn-xl bg-transparent shadow-none position-absolute top-50 end-0 translate-middle-y d-none d-md-inline-flex me-n3 me-lg-2">
        <i class="bx bx-chevron-right fs-1"></i>
      </button>

      <!-- Slider -->
      <div class="container text-center py-xl-5">
        <div class="row justify-content-center pt-lg-5">
          <div class="col-xl-8 col-lg-9 col-md-10 col-11">
            <div class="swiper pt-5 pb-4 py-md-5" data-swiper-options='{
              "effect": "fade",
              "speed": 500,
              "autoplay": {
                "delay": 5500,
                "disableOnInteraction": false
              },
              "pagination": {
                "el": ".swiper-pagination",
                "clickable": true
              },
              "navigation": {
                "prevEl": "#hero-prev",
                "nextEl": "#hero-next"
              }
            }'>
              <div class="swiper-wrapper">

                <!-- Item -->
                <div class="swiper-slide">
                  <h2 class="display-2 from-start mb-lg-4">Nous sommes professionnels</h2>
                  <div class="from-end">
                    <p class=" text-light opacity-70 pb-2 mb-lg-5">RFS CONSULTING regroupe des ingenieurs et experts dans les domaines de gestion de l' environnement, Géomatique (SIG et Télédetection appliquée), Ingénierie forestière et formations professionnelles. </p>
                  </div>
                  <div class="scale-up delay-1">
                    <a href="{{ route('contact')}}" class="btn btn-primary shadow-primary btn-lg">Contactez-nous</a>
                  </div>

                </div>

                <!-- Item -->
                <div class="swiper-slide">
                  <h2 class="display-2 from-start mb-lg-4">RFS ACADEMIA</h2>
                  <div class="from-end">
                    <p class=" text-light opacity-70 pb-2 mb-lg-5">Renforcement des capacités, encadrement scientifique.</p>
                  </div>
                  <div class="scale-up delay-1">
                    <a href="{{ route('contact')}}" class="btn btn-primary shadow-primary btn-lg">Contactez-nous</a>
                  </div>
                </div>

              </div>

              <!-- Pagination (bullets) -->
              <div class="swiper-pagination position-relative d-md-none pt-2 mt-5"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </section>
    {{-- service - consultance:  notre équipe vous accompagne dans les démarches pour la réussite de vos projets de développement --}}
      <!-- Services -->
  <section class="container bg-secondary pb-md-2 pb-lg-5" id="services">
    <div class="" style="margin-top: -60px; padding-top: 0px;"></div>
    <div class=" pb-4 pt-5">
      <h2 class="h1 text-center text-md-start mb-lg-4 pt-1 pt-md-4">Nos services</h2>
      <div class="row align-items-center  mb-lg-2">
        <div class="col-md-8 text-center text-md-start">
          <p class=" text-muted mb-md-0">
              Assurés par des professionnels nous vous offrons les services ci-après:
              {{-- Avec une équipe pluridisciplinaire des consultants nationaux et internationaux, nous vous offrons les services suivants : --}}
          </p>
        </div>
        {{-- <div class="col-md-4 d-flex justify-content-center justify-content-md-end">
          <a href="{{ route('service.show', 'test')}}" class="btn btn-outline-primary btn-lg">Voir tous nos services</a>
        </div> --}}
      </div>
      <div class="row row-cols-1 row-cols-md-2">
        <!-- Item -->
        @foreach ($services as $service)
        <div class="col py-4  ">
          <span class="card card-hover h-100 border-0 shadow-sm text-decoration-none px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 ms-xl-2">
            <div class="card-body ">
              <h2 class="h4 d-inline-flex align-items-center">
                <a href="{{ route('service.show',$service->id) }}">{{ $service->name}}</a>
                <i class="bx bx-right-arrow-circle text-primary fs-3 ms-2"></i>
              </h2>
              <p class="fs-sm text-body mb-0">{{ $service->description }}</p>
            </div>
          </span>
        </div>
        @endforeach
       

      </div>
    </div>
  </section>

  <!--  banner -->
  {{-- <section class=" bg-primary">
    <div class="container shadow-sm ">
      <div class=" row">
        <div class="   text-center text-md-start py-4 py-lg-5 ">
          <h2 class="h1 text-white">Devenez Ambassadeur de RFS ACADEMIA</h2>
          <p class="mb-4 mb-lg-5 text-white text-justify">Un ambassadeur RFS est toute personne (étudiant ou professionnel), officiellement reconnu par la direction générale de RFS CONSULTING et la Coordination de RFS ACADEMIA, il/elle a pour rôle de parler et présenter les activités de RFS ACADEMIA sur le renforcement des capacités, vendre la bonne image de RFS CONSULTING.</p>
          <a href="{{ route('ambassador')}}" class="btn btn-light text-primary">Postuler maintenant</a>
        </div>
      </div>
    </div>
  </section> --}}

  <!-- Stats -->
  <section class="container bg-secondary pb-5 mb-2 mb-md-4 mb-lg-5">
    <div class="  ">
        <div class="row justify-content-center mb-2 py-md-2 py-lg-4">
            <div class="">
                <h1 class="py-3 text-center text-md-start">Nos chiffres</h1>
                <div class="d-md-flex align-self-stretch">
                    <!-- Item -->
                    @foreach ($statistics as $statistic)
                    <div class="col">
                        <div class="card h-40 m-1  border-0 shadow-sm ">
                            <div class="card-body">
                                <div class="">
                                    <h3 class="display-5 mb-1 text-center">+ {{ $statistic->number}}</h3>
                                    <p class=" text-center mb-0"><span class="fw-semibold">{{ $statistic->title}}</span></p>
                                </div>
                            </div>
                        </div>
                    </div>  
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
    </section>

   <!-- Video showcase -->
   <section class="container py-5 ">
    <h2 class="h1 pb-3 text-center text-md-start  ">Qui sommes-nous ?</h2>
    <div class="row align-items-center pb-2 ">
      <div class="col-xl-4 col-md-5 order-2 order-md-1" data-jarallax-element="20" data-disable-parallax-down="lg">
        <ul class="list-unstyled pb-4 mb-0">
          <li class="d-flex align-items-center  pb-1 mb-2" style="text-align: justify">
            Créée depuis 2018, légalement enregistré au CD/KNM/RCCM/21-A-01181 et id.Nat 01-H5300-N85483Q, RFS CONSULTING offre des services d'expertises en gestion de l'environnement, aménagement du territoire, géomatique, ingénierie forestière et renforcement des capacités.<br/>

            Dotée d'une formation solide et expérience de +8ans dans ces domaines, RFS met à votre disposition une équipe indépendante et pluridisciplinaire pour vous accompagner lors de la conception et mise en oeuvre de vos projets publics et privés.
          </li>
          
        
        </ul>
        {{-- <a href="{{ route('about') }}" class="btn btn-primary w-100 w-md-auto">
          En savoir plus
          <i class="bx bx-right-arrow-alt fs-xl ms-2 me-n1"></i>
        </a> --}}
      </div>
      <div class="col-md-7 offset-xl-1 order-1 order-md-2 pb-2 pb-md-0 mb-4 mb-md-0" data-jarallax-element="-20" data-disable-parallax-down="lg">
        <div class="position-relative rounded-3 overflow-hidden">
          <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center zindex-5">
            <a href="https://www.youtube.com/watch?v=UtV5iQUJ9_I" class="btn btn-video btn-icon btn-xl stretched-link bg-white" data-bs-toggle="video">
              <i class="bx bx-play"></i>
            </a>
          </div>
          <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-35"></span>
          <img src="assets/img/landing/video-cover.jpg" alt="Cover image">
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="bg-secondary">
    <h2 class="h1 pb-3 container text-center text-md-start  pt-5">Ce qu'ils ont dit sur nous</h2>
    <div class="px-2 px-sm-0">
      <div class="swiper" data-swiper-options='{
        "slidesPerView": 1,
        "centeredSlides": true,
        "spaceBetween": 8,
        "loop": true,
        "pagination": {
          "el": ".swiper-pagination",
          "clickable": true
        },
        "breakpoints": {
          "500": {
            "slidesPerView": 2,
            "spaceBetween": 24
          },
          "1000": {
            "slidesPerView": 4,
            "spaceBetween": 24
          },
          "1500": {
            "slidesPerView": 6,
            "spaceBetween": 24
          }
        }
      }'>
        <div class="swiper-wrapper p-0">

          <!-- Item -->
          @foreach ($testimonials as $testimonial)
            <div class="swiper-slide h-auto pt-4">
              <figure class="d-flex flex-column h-100 px-2 px-sm-0 mb-0">
                <div class="card h-100 position-relative border-0 shadow-sm pt-4">
                  <span class="btn btn-icon btn-primary shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4">
                    <i class="bx bxs-quote-left"></i>
                  </span>
                  <blockquote class="card-body pb-3 mb-0">
                    <p class="mb-0">{{ $testimonial->message }}</p>
                  </blockquote>
              
                </div>
                <figcaption class="d-flex align-items-center ps-4 pt-4">
                  <img src="{{ 'storage/'.$testimonial->image_url}}" width="48" class="rounded-circle" alt="{{ $testimonial->witness }}">
                  <div class="ps-3">
                    <h6 class="fs-sm fw-semibold mb-0">{{ $testimonial->witness }}</h6>
                    <span class="fs-xs text-muted">{{ $testimonial->job }}</span>
                  </div>
                </figcaption>
              </figure>
            </div> 
          @endforeach
         

        </div>

        <!-- Pagination (bullets) -->
        <div class="swiper-pagination position-relative pt-1 pt-sm-3 mt-5"></div>
      </div>
    </div>
  </section>

 <!-- Partners -->
 <section class="container py-5 my-md-2 my-lg-4 my-xl-5">
  <div class="row  pt-1 pb-1 mb-2 mb-md-3 mb-lg-4">
    <div class="">
      <h2 class="h1 mb-4 text-center text-md-start">Ils nous ont fait confiance</h2>
      {{-- <p class=" text-muted mb-0 text-center text-md-start">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin volutpat mollis egestas. Nam luctus facilisis ultrices. Pellentesque volutpat ligula est. Mattis fermentum, at nec lacus.</p> --}}
    </div>
  </div>
  <div class="swiper swiper-nav-onhover mx-n2" data-swiper-options='{
    "slidesPerView": 2,
    "spaceBetween": 8,
    "pagination": {
      "el": ".swiper-pagination",
      "clickable": true
    },
    "breakpoints": {
      "500": {
        "slidesPerView": 3
      },
      "600": {
        "slidesPerView": 4
      },
      "768": {
        "slidesPerView": 5
      },
      "850": {
        "slidesPerView": 6
      },
      "1000": {
        "slidesPerView": 7
      },
      "1200": {
        "slidesPerView": 8
      }
    }
  }'>
    <div class="swiper-wrapper">

      <!-- Item -->
      @foreach ($sponsors as $sponsor)
      <div class="swiper-slide py-3">
        <a href="#" class="card card-hover border-0 shadow-sm py-3 mx-2">
          <div class="card-body">
            <img src="{{ 'storage/'.$sponsor->logo}}" class="d-block mx-auto" alt="{{ $sponsor->name}}">
          </div>
        </a>
      </div>
      @endforeach
      

    </div>

    <!-- Pagination (bullets) -->
    <div class="swiper-pagination position-relative pt-3 mt-4"></div>
  </div>
  {{-- <div class="text-center my-3 mt-xl-n2">
    <a href="#" class="btn btn-primary">Voir tous nos partenaires</a>
  </div> --}}
</section>


  <!-- Subscription CTA -->
  <section class="container bg-secondary">
    <div class=" rounded-3 py-5 px-3 px-sm-4 px-lg-5 px-xl-0">
      <div class="row align-items-center py-lg-4">
        <div class="col-xl-5 col-md-6 offset-xl-1 mb-4 mb-md-0">
          <div class="d-flex align-items-center">
            <img src="assets/img/landing/notification-icon.svg" width="78" alt="Bell icon">
            <div class="ps-3 ms-sm-3">
              <h2 class="h4 mb-0">Abonnez-vous à notre newsletter pour rester informé des dernières mises à jour</h2>
            </div>
          </div>
        </div>
        <div class="col-xl-5 col-md-6">
          <div class="ps-lg-5 ms-xl-2">
            <form class="input-group input-group-lg needs-validation" novalidate>
              <input type="email" id="subscr-email" class="form-control rounded-start ps-5" placeholder="Votre adresse e-mail" required>
              <i class="bx bx-envelope fs-xl text-muted position-absolute top-50 start-0 translate-middle-y ms-3 zindex-5"></i>
              <div class="invalid-tooltip position-absolute top-100 start-0">Veuillez fournir une adresse email valide.</div>
              <button type="submit" class="btn btn-primary px-sm-4">S'abonner</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>



</x-app-layout>



 

     
