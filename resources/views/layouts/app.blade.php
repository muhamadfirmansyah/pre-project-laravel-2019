<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ridente HTML') }}</title>

    <!-- Theme core -->
    <link href="{!! asset('asset/css/bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('asset/css/animate.min.css') !!}" rel="stylesheet">

    <!-- Vendor CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <!-- Swiper -->
    <link rel="stylesheet" href="{!! asset('vendor/swiper/css/swiper.min.css') !!}">

    <!-- WoWJS -->
    <link rel="stylesheet" href="{!! asset('vendor/wowjs/css/libs/animate.css') !!}">

    <!-- Dropdown Hover -->
    <link rel="stylesheet" href="{!! asset('vendor/dropdown-hover/css/bootstrap-dropdownhover.css') !!}">

    <!-- Responsive Navbar -->
    <link rel="stylesheet" href="{!! asset('vendor/responsive-navbar/css/bootstrap-4-navbar.css') !!}">

    <!-- Custom styles for this template -->
    <link href="{!! asset('asset/template.css') !!}" rel="stylesheet">
</head>
<body>
    <header>        
      <nav class="navbar navbar-expand-md">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html"><img src="{!! asset('asset/img/logo-ridente.png') !!}"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            @guest
              <ul class="navbar-link">
                <li><a href="#" data-toggle="modal" data-target="#modalRegister">Join</a></li>
                @if (Route::has('login'))
                  <li><a href="#" data-toggle="modal" data-target="#modalLogin">Login</a></li>
                @endif
                <li><a href="cart.html"><i class="fas fa-shopping-cart"></i><span class="cart-qty">5</span></a></li>
              </ul>
            @else
              <ul class="navbar-link">
                <li><a href="#">My Account</a></li>
                <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                <li><a href="cart.html"><i class="fas fa-shopping-cart"></i><span class="cart-qty">5</span></a></li>

                <!-- Form For Logout -->
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
                <!-- End of Form To Logout -->

              </ul>
            @endguest
            <ul class="navbar-nav ml-auto">              
              <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                  About
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{ route('about') }}">Company Introduction</a>
                  <a class="dropdown-item" href="team">Our Team</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                  Products
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="product-list.html">Product A</a>
                  <a class="dropdown-item" href="product-list.html">Product B</a>
                  <a class="dropdown-item" href="product-list.html">Product C</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('gallery') }}">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog.html">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="promo.html">Promos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main role="main" class="homepage">
        @yield('content')
    </main>
    <footer>
      <div class="footer-area cl-main">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col">
              <div class="footer-copy">
                Copyright &copy 2018 Ridente Sofa. 
                <br>Built with love in Indonesia 
                <br>All rights reserved. 
              </div>
            </div>
            <div class="col-md-8 col">
              <div class="row">
                <div class="col-sm-6 col-md-4 col">
                  <h4>Company</h4>
                  <ul class="menu-links">
                    <li><a href="company.html">Company</a></li>
                    <li><a href="update.html">Updates</a></li>
                    <li><a href="career.html">Work with Us</a></li>
                  </ul>    
                </div>
                <div class="col-sm-6 col-md-4 col">
                  <h4>Products</h4>
                  <ul class="menu-links">
                    <li><a href="showcase.html">Showcase</a></li>
                    <li><a href="service.html">Services</a></li>
                  </ul>    
                </div>
                <div class="col-sm-6 col-md-4 col">
                  <h4>Support</h4>
                  <ul class="menu-links">
                    <li><a href="contact.html">Contact Us</a></li>
                  </ul>  
                  <ul class="social-links">
                    <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                  </ul>  
                </div>
              </div>
            </div>            
          </div>
        </div>  
      </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade modal-default modal-form modal-narrow" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLoginLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Login</h4>
            </div>
            <div class="modal-body">   
              <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-content form-signin">
                    <p>Welcome! Glad to see you here</p>
                    <div class="btn-area btn-login-social">
                        <a class="btn btn-block btn-fb" href="#"><i class="fab fa-facebook-f"></i> Log in with Facebook</a>
                    </div>
                    <p>Or login using email</p>
                    <fieldset class="form-group">
                        <input type="email" class="form-control{{ $errors->has('email') ? ' is-vailid' : '' }}" id="email" name="email" value="{{ old('email') }}" placeholder="Email Address" required autofocus>

                        @if ($errors->has('email'))
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                          </span>
                        @endif
                    </fieldset>
                    <fieldset class="form-group">
                        <input type="password" class="form-control{{ $errors->has('password') ? ' is-vailid' : '' }}" id="password" name="password" placeholder="Password" name="password">
                        @if ($errors->has('password'))
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                          </span>
                        @endif
                    </fieldset>
                    <div class="btn-area">
                        <button class="btn btn-main btn-sm" type="submit">Sign In</button>
                    </div>
                </div>
              </form>
            </div>  
            <div class="modal-footer">
              <p>
                  Don't have an account? <a href="register.html">Sign Up</a>
                  <br>
                  <a href="#">Forgot Password?</a>
              </p>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="modal fade modal-default modal-form modal-narrow" id="modalRegister" tabindex="-1" role="dialog" aria-labelledby="modalLoginLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Sign Up</h4>
            </div>
            <div class="modal-body">
              <form method="POST" action="{{ route('register') }}">
                <div class="form-content form-signin">
                    <p>Hi! Glad to see you here!</p>
                    <div class="btn-area btn-login-social">
                        <a class="btn btn-block btn-fb" href="#"><i class="fab fa-facebook-f"></i> Sign up with Facebook</a>
                    </div>
                    <p>Or register using email</p>
                    <fieldset class="form-group">
                        <input type="text" class="form-control{{ $errors->has('name') ? ' is-vailid' : '' }}" id="name" value="{{ old('name') }}" placeholder="Name" required autofocus>

                        @if ($errors->has('name'))
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                          </span>
                        @endif
                    </fieldset>
                    <fieldset class="form-group">
                        <input type="email" class="form-control{{ $errors->has('email') ? ' is-vailid' : '' }}" id="email" placeholder="Email Address" required value="{{ old('email') }}">

                        @if ($errors->has('email'))
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                          </span>
                        @endif
                    </fieldset>
                    <fieldset class="form-group">
                        <input type="password" class="form-control{{ $errors->has('email') ? ' is-vailid' : '' }}" id="password" placeholder="Password" value="{{ old('password') }}" required>
                        @if ($errors->has('password'))
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                          </span>
                        @endif
                    </fieldset>
                    <div class="btn-area">
                        <button type="submit" class="btn btn-main btn-sm">
                          {{ __('Register') }}
                        </button>                        
                    </div>
                </div>
              </form>
            </div>  
            <div class="modal-footer">
              <p>
                  Already have an account? <a href="register.html">Login</a>
              </p>
            </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="{!! asset('asset/js/jquery-3.3.1.min.js') !!}"></script>
    <script src="{!! asset('asset/js/bootstrap.min.js') !!}"></script>

    <!-- Vendor and Additional
    ================================================== -->

    <script src="{!! asset('asset/js/custom.js') !!}"></script>

    <!-- Swiper -->
    <script src="{!! asset('vendor/swiper/js/swiper.min.js') !!}"></script>

    <!-- MatchHeight -->
    <script src="{!! asset('vendor/jquery.matchHeight-min.js') !!}"></script>

    <!-- WowJS -->  
    <script src="{!! asset('vendor/wowjs/dist/wow.js') !!}"></script>
    <script>
      wow = new WOW(
        {
          animateClass: 'animated',
          offset:       100,
          callback:     function(box) {
            console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
          }
        }
      );
      wow.init();
    </script>

    <!-- Responsive Navbar -->
    <script src="{!! asset('vendor/responsive-navbar/js/bootstrap-4-navbar.js') !!}"></script>

    <!-- Dropdown Hover -->
    <script src="{!! asset('vendor/dropdown-hover/js/bootstrap-dropdownhover.min.js') !!}"></script>

  </body>
</html>
