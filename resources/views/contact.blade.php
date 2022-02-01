<x-app-layout>
    
      <!-- Page content -->
  
      
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
                      Obtenir des directions
                      <i class="bx bx-right-arrow-alt fs-4 ms-1"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
  
            <!-- Map -->
            <div class="col-md-6 offset-xl-1">
              <div class="d-flex flex-column h-100 shadow-sm rounded-3 overflow-hidden">
                <iframe class="d-block h-100" src="https://maps.google.com/maps?q=RFS%20consulting&t=&z=17&ie=UTF8&iwloc=&output=embed" style="border: 0; min-height: 300px;" allowfullscreen="" loading="lazy"></iframe>
              </div>
            </div>
          </div>
        </section>
  
        <section>
          <!-- Contact form -->
          <div class="bg-secondary rounded-3 py-5  ">
            <div class="container-fluid">
              <form class="needs-validation row justify-content-center py-lg-3 py-xl-4" novalidate>
                <div class="col-xl-8 col-lg-9 col-md-10 col-sm-11">
                  <h2 class="h1 pb-lg-1 mb-4">Laissez-nous un message</h2>
                  <p class="fs-lg text-muted pb-lg-1 mb-4">Avez-vous un projet en tête? Pour demander un devis, contactez-nous directement ou remplissez le formulaire et faites-nous savoir comment nous pouvons vous aider.</p>
                  <div class="row">
                    <div class="col-sm-6 mb-4">
                      <label for="name" class="form-label fs-base">Nom complet</label>
                      <input type="text" id="name" class="form-control form-control-lg" required>
                      <div class="invalid-feedback">S'il vous plaît entrez votre nom!</div>
                    </div>
                    <div class="col-sm-6 mb-4">
                      <label for="email" class="form-label fs-base">Adresse e-mail</label>
                      <input type="email" id="email" class="form-control form-control-lg" required>
                      <div class="invalid-feedback">Veuillez fournir une adresse email valide!</div>
                    </div>
                    <div class="col-12 mb-4">
                      <label for="message" class="form-label fs-base">Message</label>
                      <textarea id="message" class="form-control form-control-lg" rows="4" required></textarea>
                      <div class="invalid-feedback">Veuillez écrire votre message!</div>
                    </div>
                  </div>
                  <div class="form-check mb-4">
                    <input type="checkbox" id="terms" class="form-check-input" required>
                    <label for="terms" class="form-check-label fs-base">J'accepte les <a href="#">Termes &amp; Conditions</a></label>
                  </div>
                  <button type="submit" class="btn btn-primary btn-lg shadow-primary">Envoyer le message</button>  
                </div>
              </form>
            </div>
          </div>
        </section>
      </div>
</x-app-layout>





    
