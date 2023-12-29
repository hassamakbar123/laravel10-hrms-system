@extends('layouts.front.app')
@section('content_front')
<section class="page-header">
    <div class="page-header__bg"></div>
    <div class="page-header__shape"><img src="assets/images/shapes/page-header-shape.png" alt="hiredots"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2 class="page-header__title">About</h2>
        <ul class="hiredots-breadcrumb list-unstyled">
            <li><a href="index-2.html">Home</a></li>
            <li><span>About</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section>
<section class="why-choose-two">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="why-choose-two__image">
                    <img src="assets/images/resources/about-circle-1.png" alt="">
                    <img src="assets/images/resources/about-circle-2.png" class="why-choose-two__image__two" alt="">
                    <img src="assets/images/shapes/about-circle-shape.png" class="why-choose-two__image__shape" alt="">
                    <div class="why-choose-two__circle">
                        <span class="video-popups">
                            <i class="icon-talent-search"></i>
                        </span>
                        <div class="curved-circle">
                            <!-- curved-circle start-->
                            <div class="curved-circle--item" data-circle-text-options='{
                        "radius": 92,
                        "forceWidth": true,
                        "forceHeight": true
                    }'>
                                new human resources theme
                            </div>
                        </div><!-- curved-circle end-->
                    </div><!-- /.video-one__btn -->
                </div><!-- /.why-choose-two__image -->
            </div><!-- /.col-lg-6 -->
            <div class="col-xl-6">
                <div class="why-choose-two__content">
                    <div class="sec-title text-left">

                        <h6 class="sec-title__tagline">about our agency</h6><!-- /.sec-title__tagline -->

                        <h3 class="sec-title__title">Reliable & Cost Efficiant <br> Recruitment Agency</h3><!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->
                    <p class="why-choose-two__text">Lorem ipsum dolor sit amet consectur adipiscing elit sed eiusmod
                        tempor incididunt labore dolore magna aliquaenim ad minim. Sed risus augue, commodo ornare felis
                        non, eleifend molestie metus pharetra eleifend.
                    </p>
                    <!-- /.why-choose-two__text -->
                    <ul class="why-choose-two__feature   ">
                        <li><i class="fas fa-check-circle"></i>Understand Your Needs</li>
                        <li><i class="fas fa-check-circle"></i>Find the Perfect Candidate</li>
                    </ul>
                    <div class="why-choose-two__progress">
                        <h4 class="why-choose-two__progress__title">Recruitments</h4>
                        <div class="why-choose-two__progress__bar">
                            <div class="why-choose-two__progress__inner count-bar" data-percent="77%">
                                <div class="why-choose-two__progress__number count-text">77%</div>
                            </div>
                        </div>
                    </div><!-- /.skills-item -->
                    <a href="services.html" class="hiredots-btn"><span>Discover More</span></a>
                </div><!-- /.why-choose-two__content -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.why-choose-two -->
