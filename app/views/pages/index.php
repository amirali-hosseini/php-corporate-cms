<!DOCTYPE html>
<html dir="rtl" lang="fa">

<head>
    <title><?= APP_NAME ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1,maximum-scale=1">
    <link rel="shortcut icon" href="<?= asset('/images/favicon.ico') ?>">
    <link rel="stylesheet" href="<?= asset('/css/icons.min.css') ?>">
    <link rel="stylesheet" href="<?= asset('/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= asset('/css/plugins.min.css') ?>">
    <link rel="stylesheet" href="<?= asset('/css/colors.css') ?>">
    <link rel="stylesheet" href="<?= asset('/css/styles.css') ?>">
</head>
<body>

<?php include_once APP_ROOT . '/views/layouts/navbar.php' ?>

<section class="section-hero section-hero-1">
    <div class="owl-carousel carousel-style-3" data-nav="true" data-loop="true" data-autoplay="true"
         data-autoplayTimeout="9000">
        <div class="item">
            <span class="hero-parallax paroller" data-paroller-factor="0.3"
                  style="background-image: url(<?= asset('/images/home-image-1-1.jpg') ?>)"></span>
            <div class="container">
                <div class="hero-item">
                    <div class="max-w-576 div-center text-center">
                        <h1><span>ما خلاقیت را</span> <span>ایجاد میکنیم.</span></h1>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است.</p>
                        <a href="index-3.html#" class="button button-md button-radius button-primary">
                            <i class="fa fa-long-arrow-right"></i>
                            شروع کنید
                        </a>
                        <a href="https://youtu.be/l-epKcOA7RQ" class="button button-md button-radius button-secondary">
                            <i class="fa fa-play"></i>
                            نمایش ویدیو
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <span class="hero-parallax paroller" data-paroller-factor="0.3"
                  style="background-image: url(<?= asset('/images/home-image-1-2.jpg') ?>)"></span>
            <div class="container">
                <div class="hero-item">
                    <div class="max-w-576 div-center text-center">
                        <h2><span>رشد خود را </span> <span>با شرکت ما شروع کنید.</span></h2>
                        <p>ما به توسعه تجارت خود کمک می کنیم. ما بهترین خدمات را با بهترین نتایج ارائه می دهیم. با پروژه
                            من شروع کنید</p>
                        <a href="index-3.html#" class="button button-md button-radius button-primary">
                            <i class="fa fa-long-arrow-right"></i>
                            با پروژه من شروع کنید
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-features section-features-3 section-divider">
    <div class="container">
        <div class="section-title section-title-2 div-center text-center max-w-576">
            <h2>خدمات پایه</h2>
            <h3>بهترین خدمات ما برای کسب و کار موفق شما.</h3>
            <p>
                <span class="divider divider-line"></span>
            </p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                <div class="feature-item">
                    <div class="row">
                        <div class="col-3">
                            <i class="fa fa-filter"></i>
                        </div>
                        <div class="col-9">
                            <h4>بهینه سازی سرعت</h4>
                            <p>طراحی و توسعه انواع سایت در کوتاه ترین زمان</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                <div class="feature-item">
                    <div class="row">
                        <div class="col-3">
                            <i class="fa fa-thumb-tack"></i>
                        </div>
                        <div class="col-9">
                            <h4>پشتیبانی حرفه ای</h4>
                            <p>طراحی و توسعه انواع سایت در کوتاه ترین زمان</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                <div class="feature-item">
                    <div class="row">
                        <div class="col-3">
                            <i class="fa fa-flask"></i>
                        </div>
                        <div class="col-9">
                            <h4>عملکرد بالا</h4>
                            <p>طراحی و توسعه انواع سایت در کوتاه ترین زمان</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                <div class="feature-item">
                    <div class="row">
                        <div class="col-3">
                            <i class="fa fa-trophy"></i>
                        </div>
                        <div class="col-9">
                            <h4>سئوی دوستانه</h4>
                            <p>طراحی و توسعه انواع سایت در کوتاه ترین زمان</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                <div class="feature-item">
                    <div class="row">
                        <div class="col-3">
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="col-9">
                            <h4>طرح بندی ریسپانسیو</h4>
                            <p>طراحی و توسعه انواع سایت در کوتاه ترین زمان</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                <div class="feature-item">
                    <div class="row">
                        <div class="col-3">
                            <i class="fa fa-snowflake-o"></i>
                        </div>
                        <div class="col-9">
                            <h4>پشتیبانی و آپدیت رایگان</h4>
                            <p>طراحی و توسعه انواع سایت در کوتاه ترین زمان</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-about-us section-about-us-2 section-divider">
    <div class="container">
        <div class="owl-carousel" data-items="1" data-nav="true">
            <div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <div class="about-us-box">
                            <div class="about-us-image"
                                 style="background-image: url(<?= asset('/images/about/about-us-2-2.jpg') ?>)"></div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <div class="inner text-left">
                            <h2>
                                <span>ما چه کاری انجام میدهیم</span>
                                استراتژی بسازید ، تجارت خود را بسازید.
                            </h2>
                            <div class="divider divider-line"></div>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.</p>
                            <div class="feature-item pt-30">
                                <div class="row row-sm">
                                    <div class="col-3 col-sm-2">
                                        <i class="fa fa-flask"></i>
                                    </div>
                                    <div class="col-9 col-sm-10">
                                        <b>ما آینده می سازیم</b>
                                        <p>طراحی و توسعه انواع سایت در کوتاه ترین زمان</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <div class="about-us-box">
                            <div class="about-us-image"
                                 style="background-image: url(<?= asset('/images/about/about-us-2-1.jpg') ?>)"></div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <div class="inner text-left">
                            <h2>
                                <span>کاری که ما انجام می دهیم</span>
                                طراحی، توسعه، پردازش و ارائه
                            </h2>
                            <div class="divider divider-line"></div>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.</p>
                            <div class="feature-item pt-30">
                                <div class="row row-sm">
                                    <div class="col-3 col-sm-2">
                                        <i class="fa fa-trophy"></i>
                                    </div>
                                    <div class="col-9 col-sm-10">
                                        <b>ماموریت و چشم انداز ما</b>
                                        <p>طراحی و توسعه انواع سایت در کوتاه ترین زمان</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-portfolio section-portfolio-1 portfolio-gallery section-divider">
    <div class="container">
        <div class="section-title section-title-2 div-center text-center max-w-576">
            <h2>نمونه کار ما</h2>
            <h3>ما جهانی هستیم</h3>
            <p>
                <span class="divider divider-line"></span>

            </p>
        </div>
    </div>
    <div class="container">
        <div class="data-filters">
            <ul class="data-filters-links">
                <li class="active" data-filter="all">
                    همه
                </li>
                <li data-filter="1">
                    شرکتی
                </li>
                <li data-filter="2">
                    کسب و کار
                </li>
                <li data-filter="3">
                    مارکتینگ
                </li>
                <li data-filter="4">
                    مالی
                </li>
            </ul>
            <ul class="data-filters-items row row-sm justify-content-md-center">
                <li class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3" data-filter="1">
                    <div class="portfolio-item bg-gradient-180">
                        <img src="<?= asset('/images/portfolio/portfolio-1-2.jpg') ?>"
                             alt="Relevant textual alternative to the portfolio-1 image">
                        <div class="portfolio-info">
                            <div class="portfolio-link">
                                <a href="portfolio-detail.html"
                                   class="button button-circle button-circle-md button-secondary"
                                   title="portfolio detail">
                                    <i class="fa fa-link"></i>
                                </a>
                            </div>
                            <div class="portfolio-link portfolio-zoom">
                                <a href="<?= asset('/images/portfolio/portfolio-1-2.jpg') ?>"
                                   class="button button-circle button-circle-md button-primary"
                                   title="portfolio detail">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                            <h4>بازاریابی برندینگ</h4>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است..</p>
                        </div>
                    </div>
                </li>
                <li class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3" data-filter="2">
                    <div class="portfolio-item bg-gradient-180">
                        <img src="<?= asset('/images/portfolio/portfolio-1-8.jpg') ?>"
                             alt="Relevant textual alternative to the portfolio-2 image">
                        <div class="portfolio-info">
                            <div class="portfolio-link">
                                <a href="portfolio-detail.html"
                                   class="button button-circle button-circle-md button-secondary"
                                   title="portfolio detail">
                                    <i class="fa fa-link"></i>
                                </a>
                            </div>
                            <div class="portfolio-link portfolio-zoom">
                                <a href="<?= asset('/images/portfolio/portfolio-1-8.jpg') ?>"
                                   class="button button-circle button-circle-md button-primary"
                                   title="portfolio detail">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                            <h4>بازاریابی برندینگ</h4>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است..</p>
                        </div>
                    </div>
                </li>
                <li class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3" data-filter="3">
                    <div class="portfolio-item bg-gradient-180">
                        <img src="<?= asset('/images/portfolio/portfolio-1-3.jpg') ?>"
                             alt="Relevant textual alternative to the portfolio-3 image">
                        <div class="portfolio-info">
                            <div class="portfolio-link">
                                <a href="portfolio-detail.html"
                                   class="button button-circle button-circle-md button-secondary"
                                   title="portfolio detail">
                                    <i class="fa fa-link"></i>
                                </a>
                            </div>
                            <div class="portfolio-link portfolio-zoom">
                                <a href="<?= asset('/images/portfolio/portfolio-1-3.jpg') ?>"
                                   class="button button-circle button-circle-md button-primary"
                                   title="portfolio detail">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                            <h4>بازاریابی برندینگ</h4>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است..</p>
                        </div>
                    </div>
                </li>
                <li class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3" data-filter="4">
                    <div class="portfolio-item bg-gradient-180">
                        <img src="<?= asset('/images/portfolio/portfolio-1-4.jpg') ?>"
                             alt="Relevant textual alternative to the portfolio-4 image">
                        <div class="portfolio-info">
                            <div class="portfolio-link">
                                <a href="portfolio-detail.html"
                                   class="button button-circle button-circle-md button-secondary"
                                   title="portfolio detail">
                                    <i class="fa fa-link"></i>
                                </a>
                            </div>
                            <div class="portfolio-link portfolio-zoom">
                                <a href="<?= asset('/images/portfolio/portfolio-1-4.jpg') ?>"
                                   class="button button-circle button-circle-md button-primary"
                                   title="portfolio detail">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                            <h4>بازاریابی برندینگ</h4>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است..</p>
                        </div>
                    </div>
                </li>
                <li class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3" data-filter="1">
                    <div class="portfolio-item bg-gradient-180">
                        <img src="<?= asset('/images/portfolio/portfolio-1-5.jpg') ?>"
                             alt="Relevant textual alternative to the portfolio-5 image">
                        <div class="portfolio-info">
                            <div class="portfolio-link">
                                <a href="portfolio-detail.html"
                                   class="button button-circle button-circle-md button-secondary"
                                   title="portfolio detail">
                                    <i class="fa fa-link"></i>
                                </a>
                            </div>
                            <div class="portfolio-link portfolio-zoom">
                                <a href="<?= asset('/images/portfolio/portfolio-1-5.jpg') ?>"
                                   class="button button-circle button-circle-md button-primary"
                                   title="portfolio detail">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                            <h4>بازاریابی برندینگ</h4>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است..</p>
                        </div>
                    </div>
                </li>
                <li class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3" data-filter="2">
                    <div class="portfolio-item bg-gradient-180">
                        <img src="<?= asset('/images/portfolio/portfolio-1-6.jpg') ?>"
                             alt="Relevant textual alternative to the portfolio-6 image">
                        <div class="portfolio-info">
                            <div class="portfolio-link">
                                <a href="portfolio-detail.html"
                                   class="button button-circle button-circle-md button-secondary"
                                   title="portfolio detail">
                                    <i class="fa fa-link"></i>
                                </a>
                            </div>
                            <div class="portfolio-link portfolio-zoom">
                                <a href="<?= asset('/images/portfolio/portfolio-1-6.jpg') ?>"
                                   class="button button-circle button-circle-md button-primary"
                                   title="portfolio detail">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                            <h4>بازاریابی برندینگ</h4>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است..</p>
                        </div>
                    </div>
                </li>
                <li class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3" data-filter="3">
                    <div class="portfolio-item bg-gradient-180">
                        <img src="<?= asset('/images/portfolio/portfolio-1-7.jpg') ?>"
                             alt="Relevant textual alternative to the portfolio-7 image">
                        <div class="portfolio-info">
                            <div class="portfolio-link">
                                <a href="portfolio-detail.html"
                                   class="button button-circle button-circle-md button-secondary"
                                   title="portfolio detail">
                                    <i class="fa fa-link"></i>
                                </a>
                            </div>
                            <div class="portfolio-link portfolio-zoom">
                                <a href="<?= asset('/images/portfolio/portfolio-1-7.jpg') ?>"
                                   class="button button-circle button-circle-md button-primary"
                                   title="portfolio detail">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                            <h4>بازاریابی برندینگ</h4>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است..</p>
                        </div>
                    </div>
                </li>
                <li class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3" data-filter="4">
                    <div class="portfolio-item bg-gradient-180">
                        <img src="<?= asset('/images/portfolio/portfolio-1-8.jpg') ?>"
                             alt="Relevant textual alternative to the portfolio-8 image">
                        <div class="portfolio-info">
                            <div class="portfolio-link">
                                <a href="portfolio-detail.html"
                                   class="button button-circle button-circle-md button-secondary"
                                   title="portfolio detail">
                                    <i class="fa fa-link"></i>
                                </a>
                            </div>
                            <div class="portfolio-link portfolio-zoom">
                                <a href="<?= asset('/images/portfolio/portfolio-1-8.jpg') ?>"
                                   class="button button-circle button-circle-md button-primary"
                                   title="portfolio detail">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                            <h4>بازاریابی برندینگ</h4>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است..</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="section section-pricing section-pricing-2 section-divider">
    <div class="container">
        <div class="section-title section-title-2 div-center text-center max-w-576">
            <h2>قیمت های ما</h2>
            <h3>پلن و قیمت های منصفانه.</h3>
            <p>
                <span class="divider divider-line"></span>
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
            </p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="pricing-item">
                    <div class="pricing-item-head">
                        <h4>استارتی</h4>
                        <div class="pricing-item-price">
                            <strong>18,000</strong>
                            <span>تومان</span>
                            <span>/ماه</span>
                        </div>
                    </div>
                    <div class="pricing-item-body">
                        <ul>
                            <li>
                                <i class="fa fa-check" aria-hidden="true"></i>
                                5 گیگ فضای رایگان
                            </li>
                            <li>
                                <i class="fa fa-check" aria-hidden="true"></i>
                                20 گیگ پهنای باند
                            </li>
                            <li>
                                <i class="fa fa-check" aria-hidden="true"></i>
                                بانک اطلاعات Mysql
                            </li>
                            <li>
                                <i class="fa fa-check" aria-hidden="true"></i>
                                100 اکانت ایمیل
                            </li>
                            <li>
                                <i class="fa fa-check" aria-hidden="true"></i>
                                10 نام دامنه رایگان
                            </li>
                        </ul>
                        <a href="index-3.html#" class="button button-md button-radius button-dark">انتخاب پلن</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="pricing-item active bg-gradient-180">
                    <div class="pricing-item-head">
                        <h4>حرفه ای</h4>
                        <div class="pricing-item-price">
                            <strong>58,000</strong>
                            <span>تومان</span>
                            <span>/ماه</span>
                        </div>
                    </div>
                    <div class="pricing-item-body">
                        <ul>
                            <li>
                                <i class="fa fa-check" aria-hidden="true"></i>
                                5 گیگ فضای رایگان
                            </li>
                            <li>
                                <i class="fa fa-check" aria-hidden="true"></i>
                                20 گیگ پهنای باند
                            </li>
                            <li>
                                <i class="fa fa-check" aria-hidden="true"></i>
                                بانک اطلاعات Mysql
                            </li>
                            <li>
                                <i class="fa fa-check" aria-hidden="true"></i>
                                100 اکانت ایمیل
                            </li>
                            <li>
                                <i class="fa fa-check" aria-hidden="true"></i>
                                10 نام دامنه رایگان
                            </li>
                        </ul>
                        <a href="index-3.html#" class="button button-md button-radius button-light">انتخاب پلن</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="pricing-item">
                    <div class="pricing-item-head">
                        <h4>نامحدود</h4>
                        <div class="pricing-item-price">
                            <strong>78,000</strong>
                            <span>تومان</span>
                            <span>/ماه</span>
                        </div>
                    </div>
                    <div class="pricing-item-body">
                        <ul>
                            <li>
                                <i class="fa fa-check" aria-hidden="true"></i>
                                5 گیگ فضای رایگان
                            </li>
                            <li>
                                <i class="fa fa-check" aria-hidden="true"></i>
                                20 گیگ پهنای باند
                            </li>
                            <li>
                                <i class="fa fa-check" aria-hidden="true"></i>
                                بانک اطلاعات Mysql
                            </li>
                            <li>
                                <i class="fa fa-check" aria-hidden="true"></i>
                                100 اکانت ایمیل
                            </li>
                            <li>
                                <i class="fa fa-check" aria-hidden="true"></i>
                                10 نام دامنه رایگان
                            </li>
                        </ul>
                        <a href="index-3.html#" class="button button-md button-radius button-dark">انتخاب پلن</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-testimonials section-testimonials-2 section-divider">
    <div class="container">
        <div class="section-title section-title-2 div-center text-center max-w-576">
            <h2>مشتریان</h2>
            <h3>حرف های مشتریان</h3>
            <p>
                <span class="divider divider-line"></span>

            </p>
        </div>
    </div>
    <span class="bg-color bg-dark-90"></span>
    <div class="owl-carousel carousel-style-1 carousel-dark" data-margin="30" data-nav="true" data-dots="true"
         data-loop="true" data-center="true" data-breakpoint="768:2,992:2,1200:3">
        <div class="testimonial-item">
            <div class="testimonial-content">
                <i class="fa fa-quote-right"></i>
                <h5>پشتیبانی قدرتمند</h5>
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها
                    و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.</p>
            </div>
            <div class="testimonial-details">
                <div class="testimonial-image">
                    <img src="<?= asset('/images/team/person-1.jpg') ?>"
                         alt="Relevant textual alternative to the author-1 image"/>
                </div>
                <h4>
                    جعفر عباسی
                    <span>همکار ما</span>
                </h4>
            </div>
        </div>
        <div class="testimonial-item">
            <div class="testimonial-content">
                <i class="fa fa-quote-right"></i>
                <h5>پشتیبانی قدرتمند</h5>
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها
                    و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.</p>
            </div>
            <div class="testimonial-details">
                <div class="testimonial-image">
                    <img src="<?= asset('/images/team/person-2.jpg') ?>"
                         alt="Relevant textual alternative to the author-2 image"/>
                </div>
                <h4>
                    ناصر علی یاری
                    <span>مشتری ما</span>
                </h4>
            </div>
        </div>
        <div class="testimonial-item">
            <div class="testimonial-content">
                <i class="fa fa-quote-right"></i>
                <h5>پشتیبانی قدرتمند</h5>
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها
                    و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.</p>
            </div>
            <div class="testimonial-details">
                <div class="testimonial-image">
                    <img src="<?= asset('/images/team/person-3.jpg') ?>"
                         alt="Relevant textual alternative to the author-3 image"/>
                </div>
                <h4>
                    مجتبی شاهی
                    <span>همکار ما</span>
                </h4>
            </div>
        </div>
        <div class="testimonial-item">
            <div class="testimonial-content">
                <i class="fa fa-quote-right"></i>
                <h5>پشتیبانی قدرتمند</h5>
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها
                    و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.</p>
            </div>
            <div class="testimonial-details">
                <div class="testimonial-image">
                    <img src="<?= asset('/images/team/person-4.jpg') ?>"
                         alt="Relevant textual alternative to the author-4 image"/>
                </div>
                <h4>
                    مایکل آردص
                    <span>رئیس ما</span>
                </h4>
            </div>
        </div>
    </div>
