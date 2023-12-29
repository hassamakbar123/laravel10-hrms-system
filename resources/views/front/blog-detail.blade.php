@extends('layouts.front.app')
@section('content_front')
<section class="page-header">
    <div class="page-header__bg"></div>
    <div class="page-header__shape"><img src="assets/images/shapes/page-header-shape.png" alt="hiredots"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2 class="page-header__title">Blog Details</h2>
        <ul class="hiredots-breadcrumb list-unstyled">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><span>News Details</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->

<section class="blog-one blog-one--page">
    <div class="container">
        <div class="row gutter-y-60">
            <div class="col-lg-8">
                <div class="blog-details">
                    <div class="blog-card blog-card-two @@extraClassName">
                        <div class="blog-card__image">
                            <img src="assets/images/blog/blog-l-1-3.jpg" alt="Best place of true splander">

                        </div><!-- /.blog-card__image -->
                        <div class="blog-card-two__content">
                            <div class="blog-card__date"><span>30</span>
                                Aug</div><!-- /.blog-card__date -->
                            <ul class="list-unstyled blog-card__meta">
                                <li><a href="blog.html"><i class="fas fa-tags"></i>Business</a></li>
                                <li><a href="blog.html"> <i class="fa fa-comments"></i> 2 Comments</a></li>
                            </ul><!-- /.list-unstyled blog-card__meta -->
                            <h3 class="blog-card__title">Guide to HR Adviser and Clients Lessening</h3>
                            <!-- /.blog-card__title -->
                            <p class="blog-card-two__text">Lorem ipsum is simply free dolor sit amet, consect pisicing elit. Lorem ipsum
                                dolor sit amet, cibo mundi ea duo, vim exerci phaedrum. There are many variations of passages of Lorem
                                Ipsum available, but the majority have alteration in some injected or words which don't look even
                                slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                anything embarrang hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to
                                repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a
                                dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate
                                Lorem Ipsum which looks reasonable. </p><!-- /.blog-card-two__text -->
                            <p class="blog-card-two__text">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley of type and scrambled it to make a type simen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting.</p>
                            <p class="blog-card-two__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                orem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took a
                                galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                                but also the leap into unchanged.</p>
                            <!-- /.blog-card-two__text -->
                        </div><!-- /.blog-card-two__content -->
                    </div><!-- /.blog-card -->
                    <div class="blog-details__meta">
                        <div class="blog-details__tags">
                            <h4 class="blog-details__tags__title">Tags</h4><!-- /.blog-details__tags__title -->
                            <div class="sidebar__tags">
                                <a href="{{ route('news') }}">Consulting</a>
                                <a href="{{ route('news') }}">Contract</a>
                            </div><!-- /.sidebar__projects -->
                        </div><!-- /.blog-details__tags -->
                        <div class="blog-details__social">
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
                        </div><!-- /.blog-details__social -->
                    </div><!-- /.blog-details__meta -->

                    <ul class="sidebar__posts list-unstyled blog-details__paginations">
                        <li class="sidebar__posts__item">
                            <div class="sidebar__posts__content">
                                <h4 class="sidebar__posts__title"><a href="{{ route('blog-detail') }}">Does my Business Need a Director of
                                        Training?</a></h4><!-- /.sidebar__posts__title -->
                            </div><!-- /.sidebar__posts__content -->
                        </li>
                        <li class="sidebar__posts__item">
                            <div class="sidebar__posts__content">
                                <h4 class="sidebar__posts__title"><a href="{{ route('blog-detail') }}">Get deep knowledge
                                        of your beauty</a></h4><!-- /.sidebar__posts__title -->
                            </div><!-- /.sidebar__posts__content -->
                        </li>
                    </ul>
                </div><!-- /.blog-details -->

                <div class="comments-one">
                    <h3 class="comments-one__title">2 Comments</h3><!-- /.comments-one__title -->
                    <ul class="list-unstyled comments-one__list">
                        <li class="comments-one__card">
                            <div class="comments-one__card__image">
                                <img src="assets/images/blog/blog-comment-1-1.jpg" alt="">
                            </div><!-- /.comments-one__card__image -->
                            <div class="comments-one__card__content">
                                <h3 class="comments-one__card__title">Kevin martin</h3><!-- /.comments-one__card__title -->
                                <p class="comments-one__card__text">It has survived not only five centuries, but also the leap into electronic typesetting simply fee text aunchanged. It was popularised in the sheets containing lorem ipsum is simply free text.
                                </p><!-- /.comments-one__card__text -->
                                <div class="comments-one__card__btn">
                                    <a href="#" class="hiredots-btn comments-one__card__reply"><span>Reply</span></a>
                                </div><!-- /.comments-one__card__btn -->
                            </div><!-- /.comments-one__card__content -->
                        </li><!-- /.comments-one__card -->
                        <li class="comments-one__card">
                            <div class="comments-one__card__image">
                                <img src="assets/images/blog/blog-comment-1-2.jpg" alt="">
                            </div><!-- /.comments-one__card__image -->
                            <div class="comments-one__card__content">
                                <h3 class="comments-one__card__title">Sarah albert</h3><!-- /.comments-one__card__title -->
                                <p class="comments-one__card__text">Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia
                                    nulla. Aliquam quis purus in justo pulvinar tempor. Aliquam tellus nulla, sollicitudin at euismod.
                                </p><!-- /.comments-one__card__text -->
                                <div class="comments-one__card__btn">
                                    <a href="#" class="hiredots-btn comments-one__card__reply"><span>Reply</span></a>
                                </div><!-- /.comments-one__card__btn -->
                            </div><!-- /.comments-one__card__content -->
                        </li><!-- /.comments-one__card -->
                    </ul><!-- /.list-unstyled comments-one__list -->
                </div><!-- /.comments-one -->

                <div class="comments-form">
                    <h3 class="comments-form__title">Leave a comment</h3><!-- /.comments-form__title -->
                    <form class="comments-form__form contact-form-validated form-one">
                        <div class="form-one__group">
                            <div class="form-one__control">
                                <input type="text" name="name" placeholder="Your name">
                            </div><!-- /.form-one__control -->
                            <div class="form-one__control">
                                <input type="email" name="email" placeholder="Email address">
                            </div><!-- /.form-one__control -->
                            <div class="form-one__control form-one__control--full">
                                <textarea name="message" placeholder="Write  a message"></textarea><!-- /# -->
                            </div><!-- /.form-one__control -->
                            <div class="form-one__control form-one__control--full">
                                <button type="submit" class="hiredots-btn hiredots-btn--base"><span>Submit comment</span></button>
                            </div><!-- /.form-one__control -->
                        </div><!-- /.form-one__group -->
                    </form>
                    <div class="result"></div>
                </div><!-- /.comments-form -->
            </div><!-- /.col-lg-8 -->
            <div class="col-lg-4">
                <div class="sidebar">
                    <aside class="widget-area">
                        <div class="sidebar__single sidebar__search-wrap">
                            <form action="#" class="sidebar__search">
                                <input type="text" placeholder="Search here">
                                <button type="submit" aria-label="search submit">
                                    <span><i class="icon-magnifying-glass"></i></span>
                                </button>
                            </form><!-- /.sidebar__search -->
                        </div><!-- /.sidebar__single -->
                        <div class="sidebar__single">
                            <h4 class="sidebar__title">Latest posts</h4><!-- /.sidebar__title -->
                            <ul class="sidebar__posts list-unstyled">
                                <li class="sidebar__posts__item">
                                    <div class="sidebar__posts__image">
                                        <img src="assets/images/blog/lp-1-1.jpg" alt="hiredots">
                                    </div><!-- /.sidebar__posts__image -->
                                    <div class="sidebar__posts__content">
                                        <p class="sidebar__posts__meta"><i class="fa fa-comments"></i>2 Comments</p><!-- /.sidebar__posts__comment -->
                                        <h4 class="sidebar__posts__title"><a href="{{ route('blog-detail') }}">Guide to HR Adviser
                                                and Clients Lessening</a></h4><!-- /.sidebar__posts__title -->
                                    </div><!-- /.sidebar__posts__content -->
                                </li>
                                <li class="sidebar__posts__item">
                                    <div class="sidebar__posts__image">
                                        <img src="assets/images/blog/lp-1-2.jpg" alt="hiredots">
                                    </div><!-- /.sidebar__posts__image -->
                                    <div class="sidebar__posts__content">
                                        <p class="sidebar__posts__meta"><i class="fa fa-comments"></i>2 Comments</p><!-- /.sidebar__posts__comment -->
                                        <h4 class="sidebar__posts__title"><a href="{{ route('blog-detail') }}">Get deep knowledge
                                                of your beauty</a></h4><!-- /.sidebar__posts__title -->
                                    </div><!-- /.sidebar__posts__content -->
                                </li>
                                <li class="sidebar__posts__item">
                                    <div class="sidebar__posts__image">
                                        <img src="assets/images/blog/lp-1-3.jpg" alt="hiredots">
                                    </div><!-- /.sidebar__posts__image -->
                                    <div class="sidebar__posts__content">
                                        <p class="sidebar__posts__meta"><i class="fa fa-comments"></i>2 Comments</p><!-- /.sidebar__posts__comment -->
                                        <h4 class="sidebar__posts__title"><a href="{{ route('blog-detail') }}">Get deep knowledge
                                                of your beauty</a></h4><!-- /.sidebar__posts__title -->
                                    </div><!-- /.sidebar__posts__content -->
                                </li>
                            </ul><!-- /.sidebar__posts list-unstyled -->
                        </div><!-- /.sidebar__single -->
                        <div class="sidebar__single">
                            <h4 class="sidebar__title">Categories</h4><!-- /.sidebar__title -->
                            <ul class="sidebar__categories list-unstyled">
                                <li><a href="{{ route('news') }}">Consulting</a></li>
                                <li><a href="{{ route('news') }}">Human Resource</a></li>
                                <li><a href="{{ route('news') }}">Contracts</a></li>
                                <li><a href="{{ route('news') }}">Direct Hiring</a></li>
                                <li><a href="{{ route('news') }}">Advisers</a></li>
                            </ul><!-- /.sidebar__categories list-unstyled -->
                        </div><!-- /.sidebar__single -->
                        <div class="sidebar__single">
                            <h4 class="sidebar__title">Tags</h4><!-- /.sidebar__title -->
                            <div class="sidebar__tags">
                                <a href="{{ route('news') }}">Consulting</a>
                                <a href="{{ route('news') }}">Contract</a>
                                <a href="{{ route('news') }}">Hiring</a>
                                <a href="{{ route('news') }}">Human resource</a>
                                <a href="{{ route('news') }}">Adviser</a>
                            </div><!-- /.sidebar__tags -->
                        </div><!-- /.sidebar__single -->
                    </aside><!-- /.widget-area -->
                </div><!-- /.sidebar -->
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.blog-one blog-one--page -->
@endsection
