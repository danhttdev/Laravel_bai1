<?php

use Illuminate\Database\Seeder;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->truncate();
        // for ($x = 0; $x < 5; $x++) {
        //     App\Post::create([
        //         'title' => str_random(3).'AAA',
        //         'content' => str_random(70),
        //         'user_id' => array_rand(App\User::all()->pluck('id')->toArray(),1)+1,
        //         'time' => $this->randomDate(),
        //         'tag' =>'danh@gmail.com',
        //     ]);
        // }


        App\Post::create([
            'title' => 'Kỳ vọng vào một thế hệ cán bộ mới sau Hội nghị Trung ương 7',
            'content' => '(Dân trí) - “Cán bộ là cái gốc của mọi công việc”, “muôn việc thành công hoặc thất bại đều do cán bộ tốt hoặc kém” – lời dạy của Chủ tịch Hồ Chí Minh đã được Tổng Bí thư Nguyễn Phú Trọng một lần nữa nhắc lại tại phiên khai mạc Hội nghị Trung ương 7 khoá XII diễn ra sáng 7/5',
            'user_id' => 1,
            'time' => $this->randomDate(),
            'tag' =>'Tin',
        ]);
        App\Post::create([
            'title' => 'Kinh hãi món cá nhảy tanh tách trong cổ họng dân nhậu ở Sơn La
            ',
            'content' => 'Món cá nhảy được xem là món ăn phổ biến, đặc sản của người Thái ở Sơn La. Món ăn trông có vẻ đơn giản nhưng lại rất kén người ăn, điểm khác biệt của món ăn này chính là ở cách ăn rất lạ lùng, cá vẫn còn nhảy tanh tách trong miệng khi ăn.',
            'user_id' => 1,
            'time' => $this->randomDate(),
            'tag' =>'Hot',
        ]);
        App\Post::create([
            'title' => 'Nắng nóng coi chừng "cháy da"',
            'content' => 'Nắng nóng cũng khiến các bệnh nhân mắc các bệnh về da tăng cao. Theo thống kê của các bác sĩ BV Da liễu Trung ương, trong mùa hè, khoảng 20% bệnh nhi đến khám là do bị sẩn ngứa côn trùng cắn. Bên cạnh đó, tỷ lệ trẻ mắc rôm sảy, viêm da tiếp xúc do dị ứng ánh sáng… cũng gia tăng mạnh.

            Đáng chú ý, BV đã từng tiếp nhận một bệnh nhân nam đến khám ở viện trong tình trạng “da cháy”. Trước đó, bệnh nhân kể, anh có tắm biển vào đúng giữa trưa, lúc có cường độ ánh sáng cao nhất. Ngay khi vừa lên bờ, trên da anh xuất hiện ban đỏ, bỏng rát ranh giới rất rõ giữa vùng có và không tiếp xúc ánh sáng. Sau đó, da anh này xuất hiện mụn nước, bọng nước trên nền da đỏ như... tôm luộc. Khi mụn nước, bọng nước vỡ, da bệnh nhân bong vảy da mỏng, khiến da bị tổn thương nặng, bị rát thâm trong thời gian dài.',
            'user_id' => 3,
            'time' => $this->randomDate(),
            'tag' =>'Tin',
        ]);
        App\Post::create([
            'title' => 'Xóm nghèo xót thương "hiệp sĩ" bị trộm đâm tử vong',
            'content' => 'Dù hai vợ chồng đã ly hôn vì hoàn cảnh, nhưng tôi biết anh ấy còn rất thương mẹ con tôi. Sau đêm bắt cướp, gia đình tôi mới cảm nhận được nỗi đau mất anh mãi mãi”, chị Nguyễn Thị Thanh Dung - vợ cũ “hiệp sĩ” Thôi nghẹn ngào khi đưa thi thể anh về quê.
            Chia sẻ trên Fanpage  Chia sẻ bài viết này trên trên Facebook  Chia sẻ bài viết này trên trên G+
            Xóm nghèo xót thương
            
            Sáng nay (15.5), chiếc xe cứu thương đã đưa thi thể “hiệp sĩ” Nguyễn Văn Thôi (42 tuổi, xã Mỹ Lợi, huyện Phù Mỹ, Bình Định) về quê nhà an táng. Anh Thôi hy sinh trong lúc truy bắt nhóm đối tượng trộm xe SH trên đường Cách Mạng Tháng Tám (TP Hồ Chí Minh) tối 13.5.
            
            Từ sáng sớm, không khí tang thương bao trùm cả xóm nghèo thôn Chánh Khoan Tây (xã Mỹ Lợi). Rất đông người thân, bạn bè và người dân đến nhà riêng của bố mẹ anh Thôi thắp nén nhang, tiễn biệt người “hiệp sĩ” trượng nghĩa nhưng đoản mệnh.',
            'user_id' => 2,
            'time' => $this->randomDate(),
            'tag' =>'Tin',
        ]);
        App\Post::create([
            'title' => 'Hết "bún mắng, cháo chửi" lại đến… "dạy chửi"!',
            'content' => 'Câu chuyện nóng nhất trong ngày 5.5 là video clip của một học viên tại một trung tâm dạy tiếng Anh tại Hà Nội post trên mạng về một nữ giáo viên đã dù......

            ',
            'user_id' => 4,
            'time' => $this->randomDate(),
            'tag' =>'Tin',
        ]);

    }
    function randomDate()
    {
        $min = strtotime('2012-01-01 00:00:00');
        $max = strtotime('2018-12-31 23:59:59');
        $rand_date = rand($min, $max);
        return date('Y-m-d H:i:s', $rand_date);
    }
}

