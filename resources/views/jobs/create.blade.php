<x-app-layout>
    <x-slot name="title">
        <title>Emplois - RFS Consulting</title>
        <meta property="og:description"   content="Un ambassadeur RFS est toute personne (étudiant ou professionnel), officiellement reconnu par la direction générale de
        RFS CONSULTING et la Coordination de RFS ACADEMIA, il/elle a pour rôle de parler et présenter les activités de RFS
        ACADEMIA sur le renforcement des capacités, vendre la bonne image de RFS CONSULTING. " />
        <meta property="og:url"           content="https://rfs-congo.com/ambassador" />
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="Devenez ambassadeurs de RFS ACADEMIA" /><meta property="og:image"         content="/assets/img/hero/hero-bg.jpeg" />
        <meta property="og:image"         content="/assets/img/hero/hero-bg.jpeg" />
    
    </x-slot>
    <!-- Breadcrumb -->
    <section class="container">
        <nav class="py-4 mb-2 my-lg-3" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                <a href=" {{ route('home') }}"><i class="bx bx-home-alt fs-lg me-1"></i>Accueil</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Emplois.</li>
            </ol>
        </nav>
    </section>
    <section class="container">
        <div class="d-flex justify-content-center">
            <div class=" ">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8 text-center mt-4">
                        <h3 class="title-mobile text-success">Rejoins l'équipe RFS Consulting</h3>
                        <hr>
                        <span>Tous les champs marqués d'un <span class="text-danger">*</span> sont obligatoires et doivent être remplis </span>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <form action="{{ route('jobs.store')}}" method="POST" class="" enctype="multipart/form-data">
                        @csrf
                        <div class="row rounded p-2 mt-2  ">
                            {{-- <div class="col-12 mt-2 text-center">
                              Dites nous qui vous êtes et parlez nous de votre projet en quelques lignes.
                            </div> --}}
                        
                            <div class="col-12 mt-5 text-center fw-bold text-success">INFORMATIONS</div>
                            <hr class="my-4 col-12"/>
    
                            <div class="col-md-6 mb-2">
                                <label for="exampleFormControlInput1" class="form-label ">Nom <span class="text-danger">*</span> </label>
                                <input type="text" name="nom" class="form-control" id="exampleFormControlInput1" placeholder="Entrez votre nom" required>
                            </div>

                            <div class="col-md-6 mb-2">
                                <label for="exampleFormControlInput1" class="form-label ">Post-nom <span class="text-danger">*</span> </label>
    
                                <input type="text" name="postnom" class="form-control" id="exampleFormControlInput1" placeholder="Entrez votre post-nom" required>
                            </div>

                            <div class="col-md-6 mb-2">
                                <label for="exampleFormControlInput1" class="form-label ">Prenom <span class="text-danger">*</span> </label>
                                <input type="text" name="prenom" class="form-control" id="exampleFormControlInput1" placeholder="Entrez votre prenom" required>
                            </div>
    

                            {{-- <div class="col-md-6 mb-2">
                                <label for="inputAddress" class="form-label">Adresse<span class="text-danger">*</span> </label>
                                <input type="text" name="address" class="form-control" id="inputAddress" placeholder="2100 avenue Gangi, ..." required>
                            </div> --}}

                            <div class="col-md-6 mb-2">
                                <label for="inputZip" class="form-label">Adresse e-mail<span class="text-danger">*</span></label>
                                <input type="email" name="email" class="form-control" placeholder="Entrez votre adresse e-mail"  required>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="inputZip" class="form-label">Numero de telephone<span class="text-danger">*</span></label>
                                <input type="phone" name="phone" class="form-control" placeholder="Entrez votre numero de telephone" required>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="cv" class="form-label">CV<span class="text-danger">*</span></label>
                                <input type="file" name="cv" class="form-control" placeholder="Sélectionnez votre cv" required>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="motivation" class="form-label">Lettre de motivation<span class="text-danger">*</span></label>
                                <input type="file" name="motivation" class="form-control" placeholder="Sélectionnez votre lettre de motivation" required>
                            </div>
                            <input type="hidden" name="job_id" value="{{ $job_id }}">
                            <div class="col-12 mt-5 text-center fw-bold text-success">Politique de confidentialité
                            </div>
                            <hr class="my-4 col-12"/>
                            <div class="col-12 text-justify text-mobile">
                                <div class="row">
                                    <span class="mb-4">
                                        <span class="fw-bold">1</span>. Collectes et utilisation des renseignements personnels pour les informations et l’authentification
                                    </span>
    
                                    <span class="mb-4">
                                        <span class="fw-bold">2</span>. Les informations sont conservées à partir de la date du remplissage de ce formulaire et jusqu’à l’étude de la
                                        candidature et approbation (validation) du candidat.
                                    </span>
                                    <span class="mb-4">
                                        <span class="fw-bold">3</span>. Les informations sont conservées et utilisées uniquement par les hébergeurs de RFS CONSULTING
                                    </span>
                                    <span class="mb-4">
                                        <span class="fw-bold">4</span>. Elles ne sont pas utilisées à d’autres fins que les activités organisées par RFS Consulting.
                                    </span>
                                    <span>
                                        <div class="form-check mt-4">
                                            <input class="form-check-input" type="checkbox" name="available_for_update" value="yes" id="flexCheckDefault" required >
                                            <label class="form-check-label" for="flexCheckDefault">
                                                J’ai lu la politique de confidentialité, Je suis d’accord et je jure de respecter les convention.
                                            </label>
                                        </div>
    
                                    </span>
                                </div>
                            </div>
    
                            <hr class="my-4 col-12"/>
                         
                            {{-- <div class="col-12 d-flex justify-content-center text-center mb-4">
                                <div class="g-recaptcha" data-sitekey="6LflI28dAAAAAJlnPGw1mbzIwzmw-k1SugGUo-xJ"></div>
                            </div> --}}
                            
                            <div class="col-12 d-flex justify-content-center text-center mb-4">
                                <a href="/" class="btn btn-danger mx-2" >Quitter </a>
                                <button type="submit" name="submit" class="btn btn-success mx-2">Envoyer </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>