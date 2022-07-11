<div id="portfolio-page" class="portfolio-page-content">
    <div class="container">
        <div class="portfolio-nav">
            <div id="portfolio-close-button" class="portfolio-close-button">
                <a href="#portfolio"><i class="fa fa-close"></i></a>
            </div>
        </div>

        <div class="portfolio-title">
            <h1>{{$portfolio->project_name}}</h1>
        </div>

        <div class="row">
            <div class="col-sm-7 col-md-7 portfolio-block">
                <div class="owl-carousel portfolio-page-carousel">
                    @foreach($portfolio->photos as $photo)
                    <div class="item">
                        <img src="{{$photo->path}}" alt="{{$portfolio->path}}">
                    </div>
                    @endforeach
                </div>

{{--                <div class="portfolio-page-video embed-responsive embed-responsive-16by9">--}}
{{--                    <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/97102654?autoplay=0"></iframe>--}}
{{--                </div>--}}

                <!--
                <div class="portfolio-page-image">
                    <img src="images/portfolio/portfolio_details/1_1.jpg" alt="">
                </div>
                -->

                <script type="text/javascript">
                    jQuery(document).ready(function($){
                        $('.portfolio-page-carousel').owlCarousel({
                            smartSpeed:1200,
                            items: 1,
                            loop: true,
                            dots: true,
                            nav: true,
                            navText: false,
                            margin: 10
                        });
                    });
                </script>
            </div>

            <div class="col-sm-5 col-md-5 portfolio-block">
                <!-- Project Description -->
                <div class="block-title">
                    <h3>Description</h3>
                </div>
                <ul class="project-general-info">
{{--                    <li><p><i class="fa fa-user"></i> Alex Smith</p></li>--}}
                    <li><p><i class="fa fa-globe"></i> <a href="{{$portfolio->site}}" target="_blank">{{$portfolio->site}}</a></p></li>
                    <li><p><i class="fa fa-calendar"></i> {{$portfolio->date}}</p></li>
                </ul>

                <p class="text-justify">{{$portfolio->description}}</p>
                <!-- /Project Description -->

                <!-- Technology -->
                <div class="tags-block">
                    <div class="block-title">
                        <h3>Technology</h3>
                    </div>
                    <ul class="tags">
                        @foreach($portfolio->technologies as $technologies)
                        <li><a>{{$technologies->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <!-- /Technology -->

            </div>
        </div>
    </div>
</div>
