@if (Route::currentRouteName() !== 'aboutus')
  <footer class="footer_area">
    <div class="container">
      <div class="row justify-content-between">
        <!-- Single Widget-->
        <div class="col-12 col-md-4">
          <div class="single-footer-widget">
            <!-- Footer Logo-->
            <div class="footer-logo"></div>
            <p class="font-title text-white">YOUR PLATFORM THAT ALLOWS YOU TO CONNECT WITH THE WORLD!  WE HOPE TO SEE YOU AGAIN SOON!</p>
            <!-- Copywrite Text-->
            <div class="copywrite-text mb-5">
              <div>
                <ul class="py-5 font-title text-white">Dove siamo?
                  <li class="font-title text-white dove">
                    <i class="bi bi-geo-alt-fill"></i> Strada S. Giorgio Martire, 2D 70124 • Bari
                  </li>
                </ul>
              </div>
              <p class="mb-0 font-title text-white">Made with <i class="lni-heart mr-1"></i>by SPIF Company 2024</p>
            </div>
          </div>
        </div>
        <!-- Single Widget-->
        <div class="col-6 col-md-2">
          <div class="single-footer-widget">
            <!-- Widget Title-->
            <h5 class="widget-title font-title text-white mx-5">Contatti</h5>
            <!-- Footer Menu-->
            <div class="footer_menu mx-5">
              <ul>
                <li><a class="testoli" href="https://aulab.it/">Aulab</a></li>
                <li><a class="testoli" href="https://aulab.it/">WebSite</a></li>
                <li><a class="testoli" href="https://aulab.it/privacy-policy">Privacy Policy</a></li>
                <li><a class="testoli" href="https://aulab.it/guide">Guide</a></li>
                <li><a class="testoli" href="https://aulab.it/blog">Blog</a></li>
              </ul>
            </div>
            
          </div>
        </div>
        <!-- Single Widget-->
        <div class="col-6 col-md-2">
          <div>
            <!-- Widget Title-->
            <h5 class="widget-title font-title text-white">Action</h5>
            <!-- Footer Menu-->
            <div class="footer_menu">
              <ul>
                <li><a class="testoli" href="{{ route('careers') }}">Work with us</a></li>
                <li><a class="testoli" href="{{ route('aboutus')}}">About Us</a></li>
                <li><a class="testoli" href="{{ route('article.create') }}">New Article</a></li>
                <li><a class="testoli" href="{{ route('article.index') }}">Articles</a></li>
                <li><a class="testoli" href="{{ route('login') }}">Login</a></li>
                <li><a class="testoli" href="{{ route('register') }}">Register</a></li>
              </ul>
            </div>
          </div>
          </div>
          <div class="col-12 col-md-4 d-flex flex-column">
            <ul class="social-footer d-flex flex-column">
              <div>
              <span><a href="https://api.whatsapp.com/send/?phone=393339513967&text=Ciao%21+Vorrei+avere+maggiori+informazioni+sul+corso+Hackademy+per+diventare+web+developer&type=phone_number&app_absent=0"><i class="bi bi-whatsapp"></i></a></span>
              <span><a href="https://www.instagram.com/aulab_it/"><i class="bi bi-instagram"></i></a></span>
              <span><a href="https://www.facebook.com/aulab/"><i class="bi bi-facebook"></i></a></span>
            </div>
            <div>
              <span><a href="https://www.linkedin.com/school/aulab-srl/"><i class="bi bi-linkedin"></i></a></span>
              <span><a href="https://twitter.com/i/flow/login?redirect_after_login=%2FauLAB_it"><i class="bi bi-twitter-x"></i></a></span>
              <span><a href="https://www.tiktok.com/login?redirect_url=https%3A%2F%2Fwww.tiktok.com%2F%40aulab.it&lang=en&enter_method=mandatory"><i class="bi bi-tiktok"></i></a></span>
            </div>
            </ul>
            <ul>
              <a href="{{route('homepage')}}"><img class="footer" src="/lgts.png" alt="logo"></a>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer> 
  @else
  {{-- <footer class="footer_area-aboutus">
    <div class="container">
      <div class="row justify-content-between">
        <!-- Single Widget-->
        <div class="col-12 col-md-4">
          <div class="single-footer-widget">
            <!-- Footer Logo-->
            <div class="footer-logo"></div>
            <p class="font-title text-white">YOUR PLATFORM THAT ALLOWS YOU TO CONNECT WITH THE WORLD!  WE HOPE TO SEE YOU AGAIN SOON!</p>
            <!-- Copywrite Text-->
            <div class="copywrite-text mb-5">
              <div>
                <ul class="py-5 font-title text-white">Dove siamo?
                  <li class="font-title text-white dove">
                    <i class="bi bi-geo-alt-fill"></i> Strada S. Giorgio Martire, 2D 70124 • Bari
                  </li>
                </ul>
              </div>
              <p class="mb-0 font-title text-white">Made with <i class="lni-heart mr-1"></i>by SPIF Company 2024</p>
            </div>
          </div>
        </div>
        <!-- Single Widget-->
        <div class="col-6 col-md-2">
          <div class="single-footer-widget">
            <!-- Widget Title-->
            <h5 class="widget-title font-title text-white mx-5">Contatti</h5>
            <!-- Footer Menu-->
            <div class="footer_menu mx-5">
              <ul>
                <li><a href="https://aulab.it/">Aulab</a></li>
                <li><a href="https://aulab.it/">WebSite</a></li>
                <li><a href="https://aulab.it/privacy-policy">Privacy Policy</a></li>
                <li><a href="https://aulab.it/guide">Guide</a></li>
                <li><a href="https://aulab.it/blog">Blog</a></li>
              </ul>
            </div>
            
          </div>
        </div>
        <!-- Single Widget-->
        <div class="col-6 col-md-2">
          <div>
            <!-- Widget Title-->
            <h5 class="widget-title font-title text-white">Action</h5>
            <!-- Footer Menu-->
            <div class="footer_menu">
              <ul>
                <li><a href="{{ route('careers') }}">Work with us</a></li>
                <li><a href="{{route('aboutus')}}">About Us</a></li>
                <li><a href="{{ route('article.create') }}">New Article</a></li>
                <li><a href="{{ route('article.index') }}">Articles</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
              </ul>
            </div>
          </div>
          </div>
          <div class="col-12 col-md-4 d-flex flex-column">
            <ul class="social-footer d-flex flex-column">
              <div>
              <span><a href="https://api.whatsapp.com/send/?phone=393339513967&text=Ciao%21+Vorrei+avere+maggiori+informazioni+sul+corso+Hackademy+per+diventare+web+developer&type=phone_number&app_absent=0"><i class="bi bi-whatsapp"></i></a></span>
              <span><a href="https://www.instagram.com/aulab_it/"><i class="bi bi-instagram"></i></a></span>
              <span><a href="https://www.facebook.com/aulab/"><i class="bi bi-facebook"></i></a></span>
            </div>
            <div>
              <span><a href="https://www.linkedin.com/school/aulab-srl/"><i class="bi bi-linkedin"></i></a></span>
              <span><a href="https://twitter.com/i/flow/login?redirect_after_login=%2FauLAB_it"><i class="bi bi-twitter-x"></i></a></span>
              <span><a href="https://www.tiktok.com/login?redirect_url=https%3A%2F%2Fwww.tiktok.com%2F%40aulab.it&lang=en&enter_method=mandatory"><i class="bi bi-tiktok"></i></a></span>
            </div>
            </ul>
            <ul>
              <a href="{{route('homepage')}}"><img class="footer" src="/lgts.png" alt="logo"></a>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>  --}}
  @endif
