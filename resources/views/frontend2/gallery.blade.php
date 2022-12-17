
    @extends('frontend2.header')
    @section('contentnew')
        
    

    <section class="bannerhead">
        <div class="row">
            <div class="col-md-3">
      <h2>Gallery</h2>
    </div>
    <div class="col-md-9">
      <h5 style="text-align: center;"><a href="/">Home</a> / <a href="/gallery">Gallery</a> </h5>
    </div>
    </div>
    
           
  </section>
    <div class="container">
        <div class="row">
          @foreach($gallery as $g)
          <a href="" data-toggle="lightbox" data-gallery="gallery" class="col-md-3 mt-3">
           <div class="gallary"> <img src="{{asset('backend/image')}}/{{$g->image}}" class="img-fluid rounded" style="width: 100%;height:250px "> </div>
          </a>
          @endforeach
       
    </div>
    </div>
    


    @endsection