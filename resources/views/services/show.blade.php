<x-app-layout>
    <!-- Breadcrumb -->
    <section>
        <nav class="container pt-4 mt-lg-3" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('home')}}"><i class="bx bx-home-alt fs-lg me-1"></i>Accueil</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('service.index')}}">Services</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">{{ $service->title }}</li>
            </ol>
        </nav>
    </section>


    

    <!-- Post image (parallax) -->
    <div class="jarallax mb-lg-5 mb-4" data-jarallax data-speed="0.4" style="height: 36.45vw; min-height: 300px;">
        {{-- <div class="jarallax-img" style="background-image: url({{'/storage/'.$post->image_path}});"></div> --}}
    </div>

    <!-- Post content + Sharing -->
    <section class="container mb-5 pt-4 pb-2 py-mg-4">
        <div class="row gy-4">

            <!-- Content -->
            <div class="col-lg-12">
               
                <div class="gallery mb-12 pb-2">
                    <a href="https://www.youtube.com/watch?v=LDb-G8y88Sc" class="gallery-item video-item is-hovered rounded-3" data-sub-html='<h6 class="fs-sm text-light">Video inside blog post</h6>'>
                        <img src="/assets/img/blog/single/video-cover.jpg" alt="Video preview">
                    </a>
                </div> 
                <div>
                    {!! $service->content !!} 
                </div>
                <!-- Tags -->
                <hr class="mb-4">

            </div>
        </div>
    </section>

    

    
</x-app-layout>