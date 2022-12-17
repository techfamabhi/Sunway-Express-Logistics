@extends('frontend2.header')
@section('contentnew')







<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2000">
      <img src="{{asset('frontend2/Images/header.jpg')}}" class="d-block w-100" alt="ship" style="height:520px">
      <div class="carousel-caption d-none d-md-block">
        <h5 data-aos="fade-up" class="slider-text">First slide label</h5>
        <p class="slider-text">Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="{{asset('frontend2/Images/slider2 (2).jpg')}}" class="d-block w-100" alt="..." style="height:520px">
      <div class="carousel-caption d-none d-md-block">
        <h5 data-aos="fade-up" class="slider-text">Second slide label</h5>
        <p class="slider-text">Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('frontend2/Images/slider 3.jpg')}}" class="d-block w-100" alt="..." style="height:520px">
      <div class="carousel-caption d-none d-md-block">
        <h5 data-aos="fade-up" class="slider-text">Third slide label</h5>
        <p class="slider-text">Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon " aria-hidden="true"></span>
    <span class="visually-hidden slider-text">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>




<section>
    <div class="container mt-5">
      <div class="row">
       
        <h2 class="text-center mb-5 about_color"> ABOUT SEL</h2>
        
        
      </div>
    <div class="row">
    
        <div class="col-md-6"  data-aos="fade-up">
            <img src="{{asset('frontend2/Images/header.jpg')}}" alt="" srcset="" style="width: 90%;height: 250px;">
        </div>
        <div class="col-md-6"  data-aos="fade-down">
          
        <p>Sunway Express Logistics are gaining insights into the fragmented logistics sector of India,
            he decided to embrace the opportunity to link the logistics industry’s growth with associated
             infrastructural development. SEL was thus founded with the aim of professionally revolutionizing 
             the logistics industry’s growth in India by “Nurturing Entrepreneurs Through Partnership”. 
             Established in the year 2022, SEL facilitates 3PL solutions and end-to-end supply chain 
             services across varied business domains. It enables manufacturers/companies, focus solely 
             on their core operations, without having to bother about supply-chain issues while having 
             real-time access to information on the movement of their goods. Over the years, SEL has 
             evolved as a one-stop logistics solution provider for an array of manufacturers and brands.</p>
        </div>
    </div>        
    </div>
</section>

<section class="choose-ul">
    <div class="container">
        <div class="row">
     
          <h2 class="text-center my-5 about_color"> WHY CHOOSE US</h2>
            <div class="col-md-6"  data-aos="fade-down">
                <img src="{{asset('frontend2/Images/feature.jpg')}}" alt="" srcset="" >
            </div>
            <div class="col-md-6"  data-aos="fade-up">
                <div class="main">
              
                <h2>Faster, Safe and Trusted Logistics Services</h2>
                <p>Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore sed et. 
                    Sit rebum labore sit sit ut vero no sit. Et elitr stet dolor sed sit et 
                    sed ipsum et kasd ut. Erat duo eos et erat sed diam duo</p>
                    <ul class="choose-us-ul">
                        <li><i class="fa fa-list" aria-hidden="true"></i>
                            <b>Best In Industry</b></li>
                        <li><i class="fa fa-list" aria-hidden="true"></i><b>Emergency Services</b></li>
                        <li><i class="fa fa-list" aria-hidden="true"></i><b>24/7 Customer Support</b></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>






 
<section class="services-section">
    <div class="container service">
        <div class="row">
          <h2 class="text-center about_color"> OUR SERVICES</h2>
          
            <h5 class="text-center">Best Logistic Services</h5>
            @foreach($service as $ser)
                <?php
                $p=$ser->short_description;
                $str=substr($p,0,300);
                $name=$ser->name;
                $strre=str_replace(' ','-',$name);
                ?>
          
            <div class="col-md-3" data-aos="fade-up">
                <div class="card" style="width: 18rem;height:23rem">
                    <img src="{{asset('backend/image/'.$ser->image)}}" class="card-img-top" alt="..." style="width: 100%;height: 200px;">
                    <div class="card-body">
                      <h5 class="card-title" id="service-section-text1">{{$ser->name}}
                        </h5>
                      <p class="card-text">{!! $str !!}</p>
                      <a  href="/services_details/{{$strre}}" class="btn btn-outline-primary d-flex justify-content-center">Read More</a>
                    </div>
                  </div>
            </div>
            @endforeach
           
            
        </div>
    </div>
 </section>
 






  
<section id="slider">
    <div class="container-fluid">
 
     <div class="col-md-12">
        
     <h1 class="text-center mt-5"><b>OUR CLIENTS</b></h1>
     <hr id="resonhr2">
 
 
    
     <div class="container-fluid">
       
     
     <div id="exampleSlider">
        <div class="MS-content">
            <div class="item" >
                <div class="card">
                    <div class="card-body">
                        <img src="{{asset('frontend2/images/client1.jpg')}}" class="d-block w-100"  alt="..." style="width: 100%; height: 80px;">

                    </div>
                  </div>
            </div>
            <div class="item" >
                <div class="card">
                    <div class="card-body">
                        <img src="{{asset('frontend2/images/client2.jpg')}}" class="d-block w-100"  alt="..." style="width: 100%; height: 80px;">

                    </div>
                  </div>
     
            </div>
            
            <div class="item">
                <div class="card">
                    <div class="card-body">
                        <img src="{{asset('frontend2/images/client3.jpg')}}" class="d-block w-100"  alt="..." style="width: 100%; height: 80px;">

                    </div>
                  </div>
     
            </div>
            <div class="item">
                <div class="card">
                    <div class="card-body">
                        <img src="{{asset('frontend2/images/client4.jpg')}}" class="d-block w-100"  alt="..." style="width: 100%; height: 80px;">

                    </div>
                  </div>
     
            </div>
            <div class="item">
                <div class="card">
                    <div class="card-body">
                        <img src="{{asset('frontend2/images/client5.jpg')}}" class="d-block w-100"  alt="..." style="width: 100%; height: 80px;">

                    </div>
                  </div>
     
            </div>

            <div class="item">
                <div class="card">
                    <div class="card-body">
                        <img src="{{asset('frontend2/images/client6.jpg')}}" class="d-block w-100"  alt="..." style="width: 100%; height: 80px;">

                    </div>
                  </div>
     
            </div>

            <div class="item">
                <div class="card">
                    <div class="card-body">
                        <img src="{{asset('frontend2/images/client7.jpg')}}" class="d-block w-100"  alt="..." style="width: 100%; height: 80px;">

                    </div>
                  </div>
     
            </div>

            <div class="item">
                <div class="card">
                    <div class="card-body">
                        <img src="{{asset('frontend2/images/client8.jpg')}}" class="d-block w-100"  alt="..." style="width: 100%; height: 80px;">

                    </div>
                  </div>
     
            </div>
         
           
        </div>
        <div class="MS-controls">
            <button class="MS-left"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
            <button class="MS-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
        </div>
     </div>
     </div>
     
     
    </div> 
 
 
 
 </div>
 </div>
 
     
     
     
     
 </section>
 
 






 @endsection