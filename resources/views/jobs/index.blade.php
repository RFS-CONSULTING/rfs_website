<x-app-layout>
  
    <x-slot name="title">
      <title>Emplois -- RFS CONSULTING</title>
      <meta name="description" content="Notre équipe de consultants nationaux et internationaux vous accompagne dans les démarches pour la réussite de vos projets"/>
      <meta property="og:url"           content="{{route('jobs.index')}}" />
      <meta property="og:type"          content="website" />
      <meta property="og:title"         content="Emplois -- RFS CONSULTING" />
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
              <li class="breadcrumb-item active" aria-current="page">Emplois</li>
            </ol>
          </nav>
  
  
  
          <!-- Courses grid -->
          <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 gx-3 gx-md-4 mt-n2 mt-sm-0">
            @foreach ($jobs as $job)
            <!-- Item -->
            <div class="col pb-1 pb-lg-3 mb-4 col-sm-12 col-xl-4 col-md-12">
              <article class="card h-100 border-0 shadow-sm">
                <div class="position-relative">
                    <a target="_blank" href="{{ route('jobs.show',$job->id) }}" class="d-block position-absolute w-100 h-100 top-0 start-0"></a>                   
                  <a href="#">
                    <img  src={{ 'storage/'.$job->image_path}} class="card-img-top" alt="Image">
                  </a>
                  </div>
                <div class="card-body pb-3">
                  <h3 class="h5 mb-2">
                    {{ $job->title }}
                      <a href="{{ route('jobs.show',$job->id) }}" class="btn btn-primary flex-shrink-0 me-md-4 mb-md-0 mb-sm-4 mb-3">
                        Détails
                      </a>
                    {{-- <a href="{{ route('formation.show', $job->slug)}}">{{ $job->title }}</a> --}}
                  </h3>
                </div>
                {{-- <div class="card-footer d-flex align-items-center fs-sm text-muted py-4">
                  <div class="d-flex align-items-center me-4">
                    {{ $job->title }}
                  </div>
                </div> --}}
              </article>
            </div>
            @endforeach
          </div>
          {{ $jobs->links('vendor.pagination.pagination')}}
        </section>
        
  </x-app-layout>