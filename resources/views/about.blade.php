<x-app-layout>

  <x-slot name="title">
    <title>A propos -- RFS CONSULTING</title>
    <meta name="description" content="Nous sommes missionnés pour nos études précises, nos conseils avisés, nos expertises et évaluations justes, et nos réalisations réussites."/>
    <meta property="og:url"           content="https://rfs-congo.com/about" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="A propos -- RFS CONSULTING" />
    <meta property="og:description"   content="Nous sommes missionnés pour nos études précises, nos conseils avisés, nos expertises et évaluations justes, et nos réalisations réussites." />
    <meta property="og:image"         content="/assets/img/hero/hero-bg.jpeg" />
  </x-slot>

    <!-- Hero image -->
    <div class="jarallax d-none d-md-block" data-jarallax data-speed="0.4">
        <span class="position-absolute top-0 start-0 w-100 h-100 bg-gradient-primary-translucent"></span>
        <div class="jarallax-img" style="background-image: url(assets/img/about/cover01.jpeg);"></div>
        <div class="d-none d-xxl-block" style="height: 700px;"></div>
        <div class="d-none d-md-block d-xxl-none" style="height: 550px;"></div>
    </div>


    <!-- Breadcrumb -->
    <section class="container">
        <nav class="py-4 mb-2 my-lg-3" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                <a href=" {{ route('home') }}"><i class="bx bx-home-alt fs-lg me-1"></i>Accueil</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">A propos de nous</li>
            </ol>
        </nav>
    </section>


    <!-- About company -->
    {{-- <section class="container pb-5 mb-md-2 mb-lg-4">
      <h1 class="border-bottom pb-4 text-center text-md-start">Qui sommes-nous ?</h1>
      <div class="row pt-2 pt-md-3">
          <div class="col-md-6">
          <p class=" pe-lg-4 mb-1 mb-lg-4">
              Créée depuis 2018, légalement enregistré au CD/KNM/RCCM/21-A-01181, RFS CONSULTING offre des services d'études, expertises et renforcement des capacités dans les domaines de gestion de l'environnement , aménagement du territoire, géomatique et ingénierie forestière.
              <br/>
              Dotée d'une formation solide et expérience de + 8 ans dans ces domaines, RFS met à votre disposition une équipe indépendante et pluridisciplinaire pour vous accompagner lors de la conception et mise en oeuvre de vos projets publics et privés.
          </p>
          </div>
          <div class="col-md-6">
          <p class=" ps-lg-4 mb-1 mb-lg-4">RFS CONSULTING a à son actif + de 43 projets réalisés, + de 15 consultants parténaires ( nationaux et internationaux), + de 695 certificats de formation livrés aux candidats de différents pays du monde. Nous accompagnons les porteurs des projets publics et privés de la conception jusqu'à la mise en oeuvre.</p>
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

            Dotée d'une formation solide et expérience de + 8 ans dans ces domaines, RFS met à votre disposition une équipe indépendante et pluridisciplinaire pour vous accompagner lors de la conception et mise en oeuvre de vos projets publics et privés.
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


    <!-- Gallery -->
    {{-- <section class="container pb-5 mb-2 mb-md-4 mb-lg-5 mt-n2">
    <div class="d-flex align-items-center justify-content-between pb-4 mb-2">
        <h2 class="h1 mb-0">We are Powerful</h2>
        <a href="#" class="btn btn-outline-primary btn-lg">
        <i class="bx bx-images fs-4 lh-1 me-2"></i>
        See all photos
        </a>  
    </div>
    <div class="gallery row g-4" data-thumbnails="true">
        <div class="col-md-5">
        <a href="https://www.youtube.com/watch?v=zPo5ZaH6sW8" class="gallery-item video-item is-hovered rounded-3" data-sub-html='<h6 class="fs-sm text-light">Silicon Inc. Showreel by Marvin McKinney</h6>'>
            <img src="assets/img/about/gallery/01.jpg" alt="Gallery thumbnail">
            <div class="gallery-item-caption p-4">
            <h4 class="text-light mb-1">Silicon Inc.</h4>
            <p class="mb-0">Showreel by Marvin McKinney</p>
            </div>
        </a>
        </div>
        <div class="col-md-3 col-sm-5">
        <a href="assets/img/about/gallery/02.jpg" class="gallery-item rounded-3 mb-4" data-sub-html='<h6 class="fs-sm text-light">Program for apprentices</h6>'>
            <img src="assets/img/about/gallery/02.jpg" alt="Gallery thumbnail">
            <div class="gallery-item-caption fs-sm fw-medium">Program for apprentices</div>
        </a>
        <a href="assets/img/about/gallery/03.jpg" class="gallery-item rounded-3" data-sub-html='<h6 class="fs-sm text-light">Modern bright offices</h6>'>
            <img src="assets/img/about/gallery/03.jpg" alt="Gallery thumbnail">
            <div class="gallery-item-caption fs-sm fw-medium">Modern bright offices</div>
        </a>
        </div>
        <div class="col-md-4 col-sm-7">
        <a href="assets/img/about/gallery/04.jpg" class="gallery-item rounded-3 mb-4" data-sub-html='<h6 class="fs-sm text-light">Friendly professional team</h6>'>
            <img src="assets/img/about/gallery/04.jpg" alt="Gallery thumbnail">
            <div class="gallery-item-caption fs-sm fw-medium">Friendly professional team</div>
        </a>
        <a href="assets/img/about/gallery/05.jpg" class="gallery-item rounded-3" data-sub-html='<h6 class="fs-sm text-light">Efficient project management</h6>'>
            <img src="assets/img/about/gallery/05.jpg" alt="Gallery thumbnail">
            <div class="gallery-item-caption fs-sm fw-medium">Efficient project management</div>
        </a>
        </div>
    </div>
    </section> --}}


     <!-- Partners -->
 


      <!-- Testimonials -->
  {{-- <section class="bg-secondary">
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
  </section> --}}



    <!-- Team (Slider) -->
    <section class="container pt-lg-2 pb-5 mb-2 mb-md-4 mb-lg-5">
    <h2 class="h1 text-center text-md-start pb-md-1 mb-1 mb-sm-3">Notre équipe</h2>
    <div class="swiper mx-0 mb-md-n2 mb-xxl-n3" data-swiper-options='{
        "slidesPerView": 1,
        "spaceBetween": 8,
        "loop": true,
        "pagination": {
        "el": ".swiper-pagination",
        "clickable": true
        },
        "breakpoints": {
        "480": {
            "slidesPerView": 2
        },
        "700": {
            "slidesPerView": 3
        },
        "900": {
            "slidesPerView": 4
        },
        "1160": {
            "slidesPerView": 5
        },
        "1500": {
            "slidesPerView": 6
        }
        }
    }'>
        <div class="swiper-wrapper">

        <!-- Item -->
        @foreach ($teams as $team)
        <div class="swiper-slide py-3">
            <div class="card card-body card-hover bg-light border-0 text-center mx-2">
            <img src="{{'/storage/'.$team->image_path}}" class="d-block rounded-circle mx-auto mb-3" width="162" alt="Marvin McKinney">
            <h5 class="fw-medium fs-lg mb-1">{{ $team->name}}</h5>
            <p class="fs-sm mb-3">{{ $team->job}}</p>
            {{-- <div class="d-flex justify-content-center">
                <a href="#" class="btn btn-icon btn-outline-secondary btn-facebook btn-sm me-2">
                <i class="bx bxl-facebook"></i>
                </a>
                <a href="#" class="btn btn-icon btn-outline-secondary btn-linkedin btn-sm me-2">
                <i class="bx bxl-linkedin"></i>
                </a>
            </div> --}}
            </div>
        </div>  
        @endforeach
        

        </div>

        <!-- Pagination (bullets) -->
        <div class="swiper-pagination position-relative pt-3 mt-3"></div>
    </div>
    </section>

</x-app-layout>