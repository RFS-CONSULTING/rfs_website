<x-app-layout>
 <!-- Hero section with layer parallax gfx -->
 <section class="position-relative py-5">

    <!-- Gradient BG -->
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-gradient-primary opacity-10"></div>

    <!-- Content -->
    <div class="container position-relative zindex-2 py-lg-4">
      <div class="row">
        <div class="col-lg-5 d-flex flex-column pt-lg-4 pt-xl-5">
          <h1 class="display-3 mb-4">Developpez vos <span class="text-primary">connaissances</span><br/>sur les outils numériques.</h1>
          <p class=" mb-5">Apprenez les secrets indispensables qui vous permettrons de mieux manipuler les outils numérique pour la collecte et analyse des données et formez-vous dans la maitrîse des langages informatique. </p>

          <!-- Desktop form -->
          <form class="d-none d-sm-flex mb-5" action="{{ route('formation.search')}}">
            @csrf
            <div class="input-group d-block d-sm-flex input-group-lg me-3">
              <input type="text" name="searchquery" class="form-control w-50" placeholder="Rechercher des formations...">
              {{-- <select class="form-select w-50">
                <option value="" selected disabled>Categories</option>
                <option value="Web Development">Web Development</option>
                <option value="Mobile Development">Mobile Development</option>
                <option value="Programming">Programming</option>
                <option value="Game Development">Game Development</option>
                <option value="Software Testing">Software Testing</option>
                <option value="Software Engineering">Software Engineering</option>
                <option value="Network & Security">Network &amp; Security</option>
              </select> --}}
            </div>
            <button type="submit" class="btn btn-icon btn-primary btn-lg">
              <i class="bx bx-search"></i>
            </button>
          </form>
          
          <!-- Mobile form -->
          <form class="d-sm-none mb-5" action="{{ route('formation.search')}}">
            <input type="text" name="searchquery" class="form-control form-control-lg mb-2" placeholder="Rechercher des formations...">
            {{-- <select class="form-select form-select-lg mb-2">
              <option value="" selected disabled>Categories</option>
              <option value="Web Development">Web Development</option>
              <option value="Mobile Development">Mobile Development</option>
              <option value="Programming">Programming</option>
              <option value="Game Development">Game Development</option>
              <option value="Software Testing">Software Testing</option>
              <option value="Software Engineering">Software Engineering</option>
              <option value="Network & Security">Network &amp; Security</option>
            </select> --}}
            <button type="submit" class="btn btn-icon btn-primary btn-lg w-100 d-sm-none">
              <i class="bx bx-search"></i>
            </button>
          </form>
          <div class="d-flex align-items-center mt-auto mb-3 mb-lg-0 pb-4 pb-lg-0 pb-xl-5">
            <div class="d-flex me-3">
              <div class="d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 52px; height: 52px;">
                <img src="/assets/img/avatar/49.jpg" class="rounded-circle" width="48" alt="Avatar">
              </div>
              <div class="d-flex align-items-center justify-content-center bg-white rounded-circle ms-n3" style="width: 52px; height: 52px;">
                <img src="/assets/img/avatar/15.jpg" class="rounded-circle" width="48" alt="Avatar">
              </div>
              <div class="d-flex align-items-center justify-content-center bg-white rounded-circle ms-n3" style="width: 52px; height: 52px;">
                <img src="/assets/img/avatar/49.jpg" class="rounded-circle" width="48" alt="Avatar">
              </div>
            </div>
            <span class="fs-sm"><span class="text-primary fw-semibold">200+</span> étudiants sont déjà avec nous</span>
          </div>
        </div>
        <div class="col-lg-7 d-none d-lg-block">

          <!-- Parallax gfx -->
          <div class="parallax mx-auto me-lg-0" style="max-width: 648px;">
            <div class="parallax-layer" data-depth="0.1">
              <img src="/assets/img/hero/layer01.png" alt="Layer">
            </div>
            <div class="parallax-layer" data-depth="0.13">
              <img src="/assets/img/hero/layer02.png" alt="Layer">
            </div>
            <div class="parallax-layer zindex-5" data-depth="-0.12">
              <img src="/assets/img/hero/layer03.png" alt="Layer">
            </div>
            <div class="parallax-layer zindex-3" data-depth="0.27">
              <img src="/assets/img/hero/layer04.png" alt="Layer">
            </div>
            <div class="parallax-layer zindex-1" data-depth="-0.18">
              <img src="/assets/img/hero/layer05.png" alt="Layer">
            </div>
            <div class="parallax-layer zindex-1" data-depth="0.1">
              <img src="/assets/img/hero/layer06.png" alt="Layer">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Popular courses -->
  <section class="container mt-2 mt-sm-3 ">
    <div class="row py-5">
     
      <div class=" col-12">

        <!-- Title + prev/next buttons -->
        <div class="d-flex align-items-center justify-content-between pb-4 mb-3">
          <h2 class="h1  mb-0 me-3">Formations populaires</h2>
          <div class="d-flex">
            <button type="button" id="popular-prev" class="btn btn-prev btn-icon btn-sm me-2">
              <i class="bx bx-chevron-left"></i>
            </button>
            <button type="button" id="popular-next" class="btn btn-next btn-icon btn-sm ms-2">
              <i class="bx bx-chevron-right"></i>
            </button>
          </div>
        </div>

        <!-- Courses slider -->
        <div class="swiper swiper-nav-onhover mx-n2" data-swiper-options='{
          "slidesPerView": 1,
          "spaceBetween": 8,
          "pagination": {
            "el": ".swiper-pagination",
            "clickable": true
          },
          "navigation": {
            "prevEl": "#popular-prev",
            "nextEl": "#popular-next"
          },
          "breakpoints": {
            "560": {
              "slidesPerView": 2
            },
            "768": {
              "slidesPerView": 1
            },
            "850": {
              "slidesPerView": 2
            },
            "1200": {
              "slidesPerView": 3
            }
          }
          }'>
          <div class="swiper-wrapper">

            <!-- Item -->
            @foreach ($formations as $formation)
            <div class="swiper-slide h-auto pb-3">
              <article class="card h-100 border-0 shadow-sm mx-2">
                <div class="position-relative">
                  <a href="{{ route('formation.show', $formation->slug)}}" class="d-block position-absolute w-100 h-100 top-0 start-0"></a>
                  <span class="badge bg-success position-absolute top-0 start-0 zindex-2 mt-3 ms-3">Best Seller</span>
                  <a href="#" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-2 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Save to Favorites">
                    <i class="bx bx-bookmark"></i>
                  </a>
                  <img src={{ 'storage/'.$formation->image_path}} class="card-img-top" alt="Image">
                </div>
                <div class="card-body pb-3">
                  <h3 class="h5 mb-2">
                    <a href="{{ route('formation.show', $formation->slug)}}">{{  $formation->title}}</a>
                  </h3>
                  <p class="fs-sm mb-2">{{  $formation->instructor->name }}</p>
                  <p class="fs-lg fw-semibold text-primary mb-0">{{  $formation->actual_price}} $</p>
                </div>
                <div class="card-footer d-flex align-items-center fs-sm text-muted py-4">
                  <div class="d-flex align-items-center me-4">
                    <i class="bx bx-time fs-xl me-1"></i>
                    {{ $formation->nb_hours}} heures
                  </div>
                  {{-- <div class="d-flex align-items-center">
                    <i class="bx bx-like fs-xl me-1"></i>
                    94% (4.2K)
                  </div> --}}
                </div>
              </article>
            </div>   
            @endforeach
            

            
          </div>

          <!-- Pagination (bullets) -->
          <div class="swiper-pagination position-relative pt-2 pt-sm-3 mt-4"></div>
        </div>
        <div class="d-flex justify-content-center">
          <a href="{{route('formation.all')}}" class="btn btn-outline-primary btn-lg w-100 d-md-none  mt-3">
            Voir toutes les formations
            <i class="bx bx-right-arrow-alt fs-xl ms-2"></i>
          </a>

          <a href="{{route('formation.all')}}" class="btn btn-outline-primary btn-lg  d-none d-md-block  mt-3">
            Voir toutes les formations
            <i class="bx bx-right-arrow-alt fs-xl ms-2"></i>
          </a>
        </div>
      </div>
    </div>
  </section>


  <!-- How it works (Steps) -->
  <section class="container pt-4 pt-lg-0 pb-4 pb-lg-5">
    <h2 class="h1 text-center pb-3 pb-md-0 mb-md-5">Comment ça marche?</h2>
    <div class="steps">
      <div class="step pt-0 pt-md-3 pb-5">
        <div class="step-number">
          <div class="step-number-inner">1</div>
        </div>
        <div class="step-body d-flex align-items-center ps-xl-5">
         
          <div class="ps-md-4 ps-xl-5" data-jarallax-element="-10" data-disable-parallax-down="lg">
            <h3 class="h4">Trouvez ce qui vous passionne et choisissez votre formation</h3>
            {{-- <p class="mb-0">Nulla faucibus mauris pellentesque blandit faucibus non. Sit ut et at suspendisse gravida hendrerit scelerisque tempus placerat.</p> --}}
          </div>
        </div>
      </div>
      <div class="step pt-0 pt-md-4 pb-5">
        <div class="step-number">
          <div class="step-number-inner">2</div>
        </div>
        <div class="step-body d-flex align-items-center ps-xl-5">
     
          <div class="ps-md-4 ps-xl-5" data-jarallax-element="-25" data-disable-parallax-down="lg">
            <h3 class="h4">Apprendre en pratiquant</h3>
            {{-- <p class="mb-0">Tristique sed pharetra feugiat tempor sagittis. Ultricies eu bibendum adipiscing lacinia. Quisque praesent aliquam tempus phasellus ut integer ac nunc dapibus.</p> --}}
          </div>
        </div>
      </div>
      <div class="step pt-0 pt-md-4 pb-5">
        <div class="step-number">
          <div class="step-number-inner">3</div>
        </div>
        <div class="step-body d-flex align-items-center ps-xl-5">
          
          <div class="ps-md-4 ps-xl-5" data-jarallax-element="-10" data-disable-parallax-down="lg">
            <h3 class="h4">Obtenez des commentaires d'experts instantanés</h3>
            {{-- <p class="mb-0">Duis euismod enim, facilisis risus tellus pharetra lectus diam neque. Nec ultrices mi faucibus est. Magna ullamcorper potenti elementum ultricies auctor nec volutpat augue.</p> --}}
          </div>
        </div>
      </div>
      <div class="step pt-0 pt-md-4 pb-5">
        <div class="step-number">
          <div class="step-number-inner">4</div>
        </div>
        <div class="step-body d-flex align-items-center ps-xl-5">
          
          <div class="ps-md-4 ps-xl-5" data-jarallax-element="-25" data-disable-parallax-down="lg">
            <h3 class="h4">Mettez vos compétences en pratique et trouvez un travail!</h3>
            {{-- <p class="mb-0">Sed fermentum ut nibh duis. Dolor pretium arcu, tincidunt ultrices tristique arcu cursus massa gravida tortor nulla, mollis id pretium.</p> --}}
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- What you get (Icon boxes) -->
  <section class="container pt-1 pt-xl-3 pb-5">
    <h2 class="h1 text-center pb-3 pb-md-0 mb-md-5">Ce que vous obtiendrez</h2>
    <div class="swiper swiper-nav-onhover mt-n3 mx-n2" data-swiper-options='{
      "slidesPerView": 1,
      "spaceBetween": 8,
      "pagination": {
        "el": ".swiper-pagination",
        "clickable": true
      },
      "breakpoints": {
        "600": {
          "slidesPerView": 2
        },
        "1000": {
          "slidesPerView": 3
        }
      }
    }'>
      <div class="swiper-wrapper">

        <!-- Item -->
        <div class="swiper-slide h-auto py-3">
          <div class="card card-hover h-100 mx-2">
            <div class="card-body">
              <div class="d-table position-relative p-3 mb-4">
                <img src="/assets/img/landing/icons/01.svg" class="position-relative zindex-2" width="32" alt="Icon">
                <span class="bg-primary position-absolute top-0 start-0 w-100 h-100 rounded-circle opacity-8"></span>
              </div>
              <h3 class="h5 pb-1 mb-2">Séance en direct avec le formateur</h3>
              {{-- <p class="mb-0">Leo condimentum dignissim venenatis sit dignissim vel. Adipiscing tristique dictum vitae elementum neque.</p> --}}
            </div>
          </div>
        </div>

        <!-- Item -->
        <div class="swiper-slide h-auto py-3">
          <div class="card card-hover h-100 mx-2">
            <div class="card-body">
              <div class="d-table position-relative p-3 mb-4">
                <img src="/assets/img/landing/icons/02.svg" class="position-relative zindex-2" width="32" alt="Icon">
                <span class="bg-primary position-absolute top-0 start-0 w-100 h-100 rounded-circle opacity-8"></span>
              </div>
              <h3 class="h5 pb-1 mb-2">Apprentissage basé sur les modules : Tutoriels (vidéo et pdf)</h3>
              {{-- <p class="mb-0">Ac dapibus lacus, malesuada ridiculus donec condimentum nunc vestibulum. Mi feugiat tellus faucibus fermentum mattis ultrices.</p> --}}
            </div>
          </div>
        </div>

        <!-- Item -->
        <div class="swiper-slide h-auto py-3">
          <div class="card card-hover h-100 mx-2">
            <div class="card-body">
              <div class="d-table position-relative p-3 mb-4">
                <img src="/assets/img/landing/icons/03.svg" class="position-relative zindex-2" width="32" alt="Icon">
                <span class="bg-primary position-absolute top-0 start-0 w-100 h-100 rounded-circle opacity-8"></span>
              </div>
              <h3 class="h5 pb-1 mb-2">Accès à vie</h3>
              {{-- <p class="mb-0"> 1.Participation gratuite à nos visioconférences sur les SIG et développement durable<br/> 2.Participation gratuite aux moments d'échanges sur les nouvelles versions de logiciels</p> --}}
            </div>
          </div>
        </div>
      </div>

      <!-- Pagination (bullets) -->
      <div class="swiper-pagination position-relative pt-2 pt-sm-3 mt-4"></div>
    </div>
  </section>


  <!-- Testimonials -->
  <section class="container pt-md-2 pb-5">
    <div class="row">
      <div class="col-md-5">
        <div class="card h-100 border-0 overflow-hidden">
          <span class="bg-gradient-primary position-absolute top-0 start-0 w-100 h-100 opacity-10 d-none d-md-block"></span>
          <div class="card-body d-flex flex-column align-items-center justify-content-center position-relative zindex-2 p-0 pb-2 p-lg-4">
            <h2 class="h1 text-center text-md-start p-lg-4">Ce que nos étudiants disent de nos formations</h2>
          </div>
        </div>
      </div>
      <div class="col-md-7">
        <div class="card border-0 shadow-sm p-4 p-xxl-5">
          <div class="d-flex justify-content-between pb-4 mb-2">
            <span class="btn btn-icon btn-primary btn-lg shadow-primary pe-none">
              <i class="bx bxs-quote-left"></i>
            </span>
            <div class="d-flex">
              <button type="button" id="testimonials-prev" class="btn btn-prev btn-icon btn-sm me-2">
                <i class="bx bx-chevron-left"></i>
              </button>
              <button type="button" id="testimonials-next" class="btn btn-next btn-icon btn-sm ms-2">
                <i class="bx bx-chevron-right"></i>
              </button>
            </div>
          </div>
          
          <!-- Slider -->
          <div class="swiper mx-0 mb-md-n2 mb-xxl-n3" data-swiper-options='{
            "spaceBetween": 24,
            "loop": true,
            "pagination": {
              "el": ".swiper-pagination",
              "clickable": true
            },
            "navigation": {
              "prevEl": "#testimonials-prev",
              "nextEl": "#testimonials-next"
            }
          }'>
            <div class="swiper-wrapper">

              <!-- Item -->
              @foreach ($testimonials as $testimonial)
              <div class="swiper-slide h-auto">
                <figure class="card h-100 position-relative border-0 bg-transparent">
                  <blockquote class="card-body p-0 mb-0">
                    <p class="fs-lg mb-0">{{ $testimonial->message }}</p>
                  </blockquote>
                  <figcaption class="card-footer border-0 d-flex align-items-center w-100 pb-2">
                    <img src="{{ 'storage/'.$testimonial->image_url}}" width="60" class="rounded-circle" alt="{{ $testimonial->witness }}">
                    <div class="ps-3">
                      <h6 class="fw-semibold lh-base mb-0">{{ $testimonial->witness }}</h6>
                      <span class="fs-sm text-muted">{{ $testimonial->job }}</span>
                    </div>
                  </figcaption>
                </figure>
              </div>
              @endforeach

           
            </div>

            <!-- Pagination (bullets) -->
            <div class="swiper-pagination position-relative mt-5"></div>
          </div>        
        </div>
      </div>
    </div>
  </section>


  <!-- FAQ (Accordion) -->
  <section class="container pt-1 pt-lg-3">
    <div class="position-relative bg-primary rounded-3 overflow-hidden px-3 px-sm-4 px-md-0 py-5">

      <!-- Parallax patterns -->
      <div class="position-absolute top-0 start-0 w-100 h-100" data-jarallax-element="-60">
        <img src="/assets/img/landing/pattern-1.svg" class="position-absolute top-0 start-100 translate-middle ms-n4" alt="Pattern">
        <img src="/assets/img/landing/pattern-2.svg" class="position-absolute top-50 start-0 mt-n5 ms-n5" alt="Pattern">
        <img src="/assets/img/landing/pattern-3.svg" class="position-absolute top-100 start-100 translate-middle ms-n5 mt-n5" alt="Pattern">
      </div>

      <div class="row justify-content-center position-relative zindex-2 py-lg-4">
        <div class="col-xl-8 col-lg-9 col-md-10 py-2">
          <h2 class="h1 text-light text-center mt-n2 mt-lg-0 mb-4 mb-lg-5">Questions fréquemment posées</h2>
          <div class="accordion" id="faq">

            <!-- Item -->
            <div class="accordion-item bg-white border-0 rounded-3 shadow-sm mb-3">
              <h3 class="accordion-header">
                <button class="accordion-button shadow-none rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#q-1" aria-expanded="true" aria-controls="q-1">Quels sont les moyens de paiement que vous acceptez ?</button>
              </h3>
              <div class="accordion-collapse collapse show" id="q-1" data-bs-parent="#faq">
                <div class="accordion-body fs-sm pt-0">
                  <p>
                    Nous acceptons comme moyen de paiement la carte bancaire, visa et West union.
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
                  <p>Oui, si vous avez des zones d’ombre après la formation un groupe Facebook est là pour ça.</p>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div class="accordion-item bg-white border-0 rounded-3 shadow-sm mb-3">
              <h3 class="accordion-header">
                <button class="accordion-button shadow-none rounded-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q-4" aria-expanded="false" aria-controls="q-4">Y a-t-il des opportunités d’emploi dans le domaine du SIG?</button>
              </h3>
              <div class="accordion-collapse collapse" id="q-4" data-bs-parent="#faq">
                <div class="accordion-body fs-sm pt-0">
                  <p>Oui, le domaine du SIG est en plein expansion et pour tout vous dire c’est le meilleur moment pour vous lancer.</p>
                </div>
              </div>
            </div>
          
          </div>
        </div>
      </div>
    </div>
  </section>


  @if (!Auth::user())
      <!-- Sign up form -->
    <section class="bg-secondary pb-lg-5" style="margin-top: -240px; padding-top: 300px;">
      <div class="container pt-2 pt-md-3 pt-lg-5 pb-5">
        <h2 class="h1 text-center pb-2 mb-4 mb-lg-5">Prêt à démarrer votre carrière ? <br>Commencez à apprendre aujourd'hui</h2>
        <div class="row pb-3">
          <div class="col-xl-7 col-md-6">
            <div class="d-flex flex-column w-100 h-100 rounded-3 bg-position-center bg-repeat-0 bg-size-cover" style="background-image: url(/assets/img/landing/signup-img.jpg);"></div>
          </div>
          <div class="col-xl-5 col-md-6">
            <div class="card border-0 p-lg-4">
              <div class="card-body">
                <h3 class="pb-3 pb-lg-4">Inscrivez-vous et obtenez une <span class="text-danger">réduction de 20%</span> pour votre premiere formation !</h3>
                <form class="needs-validation mb-4 pb-2 pb-lg-0 mb-lg-5" novalidate>
                  <div class="position-relative mb-4">
                    <label for="email" class="form-label fs-base">Adresse e-mail</label>
                    <input type="email" id="email" class="form-control form-control-lg" required>
                    <div class="invalid-tooltip position-absolute top-100 start-0">Veuillez fournir une adresse email valide.</div>
                  </div>
                  <div class="mb-4 pt-1 pb-2">
                    <label for="password" class="form-label fs-base">Mot de passe</label>
                    <div class="password-toggle">
                      <input type="password" id="password" class="form-control form-control-lg" required>
                      <label class="password-toggle-btn" aria-label="Show/hide password">
                        <input class="password-toggle-check" type="checkbox">
                        <span class="password-toggle-indicator"></span>
                      </label>
                      <div class="invalid-tooltip position-absolute top-100 start-0">Veuillez fournir une adresse email valide.</div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary btn-lg shadow-primary">Créer un compte gratuitement</button>
                </form>
                <h6 class="mb-4">Ou inscrivez-vous en utilisant :</h6>
                <div class="d-flex">
                  <a href="#" class="btn btn-icon btn-secondary btn-google me-2">
                    <i class="bx bxl-google"></i>
                  </a>
                  <a href="#" class="btn btn-icon btn-secondary btn-facebook ms-1 me-2">
                    <i class="bx bxl-facebook"></i>
                  </a>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  @endif
  

</x-app-layout>