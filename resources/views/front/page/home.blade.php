<!--START HOME-->
<section class="home-slider" id="home">
    <div class="swiper-container homeslider">
        <div class="swiper-wrapper">
            @foreach ($slides as $i)
            <div class="swiper-slide" 
            style="background-image: url('{{$i->bg}}');background-size: cover;background-position: center;">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-center text-white">
                            <h6 class="home-subtitle mb-4">{{$i->title}}</h6>
                            <h1>{{$i->caption}}</h1>
                            <p class="home-desc pt-3">{{$i->description}}</p>
                            <div class="mt-4 pt-3">
                                <a href="{{$i->btn_link}}" class="btn btn-primary">{{$i->btn_title}}</a>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </div>
        @endforeach

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
    <!--end homeslider-->
</section>
<!--end home-->