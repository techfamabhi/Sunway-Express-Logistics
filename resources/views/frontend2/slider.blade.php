<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Services</title>
    
    
    <link rel="stylesheet" href="{{asset('frontend2/css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('frontend2/css/services.css')}}">
    <link rel="stylesheet" href="{{asset('frontend2/css/style.css')}}">

    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="./css/footer.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src='https://kit.fontawesome.com/a076d05399.js'></script>

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="./css/services.css">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  </head>
  <body>
   
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid">
            <div>
            <i class="fa fa-phone" style="color: white;">&nbsp;&nbsp;+012 345 6789 
                <span style="color: white;font-size: 20px;">|</span>
            </i>
            <i class="fa fa-envelope" aria-hidden="true" style="color: white;">&nbsp;&nbsp;info@example.com</i>
        </div>
        <div>
        <a href="#" class="fa fa-facebook" ></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-google"></a>
        <a href="#" class="fa fa-linkedin"></a>
        <a href="#" class="fa fa-youtube"></a>
        </div>

        </div>
      </nav>
     

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="./Images/Ulhas Sir Logo.png" alt="" srcset="" class="navlogo">
          </a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="toggler-icon top-bar"></span>
            <span class="toggler-icon middle-bar"></span>
            <span class="toggler-icon bottom-bar"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
              </li>
             
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  About
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="About.html">Overview</a></li>
                  <li><a class="dropdown-item" href="Management.html">Management</a></li>
                  <li><a class="dropdown-item" href="Vision.html">Vision & Mission</a></li>
                  <li><a class="dropdown-item" href="Envisioning.html">Envisioning The Future</a></li>
                  <li><a class="dropdown-item" href="#">Milestones & Achievements</a></li>
                  
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Services.html">Service</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Gallary.html">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">People Corner</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Contact.html">Contact</a>
              </li>
  
             
            </ul>
        
          </div>
        </div>
      </nav>


    
    <section class="bannerhead">
      <h2>Service</h2>
      <h5><a href="/">Home</a> / <a href="/service">Service</a> </h5>
      
    
    
           
  </section>
  
 
    <section class="">
        <div class="container service mt-5">
            <div class="row">
              <!-- <h2 class="text-center about_color"> OUR SERVICES</h2> -->
              
                <h5 class="text-center">Best Logistic Services</h5>
                @foreach($serv as $s)
                <?php
                $p=$s->short_description;
                $str=substr($p,0,300);
                $name=$s->name;
                $strre=str_replace(' ','-',$name);
                ?>
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('backend/image/'.$s->image)}}" class="card-img-top" alt="..." style="width: 100%;height: 200px;">
                        <div class="card-body">
                          <h5 class="card-title">{{$s->name}}</h5>
                          <p class="card-text">Sunway Express Logistics Supply Chain provides 3PL Solutions</p>
                          <a href="/services_details/{{$strre}}" class="btn btn-outline-danger d-flex justify-content-center">Read More</a>
                        </div>
                      </div>
                </div>
                @endforeach
                
            </div>
        </div>
     </section>
     

     <div class="container my-5" id="servicessection">
        <div class="row">
            <div class="col-md-8 col-center m-auto">
                <h5 class="text-center">Testimonial</h5>
                <h2 id="h2">Our Clients Say</h2>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Carousel -->
                  
                    <div class="carousel-inner">
                        @foreach ($testi as $item)  
                        <div class="item carousel-item active">
                            <div class="img-box"><img src="{{asset('backend/image')}}/{{$item->img}}" alt=""></div>
                            <p class="testimonial">{{$item->title}}</p>
                            <p class="overview">{{$item->description}}</p>
                        </div>
                        @endforeach
                    </div>
                   
                    <!-- Carousel Controls -->
                    <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    











    
