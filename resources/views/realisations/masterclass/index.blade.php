<x-app-layout>
  
    <x-slot name="title">
      <title>réalisations -- RFS CONSULTING</title>
      <meta name="description" content="Notre équipe de consultants nationaux et internationaux vous accompagne dans les démarches pour la réussite de vos projets"/>
      <meta property="og:url"           content="https://rfs-congo.com/formations-certifiantes" />
      <meta property="og:type"          content="website" />
      <meta property="og:title"         content="Nos Formations -- RFS CONSULTING" />
      <meta property="og:description"   content="Notre équipe de consultants nationaux et internationaux vous accompagne dans les démarches pour la réussite de vos projets" />
      <meta property="og:image"         content="/assets/img/hero/hero-bg.jpeg" />
    </x-slot>
  
        <!-- Page content -->
        <section class="container">
  
  
          <!-- Breadcrumb -->
          <nav class="pt-4 mt-lg-3 mb-4" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item">
                <a href="{{ route('home')}}"><i class="bx bx-home-alt fs-lg me-1"></i>Accueil</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Réalisations - masterclass</li>
            </ol>
          </nav>
  
  
  
          <!-- Courses grid -->
          <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 gx-3 gx-md-4 mt-n2 mt-sm-0">
            @foreach ($realisations as $realisation)
            <!-- Item -->
            <div class="col pb-1 pb-lg-3 mb-4 col-sm-12 col-xl-4 col-md-12">
              <article class="card h-100 border-0 shadow-sm">
                <div class="position-relative">
                  <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center zindex-5">
                    <a href="{{$realisation->youtube}}" class="btn btn-video btn-icon btn-xl stretched-link bg-white" data-bs-toggle="video">
                      <i class="bx bx-play"></i>
                    </a>
                  </div>
                  <img src={{ 'storage/'.$realisation->imagepath}} class="card-img-top" alt="Image">
                </div>
                <div class="card-body pb-3">
                  <h3 class="h5 mb-2">
                    {{ $realisation->title }}
                    {{-- <a href="{{ route('formation.show', $realisation->slug)}}">{{ $realisation->title }}</a> --}}
                  </h3>
                </div>
                {{-- <div class="card-footer d-flex align-items-center fs-sm text-muted py-4">
                  <div class="d-flex align-items-center me-4">
                    {{ $realisation->title }}
                  </div>
                </div> --}}
              </article>
            </div>
            @endforeach
          </div>
          {{ $realisations->links('vendor.pagination.pagination')}}
         
  
        </section>
        
  </x-app-layout>