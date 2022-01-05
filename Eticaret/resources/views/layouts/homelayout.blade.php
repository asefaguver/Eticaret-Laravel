<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script defer src="https://unpkg.com/alpinejs@3.5.1/dist/cdn.min.js"></script>

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>@yield('title')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('assets/images/apple-touch-icon.png')}}">
    @livewireStyles

    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/all.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    

</head>

<body>
    <!-- Start Main Top -->
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="text-slid-box">
                        <div id="offer-box" class="carouselTicker">
                            <ul class="offer-box">
                                <li>
                                    <i class="fa fa-opencart"></i> Off 10%! Shop Now Man
                                </li>
                                <li>
                                    <i class="fa fa-opencart"></i> 50% - 80% off on Fashion
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="custom-select-box">
                        
                    </div>
                    <!-- <div class="right-phone-box">
                        <p>Call US :- <a href="#"> +11 900 800 100</a></p>
                    </div>--> 
                    <div class="our-link">
                        <ul>
                            <!--<li><a href="#">My Account</a></li>  -->
                            
                            @if (Route::has('login'))
                                <!-- Hesap mail : m@mail.com ,,,,, şifre: 123456 -->
                                    @auth
                                        
                                        @if(Auth::user()->utype == 'ADM')                                        
                                        
                                        <li class="dropdown">
                                        <a href="#" class="btn btn-secondary dropdown-toggle" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">{{Auth::user()->name}}</a>
                                        <ul class="dropdown-menu" style="background-color: #6c757d;">                                            
                                            <!-- <li><a href="{{ route('profile.show') }}"><i class=" fa fa-suitcase"></i> Profile</a></li>-->
                                            <li><a href="/userprofile"><i class=" fa fa-suitcase"></i> Profile</a></li>
                                            
                                            <li><a href="{{route('user_orders')}}"><i class="fa fa-bell-o"></i> My Orders </a></li>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                    {{ __('Log Out') }}
                                                </x-jet-dropdown-link>
                                            </form>
                                        </ul>
                                        </li>
                                        <li>
                                        <a href="/product"class="text-sm text-gray-700 dark:text-gray-500 underline">Admin Dashboard</a>    
                                        </li>
                                        @else
                                        
                                        <li class="dropdown" style="padding-right: 250px;">
                                        <a href="#" class="btn btn-secondary dropdown-toggle" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">{{Auth::user()->name}}</a>
                                        <ul class="dropdown-menu" style="background-color: #6c757d;">                                            
                                            <!-- <li><a href="{{ route('profile.show') }}"><i class=" fa fa-suitcase"></i> Profile</a></li>-->
                                            <li><a href="/userprofile"><i class=" fa fa-suitcase"></i> Profile</a></li>
                                            
                                            <li><a href="{{route('user_orders')}}"><i class="fa fa-bell-o"></i> My Orders </a></li>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                    {{ __('Log Out') }}
                                                </x-jet-dropdown-link>
                                            </form>
                                        </ul>
                                        </li>
                                        <!--<li>
                                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                                        </li>-->
                                        <!-- <li>
                                        <a href="/product"class="text-sm text-gray-700 dark:text-gray-500 underline">Admin Dashboard</a>    
                                        </li> -->
                                        @endif
                                    @else
                                        <li>
                                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                                        </li>
                                        
                                        @if (Route::has('register'))
                                        <li>
                                            <a href="{{ route('register') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                        @endif
                                        </li>
                                    @endauth
                                
                            @endif                               
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Top -->
    
    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="/"><img src="{{ asset('assets') }}/images/icon-for-book.jpg" class="logo" style="width:90px; height:71px;" alt=""> <strong>Book Store</strong> </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/shop">Shop</a></li>
                        <!--<@foreach($title as $ua)
                        <li class="nav-item"><a class="nav-link" href="/{{$ua->id}}/kategoriler">{{$ua->title}}</a></li>
                        @endforeach-->                                                                       
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">Categories</a>
                            <ul class="dropdown-menu">
                                @foreach($title as $ua)
                                <li><a class="nav-link" href="/{{$ua->id}}/kategoriler">{{$ua->title}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <!-- <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>-->
                        <li class="side-menu"><a href="#">
						<i class="fa fa-shopping-basket fa-lg"></i>
                            <span class="badge"> Sepetim</span>
					</a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <li class="cart-box">
                    <ul class="cart-list">
                        @foreach($dataList as $dl)
                        <li>
                            <a href="#" class="photo"><img src="{{asset('images/'.$dl->product->image)}}" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">{{$dl->product->title}} </a></h6>
                            <p>{{$dl->product_quantity}}x - <span class="price">${{$dl->product->price}}</span></p>
                        </li>
                        @endforeach
                        
                        <li class="total">
                            <a href="/cart" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                            <!-- <span class="float-right"><strong>Total</strong>: $180</span> -->
                        </li>
                       
                    </ul>
                </li>
            </div>
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    @yield('content')


    <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>Book Store Hakkında</h4>
                            <p>Book Store sitemiz, kitap alanında en kaliteli ürünleri tüketiciye en uygun fiyatlarla sunma amacıyla 2021 tarihinde Guver ltd. şti. tarafından kurulmuştur. 2021 yılından bu yana ofis ve kırtasiye malzemeleri sektöründe . İstanbul Kadıköy’de  bulunan firmamız her zaman müşterilerinin memnuniyetini öncelikleri arasında ilk sıraya koymuştur. 
                                </p>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Customer Service</a></li>
                                <li><a href="#">Our Sitemap</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Delivery Information</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Bize Ulaşın</h4>
                            <ul>
                                <li>
                                    <p><i class="fa fa-map-pin"></i>Address: Michael I. Days 3756 <br>Preston Street Wichita,<br> KS 67213 </p>
                                </li>
                                <li>
                                    <p><i class="fa fa-phone-square"></i>Phone: <a href="tel:+1-888705770">+1-888 705 770</a></p>
                                </li>
                                <li>
                                    <p><i class="fa fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">contactinfo@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->
     <!-- Start copyright  -->
     <div class="footer-copyright">
        <p class="footer-company">Tüm hakları saklıdır. &copy; 2021 <a href="#">Book Store</a> Design By :
            <a href="#">A. Sefa Güver</a></p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="{{ asset('assets') }}/js/jquery-3.2.1.min.js"></script>
    <script src="{{ asset('assets') }}/js/popper.min.js"></script>
    <script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="{{ asset('assets') }}/js/jquery.superslides.min.js"></script>
    <script src="{{ asset('assets') }}/js/bootstrap-select.js"></script>
    <script src="{{ asset('assets') }}/js/inewsticker.js"></script>
    <script src="{{ asset('assets') }}/js/bootsnav.js"></script>
    <script src="{{ asset('assets') }}/js/images-loded.min.js"></script>
    <script src="{{ asset('assets') }}/js/isotope.min.js"></script>
    <script src="{{ asset('assets') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('assets') }}/js/baguetteBox.min.js"></script>
    <script src="{{ asset('assets') }}/js/form-validator.min.js"></script>
    <script src="{{ asset('assets') }}/js/contact-form-script.js"></script>
    <script src="{{ asset('assets') }}/js/custom.js"></script>
    <script src="https://use.fontawesome.com/b17766e48e.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>    
</body>

</html>