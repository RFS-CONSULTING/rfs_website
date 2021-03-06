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
              <li class="breadcrumb-item active" aria-current="page">Réalisations - projets</li>
            </ol>
          </nav>
  
  
  
          <!-- Courses grid -->
          <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 gx-3 gx-md-4 mt-n2 mt-sm-0">
            @foreach ($realisations as $realisation)
            <!-- Item -->
            <div class="col pb-1 pb-lg-3 mb-4 col-sm-12 col-xl-4 col-md-12">
              <article class="card h-100 border-0 shadow-sm">
                <div class="position-relative">
                  @if (!empty($realisation->link))
                    <a target="_blank" href="{{ $realisation->link }}" class="d-block position-absolute w-100 h-100 top-0 start-0"></a>                   
                  @endif
                  <a data-bs-toggle="modal"  data-img="{{ 'storage/'.$realisation->imagepath}}" data-bs-target="#modal_project" class="modal_local" href="#">
                    <img src={{ 'storage/'.$realisation->imagepath}} class="card-img-top" alt="Image"/>
                  </a>
                  </div>
                <div class="card-body pb-3">
                  <h3 class="h5 mb-2">
                    {{ $realisation->title }}
                    @if (!empty($realisation->link))
                      <a target="_blank" href="{{ $realisation->link }}" class="btn btn-primary flex-shrink-0 me-md-4 mb-md-0 mb-sm-4 mb-3">
                        voir la carte
                      </a>                   
                    @endif
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
         
          <div class="modal fade" id="modal_project" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  {{-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> --}}
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img id="modalImg"  src="" class="card-img-top" alt="Image"/>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
              </div>
            </div>
          </div>
        </section>

        <script>
          var modals = document.querySelectorAll('.modal_local');
          modals.forEach(modal => {
            modal.addEventListener('click',(e)=>{
              var modal_img = document.querySelector('#modalImg');
              modal_img.src = e.target.src
            })
          });
        </script>

  </x-app-layout>