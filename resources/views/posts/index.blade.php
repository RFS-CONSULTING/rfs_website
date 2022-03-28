<x-app-layout>

  <x-slot name="title">
    <title>Blog -- RFS CONSULTING</title>
    <meta name="description" content="Nous sommes missionnés pour nos études précises, nos conseils avisés, nos expertises et évaluations justes, et nos réalisations réussites."/>
    <meta property="og:url"           content="https://rfs-congo.com/posts" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Formations -- RFS CONSULTING" />
    <meta property="og:description"   content="Nous sommes missionnés pour nos études précises, nos conseils avisés, nos expertises et évaluations justes, et nos réalisations réussites." />
    <meta property="og:image"         content="/assets/img/hero/hero-bg.jpeg" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
      .carousel-item{
        height: 400px;
      }
    </style>
  </x-slot>

     <!-- Breadcrumb -->
     <section class="container">
      <nav class="" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 pt-5">
          <li class="breadcrumb-item">
            <a href="{{ route('home')}}"><i class="bx bx-home-alt fs-lg me-1"></i>Accueil</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Posts</li>
        </ol>
      </nav>
     </section>


      <!-- Page content -->
      <section class="container mt-4 mb-2 mb-md-4 mb-lg-5 pt-lg-2 pb-5">

        <!-- Page title + Layout switcher -->
        <div class="d-flex align-items-center justify-content-between mb-4 pb-1 pb-md-3">
          <h1 class="mb-0">Nos derniers articles</h1>
        </div>


        <!-- Blog list + Sidebar -->
        <div class="row">
          <div class="col-xl-9 col-lg-8">
            @foreach ($posts as $post)
                <!-- Item -->
            <article class="card border-0 bg-transparent me-xl-5 mb-4">
              <div class="row g-0">
                <div class="col-sm-5 position-relative bg-position-center bg-repeat-0 bg-size-cover rounded-3" style="background-image: url({{'/storage/'.$post->image_path}}); min-height: 15rem;">
                  <a href="{{ route('post.show', $post->slug)}}" class="position-absolute top-0 start-0 w-100 h-100" aria-label="Read more"></a>
                  <a href="#" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-5 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Read later">
                    <i class="bx bx-bookmark"></i>
                  </a>
                </div>
                <div class="col-sm-7">
                  <div class="card-body px-0 pt-sm-0 ps-sm-4 pb-0 pb-sm-4">
                    {{-- <a href="#" class="badge fs-sm text-white bg-info shadow-info text-decoration-none mb-3">Digital</a> --}}
                    <h3 class="h4">
                      <a href="{{ route('post.show', $post->slug)}}">{{ $post->title }}</a>
                    </h3>
                    <x-markdown>
                      {!! substr($post->content,0,200) !!}</p>
                    </x-markdown>
                    <div class="d-flex align-items-center text-muted">
                      <div class="fs-sm border-end pe-3 me-3">{{ $post->created_at->diffForHumans()}}</div>
                      <div class="d-flex align-items-center me-3">
                        <i class="bx bx-like fs-lg me-1"></i>
                        <span class="fs-sm">{{ $post->likes()->count() }}</span>
                      </div>
                      <div class="d-flex align-items-center me-3">
                        <i class="bx bx-comment fs-lg me-1"></i>
                        <span class="fs-sm">{{ $post->comments()->count() }}</span>
                      </div>
                      <div class="d-flex align-items-center">
                        <i class="bx bx-share-alt fs-lg me-1"></i>
                        <span class="fs-sm">{{ $post->countshared }}</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </article>

            <div class="pb-2 pb-lg-3"></div>
            @endforeach
            


            <div class="pb-2 pb-lg-3"></div>
            {{ $posts->links('vendor.pagination.pagination')}}
            <!-- Load more button -->
            {{-- <button class="btn btn-lg btn-outline-primary w-100 mt-4">
              <i class="bx bx-down-arrow-alt fs-xl me-2"></i>
              Show more
            </button> --}}
          </div>


          <!-- Sidebar (Offcanvas below lg breakpoint) -->
          <aside class="col-xl-3 col-lg-4 ">
             <!-- Advertising -->
                 
            <div class="carousel slide mb-4" data-bs-ride="carousel">
              <div class="carousel-inner">
                @foreach ($formations as $formation)
                    @if ($loop->index == 1)
                      <div class="carousel-item active">
                        <a href="{{route('formation.show',$formation->slug)}}"> 
                          <img src="{{'storage/'.$formation->image_path}}" alt="" class="w-100 h-100 rounded">
                        </a>
                      </div>
                    @else
                      <div class="carousel-item">
                        <a href="{{route('formation.show',$formation->slug)}}"> 
                          <img src="{{ 'storage/'.$formation->image_path}}" alt="" class="w-100 h-100 rounded">
                        </a>
                      </div>
                    @endif
                @endforeach
              </div>
            </div>

            <div class="offcanvas offcanvas-end offcanvas-expand-lg" id="blog-sidebar" tabindex="-1">

              <!-- Header -->
              <div class="offcanvas-header border-bottom">
                <h3 class="offcanvas-title fs-lg">Sidebar</h3>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
              </div>
             

              <!-- Body -->
              <div class="offcanvas-body">

                
                <!-- Popular posts -->
                <div class="card card-body border-0 position-relative mb-4">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-gradient-primary opacity-10 rounded-3"></span>
                  <div class="position-relative zindex-2">
                    <h3 class="h5">Articles populaires</h3>
                    <ul class="list-unstyled mb-0">
                      @foreach ($popular as $pop)
                      <li class="border-bottom pb-3 mb-3">
                        <h4 class="h6 mb-2">
                          <a href="{{ route('post.show',$pop->slug) }}">{{ $pop->title }}</a>
                        </h4>
                        <div class="d-flex align-items-center text-muted pt-1">
                          <div class="fs-xs border-end pe-3 me-3">{{ $pop->created_at->diffForHumans() }}</div>
                          <div class="d-flex align-items-center me-3">
                            <i class="bx bx-like fs-base me-1"></i>
                            <span class="fs-xs">{{ $pop->likes()->count() }}</span>
                          </div>
                          <div class="d-flex align-items-center me-3">
                            <i class="bx bx-comment fs-base me-1"></i>
                            <span class="fs-xs">{{ $pop->comments()->count() }}</span>
                          </div>
                          <div class="d-flex align-items-center">
                            <i class="bx bx-share-alt fs-base me-1"></i>
                            <span class="fs-xs">{{ $pop->countshared }}</span>
                          </div>
                        </div>
                      </li>
                      @endforeach
                     
                      
                    </ul>
                  </div>
                </div>

                <!-- Follow Us -->
                {{-- <div class="card mb-4">
                  <div class="card-body">
                    <h5 class="mb-4">Follow Us</h5>
                    <a href="#" class="btn btn-icon btn-sm btn-secondary btn-linkedin me-2 mb-2">
                      <i class="bx bxl-linkedin"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-sm btn-secondary btn-facebook me-2 mb-2">
                      <i class="bx bxl-facebook"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-sm btn-secondary btn-twitter me-2 mb-2">
                      <i class="bx bxl-twitter"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-sm btn-secondary btn-instagram me-2 mb-2">
                      <i class="bx bxl-instagram"></i>
                    </a>
                  </div>
                </div> --}}

                
              </div>
            </div>
          </aside>
        </div>
      </section>


      <!-- Subscription CTA -->
      <section class="py-5 bg-secondary">
        <div class="container py-md-3 py-lg-5">
          <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-9 col-md-11">
              <h2 class="h1 d-md-inline-block position-relative mb-md-5 mb-sm-4 text-sm-start text-center">
                Vous ne voulez rien manquer ?
  
                <!-- Arrow shape -->
                <svg class="d-md-block d-none position-absolute top-0 ms-4 ps-1" style="left: 100%;" xmlns="http://www.w3.org/2000/svg" width="65" height="68" fill="#6366f1"><path d="M53.9527 51.0012c8.396-10.5668 2.0302-26.0134-11.7481-26.7511-.6899-.0646-1.4612.0015-2.1258.0431.1243 9.0462-4.1714 18.8896-11.5618 21.3814-6.6695 2.2133-10.3337-4.2224-7.5813-9.676 3.2966-6.4755 9.103-11.8504 16.1678-13.8189-.5654-5.6953-3.3436-10.7672-9.485-12.48517C17.2678 6.8204 6.49364 16.3681 4.98841 26.127c-.09276 1.0297-1.68569.9497-1.59293-.0801C3.98732 12.9139 19.7395 2.55212 31.9628 8.5787c4.7253 2.3813 7.2649 7.3963 7.9368 13.067 7.4237-.9311 14.5154 3.3683 18.3422 9.5422 4.3988 7.1623 2.3584 15.1401-2.6322 21.1108-.7826.9653-2.3331-.3572-1.6569-1.2975zM26.7754 32.1845c-1.9411 2.2411-4.076 5.0872-4.3542 8.1764-.3036 2.9829 3.7601 3.0525 5.4905 2.7645 2.1568-.3863 3.7221-2.3164 4.8863-4.0419 2.6228-3.6308 4.3657-9.0752 4.4844-14.2563-4.0808 1.279-7.6514 4.2327-10.507 7.3573zm24.6311 25.592c-.7061-2.9738-1.2243-6.1031-1.1591-9.143.0423-1.242 1.767-1.0805 1.8313.1372.1284 2.435.815 4.8532 1.4764 7.1651l4.1619-1.4098c1.0153-.4586 2.4373-1.5714 3.6544-1.1804.6087.1954.7347.7264.6475 1.3068-.2302 1.3976-2.4683 1.9147-3.5901 2.398-1.8429.7619-3.6293 1.2865-5.5477 1.7298-.6391.1476-1.3233-.3665-1.4746-1.0037z"/></svg>
              </h2>
  
              <!-- Title + checkboxes -->
              {{-- <div class="row gy-4 align-items-center mb-lg-5 mb-4 pb-3">
                <div class="col-md-3">
                  <h3 class="h5 mb-0 text-sm-start text-center">Inscrivez-vous aux newsletters</h3>
                </div>
                <div class="col-md-9">
                  <div class="row row-cols-sm-3 row-cols-2 gy-2">
                    <div class="col">
                      <div class="form-check mb-0">
                        <input type="checkbox" id="s-daily-newsletter" class="form-check-input">
                        <label for="s-daily-newsletter" class="form-check-label">Daily Newsletter</label>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-check mb-0">
                        <input type="checkbox" id="s-advertising-updates" class="form-check-input" checked>
                        <label for="s-advertising-updates" class="form-check-label">Advertising Updates</label>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-check mb-0">
                        <input type="checkbox" id="s-week-in-review" class="form-check-input">
                        <label for="s-week-in-review" class="form-check-label">Week in Review</label>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-check mb-0">
                        <input type="checkbox" id="s-event-updates" class="form-check-input">
                        <label for="s-event-updates" class="form-check-label">Event Updates</label>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-check mb-0">
                        <input type="checkbox" id="s-startups-weekly" class="form-check-input">
                        <label for="s-startups-weekly" class="form-check-label">Startups Weekly</label>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-check mb-0">
                        <input id="s-podcasts" type="checkbox" class="form-check-input">
                        <label for="s-podcasts" class="form-check-label">Podcasts</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div> --}}
  
              <!-- Email field -->
              <form method="POST" action="{{ route('newsletter.store') }}" class="d-flex flex-sm-row flex-column mb-3 needs-validation" novalidate>
                @csrf
                <div class="input-group me-sm-3 mb-sm-0 mb-3">
                  <i class="bx bx-envelope position-absolute start-0 top-50 translate-middle-y ms-3 zindex-5 fs-5 text-muted"></i>
                  <input type="email" class="form-control form-control-lg rounded-3 ps-5" placeholder="Votre email" name="email" required>
                  <div class="invalid-tooltip position-absolute start-0 top-0 mt-n4">veillez entrer une adresse email valide!</div>
                </div>
                <button class="btn btn-lg btn-primary">S'abonner</button>
              </form>
              {{-- <div class="form-text fs-sm text-sm-start text-center">
                * Oui, j'accepte les <a href="#">termes</a> et la<a href="#">politique de confidentialité</a>.
              </div> --}}
            </div>
          </div>
        </div>
      </section>
</x-app-layout>