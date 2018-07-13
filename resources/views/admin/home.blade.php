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

     <section id=''>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">

            <div class="row">
              <div class="col-md-9">
                <div class="left">
                  <p>(Dân trí) - “Cán bộ là cái gốc của mọi công việc”, “muôn việc thành công hoặc thất bại đều do cán bộ tốt hoặc kém” – lời dạy của Chủ tịch Hồ Chí Minh đã được Tổng Bí thư Nguyễn Phú Trọng một lần nữa nhắc lại tại phiên khai mạc Hội nghị Trung ương 7 khoá XII diễn ra sáng 7/5

Kinh hãi món cá nhảy tanh tách trong cổ họng dân nhậu ở Sơn La
 Nguyen Van An posted at 2014-02-01 00:28:40

Món cá nhảy được xem là món ăn phổ biến, đặc sản của người Thái ở Sơn La. Món ăn trông có vẻ đơn giản nhưng lại rất kén người ăn, điểm khác biệt của món ăn này chính là ở cách ăn rất lạ lùng, cá vẫn còn nhảy tanh tách trong miệng khi ăn.

Nắng nóng coi chừng "cháy da"
 Le Thi An posted at 2014-11-05 21:39:09

Nắng nóng cũng khiến các bệnh nhân mắc các bệnh về da tăng cao. Theo thống kê của các bác sĩ BV Da liễu Trung ương, trong mùa hè, khoảng 20% bệnh nhi đến khám là do bị sẩn ngứa côn trùng cắn. Bên cạnh đó, tỷ lệ trẻ mắc rôm sảy, viêm da tiếp xúc do dị ứng ánh sáng… cũng gia tăng mạnh. Đáng chú ý, BV đã từng tiếp nhận một bệnh nhân nam đến khám ở viện trong tình trạng “da cháy”. Trước đó, bệnh nhân kể, anh có tắm biển vào đúng giữa trưa, lúc có cường độ ánh sáng cao nhất. Ngay khi vừa lên bờ, trên da anh xuất hiện ban đỏ, bỏng rát ranh giới rất rõ giữa vùng có và không tiếp xúc ánh sáng. Sau đó, da anh này xuất hiện mụn nước, bọng nước trên nền da đỏ như... tôm luộc. Khi mụn nước, bọng nước vỡ, da bệnh nhân bong vảy da mỏng, khiến da bị tổn thương nặng, bị rát thâm trong thời gian dài.

Xóm nghèo xót thương "hiệp sĩ" bị trộm đâm tử vong
 Tran Van An posted at 2013-03-24 10:17:12

Dù hai vợ chồng đã ly hôn vì hoàn cảnh, nhưng tôi biết anh ấy còn rất thương mẹ con tôi. Sau đêm bắt cướp, gia đình tôi mới cảm nhận được nỗi đau mất anh mãi mãi”, chị Nguyễn Thị Thanh Dung - vợ cũ “hiệp sĩ” Thôi nghẹn ngào khi đưa thi thể anh về quê. Chia sẻ trên Fanpage Chia sẻ bài viết này trên trên Facebook Chia sẻ bài viết này trên trên G+ Xóm nghèo xót thương Sáng nay (15.5), chiếc xe cứu thương đã đưa thi thể “hiệp sĩ” Nguyễn Văn Thôi (42 tuổi, xã Mỹ Lợi, huyện Phù Mỹ, Bình Định) về quê nhà an táng. Anh Thôi hy sinh trong lúc truy bắt nhóm đối tượng trộm xe SH trên đường Cách Mạng Tháng Tám (TP Hồ Chí Minh) tối 13.5. Từ sáng sớm, không khí tang thương bao trùm cả xóm nghèo thôn Chánh Khoan Tây (xã Mỹ Lợi). Rất đông người thân, bạn bè và người dân đến nhà riêng của bố mẹ anh Thôi thắp nén nhang, tiễn biệt người “hiệp sĩ” trượng nghĩa nhưng đoản mệnh.

Hết "bún mắng, cháo chửi" lại đến… "dạy chửi"!
 Nguyen Van An 2 posted at 2018-11-06 20:10:58

Câu chuyện nóng nhất trong ngày 5.5 là video clip của một học viên tại một trung tâm dạy tiếng Anh tại Hà Nội post trên mạng về một nữ giáo viên đã dù......</p>
                </div>
              </div>
            
              <div class="col-md-3">
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

  @include('form.register')

@endsection

