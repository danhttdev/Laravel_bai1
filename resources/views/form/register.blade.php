<section id='register'>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Register Now</h2>
            <h3 class="section-subheading text-muted">create your account easily.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
          <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
              <div class="left">
                <div class="col-md-12">
                  <div class="apost">
                    <form id="registerForm" name="sentMessage" method="POST" action="{{url('register')}}">
                        <!-- {{ csrf_field() }} -->
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <input class="form-control" id="name" type="text" placeholder="Your name *" required="required" name="name" data-validation-required-message="Please enter your name.">
                            @if($errors->has('name'))
                              <p class="help-block text-danger">{{$errors->first('name')}}</p>
                            @endif
                          </div>
                          <div class="form-group">
                            <input class="form-control" id="email" type="email" placeholder="Your email *" required="required" name="email" data-validation-required-message="Please enter your email.">
                            @if($errors->has('email'))
                              <p class="help-block text-danger">{{$errors->first('email')}}</p>
                            @endif
                          </div>
                          <div class="form-group">
                            <input class="form-control" id="password" type="password" placeholder="Your password *" required="required"  name="password" data-validation-required-message="Please enter your password address.">
                            @if($errors->has('password'))
                              <p class="help-block text-danger">{{$errors->first('password')}}</p>
                            @endif                          </div>
                          <div class="form-group">
                            <input class="form-control" id="password_confirmation" type="password" placeholder="Your password *" required="required"  name="password_confirmation" data-validation-required-message="Please enter your password address.">
                            @if($errors->has('password_confirmation'))
                              <p class="help-block text-danger">{{$errors->first('password_confirmation')}}</p>
                            @endif                          
                          </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                          <div id="success"></div>
                          {!! csrf_field() !!}
                          <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Register</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
            </div>
          </div> 
        </div>
        </div>
      </div>
    </section>