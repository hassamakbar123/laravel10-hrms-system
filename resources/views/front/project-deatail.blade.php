@extends('layouts.front.app')
@section('content_front')
<section class="page-header">
    <div class="page-header__bg"></div>
    <div class="page-header__shape"><img src="assets/images/shapes/page-header-shape.png" alt="hiredots"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2 class="page-header__title">Projects Details</h2>
        <ul class="hiredots-breadcrumb list-unstyled">
            <li><a href="index-2.html">Home</a></li>
            <li><span>Projects Details</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->

<div class="project-details">
    <div class="container">
        <div class="project-details__img">
            <img src="assets/images/project/project-details-1.jpg" alt="">
            <div class="project-details__meta">
                <div class="project-details__meta__item">
                    <span class="project-details__tagline">Date</span>
                    <h3 class="project-details__title">30 Aug, 2023</h3>
                </div>
                <div class="project-details__meta__item">
                    <span class="project-details__tagline">Client</span>
                    <h3 class="project-details__title">Themeforest, Envato</h3>
                </div>
                <div class="project-details__meta__item">
                    <span class="project-details__tagline">Website</span>
                    <h3 class="project-details__title">company.com</h3>
                </div>
                <div class="project-details__meta__item">
                    <span class="project-details__tagline">Value</span>
                    <h3 class="project-details__title">company.com</h3>
                </div>
                <div class="project-details__social">
                    <a href="https://twitter.com/">
                        <i class="fab fa-twitter" aria-hidden="true"></i>
                        <span class="sr-only">Twitter</span>
                    </a>
                    <a href="https://facebook.com/">
                        <i class="fab fa-facebook" aria-hidden="true"></i>
                        <span class="sr-only">Facebook</span>
                    </a>
                    <a href="https://pinterest.com/">
                        <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                        <span class="sr-only">Pinterest</span>
                    </a>
                    <a href="https://instagram.com/">
                        <i class="fab fa-instagram" aria-hidden="true"></i>
                        <span class="sr-only">Instagram</span>
                    </a>
                </div><!-- /.footer-widget__social -->
            </div>
        </div>
        <div class="project-details__wrapper">
            <h3 class="project-details__headline"> Staffing Solutions </h3>
            <p class="project-details__info">There are many variations of passages of psum available, but the majority
                have suffered alteration in some form, by injected humour, or randomised words which don't look even
                slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                anything embarrassing hidden in the middle of text. Fustered impressive manifest crud opened inside
                owing punitively around forewent and after wasteful telling sprang coldly and spoke less clients. Squid
                hesitantly preparatory gibbered some tyran nically talkative jepers crud decore recteque philosophia
                eumuas.</p>
            <p class="project-details__info">Beyond more stoic this along goodness hey this this wow manatee mongoose
                one as since a far flustered
                impressive manifest far crud opened inside owing punitively around forewent and after wasteful telling
                sprang coldly and spoke less clients. Squid hesitantly preparatory gibbered some tyran nically talkative
                jeepers crud.</p>
            <h4>Project Challenge</h4>
            <p class="project-details__info">Eque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae
                dicta sunt explicabo. Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit amet finibus
                eros. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                the ndustry stan when an unknown printer took a galley.</p>
            <h3 class="project-details__highligt">Making this the first true generator on the Internet.</h3>
            <p class="project-details__info">
                When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
                Letraset sheets containing. Neque porro est qui dolorem ipsumo.
            </p>

            <div class="project-details__feature">
                <img src="assets/images/project/project-detials-2.jpg" alt="">
                <ul class="list-unstyled project-details__feature__list">
                    <li>
                        <i class="fas fa-check-circle"></i> Lorem Ipsum generators on the Internet
                    </li>
                    <li>
                        <i class="fas fa-check-circle"></i> It uses a dictionary of over words
                    </li>
                    <li>
                        <i class="fas fa-check-circle"></i> The majority have alteration in some form
                    </li>
                    <li>
                        <i class="fas fa-check-circle"></i> There are many variations of passages
                    </li>
                </ul>
            </div>
        </div>
        <div class="project-details__pagination">
            <span class="previous"><a href="#"><i class="icon-left-arrow"></i>Previous</a></span>
            <span class="next"><a href="#">Next <i class="icon-right-arrow"></i></a></span>
        </div>
    </div>
</div>


<section class="project-one project-one--page">
    <div class="container">
        <div class="sec-title text-center">

            <h6 class="sec-title__tagline">our recent work</h6><!-- /.sec-title__tagline -->

            <h3 class="sec-title__title">See Similar Projects</h3><!-- /.sec-title__title -->
        </div><!-- /.sec-title -->
        <div class="hiredots-one__carousel hiredots-owl__carousel hiredots-owl__carousel--with-shadow hiredots-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
    "items": 1,
    "margin": 0,
    "loop": false,
    "smartSpeed": 700,
    "nav": false,
    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
    "dots": false,
    "autoplay": false,
    "responsive": {
        "0": {
            "items": 1
        },
        "576": {
            "items": 2,
            "margin": 30
        },
        "992": {
            "items": 3,
            "margin": 30
        }
    }
}'>
            <div class="item">
                <div class="project-one__card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='1ms'>
                    <div class="project-one__img">
                        <img src="assets/images/project/project-1-1.jpg" alt="Staffing Solution">
                    </div>
                    <div class="project-one__content">
                        <span class="project-one__tagline">Resources</span>
                        <h3 class="project-one__title"><a href="project-details.html">Staffing Solution</a></h3>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="project-one__card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='1ms'>
                    <div class="project-one__img">
                        <img src="assets/images/project/project-1-2.jpg" alt="Staffing Solution">
                    </div>
                    <div class="project-one__content">
                        <span class="project-one__tagline">Resources</span>
                        <h3 class="project-one__title"><a href="{{ route('project-deatail') }}">Staffing Solution</a></h3>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="project-one__card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='1ms'>
                    <div class="project-one__img">
                        <img src="assets/images/project/project-1-3.jpg" alt="Staffing Solution">
                    </div>
                    <div class="project-one__content">
                        <span class="project-one__tagline">Resources</span>
                        <h3 class="project-one__title"><a href="{{ route('project-deatail') }}">Staffing Solution</a></h3>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="project-one__card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='1ms'>
                    <div class="project-one__img">
                        <img src="assets/images/project/project-1-4.jpg" alt="Staffing Solution">
                    </div>
                    <div class="project-one__content">
                        <span class="project-one__tagline">Resources</span>
                        <h3 class="project-one__title"><a href="{{ route('project-deatail') }}">Staffing Solution</a></h3>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="project-one__card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='1ms'>
                    <div class="project-one__img">
                        <img src="assets/images/project/project-1-5.jpg" alt="Staffing Solution">
                    </div>
                    <div class="project-one__content">
                        <span class="project-one__tagline">Resources</span>
                        <h3 class="project-one__title"><a href="project-details.html">Staffing Solution</a></h3>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="project-one__card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='1ms'>
                    <div class="project-one__img">
                        <img src="assets/images/project/project-1-6.jpg" alt="Staffing Solution">
                    </div>
                    <div class="project-one__content">
                        <span class="project-one__tagline">Resources</span>
                        <h3 class="project-one__title"><a href="project-details.html">Staffing Solution</a></h3>
                    </div>
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.hiredots-one hiredots-one--page -->
@endsection
