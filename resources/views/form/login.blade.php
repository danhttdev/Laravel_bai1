<section id='login'>
        <div class="row">
          <div class="col-lg-12">
          <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
              <div class="left">
                <div class="col-md-12">
                  <div class="apost">
                    <form id="loginForm" name="sentMessage" method="POST" action="{{url('login')}}">
                        {{ csrf_field() }}
                      <div class="row">
                        <div class="col-md-12">
                          @if($errors->has('errorlogin'))
                            <div class="alert alert-danger">
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                              {{$errors->first('errorlogin')}}
                            </div>
                          @endif
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
                            @endif                          
                          </div>

                          <div class="form-group">
                            <label for="">Remember</label>
                            <input type="checkbox" id="remember" placeholder="remember" name="remember">
                            @if($errors->has('remember'))
                              <p style="color:red">{{$errors->first('remember')}}</p>
                            @endif
                          </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                          <div id="success"></div>
                          {!! csrf_field() !!}
                          <button class="btn btn-primary btn-xl text-uppercase" type="submit">Login</button>
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