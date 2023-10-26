<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>

<body>
    <header>
        <div class="container">
            <nav class="navbar navbar-expand py-4">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
                    <div class="nav navbar-nav justify-content-between align-items-center">
                        @foreach ($links as $link)
                        <a class="nav-item nav-link border_nav" href="#" aria-current="page">{{ $link }}</a>
                        @endforeach
                    </div>

                </div>
            </nav>
        </div>
    </header>
    <main>
        <div class="crop">

        </div>
        <div class="bg_dark">
            <div class="container">
                <span class="current">CURRENT SERIES</span>
                <div class="row">
                    @foreach ($products as $index => $product)
                    <div class="col-2">
                        
                        <div class="p-2">
                            <div class="card_header" 
                                style="background-position: top; background-size: cover; background-repeat: no-repeat; background-image: url({{$product['thumb']}})">

                            </div>
                            <div class=" text-white py-2">
                                <div class="upper">{{ $product['series'] }}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="band p-5">
            <div class="container">
              <div class="row align-items-center">
                @foreach ($footerNavLinks as $index => $link)
                <div class="col d-flex align-items-center">
                    <div class="img_container" style="background-image: url({{Vite::asset($link['img'])}})">
                        
                    </div>
                    <div class="p-2 small">{{ $link['text'] }}</div>
                </div>
                @endforeach
              </div>
             </div>
        </div>
        <div class="background">
            <div class="container">
              <div class="row">
                <div class="col-5">
                  <div class="row">
                    <div class="col-4">
                      <ul class="dc_comics">
                        <li>
                          <h5>DC COMICS</h5>
                        </li>
                        <li><a href="#">Characters</a></li>
                        <li><a href="#">Comics</a></li>
                        <li><a href="#">Movies</a></li>
                        <li><a href="#">Tv</a></li>
                        <li><a href="#">Games</a></li>
                        <li><a href="#">Videos</a></li>
                        <li><a href="#">News</a></li>
                      </ul>
                      <ul class="shop">
                        <li>
                          <h5>SHOP</h5>
                        </li>
                        <li><a href="#">Shop DC</a></li>
                        <li><a href="#">Shop DC Collectibles</a></li>
                      </ul>
                    </div>
                    <div class="col-4">
                      <ul class="dc">
                        <li>
                          <h5>DC</h5>
                        </li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy (new)</a></li>
                        <li><a href="#">Ad Choices</a></li>
                        <li><a href="#">Advertising</a></li>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Subscriptions</a></li>
                        <li><a href="#">Talent Workshop</a></li>
                        <li><a href="#">CPSC Certificates</a></li>
                        <li><a href="#">Ratings</a></li>
                        <li><a href="#">Shop Help</a></li>
                        <li><a href="#">Contact Us</a></li>
                      </ul>
                    </div>
                    <div class="col-4">
                      <ul class="sites">
                        <li>
                          <h5>SITES</h5>
                        </li>
                        <li><a href="#">DC</a></li>
                        <li><a href="#">MAD MAGAZINE</a></li>
                        <li><a href="#">DC Kids</a></li>
                        <li><a href="#">DC Universe</a></li>
                        <li><a href="#">DC Power Visa</a></li>
                      </ul>
                    </div>
                  </div>
        
        
                </div>
                <div class="col-7">
        
                </div>
              </div>
            </div>
        </div>
        <div class="footer_social">
            <div class="container">
              <div class="row justify-content-between align-items-center">
                <div class="col-2">
                  <a class="signup">SIGN UP NOW!</a>
                </div>
                <div class="col-4">
                  <div>
                    <h5 class="d-inline px-4">FOLLOW US</h5>
                    @foreach($footerSocialLinks as $index=>$link)
                    <img class="px-1 py-5" src="{{Vite::asset($link['icon'])}}">
                    @endforeach
                  </div>
                </div>
              </div>
        
            </div>
          </div>
    </footer>
    
</body>

</html>