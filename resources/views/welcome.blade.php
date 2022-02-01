<x-app-layout>
  <!-- Hero -->
  <section class=" container d-none d-lg-block jarallax position-relative d-flex align-items-center py-5 bg-light mb-5 " style="background-image: url(assets/img/landing/hero-bg.png);" data-jarallax data-img-position="0% 100%" data-speed="0.5">
    <div class="container position-relative zindex-5 ">
      <div class="row justify-content-md-start justify-content-center pt-0">
        <div class="col-md-8 col-sm-8 order-md-1 order-2 d-flex flex-column justify-content-between mt-4 pt-2 text-md-start text-center">
          <div class="">

            <!-- Text -->
            <h1 class="display-2 mb-md-5 mb-3 pb-3 mt-lg-5">
              <span class="text-gradient-primary">En plus de la science,</span> <span class="text-gradient-primary">maitrisez les outils</span>
            </h1>
            <div class="d-md-flex align-items-md-start">
              <a href="{{ route('contact')}}" class="btn btn-lg btn-primary flex-shrink-0 me-md-4 mb-md-0 mb-sm-4 mb-3">Travailler avec nous</a>
              <p class="d-lg-block  d-none mb-0 ps-md-3">RFS Consulting offre des services d' études, expertises, ingénierie et renforcement des capacités dans les domaines de Gestion de l' environnement, Aménagement du territoire, Géomatique, Ingénierie forestière.</p>
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
                    <a href="#" class="btn btn-primary shadow-primary btn-lg">Contactez-nous</a>
                  </div>

                </div>

                <!-- Item -->
                <div class="swiper-slide">
                  <h2 class="display-2 from-start mb-lg-4">RFS ACADEMIA</h2>
                  <div class="from-end">
                    <p class=" text-light opacity-70 pb-2 mb-lg-5">Renforcement des capacités, encadrement scientifique.</p>
                  </div>
                  <div class="scale-up delay-1">
                    <a href="#" class="btn btn-primary shadow-primary btn-lg">Contactez-nous</a>
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

      <!-- Services -->
  <section class="container bg-secondary pb-md-2 pb-lg-5" id="services">
    <div class="" style="margin-top: -60px; padding-top: 0px;"></div>
    <div class="container pb-4 pt-5">
      <h2 class="h1 text-center text-md-start mb-lg-4 pt-1 pt-md-4">Nos services</h2>
      <div class="row align-items-center pb-5 mb-lg-2">
        <div class="col-md-8 text-center text-md-start">
          <p class="fs-lg text-muted mb-md-0">Nous offrons des services d' études, expertises, ingénierie et renforcement des capacités dans les domaines de Gestion de l' environnement, Aménagement du territoire, Géomatique, Ingénierie forestière.</p>
        </div>
        <div class="col-md-4 d-flex justify-content-center justify-content-md-end">
          <a href="services.html" class="btn btn-outline-primary btn-lg">Voir tous nos services</a>
        </div>
      </div>
      <div class="row row-cols-1 row-cols-md-2">

        <!-- Item -->
        <div class="col py-4 my-2 my-sm-3">
          <a href="services-single.html" class="card card-hover h-100 border-0 shadow-sm text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 me-xl-2">
            <div class="card-body pt-3">
              <div class="d-inline-block bg-primary shadow-primary rounded-3 position-absolute top-0 translate-middle-y p-3">
                <img src="assets/img/services/cms.svg" class="d-block m-1" width="40" alt="Icon">
              </div>
              <h2 class="h4 d-inline-flex align-items-center">
                Consultance
                <i class="bx bx-right-arrow-circle text-primary fs-3 ms-2"></i>
              </h2>
              <p class="fs-sm text-body mb-0">Nisi, dis sed cursus eget pellentesque mattis. Odio eu proin aliquam a. Semper bibendum tellus non tellus, facilisi dignissim in quam massa. Aliquam, feugiat ut cum tellus, sit. Quis consectetur gravida ac ac lectus cursus egestas.</p>
            </div>
          </a>
        </div>

        <!-- Item -->
        <div class="col py-4 my-2 my-sm-3">
          <a href="services-single.html" class="card card-hover h-100 border-0 shadow-sm text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 ms-xl-2">
            <div class="card-body pt-3">
              <div class="d-inline-block bg-primary shadow-primary rounded-3 position-absolute top-0 translate-middle-y p-3">
                <img src="assets/img/services/rocket.svg" class="d-block m-1" width="40" alt="Icon">
              </div>
              <h2 class="h4 d-inline-flex align-items-center">
                Formations professionnelles
                <i class="bx bx-right-arrow-circle text-primary fs-3 ms-2"></i>
              </h2>
              <p class="fs-sm text-body mb-0">Id eget blandit sapien cras massa lectus lorem placerat. Quam dolor commodo fermentum bibendum dictumst. Risus pretium eget at viverra eget. Sit neque adipiscing malesuada blandit justo, quam.</p>
            </div>
          </a>
        </div>

      </div>
    </div>
  </section>

  <!-- COVID banner -->
  <section class=" bg-primary">
    <div class="container shadow-sm ">
      <div class=" row">
        <div class="   text-center text-md-start py-4 py-lg-5 ">
          <h2 class="h1 text-white">Devenez Ambassadeur de RFS ACADEMIA</h2>
          <p class="mb-4 mb-lg-5 text-white">Un ambassadeur RFS est toute personne (étudiant ou professionnel), officiellement reconnu par la direction générale de RFS CONSULTING et la Coordination de RFS ACADEMIA, il/elle a pour rôle de parler et présenter les activités de RFS ACADEMIA sur le renforcement des capacités, vendre la bonne image de RFS CONSULTING.</p>
          <a href="#" class="btn btn-light text-primary">En savoir plus</a>
        </div>
      </div>
    </div>
  </section>

   <!-- Video showcase -->
   <section class="container py-5 ">
    <h2 class="h1 pb-3  ">Qui sommes-nous ?</h2>

    <div class="row align-items-center pb-2 ">
      <div class="col-xl-4 col-md-5 order-2 order-md-1" data-jarallax-element="20" data-disable-parallax-down="lg">
        <ul class="list-unstyled pb-4 mb-0">
          <li class="d-flex align-items-center  pb-1 mb-2" style="text-align: justify">
            Créée depuis 2016, légalement enregistré au CD/KNM/RCCM/21-A-01181, RFS CONSULTING offre des services d'études, expertises et renforcement des capacités dans les domaines de gestion de l'environnement , aménagement du territoire, géomatique et ingénierie forestière.

            Dotée d'une formation solide et expérience de + 8 ans dans ces domaines, RFS met à votre disposition une équipe indépendante et pluridisciplinaire pour vous accompagner lors de la conception et mise en oeuvre de vos projets publics et privés.
          </li>
          
        
        </ul>
        <a href="#" class="btn btn-primary w-100 w-md-auto">
          En savoir plus
          <i class="bx bx-right-arrow-alt fs-xl ms-2 me-n1"></i>
        </a>
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
      <h2 class="h1 pb-3 container  pt-5">Ce qu'ils ont dit sur nous</h2>
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
            <div class="swiper-slide h-auto pt-4">
              <figure class="d-flex flex-column h-100 px-2 px-sm-0 mb-0">
                <div class="card h-100 position-relative border-0 shadow-sm pt-4">
                  <span class="btn btn-icon btn-primary shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4">
                    <i class="bx bxs-quote-left"></i>
                  </span>
                  <blockquote class="card-body pb-3 mb-0">
                    <p class="mb-0">Id mollis consectetur congue egestas egestas suspendisse blandit justo. Tellus augue commodo id quis tempus etiam pulvinar at maecenas.</p>
                  </blockquote>
                  <div class="card-footer border-0 text-nowrap pt-0">
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bx-star text-muted opacity-75"></i>
                    <i class="bx bx-star text-muted opacity-75"></i>
                  </div>
                </div>
                <figcaption class="d-flex align-items-center ps-4 pt-4">
                  <img src="assets/img/avatar/42.png" width="48" class="rounded-circle" alt="Fannie Summers">
                  <div class="ps-3">
                    <h6 class="fs-sm fw-semibold mb-0">Fannie Summers</h6>
                    <span class="fs-xs text-muted">Designer</span>
                  </div>
                </figcaption>
              </figure>
            </div>

            <!-- Item -->
            <div class="swiper-slide h-auto pt-4">
              <figure class="d-flex flex-column h-100 px-2 px-sm-0 mb-0">
                <div class="card h-100 position-relative border-0 shadow-sm pt-4">
                  <span class="btn btn-icon btn-primary shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4">
                    <i class="bx bxs-quote-left"></i>
                  </span>
                  <blockquote class="card-body pb-3 mb-0">
                    <p class="mb-0">Phasellus luctus nisi id orci condimentum, at cursus nisl vestibulum. Orci varius natoque penatibus et magnis dis parturient montes.</p>
                  </blockquote>
                  <div class="card-footer border-0 text-nowrap pt-0">
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                  </div>
                </div>
                <figcaption class="d-flex align-items-center ps-4 pt-4">
                  <img src="assets/img/avatar/43.png" width="48" class="rounded-circle" alt="Robert Fox">
                  <div class="ps-3">
                    <h6 class="fs-sm fw-semibold mb-0">Robert Fox</h6>
                    <span class="fs-xs text-muted">QA Engineer</span>
                  </div>
                </figcaption>
              </figure>
            </div>

            <!-- Item -->
            <div class="swiper-slide h-auto pt-4">
              <figure class="d-flex flex-column h-100 px-2 px-sm-0 mb-0">
                <div class="card h-100 position-relative border-0 shadow-sm pt-4">
                  <span class="btn btn-icon btn-primary shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4">
                    <i class="bx bxs-quote-left"></i>
                  </span>
                  <blockquote class="card-body pb-3 mb-0">
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ipsum odio, bibendum ornare mi at, efficitur urna.</p>
                  </blockquote>
                  <div class="card-footer border-0 text-nowrap pt-0">
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bx-star text-muted opacity-75"></i>
                  </div>
                </div>
                <figcaption class="d-flex align-items-center ps-4 pt-4">
                  <img src="assets/img/avatar/44.png" width="48" class="rounded-circle" alt="Annette Black">
                  <div class="ps-3">
                    <h6 class="fs-sm fw-semibold mb-0">Annette Black</h6>
                    <span class="fs-xs text-muted">Project Manager</span>
                  </div>
                </figcaption>
              </figure>
            </div>

            <!-- Item -->
            <div class="swiper-slide h-auto pt-4">
              <figure class="d-flex flex-column h-100 px-2 px-sm-0 mb-0">
                <div class="card h-100 position-relative border-0 shadow-sm pt-4">
                  <span class="btn btn-icon btn-primary shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4">
                    <i class="bx bxs-quote-left"></i>
                  </span>
                  <blockquote class="card-body pb-3 mb-0">
                    <p class="mb-0">Etiam augue ante, imperdiet et nunc sed, bibendum faucibus est. Suspendisse egestas facilisis erat eu eleifend.</p>
                  </blockquote>
                  <div class="card-footer border-0 text-nowrap pt-0">
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bx-star text-muted opacity-75"></i>
                    <i class="bx bx-star text-muted opacity-75"></i>
                  </div>
                </div>
                <figcaption class="d-flex align-items-center ps-4 pt-4">
                  <img src="assets/img/avatar/45.png" width="48" class="rounded-circle" alt="Jerome Bell">
                  <div class="ps-3">
                    <h6 class="fs-sm fw-semibold mb-0">Jerome Bell</h6>
                    <span class="fs-xs text-muted">Developer</span>
                  </div>
                </figcaption>
              </figure>
            </div>

            <!-- Item -->
            <div class="swiper-slide h-auto pt-4">
              <figure class="d-flex flex-column h-100 px-2 px-sm-0 mb-0">
                <div class="card h-100 position-relative border-0 shadow-sm pt-4">
                  <span class="btn btn-icon btn-primary shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4">
                    <i class="bx bxs-quote-left"></i>
                  </span>
                  <blockquote class="card-body pb-3 mb-0">
                    <p class="mb-0">Nulla volutpat consectetur congue egestas egestas uni suspendisse blandit parturient.</p>
                  </blockquote>
                  <div class="card-footer border-0 text-nowrap pt-0">
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                  </div>
                </div>
                <figcaption class="d-flex align-items-center ps-4 pt-4">
                  <img src="assets/img/avatar/42.png" width="48" class="rounded-circle" alt="Jenny Wilson">
                  <div class="ps-3">
                    <h6 class="fs-sm fw-semibold mb-0">Jenny Wilson</h6>
                    <span class="fs-xs text-muted">Marketing</span>
                  </div>
                </figcaption>
              </figure>
            </div>

            <!-- Item -->
            <div class="swiper-slide h-auto pt-4">
              <figure class="d-flex flex-column h-100 px-2 px-sm-0 mb-0">
                <div class="card h-100 position-relative border-0 shadow-sm pt-4">
                  <span class="btn btn-icon btn-primary shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4">
                    <i class="bx bxs-quote-left"></i>
                  </span>
                  <blockquote class="card-body pb-3 mb-0">
                    <p class="mb-0">Pellentesque finibus congue egestas egestas suspendisse blandit justo. Tellus augue commodo id quis tempus etiam pulvinar at maecenas.</p>
                  </blockquote>
                  <div class="card-footer border-0 text-nowrap pt-0">
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bx-star text-muted opacity-75"></i>
                  </div>
                </div>
                <figcaption class="d-flex align-items-center ps-4 pt-4">
                  <img src="assets/img/avatar/46.png" width="48" class="rounded-circle" alt="Albert Flores">
                  <div class="ps-3">
                    <h6 class="fs-sm fw-semibold mb-0">Albert Flores</h6>
                    <span class="fs-xs text-muted">PR Director</span>
                  </div>
                </figcaption>
              </figure>
            </div>

            <!-- Item -->
            <div class="swiper-slide h-auto pt-4">
              <figure class="d-flex flex-column h-100 px-2 px-sm-0 mb-0">
                <div class="card h-100 position-relative border-0 shadow-sm pt-4">
                  <span class="btn btn-icon btn-primary shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4">
                    <i class="bx bxs-quote-left"></i>
                  </span>
                  <blockquote class="card-body pb-3 mb-0">
                    <p class="mb-0">Vivamus iaculis facilisis pretium. Pellentesque vitae mi odio. Donec imperdiet pellentesque ipsum quis pharetra. Nullam dolor sem.</p>
                  </blockquote>
                  <div class="card-footer border-0 text-nowrap pt-0">
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bx-star text-muted opacity-75"></i>
                  </div>
                </div>
                <figcaption class="d-flex align-items-center ps-4 pt-4">
                  <img src="assets/img/avatar/47.png" width="48" class="rounded-circle" alt="Cameron Williamson">
                  <div class="ps-3">
                    <h6 class="fs-sm fw-semibold mb-0">Wade Warren</h6>
                    <span class="fs-xs text-muted">Illustrator</span>
                  </div>
                </figcaption>
              </figure>
            </div>
          </div>

          <!-- Pagination (bullets) -->
          <div class="swiper-pagination position-relative pt-1 pt-sm-3 mt-5"></div>
        </div>
      </div>
    </section>




 <!-- Partners -->
 <section class="container py-5 my-md-2 my-lg-4 my-xl-5">
  <div class="row  pt-1 pb-1 mb-2 mb-md-3 mb-lg-4">
    <div class="container">
      <h2 class="h1 mb-4">Nos partenaires</h2>
      <p class="fs-lg text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin volutpat mollis egestas. Nam luctus facilisis ultrices. Pellentesque volutpat ligula est. Mattis fermentum, at nec lacus.</p>
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
      <div class="swiper-slide py-3">
        <a href="#" class="card card-hover border-0 shadow-sm py-3 mx-2">
          <div class="card-body">
            <img src="assets/img/brands/google.svg" class="d-block mx-auto" alt="Google">
          </div>
        </a>
      </div>

      <!-- Item -->
      <div class="swiper-slide py-3">
        <a href="#" class="card card-hover border-0 shadow-sm py-3 mx-2">
          <div class="card-body">
            <img src="assets/img/brands/zoom.svg" class="d-block mx-auto" alt="Zoom">
          </div>
        </a>
      </div>

      <!-- Item -->
      <div class="swiper-slide py-3">
        <a href="#" class="card card-hover border-0 shadow-sm py-3 mx-2">
          <div class="card-body">
            <img src="assets/img/brands/slack.svg" class="d-block mx-auto" alt="Slack">
          </div>
        </a>
      </div>

      <!-- Item -->
      <div class="swiper-slide py-3">
        <a href="#" class="card card-hover border-0 shadow-sm py-3 mx-2">
          <div class="card-body">
            <img src="assets/img/brands/gmail.svg" class="d-block mx-auto" alt="Gmail">
          </div>
        </a>
      </div>

      <!-- Item -->
      <div class="swiper-slide py-3">
        <a href="#" class="card card-hover border-0 shadow-sm py-3 mx-2">
          <div class="card-body">
            <img src="assets/img/brands/trello.svg" class="d-block mx-auto" alt="Trello">
          </div>
        </a>
      </div>

      <!-- Item -->
      <div class="swiper-slide py-3">
        <a href="#" class="card card-hover border-0 shadow-sm py-3 mx-2">
          <div class="card-body">
            <img src="assets/img/brands/mailchimp.svg" class="d-block mx-auto" alt="Mailchimp">
          </div>
        </a>
      </div>

      <!-- Item -->
      <div class="swiper-slide py-3">
        <a href="#" class="card card-hover border-0 shadow-sm py-3 mx-2">
          <div class="card-body">
            <img src="assets/img/brands/dropbox.svg" class="d-block mx-auto" alt="Dropbox">
          </div>
        </a>
      </div>

      <!-- Item -->
      <div class="swiper-slide py-3">
        <a href="#" class="card card-hover border-0 shadow-sm py-3 mx-2">
          <div class="card-body">
            <img src="assets/img/brands/evernote.svg" class="d-block mx-auto" alt="Evernote">
          </div>
        </a>
      </div>
    </div>

    <!-- Pagination (bullets) -->
    <div class="swiper-pagination position-relative pt-3 mt-4"></div>
  </div>
  <div class="text-center my-3 mt-xl-n2">
    <a href="#" class="btn btn-primary">Voir tous nos partenaires</a>
  </div>
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



 

     