<div class="testimonials-one background-gray">
    <div class="testimonials-one__shape">
        <img src="assets/images/shapes/testimonail-share.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <div class="testimonials-one__sec-title">
                    <div class="sec-title text-left">

                        <h6 class="sec-title__tagline">our testimonials</h6><!-- /.sec-title__tagline -->

                        <h3 class="sec-title__title">What They’re <br> Talking About?</h3><!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->
                    <p class="testimonials-one__text">
                        Quisque commodo, magna simply free text available nec accu man euismod tellus mi ornare enim.
                    </p>
                    <div class="testimonials-one__dots"></div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="hiredots-stretch-element-inside-column">
                    <div class="testimonials-one__carousel hiredots-owl__carousel hiredots-owl__carousel--with-shadow hiredots-owl__carousel--basic-nav owl-carousel" data-owl-options='{
                    "items": 1,
                    "margin": 30,
                    "loop": true,
                    "smartSpeed": 700,
                    "nav": false,
                    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                    "dots": true,
                    "dotsContainer":".testimonials-one__dots",
                    "autoplay": false,
                    "responsive": {
                        "0": {
                            "items": 1
                        },
                        "768": {
                            "items": 1.93
                        }
                    }
                }'>
                        <div class="item">
                            <div class="testimonials-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                                <div class="testimonials-card__inner">
                                    <div class="testimonials-card__top">
                                        <div class="testimonials-card__image">
                                            <img src="assets/images/resources/testi-1-1.jpg" alt="Kevin martin">
                                        </div><!-- /.testimonials-card__image -->
                                        <div class="testimonials-card__top__left">
                                            <div class="testimonials-card__rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div><!-- /.testimonials-card__rating -->
                                            <div class="testimonials-card__content">
                                                Lorem ipsum is simply free text dolor sit amet, consectetur adipisicing elit, sed do incididunt ut labore et dolore magna aliqua.
                                            </div><!-- /.testimonials-card__content -->
                                            <div class="testimonials-card__author">
                                                <div class="testimonials-card__icon">
                                                    <i class="icon-quote"></i>
                                                </div>
                                                <div class="testimonials-card__autor__info">
                                                    <h3 class="testimonials-card__name">
                                                        Kevin martin
                                                    </h3><!-- /.testimonials-card__name -->
                                                    <p class="testimonials-card__designation">Market Manager</p>
                                                    <!-- /.testimonials-card__designation -->
                                                </div>
                                            </div>
                                        </div><!-- /.testimonials-card__top__left -->
                                    </div><!-- /.testimonials-card__top -->
                                </div><!-- /.testimonials-card__inner -->
                            </div><!-- /.testimonials-card -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="testimonials-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                                <div class="testimonials-card__inner">
                                    <div class="testimonials-card__top">
                                        <div class="testimonials-card__image">
                                            <img src="assets/images/resources/testi-1-2.jpg" alt="Sarah albert">
                                        </div><!-- /.testimonials-card__image -->
                                        <div class="testimonials-card__top__left">
                                            <div class="testimonials-card__rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div><!-- /.testimonials-card__rating -->
                                            <div class="testimonials-card__content">
                                                Lorem ipsum is simply free text dolor sit amet, consectetur adipisicing elit, sed do incididunt ut labore et dolore magna aliqua.
                                            </div><!-- /.testimonials-card__content -->
                                            <div class="testimonials-card__author">
                                                <div class="testimonials-card__icon">
                                                    <i class="icon-quote"></i>
                                                </div>
                                                <div class="testimonials-card__autor__info">
                                                    <h3 class="testimonials-card__name">
                                                        Sarah albert
                                                    </h3><!-- /.testimonials-card__name -->
                                                    <p class="testimonials-card__designation">Co Founder</p>
                                                    <!-- /.testimonials-card__designation -->
                                                </div>
                                            </div>
                                        </div><!-- /.testimonials-card__top__left -->
                                    </div><!-- /.testimonials-card__top -->
                                </div><!-- /.testimonials-card__inner -->
                            </div><!-- /.testimonials-card -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="testimonials-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                                <div class="testimonials-card__inner">
                                    <div class="testimonials-card__top">
                                        <div class="testimonials-card__image">
                                            <img src="assets/images/resources/testi-1-3.jpg" alt="Kevin martin">
                                        </div><!-- /.testimonials-card__image -->
                                        <div class="testimonials-card__top__left">
                                            <div class="testimonials-card__rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div><!-- /.testimonials-card__rating -->
                                            <div class="testimonials-card__content">
                                                Lorem ipsum is simply free text dolor sit amet, consectetur adipisicing elit, sed do incididunt ut labore et dolore magna aliqua.
                                            </div><!-- /.testimonials-card__content -->
                                            <div class="testimonials-card__author">
                                                <div class="testimonials-card__icon">
                                                    <i class="icon-quote"></i>
                                                </div>
                                                <div class="testimonials-card__autor__info">
                                                    <h3 class="testimonials-card__name">
                                                        Kevin martin
                                                    </h3><!-- /.testimonials-card__name -->
                                                    <p class="testimonials-card__designation">Market Manager</p>
                                                    <!-- /.testimonials-card__designation -->
                                                </div>
                                            </div>
                                        </div><!-- /.testimonials-card__top__left -->
                                    </div><!-- /.testimonials-card__top -->
                                </div><!-- /.testimonials-card__inner -->
                            </div><!-- /.testimonials-card -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="testimonials-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                                <div class="testimonials-card__inner">
                                    <div class="testimonials-card__top">
                                        <div class="testimonials-card__image">
                                            <img src="assets/images/resources/testi-1-4.jpg" alt="Sarah albert">
                                        </div><!-- /.testimonials-card__image -->
                                        <div class="testimonials-card__top__left">
                                            <div class="testimonials-card__rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div><!-- /.testimonials-card__rating -->
                                            <div class="testimonials-card__content">
                                                Lorem ipsum is simply free text dolor sit amet, consectetur adipisicing elit, sed do incididunt ut labore et dolore magna aliqua.
                                            </div><!-- /.testimonials-card__content -->
                                            <div class="testimonials-card__author">
                                                <div class="testimonials-card__icon">
                                                    <i class="icon-quote"></i>
                                                </div>
                                                <div class="testimonials-card__autor__info">
                                                    <h3 class="testimonials-card__name">
                                                        Sarah albert
                                                    </h3><!-- /.testimonials-card__name -->
                                                    <p class="testimonials-card__designation">Co Founder</p>
                                                    <!-- /.testimonials-card__designation -->
                                                </div>
                                            </div>
                                        </div><!-- /.testimonials-card__top__left -->
                                    </div><!-- /.testimonials-card__top -->
                                </div><!-- /.testimonials-card__inner -->
                            </div><!-- /.testimonials-card -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="testimonials-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                                <div class="testimonials-card__inner">
                                    <div class="testimonials-card__top">
                                        <div class="testimonials-card__image">
                                            <img src="assets/images/resources/testi-1-5.jpg" alt="Kevin martin">
                                        </div><!-- /.testimonials-card__image -->
                                        <div class="testimonials-card__top__left">
                                            <div class="testimonials-card__rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div><!-- /.testimonials-card__rating -->
                                            <div class="testimonials-card__content">
                                                Lorem ipsum is simply free text dolor sit amet, consectetur adipisicing elit, sed do incididunt ut labore et dolore magna aliqua.
                                            </div><!-- /.testimonials-card__content -->
                                            <div class="testimonials-card__author">
                                                <div class="testimonials-card__icon">
                                                    <i class="icon-quote"></i>
                                                </div>
                                                <div class="testimonials-card__autor__info">
                                                    <h3 class="testimonials-card__name">
                                                        Kevin martin
                                                    </h3><!-- /.testimonials-card__name -->
                                                    <p class="testimonials-card__designation">Market Manager</p>
                                                    <!-- /.testimonials-card__designation -->
                                                </div>
                                            </div>
                                        </div><!-- /.testimonials-card__top__left -->
                                    </div><!-- /.testimonials-card__top -->
                                </div><!-- /.testimonials-card__inner -->
                            </div><!-- /.testimonials-card -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="testimonials-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                                <div class="testimonials-card__inner">
                                    <div class="testimonials-card__top">
                                        <div class="testimonials-card__image">
                                            <img src="assets/images/resources/testi-1-6.jpg" alt="Sarah albert">
                                        </div><!-- /.testimonials-card__image -->
                                        <div class="testimonials-card__top__left">
                                            <div class="testimonials-card__rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div><!-- /.testimonials-card__rating -->
                                            <div class="testimonials-card__content">
                                                Lorem ipsum is simply free text dolor sit amet, consectetur adipisicing elit, sed do incididunt ut labore et dolore magna aliqua.
                                            </div><!-- /.testimonials-card__content -->
                                            <div class="testimonials-card__author">
                                                <div class="testimonials-card__icon">
                                                    <i class="icon-quote"></i>
                                                </div>
                                                <div class="testimonials-card__autor__info">
                                                    <h3 class="testimonials-card__name">
                                                        Sarah albert
                                                    </h3><!-- /.testimonials-card__name -->
                                                    <p class="testimonials-card__designation">Co Founder</p>
                                                    <!-- /.testimonials-card__designation -->
                                                </div>
                                            </div>
                                        </div><!-- /.testimonials-card__top__left -->
                                    </div><!-- /.testimonials-card__top -->
                                </div><!-- /.testimonials-card__inner -->
                            </div><!-- /.testimonials-card -->
                        </div><!-- /.item -->

                    </div><!-- /.testimonials-one__carousel -->
                </div>
            </div>
        </div>
    </div>
