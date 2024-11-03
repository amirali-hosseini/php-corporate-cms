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

<section class="section-breadcrumb overlay-color"
         style="background-image:url(<?= asset('/images/breadcrumb/1.jpg') ?>)">
    <span class="bg-color bg-dark-60"></span>
    <div class="container pt-90 pb-90 vertical-wrap">
        <div class="vertical-inner text-center">
            <h1>بلاگ ما<span>آخرین مقالات آموزشی</span></h1>
        </div>
        <div class="breadcrumb-box">
            <div class="row row-0">
                <div class="col-12 col-sm-8">
                    <ol class="breadcrumb text-light">
                        <li>
                            <a href="blog-left-sidebar.html" class="breadcrumb-icon">
                                <i class="fa fa-home"></i>
                            </a>
                        </li>
                        <li>
                            <a href="blog-left-sidebar.html#">صفحات</a>
                        </li>
                        <li>
                            <a href="blog-left-sidebar.html#">لندینگ</a>
                        </li>
                        <li class="active">طراحی</li>
                    </ol>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="breadcrumb-search text-right">
                        <button class="button button-circle">
                            <i class="fa fa-search"></i>
                        </button>
                        <input type="text" placeholder="جستجو ...">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-posts section-posts-2 section-posts-4">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 order-lg-2 order-xl-2">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="post-item">
                            <div class="post-image">
                                <a href="blog-single.html">
                                    <img src="<?= asset('/images/blog/post-1.jpg') ?>"
                                         alt="Relevant textual alternative to the post-1 image">
                                </a>
                            </div>
                            <div class="post-info">
                                <h3>
                                    <a href="blog-single.html">هر ماه چند پست وبلاگ باید منتشر کند؟</a>
                                </h3>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. .</p>
                                <a href="blog-single.html" class="button-read-more">
                                    مطالعه بیشتر
                                    <i class="fa fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="post-item">
                            <div class="post-image">
                                <a href="blog-single.html">
                                    <img src="<?= asset('/images/blog/post-2.jpg') ?>"
                                         alt="Relevant textual alternative to the post-2 image">
                                </a>
                            </div>
                            <div class="post-info">
                                <h3>
                                    <a href="blog-single.html">هر ماه چند پست وبلاگ باید منتشر کند؟</a>
                                </h3>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. .</p>
                                <a href="blog-single.html" class="button-read-more">
                                    مطالعه بیشتر
                                    <i class="fa fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="post-item">
                            <div class="post-image">
                                <a href="blog-single.html">
                                    <img src="<?= asset('/images/blog/post-3.jpg') ?>"
                                         alt="Relevant textual alternative to the post-3 image">
                                </a>
                            </div>
                            <div class="post-info">
                                <h3>
                                    <a href="blog-single.html">هر ماه چند پست وبلاگ باید منتشر کند؟</a>
                                </h3>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. .</p>
                                <a href="blog-single.html" class="button-read-more">
                                    مطالعه بیشتر
                                    <i class="fa fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="post-item">
                            <div class="post-image">
                                <a href="blog-single.html">
                                    <img src="<?= asset('/images/blog/post-4.jpg') ?>"
                                         alt="Relevant textual alternative to the post-4 image">
                                </a>
                            </div>
                            <div class="post-info">
                                <h3>
                                    <a href="blog-single.html">هر ماه چند پست وبلاگ باید منتشر کند؟</a>
                                </h3>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. .</p>
                                <a href="blog-single.html" class="button-read-more">
                                    مطالعه بیشتر
                                    <i class="fa fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="post-item">
                            <div class="post-image">
                                <a href="blog-single.html">
                                    <img src="<?= asset('/images/blog/post-5.jpg') ?>"
                                         alt="Relevant textual alternative to the post-5 image">
                                </a>
                            </div>
                            <div class="post-info">
                                <h3>
                                    <a href="blog-single.html">هر ماه چند پست وبلاگ باید منتشر کند؟</a>
                                </h3>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. .</p>
                                <a href="blog-single.html" class="button-read-more">
                                    مطالعه بیشتر
                                    <i class="fa fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="post-item">
                            <div class="post-image">
                                <a href="blog-single.html">
                                    <img src="<?= asset('/images/blog/post-6.jpg') ?>"
                                         alt="Relevant textual alternative to the post-6 image">
                                </a>
                            </div>
                            <div class="post-info">
                                <h3>
                                    <a href="blog-single.html">هر ماه چند پست وبلاگ باید منتشر کند؟</a>
                                </h3>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. .</p>
                                <a href="blog-single.html" class="button-read-more">
                                    مطالعه بیشتر
                                    <i class="fa fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="nav-pagination nav-pagination-1" aria-label="navigation">
                    <ul>
                        <li class="prev">
                            <a href="blog-left-sidebar.html#" title="صفحه قبلی">
                                <i class="fa fa-angle-left"></i>
                            </a>
                        </li>
                        <li class="active">
                            1
                        </li>
                        <li>
                            <a href="blog-left-sidebar.html#" title="صفحه 2">2</a>
                        </li>
                        <li>
                            <a href="blog-left-sidebar.html#" title="صفحه 3">3</a>
                        </li>
                        <li>
                            <a href="blog-left-sidebar.html#" title="صفحه 4">4</a>
                        </li>
                        <li>
                            <a href="blog-left-sidebar.html#" title="صفحه 5">5</a>
                        </li>
                        <li>
                            <a href="blog-left-sidebar.html#" title="صفحه 6">6</a>
                        </li>
                        <li class="next">
                            <a href="blog-left-sidebar.html#" title="صفحه بعدی">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-12 col-lg-4">
                <aside class="site-sidebar">
                    <div class="widget widget-search">
                        <div class="widget-body">
                            <div class="form form-simple">
                                <div class="form-item">
                                    <input type="text" placeholder="جستجوی چیزی ...">
                                </div>
                                <button class="btn-search">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="widget widget-categories">
                        <div class="widget-head">
                            <h3 class="widget-title">دسته بندی ها</h3>
                            <div class="divider divider-line"></div>
                        </div>
                        <div class="widget-body">
                            <ul class="tcategories categories-simple">
                                <li>
                                    <a href="blog-left-sidebar.html#" rel="tag">
                                        <i class="fa fa-folder-open"></i>
                                        آنالیز
                                    </a>
                                </li>
                                <li>
                                    <a href="blog-left-sidebar.html#" rel="tag">
                                        <i class="fa fa-folder-open"></i>
                                        شرکتی
                                    </a>
                                </li>
                                <li>
                                    <a href="blog-left-sidebar.html#" rel="tag">
                                        <i class="fa fa-folder-open"></i>
                                        مالی
                                    </a>
                                </li>
                                <li>
                                    <a href="blog-left-sidebar.html#" rel="tag">
                                        <i class="fa fa-folder-open"></i>
                                        بازاریابی آنلاین
                                    </a>
                                </li>
                                <li>
                                    <a href="blog-left-sidebar.html#" rel="tag">
                                        <i class="fa fa-folder-open"></i>
                                        پلن سایت
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget widget-tags">
                        <div class="widget-head">
                            <h3 class="widget-title">ابر برچسب ها</h3>
                            <div class="divider divider-line"></div>
                        </div>
                        <div class="widget-body">
                            <ul class="tags tags-simple">
                                <li>
                                    <a href="blog-left-sidebar.html#" rel="tag">آنالیز</a>
                                </li>
                                <li>
                                    <a href="blog-left-sidebar.html#" rel="tag">دسته بندی</a>
                                </li>
                                <li>
                                    <a href="blog-left-sidebar.html#" rel="tag">راهبردی</a>
                                </li>
                                <li>
                                    <a href="blog-left-sidebar.html#" rel="tag">کسب و کار</a>
                                </li>
                                <li>
                                    <a href="blog-left-sidebar.html#" rel="tag">طراحی گرافیک</a>
                                </li>
                                <li>
                                    <a href="blog-left-sidebar.html#" rel="tag">بازار یابی</a>
                                </li>
                                <li>
                                    <a href="blog-left-sidebar.html#" rel="tag">برند</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </aside>
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