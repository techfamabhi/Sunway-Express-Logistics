
    @extends('frontend2.header')
    @section('contentnew')
        
    
    

   
    <section class="bannerhead">
      <div class="row">
          <div class="col-md-5">
    <h2>Vision And Mission</h2>
  </div>
  <div class="col-md-7">
    <h5><a href="/">Home</a> / <a href="/vision_mission">Vision And Mission</a> </h5>
  </div>
  </div>
  
         
</section>
    
    <div class="container">
        <div class="row" id="vision">
          @foreach($vision_mission as $about)
            <div class="col-sm-6">
              <div class="card" data-aos="zoom-in">
                <div class="card-body">
                  <h5 class="card-title" data-aos="fade-up">{{$about->title}}</h5>
                  <p class="card-text" data-aos="fade-up">{!! $about->description !!}</p>
                </div>
              </div>
            </div>
            @endforeach
            
        </div>
    </div>
   

    
    @endsection