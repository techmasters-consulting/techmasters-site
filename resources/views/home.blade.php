<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="msapplication-config" content="assets/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="Real Estate and housing services">
    <meta name="author" content="Housemasters.mu">
    <title>Housemasters | Real Estate | Services</title>
    <!-- Bootstrap v4.3.1 CSS via CDN -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Plugins required on all pages NOTE: Additional non-required plugins are loaded ondemand -->


    <link href="{{asset('assets/css/theme-style.min.css')}}" rel="stylesheet">

    <!-- Bright green colour scheme -->
    <link href="" rel="stylesheet">
    <link href="{{asset('assets/css/theme-style.min.css')}}" rel="stylesheet">
    <!--Your custom colour override-->
    <link href="#" id="colour-scheme" rel="stylesheet">

    <!-- Your custom override -->
    <link href="{{asset('assets/css/custom-style.css')}}" rel="stylesheet">



    <!-- Optional: ICON SETS -->
    <!-- Iconset: Font Awesome 5.0.13 via CDN -->
    <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">
    <!-- Iconset: flag icons - http://lipis.github.io/flag-icon-css/ -->
    <link href="assets/plugins/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <!-- Iconset: ionicons - http://ionicons.com/ -->
    <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <!-- Iconset: Linearicons - https://linearicons.com/free -->
    <link href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css" rel="stylesheet">
    <!-- Iconset: Lineawesome - https://icons8.com/articles/line-awesome -->
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">


    <!-- Le fav and touch icons - @todo: fill with your icons or remove, try https://realfavicongenerator.net -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/favicons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/favicons/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('assets/favicons/manifest.json')}}">
    <link rel="shortcut icon" href="{{asset('assets/favicons/favicon.ico')}}">
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Rambla:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Calligraffitti' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:100,400,700' rel='stylesheet' type='text/css'>



    <!--Plugin: Retina.js (high def image replacement) - @see: http://retinajs.com/-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/retina.js/1.3.0/retina.min.js"></script>





</head>





<body class="page header-ontop page-index-realestate-single navbar-layout-default" data-colour-scheme="green-bright">

<!-- @plugin: page loading indicator, delete to remove loader -->
<div class="page-loader" data-toggle="page-loader"></div>

<a id="#top" href="#content" class="sr-only">Skip to content</a>

<!-- ======== @Region: #header ======== -->
<div id="header">
    <div data-toggle="sticky">

        <!--Header & Branding region-->
        <div class="header de-5 mt-8-neg py-0 bg-light header-light bg-op-9
       sticky-mt-0 sticky-mt-0 sticky-border-primary border-top-0 border-right-0 border-left-0">
            <!-- all direct children of the .header-inner element will be vertically aligned with each other you can override all the behaviours using the flexbox utilities (flexbox.html) All elements with .header-brand & .header-block-flex wrappers will automatically be aligned inline & vertically using flexbox, this can be overridden using the flexbox utilities (flexbox.htm) Use .header-block to stack elements within on small screen & "float" on larger screens use .order-first or/and .order-last classes to make an element show first or last within .header-inner or .headr-block elements -->
            <div class="header-inner container border-light border-op-1 border-right-0 border-top-0 border-left-0 py-0">
                <!--branding/logo -->
                <div class="header-brand">

                    <img width="57"
                         height="30" src="assets/img/logo.png" alt="">            <a class="header-brand-text sticky-text-dark" href="index.html" title="Home">
                        <h1 class="h3 text-dark op-8 font-weight-bold">

                            House Masters
                        </h1>
                    </a>
                    <div class="header-divider d-none d-lg-inline-block header-divider-sm"></div>
                    <div class="header-slogan d-none d-lg-block">Real Estate Services</div>
                </div>
                <!-- other header content -->
                <div class="header-block d-flex order-12 align-items-center">

                    <!-- mobile collapse menu button - data-toggle="collapse" = default BS menu - data-toggle="off-canvas" = Off-cavnas Menu - data-toggle="overlay" = Overlay Menu -->
                    <a href="#top" class="btn btn-icon btn-white ml-2 order-12 d-lg-none" data-toggle="off-canvas" data-target=".navbar-main"
                       data-settings='{"cloneTarget":true, "targetClassExtras": "navbar-offcanvas"}'> <i class="fa fa-bars"></i> </a>
                </div>

                <div class="navbar navbar-expand-md navbar-static-top">
                    <!--everything within this div is collapsed on mobile-->
                    <div class="navbar-main collapse navbar-border-bottom-effect">
                        <!--main navigation-->
                        <ul class="nav navbar-nav navbar-dark">
                            <li class="nav-item"></li>

                            <li class="nav-item">
                                <a href="#highlighted" data-toggle="scroll-link" data-dimiss="jpanel-menu" class="nav-link text-capitalize"> <span class="nav-link-inner" data-title="Home">Home</span> </a>
                            </li>
                            <li class="nav-item">
                                <a href="#details" data-toggle="scroll-link" data-dimiss="jpanel-menu" class="nav-link text-capitalize"> <span class="nav-link-inner" data-title="Details">Details</span> </a>
                            </li>
                            <li class="nav-item">
                                <a href="#gallery" data-toggle="scroll-link" data-dimiss="jpanel-menu" class="nav-link text-capitalize"> <span class="nav-link-inner" data-title="Gallery">Gallery</span> </a>
                            </li>
                            <li class="nav-item">
                                <a href="#news" data-toggle="scroll-link" data-dimiss="jpanel-menu" class="nav-link text-capitalize"> <span class="nav-link-inner" data-title="News">News</span> </a>
                            </li>
                            <li class="nav-item">
                                <a href="#contact" data-toggle="scroll-link" data-dimiss="jpanel-menu" class="nav-link text-capitalize"> <span class="nav-link-inner" data-title="Contact">Contact</span> </a>
                            </li>
                        </ul>
                    </div>
                    <!--/.navbar-collapse -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ======== @Region: #highlighted ======== -->
