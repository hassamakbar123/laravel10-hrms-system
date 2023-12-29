@extends('layouts.front.app')
@section('content_front')
<section class="page-header">
    <div class="page-header__bg"></div>
    <div class="page-header__shape"><img src="assets/images/shapes/page-header-shape.png" alt="hiredots"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2 class="page-header__title">Blog</h2>
        <ul class="hiredots-breadcrumb list-unstyled">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><span>News</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->

<section class="blog-one blog-one--page">
    <div class="container">
        <div class="row gutter-y-30">
            <div class="col-md-6 col-lg-4">
                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                    <div class="blog-card__image">
                        <img src="assets/images/blog/blog-1-1.jpg" alt="Guide to HR Adviser and Clients Lessening">
                    </div><!-- /.blog-card__image -->
                    <div class="blog-card__content">
                        <div class="blog-card__date"><span>30</span>
                            Aug</div><!-- /.blog-card__date -->
                        <ul class="list-unstyled blog-card__meta">
                            <li><a href="{{ route('news') }}"><i class="fas fa-tags"></i>Business</a></li>
                            <li><a href="{{ route('blog-detail') }}"><i class="fa fa-comments"></i> 2 Comments</a></li>
                        </ul><!-- /.list-unstyled blog-card__meta -->
                        <h3 class="blog-card__title"><a href="blog-details.html">Guide to HR Adviser and Clients Lessening</a></h3><!-- /.blog-card__title -->
                        <p class="blog-card__info">Lorem ipsum is simply free dolor sit amet, consect pisicing elit.</p>
                        <a href="{{ route('blog-detail') }}" class="blog-card__link">
                            Read more
                            <i class="icon-right-arrow"></i>
                        </a><!-- /.blog-card__link -->
                    </div><!-- /.blog-card__content -->
                </div><!-- /.blog-card -->
            </div><!-- /.col-md-6 col-lg-4 -->
            <div class="col-md-6 col-lg-4">
                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                    <div class="blog-card__image">
                        <img src="assets/images/blog/blog-1-2.jpg" alt="Top Skin care tips for oily skins">
                    </div><!-- /.blog-card__image -->
                    <div class="blog-card__content">
                        <div class="blog-card__date"><span>30</span>
                            Aug</div><!-- /.blog-card__date -->
                        <ul class="list-unstyled blog-card__meta">
                            <li><a href="{{ route('news') }}"><i class="fas fa-tags"></i>Business</a></li>
                            <li><a href="{{ route('blog-detail') }}"><i class="fa fa-comments"></i> 2 Comments</a></li>
                        </ul><!-- /.list-unstyled blog-card__meta -->
                        <h3 class="blog-card__title"><a href="blog-details.html">Top Skin care tips for oily skins</a></h3><!-- /.blog-card__title -->
                        <p class="blog-card__info">Lorem ipsum is simply free dolor sit amet, consect pisicing elit.</p>
                        <a href="{{ route('blog-detail') }}" class="blog-card__link">
                            Read more
                            <i class="icon-right-arrow"></i>
                        </a><!-- /.blog-card__link -->
                    </div><!-- /.blog-card__content -->
                </div><!-- /.blog-card -->
            </div><!-- /.col-md-6 col-lg-4 -->
            <div class="col-md-6 col-lg-4">
                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                    <div class="blog-card__image">
                        <img src="assets/images/blog/blog-1-3.jpg" alt="outstanding island for winter sun">
                    </div><!-- /.blog-card__image -->
                    <div class="blog-card__content">
                        <div class="blog-card__date"><span>30</span>
                            Aug</div><!-- /.blog-card__date -->
                        <ul class="list-unstyled blog-card__meta">
                            <li><a href="{{ route('news') }}"><i class="fas fa-tags"></i>Business</a></li>
                            <li><a href="{{ route('blog-detail') }}"><i class="fa fa-comments"></i> 2 Comments</a></li>
                        </ul><!-- /.list-unstyled blog-card__meta -->
                        <h3 class="blog-card__title"><a href="blog-details.html">outstanding island for winter sun</a></h3><!-- /.blog-card__title -->
                        <p class="blog-card__info">Lorem ipsum is simply free dolor sit amet, consect pisicing elit.</p>
                        <a href="{{ route('blog-detail') }}" class="blog-card__link">
                            Read more
                            <i class="icon-right-arrow"></i>
                        </a><!-- /.blog-card__link -->
                    </div><!-- /.blog-card__content -->
                </div><!-- /.blog-card -->
            </div><!-- /.col-md-6 col-lg-4 -->
            <div class="col-md-6 col-lg-4">
                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                    <div class="blog-card__image">
                        <img src="assets/images/blog/blog-1-4.jpg" alt="My supervisor didn't like the latest">
                    </div><!-- /.blog-card__image -->
                    <div class="blog-card__content">
                        <div class="blog-card__date"><span>30</span>
                            Aug</div><!-- /.blog-card__date -->
                        <ul class="list-unstyled blog-card__meta">
                            <li><a href="{{ route('news') }}"><i class="fas fa-tags"></i>Business</a></li>
                            <li><a href="{{ route('blog-detail') }}"><i class="fa fa-comments"></i> 2 Comments</a></li>
                        </ul><!-- /.list-unstyled blog-card__meta -->
                        <h3 class="blog-card__title"><a href="blog-details.html">My supervisor didn't like the latest</a></h3><!-- /.blog-card__title -->
                        <p class="blog-card__info">Lorem ipsum is simply free dolor sit amet, consect pisicing elit.</p>
                        <a href="{{ route('blog-detail') }}" class="blog-card__link">
                            Read more
                            <i class="icon-right-arrow"></i>
                        </a><!-- /.blog-card__link -->
                    </div><!-- /.blog-card__content -->
                </div><!-- /.blog-card -->
            </div><!-- /.col-md-6 col-lg-4 -->
            <div class="col-md-6 col-lg-4">
                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='400ms'>
                    <div class="blog-card__image">
                        <img src="assets/images/blog/blog-1-5.jpg" alt="We need to build it so that it scales">
                    </div><!-- /.blog-card__image -->
                    <div class="blog-card__content">
                        <div class="blog-card__date"><span>30</span>
                            Aug</div><!-- /.blog-card__date -->
                        <ul class="list-unstyled blog-card__meta">
                            <li><a href="{{ route('news') }}"><i class="fas fa-tags"></i>Business</a></li>
                            <li><a href="{{ route('blog-detail') }}"><i class="fa fa-comments"></i> 2 Comments</a></li>
                        </ul><!-- /.list-unstyled blog-card__meta -->
                        <h3 class="blog-card__title"><a href="blog-details.html">We need to build it so that it scales</a></h3><!-- /.blog-card__title -->
                        <p class="blog-card__info">Lorem ipsum is simply free dolor sit amet, consect pisicing elit.</p>
                        <a href="{{ route('blog-detail') }}" class="blog-card__link">
                            Read more
                            <i class="icon-right-arrow"></i>
                        </a><!-- /.blog-card__link -->
                    </div><!-- /.blog-card__content -->
                </div><!-- /.blog-card -->
            </div><!-- /.col-md-6 col-lg-4 -->
            <div class="col-md-6 col-lg-4">
                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>
                    <div class="blog-card__image">
                        <img src="assets/images/blog/blog-1-6.jpg" alt="Big picture organic growth, or fast">
                    </div><!-- /.blog-card__image -->
                    <div class="blog-card__content">
                        <div class="blog-card__date"><span>30</span>
                            Aug</div><!-- /.blog-card__date -->
                        <ul class="list-unstyled blog-card__meta">
                            <li><a href="{{ route('news') }}"><i class="fas fa-tags"></i>Business</a></li>
                            <li><a href="{{ route('blog-detail') }}"><i class="fa fa-comments"></i> 2 Comments</a></li>
                        </ul><!-- /.list-unstyled blog-card__meta -->
                        <h3 class="blog-card__title"><a href="blog-details.html">Big picture organic growth, or fast</a></h3><!-- /.blog-card__title -->
                        <p class="blog-card__info">Lorem ipsum is simply free dolor sit amet, consect pisicing elit.</p>
                        <a href="{{ route('blog-detail') }}" class="blog-card__link">
                            Read more
                            <i class="icon-right-arrow"></i>
                        </a><!-- /.blog-card__link -->
                    </div><!-- /.blog-card__content -->
                </div><!-- /.blog-card -->
            </div><!-- /.col-md-6 col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
@endsection