</section>

<section class="section section-users section-users-2">
    <div class="container">
        <div class="section-title section-title-2 div-center text-center max-w-576">
            <h2>تیم ما</h2>
            <h3>ملاقات تیم ما</h3>
            <p>
                <span class="divider divider-line"></span>
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و
                متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.
            </p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                <div class="user-item">
                    <div class="user-image"
                         style="background-image: url(<?= asset('/images/team/person-1.jpg') ?>);"></div>
                    <div class="user-details">
                        <h4 class="user-name">طاهر نصیری</h4>
                        <p>مدیر عامل و موسس</p>
                        <ul class="user-social-icons">
                            <li>
                                <a href="index-3.html#">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="index-3.html#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="index-3.html#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="index-3.html#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                <div class="user-item">
                    <div class="user-image"
                         style="background-image: url(<?= asset('/images/team/person-2.jpg') ?>);"></div>
                    <div class="user-details">
                        <h4 class="user-name">مایکل خامس</h4>
                        <p>توسعه وب</p>
                        <ul class="user-social-icons">
                            <li>
                                <a href="index-3.html#">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="index-3.html#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="index-3.html#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="index-3.html#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                <div class="user-item">
                    <div class="user-image"
                         style="background-image: url(<?= asset('/images/team/person-3.jpg') ?>);"></div>
                    <div class="user-details">
                        <h4 class="user-name">جعفر خان</h4>
                        <p>طراح وب</p>
                        <ul class="user-social-icons">
                            <li>
                                <a href="index-3.html#">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="index-3.html#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="index-3.html#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="index-3.html#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                <div class="user-item">
                    <div class="user-image"
                         style="background-image: url(<?= asset('/images/team/person-4.jpg') ?>);"></div>
                    <div class="user-details">
                        <h4 class="user-name">مجتبی شاهی</h4>
                        <p>متخصص</p>
                        <ul class="user-social-icons">
                            <li>
                                <a href="index-3.html#">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="index-3.html#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="index-3.html#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="index-3.html#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="call-to-action call-to-action-1 overlay-color overlay-pattern paroller"
         style="background-image: url(<?= asset('/images/call-to-action-1.jpg') ?>)">
    <span class="bg-color bg-dark-40"></span>
    <span class="bg-pattern bg-pattern-1"></span>
    <div class="container">
        <div class="div-center text-center max-w-576 box">
            <h3>بیایید با هم کار کنیم.</h3>
            <p>ما به توسعه تجارت خود کمک می کنیم. ما بهترین خدمات را با بهترین نتایج ارائه می دهیم.</p>
            <a href="index-3.html#" class="button button-md button-radius button-primary">
                <i class="fa fa-long-arrow-right"></i>
                با پروژه من شروع کنید
            </a>
        </div>
    </div>
