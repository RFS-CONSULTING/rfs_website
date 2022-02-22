<x-app-layout>

    <x-slot name="title">
        <title>Masterclass edition 1</title>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta name="description" content="Nous sommes missionnés pour nos études précises, nos conseils avisés, nos expertises et évaluations justes, et nos réalisations réussites.">
        <link href="/assets/img/favicon.png" rel="icon">
        <meta property="og:url"           content="https://rfs-congo.com/masterclass-ed-01/create" />
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="Masterclass edition 1" />
        <meta property="og:description"   content="Nous sommes missionnés pour nos études précises, nos conseils avisés, nos expertises et évaluations justes, et nos réalisations réussites" />
        <meta property="og:image"         content="/assets/img/hero-academia.jpg" />
        
    </x-slot>
    <!-- Breadcrumb -->
    <section class="container">
        <nav class="py-4 mb-2 my-lg-3" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                <a href=" {{ route('home') }}"><i class="bx bx-home-alt fs-lg me-1"></i>Accueil</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Masterclass</li>
            </ol>
        </nav>
    </section>

    <section class="container">
        <div class="d-flex justify-content-center">
            <div class="container ">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8 text-center mt-4">
                        <h4 class="my-4 mt-5 title-mobile formulaire ">FORMULAIRE D'INSCRIPTION</h4> 
                        <h3 class="title-mobile text-success">Masterclass édition 1, SIG et Télédétection</h3>
                        <hr>
                        <small>Tous les champs marqués d'un <span class="text-danger">*</span> sont obligatoires et doivent être remplis </small>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <form action="/masterclass-ed-01" method="POST" class="">
                        @csrf
                        <div class="row  shadow rounded p-2 mt-2  ">
                            <div class="col-12 mt-5 text-center fw-bold text-success">INFORMATIONS PERSONNELLES</div>
                            <hr class="my-4 col-12"/>
    
                            <div class="col-md-6 mb-2">
                                <label for="exampleFormControlInput1" class="form-label ">Nom <span class="text-danger">*</span> </label>
                                <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Entrez votre nom" required>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="exampleFormControlInput1" class="form-label ">Post-nom <span class="text-danger">*</span> </label>
    
                                <input type="text" name="secondname" class="form-control" id="exampleFormControlInput1" placeholder="Entrez votre post-nom" required>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="exampleFormControlInput1" class="form-label ">Prenom <span class="text-danger">*</span> </label>
                                <input type="text" name="firstname" class="form-control" id="exampleFormControlInput1" placeholder="Entrez votre prenom" required>
                            </div>
                            
                            <div class="col-md-6 mb-2">
                                <label for="exampleFormControlInput1" class="form-label ">Quel est votre statut ? <span class="text-danger">*</span> </label>
                                <select class="form-select " name="statut" aria-label="Default select example" required onchange="changeStatus(this)">
                                    <option value="" selected>Choisissez votre statut</option>
                                    <option value="Etudiant">Etudiant</option>
                                    <option value="Professionnel">Professionnel</option>
                                    <option value="Autre">Autre</option>
                                </select>
                            </div>
                        
                            <div class="col-md-6 mb-2">
                                <label for="exampleFormControlInput1" class="form-label ">Quel est votre domaine d'activité ? <span class="text-danger">*</span> </label>
                                <input type="text" name="domaine" class="form-control" id="exampleFormControlInput1" placeholder="Entrez votre domaine d'activité ou de formation" required>
                            </div>
                            <div class="col-md-6 mb-2" id="autreStatut">
                                <label for="inputAddress" class="form-label">Autre statut<span class="text-danger">*</span> </label>
                                <input type="text" name="autreStatut" class="form-control" id="" placeholder="Veuillez entrer votre statut" >
                            </div>
                            {{-- <div class="col-12 mb-2">
                                <label for="exampleFormControlInput1" class="form-label ">Veuillez indiquer le titre du
                                    travail/projet que vous
                                    présenterez lors de la
                                    conférence (Réservé aux intervenant(e)s) </label>
                                <input type="text" name="project" class="form-control" id="exampleFormControlInput1" placeholder=" Exemple : Cartographie des espaces verts dans la Ville de Kikwit" >
                            </div> --}}
    
                            <div class="col-md-6 mb-2">
                                <label for="inputAddress" class="form-label">Adresse<span class="text-danger">*</span> </label>
                                <input type="text" name="address" class="form-control" id="inputAddress" placeholder="2100 avenue Gangi, ..." required>
                            </div>
                            
                            <div class="col-md-6 mb-2">
                                <label for="inputCity" class="form-label">Ville/City<span class="text-danger">*</span></label>
                                <input type="text" name="city" class="form-control" id="inputCity" required placeholder="Entrez le nom de la ville">
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="inputState" class="form-label">Pays<span class="text-danger">*</span> </label>
                                <select id="inputState"  name="country" class="form-select" required>
                                    <option value="" selected>Choisissez votre pays</option>
                                    <option value="Afghanistan">Afghanistan </option>
                                    <option value="Afrique_Centrale">Afrique_Centrale </option>
                                    <option value="Afrique_du_sud">Afrique_du_Sud </option>
                                    <option value="Albanie">Albanie </option>
                                    <option value="Algerie">Algerie </option>
                                    <option value="Allemagne">Allemagne </option>
                                    <option value="Andorre">Andorre </option>
                                    <option value="Angola">Angola </option>
                                    <option value="Anguilla">Anguilla </option>
                                    <option value="Arabie_Saoudite">Arabie_Saoudite </option>
                                    <option value="Argentine">Argentine </option>
                                    <option value="Armenie">Armenie </option>
                                    <option value="Australie">Australie </option>
                                    <option value="Autriche">Autriche </option>
                                    <option value="Azerbaidjan">Azerbaidjan </option>
                                    <option value="Bahamas">Bahamas </option>
                                    <option value="Bangladesh">Bangladesh </option>
                                    <option value="Barbade">Barbade </option>
                                    <option value="Bahrein">Bahrein </option>
                                    <option value="Belgique">Belgique </option>
                                    <option value="Belize">Belize </option>
                                    <option value="Benin">Benin </option>
                                    <option value="Bermudes">Bermudes </option>
                                    <option value="Bielorussie">Bielorussie </option>
                                    <option value="Bolivie">Bolivie </option>
                                    <option value="Botswana">Botswana </option>
                                    <option value="Bhoutan">Bhoutan </option>
                                    <option value="Boznie_Herzegovine">Boznie_Herzegovine </option>
                                    <option value="Bresil">Bresil </option>
                                    <option value="Brunei">Brunei </option>
                                    <option value="Bulgarie">Bulgarie </option>
                                    <option value="Burkina_Faso">Burkina_Faso </option>
                                    <option value="Burundi">Burundi </option>
                                    <option value="Caiman">Caiman </option>
                                    <option value="Cambodge">Cambodge </option>
                                    <option value="Cameroun">Cameroun </option>
                                    <option value="Canada">Canada </option>
                                    <option value="Canaries">Canaries </option>
                                    <option value="Cap_vert">Cap_Vert </option>
                                    <option value="Chili">Chili </option>
                                    <option value="Chine">Chine </option>
                                    <option value="Chypre">Chypre </option>
                                    <option value="Colombie">Colombie </option>
                                    <option value="Comores">Colombie </option>
                                    <option value="Congo">Congo </option>
                                    <option value="Congo_democratique">Congo_democratique </option>
                                    <option value="Cook">Cook </option>
                                    <option value="Coree_du_Nord">Coree_du_Nord </option>
                                    <option value="Coree_du_Sud">Coree_du_Sud </option>
                                    <option value="Costa_Rica">Costa_Rica </option>
                                    <option value="Cote_d_Ivoire">Côte_d_Ivoire </option>
                                    <option value="Croatie">Croatie </option>
                                    <option value="Cuba">Cuba </option>
                                    <option value="Danemark">Danemark </option>
                                    <option value="Djibouti">Djibouti </option>
                                    <option value="Dominique">Dominique </option>
                                    <option value="Egypte">Egypte </option>
                                    <option value="Emirats_Arabes_Unis">Emirats_Arabes_Unis </option>
                                    <option value="Equateur">Equateur </option>
                                    <option value="Erythree">Erythree </option>
                                    <option value="Espagne">Espagne </option>
                                    <option value="Estonie">Estonie </option>
                                    <option value="Etats_Unis">Etats_Unis </option>
                                    <option value="Ethiopie">Ethiopie </option>
                                    <option value="Falkland">Falkland </option>
                                    <option value="Feroe">Feroe </option>
                                    <option value="Fidji">Fidji </option>
                                    <option value="Finlande">Finlande </option>
                                    <option value="France">France </option>
                                    <option value="Gabon">Gabon </option>
                                    <option value="Gambie">Gambie </option>
                                    <option value="Georgie">Georgie </option>
                                    <option value="Ghana">Ghana </option>
                                    <option value="Gibraltar">Gibraltar </option>
                                    <option value="Grece">Grece </option>
                                    <option value="Grenade">Grenade </option>
                                    <option value="Groenland">Groenland </option>
                                    <option value="Guadeloupe">Guadeloupe </option>
                                    <option value="Guam">Guam </option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guernesey">Guernesey </option>
                                    <option value="Guinee">Guinee </option>
                                    <option value="Guinee_Bissau">Guinee_Bissau </option>
                                    <option value="Guinee equatoriale">Guinee_Equatoriale </option>
                                    <option value="Guyana">Guyana </option>
                                    <option value="Guyane_Francaise ">Guyane_Francaise </option>
                                    <option value="Haiti">Haiti </option>
                                    <option value="Hawaii">Hawaii </option>
                                    <option value="Honduras">Honduras </option>
                                    <option value="Hong_Kong">Hong_Kong </option>
                                    <option value="Hongrie">Hongrie </option>
                                    <option value="Inde">Inde </option>
                                    <option value="Indonesie">Indonesie </option>
                                    <option value="Iran">Iran </option>
                                    <option value="Iraq">Iraq </option>
                                    <option value="Irlande">Irlande </option>
                                    <option value="Islande">Islande </option>
                                    <option value="Israel">Israel </option>
                                    <option value="Italie">italie </option>
                                    <option value="Jamaique">Jamaique </option>
                                    <option value="Jan Mayen">Jan Mayen </option>
                                    <option value="Japon">Japon </option>
                                    <option value="Jersey">Jersey </option>
                                    <option value="Jordanie">Jordanie </option>
                                    <option value="Kazakhstan">Kazakhstan </option>
                                    <option value="Kenya">Kenya </option>
                                    <option value="Kirghizstan">Kirghizistan </option>
                                    <option value="Kiribati">Kiribati </option>
                                    <option value="Koweit">Koweit </option>
                                    <option value="Laos">Laos </option>
                                    <option value="Lesotho">Lesotho </option>
                                    <option value="Lettonie">Lettonie </option>
                                    <option value="Liban">Liban </option>
                                    <option value="Liberia">Liberia </option>
                                    <option value="Liechtenstein">Liechtenstein </option>
                                    <option value="Lituanie">Lituanie </option>
                                    <option value="Luxembourg">Luxembourg </option>
                                    <option value="Lybie">Lybie </option>
                                    <option value="Macao">Macao </option>
                                    <option value="Macedoine">Macedoine </option>
                                    <option value="Madagascar">Madagascar </option>
                                    <option value="Madère">Madère </option>
                                    <option value="Malaisie">Malaisie </option>
                                    <option value="Malawi">Malawi </option>
                                    <option value="Maldives">Maldives </option>
                                    <option value="Mali">Mali </option>
                                    <option value="Malte">Malte </option>
                                    <option value="Man">Man </option>
                                    <option value="Mariannes du Nord">Mariannes du Nord </option>
                                    <option value="Maroc">Maroc </option>
                                    <option value="Marshall">Marshall </option>
                                    <option value="Martinique">Martinique </option>
                                    <option value="Maurice">Maurice </option>
                                    <option value="Mauritanie">Mauritanie </option>
                                    <option value="Mayotte">Mayotte </option>
                                    <option value="Mexique">Mexique </option>
                                    <option value="Micronesie">Micronesie </option>
                                    <option value="Midway">Midway </option>
                                    <option value="Moldavie">Moldavie </option>
                                    <option value="Monaco">Monaco </option>
                                    <option value="Mongolie">Mongolie </option>
                                    <option value="Montserrat">Montserrat </option>
                                    <option value="Mozambique">Mozambique </option>
                                    <option value="Namibie">Namibie </option>
                                    <option value="Nauru">Nauru </option>
                                    <option value="Nepal">Nepal </option>
                                    <option value="Nicaragua">Nicaragua </option>
                                    <option value="Niger">Niger </option>
                                    <option value="Nigeria">Nigeria </option>
                                    <option value="Niue">Niue </option>
                                    <option value="Norfolk">Norfolk </option>
                                    <option value="Norvege">Norvege </option>
                                    <option value="Nouvelle_Caledonie">Nouvelle_Caledonie </option>
                                    <option value="Nouvelle_Zelande">Nouvelle_Zelande </option>
                                    <option value="Oman">Oman </option>
                                    <option value="Ouganda">Ouganda </option>
                                    <option value="Ouzbekistan">Ouzbekistan </option>
                                    <option value="Pakistan">Pakistan </option>
                                    <option value="Palau">Palau </option>
                                    <option value="Palestine">Palestine </option>
                                    <option value="Panama">Panama </option>
                                    <option value="Papouasie_Nouvelle_Guinee">Papouasie_Nouvelle_Guinee
                                    </option>
                                    <option value="Paraguay">Paraguay </option>
                                    <option value="Pays_Bas">Pays_Bas </option>
                                    <option value="Perou">Perou </option>
                                    <option value="Philippines">Philippines </option>
                                    <option value="Pologne">Pologne </option>
                                    <option value="Polynesie">Polynesie </option>
                                    <option value="Porto_Rico">Porto_Rico </option>
                                    <option value="Portugal">Portugal </option>
                                    <option value="Qatar">Qatar </option>
                                    <option value="Republique_Dominicaine">Republique_Dominicaine
                                    </option>
                                    <option value="Republique_Tcheque">Republique_Tcheque </option>
                                    <option value="Reunion">Reunion </option>
                                    <option value="Roumanie">Roumanie </option>
                                    <option value="Royaume_Uni">Royaume_Uni </option>
                                    <option value="Russie">Russie </option>
                                    <option value="Rwanda">Rwanda </option>
                                    <option value="Sahara Occidental">Sahara Occidental </option>
                                    <option value="Sainte_Lucie">Sainte_Lucie </option>
                                    <option value="Saint_Marin">Saint_Marin </option>
                                    <option value="Salomon">Salomon </option>
                                    <option value="Salvador">Salvador </option>
                                    <option value="Samoa_Occidentales">Samoa_Occidentales</option>
                                    <option value="Samoa_Americaine">Samoa_Americaine </option>
                                    <option value="Sao_Tome_et_Principe">Sao_Tome_et_Principe
                                    </option>
                                    <option value="Senegal">Senegal </option>
                                    <option value="Seychelles">Seychelles </option>
                                    <option value="Sierra Leone">Sierra Leone </option>
                                    <option value="Singapour">Singapour </option>
                                    <option value="Slovaquie">Slovaquie </option>
                                    <option value="Slovenie">Slovenie</option>
                                    <option value="Somalie">Somalie </option>
                                    <option value="Soudan">Soudan </option>
                                    <option value="Sri_Lanka">Sri_Lanka </option>
                                    <option value="Suede">Suede </option>
                                    <option value="Suisse">Suisse </option>
                                    <option value="Surinam">Surinam </option>
                                    <option value="Swaziland">Swaziland </option>
                                    <option value="Syrie">Syrie </option>
                                    <option value="Tadjikistan">Tadjikistan </option>
                                    <option value="Taiwan">Taiwan </option>
                                    <option value="Tonga">Tonga </option>
                                    <option value="Tanzanie">Tanzanie </option>
                                    <option value="Tchad">Tchad </option>
                                    <option value="Thailande">Thailande </option>
                                    <option value="Tibet">Tibet </option>
                                    <option value="Timor_Oriental">Timor_Oriental </option>
                                    <option value="Togo">Togo </option>
                                    <option value="Trinite_et_Tobago">Trinite_et_Tobago </option>
                                    <option value="Tristan da cunha">Tristan de cuncha </option>
                                    <option value="Tunisie">Tunisie </option>
                                    <option value="Turkmenistan">Turmenistan </option>
                                    <option value="Turquie">Turquie </option>
                                    <option value="Ukraine">Ukraine </option>
                                    <option value="Uruguay">Uruguay </option>
                                    <option value="Vanuatu">Vanuatu </option>
                                    <option value="Vatican">Vatican </option>
                                    <option value="Venezuela">Venezuela </option>
                                    <option value="Vierges_Americaines">Vierges_Americaines </option>
                                    <option value="Vierges_Britanniques">Vierges_Britanniques </option>
                                    <option value="Vietnam">Vietnam </option>
                                    <option value="Wake">Wake </option>
                                    <option value="Wallis et Futuma">Wallis et Futuma </option>
                                    <option value="Yemen">Yemen </option>
                                    <option value="Yougoslavie">Yougoslavie </option>
                                    <option value="Zambie">Zambie </option>
                                    <option value="Zimbabwe">Zimbabwe </option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="inputCity" class="form-label">Code postal</label>
                                <input type="text" class="form-control" name="codepostal" placeholder="Entrez le code postal">
                            </div>
    
    
                            <div class="col-md-6 mb-2">
                                <label for="inputZip" class="form-label">Adresse e-mail<span class="text-danger">*</span></label>
                                <input type="email" name="email" class="form-control" placeholder="Entrez votre adresse e-mail"  required>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="inputZip" class="form-label">Numero de telephone<span class="text-danger">*</span></label>
                                <input type="phone" name="phone" class="form-control" placeholder="Entrez votre numero de telephone" required>
                            </div>
    
                            <hr class="my-4 col-12"/>
    
    
                            {{-- <div class="col-12 mb-2">
                                <label for="inputZip" class="form-label ">Avez-vous de connaissances de base sur les SIG avec QGIS ?<span class="text-danger">*</span></label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="maitrise_sig" id="flexRadioDefault1" value="Oui" required >
                                    <label class="form-check-label " for="flexRadioDefault1">
                                        oui
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="maitrise_sig" id="flexRadioDefault1" value="Non" required>
                                    <label class="form-check-label " for="flexRadioDefault1">
                                        non
                                    </label>
                                </div>
                            </div>
    
                            <div class="col-12 mb-2">
                                <label for="inputZip" class="form-label ">Souhaitez vous suivre une formation complète des SIG et obtenir un Certificat ?<span class="text-danger">*</span></label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="suivre_formation" id="flexRadioDefault1" value="Oui" required >
                                    <label class="form-check-label " for="flexRadioDefault1">
                                        oui
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="suivre_formation" id="flexRadioDefault1" value="Non" required>
                                    <label class="form-check-label " for="flexRadioDefault1">
                                        non
                                    </label>
                                </div>
                            </div> --}}
    
                            <div class="col-12 mb-2">
                                <label for="inputZip" class="form-label">Avez-vous quelques choses à suggérer aux organisateurs  ?</label>
                                <input type="text" name="suggestion" class="form-control" id="exampleFormControlInput1" placeholder="Exemple : je suggère aux organisateurs de...">
                            </div>
                            {{-- <div class="col-12 mt-5 text-center fw-bold text-success">TYPE DE FORMATION</div>
                            <hr class="my-4 col-12"/>
    
                            <div class="col-12 mb-2">
                                <label for="inputZip" class="form-label ">Veuillez choisir une ou plusieurs formations qui vous conviennent :<span class="text-danger">*</span></label>
                                <div class="row">
                                    <div class="col-md-3 mb-2">
                                        <label for="sig" class="form-label "><small>1. SIG et Cartographie</small></label>
                                    </div>
                                    <div class="col-md-3 mb-2">
                                        <select class="form-select " name="sig" aria-label="Default select example" >
                                            <option value="" selected>Choisissez le type</option>
                                            <option value="Aucun">Aucun</option>
    
                                            <option value="SIG appliqués à la géologie">SIG appliqués à la géologie</option>
                                            <option value="SIG appliqués au marketing">SIG appliqués au marketing</option>
                                            <option value="SIG appliqués à l'ingénierie">SIG appliqués à l'ingénierie</option>
                                            <option value="SIG appliqués à la foresterie">SIG appliqués à la foresterie</option>
                                            <option value="SIG appliqués à la Santé Publique">SIG appliqués à la Santé Publique</option>
                                            <option value="SIG appliqués aux sciences de la terre">SIG appliqués aux sciences de la terre</option>
                                            <option value="SIG appliqués en aménagement du territoire">SIG appliqués en aménagement du territoire</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 mb-2">
                                        <label for="teledetection" class="form-label "><small>2. Télédétection appliquée</small></label>
                                    </div>
                                    <div class="col-md-3 mb-2">
                                        <select class="form-select " name="teledetection" aria-label="Default select example" >
                                            <option value="" selected>Choisissez le type</option>
                                            <option value="Aucun">Aucun</option>
    
                                            <option value="Télédétection appliquée à la cartographie">Télédétection appliquée à la cartographie</option>
                                            <option value="Télédétection appliquée à l'agriculture">Télédétection appliquée à l'agriculture</option>
                                            <option value="Télédétection appliquée à la foresterie">Télédétection appliquée à la foresterie</option>
                                            <option value="Télédétection appliquée à l'environnement">Télédétection appliquée à l'environnement</option>
                                            
                                            <option value="Télédétection appliquée au génie civil">Télédétection appliquée au génie civil</option>
                                            <option value="Télédétection appliquée à l'urbanisme">Télédétection appliquée à l'urbanisme</option>
                                            <option value="Télédétection appliquée à l'occupation des sols">Télédétection appliquée à l'occupation des sols</option>
                                            <option value="Télédétection appliquée à la géologie et prospection minière">Télédétection appliquée à la géologie et prospection minière</option>
                                        </select>
                                    </div>
    
                                    <div class="col-md-3 mb-2">
                                        <label for="teledetection" class="form-label "><small>3. Outils de collecte et analyses des données</small></label>
                                    </div>
                                    <div class="col-md-3 mb-2">
                                        <select class="form-select " name="outils" aria-label="Default select example"  >
                                            <option value="" selected>Choisissez le type</option>
                                            <option value="Aucun">Aucun</option>
                                        </select>
                                    </div>
    
                                    <div class="col-md-3 mb-2">
                                        <label for="teledetection" class="form-label "><small>4. Langages informatiques</small></label>
                                    </div>
                                    <div class="col-md-3 mb-2">
                                        <select class="form-select " name="language" aria-label="Default select example" >
                                            <option value="" selected>Choisissez le type</option>
                                            <option value="Aucun">Aucun</option>
                                        </select>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="inputZip" class="form-label ">Votre préférence sur le type de formation :<span class="text-danger">*</span></label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="type_formation" id="flexRadioDefault1" value="En presentiel" required >
                                    <label class="form-check-label " for="flexRadioDefault1">
                                        En presentiel
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="type_formation" id="flexRadioDefault1" value="En ligne" required>
                                    <label class="form-check-label " for="flexRadioDefault1">
                                        En ligne
                                    </label>
                                </div>
                            </div>
    
                            <div class="col-md-6 mb-2">
                                <label for="inputZip" class="form-label ">Votre préférence sur le mode de formation :<span class="text-danger">*</span></label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="mode_formation" id="flexRadioDefault1" value="Normale" required>
                                    <label class="form-check-label " for="flexRadioDefault1">
                                        Normale 
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="mode_formation" id="flexRadioDefault1" value="Accélérée" required>
                                    <label class="form-check-label " for="flexRadioDefault1">
                                        Accélérée
                                    </label>
                                </div>
                            </div>
    
                            <div class="col-12 mt-5 text-center ">
                                <label class="fw-bold text-success">PAIEMENT (en 2 Tranches)</label>
                                <p class="text-mobile">Tranche 1 à payer avant le début de la Formation, 2è Tranche après 4 séances</p>
                            </div>
                            <hr class="my-4 col-12"/>
    
                            <div class="col-12 mb-2">
                                <label for="inputZip" class="form-label ">Par quel moyen souhaitez vous payer le frais :<span class="text-danger">*</span></label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="payment" id="flexRadioDefault1" value="Western Union" required>
                                    <label class="form-check-label " for="flexRadioDefault1">
                                        Western Union
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="payment" id="flexRadioDefault1" value="RapidTransfert (Ecobank)">
                                    <label class="form-check-label " for="flexRadioDefault1">
                                        RapidTransfert (Ecobank)
                                    </label>
                                </div>
    
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="payment" id="flexRadioDefault1" value="Visa, UBA, Paypal" >
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Visa, UBA, Paypal (Nous vous enverons le numéro de compte)
                                    </label>
                                </div>
    
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="payment" id="flexRadioDefault1" value="Réseau Mobile">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Réseau Mobile
                                    </label>
                                </div>
                            </div>
    
                            <div class="col-12 mt-5 text-center ">
                                <label class="fw-bold text-success">NOTE IMPORTANTE!</label>
                                <p class="text-mobile text-justify">
                                    Après l'inscription, vous recevrez le Programme/Contenu de la Formation, et l'identité ou le numéro mobile du
                                    responsable qui recevra votre argent.  Une fois fait, vous nous enverrez la preuve du paiement et une facture
                                    vous sera envoyé en retour, cela confimera votre paticipation.
                                </p>
                            </div> --}}
                            <hr class="my-4 col-12"/>
                            <div class="col-12 d-flex justify-content-center text-center mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="available_for_update" value="yes" id="flexCheckDefault" >
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Je souhaite recevoir des mises à jour par e-mail concernant les futures nouvelles de RFS ACADEMIA
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-center text-center mb-4">
                                <div class="g-recaptcha" data-sitekey="6LflI28dAAAAAJlnPGw1mbzIwzmw-k1SugGUo-xJ"></div>
                            </div>
                            
                            <div class="col-12 d-flex justify-content-center text-center mb-4">
                                <button type="submit" name="submit" class="btn btn-success mx-2">Envoyer </button>
                            </div>
                        </div>
                    </form>
                </div>
    
            </div>
        </div>
    </section>
</x-app-layout>