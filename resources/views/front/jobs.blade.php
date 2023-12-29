@extends('layouts.front.app')

@section('content_front')
<section class="page-header">
    <div class="page-header__bg"></div>
    <div class="page-header__shape"><img src="assets/images/shapes/page-header-shape.png" alt="hiredots"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2 class="page-header__title">Jobs</h2>
        <ul class="hiredots-breadcrumb list-unstyled">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><span>Jobs</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->

<div class="jobs">
    <div class="container">
        <form class="contact-form-validated" action="https://thegenius.co/html/hiredots/inc/sendemail.php" novalidate="novalidate">
            <div class="jobs__form wow fadeInUp animated" data-wow-duration="1500ms">
                <div class="jobs__group row gutter-y-20">
                    <div class="col-md-6">
                        <div class="job__control Jobs__control--full">
                            <input type="text" name="name" placeholder="All Jobs">
                        </div><!-- /.Jobs__control Jobs__control--full -->
                    </div>
                    <div class="col-md-6">
                        <div class="jobs__control Jobs__control--full">
                            <input type="text" name="name" placeholder="Any Location">
                        </div><!-- /.Jobs__control Jobs__control--full -->
                    </div>
                </div><!-- /.Jobs__group -->
            </div>
            <div class="jobs__form__checkbox">
                <div class="item">
                    <input type="checkbox" id="freelance">
                    <label for="freelance" class="check"></label>
                    <label for="freelance"> Freelance </label>
                </div>
                <div class="item">
                    <input type="checkbox" id="full">
                    <label for="full" class="check"></label>
                    <label for="full"> Full Time </label>
                </div>
                <div class="item">
                    <input type="checkbox" id="part">
                    <label for="part" class="check"></label>
                    <label for="part"> Part Time </label>
                </div>
                <div class="item">
                    <input type="checkbox" id="temporary">
                    <label for="temporary" class="check"></label>
                    <label for="temporary"> Temporary </label>
                </div>
            </div>
        </form>
        <div class="jobs-list">
            <!-- job card  -->
            <div class="jobs-list__card">
                <div class="jobs-list__left">
                    <div class="jobs-list__logo">
                        <img src="assets/images/jobs/logo-1.png" alt="">
                    </div>
                    <div class="jobs-list__content">
                        <span class="jobs-list__time"><i class="fas fa-clock"></i> Posted 3 days ago </span>
                        <h3 class="jobs-list__title"><a href="contact.html">Software Engineer Job</a></h3>
                        <span class="jobs-list__location">San Fransisco, California</span>
                    </div>
                </div>
                <div class="jobs-list__right">
                    <span class="jobs-list__price"><b>$85,000 - $90,000</b> Per Year</span>
                    <a href="{{ route('contact') }}" class="hiredots-btn">Apply Now</a>
                </div>
            </div>
            <!-- job card  -->
            <div class="jobs-list__card">
                <div class="jobs-list__left">
                    <div class="jobs-list__logo">
                        <img src="assets/images/jobs/logo-2.png" alt="">
                    </div>
                    <div class="jobs-list__content">
                        <span class="jobs-list__time"><i class="fas fa-clock"></i> Posted 3 days ago </span>
                        <h3 class="jobs-list__title"><a href="contact.html">Administrative Coordinator</a></h3>
                        <span class="jobs-list__location">San Fransisco, California</span>
                    </div>
                </div>
                <div class="jobs-list__right">
                    <span class="jobs-list__price"><b>$85,000 - $90,000</b> Per Year</span>
                    <a href="{{ route('contact') }}" class="hiredots-btn">Apply Now</a>
                </div>
            </div>
            <!-- job card  -->
            <div class="jobs-list__card">
                <div class="jobs-list__left">
                    <div class="jobs-list__logo">
                        <img src="assets/images/jobs/logo-3.png" alt="">
                    </div>
                    <div class="jobs-list__content">
                        <span class="jobs-list__time"><i class="fas fa-clock"></i> Posted 3 days ago </span>
                        <h3 class="jobs-list__title"><a href="contact.html">Human Resources Manager</a></h3>
                        <span class="jobs-list__location">San Fransisco, California</span>
                    </div>
                </div>
                <div class="jobs-list__right">
                    <span class="jobs-list__price"><b>$85,000 - $90,000</b> Per Year</span>
                    <a href="{{ route('contact') }}" class="hiredots-btn">Apply Now</a>
                </div>
            </div>
            <!-- job card  -->
            <div class="jobs-list__card">
                <div class="jobs-list__left">
                    <div class="jobs-list__logo">
                        <img src="assets/images/jobs/logo-4.png" alt="">
                    </div>
                    <div class="jobs-list__content">
                        <span class="jobs-list__time"><i class="fas fa-clock"></i> Posted 3 days ago </span>
                        <h3 class="jobs-list__title"><a href="contact.html">Graphic & Web Designing</a></h3>
                        <span class="jobs-list__location">San Fransisco, California</span>
                    </div>
                </div>
                <div class="jobs-list__right">
                    <span class="jobs-list__price"><b>$85,000 - $90,000</b> Per Year</span>
                    <a href="{{ route('contact') }}" class="hiredots-btn">Apply Now</a>
                </div>
            </div>
            <!-- job card  -->
            <div class="jobs-list__card">
                <div class="jobs-list__left">
                    <div class="jobs-list__logo">
                        <img src="assets/images/jobs/logo-5.png" alt="">
                    </div>
                    <div class="jobs-list__content">
                        <span class="jobs-list__time"><i class="fas fa-clock"></i> Posted 3 days ago </span>
                        <h3 class="jobs-list__title"><a href="contact.html">Digital Marketing Assistant</a></h3>
                        <span class="jobs-list__location">San Fransisco, California</span>
                    </div>
                </div>
                <div class="jobs-list__right">
                    <span class="jobs-list__price"><b>$85,000 - $90,000</b> Per Year</span>
                    <a href="{{ route('contact') }}" class="hiredots-btn">Apply Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
