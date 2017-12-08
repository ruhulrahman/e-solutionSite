@extends('index')
@section('Contact_Us')


      <section id="contact">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading">Contact Us</h2>
              <h3 class="section-subheading text-muted">Please fill-up this form to contact with us.</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
                  <h4 style="color:red;">
                    <?php
                        $exception = Session::get('exception');
                        if($exception){
                          echo $exception;
                          Session::put('exception', null);
                        }
                        
                    ?>
                  </h4>

                  <h4 style="color:green;">
                    <?php
                        $message = Session::get('message');
                        if($message){
                          echo $message;
                          Session::put('message', null);
                        }
                    ?>
                  </h4>

              {!! Form::open(['url' => 'contact_message', 'method' => 'post', 'id' => 'contactForm']) !!}
              
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" placeholder="Your Name *" id="name" required>
                      <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                      <input type="email" name="email" class="form-control" placeholder="Your Email *" id="email" required>
                      <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                      <input type="tel" name="phone" class="form-control" placeholder="Your Phone *" id="phone" required>
                      <p class="help-block text-danger"></p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <textarea name="message" class="form-control" placeholder="Your Message *" id="message" required></textarea>
                      <p class="help-block text-danger"></p>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-lg-12 text-center">
                    <div id="success"></div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                  </div>
                </div>
              {!! Form::close() !!}


            </div>
          </div>
        </div>
      </section>

@endsection