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
              <div class="col-md-9">
                <div class="left">
                  
                  <table>
                    <thead>
                      <th style="width: 400px;">User</th>
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
            
              
            </div>


          </div>
        </div>
      </div>
    </section>
@endsection
