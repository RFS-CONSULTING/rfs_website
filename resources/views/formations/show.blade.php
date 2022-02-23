<x-app-layout>

  <x-slot name="title">
    <title>{{ $formation->title }} -- RFS CONSULTING</title>
    <meta name="description" content="Notre équipe de consultants nationaux et internationaux vous accompagne dans les démarches pour la réussite de vos projets"/>
    <meta property="og:url"           content="{{ route('formation.show',$formation->slug) }}s" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="{{ $formation->title }} -- RFS CONSULTING" />
    <meta property="og:description"   content="Notre équipe de consultants nationaux et internationaux vous accompagne dans les démarches pour la réussite de vos projets" />
    <meta property="og:image"         content="{{'/storage/'.$formation->image_path}}" />
  </x-slot>

    <!-- Hero -->
    <section class="jarallax dark-mode bg-dark pt-2 pt-lg-3 pb-lg-5" data-jarallax data-speed="0.4">
        <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-70"></span>
        <div id="formation_jaralax_img" class="jarallax-img" style="background-image: url({{'/storage/'.$formation->image_path}});"></div>
        <div class="container position-relative zindex-5 pb-5">

          <!-- Breadcrumb -->
          <nav class="py-4" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item">
                <a href="{{ route('home')}}"><i class="bx bx-home-alt fs-lg me-1"></i>Accueil</a>
              </li>
              <li class="breadcrumb-item">
                <a href="{{ route('formation.all')}}">Formations</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">{{ $formation->title }}</li>
            </ol>
          </nav>

          <!-- Badges -->
          <div class="d-flex pt-3 pb-4 py-sm-4 pt-lg-5">
            <span class="badge bg-success fs-sm me-2">Best Seller</span>
            {{-- <a href="#" class="badge bg-white text-nav fs-sm text-decoration-none">Web Development</a> --}}
          </div>

          <!-- Title -->
          <h1>{{ $formation->title }}</h1>
          <p class="fs-lg text-light opacity-70">{{ $formation->description }}</p>

          <!-- Stats -->
          <div class="d-sm-flex py-3 py-md-4 py-xl-5">
            <div class="d-flex border-sm-end pe-sm-3 me-sm-3 mb-2 mb-sm-0">
              <div class="text-nowrap me-1">
                <i class="bx bxs-star text-warning"></i>
                <i class="bx bxs-star text-warning"></i>
                <i class="bx bxs-star text-warning"></i>
                <i class="bx bxs-star text-warning"></i>
                <i class="bx bx-star text-muted opacity-75"></i>
              </div>
              {{-- <span class="text-light opacity-70">(1.2K reviews)</span> --}}
            </div>
            {{-- <div class="d-flex border-sm-end pe-sm-3 me-sm-3 mb-2 mb-sm-0">
              <i class="bx bx-like fs-xl text-light opacity-70 me-1"></i>
              <span class="text-light opacity-70">4.2K likes</span>
            </div> --}}
            <div class="d-flex">
              <i class="bx bx-time fs-xl text-light opacity-70 me-1"></i>
              <span class="text-light opacity-70">{{ $formation->nb_hours }} heures</span>
            </div>
          </div>

          <!-- Author -->
          <div class="d-flex align-items-center mt-xl-5 pt-2 pt-md-4 pt-lg-5">
            {{-- <img src="/assets/img/avatar/17.jpg" class="rounded-circle" width="60" alt="Albert Flores"> --}}
            <div class="ps-3">
              <div class="text-light opacity-80 mb-1">Créé par</div>
              <h6>{{ $formation->instructor->name }}</h6>
            </div>
          </div>
        </div>
      </section>


      <!-- Course description -->
      <section class="container mt-2 mt-lg-4 mt-xl-5">
        <div class="row">

          <!-- Sidebar (Course summary) -->
          <aside class="col-lg-4 col-md-5 offset-xl-1 order-md-2 mb-5">
            <div style="margin-top: -96px;"></div>
            <div class="position-sticky top-0 pt-5">
              <div class="pt-5 mt-md-3">
                <div class="card shadow-sm p-sm-3">
                  <div class="card-body">
                    <h4 class="mb-4">Ce cours comprend:</h4>
                    <ul class="list-unstyled pb-3">
                      <li class="d-flex align-items-center mb-2">
                        <i class="bx bx-slideshow fs-xl text-muted me-2 pe-1"></i>
                        {{ $formation->nb_hours }} heures de vidéo à la demande
                      </li>
                      <li class="d-flex align-items-center mb-2">
                        <i class="bx bx-file fs-xl text-muted me-2 pe-1"></i>
                        {{ $formation->nb_articles }} articles
                      </li>
                      <li class="d-flex align-items-center mb-2">
                        <i class="bx bx-download fs-xl text-muted me-2 pe-1"></i>
                        Ressources téléchargeables
                      </li>
                      {{-- <li class="d-flex align-items-center mb-2">
                        <i class="bx bx-infinite fs-xl text-muted me-2 pe-1"></i>
                        Accès à vie complet
                      </li> --}}
                      <li class="d-flex align-items-center mb-2">
                        <i class="bx bx-trophy fs-xl text-muted me-2 pe-1"></i>
                        Certificat d'achèvement
                      </li>
                    </ul>
                    <div class="h2 d-flex align-items-center mb-4">{{ $formation->actual_price}} $ <del class="text-muted fs-xl fw-normal ms-2">{{ $formation->original_price}} $</del></div>
                    <a href="{{ route('formation.form', [$formation->id, $formation->slug ]) }}" class="btn btn-primary btn-lg shadow-primary">Rejoignez la formation</a>
                  </div>
                </div>
              </div>
            </div>
          </aside>

          <!-- Content -->
          <div class="col-xl-7 col-lg-8 col-md-7 order-md-1 mb-5">
            <h2 class="h1 pb-md-2 pb-lg-3">Description de la formation</h2>
            <p class="pb-4 mb-3">{{ $formation->description }}</p>
            <h3 class="mb-4">Ce que vous apprendrez</h3>
            <ul class="list-unstyled mb-5">
              @foreach ($skills as $skill)
              <li class="d-flex align-items-center mb-2">
                <i class="bx bx-check-circle text-primary fs-xl me-2"></i>
                {{ $skill->description }}
              </li>
              @endforeach
            </ul>

            <h2 class="h1 pt-md-2 pt-lg-4 pt-xl-5 pb-md-3 pb-lg-4 mb-md-4">Détails du programme</h2>
            <div class="steps steps-sm">
              @foreach ($formationDetails as $detail)
              <div class="step">
                <div class="step-number">
                  <div class="step-number-inner">{{ $loop->iteration }}</div>
                </div>
                <div class="step-body">
                  <h4 class="mb-2">{{ $detail->title }}</h4>
                  <p class="mb-0">{{$detail->description}}</p>
                </div>
              </div>
             @endforeach
            </div>
          </div>
        </div>
      </section>


      <!-- Course author -->
      {{-- <section class="container py-lg-4 py-xl-5 mt-3 mb-5">
        <div class="row g-0 bg-dark bg-repeat-0 bg-position-center border rounded-3 overflow-hidden" style="background-image: url(/assets/img/portfolio/courses/author-pattern.svg);">
          <div class="col-md-5 bg-repeat-0 bg-position-top-center bg-size-cover" style="background-image: url(/assets/img/portfolio/courses/author.jpg); min-height: 350px;"></div>
          <div class="col-md-7 py-xl-5 px-4">
            <div class="py-5 mx-auto" style="max-width: 530px;">
              <div class="fs-xl text-light opacity-50 mb-2">Learn from the best</div>
              <h2 class="h1 text-light mb-4">{{ $formation->instructor->name }}</h2>
              <p class="text-light opacity-70 pb-4">Dolor ipsum amet cursus quisque porta adipiscing. Lorem convallis malesuada sed maecenas. Ac dui at vitae mauris cursus in nullam porta sem. Quis pellentesque elementum ac bibendum. Nunc aliquam in tortor facilisis. Vulputate eget risus, metus phasellus. Pellentesque faucibus amet, eleifend diam quam condimentum convallis ultricies placerat. Duis habitasse placerat amet, odio pellentesque rhoncus, feugiat at. Eget pellentesque tristique felis magna fringilla.</p>
              <div class="d-flex flex-column flex-sm-row">
                <a href="#" class="btn btn-danger me-sm-4 mb-3 mb-sm-0">
                  <i class="bx bxl-youtube fs-xl me-2"></i>
                  240k subscribers
                </a>
                <a href="#" class="btn btn-info">
                  <i class="bx bxl-facebook-square fs-xl me-2"></i>
                  180k followers
                </a>
              </div>
            </div>
          </div>
        </div>
      </section> --}}


      <!-- Testimonials -->
      {{-- <section class="pt-2 pb-lg-4 pb-xl-5 mb-5">
        <h2 class="h1 text-center pb-3 pb-md-4 pb-xl-5">Pourquoi les étudiants aiment cette formation</h2>
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
            <div class="swiper-wrapper">

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
                    <img src="/assets/img/avatar/03.jpg" width="48" class="rounded-circle" alt="Fannie Summers">
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
                    <img src="/assets/img/avatar/02.jpg" width="48" class="rounded-circle" alt="Robert Fox">
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
                    <img src="/assets/img/avatar/04.jpg" width="48" class="rounded-circle" alt="Annette Black">
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
                    <img src="/assets/img/avatar/05.jpg" width="48" class="rounded-circle" alt="Jerome Bell">
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
                    <img src="/assets/img/avatar/01.jpg" width="48" class="rounded-circle" alt="Albert Flores">
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
                    <img src="/assets/img/avatar/06.jpg" width="48" class="rounded-circle" alt="Jenny Wilson">
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
                    <img src="/assets/img/avatar/07.jpg" width="48" class="rounded-circle" alt="Cameron Williamson">
                    <div class="ps-3">
                      <h6 class="fs-sm fw-semibold mb-0">Cameron Williamson</h6>
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
      </section> --}}


      <!-- FAQ -->
      <section class="container pb-5 mb-md-3 mb-lg-4 mb-xl-5">
        <div class="row pb-3">
          <div class="col-md-5 mb-4 mb-md-0">
            <div class="card bg-dark h-100 p-lg-5">
              <div class="card-body p-lg-2">
                <h2 class="h1 text-light">Vous avez encore des questions ?</h2>
                <p class="fs-xl text-light opacity-70 mb-0">Consultez la FAQ.</p>
              </div>
              <div class="card-footer border-0 w-100 pt-0 p-4 p-lg-2">
                <div class="h2 d-flex align-items-center text-light mb-4">{{$formation->actual_price}} $<del class="fs-xl fw-normal opacity-70 ms-2">{{ $formation->original_price}}</del></div>
                <a href=" {{ route('formation.form', [$formation->id, $formation->slug ]) }}" class="btn btn-primary btn-lg shadow-primary">Rejoignez la formation</a>
              </div>
            </div>
          </div>
          <div class="col-md-7">
            <div class="accordion" id="faq">

                <!-- Item -->
                <div class="accordion-item bg-white border-0 rounded-3 shadow-sm mb-3">
                  <h3 class="accordion-header">
                    <button class="accordion-button shadow-none rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#q-1" aria-expanded="true" aria-controls="q-1">Quels sont les moyens de paiement que vous acceptez ?</button>
                  </h3>
                  <div class="accordion-collapse collapse show" id="q-1" data-bs-parent="#faq">
                    <div class="accordion-body fs-sm pt-0">
                      <p>
                        Nous acceptons comme moyen de paiement la carte bancaire, visa et West union et mobile money.
                      </p>
                      </div>
                  </div>
                </div>
    
                <!-- Item -->
                <div class="accordion-item bg-white border-0 rounded-3 shadow-sm mb-3">
                  <h3 class="accordion-header">
                    <button class="accordion-button shadow-none rounded-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q-2" aria-expanded="false" aria-controls="q-2">Y a-t-il un plan de remboursement ?</button>
                  </h3>
                  <div class="accordion-collapse collapse" id="q-2" data-bs-parent="#faq">
                    <div class="accordion-body fs-sm pt-0">
                      <p>Oui, vous n’aurez qu’à nous envoyer un mail avec comme objet REMBOURSEMENT. Et l’intégralité de votre investissement vous sera remise.</p>
                    </div>
                  </div>
                </div>
    
                <!-- Item -->
                <div class="accordion-item bg-white border-0 rounded-3 shadow-sm mb-3">
                  <h3 class="accordion-header">
                    <button class="accordion-button shadow-none rounded-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q-3" aria-expanded="false" aria-controls="q-3">Y a-t-il un suivi après la formation ?</button>
                  </h3>
                  <div class="accordion-collapse collapse" id="q-3" data-bs-parent="#faq">
                    <div class="accordion-body fs-sm pt-0">
                      <p>Oui, vous pouvez nous contactez pour des questions où vous avez des zones d'ombres et il y a les groupes facebook et whatsapp.</p>
                    </div>
                  </div>
                </div>
    
                <!-- Item -->
                <div class="accordion-item bg-white border-0 rounded-3 shadow-sm mb-3">
                  <h3 class="accordion-header">
                    <button class="accordion-button shadow-none rounded-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q-4" aria-expanded="false" aria-controls="q-4">Y a-t-il des opportunités d’emploi dans le domaine du SIG et du numérique?</button>
                  </h3>
                  <div class="accordion-collapse collapse" id="q-4" data-bs-parent="#faq">
                    <div class="accordion-body fs-sm pt-0">
                      <p>Oui, les domaines du SIG et du numérique? sont en plein expansion et pour tout vous dire c’est le meilleur moment pour vous lancer.</p>
                    </div>
                  </div>
                </div>
              
              </div>
          </div>
        </div>
      </section>


      <!-- Related courses (Carousel on narrow screens) -->
      <section class="bg-secondary pt-5 pb-4 pb-lg-5">
        <div class="container py-2 pt-lg-4 pb-lg-0">
          <h2 class="h1 text-center pb-4">Plus de formations comme celle-ci</h2>
          <div class="swiper mx-n2" data-swiper-options='{
            "slidesPerView": 1,
            "spaceBetween": 8,
            "pagination": {
              "el": ".swiper-pagination",
              "clickable": true
            },
            "breakpoints": {
              "560": {
                "slidesPerView": 2
              },
              "1000": {
                "slidesPerView": 3
              }
            }
          }'>
            <div class="swiper-wrapper">
              @foreach ($similarFormations as $similarF)
              @if ($similarF->id != $formation->id)
                <div class="swiper-slide h-auto pb-3">
                  <article class="card h-100 border-0 shadow-sm mx-2">
                    <div class="position-relative">
                      <a href="{{ route('formation.show',$similarF->slug) }}" class="d-block position-absolute w-100 h-100 top-0 start-0"></a>
                      <a href="#" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-2 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Save to Favorites">
                        <i class="bx bx-bookmark"></i>
                      </a>
                      <img src={{'/storage/'.$similarF->image_path}} class="card-img-top" alt="{{'storage/'.$similarF->image_path}}">
                    </div>
                    <div class="card-body pb-3">
                      <h3 class="h5 mb-2">
                        <a href="{{ route('formation.show',$similarF->slug) }}">{{ $similarF->title }}</a>
                      </h3>
                      <p class="fs-sm mb-2">By {{ $similarF->instructor->name }}</p>
                      <p class="fs-lg fw-semibold text-primary mb-0">$ {{$similarF->actual_price }}</p>
                    </div>
                    <div class="card-footer d-flex align-items-center fs-sm text-muted py-4">
                      <div class="d-flex align-items-center me-4">
                        <i class="bx bx-time fs-xl me-1"></i>
                        {{ $similarF->nb_hours }} hours
                      </div>
                      {{-- <div class="d-flex align-items-center">
                        <i class="bx bx-like fs-xl me-1"></i>
                        92% (3.1K)
                      </div> --}}
                    </div>
                  </article>
                </div>    
              @endif
              @endforeach
            </div>

            <!-- Pagination (bullets) -->
            <div class="swiper-pagination position-relative pt-2 pt-sm-3 mt-4"></div>
          </div>
        </div>
      </section>
</x-app-layout>