</div>
<section class="cta-three">
    <div class="cta-three__bg jarallax" data-jarallax data-speed="0.3" style="background-image: url('assets/images/backgrounds/banner-bg-1-1.jpg')"></div>
    <!-- /.video-one__bg -->
    <div class="container">
        <h2 class="cta-three__title">Hiredots Trusted Staffing & <br>Recruitment Agency</h2><!-- /.cta-three__title -->
        <div class="cta-three__btns">
            <a href="services.html" class="hiredots-btn cta-three__link"><span>Discover more</span></a>
            <a href="jobs.html" class="hiredots-btn hiredots-btn--primary"><span>for employers</span></a>
        </div>
    </div><!-- /.container -->
</section><!-- /.cta-three -->

<section class="features-one about-page--feature" style="background-image: url(assets/images/shapes/feature-bg-with-shape.png);">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="features-one__left">
                    <div class="sec-title text-left">

                        <h6 class="sec-title__tagline">our benefits</h6><!-- /.sec-title__tagline -->

                        <h3 class="sec-title__title">Hiredots Advantages of Working</h3><!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->
                    <p class="features-one__sec-text">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry when an unknown printer. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                    <div class="features-one__video">
                        <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                            <i class="fa fa-play"></i>
                            Watch our video
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="features-one__right">
                    <div class="features-one__list">
                        <i class="icon-recruitment"></i>
                        <h3 class="features-one__list__title">Sourcing Best <br>
                            Resource</h3>
                        <p class="features-one__list__info">There are many not of age of rm available the majority.</p>
                    </div>
                    <div class="features-one__list">
                        <i class="icon-background-check"></i>
                        <h3 class="features-one__list__title">Save Your <br>
                            Time & Money</h3>
                        <p class="features-one__list__info">There are many not of age of rm available the majority.</p>
                    </div>
                    <div class="features-one__list">
                        <i class="icon-save-time"></i>
                        <h3 class="features-one__list__title">Partners in <br>
                            Team Building</h3>
                        <p class="features-one__list__info">There are many not of age of rm available the majority.</p>
                    </div>
                    <div class="hiredots-stretch-element-inside-column">
                        <div class="features-one__bg">
                            <img src="assets/images/resources/features-1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="team-one">
    <div class="container">
        <div class="sec-title text-center">

            <h6 class="sec-title__tagline">Professional team</h6><!-- /.sec-title__tagline -->

            <h3 class="sec-title__title">Meet Our Experienced <br> People Now</h3><!-- /.sec-title__title -->
        </div><!-- /.sec-title -->
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                    <div class="team-card__image">
                        <div class="team-card__image__bg"></div><!-- /.team-card__image__bg -->
                        <img src="assets/images/team/team-1-1.jpg" alt="Mike Hardson">
                        <div class="team-card__hover">
                            <div class="team-card__social">
                                <i class="fa fa-share-alt"></i>
                                <div class="team-card__social__list">
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
                                </div><!-- /.team-card__social__list -->
                            </div><!-- /.team-card__social -->
                        </div><!-- /.team-card__hover -->
                    </div><!-- /.team-card__image -->
                    <div class="team-card__content">
                        <h3 class="team-card__title">
                            <a href="team-details.html">Mike Hardson</a>
                        </h3><!-- /.team-card__title -->
                        <p class="team-card__designation">Director</p><!-- /.team-card__designation -->
                    </div><!-- /.team-card__content -->
                </div><!-- /.team-card -->
            </div><!-- /.item -->
            <div class="col-md-6 col-lg-3">
                <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                    <div class="team-card__image">
                        <div class="team-card__image__bg"></div><!-- /.team-card__image__bg -->
                        <img src="assets/images/team/team-1-2.jpg" alt="aleesha brown">
                        <div class="team-card__hover">
                            <div class="team-card__social">
                                <i class="fa fa-share-alt"></i>
                                <div class="team-card__social__list">
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
                                </div><!-- /.team-card__social__list -->
                            </div><!-- /.team-card__social -->
                        </div><!-- /.team-card__hover -->
                    </div><!-- /.team-card__image -->
                    <div class="team-card__content">
                        <h3 class="team-card__title">
                            <a href="team-details.html">aleesha brown</a>
                        </h3><!-- /.team-card__title -->
                        <p class="team-card__designation">Director</p><!-- /.team-card__designation -->
                    </div><!-- /.team-card__content -->
                </div><!-- /.team-card -->
            </div><!-- /.item -->
            <div class="col-md-6 col-lg-3">
                <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                    <div class="team-card__image">
                        <div class="team-card__image__bg"></div><!-- /.team-card__image__bg -->
                        <img src="assets/images/team/team-1-3.jpg" alt="david cooper">
                        <div class="team-card__hover">
                            <div class="team-card__social">
                                <i class="fa fa-share-alt"></i>
                                <div class="team-card__social__list">
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
                                </div><!-- /.team-card__social__list -->
                            </div><!-- /.team-card__social -->
                        </div><!-- /.team-card__hover -->
                    </div><!-- /.team-card__image -->
                    <div class="team-card__content">
                        <h3 class="team-card__title">
                            <a href="team-details.html">david cooper</a>
                        </h3><!-- /.team-card__title -->
                        <p class="team-card__designation">Director</p><!-- /.team-card__designation -->
                    </div><!-- /.team-card__content -->
                </div><!-- /.team-card -->
            </div><!-- /.item -->
            <div class="col-md-6 col-lg-3">
                <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                    <div class="team-card__image">
                        <div class="team-card__image__bg"></div><!-- /.team-card__image__bg -->
                        <img src="assets/images/team/team-1-4.jpg" alt="david cooper">
                        <div class="team-card__hover">
                            <div class="team-card__social">
                                <i class="fa fa-share-alt"></i>
                                <div class="team-card__social__list">
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
                                </div><!-- /.team-card__social__list -->
                            </div><!-- /.team-card__social -->
                        </div><!-- /.team-card__hover -->
                    </div><!-- /.team-card__image -->
                    <div class="team-card__content">
                        <h3 class="team-card__title">
                            <a href="team-details.html">david cooper</a>
                        </h3><!-- /.team-card__title -->
                        <p class="team-card__designation">Director</p><!-- /.team-card__designation -->
                    </div><!-- /.team-card__content -->
                </div><!-- /.team-card -->
            </div><!-- /.item -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.team-one -->

