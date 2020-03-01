@extends('layout/homelayout')
@section('container')
<!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark stylish">
    <div class="container">
      <!-- Brand -->
      <a class="navbar-brand" href="/">
        <img src="{{asset('template/images/home.png')}}">
      </a>
      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="archive/couple">គូស្នេហ៍
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="archive/broken">ខូចចិត្ត
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="archive/marry">អាពាហ៍ពិពាហ៍
            </a>
          </li>
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a href="#" class="nav-link socialhead">
              <img src="{{asset('template/images/facebook.png')}}">
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link socialhead">
              <img src="{{asset('template/images/twitter.png')}}">
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link socialhead">
              <img src="{{asset('template/images/instagram.png')}}">
            </a>
          </li>
          @if( auth()->check() )
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Hi!! {{ auth()->user()->name }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/profile">User Profile</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="/logout">Logout</a>
                </div>
              </li>
          @else              
          <li class="nav-item">
            <a href="/login" class="nav-link border border-light rounded waves-effect waves-light">Login
            </a>
          </li>
          @endif
        </ul>

      </div>

    </div>
  </nav>
<!-- End Navbar -->
<!--Carousel Wrapper-->
  <div class="row nopadmar carouselpc">
      <div class="col-lg-8 col-md-8 col-sm-12 col-12 nopadmar maxheight">
          <div class="bigslide">
            <!-- <img class="card-img-top" src="{{asset('template/images/love.jpg')}}" alt="Card image cap"> -->
            <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
              <!--Indicators-->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-2" data-slide-to="1"></li>
                <li data-target="#carousel-example-2" data-slide-to="2"></li>
              </ol>
              <!--/.Indicators-->
              <!--Slides-->
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                  <div class="view">
                    <img class="d-block w-100" src="{{asset('template/images/love.jpg')}}"
                      alt="First slide">
                    <div class="mask rgba-black-light"></div>
                  </div>
                  <div class="carousel-caption">
                    <h3 class="h3-responsive text-left cursorpoint" >តើយើងគួរបន្ត ឬបញ្ចប់នៅពេលដែលមនុស្សដែលយើងស្រឡាញ់ គេមានមនុស្សក្នុងចិត្តរួចហើយ?</h3>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="view">
                    <img class="d-block w-100" src="{{asset('template/images/carousel1.jpg')}}"
                      alt="Second slide">
                    <div class="mask rgba-black-strong"></div>
                  </div>
                  <div class="carousel-caption">
                    <h3 class="h3-responsive cursorpoint" >ហេតុអ្វីស្រឡាញ់គ្នាចាំបាច់ Private តែពីរនាក់?</h3>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="view">
                    <img class="d-block w-100" src="{{asset('template/images/carousel2.jpg')}}"
                      alt="Third slide">
                    <div class="mask rgba-black-slight"></div>
                  </div>
                  <div class="carousel-caption">
                    <h3 class="h3-responsive cursorpoint" >ធ្វើយ៉ាងណាដើម្បីបំភ្លេចគេបាន?</h3>
                  </div>
                </div>
              </div>
              <!--/.Slides-->
              <!--Controls-->
              <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
              <!--/.Controls-->
            </div>
            <!--/.Carousel Wrapper-->
          </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-12 nopadmar maxheight">
          <div class="smallslide1">
            <div class="carousel-caption smallcap">
              <h3 class="cursorpoint" >៧ វិធីសាស្រ្ដកែស្ថានភាពពីសោះកក្រោះទៅជារីករាយពេលណាត់ជួប</h3>
            </div>
            <img class="card-img-top" src="{{asset('template/images/couple8.jpg')}}" alt="Card image cap">
          </div>
          <div class="smallslide2">
            <div class="carousel-caption smallcap">
              <h3 class="cursorpoint" >ធ្វើបាន ១០ ចំណុចនេះ រក្សាស្នេហ៍អ្នកលុះអវសាន</h3>
            </div>
            <img class="card-img-top" src="{{asset('template/images/couple9.jpg')}}" alt="Card image cap">
          </div>
      </div>
  </div>
  <!-- carousel rsp -->
  <div class="row nopadmar carouselrsp">
    <div class="col-12 nopadmar">
      <div id="carousel-example-3" class="carousel slide carousel-fade" data-ride="carousel">
              <!--Indicators-->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-3" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-3" data-slide-to="1"></li>
                <li data-target="#carousel-example-3" data-slide-to="2"></li>
              </ol>
              <!--/.Indicators-->
              <!--Slides-->
              <div class="carousel-inner" role="listbox" style="height: auto;">
                <div class="carousel-item active">
                  <div class="view">
                    <img class="d-block w-100" src="{{asset('template/images/love.jpg')}}"
                      alt="First slide">
                    <div class="mask rgba-black-light"></div>
                  </div>
                  <div class="carousel-caption">
                    <h3 class="h3-responsive text-left cursorpoint" >តើយើងគួរបន្ត ឬបញ្ចប់នៅពេលដែលមនុស្សដែលយើងស្រឡាញ់ គេមានមនុស្សក្នុងចិត្តរួចហើយ?</h3>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="view">
                    <img class="d-block w-100" src="{{asset('template/images/carousel1.jpg')}}"
                      alt="Second slide">
                    <div class="mask rgba-black-strong"></div>
                  </div>
                  <div class="carousel-caption">
                    <h3 class="h3-responsive cursorpoint" >ហេតុអ្វីស្រឡាញ់គ្នាចាំបាច់ Private តែពីរនាក់?</h3>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="view">
                    <img class="d-block w-100" src="{{asset('template/images/carousel2.jpg')}}"
                      alt="Third slide">
                    <div class="mask rgba-black-slight"></div>
                  </div>
                  <div class="carousel-caption">
                    <h3 class="h3-responsive cursorpoint" >ធ្វើយ៉ាងណាដើម្បីបំភ្លេចគេបាន?</h3>
                  </div>
                </div>
              </div>
              <!--/.Slides-->
              <!--Controls-->
              <a class="carousel-control-prev" href="#carousel-example-3" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel-example-3" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
              <!--/.Controls-->
            </div>
    </div>
  </div>
  <!--/.Carousel Wrapper-->
  <hr class="mb-5" style="border: none;">
  <main>
    <div class="container">
      <!-- category 1 -->
      <section>
        <h2 class="title_cloth">គូស្នេហ៍</h2>
        <div class="border_title">
          <span><a href="/archive/couple">បន្ថែមទៀត</a></span>
        </div>
        <div class="row">
          @foreach($couple as $art)
          <div class="col-lg-4 col-md-4 col-sm-12 col-12 wow fadeInLeft flex-center nearitem">
            <!-- Card -->
            <div class="card">
            <!-- Card image -->
            <div class="view zoom overlay">
               <div class="header_info">
                  <button title="Share" class="btn-primary btn-floating_top displayright"><i class="fas fa-share-alt"></i></button>
                  <button data-toggle="tooltip" title="Added to Wishlist" class="btn-primary btn-floating_top displayright"><i class="fas fa-heart"></i></button>
                </div>
              <img class="card-img-top" src="/storage/<?php echo $art->image; ?>" alt="Card image cap">
              <a href="{{url('detail',$art->id)}}">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>

            <!-- Card content -->
            <div class="card-body">
              <button class="btn-floating btn-primary morebutton"><i class="fas fa-angle-right"></i></button>
              <!-- Title -->
              <h4 class="card-title">{{$art->title}}</h4>
              <!-- Text -->
              <p class="card-text">
                
                <?php 
                  $str  = substr(strip_tags($art->des), 0,330);
                echo $str.'...'; ?>

              </p>
              <!-- Button -->
              

            </div>
            </div>
            <!-- Card -->
          </div>
          @endforeach
          


        </div>
      </section>
    </div> 
  </main> 
  <main>
    <div class="container">
       <!-- category 2 -->
      <section>
        <h2 class="title_cloth title_broken broken">ខូចចិត្ត</h2>
        <div class="border_title border_title_broken">
          <span><a href="/archive/broken" class="broken">បន្ថែមទៀត</a></span>
        </div>
        <div class="row">
          @if(count($sad)<=2)
              <div class="col-lg-3">
                @for($i=0;$i< 2; $i++)
                  @if(isset($sad[$i]))
                    <div class="card nearitem wow fadeInLeft">
                        <!-- Card image -->
                        <div class="view zoom overlay">
                          <div class="header_info">
                              <button title="Share" class="btn-primary btn-floating_top displayright"><i class="fas fa-share-alt"></i></button>
                              <button data-toggle="tooltip" title="Added to Wishlist" class="btn-primary btn-floating_top displayright"><i class="fas fa-heart"></i></button>
                            </div>
                          <img class="card-img-top" src="/storage/<?php echo $sad[$i]->image; ?>" alt="Card image cap">
                          <a href="{{url('detail',$sad[$i]->id)}}">
                            <div class="mask rgba-white-slight"></div>
                          </a>
                        </div>

                        <!-- Card content -->
                        <div class="card-body">
                          <button class="btn-floating btn-primary morebutton btnbroken" ><i class="fas fa-angle-right"></i></button>
                          <!-- Title -->
                          <h4 class="card-title">{{ $sad[0]->title}}</h4>
                          <!-- Text -->
                          <p class="card-text">
                            
                            <?php 
                              $str  = substr(strip_tags($sad[$i]->des), 0,330);
                            echo $str.'...'; ?>

                          </p>
                        <!-- Button -->
                      </div>
                    </div>
                    @endif    
                @endfor
              </div>
          @endif
          @if(count($sad)==3)
            <div class="col-lg-3">
                @for($i=0;$i< 2; $i++)
                  @if(isset($sad[$i]))
                    <div class="card nearitem wow fadeInLeft">
                        <!-- Card image -->
                        <div class="view zoom overlay">
                          <div class="header_info">
                              <button title="Share" class="btn-primary btn-floating_top displayright"><i class="fas fa-share-alt"></i></button>
                              <button data-toggle="tooltip" title="Added to Wishlist" class="btn-primary btn-floating_top displayright"><i class="fas fa-heart"></i></button>
                            </div>
                          <img class="card-img-top" src="/storage/<?php echo $sad[$i]->image; ?>" alt="Card image cap">
                          <a href="{{url('detail',$sad[$i]->id)}}">
                            <div class="mask rgba-white-slight"></div>
                          </a>
                        </div>

                        <!-- Card content -->
                        <div class="card-body">
                          <button class="btn-floating btn-primary morebutton btnbroken" ><i class="fas fa-angle-right"></i></button>
                          <!-- Title -->
                          <h4 class="card-title">{{ $sad[0]->title}}</h4>
                          <!-- Text -->
                          <p class="card-text">
                            
                            <?php 
                              $str  = substr(strip_tags($sad[$i]->des), 0,330);
                            echo $str.'...'; ?>

                          </p>
                        <!-- Button -->
                      </div>
                    </div>
                    @endif    
                @endfor
            </div>
            <div class="col-lg-6">
              <!-- Card -->
              <div class="card middlecard nearitem">
                <!-- Card image -->
                <div class="view zoom overlay" style="    height: 500px;">
                    <div class="header_info">
                        <button title="Share" class="btn-primary btn-floating_top displayright"><i class="fas fa-share-alt"></i></button>
                        <button data-toggle="tooltip" title="Added to Wishlist" class="btn-primary btn-floating_top displayright"><i class="fas fa-heart"></i></button>
                    </div>
                    <img class="card-img-top" src="/storage/<?php echo $sad[2]->image; ?>" alt="Card image cap">
                    <a href="{{url('detail',$sad[2]->id)}}">
                    <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!-- Card content -->
                <div class="card-body">
                    <button class="btn-floating btn-primary morebutton btnbroken" ><i class="fas fa-angle-right"></i></button>
                    <!-- Title -->
                    <h4 class="card-title">{{ $sad[2]->title}}</h4>
                        <!-- Text -->
                        <p class="card-text">
                        
                        <?php 
                            $str  = substr(strip_tags($sad[2]->des), 0,330);
                        echo $str.'...'; ?>

                        </p>
                    
                    <!-- Button -->
                    <button class="btn btn-outline-blue-black"><i class="fas fa-comment-dots" style="color: #766d71;"></i> 2 Comment</button>
                    <button class="btn btn-outline-blue-black"><i class="fas fa-heart" style="color: #e91e63;"></i> 30 Like</button>
                </div>
              </div>
              <!-- Card -->
            </div>
          @endif
          @if(count($sad)>3)
            <div class="col-lg-3">
                @for($i=0;$i< 2; $i++)
                  @if(isset($sad[$i]))
                    <div class="card nearitem wow fadeInLeft">
                        <!-- Card image -->
                        <div class="view zoom overlay">
                          <div class="header_info">
                              <button title="Share" class="btn-primary btn-floating_top displayright"><i class="fas fa-share-alt"></i></button>
                              <button data-toggle="tooltip" title="Added to Wishlist" class="btn-primary btn-floating_top displayright"><i class="fas fa-heart"></i></button>
                            </div>
                          <img class="card-img-top" src="/storage/<?php echo $sad[$i]->image; ?>" alt="Card image cap">
                          <a href="{{url('detail',$sad[$i]->id)}}">
                            <div class="mask rgba-white-slight"></div>
                          </a>
                        </div>

                        <!-- Card content -->
                        <div class="card-body">
                          <button class="btn-floating btn-primary morebutton btnbroken" ><i class="fas fa-angle-right"></i></button>
                          <!-- Title -->
                          <h4 class="card-title">{{ $sad[0]->title}}</h4>
                          <!-- Text -->
                          <p class="card-text">
                            
                            <?php 
                              $str  = substr(strip_tags($sad[$i]->des), 0,330);
                            echo $str.'...'; ?>

                          </p>
                        <!-- Button -->
                      </div>
                    </div>
                    @endif    
                @endfor
            </div>
            <div class="col-lg-6">
              <!-- Card -->
              <div class="card middlecard nearitem">
                <!-- Card image -->
                <div class="view zoom overlay" style="    height: 500px;">
                    <div class="header_info">
                        <button title="Share" class="btn-primary btn-floating_top displayright"><i class="fas fa-share-alt"></i></button>
                        <button data-toggle="tooltip" title="Added to Wishlist" class="btn-primary btn-floating_top displayright"><i class="fas fa-heart"></i></button>
                    </div>
                    <img class="card-img-top" src="/storage/<?php echo $sad[2]->image; ?>" alt="Card image cap">
                    <a href="{{url('detail',$sad[2]->id)}}">
                    <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!-- Card content -->
                <div class="card-body">
                    <button class="btn-floating btn-primary morebutton btnbroken" ><i class="fas fa-angle-right"></i></button>
                    <!-- Title -->
                    <h4 class="card-title">{{ $sad[2]->title}}</h4>
                        <!-- Text -->
                        <p class="card-text">
                        
                        <?php 
                            $str  = substr(strip_tags($sad[2]->des), 0,330);
                        echo $str.'...'; ?>

                        </p>
                    
                    <!-- Button -->
                    <button class="btn btn-outline-blue-black"><i class="fas fa-comment-dots" style="color: #766d71;"></i> 2 Comment</button>
                    <button class="btn btn-outline-blue-black"><i class="fas fa-heart" style="color: #e91e63;"></i> 30 Like</button>
                </div>
              </div>
              <!-- Card -->
            </div>
            <div class="col-lg-3">
                @for($i=3;$i< 5; $i++)
                  @if(isset($sad[$i]))
                    <div class="card nearitem wow fadeInLeft">
                        <!-- Card image -->
                        <div class="view zoom overlay">
                          <div class="header_info">
                              <button title="Share" class="btn-primary btn-floating_top displayright"><i class="fas fa-share-alt"></i></button>
                              <button data-toggle="tooltip" title="Added to Wishlist" class="btn-primary btn-floating_top displayright"><i class="fas fa-heart"></i></button>
                            </div>
                          <img class="card-img-top" src="/storage/<?php echo $sad[$i]->image; ?>" alt="Card image cap">
                          <a href="{{url('detail',$sad[$i]->id)}}">
                            <div class="mask rgba-white-slight"></div>
                          </a>
                        </div>

                        <!-- Card content -->
                        <div class="card-body">
                          <button class="btn-floating btn-primary morebutton btnbroken" ><i class="fas fa-angle-right"></i></button>
                          <!-- Title -->
                          <h4 class="card-title">{{ $sad[0]->title}}</h4>
                          <!-- Text -->
                          <p class="card-text">
                            
                            <?php 
                              $str  = substr(strip_tags($sad[$i]->des), 0,330);
                            echo $str.'...'; ?>

                          </p>
                        <!-- Button -->
                      </div>
                    </div>
                    @endif    
                @endfor
            </div>
          @endif
        </div>
      </section>
    </div>
  </main>
  <main>
    <div class="container">
      <!-- category 3 -->
      <section>
        <h2 class="title_cloth title_marry marry">អាពាហ៍ពិពាហ៍</h2>
        <div class="border_title border_title_marry">
          <span><a href="/archive/marry" class="marry">បន្ថែមទៀត</a></span>
        </div>
        <div class="row">
          <div class="col-lg-7 col-md-8 col-sm-12 col-12 flex-center nearitem">
            <div class="row">
              @for($i=0;$i< 4; $i++)
              @if(isset($marry[$i]))
              <div class="col-ld-6 col-md-6 col-sm-12 col-12 wow fadeInUp nearitem">
                <!-- Card -->
                <div class="card">
                  <!-- Card image -->
                  <div class="view zoom overlay">
                     <div class="header_info">
                        <button title="Share" class="btn-primary btn-floating_top displayright"><i class="fas fa-share-alt"></i></button>
                        <button data-toggle="tooltip" title="Added to Wishlist" class="btn-primary btn-floating_top displayright"><i class="fas fa-heart"></i></button>
                      </div>
                    <img class="card-img-top" src="/storage/<?php echo $marry[$i]->image; ?>" alt="Card image cap">
                    <a href="{{url('detail',$marry[$i]->id)}}">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>

                  <!-- Card content -->
                  <div class="card-body">
                    <button class="btn-floating btn-primary morebutton btnmarry" ><i class="fas fa-angle-right"></i></button>
                    <!-- Title -->
                    <h4 class="card-title">{{ $marry[$i]->title}}</h4>
                    <!-- Text -->
                    <p class="card-text">
                       <?php 
                          $str  = substr(strip_tags($marry[$i]->des), 0,330);
                        echo $str.'...'; ?></p>
                    <!-- Button -->
                  </div>
                
                </div>
                  <!-- Card --> 
              </div>
              @endif
              @endfor
            </div>
          </div>

          @if(isset($marry[4]))
          <div class="col-lg-5 col-md-4 col-sm-12 col-12 wow fadeInLeft flex-center nearitem wow fadeInRight">
            <!-- Card -->
            <div class="card middlecard2">
            <!-- Card image -->
            <div class="view zoom overlay" style="    height: 500px;">
               <div class="header_info">
                  <button title="Share" class="btn-primary btn-floating_top displayright"><i class="fas fa-share-alt"></i></button>
                  <button data-toggle="tooltip" title="Added to Wishlist" class="btn-primary btn-floating_top displayright"><i class="fas fa-heart"></i></button>
                </div>
              <img class="card-img-top" src="/storage/<?php echo $marry[4]->image;?>" alt="Card image cap">
              <a href="{{url('detail',$marry[4]->id)}}">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>

            <!-- Card content -->
            <div class="card-body">
              <button class="btn-floating btn-primary morebutton btnmarry" ><i class="fas fa-angle-right"></i></button>
              <!-- Title -->
              <h4 class="card-title">{{ $marry[4]->title}}</h4>
                <!-- Text -->
                <p class="card-text">
                  
                  <?php 
                    $str  = substr(strip_tags($marry[4]->des), 0,330);
                  echo $str.'...'; ?>

                </p>
              <!-- Button -->
              <button class="btn btn-outline-blue-black"><i class="fas fa-comment-dots" style="color:#2099f9;"></i> 2 Comment</button>
              <button class="btn btn-outline-blue-black"><i class="fas fa-heart" style="color: #e91e63;"></i> 30 Like</button>

            </div>
            </div>
            <!-- Card -->
          </div>
          @endif
          
        </div> 
      </section> 
    </div>
  </main>
@endsection