</section>

<section class="section section-posts section-posts-3 section-divider">
    <div class="container">
        <div class="section-title section-title-2 div-center text-center max-w-576">
            <h2>بلاگ ما</h2>
            <h3>اخبار و موضوعات کسب و کار</h3>
            <p>
                <span class="divider divider-line"></span>
                ما می توانیم به توسعه تجارت خود کمک کنیم. ما بهترین خدمات را با بهترین نتایج ارائه می دهیم.
            </p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="post-item">
                    <div class="post-image">
                        <a href="blog-single.html">
                            <img src="<?= asset('/images/blog/post-1.jpg') ?>"
                                 alt="Relevant textual alternative to the post-1 image">
                        </a>
                        <div class="post-meta">
                            <span class="post-meta-date">1398 آبان</span>
                        </div>
                    </div>
                    <div class="post-info">
                        <h3>
                            <a href="blog-single.html"> هر ماه چند پست وبلاگ باید منتشر کند؟ و چه باید کرد؟</a>
                        </h3>
                        <div class="divider divider-line"></div>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.,
                            طراحی مدرن و به روز.</p>
                        <a href="blog-single.html" class="button-read-more">
                            مطالعه بیشتر
                            <i class="fa fa-long-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="post-item">
                    <div class="post-image">
                        <a href="blog-single.html">
                            <img src="<?= asset('/images/blog/post-2.jpg') ?>"
                                 alt="Relevant textual alternative to the post-2 image">
                        </a>
                        <div class="post-meta">
                            <span class="post-meta-date">1398 آبان</span>
                        </div>
                    </div>
                    <div class="post-info">
                        <h3>
                            <a href="blog-single.html">راهنمای عملی برای بازاریابی فرانشیز: نحوه خرید مردم اکنون</a>
                        </h3>
                        <div class="divider divider-line"></div>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.,
                            طراحی مدرن و به روز.</p>
                        <a href="blog-single.html" class="button-read-more">
                            مطالعه بیشتر
                            <i class="fa fa-long-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="post-item">
                    <div class="post-image">
                        <a href="blog-single.html">
                            <img src="<?= asset('/images/blog/post-3.jpg') ?>"
                                 alt="Relevant textual alternative to the post-3 image">
                        </a>
                        <div class="post-meta">
                            <span class="post-meta-date">1398 آبان</span>
                        </div>
                    </div>
                    <div class="post-info">
                        <h3>
                            <a href="blog-single.html">6 راه برای دریافت ترافیک ارگانیک بیشتر بدون رتبه وب سایت خود</a>
                        </h3>
                        <div class="divider divider-line"></div>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.,
                            طراحی مدرن و به روز.</p>
                        <a href="blog-single.html" class="button-read-more">
                            مطالعه بیشتر
                            <i class="fa fa-long-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once APP_ROOT . '/views/layouts/footer.php' ?>

<div class="scroll-up">
    <i class="fa fa-angle-up"></i>
</div>
<script src="<?= asset('/js/jquery.min.js') ?>"></script>
<script src="<?= asset('/js/bootstrap.min.js') ?>"></script>
<script src="<?= asset('/js/plugins.min.js') ?>"></script>
<script src="<?= asset('/js/main-scripts.js') ?>"></script>
</body>

</html>