<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(InforTableSeeder::class);
    }
}
class InforTableSeeder extends Seeder{
    public function run(){
        DB::table('information')->truncate();
        DB::table('information')->insert([
            [
                'Ten'=>'tag1',
                'NoiDung'=>'Công nghệ Mới'
            ],
            [
                'Ten'=>'tag1_1_icon',
                'NoiDung'=>'fa fa-star'               
            ],
            [
                'Ten'=>'tag1_1_title',
                'NoiDung'=>'SIÊU SẠCH'               
            ],
            [
                'Ten'=>'tag1_1_ct',
                'NoiDung'=>'Là loại sơn có độ bóng láng, màu sắc phong phú'               
            ],
            [
                'Ten'=>'tag1_2_icon',
                'NoiDung'=>'fa fa-life-ring'               
            ],
            [
                'Ten'=>'tag1_2_title',
                'NoiDung'=>'Khô nhanh'               
            ],
            [
                'Ten'=>'tag1_2_ct',
                'NoiDung'=>'Là loại sơn có độ bóng láng, màu sắc phong phú'               
            ],

            [
                'Ten'=>'tag1_3_icon',
                'NoiDung'=>'fa fa-lightbulb-o'               
            ],
            [
                'Ten'=>'tag1_3_title',
                'NoiDung'=>'BÓNG SIMEN'               
            ],
            [
                'Ten'=>'tag1_3_ct',
                'NoiDung'=>'Là loại sơn có độ bóng láng, màu sắc phong phú'               
            ],

            //-----------------------------------------------

            [
                'Ten'=>'tag2',
                'NoiDung'=>'Thương Hiệu'
            ],
            [
                'Ten'=>'tag2_1_icon',
                'NoiDung'=>'mykolor.png'               
            ],
            [
                'Ten'=>'tag2_1_title',
                'NoiDung'=>'MYKOLOR'               
            ],
            [
                'Ten'=>'tag2_1_ct',
                'NoiDung'=>'Không chỉ 1040 màu sơn'               
            ],
            [
                'Ten'=>'tag2_2_icon',
                'NoiDung'=>'spec.png'              
            ],
            [
                'Ten'=>'tag2_2_title',
                'NoiDung'=>'SPEC'               
            ],
            [
                'Ten'=>'tag2_2_ct',
                'NoiDung'=>'Đỉnh cao về trang trí'               
            ],

            [
                'Ten'=>'tag2_3_icon',
                'NoiDung'=>'boss.png'               
            ],
            [
                'Ten'=>'tag2_3_title',
                'NoiDung'=>'BOSS'               
            ],
            [
                'Ten'=>'tag2_3_ct',
                'NoiDung'=>'Sống & đam mê'               
            ],
            [
                'Ten'=>'tag2_4_icon',
                'NoiDung'=>'expo.png'               
            ],
            [
                'Ten'=>'tag2_4_title',
                'NoiDung'=>'expo'               
            ],
            [
                'Ten'=>'tag2_4_ct',
                'NoiDung'=>'Sơn của thời đại'               
            ],
//---------------------------------------------------------
            [
                'Ten'=>'sl_1',
                'NoiDung'=>'1200'               
            ],
            [
                'Ten'=>'sl_2',
                'NoiDung'=>'1277'               
            ],
            [
                'Ten'=>'sl_3',
                'NoiDung'=>'869'               
            ],
            [
                'Ten'=>'sl_4',
                'NoiDung'=>'76'               
            ],
            [
                'Ten'=>'sl_1_ten',
                'NoiDung'=>'KHÁCH HÀNG'               
            ],
            [
                'Ten'=>'sl_2_ten',
                'NoiDung'=>'SẢN PHẨM'               
            ],
            [
                'Ten'=>'sl_3_ten',
                'NoiDung'=>'DỰ ÁN'               
            ],
            [
                'Ten'=>'sl_4_ten',
                'NoiDung'=>'GIẢI THƯỞNG'               
            ],
            [
                'Ten'=>'sl_1_icon',
                'NoiDung'=>'fa fa-user'               
            ],
            [
                'Ten'=>'sl_2_icon',
                'NoiDung'=>'fa fa-institution'               
            ],
            [
                'Ten'=>'sl_3_icon',
                'NoiDung'=>'fa fa-suitcase'               
            ],
            [
                'Ten'=>'sl_4_icon',
                'NoiDung'=>'fa fa-trophy'               
            ],
//----------------------------------------------------
            [
                'Ten'=>'gt_icon',
                'NoiDung'=>'image-block-bg.jpg'               
            ],
            [
                'Ten'=>'gt_title',
                'NoiDung'=>'CÔNG TY GOLDENSTAR CORP'               
            ],
            [
                'Ten'=>'gt_ct',
                'NoiDung'=>'
                <p><strong>&nbsp; &nbsp; &nbsp;C&ocirc;ng ty 4 Oranges Co., Ltd</strong>&nbsp;l&agrave; c&ocirc;ng ty 100% vốn đầu tư nước ngo&agrave;i thuộc tập đo&agrave;n ASIA LEADER INTERNATIONAL INVESTMENT. X&aacute;c định Việt Nam l&agrave; thị trường gi&agrave;u tiềm năng v&agrave; l&agrave; nền tảng để ph&aacute;t triển sang c&aacute;c nước trong khu vực. Trong năm 2004, C&ocirc;ng ty 4 Oranges đ&atilde; đầu tư d&acirc;y chuyền c&ocirc;ng nghệ hiện đại với c&ocirc;ng suất sản xuất 100 triệu l&iacute;t sơn v&agrave; 60 ng&agrave;n tấn bột tr&eacute;t mỗi năm, kinh ph&iacute; 14,5 triệu USD tại Khu C&ocirc;ng Nghiệp Đức H&ograve;a 1, tỉnh Long An, đ&acirc;y l&agrave; một trong ba nh&agrave; m&aacute;y sản xuất sơn lớn nhất Đ&ocirc;ng Nam &Aacute; hiện nay.</p>
                <p>&nbsp; &nbsp; Về nguy&ecirc;n liệu sản xuất, &aacute;p dụng nguy&ecirc;n tắc kiểm tra đầu v&agrave;o nghi&ecirc;m ngặt, hầu hết nguy&ecirc;n liệu sản xuất 4 Oranges nhập khẩu từ những tập đo&agrave;n h&oacute;a chất nổi tiếng như: Degussa (Mỹ), Eliokem (Ph&aacute;p), Dow Chemical (Mỹ), Rohm &amp; Hass (Mỹ), Cray Valley (Maylaysia), Nuplex (Australia),...</p>
                <p>&nbsp; &nbsp; Về mặt kỹ thuật, với d&acirc;y chuyền c&ocirc;ng nghệ hiện đại c&ugrave;ng đội ngũ chuy&ecirc;n gia kỹ thuật gi&agrave;u kinh nghiệm tiến h&agrave;nh nghi&ecirc;n cứu, ph&aacute;t triển sản phẩm, song song đ&oacute; 4 Oranges đ&atilde; tiến h&agrave;nh hợp t&aacute;c kỹ thuật, mua c&aacute;c ph&aacute;t minh mới từ nước ngo&agrave;i, chủ yếu l&agrave; Mỹ v&agrave; ch&acirc;u &Acirc;u kết hợp với nghi&ecirc;n cứu, cải tiến nhằm đưa ra sản phẩm chất lượng cao, ph&ugrave; hợp với m&ocirc;i trường kh&iacute; hậu Việt Nam.</p>
                <p>&nbsp; &nbsp; Việc t&iacute;ch hợp hai Hệ thống quản l&yacute; chất lượng theo tiểu chuẩn ISO 9001:2015 v&agrave; Hệ thống quản l&yacute; m&ocirc;i trường theo tiểu chuẩn ISO 14001:2015 do tổ chức chứng nhận đa quốc gia NQA tại Anh Qu&ocirc;́c cấp, với sự c&ocirc;ng nhận của UKAS - l&agrave; tổ chức c&ocirc;ng nhận Quốc tế danh tiếng nhất, đ&atilde; khẳng định rằng C&ocirc;ng ty 4 Oranges đ&atilde; đề ra ch&iacute;nh s&aacute;ch ph&ugrave; hợp v&agrave; cũng định hướng cho việc cải tiến li&ecirc;n tục c&aacute;c sản phẩm, đ&aacute;p ứng nhu cầu c&agrave;ng cao về sản phẩm sơn trang tr&iacute; của thị trường trong nước cũng như thị trường nước ngo&agrave;i. Ch&iacute;nh v&igrave; thế, sơn MYKOLOR, SPEC, SONBOSS, EXPO, OEXPO, SUPORSEAL do c&ocirc;ng ty 4 Oranges sản xuất lu&ocirc;n được giới chuy&ecirc;n m&ocirc;n, kiến tr&uacute;c sư, kỹ sư, thầu thợ chuy&ecirc;n nghiệp sử dụng v&agrave; đ&aacute;nh gi&aacute; cao.</p>
                '
            ],
            //-----------------------------------------
            [
                'Ten'=>'dc',
                'NoiDung'=>'lô CO2-1 KCN Đức Hòa, ấp 5, xã Đức Hòa, Hòa Đông, huyện Đức Hòa, Long An.'               
            ],
            [
                'Ten'=>'sdt',
                'NoiDung'=>'+84 939 224 241'
            ],
            [
                'Ten'=>'mail',
                'NoiDung'=>'tranthanhkhan@gmail.com'
            ],
//-----------------------------------------------------------------
            [
                'Ten'=>'pin1',
                'NoiDung'=>'1'
            ],
            [
                'Ten'=>'pin3',
                'NoiDung'=>'2'
            ],
            [
                'Ten'=>'pin2',
                'NoiDung'=>'3'
            ],
        ]);
        DB::table('users')->insert([
            ['name'=>'admin', 'email'=>'test@gmail.com', 'password'=>bcrypt('123456'), 'level'=> '1'],
            ['name'=>'user1', 'email'=>'test1@gmail.com', 'password'=>bcrypt('123456'), 'level'=> '0'],
            ['name'=>'user2', 'email'=>'test2@gmail.com', 'password'=>bcrypt('123456'), 'level'=> '0']
        ]);
    }
}class tinTucSeeder extends Seeder{
    public function run(){
        DB::table('information')->truncate();
        DB::table('information')->insert([
            [
                'Ten'=>'tag1',
                'NoiDung'=>'Công nghệ Mới'
            ],
            [
                'Ten'=>'tag1_1_icon',
                'NoiDung'=>'fa fa-star'               
            ],
            [
                'Ten'=>'tag1_1_title',
                'NoiDung'=>'SIÊU SẠCH'               
            ],
            [
                'Ten'=>'tag1_1_ct',
                'NoiDung'=>'Là loại sơn có độ bóng láng, màu sắc phong phú'               
            ],
            [
                'Ten'=>'tag1_2_icon',
                'NoiDung'=>'fa fa-life-ring'               
            ],
            [
                'Ten'=>'tag1_2_title',
                'NoiDung'=>'Khô nhanh'               
            ],
            [
                'Ten'=>'tag1_2_ct',
                'NoiDung'=>'Là loại sơn có độ bóng láng, màu sắc phong phú'               
            ],

            [
                'Ten'=>'tag1_3_icon',
                'NoiDung'=>'fa fa-lightbulb-o'               
            ],
            [
                'Ten'=>'tag1_3_title',
                'NoiDung'=>'BÓNG SIMEN'               
            ],
            [
                'Ten'=>'tag1_3_ct',
                'NoiDung'=>'Là loại sơn có độ bóng láng, màu sắc phong phú'               
            ],

            //-----------------------------------------------

            [
                'Ten'=>'tag2',
                'NoiDung'=>'Thương Hiệu'
            ],
            [
                'Ten'=>'tag2_1_icon',
                'NoiDung'=>'mykolor.png'               
            ],
            [
                'Ten'=>'tag2_1_title',
                'NoiDung'=>'MYKOLOR'               
            ],
            [
                'Ten'=>'tag2_1_ct',
                'NoiDung'=>'Không chỉ 1040 màu sơn'               
            ],
            [
                'Ten'=>'tag2_2_icon',
                'NoiDung'=>'spec.png'              
            ],
            [
                'Ten'=>'tag2_2_title',
                'NoiDung'=>'SPEC'               
            ],
            [
                'Ten'=>'tag2_2_ct',
                'NoiDung'=>'Đỉnh cao về trang trí'               
            ],

            [
                'Ten'=>'tag2_3_icon',
                'NoiDung'=>'boss.png'               
            ],
            [
                'Ten'=>'tag2_3_title',
                'NoiDung'=>'BOSS'               
            ],
            [
                'Ten'=>'tag2_3_ct',
                'NoiDung'=>'Sống & đam mê'               
            ],
            [
                'Ten'=>'tag2_4_icon',
                'NoiDung'=>'expo.png'               
            ],
            [
                'Ten'=>'tag2_4_title',
                'NoiDung'=>'expo'               
            ],
            [
                'Ten'=>'tag2_4_ct',
                'NoiDung'=>'Sơn của thời đại'               
            ],
//---------------------------------------------------------
            [
                'Ten'=>'sl_1',
                'NoiDung'=>'1200'               
            ],
            [
                'Ten'=>'sl_2',
                'NoiDung'=>'1277'               
            ],
            [
                'Ten'=>'sl_3',
                'NoiDung'=>'869'               
            ],
            [
                'Ten'=>'sl_4',
                'NoiDung'=>'76'               
            ],
            [
                'Ten'=>'sl_1_ten',
                'NoiDung'=>'KHÁCH HÀNG'               
            ],
            [
                'Ten'=>'sl_2_ten',
                'NoiDung'=>'SẢN PHẨM'               
            ],
            [
                'Ten'=>'sl_3_ten',
                'NoiDung'=>'DỰ ÁN'               
            ],
            [
                'Ten'=>'sl_4_ten',
                'NoiDung'=>'GIẢI THƯỞNG'               
            ],
            [
                'Ten'=>'sl_1_icon',
                'NoiDung'=>'fa fa-user'               
            ],
            [
                'Ten'=>'sl_2_icon',
                'NoiDung'=>'fa fa-institution'               
            ],
            [
                'Ten'=>'sl_3_icon',
                'NoiDung'=>'fa fa-suitcase'               
            ],
            [
                'Ten'=>'sl_4_icon',
                'NoiDung'=>'fa fa-trophy'               
            ],
//----------------------------------------------------
            [
                'Ten'=>'gt_icon',
                'NoiDung'=>'image-block-bg.jpg'               
            ],
            [
                'Ten'=>'gt_title',
                'NoiDung'=>'CÔNG TY GOLDENSTAR CORP'               
            ],
            [
                'Ten'=>'gt_ct',
                'NoiDung'=>'
                <p><strong>&nbsp; &nbsp; &nbsp;C&ocirc;ng ty 4 Oranges Co., Ltd</strong>&nbsp;l&agrave; c&ocirc;ng ty 100% vốn đầu tư nước ngo&agrave;i thuộc tập đo&agrave;n ASIA LEADER INTERNATIONAL INVESTMENT. X&aacute;c định Việt Nam l&agrave; thị trường gi&agrave;u tiềm năng v&agrave; l&agrave; nền tảng để ph&aacute;t triển sang c&aacute;c nước trong khu vực. Trong năm 2004, C&ocirc;ng ty 4 Oranges đ&atilde; đầu tư d&acirc;y chuyền c&ocirc;ng nghệ hiện đại với c&ocirc;ng suất sản xuất 100 triệu l&iacute;t sơn v&agrave; 60 ng&agrave;n tấn bột tr&eacute;t mỗi năm, kinh ph&iacute; 14,5 triệu USD tại Khu C&ocirc;ng Nghiệp Đức H&ograve;a 1, tỉnh Long An, đ&acirc;y l&agrave; một trong ba nh&agrave; m&aacute;y sản xuất sơn lớn nhất Đ&ocirc;ng Nam &Aacute; hiện nay.</p>
                <p>&nbsp; &nbsp; Về nguy&ecirc;n liệu sản xuất, &aacute;p dụng nguy&ecirc;n tắc kiểm tra đầu v&agrave;o nghi&ecirc;m ngặt, hầu hết nguy&ecirc;n liệu sản xuất 4 Oranges nhập khẩu từ những tập đo&agrave;n h&oacute;a chất nổi tiếng như: Degussa (Mỹ), Eliokem (Ph&aacute;p), Dow Chemical (Mỹ), Rohm &amp; Hass (Mỹ), Cray Valley (Maylaysia), Nuplex (Australia),...</p>
                <p>&nbsp; &nbsp; Về mặt kỹ thuật, với d&acirc;y chuyền c&ocirc;ng nghệ hiện đại c&ugrave;ng đội ngũ chuy&ecirc;n gia kỹ thuật gi&agrave;u kinh nghiệm tiến h&agrave;nh nghi&ecirc;n cứu, ph&aacute;t triển sản phẩm, song song đ&oacute; 4 Oranges đ&atilde; tiến h&agrave;nh hợp t&aacute;c kỹ thuật, mua c&aacute;c ph&aacute;t minh mới từ nước ngo&agrave;i, chủ yếu l&agrave; Mỹ v&agrave; ch&acirc;u &Acirc;u kết hợp với nghi&ecirc;n cứu, cải tiến nhằm đưa ra sản phẩm chất lượng cao, ph&ugrave; hợp với m&ocirc;i trường kh&iacute; hậu Việt Nam.</p>
                <p>&nbsp; &nbsp; Việc t&iacute;ch hợp hai Hệ thống quản l&yacute; chất lượng theo tiểu chuẩn ISO 9001:2015 v&agrave; Hệ thống quản l&yacute; m&ocirc;i trường theo tiểu chuẩn ISO 14001:2015 do tổ chức chứng nhận đa quốc gia NQA tại Anh Qu&ocirc;́c cấp, với sự c&ocirc;ng nhận của UKAS - l&agrave; tổ chức c&ocirc;ng nhận Quốc tế danh tiếng nhất, đ&atilde; khẳng định rằng C&ocirc;ng ty 4 Oranges đ&atilde; đề ra ch&iacute;nh s&aacute;ch ph&ugrave; hợp v&agrave; cũng định hướng cho việc cải tiến li&ecirc;n tục c&aacute;c sản phẩm, đ&aacute;p ứng nhu cầu c&agrave;ng cao về sản phẩm sơn trang tr&iacute; của thị trường trong nước cũng như thị trường nước ngo&agrave;i. Ch&iacute;nh v&igrave; thế, sơn MYKOLOR, SPEC, SONBOSS, EXPO, OEXPO, SUPORSEAL do c&ocirc;ng ty 4 Oranges sản xuất lu&ocirc;n được giới chuy&ecirc;n m&ocirc;n, kiến tr&uacute;c sư, kỹ sư, thầu thợ chuy&ecirc;n nghiệp sử dụng v&agrave; đ&aacute;nh gi&aacute; cao.</p>
                '
            ],
            //-----------------------------------------
            [
                'Ten'=>'dc',
                'NoiDung'=>'lô CO2-1 KCN Đức Hòa, ấp 5, xã Đức Hòa, Hòa Đông, huyện Đức Hòa, Long An.'               
            ],
            [
                'Ten'=>'sdt',
                'NoiDung'=>'+84 939 224 241'
            ],
            [
                'Ten'=>'mail',
                'NoiDung'=>'tranthanhkhan@gmail.com'
            ],
//-----------------------------------------------------------------
            [
                'Ten'=>'pin1',
                'NoiDung'=>'1'
            ],
            [
                'Ten'=>'pin3',
                'NoiDung'=>'2'
            ],
            [
                'Ten'=>'pin2',
                'NoiDung'=>'3'
            ],
        ]);
        DB::table('users')->insert([
            ['name'=>'admin', 'email'=>'test@gmail.com', 'password'=>bcrypt('123456'), 'level'=> '1'],
            ['name'=>'user1', 'email'=>'test1@gmail.com', 'password'=>bcrypt('123456'), 'level'=> '0'],
            ['name'=>'user2', 'email'=>'test2@gmail.com', 'password'=>bcrypt('123456'), 'level'=> '0']
        ]);
    }
}