<div id="highlighted" class="bg-black pos-relative pos-zindex-9">
    <!-- Image Banner: Use the the data-bg-img functionality to create a simple image banner Use spacer classes to make the banner larger with padding, allows for easy responsive changes too see: elements-ctas.htm To make the banner full height add the attributes: data-toggle="full-height" data-offset="#header" -->
    <div class="overlay overlay-op-6" data-animate="fadeIn" data-toggle="backstretch" data-backstretch-target="self" data-backstretch-overlay=false data-backstretch-imgs="assets/img/banner-1.jpg,https://images.unsplash.com/photo-1515263487990-61b07816b324?ixlib=rb-0.3.5&s=29580c56708408d716cb322480d204f7&auto=format&fit=crop&w=1650&q=80">
        <div data-toggle="full-height" class="pl-2 pr-2 pt-5 py-lg-2 pt-lg-9 text-center text-white d-flex justify-content-center flex-column">
            <div data-toggle="sticky" data-settings='{"persist":true}'>

                <div class="container">

                    <img width="165"
                         height="117" src="assets/img/REVERSELOGO2.png" alt="">



                </div>

                <button type="button" class="mb-3 d-block mx-auto btn btn-xlg btn-green-bright text-uppercase btn-rounded-none">Real Estate Services</button>
                <h2 class="display-3 font-weight-bold mb-2" data-animate="fadeInDown" data-animate-delay="0.6">
                    Affordable Houses in Mauritius
                </h2>
                <h4 class="font-weight-bold display-4 font-weight-light mb-5 mb-0 mb-b-sm-0">
                    Buy, Rent or Share
                </h4>
                <h5 class="check-details">
                    <a href="#features" data-toggle="scroll-link">More Details <i class="la la-long-arrow-down d-block"></i></a>
                </h5>
            </div>
        </div>
    </div>
