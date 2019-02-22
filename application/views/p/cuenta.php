<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="keywords" content="THEMELOCK.COM - Private Transport and Car Hire HTML Template" />
    <meta name="description" content="THEMELOCK.COM - Private Transport and Car Hire HTML Template">
    <meta name="author" content="themeenergy.com">

    <title>Reservacion</title>

    <link rel="stylesheet" href="<?=base_url("")?>/css/theme-pink.css" />
    <link rel="stylesheet" href="<?=base_url("")?>/css/style.css" />
    <link rel="stylesheet" href="<?=base_url("")?>/css/animate.css" />
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700|Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="<?=base_url("")?>/images/favicon.ico" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="">
    <!-- Header -->
    <header class="header" role="banner">
        <div class="wrap">
            <!-- Logo -->
            <div class="logo">
                <a href="" title="Transfers">
                    <img src="../images/transfers.jpg" alt="Transfers" />
                </a>
            </div>
            <!-- //Logo -->

            <!-- Main Nav -->
            <nav role="navigation" class="main-nav">
                <ul>
                    <li class="active">
                        <a href="<?=base_url("")?>" title="Inicio">Inicio</a>
                    </li>
                    <li>
                        <a href="#contacto" title="Contacto">Contacto</a>
                    </li>
                    <li>
                        <a href="<?=base_url("api/1")?>" title="Mi Cuenta">Mi Cuenta</a>
                    </li>
                </ul>
            </nav>
            <!-- //Main Nav -->
        </div>
    </header>
    <!-- //Header -->

    <!-- Main -->
    <main class="main" role="main">
        <!-- Page info -->
        <header class="site-title color">
            <div class="wrap">
                <div class="container">
                    <h1>Mi Cuenta</h1>
                    <nav role="navigation" class="breadcrumbs">
                        <ul>
                            <li>
                                <a href="" title="Inicio">Inicio</a>
                            </li>
                            <li>Mi Cuenta</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <!-- //Page info -->


        <div class="wrap">
            <div class="row">

                <!--- Sidebar -->
                <aside class="one-fourth sidebar left">
                    <!-- Widget -->
                    <div class="widget">
                        <ul class="categories">
                            <li class="active">
                                <a href="#tab1">Configuraciones</a>
                            </li>
                            <li>
                                <a href="#tab2">Mis reservas</a>
                            </li>
                        </ul>
                    </div>
                    <!-- //Widget -->
                </aside>
                <!--- //Sidebar -->

                <!--- Content -->
                <div class="three-fourth content">
                    <!-- Tab -->
                    <article class="single" id="tab1">
                        <div class="box">
                            <h2>General settings</h2>
                            <fieldset>
                                <div class="f-row">
                                    <div class="one-half">
                                        <label for="name">Name and surname</label>
                                        <input type="text" id="name" />
                                    </div>
                                    <div class="one-half">
                                        <label for="company">Company name</label>
                                        <input type="text" id="company" />
                                    </div>
                                </div>
                                <div class="f-row">
                                    <div class="one-half">
                                        <label for="email">Email address</label>
                                        <input type="email" id="email" />
                                    </div>
                                    <div class="one-half">
                                        <label for="number">Mobile number</label>
                                        <input type="number" id="number" />
                                    </div>
                                </div>
                                <div class="f-row">
                                    <div class="one-half">
                                        <label for="address">Street address</label>
                                        <input type="text" id="address" />
                                    </div>
                                    <div class="one-half">
                                        <label for="zip">Zip code</label>
                                        <input type="text" id="zip" />
                                    </div>
                                </div>
                                <div class="f-row">
                                    <div class="one-half">
                                        <label for="city">City</label>
                                        <input type="text" id="city" />
                                    </div>
                                    <div class="one-half">
                                        <label for="country">Country</label>
                                        <input type="text" id="country" />
                                    </div>
                                </div>
                                <div class="f-row">
                                    <input type="submit" value="Save Changes" id="submit1" name="submit" class="btn color medium" />
                                </div>
                            </fieldset>
                        </div>

                        <div class="box">
                            <h2>Security settings</h2>
                            <fieldset>
                                <div class="f-row">
                                    <div class="one-half">
                                        <label for="username">Username</label>
                                        <input type="text" id="username" />
                                    </div>
                                    <div class="one-half">
                                        <label for="password1">Current password</label>
                                        <input type="password" id="password1" />
                                    </div>
                                </div>

                                <div class="f-row">
                                    <div class="one-half">
                                        <label for="password2">New password</label>
                                        <input type="password" id="password2" />
                                    </div>
                                    <div class="one-half">
                                        <label for="password3">Confirm new password</label>
                                        <input type="password" id="password3" />
                                    </div>
                                </div>

                                <div class="f-row">
                                    <input type="submit" value="Save Changes" id="submit2" name="submit" class="btn color medium" />
                                </div>
                            </fieldset>
                        </div>

                        <div class="box">
                            <h2>Notification settings</h2>
                            <fieldset>
                                <div class="f-row check">
                                    <input type="checkbox" id="checkbox1" />
                                    <label for="checkbox1">General promotions, updates, news about Transfers or general promotions for partner campaigns
                                        and services, user surveys, inspiration, and love from Transfers.</label>
                                </div>

                                <div class="f-row check">
                                    <input type="checkbox" id="checkbox2" />
                                    <label for="checkbox2">Reservation and review reminders. </label>
                                </div>

                                <div class="f-row">
                                    <input type="submit" value="Save Changes" id="submit2" name="submit" class="btn color medium" />
                                </div>
                            </fieldset>
                        </div>
                    </article>
                    <!-- //Tab -->

                    <!-- Tab -->
                    <article class="single" id="tab2">
                        <!-- Item -->
                        <div class="box history">
                            <h6>28.08.2014
                                <small>at</small> 10:00
                                <br />Berlin Schonefeld Airport
                                <small>to</small> Central Train Station</h6>
                            <div class="row">
                                <div class="one-third">
                                    <p>
                                        <span>Vehicle:</span> Private shuttle</p>
                                </div>
                                <div class="two-third">
                                    <p>
                                        <span>Extras:</span> 2 pieces of baggage up to 15kg</p>
                                </div>
                            </div>
                            <div class="price">450.00 USD</div>
                            <a href="#" title="Cancel">Cancel</a> &nbsp;|&nbsp;
                            <a href="#" title="Modify">Modify</a>
                        </div>
                        <!-- //Item -->

                        <!-- Item -->
                        <div class="box history">
                            <h6>28.08.2014
                                <small>at</small> 10:00
                                <br />Berlin Schonefeld Airport
                                <small>to</small> Central Train Station</h6>
                            <div class="row">
                                <div class="one-third">
                                    <p>
                                        <span>Vehicle:</span> Private shuttle</p>
                                </div>
                                <div class="two-third">
                                    <p>
                                        <span>Extras:</span> 2 pieces of baggage up to 15kg</p>
                                </div>
                            </div>
                            <h6>02.09.2014
                                <small>at</small> 17:00
                                <br />Berlin Central Train Station
                                <small>to</small> Schonefeld Airport</h6>
                            <div class="row">
                                <div class="one-third">
                                    <p>
                                        <span>Vehicle:</span> Private shuttle</p>
                                </div>
                                <div class="two-third">
                                    <p>
                                        <span>Extras:</span> 2 pieces of baggage up to 15kg</p>
                                </div>
                            </div>
                            <div class="price">840.00 USD</div>
                            <a href="#" title="Book again">Book again</a>
                        </div>
                        <!-- //Item -->

                        <!-- Item -->
                        <div class="box history">
                            <h6>28.08.2014
                                <small>at</small> 10:00
                                <br />Berlin Schonefeld Airport
                                <small>to</small> Central Train Station</h6>
                            <div class="row">
                                <div class="one-third">
                                    <p>
                                        <span>Vehicle:</span> Private shuttle</p>
                                </div>
                                <div class="two-third">
                                    <p>
                                        <span>Extras:</span> 2 pieces of baggage up to 15kg</p>
                                </div>
                            </div>
                            <div class="price">750.00 USD</div>
                            <a href="#" title="Book again">Book again</a>
                        </div>
                        <!-- //Item -->
                    </article>
                    <!-- //Tab -->
                </div>
                <!--- //Content -->
            </div>
        </div>
    </main>
    <!-- //Main -->

    <!-- //Main -->

    <!-- Footer -->
    <footer class="footer black" role="contentinfo">
        <div class="wrap">
            <div class="row">
                <!-- Column -->
                <article class="one-half">
                    <h6>Sobre nosotros</h6>
                    <p>Somos una plataforma para conectar vuelos a diferentes destinos del pais y el mundo.</p>
                </article>
                <!-- //Column -->

                <!-- Column -->
                <article class="one-fourth">
                    <h6>¿Necesitas ayuda?</h6>
                    <p>Contáctenos por teléfono o correo electrónico:</p>
                    <p class="contact-data">
                        <span class="ico phone"></span> +1 555 555 555</p>
                    <p class="contact-data">
                        <span class="ico email"></span>
                        <a href="mailto:hola@ub.com">hola@ub.com</a>
                    </p>
                </article>
                <!-- //Column -->

                <!-- Column -->
                <article class="one-fourth">
                    <h6>Síguenos</h6>
                    <ul class="social">
                        <li class="facebook">
                            <a href="#" title="facebook">facebook</a>
                        </li>
                        <li class="twitter">
                            <a href="#" title="twitter">twitter</a>
                        </li>
                        <li class="gplus">
                            <a href="#" title="gplus">google plus</a>
                        </li>
                        <li class="linkedin">
                            <a href="#" title="linkedin">linkedin</a>
                        </li>
                        <li class="vimeo">
                            <a href="#" title="vimeo">vimeo</a>
                        </li>
                        <li class="pinterest">
                            <a href="#" title="pinterest">pinterest</a>
                        </li>
                    </ul>
                </article>
                <!-- //Column -->
            </div>

            <div class="copy">
                <p>Copyright 2018, UbSoft. Todos los derechos reservados. </p>

                <nav role="navigation" class="foot-nav">
                    <ul>
                        <li>
                            <a href="#" title="For partners">Hecho con amor</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </footer>
    <!-- //Footer -->

    <!-- Preloader -->
    <div class="preloader">
        <div id="followingBallsG">
            <div id="followingBallsG_1" class="followingBallsG"></div>
            <div id="followingBallsG_2" class="followingBallsG"></div>
            <div id="followingBallsG_3" class="followingBallsG"></div>
            <div id="followingBallsG_4" class="followingBallsG"></div>
        </div>
    </div>
    <!-- //Preloader -->

    <!-- jQuery -->
    <script src="<?=base_url("")?>/js/jquery.min.js"></script>
    <script src="<?=base_url("")?>/js/jquery.uniform.min.js"></script>
    <script src="<?=base_url("")?>/js/jquery.datetimepicker.js"></script>
    <script src="<?=base_url("")?>/js/jquery.slicknav.min.js"></script>
    <script src="<?=base_url("")?>/js/wow.min.js"></script>
    <script src="<?=base_url("")?>/js/search.js"></script>
    <script src="<?=base_url("")?>/js/scripts.js"></script>

    <script>
        $('.single').hide().first().show();
        $('.categories li:first').addClass('active');

        $('.categories a').on('click', function (e) {
            e.preventDefault();
            $(this).closest('li').addClass('active').siblings().removeClass('active');
            $($(this).attr('href')).show().siblings('.single').hide();
        });

        var hash = $.trim(window.location.hash);
        if (hash) $('.categories a[href$="' + hash + '"]').trigger('click');
    </script>
</body>

</html>
