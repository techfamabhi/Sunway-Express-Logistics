

    @extends('frontend2.header')
    @section('contentnew')
        
    
    <section class="bannerhead">
        <div class="row">
            <div class="col-md-3">
      <h2>Contact</h2>
    </div>
    <div class="col-md-9">
      <h5 style="text-align: center;"><a href="/">Home</a> / <a href="/contact">Contact</a> </h5>
    </div>
    </div>
    
           
  </section>

    <div class="container my-5" id="contact">
        <div class="row">
            <div class="col-md-5" id="first-section-contact">
                <h6 style="color: #2F3264 !important;"><b>CONTACT US</b></h6>
                <h2 id="h2">Contact For Any Queries</h2>
                <form name="sentMessage"action="/contactstore" method="post">
                  @csrf
                  <div class="control-group">
                      <input type="text" class="form-control border-0 p-4" id="name" placeholder="Your Name"
                          required="required" data-validation-required-message="Please enter your name" name="name"/>
                      <p class="help-block text-danger"></p>
                  </div>
                  <div class="control-group">
                    <input type="text" class="form-control border-0 p-4" id="name" placeholder="Your Phone Number"
                        required="required" data-validation-required-message="Please enter your phone number" name="phone" pattern="[7-9]{1}[0-9]{9}" 
                        title="Phone number with 7-9 and remaing 9 digit with 0-9"/>
                    <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                    <input type="email" class="form-control border-0 p-4" id="email" placeholder="Your Email"
                        required="required" data-validation-required-message="Please enter your email" name="email"/>
                    <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                    <input type="text" class="form-control border-0 p-4" id="name" placeholder="Your Company Name"
                        required="required" data-validation-required-message="Please enter your company name" name="cname" />
                    <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                    <select class="form-control" required="required" name="service">
                    <option value="">Select Service</option>
                    @foreach($serv as $ser)
                    <option value="{{$ser->id}}">{{$ser->name}}</option>
                    @endforeach
                    </select>
                    <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                    <textarea class="form-control border-0 py-3 px-4" rows="5" id="message" placeholder="Message"
                        required="required"
                        data-validation-required-message="Please enter your message" name="message"></textarea>
                    <p class="help-block text-danger"></p>
                </div>
                <div>
                    <button class="btn btn-primary py-3 px-4" type="submit" id="sendMessageButton">Send
                        Message</button>
                </div>
            </form>
            </div>
            <div class="col-md-7">
                
<section>
    <div class="container" >
      <div class="row">
        <div class="col-md-12 p-5">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3801.534308788201!2d75.915083314555!3d17.67220198790855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc5da64017f2cad%3A0x9696761cef43dc11!2sVertex%20Technosys!5e0!3m2!1sen!2sin!4v1603126238814!5m2!1sen!2sin" width="100%" height="500" frameborder="0" style="border:10px solid #fff;border-radius: 25px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
      </div>
    </div> 
    </section>
    
    
            </div>
        </div>
    </div>

   
    @endsection