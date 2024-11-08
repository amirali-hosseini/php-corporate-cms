<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="Neon Admin Panel"/>
    <meta name="author" content=""/>

    <link rel="icon" href="<?= asset('/admin/images/favicon.ico') ?>">

    <title><?= APP_NAME ?></title>

    <link rel="stylesheet" href="<?= asset('/admin/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css') ?>">
    <link rel="stylesheet" href="<?= asset('/admin/css/font-icons/entypo/css/entypo.css') ?>">
    <link rel="stylesheet" href="<?= asset('/admin/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?= asset('/admin/css/neon-core.css') ?>">
    <link rel="stylesheet" href="<?= asset('/admin/css/neon-theme.css') ?>">
    <link rel="stylesheet" href="<?= asset('/admin/css/neon-forms.css') ?>">
    <link rel="stylesheet" href="<?= asset('/admin/css/neon-rtl.css') ?>">
    <link rel="stylesheet" href="<?= asset('/admin/css/custom.css') ?>">

    <script src="<?= asset('/admin/js/jquery-1.11.3.min.js') ?>"></script>

    <!--[if lt IE 9]>
    <script src="<?= asset('/admin/js/ie8-responsive-file-warning.js') ?>"></script><![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body class="page-body login-page login-form-fall">

<div class="login-container">

    <div class="login-header login-caret">

        <div class="login-content">

            <a href="<?= uri('/auth/login') ?>" class="logo">
                <img src="<?= asset('/images/logo/logo-light.png') ?>" width="120" alt=""/>
            </a>

            <p class="description">جهت دسترسی به پنل مدیریت، ابتدا به حساب خود وارد شوید.</p>
        </div>

    </div>

    <div class="login-progressbar">
        <div></div>
    </div>

    <div class="login-form">

        <div class="login-content">

            <form method="post" role="form" action="<?= uri('/auth/login') ?>">

                <div class="form-group">

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="entypo-mail"></i>
                        </div>

                        <input type="email" class="form-control" name="email" id="email" placeholder="ایمیل"
                               autocomplete="off" value="<?= old('email') ?>" required/>
                    </div>
                    <?= error('email') ?>

                </div>

                <div class="form-group">

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="entypo-key"></i>
                        </div>

                        <input type="password" class="form-control" name="password" id="password" placeholder="رمز عبور"
                               autocomplete="off" required/>
                    </div>
                    <?= error('password') ?>

                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block btn-login">
                        <i class="entypo-login"></i>
                        ورود
                    </button>
                </div>

            </form>

        </div>

    </div>

</div>


<!-- Bottom scripts (common) -->
<script src="<?= asset('/admin/js/gsap/TweenMax.min.js') ?>"></script>
<script src="<?= asset('/admin/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js') ?>"></script>
<script src="<?= asset('/admin/js/bootstrap.js') ?>"></script>
<script src="<?= asset('/admin/js/joinable.js') ?>"></script>
<script src="<?= asset('/admin/js/resizeable.js') ?>"></script>
<script src="<?= asset('/admin/js/neon-api.js') ?>"></script>
<script src="<?= asset('/admin/js/jquery.validate.min.js') ?>"></script>
<script src="<?= asset('/admin/js/neon-login.js') ?>"></script>


<!-- JavaScripts initializations and stuff -->
<script src="<?= asset('/admin/js/neon-custom.js') ?>"></script>


<!-- Demo Settings -->
<script src="<?= asset('/admin/js/neon-demo.js') ?>"></script>

</body>
</html>