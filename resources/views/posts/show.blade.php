<x-app-layout>

    <x-slot name="title">
        <title>Blog | {{ $post->title }} -- RFS CONSULTING</title>
        <meta name="description"
            content="Nous sommes missionnés pour nos études précises, nos conseils avisés, nos expertises et évaluations justes, et nos réalisations réussites." />
        <meta property="og:url" content="https://rfs-congo.com/post/{{ $post->slug }}" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Formations -- RFS CONSULTING" />
        <meta property="og:description"
            content="Nous sommes missionnés pour nos études précises, nos conseils avisés, nos expertises et évaluations justes, et nos réalisations réussites." />
        <meta property="og:image" content="/assets/img/hero/hero-bg.jpeg" />
        {{-- <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> --}}
        <script defer>
            function share_fb(url) {
                window.open('https://www.facebook.com/sharer/sharer.php?u='+url,'facebook-share-dialog',"width=626, height=436")
            }
            function share_twitter(url) {
                window.open('https://twitter.com/share?ref_src='+url,"twitter share","width=626, height=436")
            }
        </script>
        {{-- <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
            fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script> --}}
    </x-slot>

    <!-- Breadcrumb -->
    <section>
        <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-lang="fr" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        <nav class="container pt-4 mt-lg-3" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('home') }}"><i class="bx bx-home-alt fs-lg me-1"></i>Accueil</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('post.index') }}">Blog</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">{{ $post->title }}</li>
            </ol>
        </nav>
    </section>


    <!-- Post title + Meta  -->
    <section class="container mt-4 pt-lg-2 pb-3">
        <h1 class="pb-3" style="max-width: 970px;">{{ $post->title }}</h1>
        <div class="d-flex flex-md-row flex-column align-items-md-center justify-content-md-between mb-3">
            <div class="d-flex align-items-center flex-wrap text-muted mb-md-0 mb-4">
                {{-- <div class="fs-xs border-end pe-3 me-3 mb-2">
                    <span class="badge bg-faded-primary text-primary fs-base">Technology</span>
                </div> --}}
                <div class="fs-sm border-end pe-3 me-3 mb-2">{{ $post->created_at->diffForHumans() }}</div>
                <div class="d-flex mb-2">
                    <div class="d-flex align-items-center me-3">
                        <i class="bx bx-like fs-base me-1"></i>
                        <span class="fs-sm">{{ $post->likes()->count() }}</span>
                    </div>
                    <div class="d-flex align-items-center me-3">
                        <i class="bx bx-comment fs-base me-1"></i>
                        <span class="fs-sm">{{ $comments->count() }}</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="bx bx-share-alt fs-base me-1"></i>
                        <span class="fs-sm">{{ $post->countshared }}</span>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center position-relative ps-md-3 pe-lg-5 mb-2">
                <img src="/assets/img/user.png" class="rounded-circle" width="60" alt="Avatar">
                <div class="ps-3">
                    <h6 class="mb-1">Auteur</h6>
                    <a href="#" class="fw-semibold stretched-link">{{ $post->author->name }}</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Post image (parallax) -->
    <div class="jarallax mb-lg-5 mb-4" data-jarallax data-speed="0.4" style="height: 36.45vw; min-height: 300px;">
        <div class="jarallax-img" style="background-image: url({{ '/storage/' . $post->image_path }});"></div>
    </div>

    <!-- Post content + Sharing -->
    <section class="container mb-5 pt-4 pb-2 py-mg-4">
        <div class="row gy-4">

            <!-- Content -->
            <div class="col-lg-9">
                {{-- <h3 class="h5 mb-4 pb-2 fw-medium">Est quis sit phasellus proin proin fringilla eu quis. Placerat praesent blandit urna eu pellentesque dictum. Aliquam duis quam interdum quis. Urna, rutrum aenean lacus phasellus. Ipsum, ac porttitor lacus orci, cras lacus, quis leo.</h3>
                <h2 class="h4">Paragraph Title</h2>
                <p class="mb-4 pb-2">Purus ornare nisl est nec. Nunc, enim tellus pretium viverra quisque id in metus volutpat. Urna eget velit venenatis, commodo eget massa. Magna donec dictum cras nullam platea. Diam rhoncus massa lectus pellentesque tristique. Amet commodo,
                    egestas vitae bibendum. Volutpat elit condimentum integer tortor porttitor justo vel lobortis risus. Lacinia pellentesque fermentum tellus orci mauris, velit duis eget. Commodo justo, hac ligula molestie felis, iaculis. Vitae dui at ante
                    orci, dictum fusce. Urna, sed urna fringilla faucibus euismod aliquet nec. Quis libero, fermentum amet eu, condimentum auctor. Sit vel ipsum sem tempus gravida et. Scelerisque blandit orci, est quis. Nisi, tellus amet est nascetur
                    habitant faucibus ornare et vivamus.</p> --}}

                <!-- Video -->
                {{-- <div class="gallery mb-4 pb-2">
                    <a href="https://www.youtube.com/watch?v=LDb-G8y88Sc" class="gallery-item video-item is-hovered rounded-3" data-sub-html='<h6 class="fs-sm text-light">Video inside blog post</h6>'>
                        <img src="/assets/img/blog/single/video-cover.jpg" alt="Video preview">
                    </a>
                </div> --}} 
                <x-markdown>
                    {{ $post->content }}
                </x-markdown> {{-- <p class="mb-4 pb-2">Tempor donec aliquam est, a. Sit arcu tellus pharetra, bibendum hendrerit arcu, sed. Scelerisque dui enim libero sit ac sed lacus lectus. Quam in iaculis scelerisque feugiat nibh mi. Maecenas posuere lobortis praesent iaculis sagittis.
                    Egestas vel at praesent ipsum pretium faucibus adipiscing gravida feugiat. Lacus, rhoncus velit at non nunc, quam urna, phasellus facilisis. Cursus elit posuere amet tortor at. Mi tristique congue vulputate eget in pellentesque tincidunt.
                    In viverra est id nibh. Nunc tellus ultrices magna turpis. Viverra est morbi posuere dapibus nisi habitasse. Id tristique cursus vel metus.</p> --}}

                <!-- Quotation -->
                {{-- <figure class="position-relative mb-4 ps-4">
                    <span class="position-absolute top-0 start-0 w-3 h-100 bg-primary"></span>
                    <blockquote class="blockquote fs-xl fw-medium text-dark ps-1 ps-sm-3">
                        <p>Sollicitudin eget massa, elementum, purus nec fermentum vitae, elementum. Tincidunt vulputate lorem cursus id. Dictum tincidunt mi ornare tristique. Id sit elit pulvinar eu. Tempus vel, mauris sed proin aliquet vulputate cras est.
                            Ut ornare eget a viverra.</p>
                    </blockquote>
                    <figcaption class="d-flex align-items-center pt-3 ps-1 ps-sm-3">
                        <img src="/assets/img/avatar/04.jpg" width="48" class="rounded-circle" alt="Jane Cooper">
                        <div class="ps-3">
                            <h6 class="fw-semibold lh-base mb-0">Jane Cooper</h6>
                            <span class="fs-sm text-muted">CEO of Ipsum Company</span>
                        </div>
                    </figcaption>
                </figure> --}} {{-- <p class="mb-4 pb-2">Pellentesque laoreet neque ut dictumst fames scelerisque. In malesuada orci dapibus risus tellus, amet, ultrices sagittis a. Turpis vel tincidunt tristique maecenas cursus tortor, suscipit ut. Ullamcorper at faucibus dolor tortor suspendisse
                    suscipit senectus convallis aliquam. At orci amet facilisi nunc mi vitae iaculis diam a. Mauris venenatis sed purus cursus torte.</p>
                <h2 class="h4">Paragraph Title 2</h2>
                <p class="mb-4 pb-2">Praesent sed pulvinar posuere nisl tincidunt. Iaculis sit quam magna congue. Amet vel non aliquet habitasse. Egestas erat odio et, eleifend turpis etiam blandit interdum. Nec augue ut senectus quisque diam quis. At augue accumsan, in bibendum.
                    A eget et, eget quisque egestas netus vel. Velit, aliquet turpis convallis ullamcorper. Scelerisque sagittis condimentum pretium in vitae etiam lacinia quis amet. Porttitor consequat, sollicitudin vivamus pharetra nibh faucibus neque,
                    viverra. Praesent amet sed lacus vitae.</p>
                <h4 class="h6">
                    <i class="bx bx-plus-circle me-1 mt-n1 align-middle fs-5 text-primary"></i> PROS
                </h4>
                <ul class="mb-4 pb-2 ps-4">
                    <li class="mb-1">A eu, ac nunc, volutpat. Augue enim ac justo, at elementum, arcu.</li>
                    <li class="mb-1">At sodales quam felis ullamcorper iaculis tristique. Felis, etiam felis pellentesque sit neque.</li>
                    <li class="mb-1">Porta ipsum quis lacus eu ipsum mattis sit quis. Massa, massa lectus porttitor laoreet ultricies odio fermentum arcu quam.</li>
                    <li class="mb-1">Accumsan arcu neque, nisl, pellentesque fames justo consequat blandit lacus. Eget odio vel nulla vel.</li>
                    <li class="mb-1">Diam ac phasellus est, eu urna purus blandit aliquam. Vitae accumsan et pellentesque diam in.</li>
                    <li>Tellus arcu, lectus tincidunt neque nunc. Bibendum lacus, molestie ultrices sed arcu.</li>
                </ul> --}} {{-- <h4 class="h6">
                    <i class="bx bx-minus-circle me-1 mt-n1 align-middle fs-5 text-primary"></i> CONS
                </h4>
                <ul class="mb-4 pb-2 ps-4">
                    <li class="mb-1">Donec maecenas justo, et tortor quam elementum pharetra velit. Auctor dictum purus sollicitudin et quam vehicula amet lacus, integer.</li>
                    <li class="mb-1">Mi elit nibh erat facilisis. Volutpat eget malesuada mi in.</li>
                    <li class="mb-1">Tincidunt iaculis eleifend arcu egestas. Sit gravida vestibulum quam scelerisque.</li>
                    <li class="mb-1">Ornare elit, vel, ullamcorper nunc nulla pellentesque ut varius. Vitae tortor nulla a turpis erat fermentum, rhoncus.</li>
                    <li>Gravida cursus nunc habitant aliquet lacus. Tempus, interdum nullam non quam ipsum ultricies ac.</li>
                </ul>
                <h2 class="h4">Conclusion</h2>
                <p class="mb-4 pb-2">Venenatis faucibus platea gravida amet sed sed urna volutpat. Aliquam neque, mi, justo odio semper. Egestas potentiquis neque nunc, rhoncus hendrerit. Viverra gravida pretium dolor eget placerat morbi proin eget. Vestibulum vitae ultrices
                    vel sed sit quis. Ac quis diam at nulla libero. Turpis duis magna tellus condimentum.</p>
                <p class="mb-4 pb-2">Velit parturient tellus tellus, congue pulvinar tellus viverra. In cum massa mattis ac. Amet vitae massa ut mi etiam. Auctor aliquam tristique felis donec eu sit nisi. Accumsan mauris eget convallis mattis sed etiam scelerisque.</p> --}}

                <!-- Tags -->
                <hr class="mb-4">
                <div class="d-flex flex-sm-row flex-column pt-2">
                    <h6 class="mt-sm-1 mb-sm-2 mb-3 me-2 text-nowrap">Related Tags:</h6>
                    <div>

                        @foreach ($posttags as $ptag)
                            <a href="#"
                                class="btn btn-sm btn-outline-secondary me-2 mb-2">{{ $ptag->tags->name }}</a>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Sharing -->
            <div class="col-lg-3 position-relative">
                <div class="sticky-top ms-xl-5 ms-lg-4 ps-xxl-4" style="top: 105px !important;">
                    <span class="d-block mb-3">5 min read</span>
                    <h6>Partager cet article:</h6>
                    <div class="mb-4 pb-lg-3">
                        {{-- <a href="#" class="btn btn-icon btn-secondary btn-linkedin me-2 mb-2">
                            <i class="bx bxl-linkedin"></i>
                        </a> --}}
                        {{-- <a href="#" > --}}

                        <a id="shareBtn" href="#"
                        onclick="share_fb('{{route('post.show',$post->slug)}}');return false;" 
                        rel="nofollow"
                        share_url="{{route('post.show',$post->slug)}}" target="_blank"
                        class="btn btn-icon btn-secondary btn-facebook me-2 mb-2">
                            <i class="bx bxl-facebook"></i>
                        </a>
                        {{-- <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-lang="fr" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> --}}
                        <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" 
                           class="twitter-share-button me-2 mb-2"
                           data-lang="fr"
                           target="_blank" 
                           data-show-count="false">Tweeter</a>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

                        {{-- <a href="#" class="btn btn-icon btn-secondary btn-instagram me-2 mb-2">
                            <i class="bx bxl-instagram"></i>
                        </a> --}}
                    </div>
                    <a href={{route('like.store',$post->id)}} class="btn btn-lg btn-outline-secondary">
                        <i class="bx bx-like me-2 lead"></i>
                        J'aime ça
                        <span class="badge bg-primary shadow-primary mt-n1 ms-3"> {{ $post->likes()->count() }} </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Post comments -->
    <section class="container mb-4 pt-lg-4 pb-lg-3">
        <h2 class="h1 text-center text-sm-start">{{ $comments->count() }} commentaires</h2>
        <div class="row">

            <!-- Comments -->
            <div class="col-lg-9">

                @foreach ($comments as $comment)
                    <!-- Comment -->
                    <div class="py-4">
                        <div class="d-flex align-items-center justify-content-between pb-2 mb-1">
                            <div class="d-flex align-items-center me-3">
                                <img src="/assets/img/user.png" class="rounded-circle" width="48" alt="Avatar">
                                <div class="ps-3">
                                    <h6 class="fw-semibold mb-0">{{ $comment->guest_name }}</h6>
                                    <span class="fs-sm text-muted">{{ $comment->created_at->diffForHumans() }}</span>
                                </div>
                            </div>
                            <a href="#" class="nav-link fs-sm px-0">
                                <i class="bx bx-share fs-lg me-2"></i> Reply
                            </a>
                        </div>
                        {{ $comment->message }}
                        {{-- <p class="mb-0"></p> --}}
                    </div>

                    <hr class="my-2">
                @endforeach


                <!-- Comment -->
                {{-- <div class="py-4">
                    <div class="d-flex align-items-center justify-content-between pb-2 mb-1">
                        <div class="d-flex align-items-center me-3">
                            <img src="/assets/img/avatar/02.jpg" class="rounded-circle" width="48" alt="Avatar">
                            <div class="ps-3">
                                <h6 class="fw-semibold mb-0">Ralph Edwards</h6>
                                <span class="fs-sm text-muted">September 9 at 12:48</span>
                            </div>
                        </div>
                        <a href="#" class="nav-link fs-sm px-0">
                            <i class="bx bx-share fs-lg me-2"></i> Reply
                        </a>
                    </div>
                    <p class="mb-0 pb-2">Eget amet, ac scelerisque tellus sed. Sapien duis sit neque pulvinar. Est sit aenean nisl etiam donec mattis ut diam. Luctus massa eu nunc aliquam viverra tempus, eu amet, luctus. Ac faucibus vestibulum eu lacus. Ullamcorper sem ultrices
                        tincidunt pharetra?</p>

                    <!-- Comment reply -->
                    <div class="position-relative ps-4 mt-4">
                        <span class="position-absolute top-0 start-0 w-1 h-100 bg-primary"></span>
                        <div class="d-flex align-items-center justify-content-between ps-3 pb-2 mb-1">
                            <div class="d-flex align-items-center me-3">
                                <img src="/assets/img/avatar/05.jpg" class="rounded-circle" width="48" alt="Avatar">
                                <div class="ps-3">
                                    <h6 class="fw-semibold mb-0">Author name</h6>
                                    <span class="fs-sm text-muted">16 hours ago</span>
                                </div>
                            </div>
                            <a href="#" class="nav-link fs-sm px-0">
                                <i class="bx bx-share fs-lg me-2"></i> Reply
                            </a>
                        </div>
                        <p class="ps-3 mb-0"><a href="#" class="fw-semibold text-decoration-none">@Ralph Edwards</a> Vulputate malesuada amet, consequat ullamcorper. Orci, cras maecenas in sit purus pellentesque. Ridiculus blandit pellentesque eget arcu morbi nisl. Morbi
                            volutpat adipiscing sapien sed ut tempor.</p>
                    </div>
                </div>

                <hr class="my-2">

                <!-- Comment -->
                <div class="py-4">
                    <div class="d-flex align-items-center justify-content-between pb-2 mb-1">
                        <div class="d-flex align-items-center me-3">
                            <img src="/assets/img/avatar/07.jpg" class="rounded-circle" width="48" alt="Avatar">
                            <div class="ps-3">
                                <h6 class="fw-semibold mb-0">Cameron Williamson</h6>
                                <span class="fs-sm text-muted">March 24 at 8:20</span>
                            </div>
                        </div>
                        <a href="#" class="nav-link fs-sm px-0">
                            <i class="bx bx-share fs-lg me-2"></i> Reply
                        </a>
                    </div>
                    <p class="mb-0">Mattis id ut sed arcu metus elit faucibus condimentum aliquam. Nam adipiscing diam et suspendisse. Sagittis massa maecenas laoreet nulla amet nunc sagittis, pulvinar neque. Duis imperdiet ipsum suspendisse massa lectus habitasse. Id
                        ante volutpat hendrerit augue parturient eget. Ac vitae posuere leo morbi vitae at hac lectus. Nibh neque quam quis amet mattis sit. Faucibus risus at sit tempus ut.</p>
                </div> --}}

            </div>
        </div>
    </section>

    <!-- Comment form + Subscription -->
    <section class="container mb-4 pb-2 mb-md-5 pb-lg-5">
        <div class="row gy-5">

            <!-- Comment form -->
            <div class="col-lg-9">
                <div class="card p-md-5 p-4 border-0 bg-secondary">
                    <div class="card-body w-100 mx-auto px-0" style="max-width: 746px;">
                        <h2 class="mb-4 pb-3">Laissez un commentaire</h2>
                        <form class="row gy-4 needs-validation" novalidate method="POST"
                            action="{{ route('comment.store') }}">
                            @csrf
                            <div class="col-sm-6 col-12">
                                <label for="c-name" class="form-label fs-base">Nom</label>
                                <input name="guest_name" id="c-name" type="text" class="form-control form-control-lg"
                                    required>
                                <span class="invalid-tooltip">Veuillez entrer votre nom.</span>
                            </div>
                            <div class="col-sm-6 col-12">
                                <label for="c-email" class="form-label fs-base">Email</label>
                                <input name="email" id="c-email" type="email" class="form-control form-control-lg"
                                    required>
                                <span class="invalid-tooltip">Veuillez fournir une adresse email valide.</span>
                            </div>
                            <div class="col-12">
                                <label for="c-comment" class="form-label fs-base">Commentaire</label>
                                <textarea name="message" id="c-comment" class="form-control form-control-lg" rows="3"
                                    placeholder="Type your comment here..." required></textarea>
                                <span class="invalid-tooltip">S'il vous plaît, entrez votre commentaire. </span>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input id="c-save" type="checkbox" class="form-check-input">
                                    <label for="c-save" class="form-check-label">Enregistrez mon nom et mon e-mail dans
                                        ce navigateur pour la prochaine fois que je commenterai.</label>
                                </div>
                            </div>
                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                            <div class="col-12">
                                <button type="submit" class="btn btn-lg btn-primary w-sm-auto w-100 mt-2">Poster un
                                    commentaire</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Subscription form + Sharing -->
            <div class="col-lg-3 position-relative">
                <div class="sticky-top ms-xl-5 ms-lg-4 ps-xxl-4" style="top: 70px !important;">
                    <div class="row gy-lg-5 gy-4 justify-content-center text-lg-start text-center">

                        <!-- Subscription form -->
                        <div class="col-lg-12 col-sm-7 col-11">
                            <h6 class="fs-lg">Vous aimez cet article ? Rejoignez notre newsletter</h6>
                            <form class="needs-validation" novalidate method="POST" action="{{ route('newsletter.store') }}">
                                @csrf
                                <div class="input-group mb-3">
                                    <i
                                        class="bx bx-envelope position-absolute start-0 top-50 translate-middle-y zindex-5 ms-3 text-muted d-lg-inline-block d-none"></i>
                                    <input type="email" name="email" placeholder="Your Email"
                                        class="form-control ps-lg-5 rounded text-lg-start text-center" required>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">S'abonner</button>
                            </form>
                        </div>

                        <!-- Sharing -->
                        <div class="col-lg-12 col-sm-7 col-11">
                            <h6 class="fs-lg">N'oubliez pas de le partager</h6>
                            <div class="mb-4 pb-lg-3">
                                <a href="#" class="btn btn-icon btn-secondary btn-linkedin me-2 mb-2">
                                    <i class="bx bxl-linkedin"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-secondary btn-facebook me-2 mb-2">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-secondary btn-twitter me-2 mb-2">
                                    <i class="bx bxl-twitter"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-secondary btn-instagram me-2 mb-2">
                                    <i class="bx bxl-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related articles (Slider below lg breakpoint) -->
    <section class="container mb-5 pt-md-4">
        <div class="d-flex flex-sm-row flex-column align-items-center justify-content-between mb-4 pb-1 pb-md-3">
            <h2 class="h1 mb-sm-0">Articles liés</h2>
            <a href="{{ route('post.index') }}" class="btn btn-lg btn-outline-primary ms-4">
                Tous les articles
                <i class="bx bx-right-arrow-alt ms-1 me-n1 lh-1 lead"></i>
            </a>
        </div>

        <div class="swiper mx-n2" data-swiper-options='{
        "slidesPerView": 1,
        "spaceBetween": 8,
        "pagination": {
        "el": ".swiper-pagination",
        "clickable": true
        },
        "breakpoints": {
        "500": {
            "slidesPerView": 2
        },
        "1000": {
            "slidesPerView": 3
        }
        }
    }'>
            <div class="swiper-wrapper">

                @foreach ($relatedPosts as $rpost)
                    <!-- Item -->
                    <div class="swiper-slide h-auto pb-3">
                        <article class="card border-0 shadow-sm h-100 mx-2">
                            <div class="position-relative">
                                <a href="{{ route('post.show', $rpost->slug) }}"
                                    class="position-absolute top-0 start-0 w-100 h-100" aria-label="Read more"></a>
                                <a href="#"
                                    class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-5 me-3 mt-3"
                                    data-bs-toggle="tooltip" data-bs-placement="left" title="Read later">
                                    <i class="bx bx-bookmark"></i>
                                </a>
                                <img src={{ '/storage/' . $rpost->image_path }} class="card-img-top" alt="Image">
                            </div>
                            <div class="card-body pb-4">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    {{-- <a href="#" class="badge fs-sm text-nav bg-secondary text-decoration-none">Business</a> --}}
                                    <span class="fs-sm text-muted">{{ $rpost->created_at->diffForHumans() }}</span>
                                </div>
                                <h3 class="h5 mb-0">
                                    <a href="{{ route('post.show', $rpost->slug) }}">{{ $rpost->title }}</a>
                                </h3>
                            </div>
                            <div class="card-footer py-4">
                                <a href="#" class="d-flex align-items-center fw-bold text-dark text-decoration-none">
                                    <img src="/assets/img/user.png" class="rounded-circle me-3" width="48"
                                        alt="Avatar"> {{ $rpost->author->name }}
                                </a>
                            </div>
                        </article>
                    </div>
                @endforeach



            </div>

            <!-- Pagination (bullets) -->
            <div class="swiper-pagination position-relative pt-2 pt-sm-3 mt-4"></div>
        </div>
    </section>
</x-app-layout>
