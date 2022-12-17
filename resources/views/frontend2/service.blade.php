

@extends('frontend2.header')
@section('contentnew')

    

    
    <section class="bannerhead">
        <div class="row">
            <div class="col-md-3">
      <h2>Service</h2>
    </div>
    <div class="col-md-9">
      <h5 style="text-align: center;"><a href="/">Home</a> / <a href="/service">Service</a> </h5>
    </div>
    </div>
    
           
  </section>
  
 
    <section class="">
        <div class="container service mt-5">
            <div class="row">
              <!-- <h2 class="text-center about_color"> OUR SERVICES</h2> -->
              
                <h3 class="text-center" id="service-section-text1"><b>Best Logistic Services</b></h3>
                @foreach($serv as $s)
                <?php
                $p=$s->short_description;
                $str=substr($p,0,300);
                $name=$s->name;
                $strre=str_replace(' ','-',$name);
                ?>
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;height:23rem">
                        <img src="{{asset('backend/image/'.$s->image)}}" class="card-img-top" alt="..." style="width: 100%;height: 200px;">
                        <div class="card-body">
                          <h5 class="card-title" id="service-section-text1">{{$s->name}}</h5>
                          <p class="card-text">Sunway Express Logistics Supply Chain provides 3PL Solutions</p>
                          <a href="/services_details/{{$strre}}" class="btn btn-outline-primary d-flex justify-content-center">Read More</a>
                        </div>
                      </div>
                </div>
                @endforeach
                
            </div>
        </div>
     </section>
     



     <div class="container my-5" id="servicessection">
        <div class="row" >
            <div class="col-md-8 col-center m-auto">
                <h5 class="text-center">Testimonial</h5>
                <h2 id="h2">Our Clients Say</h2>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Carousel -->
                   
                  
                    <div class="carousel-inner">
                        <?php
                            $i=1;
                            
                            ?>
                        @foreach ($testi as $item)
                        @if($i=='1')
                        <div class="item carousel-item active">
                            <div class="img-box"><img src="{{asset('backend/image')}}/{{$item->img}}" alt=""></div>
                            <p class="testimonial">{{$item->title}}</p>
                            <p class="overview">{{$item->description}}</p>
                        </div>
                        @elseif($i>1)
                        <div class="item carousel-item">
                            <div class="img-box"><img src="{{asset('backend/image')}}/{{$item->img}}" alt=""></div>
                            <p class="testimonial">{{$item->title}}</p>
                            <p class="overview">{{$item->description}}</p>
                        </div>
                        @endif
                        <?php $i++; ?>
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
    




    
   

   @endsection