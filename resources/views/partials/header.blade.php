<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>REDET - Network od Theological Entities</title>

    <!-- Fav Icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <!-- Stylesheets -->
    <link href="assets/css/font-awesome-all.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">
    <link href="assets/css/owl.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/nice-select.css" rel="stylesheet">
    <link href="assets/css/jquery-ui.css" rel="stylesheet">
    <link href="assets/css/jquery.bootstrap-touchspin.css" rel="stylesheet">
    <link href="assets/css/color.css" rel="stylesheet">
    <link href="assets/css/elpath.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">

</head>

<!-- START BODY -->

<body>
    <div class="boxed_wrapper">


        <div id="search-popup" class="search-popup">
            <div class="popup-inner">
                <div class="upper-box clearfix">
                    <figure class="logo-box pull-left"><a href="index.php"><img src="assets/images/aeth-logo.png"
                                alt=""></a>
                    </figure>
                    <div class="close-search pull-right"><span class="far fa-times"></span></div>
                </div>
                <div class="overlay-layer"></div>
                <div class="auto-container">
                    <div class="search-form">
                        <form method="post" action="index.php">
                            <div class="form-group">
                                <fieldset>
                                    <input type="search" class="form-control" name="search-input" value=""
                                        placeholder="Type your keyword and hit" required>
                                    <button type="submit"><i class="far fa-search"></i></button>
                                </fieldset>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--  <div id="donate-popup" class="donate-popup">
            <div class="close-donate"><i class="fal fa-times"></i></div>
            <div class="popup-inner">
                <div class="donate-content">
                    <div class="title-text centred">
                        <h2>Donate Your Amount</h2>
                    </div>
                    <form action="index.php" method="post" class="default-form">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-12 col-sm-12 donate-column">
                                <div class="donate-box">
                                    <div class="donate-option">
                                        <h3>How Much?</h3>
                                        <ul class="donate-list clearfix">
                                            <li>
                                                <input type="radio" id="donate-amount-1" name="donate-amount"
                                                    checked="checked" />
                                                <label for="donate-amount-1" data-amount="1500">$15</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="donate-amount-2" name="donate-amount" />
                                                <label for="donate-amount-2" data-amount="2000">$20</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="donate-amount-3" name="donate-amount" />
                                                <label for="donate-amount-3" data-amount="3000">$50</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="donate-amount-4" name="donate-amount" />
                                                <label for="donate-amount-4" data-amount="4000">$100</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="donate-amount-5" name="donate-amount" />
                                                <label for="donate-amount-5" data-amount="5000">$500</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="donate-amount-6" name="donate-amount" />
                                                <label for="donate-amount-6" data-amount="5000">$1000</label>
                                            </li>
                                        </ul>
                                        <div class="other-amount">
                                            <div class="text">
                                                <h4>Like to Donate</h4>
                                                <p>Enter your custom amount</p>
                                            </div>
                                            <div class="amount-box">
                                                <div class="item-quantity"><input class="quantity-spinner" type="text"
                                                        value="600" name="quantity"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="payment-option">
                                        <h3>Choose Payment Option</h3>
                                        <ul class="payment-list clearfix">
                                            <li>
                                                <input type="radio" id="payment-method-1" name="payment-method"
                                                    checked="checked" />
                                                <label for="payment-method-1">Net Banking</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="payment-method-2" name="payment-method" />
                                                <label for="payment-method-2">Credit - Debit Card</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="payment-method-3" name="payment-method" />
                                                <label for="payment-method-3">Offline Payment</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 donate-form">
                                <div class="form-inner">
                                    <h3>Your Information</h3>
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="form-group">
                                                <label>Your Name <span>*</span></label>
                                                <input type="text" name="name" placeholder="example name" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="form-group">
                                                <label>Email Address <span>*</span></label>
                                                <input type="email" name="email" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="text" name="phone" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" name="address" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 column">
                                            <div class="form-group message-btn">
                                                <button type="submit" class="theme-btn-one">Donate Now</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 column">
                                            <div class="form-group">
                                                <label class="custom-control material-checkbox">
                                                    <input type="checkbox" class="material-control-input">
                                                    <span class="material-control-indicator"></span>
                                                    <span class="description">I would like to donate automatically
                                                        repeat each
                                                        month</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> -->

        <header class="main-header header-style-two">
            <!-- header-top -->
            <div class="header-top">
                <div class="top-inner">
                    <div class="top-left">
                        <div class="social-links">
                            <ul class="clearfix">
                                <li><a href="https://www.facebook.com/groups/662799037578468" target="blank"><span
                                            class="fab fa-facebook-square"></span></a></li>
                                <li><a href="https://www.instagram.com/aeth_org/" target="blank"><span
                                            class="fab fa-instagram"></span></a></li>

                            </ul>
                        </div>
                        <ul class="info">

                            <li>
                                <a href="{{ route('lang.switch', ['lang' => 'en']) }}" title="English">
                                    <img src="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.6/flags/4x3/us.svg"
                                        alt="English" style="width: 24px;">
                                </a>
                                <a href="{{ route('lang.switch', ['lang' => 'es']) }}" title="Español"
                                    style="margin-left: 5px;">
                                    <img src="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.6/flags/4x3/es.svg"
                                        alt="Español" style="width: 24px;">
                                </a>
                                <a href="{{ route('lang.switch', ['lang' => 'pt-BR']) }}" title="Português">
                                    <img src="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.6/flags/4x3/br.svg"
                                        alt="Português" style="width: 24px;">
                                </a>
                            </li>

                        </ul>
                    </div>
                    <!--  <div class="top-right">
                        <ul class="info">
                            <li><a href="mailto:jcgcenter@aeth.org"><i class="icon-22"></i>jcgcenter@aeth.org</a></li>
                        </ul>
                    </div> -->
                </div>
            </div>
            <!-- header-lower -->
            <div class="header-lower">
                <div class="outer-box">
                    <div class="logo-box">
                        <figure class="logo"> <a href="{{ url('/') }}"><img src="assets/images/aeth-logo.png"
                                    alt=""></a>
                        </figure>
                    </div>
                    <div class="menu-area clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="current">
                                        <a href="{{url('/')}}">Home</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{ route('about_us') }}">@lang('header.about_us')</a>
                                        <ul>
                                            <li><a href="{{ route('about_us') }}">@lang('header.about_us')</a></li>
                                            <li><a href="{{ route('our_team') }}">@lang('header.our_team')</a></li>
                                            <li><a
                                                    href="{{ route('open_positions') }}">@lang('header.open_positions')</a>
                                            </li>
                                            <li><a href="{{ route('events') }}">@lang('header.events')</a></li>
                                            <li><a href="{{ route('blog') }}">@lang('header.blog')</a></li>
                                            <li><a href="{{ route('contact_us') }}">@lang('header.contact_us')</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{ route('services') }}">@lang('header.services')</a>
                                        <ul>
                                            <li><a
                                                    href="{{ route('certification_program') }}">@lang('header.certification_program')</a>
                                            </li>
                                            <li><a
                                                    href="{{ route('request_certification') }}">@lang('header.request_certification')</a>
                                            </li>
                                            <li><a
                                                    href="{{ route('certified_institutions') }}">@lang('header.certified_institutions')</a>
                                            </li>
                                            <li><a href="{{ route('memberships') }}">@lang('header.memberships')</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{ route('programs') }}">@lang('header.programs')</a>
                                        <ul>
                                            <li><a href="{{ route('antioquia') }}">@lang('header.antioquia')</a></li>
                                            <li><a
                                                    href="{{ route('resource_center') }}">@lang('header.resource_center')</a>
                                            </li>
                                            <li><a
                                                    href="{{ route('compelling_preaching') }}">@lang('header.compeling_preaching')</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="current">
                                        <a href="{{ route('bookstore') }}">@lang('header.bookstore')</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{ route('donations') }}">@lang('header.donations')</a>
                                        <ul>
                                            <li><a href="{{ route('aeth_fund') }}">@lang('header.aeth_fund')</a></li>
                                            <li><a
                                                    href="{{ route('gonzalez_center') }}">@lang('header.gonzalez_center')</a>
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </div>
                        </nav>

                    </div>
                    <ul class="nav-right">
                        <li class="search-box-outer search-toggler">
                            <i class="icon-1"></i>
                        </li>
                        <!-- <li class="cart-box">
                            <a href="shop.html"><i class="icon-23"></i></a>
                        </li> 
                        <li class="btn-box">
                            <button
                                class="donate-box-btn theme-btn-one"><span></span></button>
                        </li> -->
                    </ul>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="outer-container">
                    <div class="outer-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="index.php"><img src="assets/images/aeth-logo.png" alt=""></a>
                            </figure>
                        </div>
                        <div class="menu-area clearfix">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                            <ul class="nav-right">
                                <!--  <li class="search-box-outer search-toggler">
                                    <i class="icon-1"></i>
                                </li>
                                <li class="btn-box">
                                    <button class="donate-box-btn theme-btn-one"><span>Donate Now</span></button>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="index.php"><img src="assets/images/aeth-logo.png" alt="" title=""></a>
                </div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
                <!--    <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Chicago 12, Melborne City, USA</li>
                        <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                    </ul>
                </div> -->
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="https://www.facebook.com/groups/662799037578468" target="blank"><span
                                    class="fab fa-facebook-square"></span></a></li>
                        <li><a href="https://www.instagram.com/aeth_org/" target="blank"><span
                                    class="fab fa-instagram"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->