<x-app-layout>
    
  <x-slot name="title">
    <title>Contact -- RFS CONSULTING</title>
    <meta name="description" content="Nous sommes missionnés pour nos études précises, nos conseils avisés, nos expertises et évaluations justes, et nos réalisations réussites."/>
    <meta property="og:url"           content="https://rfs-congo.com/contact" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Contact -- RFS CONSULTING" />
    <meta property="og:description"   content="Nous sommes missionnés pour nos études précises, nos conseils avisés, nos expertises et évaluations justes, et nos réalisations réussites." />
    <meta property="og:image"         content="/assets/img/hero/hero-bg.jpeg" />
  </x-slot>

      <div>
        <section class="container">

          <!-- Breadcrumb -->
          <nav class="pt-4 mt-lg-3" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item">
                <a href="{{ route('home')}}"><i class="bx bx-home-alt fs-lg me-1"></i>Accueil</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Contact</li>
            </ol>
          </nav>
  
          <!-- Page title -->
          <h1 class="pt-4 mt-lg-3 pb-3 pb-lg-4">Nous contacter</h1>
  
          <div class="row pb-5 mb-md-2 mb-lg-4 mb-xl-5">
  
            <!-- Contact details -->
            <div class="col-xl-5 col-md-6 mb-4 mb-md-0">
              <div class="card card-hover mb-3">
                <div class="card-body d-flex align-items-start">
                  <i class="bx bx-envelope fs-3 bg-secondary text-primary d-inline-block rounded-circle p-3"></i>
                  <div class="ps-4">
                    <h3 class="h4 pb-1 mb-2">Envoyez-nous un email</h3>
                    <p class="pb-1 mb-2">N'hésitez pas à nous envoyer un message. Nous vous répondrons dès que possible.</p>
                    <a href="mailto:info@rfs-congo.com" class="btn btn-link stretched-link fs-base px-0">
                      Laisser un message
                      <i class="bx bx-right-arrow-alt fs-4 ms-1"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="card card-hover mb-3">
                <div class="card-body d-flex align-items-start">
                  <i class="bx bx-phone-call fs-3 bg-secondary text-primary d-inline-block rounded-circle p-3"></i>
                  <div class="ps-4">
                    <h3 class="h4 pb-1 mb-2">Appelez à tout moment</h3>
                    <p class="pb-1 mb-2">Si vous avez besoin d'une assistance immédiate, n'hésitez pas à nous appeler à tout moment.</p>
                    <a href="tel:00243817663799" class="btn btn-link stretched-link fs-base px-0">(243) 817-663-799</a>
                  </div>
                </div>
              </div>
              <div class="card card-hover">
                <div class="card-body d-flex align-items-start">
                  <i class="bx bx-map fs-3 bg-secondary text-primary d-inline-block rounded-circle p-3"></i>
                  <div class="ps-4">
                    <h3 class="h4 pb-1 mb-2">Rendez nous visite</h3>
                    <p class="pb-1 mb-2">364, avenue MASANO, 1ere Rue Limete, Réf. Dépôt Kin Marché
                      Limete / Industriel ( Funa ), Ville de Kinshasa, RDC</p>
                    <a href="#" class="btn btn-link stretched-link fs-base px-0">
                      Obtenir l'itinéraire
                      <i class="bx bx-right-arrow-alt fs-4 ms-1"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
  
            <!-- Map -->
            <div class="col-md-6 offset-xl-1">
              <div class="d-flex flex-column h-100 shadow-sm rounded-3 overflow-hidden">
                <iframe class="d-block h-100"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3978.392682239128!2d15.32543962755995!3d-4.337155541769343!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a6a3799b8914037%3A0x371fac9a53c8814c!2sRFS%20CONSULTING!5e0!3m2!1sfr!2ssg!4v1644153017116!5m2!1sfr!2ssg" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
            </div>
          </div>
        </section>
  
        <section>
          <!-- Contact form -->
          <div class="bg-secondary rounded-3 py-5  ">
            <div class="container-fluid">
              @livewire('contact')
            </div>
          </div>
        </section>
      </div>
</x-app-layout>





    
