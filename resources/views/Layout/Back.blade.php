<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title>Cod'On | Administration</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="Jobs Conseil"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <!-- Morris Charts CSS -->
        <link href="{{asset('/Back/vendors/bower_components/morris.js/morris.css')}}" rel="stylesheet" type="text/css"/>

        <!-- Data table CSS -->
        <link href="{{asset('/Back/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>

        <link href="{{asset('/Back/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css')}}" rel="stylesheet" type="text/css">

        <!-- Custom CSS -->
        <link href="{{asset('/Back/css/style.css')}}" rel="stylesheet" type="text/css">
    </head>

    <body>
        <!-- Preloader -->
        <div class="preloader-it">
            <div class="la-anim-1"></div>
        </div>
        <!-- /Preloader -->
        <div class="wrapper theme-1-active pimary-color-green">
            <!-- Top Menu Items -->
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="mobile-only-brand pull-left">
                    <div class="nav-header pull-left">
                        <div class="logo-wrap">
                            <a href="index.html">
                                <img class="brand-img" src="../img/logo.png" alt="brand"/>
                                <span class="brand-text">Cod'On</span>
                            </a>
                        </div>
                    </div>
                    <a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu"></i></a>
                    <a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-search"></i></a>
                    <a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>
                    <form id="search_form" role="search" class="top-nav-search collapse pull-left">
                        <div class="input-group">
                            <input type="text" name="example-input1-group2" class="form-control" placeholder="Recherche">
                            <span class="input-group-btn">
                                <button type="button" class="btn  btn-default"  data-target="#search_form" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="zmdi zmdi-search"></i></button>
                                </span>
                        </div>
                    </form>
                </div>
                <div id="mobile_only_nav" class="mobile-only-nav pull-right">
                    <ul class="nav navbar-right top-nav pull-right">
                        <li class="dropdown alert-drp">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="zmdi zmdi-notifications top-nav-icon"></i><span class="top-nav-icon-badge">1</span></a>
                            <ul  class="dropdown-menu alert-dropdown" data-dropdown-in="bounceIn" data-dropdown-out="bounceOut">
                                <li>
                                    <div class="notification-box-head-wrap">
                                        <span class="notification-box-head pull-left inline-block">Notifications</span>
                                        <a class="txt-danger pull-right clear-notifications inline-block" href="javascript:void(0)"> Tout Effacer </a>
                                        <div class="clearfix"></div>
                                        <hr class="light-grey-hr ma-0"/>
                                    </div>
                                </li>
                                <li>
                                    <div class="streamline message-nicescroll-bar">
                                        <div class="sl-item">
                                            <a href="javascript:void(0)">
                                                <div class="icon bg-green">
                                                    <i class="zmdi zmdi-flag"></i>
                                                </div>
                                                <div class="sl-content">
                                                        <span class="inline-block capitalize-font  pull-left truncate head-notifications">
                                                        New subscription created</span>
                                                    <span class="inline-block font-11  pull-right notifications-time">2pm</span>
                                                    <div class="clearfix"></div>
                                                    <p class="truncate">Your customer subscribed for the basic plan. The customer will pay $25 per month.</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="notification-box-bottom-wrap">
                                        <hr class="light-grey-hr ma-0"/>
                                        <a class="block text-center read-all" href="javascript:void(0)"> Tout Lire </a>
                                        <div class="clearfix"></div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown auth-drp">
                            <a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="../img/user1.png" alt="user" class="user-auth-img img-circle"/><span class="user-online-status"></span></a>
                            <ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                                <li>
                                    <a href="profile.html"><i class="zmdi zmdi-account"></i><span>Profil</span></a>
                                </li>
                                <li class="divider"></li>
                                <li class="sub-menu show-on-hover">
                                    <a href="#" class="dropdown-toggle pr-0 level-2-drp"><i class="zmdi zmdi-check text-success"></i> Disponible</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#"><i class="zmdi zmdi-power"></i><span>Déconnexion</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- /Top Menu Items -->

            <!-- Left Sidebar Menu -->
            <div class="fixed-sidebar-left">
                <ul class="nav navbar-nav side-nav nicescroll-bar">
                  <div class="clearfix" style="margin-bottom: : 20px;"></div>
                    <li>
                        <a class="active" href="#" >
                          <div class="pull-left">
                            <i class="zmdi zmdi-landscape mr-20"></i><span class="right-nav-text">Tableau de Bord</span>
                          </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#ecom_dr"><div class="pull-left"><i class="zmdi zmdi-shopping-basket mr-20"></i><span class="right-nav-text">Thèmes</span></div><div class="clearfix"></div></a>
                        <ul id="ecom_dr" class="collapse collapse-level-1">
                            <li>
                                <a href="e-commerce.html">Enregistrement</a>
                            </li>
                            <li>
                                <a href="product.html">Liste</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#app_dr"><div class="pull-left"><i class="zmdi zmdi-apps mr-20"></i><span class="right-nav-text">Catégories </span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                        <ul id="app_dr" class="collapse collapse-level-1">
                            <li>
                                <a href="chats.html">Enregistrement</a>
                            </li>
                            <li>
                                <a href="calendar.html">Liste</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#email_dr">Membres<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                        <ul id="email_dr" class="collapse collapse-level-2">
                            <li>
                                <a href="inbox.html">Liste</a>
                            </li>
                            <li>
                                <a href="inbox-detail.html">Bannir</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="file-manager.html">Statistiques</a>
                    </li>
                </ul>
            </div>
            <!-- /Left Sidebar Menu -->

            <!-- Right Setting Menu -->
            <div class="setting-panel">
                <ul class="right-sidebar nicescroll-bar pa-0">
                    <li class="layout-switcher-wrap">
                        <ul>
                            <li>
                                <span class="layout-title">En-tête à défilement</span>
                                <span class="layout-switcher">
                                        <input type="checkbox" id="switch_3" class="js-switch"  data-color="#2ecd99" data-secondary-color="#dedede" data-size="small"/>
                                    </span>
                                <h6 class="mt-30 mb-15">Thèmes</h6>
                                <ul class="theme-option-wrap">
                                    <li id="theme-1" class="active-theme"><i class="zmdi zmdi-check"></i></li>
                                    <li id="theme-2"><i class="zmdi zmdi-check"></i></li>
                                    <li id="theme-3"><i class="zmdi zmdi-check"></i></li>
                                    <li id="theme-4"><i class="zmdi zmdi-check"></i></li>
                                    <li id="theme-5"><i class="zmdi zmdi-check"></i></li>
                                    <li id="theme-6"><i class="zmdi zmdi-check"></i></li>
                                </ul>
                                <h6 class="mt-30 mb-15">Couleurs</h6>
                                <div class="radio mb-5">
                                    <input type="radio" name="radio-primary-color" id="pimary-color-green" checked value="pimary-color-green">
                                    <label for="pimary-color-green"> Vert </label>
                                </div>
                                <div class="radio mb-5">
                                    <input type="radio" name="radio-primary-color" id="pimary-color-red" value="pimary-color-red">
                                    <label for="pimary-color-red"> Rouge </label>
                                </div>
                                <div class="radio mb-5">
                                    <input type="radio" name="radio-primary-color" id="pimary-color-blue" value="pimary-color-blue">
                                    <label for="pimary-color-blue"> Bleu </label>
                                </div>
                                <div class="radio mb-5">
                                    <input type="radio" name="radio-primary-color" id="pimary-color-yellow" value="pimary-color-yellow">
                                    <label for="pimary-color-yellow"> Jaune </label>
                                </div>
                                <div class="radio mb-5">
                                    <input type="radio" name="radio-primary-color" id="pimary-color-pink" value="pimary-color-pink">
                                    <label for="pimary-color-pink"> Rose </label>
                                </div>
                                <div class="radio mb-5">
                                    <input type="radio" name="radio-primary-color" id="pimary-color-orange" value="pimary-color-orange">
                                    <label for="pimary-color-orange"> Orange </label>
                                </div>
                                <div class="radio mb-5">
                                    <input type="radio" name="radio-primary-color" id="pimary-color-gold" value="pimary-color-gold">
                                    <label for="pimary-color-gold"> Or </label>
                                </div>
                                <div class="radio mb-35">
                                    <input type="radio" name="radio-primary-color" id="pimary-color-silver" value="pimary-color-silver">
                                    <label for="pimary-color-silver"> Argent </label>
                                </div>
                                <button id="reset_setting" class="btn  btn-success btn-xs btn-outline btn-rounded mb-10">Réinitialiser</button>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <button id="setting_panel_btn" class="btn btn-success btn-circle setting-panel-btn shadow-2dp"><i class="zmdi zmdi-settings"></i></button>
            <!-- /Right Setting Menu -->

            <!-- Right Sidebar Backdrop -->
            <div class="right-sidebar-backdrop"></div>
            <!-- /Right Sidebar Backdrop -->

            <!-- Main Content -->

            @include('Layout/Flash')
            @yield('content')

            <!-- /Main Content -->
        </div>
        <!-- /#wrapper -->

        <!-- JavaScript -->

        <!-- jQuery -->
        <script src="{{asset('/Back/vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{asset('/Back/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

        <!-- Data table JavaScript -->
        <script src="{{asset('/Back/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>

        <!-- Slimscroll JavaScript -->
        <script src="{{asset('/Back/js/jquery.slimscroll.js')}}"></script>

        <!-- simpleWeather JavaScript -->
        <script src="{{asset('/Back/vendors/bower_components/moment/min/moment.min.js')}}"></script>
        <script src="{{asset('/Back/vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js')}}"></script>
        <script src="{{asset('/Back/js/simpleweather-data.js')}}"></script>

        <!-- Progressbar Animation JavaScript -->
        <script src="{{asset('/Back/vendors/bower_components/waypoints/lib/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('/Back/vendors/bower_components/jquery.counterup/jquery.counterup.min.js')}}"></script>

        <!-- Fancy Dropdown JS -->
        <script src="{{asset('/Back/js/dropdown-bootstrap-extended.js')}}"></script>

        <!-- Sparkline JavaScript -->
        <script src="{{asset('/Back/vendors/jquery.sparkline/dist/jquery.sparkline.min.js')}}"></script>

        <!-- Owl JavaScript -->
        <script src="{{asset('/Back/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js')}}"></script>

        <!-- ChartJS JavaScript -->
        <script src="{{asset('/Back/vendors/chart.js/Chart.min.js')}}"></script>

        <!-- Morris Charts JavaScript -->
        <script src="{{asset('/Back/vendors/bower_components/raphael/raphael.min.js')}}"></script>
        <script src="{{asset('/Back/vendors/bower_components/morris.js/morris.min.js')}}"></script>
        <script src="{{asset('/Back/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js')}}"></script>

        <!-- Switchery JavaScript -->
        <script src="{{asset('/Back/vendors/bower_components/switchery/dist/switchery.min.js')}}"></script>

        <!-- Init JavaScript -->
        <script src="{{asset('/Back/js/init.js')}}"></script>
        <script src="{{asset('/Back/js/dashboard-data.js')}}"></script>
    </body>

</html>