</div>
<!--END highlighted-->
<div class="pos-relative pos-zindex-10 bg-white" id="content">
    <!-- ======== @Region: Features ======== -->
    <div id="features" class="py-5 py-lg-6">
        <div class="container container-1000">
            <div class="text-center mb-5">
                <h2 class="h1 font-weight-bold mb-3 text-dark op-9 text-green-bright">
                    Features
                </h2>
            </div>
            <div class="row">
                <div class="col-md-4 text-center" data-animate="fadeIn" data-animate-delay="0.1">
                    <i class="la la-group icon-3x text-blue align-baseline mb-2"></i>
                    <h4 class="text-dark op-9 mb-3">
                        Competitive Service Fee
                    </h4>
                    <p class="text-dark op-7 mb-0">Fixed Registration Required</p>
                </div>
                <div class="col-md-4 text-center" data-animate="fadeIn" data-animate-delay="0.2">
                    <i class="la la-map-marker icon-3x text-blue align-baseline mb-2"></i>
                    <h4 class="text-dark op-9 mb-3">
                        Fully Furnished
                    </h4>
                    <p class="text-dark op-7 mb-0">All our homes are fully equiped with free wifi unless on sale</p>
                </div>
                <div class="col-md-4 text-center" data-animate="fadeIn" data-animate-delay="0.3">
                    <i class="la la-bed icon-3x text-blue align-baseline mb-2"></i>
                    <h4 class="text-dark op-9 mb-3">
                        Budget Friendly
                    </h4>
                    <p class="text-dark op-7 mb-0">it is our duty to match you with a house that suits your budget</p>
                </div>
            </div>
        </div>
    </div>
    <!-- END Features -->
    <!-- ======== @Region: Standout ======== -->
    <div id="details">
        <div data-toggle="full-height" class="text-center overlay overlay-op-2 p-3 d-lg-flex align-items-lg-center" data-bg-img="assets/img/pool_house.jpg" data-css='{"background-position": "center center"}'>
            <div class="p-4 p-lg-6 bg-white container">
                <h2 class="font-weight-normal mb-2 text-green-bright font-md-x3 font-sm-x2">
                    Modern Apartments in Flic and Flac
                </h2>
                <h4 class="font-weight-light text-dark op-9 mb-lg-4 mb-sm-4 font-md-x2 font-sm-x1">
                    Secure and Friendly Neighborhood
                </h4>
                <div class="text-dark op-9 mb-4">Our Apartments in flic and Flac are the most affordable in the region.
                    Wheteher you want to be close to the sea side or the quiet area of the west coast, we have what you are loking for.</div>
                <div class="row row grid-inner-borders-dotted">
                    <div class="p-3 col-6 col-md-4" data-animate="fadeIn" data-animate-delay="0.3">
                        <div class=""><i class="la la-arrows-h icon-3x text-blue"></i></div>
                        <h4 class="text-dark op-9">
                            Wifi
                        </h4>
                        <h4 class="text-dark op-9">
                            Available
                        </h4>
                    </div>
                    <div class="p-3 col-6 col-md-4" data-animate="fadeIn" data-animate-delay="0.2">
                        <i class="la la-bed icon-3x text-blue"></i>
                        <h4 class="text-dark op-9">
                            Bedrooms
                        </h4>
                        <h4 class="text-dark op-9">
                            1, 2 and 3
                        </h4>
                    </div>
                    <div class="p-3 col-6 col-md-4" data-animate="fadeIn" data-animate-delay="0.1">
                        <i class="la la-archive icon-3x text-blue"></i>
                        <h4 class="text-dark op-9">
                            Bathroom
                        </h4>
                        <h4 class="text-dark op-9">
                            Private or shared
                        </h4>
                    </div>
                    <div class="p-3 col-6 col-md-4" data-animate="fadeIn" data-animate-delay="0.4">
                        <i class="la la-calendar icon-3x text-blue"></i>
                        <h4 class="text-dark op-9">
                            Length of stay
                        </h4>
                        <h4 class="text-dark op-9">
                            long or short
                        </h4>
                    </div>
                    <div class="p-3 col-6 col-md-4" data-animate="fadeIn" data-animate-delay="0.5">
                        <i class="la la-car icon-3x text-blue"></i>
                        <h4 class="text-dark op-9">
                            Car park
                        </h4>
                        <h4 class="text-dark op-9">
                            1 or  2
                        </h4>
                    </div>
                    <div class="p-3 col-6 col-md-4" data-animate="fadeIn" data-animate-delay="0.6">
                        <i class="la la-pagelines icon-3x text-blue"></i>
                        <h4 class="text-dark op-9">
                            Price
                        </h4>
                        <h4 class="text-dark op-9">
                            Pocket Friendly
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--END Standout-->
    <!-- ======== @Region: Photo Tour ======== -->
    <div id="gallery" class="py-4 py-lg-6" data-toggle="magnific-popup" data-magnific-popup-settings='{"delegate": "a.cbp-caption", "gallery":{"enabled":true}}'>
        <div class="container">
            <div class="text-center mb-6 mb-0">
                <h2 class="h1 font-weight-bold mb-3 text-dark op-9 text-green-bright">
                    A picture is a thousand words
                </h2>
                <p class="text-dark op-7">
                    Take a tour of our gallery below
                    <br> Schedule an appointment to visit one that matches your requirement
                </p>
            </div>
            <div id="cbp-loader" class="loading"></div>
            <div class="fade my-5" data-toggle="cbp"
                 data-settings='{"loader":"#cbp-loader","mediaQueries":[{"width": 480,"cols": 3},
              {"width": 0,"cols": 1}], "sortToPreventGaps": true,"layoutMode":"mosaic","gapVertical":10,
              "gapHorizontal":10,"animationType":"unfold","caption":"zoom"}'>




                <!-- Item 1 -->
                <div class="cbp-item ">
                    <a class="cbp-caption" href="https://source.unsplash.com/a8K-puaPyVk/1040/">
                        <div class="cbp-caption-defaultWrap">
                            <img src="https://source.unsplash.com/a8K-puaPyVk/380x242/" alt="Unsplash photo" class="img-fluid">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <i class="ion-android-expand icon-1x"></i>
                                    <h6 class="text-white">
                                        Image 1
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!--stop-->





                <!--stop-->

                <!-- Item 2 -->
                <div class="cbp-item ">
                    <a class="cbp-caption" href="https://source.unsplash.com/dS62MvK4CtM/1040/">
                        <div class="cbp-caption-defaultWrap">
                            <img src="https://source.unsplash.com/dS62MvK4CtM/380x242/" alt="Unsplash photo" class="img-fluid">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <i class="ion-android-expand icon-1x"></i>
                                    <h6 class="text-white">
                                        Image 2
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Item 3 -->


                <!-- Item 4 -->
                <div class="cbp-item ">
                    <a class="cbp-caption" href="https://source.unsplash.com/U-k6XLlml1I/1040/">
                        <div class="cbp-caption-defaultWrap">
                            <img src="https://source.unsplash.com/U-k6XLlml1I/494x642/" alt="Unsplash photo" class="img-fluid">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <i class="ion-android-expand icon-1x"></i>
                                    <h6 class="text-white">
                                        Image 4
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Item 5 -->
                <div class="cbp-item ">
                    <a class="cbp-caption" href="https://source.unsplash.com/hTPUYIIvZBY/1040/">
                        <div class="cbp-caption-defaultWrap">
                            <img src="https://source.unsplash.com/hTPUYIIvZBY/380x242/" alt="Unsplash photo" class="img-fluid">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <i class="ion-android-expand icon-1x"></i>
                                    <h6 class="text-white">
                                        Image 5
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Item 6 -->
                <div class="cbp-item ">
                    <a class="cbp-caption" href="https://source.unsplash.com/7tFlUFGa7Dk/1040/">
                        <div class="cbp-caption-defaultWrap">
                            <img src="https://source.unsplash.com/7tFlUFGa7Dk/380x242/" alt="Unsplash photo" class="img-fluid">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <i class="ion-android-expand icon-1x"></i>
                                    <h6 class="text-white">
                                        Image 6
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Item 7 -->
                <div class="cbp-item ">
                    <a class="cbp-caption" href="https://source.unsplash.com/s95oB2n9jng/1040/">
                        <div class="cbp-caption-defaultWrap">
                            <img src="https://source.unsplash.com/s95oB2n9jng/380x242/" alt="Unsplash photo" class="img-fluid">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <i class="ion-android-expand icon-1x"></i>
                                    <h6 class="text-white">
                                        Image 7
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Item 8 -->
                <div class="cbp-item ">
                    <a class="cbp-caption" href="https://source.unsplash.com/MyeOnGcibCQ/1040/">
                        <div class="cbp-caption-defaultWrap">
                            <img src="https://source.unsplash.com/MyeOnGcibCQ/380x242/" alt="Unsplash photo" class="img-fluid">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <i class="ion-android-expand icon-1x"></i>
                                    <h6 class="text-white">
                                        Image 8
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>


                <!-- Item 12 -->
                <div class="cbp-item ">
                    <a class="cbp-caption" href="https://source.unsplash.com/RcdV8rnXSeE/1040/">
                        <div class="cbp-caption-defaultWrap">
                            <img src="https://source.unsplash.com/RcdV8rnXSeE/380x242/" alt="Unsplash photo" class="img-fluid">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <i class="ion-android-expand icon-1x"></i>
                                    <h6 class="text-white">
                                        Image 12
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Item 13 -->
                <div class="cbp-item ">
                    <a class="cbp-caption" href="https://source.unsplash.com/qly35FEQwA4/1040/">
                        <div class="cbp-caption-defaultWrap">
                            <img src="https://source.unsplash.com/qly35FEQwA4/380x242/" alt="Unsplash photo" class="img-fluid">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <i class="ion-android-expand icon-1x"></i>
                                    <h6 class="text-white">
                                        Image 13
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
            <div class="text-center">
                <button data-toggle="magnific-popup" data-magnific-popup-items=''
                        type="button"
                        class="btn btn-rounded btn-bold btn-shadow px-4 py-2 mb-0 text-uppercase
                        btn-green-bright text-white">See gallery</button>
            </div>
        </div>
    </div>
    <!-- END Latest News-->
    <!-- ======== @Region: <Hr>
      ======== -->
    <hr class="w-lg-80 my-4" />
    <!-- END <Hr>
      -->
    <!-- ======== @Region: Latest News ======== -->
    <div id="news" class=" pos-zindex-10 py-4 py-lg-6">
        <div class="container">
            <div class="text-center mb-6 mb-0">
                <h2 class="h1 font-weight-bold mb-3 text-black">
                    From our blog
                </h2>
                <p class="text-dark op-7">
                    A range of articles from our stories to assist you further in your Quest

                </p>
            </div>
            <div class="row">
                <div class="col-md-4" data-animate="fadeIn" data-animate-delay="0.1">
                    <h6 class="text-blue mb-1">
                        June 22/2019
                    </h6>
                    <h4 class="text-black mb-4">
                        Suitcase Dilema,
                        <br /> how much should you really pack?
                    </h4>

                    <div class="text-dark mb-4">
                        <p>Well, ill tell you what, It depends on your length of stay. You live in a home for long term im not sure your stuffs can fit in a box or even two.
                            Most of our  homes are fully furnished these days that you dont need to buy a spoon or a mug.</p>
                        <p>So how much space can your most precious valuables take? I'd say a small pack for things ill rather be dead to loose and one bigger suit case for everything else.</p>

                    </div>
                    <a href="#" class="text-dark text-uppercase align-middle text-sm font-weight-bold">Read more <i class="la la-long-arrow-right la-x text-blue align-middle"></i></a>
                </div>
                <div class="col-md-4" data-animate="fadeIn" data-animate-delay="0.2">
                    <h6 class="text-blue mb-1">
                        June 22/2019
                    </h6>

                    <div class="cbp-item ">
                        <a class="cbp-caption" href="https://source.unsplash.com/RcdV8rnXSeE/1040/">
                            <div class="cbp-caption-defaultWrap">
                                <img src="https://source.unsplash.com/RcdV8rnXSeE/380x242/" alt="Unsplash photo" class="img-fluid">
                            </div>
                        </a>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <h4 class="text-white mb-4">
                                        Mauritius and Beaches,
                                        <br /> Tales from the seaside.
                                    </h4>
                                    <div class="text-white mb-4">

                                        <a href="#" class="text-white text-uppercase align-middle text-sm font-weight-bold">Read more
                                            <i class="la la-long-arrow-right la-x text-blue align-middle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
                <div class="col-md-4" data-animate="fadeIn" data-animate-delay="0.3">
                    <h6 class="text-blue mb-1">
                        June 22/2019
                    </h6>
                    <h4 class="text-black mb-4">
                        Searching for that Sega dance,
                        <br /> Save the last dance.
                    </h4>
                    <div class="text-dark mb-4">
                        <p>This is the story of the fine ladies and gents who go round and round with a wiggle to their waist as the sounds of the "batter" and tombeau beats against bear hands. </p>
                        <p>Its traditional and unique to the indian ocean islands. The language of the rythym is kreol and its a magnificent sight to behold on the sandy beach with bare foot. </p>
                    </div>
                    <a href="#" class="text-dark text-uppercase align-middle text-sm font-weight-bold">Read more <i class="la la-long-arrow-right la-x text-blue align-middle"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- END Latest News-->
    <!-- ======== @Region: Footer upper ======== -->

    <div id="contact" class="footer bg-blue bg-op-7 pt-6 pb-6 text-center text-white" data-animate="fadeIn" data-animate-delay="0.1">
        <h2 class="display-4 font-weight-light mb-3">
            let us help you
        </h2>

        <button type="button" data-toggle="modal" data-target=".real-estate-modal2" class="btn btn-rounded btn-bold px-5 py-3 mb-5
      text-uppercase btn-blue border-0 btn-flat text-sm">...Find a house</button>

        <a href="/partners" type="button" data-toggle="modal" data-target=".real-estate-modal3" class="btn btn-rounded btn-bold px-5 py-3 mb-5
      text-uppercase btn-blue border-0 btn-flat text-sm">Maximize Returns...</a>

        <div class="container">
            <div class="row justify-content-around">
                <div class="col-md-4 mb-1 d-flex align-items-center justify-content-center"><i class="la la-phone icon-2x mr-2"></i>+230 58531705</div>
                <div class="col-md-4 mb-1 d-flex align-items-center justify-content-center"><i class="la la-envelope icon-2x mr-2"></i>findus@housemasters.mu</div>
                <div class="col-md-4 mb-1 d-flex align-items-center justify-content-center"><a href="" class="text-white" ><i class="la la-linkedin icon-2x mr-2"></i></a>
                    <a class="text-white" href="https://www.facebook.com/housemasters.mu"><i class="la la-facebook icon-2x mr-2"></i></a>
                    <a class="text-white"  href="https://www.instagram.com/housemasters.mu/"><i class="la la-instagram icon-2x mr-2"></i></a></div>
            </div>
        </div>
    </div>

    <!-- END Footer upper -->
