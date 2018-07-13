@extends('master')
@section('css')
    <link href="{{ URL::asset('css/mystyle_view.css') }}" rel="stylesheet">
@endsection
@section('content')
<header class="masthead">
  <div class="container">
    <div class="intro-text">
      
    </div>
  </div>
</header>
<section id=''>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="row">
              <h3>{{$post['title']}}</h3>
            </div>
            <div class="row">
              <div class="col-md-9">
                <div class="left">
                  <div class="alink">
                    <span>{{$post->user['name']}} post {{$post['time']}}, {{$post['views']}} views, {{$post->likes->count()}} likes, {{$post->comments->count()}} comments</span>
                  </div>
                  <p>{{$post['content']}}</p>
                  <div class="alink">
                    <img class='like' src="{{ URL::asset('img/like.png') }}" alt=""> <span>{{$post->user['name']}} post {{$post['time']}}, {{$post['views']}} views, {{$post->likes->count()}} likes, {{$post->comments->count()}} comments</span>
                  </div>
                  <div class='comment_txt'>
                    <form action="">
                      <input type="text"><br/>
                      <button type="submit">send</button>
                    </form>
                  </div>
                  <div class="post_comment">
                    @forelse( $post->comments as $comment )
                      <div class="post_comment_item">
                        <img src="{{ URL::asset('img/avatar.png') }}" alt="">
                        <div class="content">
                          <p>{{$comment->post->user['name']}} commented at {{$comment['time']}}</p>
                          <p>{{$comment['content']}}</p>
                        </div>
                      </div>
                    @empty
                    @endforelse



                    
                  </div>
                </div>
              </div>
            
              <div class="col-md-3">
                <div class="right">
                  @forelse( $posts_link as $post )
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
@endsection