@extends('backend.header')
@section('content')

                    <!-- content starts -->
                    <div class="main-content">
                        <!-- Begin Page Content -->
                        <div class="container-fluid px-lg-4">
                            <div class="row">
                                <div class="col-md-12 mt-lg-4 mt-4">
                                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                        <!-- <h1 class="h3 mb-0 text-gray-800">Basic Inputs</h1> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Begin Page Content -->
                        <div class="inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <div class="row justify-content-center">
                                            
                                            <div class="col-lg-12">
                                                <div class="white_card card_height_100 mb_30">
                                                    <div class="white_card_header">
                                                        <div class="box_header m-0">
                                                            <div class="main-title">
                                                                <h3 class="m-0">Client Form</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="white_card_body">
                                                        <div class="card-body">
                                                            <!-- <h6 class="card-subtitle mb-2">You may also swap <code class="highlighter-rouge">.row</code> for <code class="highlighter-rouge">.form-row</code>, a variation of our standard grid row that overrides the default column gutters
                                                                for tighter and more compact layouts.</h6> -->
                                                            <form method="post" action="{{route('client_details.update',$gallery->id)}}" enctype="multipart/form-data">
                                                                @csrf
                                                                @method('PATCH')
                                                                <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                        <label for="inputEmail4">Title</label>
                                                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Title" name="title" value="{{$gallery->title}}" required>
                                                                    </div>
</div>
<?php
                                                                    $images=json_decode($gallery->img);
                                                                    // print_r($images);
                                                                    $str=sizeof($images);
                                                                    //print_r($str);
                                                                    ?>
<?php
                                                                            for($i=0; $i<$str; $i++)
                                                                            {
                                                                            ?>
                                                                            <img src="{{asset('backend/image')}}/{{$images[$i]}}" height="50px" width="100px">
                                                                            <?php
                                                                            }
                                                                            ?>

                                                                <div class="form-row">
                                                                
                                                                    
                                                                    <div class="form-group col-md-6" style="margin-left:20px;margin-top:1%;">
                                                                        <label for="inputPassword4">Image</label>
                                                                        <input type="file" multiple class="form-control" id="inputPassword4" placeholder="Password" name="file[]">
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6" style="margin-left:20px;">
                                                                        <label for="inputPassword4">Status</label>
                                                                        <select class="form-control" name="status">
                                                                            <option value="{{$gallery->status}}">{{$gallery->status}}</option>
                                                                            <option value="active">active</option>
                                                                            <option value="inactive">inactive</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                
                                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- content Ends -->
                </div>
            </div>
        </div>
        <!-- Page content -->


    @endsection