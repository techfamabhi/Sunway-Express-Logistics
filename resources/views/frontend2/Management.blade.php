
    @extends('frontend2.header')
    @section('contentnew')
        
    
   
    <section class="bannerhead">
      <div class="row">
          <div class="col-md-3">
    <h2>Management</h2>
  </div>
  <div class="col-md-9">
    <h5 style="text-align: center;"><a href="/">Home</a> / <a href="/management">Management</a> </h5>
  </div>
  </div>
  
         
</section>
    

    <div class="container" id="management">  
     
        <div class="row">
          @foreach($management as $about)
            <div class="col-sm-6">
              <div class="card"  data-aos="zoom-in">
                <div class="card-body">
                  <div id="managetext1" >
                  <h5 class="card-title" data-aos="fade-up" >{{$about->name}}</h5>
                 
                  <p class="card-text" data-aos="fade-up" >{!! $about->description !!}</p>
                </div>
              </div>
              </div>
            </div>
            @endforeach
        </div>
       
    </div>
   
    
    @endsection