</div>
<!-- ======== @Region: Copyright Section ======== -->
<div class="footer-bottom d-inline-block w-100 pos-relative pos-zindex-10 bg-white" data-animate="fadeIn" data-animate-delay="0.1">
    <div class="text-center copyrighty-section pt-5 pb-5 text-sm font-weight-bold">&copy; <?php echo date('Y') ?> HouseMasters | Real Estate Services</div>
</div>
<!--END Copyright Section-->



<!-- Floating "Schedule a showing" button -->


<!-- @modal: the "Schedule a showing" modal -->





<!-- /.modal -->
<!-- @modal: the "Schedule a showing" modal -->






<div class="modal fade real-estate-modal2">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content p-4">
            <div class="modal-header">
                <h4 class="modal-title  pr-8">
                    Register your Request!
                </h4>
                <div class="text-xs text-muted form-text pl-0">Need Assistance?<br /> call Shanon +230 58531705</div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <div class="modal-body">
                <p id="note">Tell us what you are looking for and leave the rest to us..</p>
                <div class="alert">Thats it!, we would contact you ASAP. If its urgent, call Shanon on: +230 58531705</div>

                <form id="requestForm" target="_self" method="POST" action="" onSubmit="return postToGoogle();">
                    <div class="form-row">
                        <div class="form-group col-md-6">

                            <select id="inputWho" required class="custom-select my-1 mr-sm-2 form-control-rounded">
                                <option selected  value="">I am</option>
                                <option value="a Student">a Student
                                </option>
                                <option value="an Expat">an Expat
                                </option>
                                <option value="a Solo Travele">a Solo Traveler
                                </option>
                                <option value="a Couple">a Couple
                                </option>
                                <option value="a Family">a Family
                                </option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">

                            <select id="inputWhat" required class="custom-select my-1 mr-sm-2 form-control-rounded">
                                <option selected  value="">Looking For</option>
                                <option value="a Room in a shared Apartment">a Room in a shared Apartment
                                </option>
                                <option value="a Studio">a Studio
                                </option>
                                <option value="an Apartment">an Apartment
                                </option>
                                <option value="n Individual House">an Individual House
                                </option>
                                <option value="a Land">a Land
                                </option>
                            </select>
                        </div>


                    </div>

                    <div class="form-row">

                        <div class="form-group col-md-6">

                            <select id="inputLength" required class="custom-select my-1 mr-sm-2 form-control-rounded">
                                <option selected value="">To</option>
                                <option value="Rent For 1 - 3 Months">Rent For 1 - 3 Months
                                </option>
                                <option value="Rent For 3 - 6 Months">Rent For 3 - 6 Months
                                </option>
                                <option value="Rent For 6 - 12 Months">Rent For 6 - 12 Months
                                </option>
                                <option value="Rent For Long Term">Rent For Long Term
                                </option>
                                <option value="Buy">Buy
                                </option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">

                            <select id="inputWhere" required class="custom-select my-1 mr-sm-2 form-control-rounded">
                                <option selected  value="">In the Region of</option>
                                <option value="16eme Mille">16eme Mille</option>
                                <option value="Agalega">Agalega</option>
                                <option value="Albion">Albion</option>
                                <option value="Amitie Gokhoola">Amitie Gokhoola</option>
                                <option value="Arsenal">Arsenal</option>
                                <option value="Baie Du Cap">Baie Du Cap</option>
                                <option value="Bambous">Bambous</option>
                                <option value="Bambous Virieux">Bambous Virieux</option>
                                <option value="Bananes ">Bananes </option>
                                <option value="Beau Bassin">Beau Bassin</option>
                                <option value="Beau Vallon">Beau Vallon</option>
                                <option value="Bel Air">Bel Air</option>
                                <option value="Bel Ombre">Bel Ombre</option>
                                <option value="Benares">Benares</option>
                                <option value="Black River">Black River</option>
                                <option value="Bois Cheri">Bois Cheri</option>
                                <option value="Bois Des Amourettes">Bois Des Amourettes</option>
                                <option value="Bon Accueil">Bon Accueil</option>
                                <option value="Bramsthan">Bramsthan</option>
                                <option value="Brisee Verdiere">Brisee Verdiere</option>
                                <option value="Britannia">Britannia</option>
                                <option value="Calebasses">Calebasses</option>
                                <option value="Camp Carol">Camp Carol</option>
                                <option value="Camp De Masque">Camp De Masque</option>
                                <option value="Camp De Masque Pave">Camp De Masque Pave</option>
                                <option value="Camp Diable">Camp Diable</option>
                                <option value="Camp Ithier">Camp Ithier</option>
                                <option value="Cap Malheureux">Cap Malheureux</option>
                                <option value="Cascavelle">Cascavelle</option>
                                <option value="Case Noyale">Case Noyale</option>
                                <option value="Central Flacq">Central Flacq</option>
                                <option value="Chamarel">Chamarel</option>
                                <option value="Chamouny">Chamouny</option>
                                <option value="Chemin Grenier">Chemin Grenier</option>
                                <option value="Clemencia">Clemencia</option>
                                <option value="Cluny">Cluny</option>
                                <option value="Congomah">Congomah</option>
                                <option value="Cottage">Cottage</option>
                                <option value="Creve Coeur">Creve Coeur</option>
                                <option value="Curepipe">Curepipe</option>
                                <option value="D'Epinay">D'Epinay</option>
                                <option value="Dagotiere">Dagotiere</option>
                                <option value="Dubreuil">Dubreuil</option>
                                <option value="Eau Coulee">Eau Coulee</option>
                                <option value="Ebene">Ebene</option>
                                <option value="Ecroignard">Ecroignard</option>
                                <option value="Flic en Flac">Flic en Flac</option>
                                <option value="Fond du Sac">Fond du Sac</option>
                                <option value="FOREST - SIDE">FOREST - SIDE</option>
                                <option value="G.R.S.E">G.R.S.E</option>
                                <option value="Goodlands">Goodlands</option>
                                <option value="Grand Bay">Grand Bay</option>
                                <option value="Grand Bel Air">Grand Bel Air</option>
                                <option value="Grand Bois">Grand Bois</option>
                                <option value="Grand Gaube">Grand Gaube</option>
                                <option value="Grand Sable">Grand Sable</option>
                                <option value="Grande Retraite">Grande Retraite</option>
                                <option value="Gros Cailloux">Gros Cailloux</option>
                                <option value="L'Avenir">L'Avenir</option>
                                <option value="L'Escalier">L'Escalier</option>
                                <option value="L'Esperance">L'Esperance</option>
                                <option value="L'Esperance Trebuchet">L'Esperance Trebuchet</option>	<option value="La Flora">La Flora</option>
                                <option value="La Gaulette">La Gaulette</option>
                                <option value="La Laura / Malenga">La Laura / Malenga</option>
                                <option value="Lalmatie">Lalmatie</option>
                                <option value="Laventure">Laventure</option>
                                <option value="Le Hochet">Le Hochet</option>
                                <option value="Le Morne">Le Morne</option>
                                <option value="Long Mountain">Long Mountain</option>
                                <option value="Mahebourg">Mahebourg</option>
                                <option value="Mapou">Mapou</option>
                                <option value="Mare D'Albert">Mare D'Albert</option>
                                <option value="Mare La Chaux">Mare La Chaux</option>
                                <option value="Mare Tabac">Mare Tabac</option>
                                <option value="Medine Camp de Masque">Medine Camp de Masque</option>
                                <option value="Melrose">Melrose</option>
                                <option value="Midlands">Midlands</option>
                                <option value="Moka">Moka</option>
                                <option value="Montagne Blanche">Montagne Blanche</option>
                                <option value="Morc St Andre ">Morc St Andre </option>
                                <option value="New Grove">New Grove</option>
                                <option value="Notre Dame">Notre Dame</option>
                                <option value="Nouvelle Decouverte">Nouvelle Decouverte</option>
                                <option value="Nouvelle France">Nouvelle France</option>
                                <option value="Old Grand Port">Old Grand Port</option>
                                <option value="Olivia">Olivia</option>
                                <option value="Pamplemousses">Pamplemousses</option>
                                <option value="Petit Bel Air">Petit Bel Air</option>
                                <option value="Petit Raffray">Petit Raffray</option>
                                <option value="Petite Riviere">Petite Riviere</option>
                                <option value="Phoenix">Phoenix</option>
                                <option value="Piton">Piton</option>
                                <option value="Plaine des Papayes">Plaine des Papayes</option>
                                <option value="Plaine Magnien">Plaine Magnien</option>
                                <option value="Pointe aux Piments">Pointe aux Piments</option>
                                <option value="Pointe aux Sables">Pointe aux Sables</option>
                                <option value="PORT LOUIS">PORT LOUIS</option>
                                <option value="Poste de Flacq">Poste de Flacq</option>
                                <option value="Poudre D'Or Hamlet">Poudre D'Or Hamlet</option>
                                <option value="Poudre D'Or Village">Poudre D'Or Village</option>
                                <option value="Providence">Providence</option>
                                <option value="Quartier Militaire">Quartier Militaire</option>
                                <option value="QUATRE BORNES">QUATRE BORNES</option>
                                <option value="Quatre Cocos">Quatre Cocos</option>
                                <option value="Quatre Soeurs">Quatre Soeurs</option>
                                <option value="Queen Victoria ">Queen Victoria </option>
                                <option value="Reduit">Reduit</option>
                                <option value="Richelieu">Richelieu</option>
                                <option value="Ripailles">Ripailles</option>
                                <option value="Riviere des Anguilles">Riviere des Anguilles</option>
                                <option value="Riviere des Creoles">Riviere des Creoles</option>
                                <option value="Riviere du Poste">Riviere du Poste</option>
                                <option value="Riviere du Rempart">Riviere du Rempart</option>
                                <option value="Roche Terre">Roche Terre</option>
                                <option value="Roches Noires">Roches Noires</option>
                                <option value="Rodrigues - Grand Montagne">Rodrigues - Grand Montagne</option>
                                <option value="Rodrigues - La Ferme">Rodrigues - La Ferme</option>
                                <option value="Rodrigues - Mont Lubin">Rodrigues - Mont Lubin</option>
                                <option value="Rodrigues - Port Mathurin">Rodrigues - Port Mathurin</option>
                                <option value="Rodrigues - Riviere Coco">Rodrigues - Riviere Coco</option>
                                <option value="Rose Belle">Rose Belle</option>
                                <option value="Rose- Hill">Rose- Hill</option>
                                <option value="Saint Julien d'Hotman">Saint Julien d'Hotman</option>
                                <option value="Saint Julien Village">Saint Julien Village</option>
                                <option value="Saint Pierre">Saint Pierre</option>
                                <option value="Sebastopol">Sebastopol</option>
                                <option value="Souillac">Souillac</option>
                                <option value="St Hubert">St Hubert</option>
                                <option value="Surinam">Surinam</option>
                                <option value="Tamarin">Tamarin</option>
                                <option value="Terre Rouge">Terre Rouge</option>
                                <option value="The Vale">The Vale</option>
                                <option value="Tombeau Bay">Tombeau Bay</option>
                                <option value="Triolet">Triolet</option>
                                <option value="Trois Boutiques">Trois Boutiques</option>
                                <option value="Trou aux Biches">Trou aux Biches</option>
                                <option value="Trou D'Eau Douce">Trou D'Eau Douce</option>
                                <option value="Tyack">Tyack</option>
                                <option value="Union Ducray / St Aubin">Union Ducray / St Aubin</option>
                                <option value="Union Park">Union Park</option>
                                <option value="Vacoas / Floreal">Vacoas / Floreal</option>
                                <option value="Verdun">Verdun</option>
                                <option value="Ville Bague">Ville Bague</option>
                            </select>
                        </div>
                    </div>





                    <div class="form-row">
                        <p id="note">..and some personal contact information, so we can reach you!</p>
                        <div class="form-group col-md-6">

                            <input type="text" required class="form-control form-control-rounded" id="fname" placeholder="First Name">
                        </div>
                        <div class="form-group col-md-6">

                            <input type="text" required class="form-control form-control-rounded" id="flname" placeholder="Last Name">
                        </div>

                        <div class="form-group col-md-6">

                            <input type="text" required class="form-control form-control-rounded" id="inputEmail" placeholder="Email Address">
                        </div>
                        <div class="form-group col-md-6">

                            <input type="phone" required class="form-control form-control-rounded" id="phone" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="text-xs text-muted form-text pl-2">Is there any special or specific request you like us to know ?</div>
                        <textarea rows="3" id="description" cols="50" placeholder="Specific Request" class="form-control form-control-lg form-control-rounded">

                    </textarea>

                    </div>

                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" required type="checkbox" id="gridCheck">

                            <div class="text-xs text-muted form-text pl-2">I agree to <a href="" > Terms and Conditions </a></div>
                        </div>
                    </div>

                    <div class="modal-footer border-0">
                        <button id="Submit" class="btn btn-blue btn-block btn-flat btn-bold btn-rounded py-3">Send Request</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- Style switcher - demo only - @todo: remove in production -->

<!--Hidden elements - excluded from jPanel Menu on mobile-->
<div class="hidden-elements js-off-canvas-exclude"></div>

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v3.3'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
     attribution=setup_tool
     page_id="535560266890298"
     theme_color="#44bec7"
     logged_in_greeting="Hi! Do you need a place to call home?"
     logged_out_greeting="Hi! Do you need a place to call home?">
</div>




<!--jQuery 3.3.1 via CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Popper 1.14.6 via CDN, needed for Bootstrap Tooltips & Popovers -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

<!-- Bootstrap v4.3.1 JS via CDN -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<!-- JS plugins required on all pages NOTE: Additional non-required plugins are loaded ondemand as of AppStrap 2.5 To disable this and load plugin assets manually simple add data-plugins-manual=true to the body tag -->


<!--Custom scripts & AppStrap API integration -->
<script src="{{asset('assets/js/custom-script.js')}}"></script>
<!--AppStrap scripts mainly used to trigger libraries/plugins -->
<script src="{{asset('assets/js/script.min.js')}}"></script>
<script src="{{asset('assets/js/post-to-api.js')}}"></script>
</body>
</html>
