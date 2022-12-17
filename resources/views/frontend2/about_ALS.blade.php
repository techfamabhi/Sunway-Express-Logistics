
    @extends('frontend2.header')
    @section('contentnew')
        
    
    
   
    <section class="bannerhead">
        <div class="row">
            <div class="col-md-3">
      <h2>About</h2>
    </div>
    <div class="col-md-9">
      <h5 style="text-align: center;"><a href="/">Home</a> / <a href="/about_SEL">About</a> </h5>
    </div>
    </div>
    
           
  </section>
    <section>
        <div class="container mt-5">
            @foreach($about_als as $about)       
        <div class="row">
        
            <div class="col-md-6" data-aos="fade-up">
                <img src="{{asset('backend/image')}}/{{$about->img}}" alt="" srcset="" style="width: 90%;height: 250px;">
            </div>
            <div class="col-md-6" data-aos="fade-down">
              
                <h6 class="text-uppercase font-weight-bold" id="service-section-text1"><b>{{$about->name}}</b></h6>
                <!-- <h1 class="mb-4">Trusted & Faster Logistic Service Provider</h1> -->
                <p class="mb-4">{{$about->description}}</p>
            </div>
        </div>  
        @endforeach      
        </div>
    </section>

        
    @endsection