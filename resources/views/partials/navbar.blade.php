     <!-- Navbar -->
      <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page -->
      <header class="header navbar navbar-expand-lg navbar-light bg-light navbar-sticky">
        <div class="container px-3">
          <a href="{{ route('home')}}" class="navbar-brand pe-5">
            <img src="assets/img/logo.png" width="50" alt="Logo RFS Consulting">
            
          </a>
          <div id="navbarNav" class="offcanvas offcanvas-end">
            <div class="offcanvas-header border-bottom">
              <h5 class="offcanvas-title">Menu</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
               
                <li class="nav-item">
                  <a href="#" class="nav-link">Accueil</a>
                </li>
                
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Formations</a>
                  <ul class="dropdown-menu">
                    <li><a href="#" class="dropdown-item">Sig et Cartographie  </a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Blog</a>
                </li>
            
                <li class="nav-item">
                  <a href="#" class="nav-link">Formateur</a>
                </li>
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">A propos</a>
                  <ul class="dropdown-menu">
                    <li><a href="#" class="dropdown-item">Qui sommes-nous ?</a></li>
                    <li><a href="#" class="dropdown-item">Notre équipe</a></li>
                    <li><a href="#" class="dropdown-item">Nos réalisations</a></li>
                    <li><a href="#" class="dropdown-item">Contactez-nous</a></li>

                  </ul>
                </li>
               
              </ul>
            </div>
            <div class="offcanvas-footer border-top">
              <a href="https://themes.getbootstrap.com/product/silicon-business-technology-template-ui-kit/" class="btn btn-primary w-100" target="_blank" rel="noopener">
                <i class="bx bx-cart fs-4 lh-1 me-1"></i>
                &nbsp;Buy now
              </a>
            </div>      
          </div>
          <div class="form-check form-switch mode-switch pe-lg-1 ms-auto me-4" data-bs-toggle="mode">
            <input type="checkbox" class="form-check-input" id="theme-mode">
            {{-- <label class="form-check-label d-none d-sm-block" for="theme-mode">Light</label> --}}
            <label class="form-check-label d-none d-sm-block" for="theme-mode">Mode nuit</label>
          </div>
          <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a href="https://themes.getbootstrap.com/product/silicon-business-technology-template-ui-kit/" class="btn btn-primary btn-sm fs-sm rounded d-none d-lg-inline-flex" target="_blank" rel="noopener">
            <i class="bx bx-user fs-5 lh-1 me-1"></i>
            &nbsp;Connexion
          </a>
        </div>
    </header>
