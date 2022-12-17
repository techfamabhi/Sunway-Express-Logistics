@extends('frontend2.header')
@section('contentnew')

    


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <!-- <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-fluid w-100" src="{{asset('backend/image/')}}/{{$serv->image}}" alt="">
                    <div class="bg-primary text-dark text-center p-4">
                        <h3 class="m-0">25+ Years Experience</h3>
                    </div>
                </div> -->
                <div class="col-md-12">
                    <!-- <h6 class="text-primary text-uppercase font-weight-bold">About Us</h6> -->
                    <h1 class="mb-4">{{$serv->name}}</h1>
                    <p class="mb-4">{!! $serv->description !!}</p>
                    <!-- <div class="d-flex align-items-center pt-2">
                        <button type="button" class="btn-play" data-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                            <span></span>
                        </button>
                         <h5 class="font-weight-bold m-0 ml-4">Play Video</h5>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- Video Modal -->
        {{-- <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>        
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    <!-- About End -->


   

   @endsection