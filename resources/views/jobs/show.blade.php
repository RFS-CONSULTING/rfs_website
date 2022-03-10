<x-app-layout>

    <x-slot name="title">
      <title>{{ $job->title }} -- RFS CONSULTING</title>
      <meta name="description" content="Notre équipe de consultants nationaux et internationaux vous accompagne dans les démarches pour la réussite de vos projets"/>
      <meta property="og:url"           content="{{ route('jobs.show',$job->id) }}" />
      <meta property="og:type"          content="website" />
      <meta property="og:title"         content="{{ $job->title }} -- RFS CONSULTING" />
      <meta property="og:description"   content="Notre équipe de consultants nationaux et internationaux vous accompagne dans les démarches pour la réussite de vos projets" />
      <meta property="og:image"         content="{{'/storage/'.$job->image_path}}" />
    </x-slot>
  
      <!-- Hero -->
    <section class="jarallax dark-mode bg-dark pt-2 pt-lg-3 pb-lg-5" data-jarallax data-speed="0.4">
        <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-70"></span>
        <div id="formation_jaralax_img" class="jarallax-img" style="background-image: url({{'/storage/'.$job->image_path}});"></div>
        <div class="container position-relative zindex-5 pb-5">
  
            <!-- Breadcrumb -->
            <nav class="py-4" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('home')}}"><i class="bx bx-home-alt fs-lg me-1"></i>Accueil</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('jobs.index')}}">Emplois</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">{{ $job->title }}</li>
                </ol>
            </nav>
    
    
                <!-- Title -->
            <h1>{{ $job->title }}</h1>
            {{-- <p class="fs-lg text-light opacity-70">{{ $job->description }}</p> --}}
  
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
                        <h4 class="mb-4">Conditions :</h4>
                        <ul class="list-unstyled pb-3">
                        <li class="d-flex align-items-center mb-2">
                            Bac +3
                        </li>
                        <li class="d-flex align-items-center mb-2">
                            Maîtrise de l'informatique et internet
                        </li>
                        <li class="d-flex align-items-center mb-2">
                            Maîtrise de plusieurs langues un atout
                        </li>
                        </ul>
                        <a href="{{ route('jobs.create',$job->id)}}" class="btn btn-primary btn-lg shadow-primary">
                        Envoyer votre candidature ici
                        </a>
                    </div>
                    </div>
                </div>
                </div>
            </aside>
            <!-- Content -->
            <div class="col-xl-7 col-lg-8 col-md-7 order-md-1 mb-5">
                <h2 class="h1 pb-md-2 pb-lg-3">Description de l'offre</h2>
                <p class="pb-4 mb-3">{{ $job->description }}</p> 
            </div>
        </div>
    </section>
</x-app-layout>