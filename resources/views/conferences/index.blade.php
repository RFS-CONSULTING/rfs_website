<x-app-layout>

    <section class="container">
        <!-- Breadcrumb -->
      <nav class="" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 pt-5">
          <li class="breadcrumb-item">
            <a href="{{  route('conference.index') }}"><i class="bx bx-home-alt fs-lg me-1"></i>Accueil</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Conferences</li>
        </ol>
      </nav>
    </section>
    <!-- Page content -->
    <section class="container mt-4 pt-lg-2 pb-4">

        <!-- Page title + Search form -->
        <div class="row gy-4 align-items-end mb-2 pb-md-3">
          <div class="col-lg-8 col-md-6">
            <h1 class="mb-0">Nos conferences</h1>
          </div>
          <div class="col-lg-4 col-md-6">
            <form class="input-group">
              <input type="text" placeholder="Rechercher" class="form-control form-control-lg rounded-3">
              <button type="submit" class="btn btn-icon btn-lg btn-primary rounded-3 ms-3">
                <i class='bx bx-search'></i>
              </button>
            </form>
          </div>
        </div>

        <!-- Blog posts slider -->
          <div class="row">
            <!-- Item -->
            @foreach ($conferences as $conference)
            <div class="col-md-4 h-auto py-3">
                <article class="card p-md-3 p-2 border-0 shadow-sm card-hover-primary h-100 mx-2">
                  <div class="card-body pb-0">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                      {{-- <a href="{{ route('conference.show', $conference->id)}}" class="badge fs-sm text-nav bg-secondary text-decoration-none position-relative zindex-2">Conference</a> --}}
                      <span class="badge fs-sm text-nav bg-secondary text-decoration-none position-relative zindex-2">Conference</span>
                      <span class="fs-sm text-muted">{{ $conference->date }}</span>
                    </div>
                    <h4 class="h5">
                      {{-- <a href="{{ route('conference.show', $conference->id)}}" class="stretched-link">{{ $conference->topic }}</a> --}}
                      <span class="">{{ $conference->topic }}</span>
                   
                    </h4>
                    <p class="mb-0 fs-sm">{{ $conference->description }}</p>
                    <div class="h-0 w-0 overflow-hidden" style="height:0px">
                          <a href="{{'https://www.youtube.com/watch?'.$conference->link_highlights_videos}}" class="btn-video stretched-link " data-bs-toggle="video">
                          </a>
                      </div>
                  </div>
                </article>
              </div>  
            @endforeach
        </div>
    </section>
</x-app-layout>