<div class="client-carousel client-carousel-one ">
    <div class="container">
        <div class="client-carousel__one hiredots-owl__carousel owl-theme owl-carousel" data-owl-options='{
    "items": 5,
    "margin": 55,
    "smartSpeed": 700,
    "loop":true,
    "autoplay": 6000,
    "nav":false,
    "dots":false,
    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
    "responsive":{
        "0":{
            "items":1,
            "margin": 0
        },
        "360":{
            "items":2,
            "margin": 0
        },
        "575":{
            "items":3,
            "margin": 30
        },
        "768":{
            "items":3,
            "margin": 40
        },
        "992":{
            "items": 4,
            "margin": 40
        },
        "1200":{
            "items": 5
        }
    }
    }'>
            <div class="client-carousel__one__item">
                <img src="assets/images/resources/brand-1-1.png" alt="hiredots">
            </div><!-- /.owl-slide-item-->
            <div class="client-carousel__one__item">
                <img src="assets/images/resources/brand-1-1.png" alt="hiredots">
            </div><!-- /.owl-slide-item-->
            <div class="client-carousel__one__item">
                <img src="assets/images/resources/brand-1-1.png" alt="hiredots">
            </div><!-- /.owl-slide-item-->
            <div class="client-carousel__one__item">
                <img src="assets/images/resources/brand-1-1.png" alt="hiredots">
            </div><!-- /.owl-slide-item-->
            <div class="client-carousel__one__item">
                <img src="assets/images/resources/brand-1-1.png" alt="hiredots">
            </div><!-- /.owl-slide-item-->
            <div class="client-carousel__one__item">
                <img src="assets/images/resources/brand-1-1.png" alt="hiredots">
            </div><!-- /.owl-slide-item-->
            <div class="client-carousel__one__item">
                <img src="assets/images/resources/brand-1-1.png" alt="hiredots">
            </div><!-- /.owl-slide-item-->
            <div class="client-carousel__one__item">
                <img src="assets/images/resources/brand-1-1.png" alt="hiredots">
            </div><!-- /.owl-slide-item-->
            <div class="client-carousel__one__item">
                <img src="assets/images/resources/brand-1-1.png" alt="hiredots">
            </div><!-- /.owl-slide-item-->
            <div class="client-carousel__one__item">
                <img src="assets/images/resources/brand-1-1.png" alt="hiredots">
            </div><!-- /.owl-slide-item-->
        </div><!-- /.thm-owl__slider -->
    </div><!-- /.container -->
</div><!-- /.client-carousel -->

@endsection
