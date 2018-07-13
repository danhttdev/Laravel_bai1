@extends('master')
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">MyBlogIt</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#page-top">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#register">Create account</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">User</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#team">Post</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{url('login')}}">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Welcome to MyBlogIt!</div>
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
                      <div class="col-md-12">
                        <div class="apost">
                          <h4 class="service-heading">E-Commerce</h4>
                          <p><span class="fa-stack fa-1x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                          </span> posted at 08:00:12</p>
                          
                          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedirem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedirem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedirem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedirem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedirem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedirem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                        </div>
                        
                      </div>
                      <div class="col-md-12">
                        <div class="apost">
                          <h4 class="service-heading">E-Commerce</h4>
                          <p><span class="fa-stack fa-1x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                          </span> posted at 08:00:12</p>
                          
                          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedirem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedirem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedirem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedirem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedirem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedirem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                        </div>
                        
                      </div>
                      <div class="col-md-12">
                        <div class="apost">
                          <h4 class="service-heading">E-Commerce</h4>
                          <p><span class="fa-stack fa-1x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                          </span> posted at 08:00:12</p>
                          
                          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedirem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedirem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedirem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedirem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedirem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedirem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                        </div>
                        
                      </div>

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
                    <form id="registerForm" name="sentMessage" method="POST" action="{{url('/register')}}">
                            {{ csrf_field() }}

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <input class="form-control" id="email" type="email" placeholder="Your email *" required="required" data-validation-required-message="Please enter your email.">
                            <p class="help-block text-danger"></p>
                          </div>
                          <div class="form-group">
                            <input class="form-control" id="password" type="password" placeholder="Your password *" required="required" data-validation-required-message="Please enter your password address.">
                            <p class="help-block text-danger"></p>
                          </div>
                          <div class="form-group">
                            <input class="form-control" id="password" type="password" placeholder="Your password *" required="required" data-validation-required-message="Please enter your password address.">
                            <p class="help-block text-danger"></p>
                          </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                          <div id="success"></div>
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

@extends('footer')