@extends('layouts.app')

@section('content')
      <div class="block banner">
        <div class="swiper-container main-slider">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="banner-content layered">
                <img class="d-block w-100" src="media/images/banner-dummy-01.jpg" alt="Intro">
                <div class="caption  wow zoomIn" data-wow-delay="0">
                  <div class="valign-wrap">
                    <div class="valign">
                      <div class="container">
                        <div class="col center">
                          <h1>Trustworthy Service is Us</h1>
                          <p>Pellentesque a velit at elit auctor eleifend. Ut egestas lacinia tempor. Quisque bibendum faucibus quam quis auctor. Nunc tempor velit eu eros egestas aliquet.</p>
                          <div class="btn-area">
                            <a href="#" class="btn btn-main">Learn More</a>
                            <a href="#" class="btn btn-outline-main">Contact Us</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>
            </div>
            <!--
            <div class="swiper-slide">
              <div class="banner-content">
                <img class="d-block w-100" src="media/images/banner-dummy-02.jpg" alt="Intro">
                <div class="caption">
                  <div class="valign-wrap">
                    <div class="valign">
                      <div class="container">
                        <div class="col-md-6 float-right">
                          <h1>Trustworthy Service is Us</h1>
                          <p>Pellentesque a velit at elit auctor eleifend. Ut egestas lacinia tempor. Quisque bibendum faucibus quam quis auctor. Nunc tempor velit eu eros egestas aliquet.</p>
                          <div class="btn-area">
                            <a href="#" class="btn btn-main">Learn More</a>
                            <a href="#" class="btn btn-outline-main">Contact Us</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>
            </div>
            -->

          </div>
          <!-- Add Pagination -->
          <div class="swiper-pagination"></div>
        </div>  
      </div>
      
      <div class="block teaser">
        <div class="row">
          <div class="col col-md-4">
            <div class="space split" data-mh="group-teaser">
              <div class="item">
                <div class="wrap">
                  <img src="media/images/teaser-02x.jpg">
                </div>    
              </div>
              <div class="item">
                <div class="wrap">
                  <img src="media/images/teaser-02x.jpg">   
                </div> 
              </div>
            </div>
          </div>
          <div class="col col-md-8">
            <div class="space" data-mh="group-teaser">
              <div class="item">
                <div class="wrap">
                  <img src="media/images/teaser-01.jpg">  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="block category" style="display: none;">
        <div class="container-fluid">
          <div class="row list-view list-overlay">
            <div class="col-sm-4 wow fadeInUp" data-wow-delay="0s">
              <div class="thumb">
                <img src="media/images/sample-category-01.jpg">
                <div class="overlap">
                  <h3>Title Here</h3>
                  <label>Sub Description Here</label>
                </div>
              </div>
            </div>
            <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.2s">
              <div class="thumb">
                <img src="media/images/sample-category-01.jpg">
                <div class="overlap">
                  <h3>Title Here</h3>
                  <label>Sub Description Here</label>
                </div>
              </div>
            </div>
            <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.4s">
              <div class="thumb">
                <img src="media/images/sample-category-01.jpg">
                <div class="overlap">
                  <h3>Title Here</h3>
                  <label>Sub Description Here</label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="block latest">
        <div class="container">
          <h1 class="section-header wow bounceInDown" data-wow-delay="0s"><span>Latest Product</span></h1>
          <div class="product-view wow fadeIn" data-wow-delay="0.4s">
            <ul class="row product-list col4">
              <li class="item">
                <a href="product-detail-01.html">
                  <div class="thumb"><img src="media/products/product-01.jpg"></div>
                  <div class="content">
                    <p class="title">Product Title</p>
                    <p class="category">Chair</p>
                    <p class="price">
                      <span>Rp. 249.000</span>
                    </p>
                    <p class="installment">
                      Cicilan 3x 500,000;
                    </p>
                  </div>
                </a>
              </li>
              <li class="item">
                <a href="product-detail-02.html">
                  <div class="thumb"><img src="media/products/product-02.jpg"></div>
                  <div class="content">
                    <p class="title">Product Title</p>
                    <p class="category">Chair</p>
                    <p class="price">
                      <span>Rp. 249.000</span>
                    </p>
                    <p class="installment">
                      Cicilan 3x 500,000;
                    </p>
                  </div>
                </a>
              </li>
              <li class="item">
                <a href="product-detail-01.html">
                  <div class="thumb"><img src="media/products/product-01.jpg"></div>
                  <div class="content">
                    <p class="title">Product Title</p>
                    <p class="category">Chair</p>
                    <p class="price">
                      <span>Rp. 249.000</span>
                    </p>
                    <p class="installment">
                      Cicilan 3x 500,000;
                    </p>
                  </div>
                </a>
              </li>
              <li class="item">
                <a href="product-detail-02.html">
                  <div class="thumb"><img src="media/products/product-02.jpg"></div>
                  <div class="content">
                    <p class="title">Product Title</p>
                    <p class="category">Chair</p>
                    <p class="price">
                      <span>Rp. 249.000</span>
                    </p>
                    <p class="installment">
                      Cicilan 3x 500,000;
                    </p>
                  </div>
                </a>
              </li>
              <li class="item">
                <a href="product-detail-01.html">
                  <div class="thumb"><img src="media/products/product-01.jpg"></div>
                  <div class="content">
                    <p class="title">Product Title</p>
                    <p class="category">Chair</p>
                    <p class="price">
                      <span>Rp. 249.000</span>
                    </p>
                    <p class="installment">
                      Cicilan 3x 500,000;
                    </p>
                  </div>
                </a>
              </li>
              <li class="item">
                <a href="product-detail-02.html">
                  <div class="thumb"><img src="media/products/product-02.jpg"></div>
                  <div class="content">
                    <p class="title">Product Title</p>
                    <p class="category">Chair</p>
                    <p class="price">
                      <span>Rp. 249.000</span>
                    </p>
                    <p class="installment">
                      Cicilan 3x 500,000;
                    </p>
                  </div>
                </a>
              </li>
              <li class="item">
                <a href="product-detail-01.html">
                  <div class="thumb"><img src="media/products/product-01.jpg"></div>
                  <div class="content">
                    <p class="title">Product Title</p>
                    <p class="category">Chair</p>
                    <p class="price">
                      <span>Rp. 249.000</span>
                    </p>
                    <p class="installment">
                      Cicilan 3x 500,000;
                    </p>
                  </div>
                </a>
              </li>
              <li class="item">
                <a href="product-detail-02.html">
                  <div class="thumb"><img src="media/products/product-02.jpg"></div>
                  <div class="content">
                    <p class="title">Product Title</p>
                    <p class="category">Chair</p>
                    <p class="price">
                      <span>Rp. 249.000</span>
                    </p>
                    <p class="installment">
                      Cicilan 3x 500,000;
                    </p>
                  </div>
                </a>
              </li>
              <li class="item">
                <a href="product-detail-01.html">
                  <div class="thumb"><img src="media/products/product-01.jpg"></div>
                  <div class="content">
                    <p class="title">Product Title</p>
                    <p class="category">Chair</p>
                    <p class="price">
                      <span>Rp. 249.000</span>
                    </p>
                    <p class="installment">
                      Cicilan 3x 500,000;
                    </p>
                  </div>
                </a>
              </li>
              <li class="item">
                <a href="product-detail-02.html">
                  <div class="thumb"><img src="media/products/product-02.jpg"></div>
                  <div class="content">
                    <p class="title">Product Title</p>
                    <p class="category">Chair</p>
                    <p class="price">
                      <span>Rp. 249.000</span>
                    </p>
                    <p class="installment">
                      Cicilan 3x 500,000;
                    </p>
                  </div>
                </a>
              </li>
              <li class="item">
                <a href="product-detail-01.html">
                  <div class="thumb"><img src="media/products/product-01.jpg"></div>
                  <div class="content">
                    <p class="title">Product Title</p>
                    <p class="category">Chair</p>
                    <p class="price">
                      <span>Rp. 249.000</span>
                    </p>
                    <p class="installment">
                      Cicilan 3x 500,000;
                    </p>
                  </div>
                </a>
              </li>
              <li class="item">
                <a href="product-detail-02.html">
                  <div class="thumb"><img src="media/products/product-02.jpg"></div>
                  <div class="content">
                    <p class="title">Product Title</p>
                    <p class="category">Chair</p>
                    <p class="price">
                      <span>Rp. 249.000</span>
                    </p>
                    <p class="installment">
                      Cicilan 3x 500,000;
                    </p>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="block highlight">
        <div class="container">
          <h1 class="section-header wow bounceInDown" data-wow-delay="0s"><span>Why Us?</span></h1>
          <div class="row point-view center narrow">
            <div class="col-sm-4">
              <div class="item wow bounceIn" data-wow-delay="0.2s">
                <div class="thumb"><img src="asset/img/ic-teaser-01.png"></div>
                <div class="content">
                  <label class="title">Tech Savvy</label>
                  <p>
                    Nullam fringilla egestas gravida. In consectetur ligula sit amet aliquet ornare. Nam quis tincidunt orci, nec molestie nulla.
                  </p>
                </div>                
              </div>
            </div>
            <div class="col-sm-4">
              <div class="item wow bounceIn" data-wow-delay="0.5s">
                <div class="thumb"><img src="asset/img/ic-teaser-02.png"></div>
                <div class="content">
                  <label class="title">Service Gurus</label>
                  <p>
                    Cras rutrum mi iaculis pulvinar semper. Fusce aliquam ex id nibh hendrerit, id mollis felis ornare. 
                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="item wow bounceIn" data-wow-delay="0.8s">
                <div class="thumb"><img src="asset/img/ic-teaser-03.png"></div>
                <div class="content">
                  <label class="title">Ready to Support</label>
                  <p>
                    NVestibulum sit amet nunc imperdiet, aliquet nisl quis, placerat eros. Proin ut fringilla justo.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="block cl-white closer full wow fadeInUp" data-wow-delay="0s">
        <div class="container">
          <h1>We are ready</h1>
          <p>
            Like nothing you've seen. Reach us today & experience our service!
          </p>
          <div class="btn-area">
            <div class="btn btn-main btn-lg">Call Us</div>
          </div>
        </div>
      </div>  
@endsection