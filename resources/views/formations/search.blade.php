<x-app-layout>

    <!-- Page content -->
    <section class="container">


      <!-- Breadcrumb -->
      <nav class="pt-4 mt-lg-3" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item">
            <a href="{{ route('home')}}"><i class="bx bx-home-alt fs-lg me-1"></i>Accueil</a>
          </li>
          <li class="breadcrumb-item">
            <a href="{{ route('formation.index')}}"><i class="bx bx-home-alt fs-lg me-1"></i>Formations</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page"> Recherche ({{ $searchquery }})</li>
        </ol>
      </nav>


      <!-- Page title + Filters -->
      <div class="d-lg-flex align-items-center justify-content-between py-4 mt-lg-2">
        <h1 class="me-3">Formations</h1>
        <div class="d-md-flex mb-3">
          {{-- <select class="form-select me-md-4 mb-2 mb-md-0" style="min-width: 240px;">
            <option value="All">Toutes catégories</option>
            <option value="Web Development">Web Development</option>
            <option value="Mobile Development">Mobile Development</option>
            <option value="Programming">Programming</option>
            <option value="Game Development">Game Development</option>
            <option value="Software Testing">Software Testing</option>
            <option value="Software Engineering">Software Engineering</option>
            <option value="Network & Security">Network &amp; Security</option>
          </select> --}}
          <div class="position-relative" style="min-width: 300px;">
            <input type="text" class="form-control pe-5" placeholder="Rechercher des formations">
            <i class="bx bx-search text-nav fs-lg position-absolute top-50 end-0 translate-middle-y me-3"></i>
          </div>
        </div>
      </div>


      <!-- Courses grid -->
      <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 gx-3 gx-md-4 mt-n2 mt-sm-0">
        @foreach ($formations as $formation)
        <!-- Item -->
        <div class="col pb-1 pb-lg-3 mb-4">
          <article class="card h-100 border-0 shadow-sm">
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
                <a href="{{ route('formation.show', $formation->slug)}}">{{ $formation->title }}</a>
              </h3>
              <p class="fs-sm mb-2"> par {{ $formation->instructor->name }}</p>
              <p class="fs-lg fw-semibold text-primary mb-0">{{ $formation->actual_price}} $</p>
            </div>
            <div class="card-footer d-flex align-items-center fs-sm text-muted py-4">
              <div class="d-flex align-items-center me-4">
                <i class="bx bx-time fs-xl me-1"></i>
                {{ $formation->nb_hours }} heures
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
      {{ $formations->links('vendor.pagination.pagination')}}
     

    </section>
    <!-- Sign up CTA -->
    {{-- <section>
      <div class="container bg-secondary rounded-3  py-5 ">
          <div class="row align-items-center">
            <div class="col-md-5 text-center text-md-start ps-md-5 ps-lg-0 ps-xl-5 pb-2 pb-md-0 mb-4 mb-md-0">
              <p class="lead mb-3">Prêt à commencer?</p>
              <h2 class="h1 pb-2 pb-md-4">Faites passer vos <span class="text-primary">compétences</span> au niveau supérieur</h2>
              <a href="#" class="btn btn-primary btn-lg">Sign up now!</a>
            </div>
            <div class="col-lg-6 col-md-7">
              <div class="d-table mx-auto">
                <img src="/assets/img/landing/steps/04-dark.svg" class="d-dark-mode-none" width="380" alt="Illustration">
                <img src="/assets/img/landing/steps/04-light.svg" class="d-none d-dark-mode-block" width="380" alt="Illustration">
              </div>
            </div>
          </div>
        </div>
    </section> --}}
</x-app-layout>