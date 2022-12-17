

    @extends('frontend2.header')
    @section('contentnew')
        

    
   
    <section class="bannerhead">
        <div class="row">
            <div class="col-md-6">
      <h2>Envisioning The Future</h2>
    </div>
    <div class="col-md-6">
      <h5><a href="/">Home</a> / <a href="/envisioning_the_future">Envisioning The Future</a> </h5>
    </div>
    </div>
    
           
  </section>
    <section>
        <div class="container mt-5">
            @foreach($envisioning_the_future as $about)
        
         
        <div class="row">
            <div class="col-md-6" data-aos="fade-up">
                <img src="{{asset('backend/image')}}/{{$about->img}}" alt="" srcset="" style="width: 90%;height: 250px;">
            </div>
            <div class="col-md-6" data-aos="fade-down" id="management_title1">
                <h6 class="text-uppercase font-weight-bold" id="service-section-text1"><b>{{$about->title}}</b></h6>
                <p class="mb-4">{!! $about->description !!}</p>
            </div>
        </div>    
        @endforeach    
        </div>
    </section>
    
    @endsection