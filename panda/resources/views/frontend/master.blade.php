<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <!-- google fonts link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Poppins:wght@200;300;400;500;600;700;800&family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- google fonts link -->

    <link rel="stylesheet" href="{{ asset('/frontend/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/frontend/css/venobox.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/frontend/css/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('/frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('/frontend/css/responsive.css')}}">
</head>
<body>
    <!-- ======= nabar html start ===========-->
    <nav class="navbar navbar-expand-lg">
       
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="{{ asset('/frontend/images/logo.png')}}" alt="logo">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#services">Service</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#portfolio">Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#contact">Contact</a>
              </li>
            </ul>
         
          </div>
        </div>
        
      </nav>
      

    <!-- ======= nabar html end ===========-->
    <!-- ======= banner html start ===========-->
    <section id="banner">
        <div class="container">
            <div class="row">
                  <div class="col-lg-7">
                    <div class="banner_text">
                        <span>Hello,</span>
                        <h2>I am <strong>{{$all_info->first()->banner_name}}</strong></h2>
                        <span class="type"></span>
                        <p></p>
                        <a href="https://cutt.ly/HKUR9dF">Download CV<i class="fas fa-download"></i></a>
                        
                      </div>
                  </div>
                <div class="col-lg-5">
                  <div class="banner_img">
                    <img src="{{asset('uploads/banner')}}/{{$all_info->first()->banner_img}}" alt="home">
                  </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= banner html end ===========-->
    <!-- ======= about html start ===========-->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 m-auto">
            <div class="about_img text-center">
              <img src="{{ asset('uploads/about')}}/{{$all_about->first()->about_img}}" alt="home3">
            </div>
           
          </div>
          <div class="col-lg-6">
            <div class="about_text">
              <h3>About Me</h3>
              <h2>{{$all_about->first()->about_heading}}<br></h2>
                <p>{{$all_about->first()->about_desp}}</p>
                <a href="https://cutt.ly/KKUTtln">Learn More <i class="fas fa-angle-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ======= about html end ===========-->
    <!-- ======= My Work html start ===========-->
    <section id="work">
      <div class="container">
          <div class="row">
            <div class="col-lg-6 m-auto">
            <div class="work_head text-center">
              <h2>My Working Experience</h2>
            </div>
            </div>
          </div>
          <div class="row">
          <div class="col-lg-6">
            <div class="work_experience">
              <img src="{{ asset('/frontend/images/experience.png')}}" alt="Experience" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="skill_head">
              <h3>My Advantage</h3>
              <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account the system and expound the actual and praising pain was born.</p>
            </div>
            @foreach ($all_work as $work)
              <div class="skill_one">
                <h4>{{$work->work_title}}</h4>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: {{$work->work_percentage}}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="80">{{$work->work_percentage}}%</div>
                </div>
              </div>
            @endforeach
        </div>
      </div>
    </section>
    <!-- ======= My Work html end ===========-->
    <!-- ======= service html start ===========-->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 m-auto">
            <div class="services_head text-center">
              <h2>Service And Solutions</h2>
             </div>
          </div>
        </div>
        <div class="row">
          @foreach ($all_service as $service)
            
         
          <div class="col-lg-4">
            <div class="services_item_one">
              <div class="services_text text-center">
                <i class="{{$service->service_icon}}"></i>
                <h3>{{$service->service_head}}</h3>
                <p>{{$service->service_title}}</p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <!-- ======= service  html end ===========-->
    <!-- ======= project  html start ===========-->
    <section id="project">
      <div class="container">
        <div class="row">
          @foreach ($all_counter as $counter)
          <div class="col-lg-3">
              <div class="project_item text-center">
               <i class="{{$counter->counter_icon}}"></i>
                <h3><span class="counter">{{$counter->counter_number}}</span></h3>
                <p>{{$counter->counter_title}}</p> 
              </div>
          </div>
          @endforeach  
        </div>
      </div>
    </section>
    <!-- ======= project  html end ===========-->
    <!-- ======= portfolio  html start ===========-->
    <section id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 m-auto">
            <div class="portfolio_head text-center">
              <h2>My Portfolio Work</h2>
             </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 m-auto">
            <div class="portfolio_midle text-center">
               
                  <button type="button"  data-filter="all">All</button>
                  <button type="button"  data-filter=".web">Web Design</button>
                  <button type="button"  data-filter=".html">HTML</button>
                  <button type="button"  data-filter=".css">CSS</button>
                  <button type="button"  data-filter=".dev">Development</button>
                  <button type="button"  data-filter=".theme">Theme</button>
                
            </div>
          </div>
        </div>
        <div class="port_mixit row">
           @foreach ($all_portfolio as $portfolio)
             <div class="col-lg-4 mix web html dev theme css">
                <div class="port_img ">
                  <img src="{{ asset('uploads/portfolio')}}/{{$portfolio->portfolio_img}}" alt="port" class="img-fluid w-100">
                     <div class="overlay">
                      <a target="_blank" href="{{$portfolio->portfolio_link}}"><i class="fas fa-link"></i></a>
                     </div>
                </div>   
             </div>
           @endforeach   
         </div>
      </div>
    </section>
    <!-- ======= portfolio  html end ===========-->
    <!-- ======= contact html start ===========-->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 m-auto">
            <div class="contact_head text-center">
              <h2>Contact</h2>
             </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="contact_img">
              <img src="{{ asset('/frontend/images/contact.png')}}" alt="contact">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="contact_info_head">
              <h3>Get In Touch With Me</h3>
            </div>
            <form action="{{route('customer.contact')}}" class="contact_form" method="POST">
              @csrf
                <div class="row">
                    <div class="col-lg-6">
                      <input type="text" name="name" placeholder="Enter Name">
                    </div>
                    <div class="col-lg-6">
                      <input type="email" name="email" placeholder="Enter Email">
                    </div>
                    <div class="col-lg-12">
                      <input type="text" name="subject" placeholder="Subject">
                    </div>
                    <div class="col-lg-12">
                      <textarea  name="message" placeholder="Write Your Message"></textarea>
                    </div>
                    <div class="col-lg-12">
                      <button type="submit" class="contact_btn">Send Message</button>
                    </div>
                    @if (session('success'))
                      <div class="alert alert-success mt-2">{{session('success')}}</div>
                    @endif
                  </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- ======= contact html end ===========-->
    <!-- ======= footer html start ===========-->
    <section id="particles-js">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="footer_head">
              <img src="{{ asset('/frontend/images/logo.png')}}" alt="">
            </div>
            <div class="footer_text">
              <p>+8801609-340292</p>
              <p>48,G.M Bari, Uttar-Badda,<br>Dhaka-1212</p>
              <ul class="text_one">
                <li><a href="https://cutt.ly/tKUTlWJ"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://cutt.ly/kKUTQaB"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="https://cutt.ly/EKUTGbQ"><i class="fab fa-twitter"></i></a></li>
                <li><a href="https://cutt.ly/yKUT4Gh"><i class="fab fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="footer_head">
              <h3>Userful Links</h3>
            </div>
            <div class="footer_text">
              
              <ul class="text_two">
                <li><a href="#">Web Design</a></li>
                <li><a href="#">Web Development</a></li>
                <li><a href="#">WordPress</a></li>
                <li><a href="#">Photoshop</a></li>
              </ul>
            </div>
          </div>
          
          <div class="col-lg-4">
            <div class="footer_head">
              <h3>Subscribe</h3>
            </div>
            <div class="footer_text">
              <p>Subscribe to our newsletter and we will bring you the latest news.</p>
              <form action="#" class="footer_contact">
                <input type="email" name="email" placeholder="Enter Your Email">
                <button type="submit">Subscribe</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ======= footer html end ===========-->
    <!-- ======= footer-bottom html start ===========-->
    <section id="footer_bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 m-auto">
            <div class="footer_bottom_text">
              <h6>Copyright <span>MR </span>2022 All Right Reserved</h6>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ======= footer-bottom html end ===========-->
      <!-- back to top html start -->

      <div id="progress_t">
        <span id="progres-value">&#x1F815;</span>
      </div>
      <!-- back to top html end -->

    <!-- ======= js link start ===========-->
    <script src="{{ asset('/frontend/js/jquery-1.12.4.min.js')}}"></script>
    <script src="{{ asset('/frontend/js/bootstrap.bundle.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="{{ asset('/frontend/js/jquery.counterup.min.js')}}"></script>
    <script src="{{ asset('/frontend/js/particles.min.js')}}"></script>
    <script src="{{ asset('/frontend/js/app.js')}}"></script>
    <script src="{{ asset('/frontend/js/mixitup.min.js')}}"></script>
    <script src="{{ asset('/frontend/js/waypoints.min.js')}}"></script>
    <script src="{{ asset('/frontend/js/venobox.min.js')}}"></script>
    <script src="{{ asset('/frontend/js/slick.min.js')}}"></script>
    <script src="{{ asset('/frontend/js/custom.js')}}"></script>
    <!-- ======= js link end ===========-->

    <script>
      var type = new Typed(".type", {
        strings: ["Web Designer","Web Developer","WordPress Expert", "Freelancer"],
        typespeed:150,
        backspeed:250,
        loop:true,
      })
    </script>
    
</body>
</html>