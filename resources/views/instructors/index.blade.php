<x-app-layout>

  <x-slot name="title">
    <title>Devenez Formateur chez RFS ACADEMIA</title>
    <meta property="og:description"   content="Un ambassadeur RFS est toute personne (étudiant ou professionnel), officiellement reconnu par la direction générale de
    RFS CONSULTING et la Coordination de RFS ACADEMIA, il/elle a pour rôle de parler et présenter les activités de RFS
    ACADEMIA sur le renforcement des capacités, vendre la bonne image de RFS CONSULTING. " />
    <meta name="description" content="RFS ACADEMIA est une plateforme de prestations et renforcement des capacités via des formations professionnelles notamment la maîtrise des outils numériques des technologies géo-spatiales dont le Système d'Information Géographique (SIG), la programmation web, informatique appliquée. Initié par la société RFS CONSULTING. Notre équipe de consultants/Formateurs accompagne les porteurs de projets SIG (cartographie) et assure les formations auprès des établissements, des scientifiques (professionnels ou étudiants) en ligne (zoom, Google Meet et notre site web www.rfs-congo.com) et en présentiel (Kinshasa-Limete/RDC).">
    <meta name="author" content="Chadrack KANZA">
    <meta property="og:url"           content="https://rfs-congo.com/instructors" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Devenez Formateur chez RFS ACADEMIA" />
    <meta property="og:description"   content="RFS ACADEMIA est une plateforme de prestations et renforcement des capacités via des formations professionnelles notamment la maîtrise des outils numériques des technologies géo-spatiales dont le Système d'Information Géographique (SIG), la programmation web, informatique appliquée. Initié par la société RFS CONSULTING. Notre équipe de consultants/Formateurs accompagne les porteurs de projets SIG (cartographie) et assure les formations auprès des établissements, des scientifiques (professionnels ou étudiants) en ligne (zoom, Google Meet et notre site web www.rfs-congo.com) et en présentiel (Kinshasa-Limete/RDC)." />
    <meta property="og:image"         content="/assets/img/hero/hero-bg.jpeg" />
    
  </x-slot>

   <!-- Hero -->
  <section class="container jarallax position-relative d-flex align-items-center py-5 bg-light mb-5 " style="background-image: url(assets/img/landing/hero-bg-mentor.png);" data-jarallax data-img-position="0% 100%" data-speed="0.5">
    <div class="position-relative zindex-5 ">
      <div class="row justify-content-md-start justify-content-center pt-0">
        <div class="col-md-9 col-sm-9 order-md-1 order-2 d-flex flex-column justify-content-between mt-4 pt-2 text-md-start text-center">
          <div class="">
            <!-- Text -->
            <h1 class="display-1 mb-md-5 mb-3 pb-3 mt-lg-5">
              <span class="text-gradient-primary">Devenez un </span> <span class="text-gradient-primary">Formateur</span>
            </h1>
            <div class="d-md-flex align-items-md-start">
              <a href="{{ route('instructor.create')}}" class="btn btn-lg btn-primary flex-shrink-0 me-md-4 mb-md-0 mb-sm-4 mb-3">Inscrivez-vous</a>
              <p class="d-lg-block  d-none mb-0 ps-md-3">
                RFS ACADEMIA est une plateforme de prestations et renforcement des capacités via des formations professionnelles notamment la maîtrise des outils numériques des technologies géo-spatiales dont le Système d'Information Géographique (SIG), la programmation web, informatique appliquée. </p>
            </div>
          </div>

          <!-- Scroll down btn -->
          <div class="d-inline-flex align-items-center justify-content-center justify-content-md-start position-relative">
            <a href="#raison" data-scroll data-scroll-offset="100" class="btn btn-video btn-icon rounded-circle shadow-sm flex-shrink-0 stretched-link me-3">
              <i class="bx bx-chevron-down"></i>
            </a>
            <span class="fs-sm">Découvrir plus</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services -->
  <section class="container bg-secondary pb-md-2 pb-lg-5" id="raison">
    <div class="" style="margin-top: -60px; padding-top: 0px;"></div>
    <div class=" pb-4 pt-5">
      <h2 class="h1 text-center text-md-start mb-lg-4 pt-1 pt-md-4">Pourquoi devenir <span class="bg-primary rounded-lg px-2  text-white">Formateur</span> ?</h2>
      <div class="row align-items-center  mb-lg-2">
        <div class="col-md-8 text-center text-md-start">
          {{-- <p class=" text-muted mb-md-0">Nous offrons des services d' études, expertises, ingénierie et renforcement des capacités dans les domaines de Gestion de l' environnement, Aménagement du territoire, Géomatique, Ingénierie forestière.</p> --}}
        </div>
        {{-- <div class="col-md-4 d-flex justify-content-center justify-content-md-end">
          <a href="{{ route('service.show', 'test')}}" class="btn btn-outline-primary btn-lg">Voir tous nos services</a>
        </div> --}}
      </div>
      <div class="row ">
        <!-- Item -->
        <div class="col-md-4  ">
          <span class="card card-hover h-100 border-0 shadow-sm text-decoration-none px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 ms-xl-2">
            <div class="card-body ">
              <p class=" text-body mb-0">Développer les compétences des humains, c’est développer le pays.</p>
            </div>
          </span>
        </div>
        
        <!-- Item -->
        <div class="col-md-4  ">
          <span class="card border-0  card-hover h-100  shadow-sm text-decoration-none px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 ms-xl-2">
            <div class="card-body ">
              <p class=" text-body mb-0">Partagez vos connaissances, transmettez votre passion.</p>
            </div>
          </span>
        </div>
        
        <!-- Item -->
        <div class="col-md-4">
          <span class="card card-hover h-100 border-0 shadow-sm text-decoration-none px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 ms-xl-2">
            <div class="card-body ">
              <p class=" text-body mb-0">Travaillez d'où vous voulez, quand vous voulez, selon vos horaires.</p>
            </div>
          </span>
        </div>
        <div class="col-md-12 mt-4 text-center">
          <a href="{{ route('instructor.create')}}" class="btn btn-lg btn-primary flex-shrink-0 me-md-4 mb-md-0 mb-sm-4 mb-3">Inscrivez-vous</a>
        </div>

      </div>
    </div>
  </section>

  <!-- Qui peut devenir -->
  <section class="container pt-5 pb-md-2 pb-lg-5" id="">
    <div class="" style="margin-top: -60px; padding-top: 0px;"></div>
    <div class=" pb-4 pt-5">
      <h2 class="h1 text-center text-md-start mb-lg-4 pt-1 pt-md-4">Qui peut devenir <span class="bg-primary rounded-lg px-2 text-white">Formateur</span> ?</h2>
      <div class="row align-items-center  mb-lg-2">
        <div class="col-md-8 text-center text-md-start">
          {{-- <p class=" text-muted mb-md-0">Nous offrons des services d' études, expertises, ingénierie et renforcement des capacités dans les domaines de Gestion de l' environnement, Aménagement du territoire, Géomatique, Ingénierie forestière.</p> --}}
        </div>
        {{-- <div class="col-md-4 d-flex justify-content-center justify-content-md-end">
          <a href="{{ route('service.show', 'test')}}" class="btn btn-outline-primary btn-lg">Voir tous nos services</a>
        </div> --}}
      </div>
      <div class="row ">
        <!-- Item -->
        <div class="col-md-6 ">
          <span class="card card-hover h-100 border-0 shadow-sm text-decoration-none px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 ms-xl-2">
            <div class="card-body ">
              <p class=" text-body mb-0">Vous avez au moins 5 ans d'expériences dans votre domaine ?</p>
            </div>
          </span>
        </div>
        
        <!-- Item -->
        <div class="col-md-6  ">
          <span class="card border-0  card-hover h-100  shadow-sm text-decoration-none px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 ms-xl-2">
            <div class="card-body ">
              <p class=" text-body mb-0">Vous avez minimum 8h par semaine de disponible pour transmettre votre passion ?</p>
            </div>
          </span>
        </div>
        
        <div class="col-md-12 mt-4 text-center">
          <a href="{{ route('instructor.create')}}" class="btn btn-lg btn-primary flex-shrink-0 me-md-4 mb-md-0 mb-sm-4 mb-3">Inscrivez-vous</a>
        </div>
       

      </div>
    </div>
  </section>

  <!-- rôle  -->
  <section class="container bg-secondary pt-5 pb-md-2 pb-lg-5" id="">
    <div class="" style="margin-top: -60px; padding-top: 0px;"></div>
    <div class=" pb-4 pt-5">
      <h2 class="h1 text-center text-md-start mb-lg-4 pt-1 pt-md-4">Votre rôle en tant que <span class="bg-primary rounded-lg px-2 text-white" >Formateur</span> ?</h2>
      <div class="row align-items-center  mb-lg-2">
        <div class="col-md-8 text-center text-md-start">
          {{-- <p class=" text-muted mb-md-0">Nous offrons des services d' études, expertises, ingénierie et renforcement des capacités dans les domaines de Gestion de l' environnement, Aménagement du territoire, Géomatique, Ingénierie forestière.</p> --}}
        </div>
        {{-- <div class="col-md-4 d-flex justify-content-center justify-content-md-end">
          <a href="{{ route('service.show', 'test')}}" class="btn btn-outline-primary btn-lg">Voir tous nos services</a>
        </div> --}}
      </div>
      <div class="row ">
    
        <!-- Item -->
        <div class="col-md-4 mb-3">
          <span class="card card-hover h-100 border-0 shadow-sm text-decoration-none px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 ms-xl-2">
            <div class="card-body ">
              <p class=" text-body mb-0">Animer la formation sous la supervision de RFS Academia</p>
            </div>
          </span>
        </div>

        <!-- Item -->
        <div class="col-md-4 mb-3">
          <span class="card card-hover h-100 border-0 shadow-sm text-decoration-none px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 ms-xl-2">
            <div class="card-body ">
              <p class=" text-body mb-0">Tenir des séances en visioconférence avec les participants</p>
            </div>
          </span>
        </div>

        <!-- Item -->
        <div class="col-md-4  mb-3">
          <span class="card card-hover h-100 border-0 shadow-sm text-decoration-none px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 ms-xl-2">
            <div class="card-body ">
              <p class=" text-body mb-0">Évaluer les niveaux des participants</p>
            </div>
          </span>
        </div>

        <!-- Item -->
        <div class="col-md-4 mb-3 ">
          <span class="card card-hover h-100 border-0 shadow-sm text-decoration-none px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 ms-xl-2">
            <div class="card-body ">
              <p class=" text-body mb-0">Faire le rapport sur l'état d'avancement de la formation</p>
            </div>
          </span>
        </div>

        <!-- Item -->
        <div class="col-md-4  mb-3">
          <span class="card card-hover h-100 border-0 shadow-sm text-decoration-none px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 ms-xl-2">
            <div class="card-body ">
              <p class=" text-body mb-0">Participer au marketing</p>
            </div>
          </span>
        </div>
        
      </div>
    </div>
  </section>

  <!-- Avantages -->
  <section class="container pt-5 pb-md-2 pb-lg-5" id="">
    <div class="" style="margin-top: -60px; padding-top: 0px;"></div>
    <div class=" pb-4 pt-5">
      <h2 class="h1 text-center text-md-start mb-lg-4 pt-1 pt-md-4">Vos avantages en tant que <span class="bg-primary rounded-lg px-2 text-white">Formateur</span> ?</h2>
      <div class="row align-items-center  mb-lg-2">
        <div class="col-md-8 text-center text-md-start">
          {{-- <p class=" text-muted mb-md-0">Nous offrons des services d' études, expertises, ingénierie et renforcement des capacités dans les domaines de Gestion de l' environnement, Aménagement du territoire, Géomatique, Ingénierie forestière.</p> --}}
        </div>
        {{-- <div class="col-md-4 d-flex justify-content-center justify-content-md-end">
          <a href="{{ route('service.show', 'test')}}" class="btn btn-outline-primary btn-lg">Voir tous nos services</a>
        </div> --}}
      </div>
      <div class="row ">

        <!-- Item -->
        <div class="col-md-4  mb-3">
          <span class="card card-hover h-100 border-0 shadow-sm text-decoration-none px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 ms-xl-2">
            <div class="card-body ">
              <p class=" text-body mb-0">35% du montant payé par chaque participant</p>
            </div>
          </span>
        </div>

        <!-- Item -->
        <div class="col-md-4  mb-3">
          <span class="card card-hover h-100 border-0 shadow-sm text-decoration-none px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 ms-xl-2">
            <div class="card-body ">
              <p class=" text-body mb-0">Attestation de service rendu</p>
            </div>
          </span>
        </div>
        
        <div class="col-md-12 mt-4 text-center">
          <a href="{{ route('instructor.create')}}" class="btn btn-lg btn-primary flex-shrink-0 me-md-4 mb-md-0 mb-sm-4 mb-3">Inscrivez-vous</a>
        </div>
        
      </div>
    </div>
  </section>

</x-app-layout>