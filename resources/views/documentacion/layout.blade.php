<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Documentación | TJB</title>
    <meta name="description" content="Neat">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" sizes="114x114" href="{{{ asset('assets/img/fivicon.png') }}}">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="/document/css/neat.min.css?v=1.0">
</head>
<body>

<div class="o-page">
    <div class="o-page__sidebar js-page-sidebar">
        <aside class="c-sidebar">
            <div class="c-sidebar__brand">
                <a href="#"><img src="/document/img/logo_d.png" alt="Neat" style="margin-left: -9px;"></a>
            </div>

            <!-- Scrollable -->

            @include('documentacion.menu')


            <a class="c-sidebar__footer" href="/">
                Regresar al Sistema <i class="c-sidebar__footer-icon feather icon-power"></i>
            </a>
        </aside>
    </div>

    <main class="o-page__content">
        <header class="c-navbar u-mb-medium">
            <button class="c-sidebar-toggle js-sidebar-toggle">
                <i class="feather icon-align-left"></i>
            </button>

            <h1 class="c-navbar__title">Bienvenido</h1>
            <!--NOTIFICACIONES 1 -->
            {{--<div class="c-dropdown dropdown u-mr-small">
                <div class="c-notification dropdown-toggle" id="dropdownMenuToggle1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                    <i class="c-notification__icon feather icon-message-circle"></i>
                </div>

                <div class="c-dropdown__menu c-dropdown__menu--large has-arrow dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuToggle1">

              <span class="c-dropdown__menu-header">
                Mentions
              </span>
                    <a class="c-dropdown__item dropdown-item" href="#">
                        <div class="o-media">
                            <div class="o-media__img u-mr-xsmall">
                    <span class="c-avatar c-avatar--xsmall">
                      <img class="c-avatar__img" src="http://via.placeholder.com/72" alt="Adam Sandler">
                    </span>
                            </div>

                            <div class="o-media__body">
                                <p>Hey, Julia how are you doing. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat eius iste.</p>
                            </div>
                        </div>
                    </a>

                    <a class="c-dropdown__item dropdown-item" href="#">
                        <div class="o-media">
                            <div class="o-media__img u-mr-xsmall">
                    <span class="c-avatar c-avatar--xsmall">
                      <img class="c-avatar__img" src="http://via.placeholder.com/72" alt="Adam Sandler">
                    </span>
                            </div>

                            <div class="o-media__body">
                                <p>Hey, Julia how are you doing. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat eius iste.</p>
                            </div>
                        </div>
                    </a>

                    <a class="c-dropdown__item dropdown-item" href="#">
                        <div class="o-media">
                            <div class="o-media__img u-mr-xsmall">
                    <span class="c-avatar c-avatar--xsmall">
                      <img class="c-avatar__img" src="http://via.placeholder.com/72" alt="Adam Sandler">
                    </span>
                            </div>

                            <div class="o-media__body">
                                <p>Hey, Julia how are you doing. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat eius iste.</p>
                            </div>
                        </div>
                    </a>

                    <a class="c-dropdown__menu-footer">
                        All Mentions
                    </a>
                </div>
            </div>--}}
            <!-- NOTIFICACIONES 2-->
            {{--<div class="c-dropdown dropdown u-mr-medium">
                <div class="c-notification has-indicator dropdown-toggle" id="dropdownMenuToggle2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                    <i class="c-notification__icon feather icon-bell"></i>
                </div>

                <div class="c-dropdown__menu c-dropdown__menu--large has-arrow dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuToggle2">

              <span class="c-dropdown__menu-header">
                Notifications
              </span>
                    <a class="c-dropdown__item dropdown-item" href="#">
                        <div class="o-media">
                            <div class="o-media__img u-mr-xsmall">
                                <span class="c-icon c-icon--info c-icon--xsmall"><i class="feather icon-globe"></i></span>
                            </div>

                            <div class="o-media__body">
                                <p>We've updated the Stripe Services agreement and its supporting terms. Your continueduse of Stripe's services.</p>
                            </div>
                        </div>
                    </a>

                    <a class="c-dropdown__item dropdown-item" href="#">
                        <div class="o-media">
                            <div class="o-media__img u-mr-xsmall">
                                <span class="c-icon c-icon--danger c-icon--xsmall"><i class="feather icon-x"></i></span>
                            </div>

                            <div class="o-media__body">
                                <p>We've updated the Stripe Services agreement and its supporting terms. Your continueduse of Stripe's services.</p>
                            </div>
                        </div>
                    </a>

                    <a class="c-dropdown__item dropdown-item" href="#">
                        <div class="o-media">
                            <div class="o-media__img u-mr-xsmall">
                                <span class="c-icon c-icon--success c-icon--xsmall"><i class="feather icon-anchor"></i></span>
                            </div>

                            <div class="o-media__body">
                                <p>We've updated the Stripe Services agreement and its supporting terms. Your continueduse of Stripe's services.</p>
                            </div>
                        </div>
                    </a>

                    <a class="c-dropdown__menu-footer">
                        All Notifications
                    </a>
                </div>
            </div>--}}

            <div class="c-dropdown dropdown">
                {{auth()->user()->name}} {{auth()->user()->apellidos}}
            </div>
        </header>

        <div class="container">
            @yield('contenido')
            <div class="row">
                <div class="col-12">
                    <footer class="c-footer">
                        <p>© 2018 JTB Tramitaciones. All rights reserved.</p>
                        <span class="c-footer__divider">|</span>
                        <nav>
                            <a class="c-footer__link" href="#">Terms</a>
                            <a class="c-footer__link" href="#">Privacy</a>
                            <a class="c-footer__link" href="#">FAQ</a>
                            <a class="c-footer__link" href="#">Help</a>
                        </nav>
                    </footer>
                </div>
            </div>
        </div>
    </main>
</div>

<!-- Main JavaScript -->
<script src="/document/js/neat.min.js?v=1.0"></script>
</body>
</html>