<!-- Start Footer Section -->
<section id="footer">
    <div class="container">
      <div class="row footermain">    
        <div class="col-md-3" style="padding-top: 120px;">
          <div class="d-flex justify-content-start">
          <i class="fa fa-building" style="font-size:25px;color: #2F3264;"></i>
          <h4 class="ml-2" style="color: #2F3264;"><b>GET IN TOUCH</b></h4> 
        </div>
        <span class="">Far far away, behind the word mountains, far from the countries.</span>
      
  <!-- Add font awesome icons -->
  <div class="mt-3">
    <i class="fab fa-facebook-square" style="font-size: 33px;color: #2F3264;"></i>
    <i class="fab fa-twitter-square"  style="font-size: 33px;color: #2F3264;"></i>
    <i class="fab fa-instagram-square"  style="font-size: 33px;color: #2F3264;"></i>
  </div>
        </div>
        <div class="col-md-3" style="padding-top: 120px;width: 240px;">
          <h4 class="footer-h4"><b>LINKS</b></h4>
          <div>
            <div class="d-flex justify-content-start ">
              <li id="footer_li"> <i class="fa fa-angle-right" style="font-size:24px;color: #2F3264;"></i>
               <span><b>HOME</b></span>
               </li>
             </div>
             <div class="d-flex justify-content-start ">
              <li id="footer_li"> <i class="fa fa-angle-right" style="font-size:24px;color: #2F3264;"></i>
               <span><b>About</b></span>
               </li>
             </div>
             <div class="d-flex justify-content-start ">
              <li id="footer_li"> <i class="fa fa-angle-right" style="font-size:24px;color: #2F3264;"></i>
               <span><b>Services</b></span>
               </li>
             </div>
             
  
             <div class="d-flex justify-content-start ">
              <li id="footer_li"> <i class="fa fa-angle-right" style="font-size:24px;color: #2F3264;"></i>
               <span><b>People  Corner</b></span>
               </li>
             </div>
  
             <div class="d-flex justify-content-start ">
              <li id="footer_li"> <i class="fa fa-angle-right" style="font-size:24px;color: #2F3264;"></i>
               <span><b>Contact</b></span>
               </li>
             </div>
            
          </div> 
        </div>
       
  
        <div class="col-md-3" style="padding-top: 120px;">
       
          <h4 class="footer-h4"><b>SERVICES</b></h4>
          <div>
            <div class="d-flex justify-content-start ">
              <li id="footer_li"> <i class="fa fa-angle-right" style="font-size:24px;color: #2F3264;"></i>
               <span><b>Supply Chain Solutions</b></span>
               </li>
             </div>
            <div class="d-flex justify-content-start ">
              <li id="footer_li"> <i class="fa fa-angle-right" style="font-size:24px;color: #2F3264;"></i>
               <span><b>Warehousing</b></span>
               </li>
             </div>
             <div class="d-flex justify-content-start ">
              <li id="footer_li"> <i class="fa fa-angle-right" style="font-size:24px;color: #2F3264;"></i>
               <span><b>Transportation</b></span>
               </li>
             </div>
             <div class="d-flex justify-content-start ">
              <li id="footer_li"> <i class="fa fa-angle-right" style="font-size:24px;color: #2F3264;"></i>
               <span><b>Liquid Transportation</b></span>
               </li>
             </div>
             <div class="d-flex justify-content-start ">
              <li id="footer_li"> <i class="fa fa-angle-right" style="font-size:24px;color: #2F3264;"></i>
               <span><b>Freight Forwarding</b></span>
               </li>
             </div>
             
  
          </div> 
        </div>
       
  
        
        <div class="col-md-3" style="padding-top: 120px;">
          <h4 class="footer-h4 mb-4" ><b>HAVE A QUESTIONS?</b></h4>
          <div>
            <div class="d-flex justify-content-start" style="margin-left: 25px !important">
              <li id="footer_li"> <i class='fas fa-map-marker-alt' style='font-size:24px;color: #2F3264;'></i>
  
               <span class="ml-2">&nbsp;&nbsp;&nbsp;123 Street, New York, USA<br> <span class="ml-4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;San Francisco, California, USA</span></span>
               </li>
             </div>
             <div class="d-flex justify-content-start " style="margin-top: 15px !important;margin-left: 25px !important">
              <li id="footer_li"> <i class="fas fa-phone-alt"  style='font-size:24px;color: #2F3264;'></i>
  
               <span class="ml-2">&nbsp;+1 234 456 78910</span>
               </li>
             </div>
             <div class="d-flex justify-content-start " style="margin-top: 20px !important;margin-left: 25px !important">
              <li id="footer_li"><i class="fa fa-envelope" style='font-size:24px;color: #2F3264;'></i>
               <span class="ml-2">info@example.com</span>
               </li>
             </div>
           
  
          </div> 
        </div>
       
  
        
  
  
        
     
    </div>
  </div>
  
  </section>
  
  <!-- End Footer Section -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>