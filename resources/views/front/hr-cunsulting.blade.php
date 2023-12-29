@extends('layouts.front.app')
@section('content_front')
<section class="page-header">
    <div class="page-header__bg"></div>
    <div class="page-header__shape"><img src="assets/images/shapes/page-header-shape.png" alt="hiredots"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2 class="page-header__title">HR Consulting</h2>
        <ul class="hiredots-breadcrumb list-unstyled">
            <li><a href="index-2.html">Home</a></li>
            <li><span>Services Details</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->

<section class="service-details">
    <div class="container">
        <div class="row gutter-y-30">
            <div class="col-md-12 col-lg-4">
                <div class="service-sidebar">
                    <div class="service-sidebar__single">
                        <ul class="list-unstyled service-sidebar__nav">
                            <li><a href="{{ route('hr-consulting') }}">HR Consulting</a></li>
                            <li><a href="{{ route('tech-resources') }}">Tech Resources</a></li>
                            <li><a href="{{ route('staffing-solution') }}">Staffing Solution</a></li>
                        </ul><!-- /.list-unstyled service-sidebar__nav -->
                    </div><!-- /.service-sidebar__single -->
                    <div class="service-sidebar__single ">
                        <div class="service-sidebar__contact background-base" style="background-image: url(assets/images/resources/service-sidebar-d-1.png);">
                            <h3 class="service-sidebar__contact__title">Recruitment
                                Solutions for all
                                Businesses</h3><!-- /.service-sidebar__contact__title -->
                            <a class="hiredots-btn" href="contact.html"> Contact</a>
                        </div><!-- /.service-sidebar__contact -->
                    </div>
                    <div class="service-sidebar__single ">
                        <div class="service-sidebar__download background-primary">
                            <div class="service-sidebar__download__icon">
                                <i class="icon-pdf-file"></i>
                            </div><!-- /.service-sidebar__contact__icon -->
                            <div class="serice-sidebar__download">
                                <h3 class="service-sidebar__download__title"><a href="#">Project Agreement Form</a></h3><!-- /.service-sidebar__contact__title -->
                                <p class="service-sidebar__download__number">3.9KB</p><!-- /.service-sidebar__contact__number -->
                            </div>
                        </div><!-- /.service-sidebar__contact -->
                    </div>
                </div><!-- /.sidebar -->
            </div><!-- /.col-md-12 col-lg-4 -->
            <div class="col-md-12 col-lg-8">
                <div class="service-details__content">
                    <div class="service-details__thumbnail">
                        <img src="assets/images/resources/service-d-1.png" alt="HR Consulting">
                    </div><!-- /.service-details__thumbnail -->
                    <h3 class="service-details__title">HR Consulting</h3><!-- /.service-details__title -->
                    <p class="service-details__text">There are many variations of passages of lorem ipsum is simply free text available
                        in the market, but the majority time you put aside to be in our office. Lorem ipsum dolor sit amet,
                        consectetLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua.</p>
                    <!-- /.service-details__text -->
                    <h3 class="service-details__lighlight">Helping Clients to Solve Recruitments Problems</h3>
                    <!-- /.service-details__title -->
                    <p class="service-details__text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit
                        laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate
                        velit esse quam nihil molestiae consequatur.</p><!-- /.service-details__text -->

                    <h3 class="service-details__title">Why Choose?</h3><!-- /.service-details__title -->
                    <div class="list-unstyled service-details__process">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="service-details__process__top item-1">
                                    <h4 class="service-details__process__title">Short Term <br>
                                        Hiring</h4><!-- /.service-details__process__title -->
                                    <span class="service-details__process__icon"><i class="icon-individual"></i></span>
                                </div><!-- /.service-details__process__top -->
                            </div>
                            <div class="col-md-4">
                                <div class="service-details__process__top item-2">
                                    <h4 class="service-details__process__title">Last Minute <br>
                                        Hiring</h4><!-- /.service-details__process__title -->
                                    <span class="service-details__process__icon"><i class="icon-time-check"></i></span>
                                </div><!-- /.service-details__process__top -->
                            </div>
                            <div class="col-md-4">
                                <div class="service-details__process__top item-3">
                                    <h4 class="service-details__process__title">Administration <br>
                                        Rules</h4><!-- /.service-details__process__title -->
                                    <span class="service-details__process__icon"><i class="icon-report-card"></i></span>
                                </div><!-- /.service-details__process__top -->
                            </div>
                        </div>
                    </div><!-- /.list-unstyled service-details__process -->
                    <div class="row gutter-y-30 align-items-center">
                        <div class="col-md-6">
                            <div class="service-details__image__circle">
                                <img src="assets/images/resources/service-details-p-1.png" alt="">
                            </div><!-- /.service-details__image__circle -->
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6">
                            <h4 class="service-details_list-title">Our Benefits</h4><!-- /.service-details__sub-title -->
                            <p class="service-details_list-text">Get the Best Digital Marketing from the Pitoon Agency of Exellence</p>
                            <ul class="list-unstyled service-details__list">
                                <li><i class="fas fa-check-circle"></i> Cost Effective </li>
                                <li><i class="fas fa-check-circle"></i> Equal Opportunities</li>
                                <li><i class="fas fa-check-circle"></i> Creates High Brand Awareness</li>
                                <li><i class="fas fa-check-circle"></i> Higher ROI</li>
                            </ul><!-- /.list-unstyled service-details__post -->
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->
                </div><!-- /.service-details__content -->
            </div><!-- /.col-md-12 col-lg-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.service-details -->
@endsection
