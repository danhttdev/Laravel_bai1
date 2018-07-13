@extends('master')
@section('content')
    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Welcome to MyBlogIt!</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#register">Create account now</a>
        </div>
      </div>
    </header>

    <section id=''>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">

            <div class="row">
              <div class="col-md-8">
                <div class="left">
                  @forelse( $posts as $post )
                    <div class="col-md-12">
                      <div class="apost">
                        <a href="/posts/view/{{$post['id']}}"><h4 class="service-heading">{{$post['title']}}</h4></a>
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
                  @forelse( $posts as $post )
                    <div class="alink">
                      <a href="/posts/view/{{$post['id']}}">{{$post['title']}}</a><br/>
                      <span>{{$post->user['name']}} post {{$post['time']}}, {{$post['views']}} views, {{$post->likes->count()}} likes, {{$post->comments->count()}} comments</span>
                    </div><hr>
                  @empty
                  @endforelse
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
    </section>

     <section id=''>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">

            <div class="row">
              <div class="col-md-9">
                <div class="left">
                    <table>
                    <thead>
                      <th style="width: 200px;">User</th>
                      <th style="width: 200px;text-align: center;">Posts</th>
                      <th style="width: 200px;text-align: center;">Comments</th>
                      <th style="width: 200px;text-align: center;">Likes</th>
                      <th style="width: 200px;text-align: center;">Note</th>
                    </thead>
                    <tbody>
                      <tr id="ember1336" class="ember-view">
                        <td><span class="number">
                          <img class='like' src="{{ URL::asset('img/like.png') }}" alt=""> Nguyen Van An</span></td>
                        <td style="text-align: center;"><span class="number">3</span></td>
                        <td style="text-align: center;"><span class="number">0</span></td>
                        <td style="text-align: center;"><span class="number">1</span></td>
                      </tr>
                      <tr id="ember1336" class="ember-view">
                        <td><span class="number">
                          <img class='like' src="{{ URL::asset('img/like.png') }}" alt=""> Nguyen Van An</span></td>
                        <td style="text-align: center;"><span class="number">3</span></td>
                        <td style="text-align: center;"><span class="number">0</span></td>
                        <td style="text-align: center;"><span class="number">1</span></td>
                      </tr>
                      <tr id="ember1336" class="ember-view">
                        <td><span class="number">
                          <img class='like' src="{{ URL::asset('img/like.png') }}" alt=""> Nguyen Van An</span></td>
                        <td style="text-align: center;"><span class="number">3</span></td>
                        <td style="text-align: center;"><span class="number">0</span></td>
                        <td style="text-align: center;"><span class="number">1</span></td>
                      </tr>
                      <tr id="ember1336" class="ember-view">
                        <td><span class="number">
                          <img class='like' src="{{ URL::asset('img/like.png') }}" alt=""> Nguyen Van An</span></td>
                        <td style="text-align: center;"><span class="number">3</span></td>
                        <td style="text-align: center;"><span class="number">0</span></td>
                        <td style="text-align: center;"><span class="number">1</span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            
              <div class="col-md-3">
                <div class="right">
                  @forelse( $posts as $post )
                    <div class="alink">
                      <a href="#">{{$post['title']}}</a><br/>
                      <span>{{$post->user['name']}} post {{$post['time']}}, {{$post['views']}} views, {{$post->likes->count()}} likes, {{$post->comments->count()}} comments</span>
                    </div><hr>
                  @empty
                  @endforelse
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
    </section>

  @include('form.register')

@endsection

