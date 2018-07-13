@extends('master')
@extends('header')

@section('login_logout')
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{url('login')}}">Login</a>
            </li>
@endsection
    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Welcome to MyBlogIt!</div>
          <!-- {{$posts}} -->
          <div class="intro-heading text-uppercase">It is Nice To Meet You</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#register">Create account now</a>
        </div>
      </div>
    </header>

    <section id='danh'>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">

            <div class="row">
              <div class="col-md-8">
                <div class="left">
                  @forelse( $posts as $post )
                    <div class="col-md-12">
                      <div class="apost">
                        <h4 class="service-heading">{{$post['title']}}</h4>
                        <p><span class="fa-stack fa-1x">
                          <i class="fa fa-circle fa-stack-2x text-primary"></i>
                          <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span> <b>{{$post->user['name']}}</b> posted at {{$post['time']}}</p>
                        
                        <p class="text-muted">{{$post['content']}}</p>
                      </div>
                    </div> 
                  @empty
                  @endforelse
                </div>
              </div>
            
              <div class="col-md-4">
                <div class="right">
                  <div class="alink">
                    <a href="#">E-Commerce</a><br/>
                    <span> post 12:02:12, 10 views, 20likes, 30 comments</span>
                  </div>
                  <div class="alink">
                    <a href="#">E-Commerce</a><br/>
                    <span> post 12:02:12, 10 views, 20likes, 30 comments</span>
                  </div>
                  <div class="alink">
                    <a href="#">E-Commerce</a><br/>
                    <span> post 12:02:12, 10 views, 20likes, 30 comments</span>
                  </div>
                  <div class="alink">
                    <a href="#">E-Commerce</a><br/>
                    <span> post 12:02:12, 10 views, 20likes, 30 comments</span>
                  </div>
                  <div class="alink">
                    <a href="#">E-Commerce</a><br/>
                    <span> post 12:02:12, 10 views, 20likes, 30 comments</span>
                  </div>
                  <div class="alink">
                    <a href="#">E-Commerce</a><br/>
                    <span> post 12:02:12, 10 views, 20likes, 30 comments</span>
                  </div>



                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
    </section>

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
                        {{ csrf_field() }}
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

