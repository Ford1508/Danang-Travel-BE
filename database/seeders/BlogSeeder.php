<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            [
     
                "name" => "Highlands Coffee – Quán cafe đẹp lâu đời",
                "description" => "Highlands Coffee là một trong những quán cafe đẹp top đầu Đà Nẵng. Bởi sở hữu vị trí thuận lợi, nổi bật trên các tuyến đường cùng phong cách phục vụ chuyên nghiệp, thân thiện. Hơn nữa, chuỗi cửa hàng còn là một trong những quán cafe đẹp uy tín về thương hiệu cafe Việt.  Phân khúc khách hàng của Highlands hầu hết là nhân viên văn phòng, khách du lịch và giới trẻ. Và hầu hết mở ra ở các vị trí trung tâm thương mại hoặc các tòa nhà lớn. Có thể nói Highlands hiện nay là một trong những chuỗi cửa hàng thành công nhất có mặt tại các thành phố lớn, quán lúc nào cũng đông đúc, giá thành mở mức tầm trung . Để thành công như hiện nay, Highlands có đội ngũ nhân viên phục vụ chuyên nghiệp và dịch vụ tốt. Đầu tư về nội thất và không gian tốt. Mang lại cảm giác hài lòng cho thực khách. Và chất lượng sản phẩm cũng đặt lên hàng đầu. Bạn có thể thoái mái checkin tạo những bức ảnh đẹp vạn người mê tại nơi này.",
                "address" =>"Indochina Riverside Tower, 74 Bạch Đằng, Hải Châu 1, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://simg.zalopay.com.vn/zlp-website/assets/cua_hang_highlands_186db1ace1.jpg",
                "user_id" =>1,
                "category_id" => 1,
            ],
            [
                 
                "name" => "The Coffee House – Quán cafe đẹp lý tưởng cho tụ tập và làm việc",
                "description" => "Những năm trở lại đây, The Coffee House dường như trở thành một trong những quán cafe siêu đẹp, hấp dẫn giới trẻ Đà thành nhất. Chưa bao giờ “Ngôi Nhà Cà Phê” vắng khách.
                Điều đặc biệt giữ chân giới trẻ đến đây thường xuyên chính là không gian xanh và thân thiện của Nhà. Hơn nữa, quán cũng thường xuyên cho ra mắt các món mới. Phù hợp với khí hậu và mùa thời tiết.
                The Coffee House có mặt ở nhiều địa điểm trên toàn thành phố. Mỗi một cửa hàng đều có một thiết kế độc đáo và rất riêng. Tham khảo một số địa chỉ nổi bật nhất dưới đây.",
                "address" =>"01 Núi Thành, Hải Châu, Đà Nẵng",
                "rating"=> 0,
                "image"=>"http://file.hstatic.net/1000075078/article/br_bigc_go_01_91959531eb4b4e42a5ed6f53a445b92f.jpg",
                "user_id" =>2,
                "category_id" => 1,
            ],
            [
                 
                "name" => "Starbucks – Quán cafe đẹp mang thương hiệu quốc tế",
                "description" => "Starbucks không còn là cái tên xa lạ với giới trẻ Đà thành. Quán cafe đẹp và ấn tượng không chỉ bởi vị trí đắc địa bên bờ sông Hàn. Mà còn bởi kiến trúc và cách design trang trí sang trọng, hiện đại và năng động. Đúng màu sắc của thương hiệu Starbucks.
                Starbucks có không gian trong nhà sang trọng, tràn ngập hương thơm độc đáo của cafe. Không gian ngoài trời thoáng mát, thích hợp để ngắm nhìn phố phường chầm chậm với nhịp sống riêng.",
                "address" =>"50 Bạch Đằng, Hải Châu, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://cafefcdn.com/203337114487263232/2022/8/19/photo-3-1660892755214116300581.jpg",
                "user_id" =>3,
                "category_id" => 1,
            ],
            [
                 
                "name" => "BonPas Bakery & Coffee",
                "description" => "Không chỉ nổi tiếng với trà thơm, bánh ngon, mà BonPas còn là một trong những quán cafe đẹp nhất Đà Nẵng với thiết kế và trang trí hiện đại. Mỗi một góc nhỏ trong cửa hàng đều sẽ là nguồn cảm hứng bất tận cho hàng trăm tấm hình sống ảo của bạn.
                Với phương châm “đong đầy hạnh phúc của bạn” BonPas cam kết dẫn đầu về chất lượng sản phẩm cùng với phong cách phục vụ khá chuyên nghiệp, thân thiện để có thể đáp ứng được nhu cầu thưởng thức những sản phẩm bánh tươi mới của các fan yêu thích.
                ",
                "address" =>"12 Lê Duẩn, Hải Châu, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://diadiemdanang.vn/wp-content/uploads/2019/12/bonpas-bakery-coffee-8-1.jpg",
                "user_id" =>2,
                "category_id" => 1,
            ],
            [
                 
                "name" => "Nia cafe – Quán cafe đẹp Đà Nẵng với không gian độc đáo",
                "description" => "Nia là sự kết hợp hài hòa và tài tình giữa thiết kế hiện đại và không gian thiên nhiên mở. Dành một ngày cuối tuần để đắm chìm trong sự trong lành của không khí nơi đây. Lắng nghe tiếng nước chảy róc rách và tiếng cá quẫy nước giữa hồ sẽ là cách thư giãn tuyệt vời nhất.
                Điểm cộng đầu tiên, khiến thực khách ấn tượng khi bước vào tiệm Nia Cafe Đà Nẵng là khong gian y hệt như núi rừng nhiệt đới. Diện tích không gian quán rộng rãi nhiều màu sắc.    
                Nia cafe còn ghi điểm khách bởi thức uống thơm ngon và bổ dưỡng. Menu tiệm đa dạng và đầy đủ các loại. Ngoài ra, còn nhiều thức uống “healthy”, nào là la hán quả, nước ép cà rốt, nước ép cà chua, nước ép dưa hấu, nước ép ổi, cóc… Ngoài ra, bạn cũng đừng quên “order” các món như yaourt trái cây, sinh tố, sâm dứa sữa… để khỏe đẹp từ bên trong nhé!
                Không những thế đội ngũ nhân viên chuyên nghiệp, dù quán khách khá đông nhưng cách phục vụ và order nước không để khách phải chờ quá lâu nhất là dịp cuối tuần, lễ tết.
                ",
                "address" =>"3/14 Phan Thành Tài, Hải Châu, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://media.mia.vn/uploads/blog-du-lich/dam-chim-vao-thien-nhien-cuc-chill-o-quan-nia-cafe-da-nang-1636709467.jpg",
                "user_id" =>1,
                "category_id" => 1,
            ],
            [
                 
                "name" => "Danang Souvenirs & Coffee",
                "description" => "Đây là một trong những cái tên hàng đầu trong các quán cafe đẹp Đà Nẵng với trang trí ấn tượng. Tại đây, bạn có thể tìm thấy 1001 góc sống ảo lung linh.
                Danang Souvenirs & Coffee được ví như một Đà Nẵng thu nhỏ. Có đầy đủ các biểu tượng đặc trưng của thành phố cùng những món đồ lưu niệm ý nghĩa mà xinh đẹp.
                ",
                "address" =>"34 Bạch Đằng, Thạch Thang, Hải Châu, Đà Nẵng",
                "rating"=> 0,
                "image"=>"",
                "user_id" =>3,
                "category_id" => 1,
            ],
            [
                 
                "name" => "Aroi Dessert Cafe",
                "description" => "Tọa lạc bên bờ sông Hàn, ngay cạnh khu chợ Hàn nổi tiếng. Aroi Dessert Cafe là một trong những cái tên hàng đầu. Chính nhờ thực đơn smoothie siêu ngon và “món đặc sản” Bánh Gấu. Aroi là nơi lui tới thường xuyên của người nổi tiếng, giới trẻ và khách du lịch.
                Ngoài ra, không gian mở thoáng đãng, cùng thiết kế và trang trí cá tính khiến Aroi trở thành quán cafe đẹp ngất ngây giữa lòng Đà Nẵng.
                ",
                "address" =>"124 Bạch Đằng, Hải Châu, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://media-cdn.tripadvisor.com/media/photo-s/12/d9/e8/97/beach-view-inside-the.jpg",
                "user_id" =>2,
                "category_id" => 1,
            ],
            [
                 
                "name" => "ABC Bakery",
                "description" => "Cửa hàng được mệnh danh là “Lò bánh Việt – Âu” trong lòng Đà Nẵng. ABC mang đến hàng loạt lựa chọn phong phú với nhiều loại bánh khác nhau.
                Ngoài ra, với thiết kế ấn tượng, hiện đại và sang trọng, ABC còn là một quán cafe đẹp, hấp dẫn giới trẻ Đà thành đến chụp hình check-in và sống ảo.
                ",
                "address" =>"132 Lê Duẩn, Hải Châu, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://media-cdn.tripadvisor.com/media/photo-s/02/91/0d/81/filename-img-7285-jpg.jpg",
                "user_id" =>1,
                "category_id" => 1,
            ],
            [
                 
                "name" => "Home Coffee – Quán cafe đẹp, ấm cúng trong lòng thành phố",
                "description" => "Tọa lạc trên con đường yên tĩnh Ngô Gia Tự, Home Coffee là nơi quen thuộc của nhiều bạn trẻ Đà thành trong những năm gần đây. Quán trang trí theo phong cách châu Âu hiện đại mà cổ điển. Không gian yên tĩnh, sang trọng. Nơi đây phù hợp cho những ai tìm kiếm một góc nhỏ yên bình và nhẹ nhàng.
            
                Đây chính là điểm lý tưởng để các bạn có thể cùng nhau tụ tập, ôn bài sau một ngày dài. Không những thế tại đây có đội ngũ nhân viên thân thiện phục vụ khách hàng một cách chu đáo và tận tình nhất.
                ",
                "address" =>"191 Hoàng Diệu, Nam Dương, Hải Châu, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://media.mia.vn/uploads/blog-du-lich/Nice-Home-Coffee-Quan-cafe-thu-hut-gioi-tre-voi-thiet-ke-khong-gian-an-tuong-02-1637105305.jpg",
                "user_id" =>3,
                "category_id" => 1,
            ],
            [
                 
                "name" => "Caffe Fresco",
                "description" => "Giữa hàng loạt các quán cafe đẹp uy tín nổi lên trong lòng thành phố, Caffe Fresco mang đến không gian sang trọng và hiện đại. Caffe Fresco là nơi lý tưởng để xách máy tính ra ngồi làm việc, thay đổi không khí để tăng cường hiệu suất công việc. Đồng thời, đây cũng là nơi thú vị để tụ tập bạn bè bên những tách cafe robica nguyên nhất.
            
                Caffe Fresco đặc biệt mang đến hương vị nguyên bản của cafe robica. Bạn sẽ được thưởng thức mùi hương chính hiệu quả nó. Lắng nghe những câu chuyện thú vị bên ly cafe sẽ là trải nghiệm tuyệt vời tại thành phố Đà Nẵng.
                ",
                "address" =>"238 Bạch Đằng, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://media.foody.vn/images/14(607).jpg",
                "user_id" =>2,
                "category_id" => 1,
            ],
            [
                 
                "name" => "Ngon Thị Hoa ",
                "description" => "Ngon Thị Hoa được biết đến là một trong những nhà hàng nổi tiếng ở Đà Nẵng, bởi không gian vô cùng ấn tượng. Tại đây, bạn sẽ cảm nhận rõ nét không gian cổ xưa, qua những bức tường màu vàng, màu của thời gian. Ngoài ra, còn là sự sáng tạo, tinh tế trong ẩm thực truyền thống mang hồi ức về quê hương, hoài niệm.
            
                Bên cạnh sự lãng mạn, Ngon Thị Hoa hết sức đa dạng về thực đơn. Đặc biệt, lẩu gà nấm là món ăn mang thương hiệu Ngon, gắn liền với bếp Ngon từ những ngày đầu tiên. Cùng với thực phẩm hải sản tươi sống, tạo nên vũ điệu ẩm thực sinh động của thành phố biển. Xứng đáng là nơi mà bạn cùng bạn bè, người thân để thưởng thức nhiều món ngon.
                
                Bằng những món ăn tươi ngon, không gian cổ điển, lãng mạn. Ngon Thị Hoa đã tạo nên một nghệ thuật ẩm thực đỉnh cao, khiến bạn được thẩm thấu bằng mọi giác quan có thể. Cùng với đó, là sự phục vụ tận tình, chuyên nghiệp của đội ngũ nhân viên. Sẽ giúp bạn có những phút giây thoải mái để thưởng thức ẩm thực một cách trọn vẹn.
                ",
                "address" =>"100 Lê Quang Đạo, Str, Ngũ Hành Sơn, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://media.foody.vn/res/g101/1004311/prof/s/foody-upload-api-foody-mobile-86398906_12691075218-200226102116.jpg",
                "user_id" =>1,
                "category_id" => 2,
            ],
            [
                 
                "name" => "Nhà hàng The Square – nhà hàng nổi tiếng ở Đà Nẵng không thể bỏ qua",
                "description" => "Nhà hàng The Square chuyên ẩm thực Châu Âu hiện đại và các món ăn truyền thống Việt Nam. Tại đây, nhà hàng mang đến không gian ẩm thực sang trọng, tinh tế dành cho cả bữa sáng, trưa lẫn tối. Với vị trí đắc địa, nằm bên bờ Tây sông Hàn thơ mộng. Đây là điểm đến lý tưởng cho thực khách xa gần, khi muốn được tận hưởng giây phút thư thái với những món ăn ngon.
            
                Lý do bạn nên chọn Nhà hàng The Square để trải nghiệm:
                Không gian sang trọng, hiện đại và tinh tế
                View đẹp, thông thoáng
                Ẩm thực Á – Âu đa dạng
                Chất lượng hảo hạng, thực phẩm tươi ngon
                Nhân viên chuyên nghiệp, lịch sự
                Dịch vụ hoàn hảo
                Giá cả phải chăng
                
                Khi đến đây, ngoài được thưởng thức những món ăn ngon. Thực khách còn được chiêm ngưỡng quá trình chế biến điêu luyện, đẹp mắt của các đầu bếp tài hoa. Cứ mỗi 2 tuần 1 lần, sẽ có những thực đơn hải sản Đông Nam Á đa dạng, làm nên thương hiệu của The Square, thu hút đông đảo thực khách tại đây.
                ",
                "address" =>"36 Bạch Đằng, Street, Hải Châu, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://www.novotel-saigon-centre.com/wp-content/uploads/sites/75/2016/11/RestaurantsBars-Thesquare1.jpg",
                "user_id" =>3,
                "category_id" => 2,
            ],
            [
                 
                "name" => "Nhà hàng Madame Lân ",
                "description" => "Madame Lân là một trong những nhà hàng nổi tiếng ở Đà Nẵng, với không gian cổ kín pha chút hiện đại. Madame Lân truyền tải thông điệp rõ ràng, thông qua sự kết hợp giữa ẩm thực – con người – không gian. Giúp thực khách cảm nhận được tình yêu thương, sự chân thành và lòng nhiệt huyết trong mỗi món ăn.
            
            
                Những món ăn nổi bật có tại Madame Lân:
                Bún bò, giò đặc biệt
                Mì Quảng gà rút xương
                Phở tái gầu
                Bún ốc Hà Nội
                Hủ tiếu Nam Vang
                Gà nướng muối ớt
                Các món hải sản tươi sống,…
                
                Tất cả món ăn được Madame Lân chế biến từ nguyên liệu sạch, tươi ngon nhất, đảm bảo vệ sinh an toàn thực phẩm. Thực khách sẽ được thưởng thức những món ăn thượng hạng nhất, mang hương vị truyền thống. Được nhà hàng kế thừa và sáng tạo để làm nên những món ăn vừa quen vừa lạ, mang đến trải nghiệm tuyệt vời cho khách hàng.
                ",
                "address" =>"04 Bạch Đằng, Thạch Thang, Hải Châu, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://www.danang43.vn/wp-content/uploads/2021/11/madamelan-04.jpg",
                "user_id" =>2,
                "category_id" => 2,
            ],
            [
                 
                "name" => "Ngọc Hương Restaurant – Nhà hàng nổi tiếng ở Đà Nẵng",
                "description" => "Tọa lạc trên mặt tiền đường Võ Nguyên Giáp, Ngọc Hương Restaurant còn sở hữu view biển Mỹ Khê tuyệt đẹp. Với lối kiến trúc độc đáo, mang phong cách cổ điển kết hợp với không gian sang trọng, tinh tế khiến bạn hoàn toàn bị chinh phục khi đặt chân đến đây.
            
                Ngoài ra, với thực đơn vô cùng đa dạng, đặc biệt là những món hải sản tươi sống được người dân đánh bắt. Dưới bàn tay chế biến khéo léo của đầu bếp nhà hàng, mang lại những món ăn thơm ngon, giàu dinh dưỡng. Sẽ khiến bạn như lạc vào bữa tiệc hải sản thịnh soạn, mang đầy đủ hương vị của biển cả.
                
                Với phương châm “vui lòng khách đến, vui lòng khách đi”. Ngọc Hương Restaurant luôn mang lại dịch vụ tốt nhất thông qua những món ăn tươi ngon nhất, cung cách phục vụ chuyên nghiệp và giá cả phải chăng. Để mang lại trải nghiệm tuyệt vời nhất, đảm bảo sự hài lòng đối với mọi khách hàng.
                ",
                "address" =>"174 Võ Nguyên Giáp, Phước Mỹ, Sơn Trà, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://pasgo.vn/Upload/anh-chi-tiet/nha-hang-hai-san-ngoc-huong-vo-nguyen-giap-1-normal-1744785229187.jpg",
                "user_id" =>1,
                "category_id" => 2,
            ],
            [
                 
                "name" => "Không Gian Xưa – Nhà hàng cổ kín tại Đà Nẵng",
                "description" => "Với diện tích gần 5.000 mét vuông, Không Gian Xưa là tổ hợp nhà hàng, quán cà phê, giải trí và khu du lịch với kiến trúc hoài cổ, tọa lạc ngay trung tâm thành phố Đà Nẵng. Mang đậm phong cách làng quê Việt, món ăn lưu dấu hương vị ẩm thực truyền thống. Không Gian Xưa mang đến cho bạn những trải nghiệm tuyệt vời, mà không tìm thấy được ở nơi nào khác.
            
                Một số món ăn nổi tiếng có tại nhà hàng Không Gian Xưa:
                
                Xôi gà hấp lá sen
                Xíu mại thịt cua
                Chân gà hấp tàu xì
                Bánh cuốn xá xíu
                Há cảo tôm thủy tinh
                Sườn non hấp tàu xì,…
                Là nhà hàng nổi tiếng ở Đà Nẵng, Không Gian Xưa khiến thực khách vấn vương bởi ẩm thực và không gian trang nhã, ấn tượng. Văn hóa ẩm thực đặc trưng tại đây, là nét chấm phá cho lối kiến trúc đậm bản sắc Việt, đưa bạn hòa mình vào chốn bình yên giữa lòng Đà Nẵng.
                ",
                "address" =>"402 Điện Biên Phủ, Hòa Khê, Thanh Khê, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://media-cdn.tripadvisor.com/media/photo-s/04/a0/d1/ec/khong-gian-xua.jpg",
                "user_id" =>3,
                "category_id" => 2,
            ],
            [
                 
                "name" => "Panorama Restaurant – Nhà hàng nổi tiếng ở Đà Nẵng theo phong cách Hàn",
                "description" => "Panorama là nhà hàng mang phong cách Hàn, được giới trẻ Đà Nẵng yêu thích. Panorama là lựa chọn hoàn hảo nếu bạn muốn có không gian thoáng mát, những món ăn ngon với nhiều view đẹp để ngắm trọn thành phố bất kể ngày đêm. Là địa chỉ lý tưởng để bạn check in cùng gia đình, bạn bè vào mỗi ngày nghỉ cuối tuần.
            
                panorama-restaurant-nha-hang-noi-tieng-o-da-nang-theo-phong-cach-han-top10danang
                Panorama Restaurant – Nhà hàng nổi tiếng ở Đà Nẵng theo phong cách Hàn
                Món ăn ở đây vô cùng đa dạng, phong phú được thiết kế công phu, đẹp mắt. Với hương vị món ăn đặc biệt, hấp dẫn và lôi cuốn sẽ kích thích vị giác của bạn. Bạn cũng có thể chọn các set combo bao gồm lẩu, nướng, kim bắp, sashimi,… vô cùng hấp dẫn mà giá cả lại rất phải chăng.
                ",
                "address" =>"120A Nguyễn Văn Thoại, Bắc Mỹ Phú, Ngũ Hành Sơn, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://media-cdn.tripadvisor.com/media/photo-s/26/9c/5e/60/panorama-restaurant-balcony.jpg",
                "user_id" =>2,
                "category_id" => 2,
            ],
            [
                 
                "name" => "Nhà hàng Làng Nghệ Đà Nẵng",
                "description" => "Lấy cảm hứng từ quê hương với những gì thân thuộc nhất, Làng Nghệ mang đến phong cách một vùng quê thu nhỏ trong lòng thành phố biển Đà Nẵng. Thông qua những món ăn mang hương vị đậm chất làng quê, quán muốn truyền tải thông điệp sự đồng điệu giữa ẩm thực và tâm hồn. Qua đó, giúp thực khách gợi nhớ đến một thời thơ ấu, ký ức trong tâm hồn giữa cuộc sống xô bồ.
            
                Không gian cổ kín cùng ẩm thực đa dạng mang hương vị thân quen. Làng Nghệ đã tạo ra nhiều món ngon như súp lươn, heo rừng, bánh mướt, gà làng nghệ, cá mát làng nghệ,…rất đỗi bình dị nhưng vô cùng đặc sắc. Tại đây nhà hàng phục vụ buổi sáng, trưa lẫn tối, vì vậy bạn có thể đến bất cứ lúc nào để thưởng thức những món ngon trong không gian yên tĩnh.
                ",
                "address" =>"P. Q, 119 Lê Lợi, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://media.ngoisao.vn/news/2015/08/18/nha-hang-lang-nghe-4-ngoisao.vn.stamp2.JPG",
                "user_id" =>1,
                "category_id" => 2,
            ],
            [
                 
                "name" => "Nhà hàng Sơn Trà Retreat",
                "description" => "Một trong những nhà hàng nổi tiếng ở Đà Nẵng tiếp theo là Sơn Trà Retreat. Nép mình sau chân núi Sơn Trà, Sơn Trà Retreat với không gian yên bình là địa điểm lý tưởng để ôn lại những câu chuyện, nỗi niềm trong một gốc riêng tư. Được thiết kế với khoảng sân vườn bên ngoài, cùng 2 tầng mang phong cách nhà hàng – cocktail bar sang trọng.
            
                Đến với Sơn Trà Retreat, thực khách sẽ sống với cảm xúc thật nhất, thông qua hương vị đa dạng của ly cocktail được pha chế bởi các nghệ sĩ điêu luyện. Ngoài ra, với thực đơn phong phú từ Á sang Âu mang phong cách phục vụ, chuẩn vị 5 sao. Sơn Trà Retreat tin rằng qua những món ăn cực ngon, sẽ làm bữa tiệc cảm xúc của bạn thêm trọn vẹn.
                ",
                "address" =>"11 Lê Văn Lương, Thọ Quang, Sơn Trà, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://media-cdn.tripadvisor.com/media/photo-s/19/f9/09/22/son-tra-retreat-garden.jpg",
                "user_id" =>3,
                "category_id" => 2,
            ],
            [
                 
                "name" => "Cá Lửa – Nhà hàng hải sản nổi tiếng Đà Nẵng giá rẻ",
                "description" => "Nhà hàng Cá Lửa không chỉ được biết đến bởi khách du lịch hay du khách nước ngoài, mà còn là điểm đến quen thuộc của người dân Đà Nẵng. Ngoài mang lại những món ăn đặc sản với vị ngọt, thơm ngon, đậm đà mang hương vị của biển cả. Cá Lửa còn được ưa chuộng bởi không gian sang trọng và hiện đại.
            
                Đến với Cá Lửa, ngoài thưởng thức những món ăn tươi ngon, bổ dưỡng cùng không gian rộng rãi. Bạn còn được trải nghiệm phong cách dịch vụ chuyên nghiệp, cao cấp hàng đầu tại Đà Nẵng. Với đội ngũ nhân viên phục vụ chuyên nghiệp, nhanh nhẹn sẽ đáp ứng mọi nhu cầu của bạn đầy đủ và trong thời gian sớm nhất. Cùng với đó là giá cả hết sức bình dân, chắc chắn sẽ không làm bạn thất vọng.
                ",
                "address" =>"04 Bình Minh 4, Bình Hiên, Hải Châu, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://diadiemdanang.vn/wp-content/uploads/2020/11/nha-hang-hai-san-ca-lua-da-nang-7.jpg",
                "user_id" =>2,
                "category_id" => 2,
            ],
            [
                 
                "name" => "Santori Hotel Danang Bay",
                "description" => "Là một khách sạn giá rẻ Đà Nẵng nằm giữa một không gian yên bình, thanh tịnh. Bao bọc bởi bán đảo Sơn Trà, biển xanh vịnh Đà Nẵng và đèo Hải Vân. Khách sạn Santori Hotel Danang Bay sẽ là nơi lý tưởng cho chuyến du lịch của bạn. Nếu bạn chưa biết đặt ở đâu, địa điểm nào thì liên hệ ngay với Santori Hotel nhé!
            
                Khách sạn này cũng có thể được xem là nhà nghỉ bình dân rẻ đẹp. Với có tầm nhìn trực tiếp ra biển Nguyễn Tất Thành. Chính là cơ hội để bạn được thỏa sức tắm “vitamin sea”. Hơn nữa, bãi biển này không quá đông đúc bởi khách du lịch. Vì thế, bạn sẽ có được những giây phút yên bình và nhẹ nhàng hơn.
                ",
                "address" =>"769 – 771 Nguyễn Tất Thành, Thanh Khê, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://cf.bstatic.com/xdata/images/hotel/max1024x768/222463008.jpg?k=7ed07544673e44438d4567e557348ab0e2125c244374b8b60f42fe8aece05c23&o=&hp=1",
                "user_id" =>1,
                "category_id" => 3,
            ],
            [
                 
                "name" => "SEN Bontique",
                "description" => "Tạo lạc tại khu phố Tây sầm uất nhất thành phố, khách sạn Sen Bontique mang lại một không gian hoàn toàn mới mẻ. Với thiết kế đơn giản, đậm chất văn hóa địa phương, Sen Bontique là một trong những khách sạn giá rẻ Đà Nẵng mang lại nhiều giá trị cho khách lưu trú.
            
                Khách sạn cung cấp cả phòng nghỉ ngắn hạn và căn hộ cho thuê dài hạn. Mỗi phòng nghỉ đều được trang trí tỉ mỉ và tinh tế. Đó là cả tấm lòng của những người làm nên không gian này, muốn gửi gắm yêu thương và sự tinh tế đến với khách lưu trú. Đồng thời tại đây có đầy đủ các tiện nghi như spa, bể bơi, gold… với nhiều khuyến mãi đặc biệt. Chắc chắn sẽ giúp bạn yêu thích thánh phố xinh đẹp này.
                ",
                "address" =>"53 An Thượng, Sơn Trà, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://media-cdn.tripadvisor.com/media/photo-s/0f/76/27/be/sen-boutique-hotel.jpg",
                "user_id" =>3,
                "category_id" => 3,
            ],
            [
                 
                "name" => "Le House Bontique Hotel",
                "description" => "Là một khách sạn giá rẻ Đà Nẵng, khách sạn Le House Bontique mang lại nhiều giá trị hơn bạn nghĩ. Khách sạn gần biển Mỹ Khê, chỉ cách biển vài phút đi bộ. Nơi đây sẽ mang đến một bầu không khí trong lành, mát rượi. Hơn nữa, thiết kế theo phong cách Pháp cổ điển, bạn sẽ tìm thấy vô số những góc check-in chanh sả chỉ với phạm vi khuôn viên khách sạn.
            
                Ngoài các phòng nghỉ được thiết kế độc đáo, Le Bontique còn mang đến chất lượng phục vụ tuyệt hảo. Sẽ khiến bạn không chỉ hài lòng mà còn tìm được sự thoải mái và thân thiện như ở nhà.
                ",
                "address" =>"85-87 Hà Bổng, Phước Mỹ,  Sơn Trà, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://pix10.agoda.net/hotelImages/984078/-1/2e380a419948fe6510b70d3efbc49697.jpg?ca=6&ce=1&s=1024x768",
                "user_id" =>2,
                "category_id" => 3,
            ],
            [
                 
                "name" => "Khách sạn Titan",
                "description" => "Thiết kế sang trọng, đơn giản mà tinh tế là những gì khách sạn Titan mang đến cho khách lưu trú. Mặc dù là khách sạn giá rẻ Đà Nẵng, Titan cung cấp đầy đủ các tiện nghi và tiện ích đi kèm trong suốt quá trình lưu trú của khách. Bạn có thể lựa chọn căn hộ có phòng khách và khu vực bếp riêng biệt để tận hưởng những giây phút ấm cúng, ngọt ngào cho chuyến đi.
            
                Ngoài ra, là khách sạn tại khu An Thượng. Khi lưu trú ở đây, bạn cũng có thể rảo bước trên con phố Tây sầm uất để thưởng thức thế giới ẩm thực đa dạng, phong phú. Chỉ cần đi bộ khoảng 5 phút, bạn đã có thể đến được thiên đường ẩm thực nơi đây.
                
                Đặc biệt, khách sạn cung cấp dịch vụ cho thuê xe đạp hoàn toàn miễn phí. Giúp bạn dễ dàng khám phá thành phố Đà Nẵng xinh đẹp hơn.
                ",
                "address" =>"Lô 102-104 Hồ Xuân Hương Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_345463/4b4b5dd999b17ab9df1307e4c894845b.jpg",
                "user_id" =>1,
                "category_id" => 3,
            ],
            [
                 
                "name" => "Khách sạn Hoàng Sa",
                "description" => "Được xây dựng theo tiêu chuẩn 3 sao với 46 phòng nghỉ. Hoàng Sa là một trong những khách sạn giá rẻ Đà Nẵng với chất lượng tốt.
            
                Tọa lạc trên tuyến đường từ cầu Sông Hàn hướng ra biển, khách sạn mang đến nhiều sự thuận tiện cho du khách. Bạn có thể dễ dàng tham quan trung tâm thành phố với nhiều điểm check-in nổi tiếng. Đồng thời cũng có thể thỏa sức thư giãn tại bãi biển Mỹ Khê đẹp nhất hành tinh.
                ",
                "address" =>"54-56 Dương Đinh Nghệ, Sơn Trà, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://media-cdn.tripadvisor.com/media/photo-p/09/88/bc/df/diane-p.jpg",
                "user_id" =>3,
                "category_id" => 3,
            ],
            [
                 
                "name" => "Dylan Hotel Da Nang",
                "description" => "Khách sạn Dylan cung cấp hệ thống phòng nghỉ hiện đại, thoải mái. Khách sạn giá rẻ Đà Nẵng này mang đến cho khách cư trú không gian sang trọng. Tạo cảm giác thư giãn tối đa. Hơn nữa, mọi trang thiết bị trong phòng nghỉ đều được lựa chọn kỹ lưỡng. Nhằm mang lại trải nghiệm tốt nhất cho du khách.
            
                Tọa lạc trong khu vực đang phát triển các dịch vụ du lịch, Dylan sẽ đem đến nhiều sự tiện lợi hơn. Bạn có thể dễ dàng đi đến bờ biển Mỹ Khê xinh đẹp và ngắm trọn những khoảnh khắc bình minh rực rỡ. Cũng có thể dễ dàng đi đến khu phố Tây sầm uất. Và trải nghiệm thiên đường ẩm thực đa dạng, phong phú.
                ",
                "address" =>"93-95 Hà Bổng,  Sơn Trà, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://images.trvl-media.com/lodging/19000000/19000000/18993200/18993196/37fa7f19.jpg?impolicy=resizecrop&rw=670&ra=fit",
                "user_id" =>2,
                "category_id" => 3,
            ],
            [
                 
                "name" => "Jolia Hotel Đà Nẵng",
                "description" => "Khách sạn giá rẻ Đà Nẵng Jolia Hotel tọa lạc tại vị trí đắc địa tại khu phố Tây sầm uất. Các phòng nghỉ được thiết kế sang trọng, rộng và thoáng. Ngoài ra, Jolia còn cung cấp căn hộ cho thuê dài hạn. Đáp ứng nhu cầu sinh sống và công tác dài ngày của khách đến Đà Nẵng.
            
                Từ đây, bạn có thể dễ dàng bắt trọn những khoảnh khắc rực rỡ của thành phố mỗi sớm bình minh hay chiều tà. Hơn nữa, khu phố Tây An Thượng là thiên đường ẩm thực mà bạn không nên bỏ lỡ.
                ",
                "address" =>"35-37 An Thượng 29, Ngũ Hành Sơn, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://bizweb.dktcdn.net/thumb/grande/100/054/188/products/khach-san-jolia-hotel-and-apartment-da-nang-0963884383-13.jpg?v=1561193811307",
                "user_id" =>1,
                "category_id" => 3,
            ],
            [
                 
                "name" => "Palmier Hotel",
                "description" => "Khách sạn giá rẻ Đà Nẵng Palmier cung cấp các phòng nghỉ sang trọng, tươi sáng. Với sự kết hợp giữa hai màu trắng và xanh, bạn sẽ được sạc đầy năng lượng bởi sự tươi mới và trẻ trung.
            
                Khách sạn Palmier tọa lạc trên bờ sông Hàn. Mang đến bạn khung cảnh nên thơ và yên bình của dòng sông Hàn thơ mộng. Palmier cung cấp các hạng phòng khác nhau với thiết kế phù hợp cho từng nhu cầu riêng. Mỗi phòng đều được trang bị tiện nghi hiện đại với tầm nhìn rộng, thoáng.
                ",
                "address" =>"305 Trần Hưng Đạo, Sơn Trà, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://fvgtravel.com.vn/uploads/article/palmier-hotel-danang-khach-san-3-sao-gia-re-da-nang-1576661453.jpg",
                "user_id" =>3,
                "category_id" => 3,
            ],
            [
                 
                "name" => "Herriott Hotel",
                "description" => "Herriott là khách sạn giá rẻ Đà Nẵng tọa lạc trong khu vực từ giữa cầu Rồng hướng ra biển. Mặc dù vị trí không nổi bật, nhưng kiến trúc và chất lượng dịch vụ tại đây sẽ khiến bạn hơn cả hài lòng.
            
                Khách sạn được thiết kế theo phong cách hiện đại. Gam màu tươi sáng sẽ mang đến bạn nguồn năng lượng dồi dào để sẵn sàng khám phá thành phố biển đáng mến. Hơn nữa, mỗi phòng nghỉ đều được trang bị đầy đủ thiết bị. Giúp kỳ nghỉ của bạn trở nên tiện lợi hơn.
                ",
                "address" =>"7-8 lê Văn Quí, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://pix10.agoda.net/hotelImages/3582444/-1/2d8f768a0eda73078ed4886e281a1d19.jpg?ca=6&ce=1&s=1024x768",
                "user_id" =>2,
                "category_id" => 3,
            ],
            [
                 
                "name" => "Clivia Hotel",
                "description" => "Clivia là một trong những homestay giá rẻ Đà Nẵng nhưng với thiết kế vô cùng sang trọng. Từ khu vực lễ tân cho đến phòng nghỉ hay các khi tiện ích khác. Tất cả đều mang một màu sắc tươi sáng, yên bình.
            
                Bên cạnh đó, chất lượng dịch vụ tại Clivia sẽ luôn khiến bạn hài lòng. Không chỉ thái độ phục vụ thân thiện. Mà chất lượng dịch vụ và sản phẩm được cung cấp bởi Clivia cũng sẽ khiến kỳ nghỉ của bạn trở nên hoàn hảo hơn.
                ",
                "address" =>"18-20 đường Loseby, An Hải Bắc, Sơn Trà, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTVdCnLOy2CRmRgb0onuoD9F1vW3aKt3wPcM_UGsVk4fAjuzBAL8StlkJ_3FTpiOJNJMW8&usqp=CAU",
                "user_id" =>1,
                "category_id" => 3,
            ],
            [
                 
                "name" => "Đà Nẵng Square",
                "description" => "Đây là trung tâm thương mại nằm ở trung tâm thành phố Đà Nẵng. Tại đây có rất nhiều dịch vụ phục vụ khác du lịch. Trung tâm có diện tích 4000m2 và có nhiều cửa hàng đa dạng các mặt hàng như mỹ phẩm, thời trang, ẩm thực, khu vui chơi cho trẻ em.
            
                Không chỉ là nơi có nhiều dịch vụ thương mại hấp dẫn, Đà Nẵng Square còn có đội ngũ nhân viên rất nhiệt tình, được đào tạo bài bản chuyên nghiệp. Đem lại sự thân thiện và cảm giác thoải mái cho khách hàng. Đối với khách du lịch, Đà Nẵng Square chính là thiên đường mua sắm, giúp bạn thỏa sức mua sắm thả ga. Đà Nẵng Square chính là một thành phần góp phần tạo nên một Đà Nẵng hiện đại, rực rỡ sắc màu.
                ",
                "address" =>"35 Thái Phiên, Phước Ninh, Q. Hải Châu, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://toplist.vn/images/800px/da-nang-square-358405.jpg",
                "user_id" =>3,
                "category_id" => 4,
            ],
            [
                 
                "name" => "Vincom Plaza Đà Nẵng",
                "description" => "Chắc các bạn chẳng còn xa lạ với tập đoàn Vincom phải không nào. Chỉ cần chắc đến Vincom là chúng ta có thể phần nào biết được các dịch vụ đẳng cấp tại đây rồi. Trung tâm thương mại Vincom Plaza nằm ở số 496 Ngô Quyền, An Hải Bắc, có diện tích gần 3000m2. Đây là một trong những trung tâm thương mại lớn nhất và cũng hiện đại hàng đầu Đà Nẵng hiện nay.
            
                Ngoài các dịch vụ như thời trang, mỹ phẩm, siêu thị, điện máy, khu vui trơi giải trí, ở đây còn có hệ thống rạp chiếu phim CGV rất rộng liền kề với khu ẩm thực hấp dẫn từ các thương hiệu nổi tiếng như: Gogi House, Sumo BBQ, Lyn’s milk tea, Pizza Hut.  Hầu hết các mặt hàng điện tử, siêu thị cũng đều là của tập đoàn Vincom.
                ",
                "address" =>"496 Ngô Quyền, An Hải Bắc, Sơn Trà, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://media.foody.vn/res/g15/147599/prof/s/foody-mobile-banner-03-jpg-792-635712752230674318.jpg",
                "user_id" =>2,
                "category_id" => 4,
            ],
            [
                 
                "name" => "Danavi Mart",
                "description" => "Danavi Mart là một trung tâm mua sắm quen thuộc của nhiều người dân Đà Nẵng. Tuy có diện tích không quá lớn nhưng đơn vị vẫn phát triển rất tốt và có chỗ đứng trong lòng khách hàng. Danavi Mart chính là mô hình siêu thị quy mô nhỏ với nhiều sản phẩm đa dạng khác nhau. Rất nhiều đặc sản nổi tiếng của Đà Nẵng cũng như các loại hải sản tươi sống cũng được bày bán tại đây. Các sản phẩm đều có nguồn gốc xuất xứ rõ ràng và đảm bảo chất lượng tốt.
            
                Danavi Mart cung cấp đa dạng các sản phẩm cho khách hàng thoải mái mua sắm. Sản phẩm tại đây luôn có giá cả cạnh tranh so với thị trường. Đội ngũ nhân viên phục vụ tận tình, chuyên nghiệp. Các gian hàng luôn được bày trí gọn gàng để khách hàng dễ dàng tìm thấy sản phẩm.
                ",
                "address" =>"46 Phan Đình Phùng, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://media.diadiem247.com/uploads/thumb/2021/07/29/sieu-thi-danavi-mart-le-dinh-ly.jpg",
                "user_id" =>1,
                "category_id" => 4,
            ],
            [
                 
                "name" => "Parkson Đà Nẵng",
                "description" => "Parkson Đà Nẵng nằm ở tọa lạc tại khu phức hợp Vĩnh Trung, số 255 – 257 đường Hùng Vương, quận Hải Châu, một trong những tuyến đường đẹp nhất ở Đà Nẵng. Parson Đà Nẵng là nơi thường tổ chức nhiều chương trình khuyến mãi nên thu hút rất nhiều khách hàng đến mua sắm và thăm quan.
            
                Parkson Đà Nẵng được thiết kế với 4 tầng. Tầng 1 là khu mua sắm mỹ phẩm, trang sức, nước hoa như: The body shop, Lancom, Dior, O’HUI,… Tầng 2 là khu thời trang cho cả nam và nữ như Valentino, Elle, G2000, Polo World.. Tầng 3 là khu đồ thể thao, các mặt hàng điện tử, đồ dùng cho trẻ em và các cửa hàng nội thất. Tầng 4 là khu vui chơi kết hợp với ẩm thực.
                ",
                "address" =>"Vĩnh Trung Plaza B, 255-257 Hùng Vương, Hải Châu 2, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://media.foody.vn/res/g13/125092/prof/s/foody-mobile-pa-11-2-jpg-190-635750755440025693.jpg",
                "user_id" =>3,
                "category_id" => 4,
            ],
            [
                 
                "name" => "JOLY MART",
                "description" => "Nếu đang tìm kiếm một trung tâm thương mại Đà Nẵng thì JOLY MART là một gợi ý dành cho bạn. Siêu thị xây dựng việc kinh doanh dựa trên tiêu chuẩn cao về chất lượng, an toàn và vệ sinh thực phẩm. JOLY MART có danh mục sản phẩm đa dạng. Đem tới những sản phẩm chất lượng tốt nhất với giá trị cao cho cuộc sống là mục tiêu của đơn vị.
            
                Siêu thị ưu tiên cung cấp những loại thực phẩm tốt và cải thiện quy trình chế biến giúp cải thiện cuộc sống của khách hàng. Đội ngũ nhân viên được đào tạo nghiệp vụ tư vấn chuyên nghiệp 24/7, trẻ trung và năng động, nhiệt huyết với từng sản phẩm. Đơn vị cam kết mang đến những trải nghiệm mua sắm tuyệt vời nhất cho khách hàng.
                ",
                "address" =>"31 Yên Bái, Hải Châu 1, Hải Châu, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://wheretovietnam.com/wp-content/uploads/Joly.jpg",
                "user_id" =>2,
                "category_id" => 4,
            ],
            [
                 
                "name" => "Lotte Mart Đà Nẵng",
                "description" => "Lotte Mart Đà Nẵng là trung tâm thương mại Đà Nẵng tiếp theo mà chúng tôi muốn giới thiệu cho bạn. Đơn vị là công ty của Tập đoàn LOTTE Hàn Quốc. Lotte Mart Đà Nẵng cung cấp mọi nhu cầu cho người dân từ mua sắm đến xem phim, ăn uống, các khu vui chơi.
            
                Các mặt hàng bày bán tại đây đều là hàng đạt chất lượng cao, đã qua kiểm định rõ ràng. Lotte Mart Đà Nẵng mong muốn đem đến những sản phẩm và dịch vụ tốt nhất để phục vụ khách hàng. Các nhân viên ở đây làm việc chuyên nghiệp và đầy thân thiện.
                ",
                "address" =>"6 Nại Nam, Hoà Cường Bắc, Hải Châu, Đà Nẵng",
                "rating"=> 0,
                "image"=>"",
                "user_id" =>1,
                "category_id" => 4,
            ],
            [
                 
                "name" => "GO! Đà Nẵng",
                "description" => "GO! Đà Nẵng có tên gọi cũ là BIG C – địa chỉ mua sắm quen thuộc của người tiêu dùng Đà Nẵng. Trung tâm mua sắm này nằm tại vị trí đắc địa tại 255 – 257 Hùng Vương, Quận Thanh Khê, Đà Nẵng, bên cạnh chợ Cồn. Tại đây chủ yếu là cung cấp các mặt hàng thực phẩm và thiết bị cho người dân. Khu vực bán hàng khổng lồ này được chia làm 2 tầng. Tầng trệt gồm các cửa hàng cho thuê chuyên bán các sản phẩm có thương hiệu nổi tiếng. Tầng trên là siêu thị với số lượng hàng hóa khổng lồ.
            
                Tổng hợp 5 ngành dịch vụ tại GO! Đà Nẵng là : Thực phẩm tươi sống, thực phẩm khô, may mặc phụ kiện, đồ gia dụng, vật dụng trang trí và nội thất. Mặt hàng ở đây khá đa dạng, giá thành hợp lí. Nhân viên phục vụ nhiệt tình và phong cách làm việc khá chuyên nghiệp. Đây là địa chỉ mua sắm được nhiều người dân tin tưởng lựa chọn.
                ",
                "address" =>"TTTM Vĩnh Trung, 255-257 Hùng Vương, Thanh Khê, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://danang.plus/wp-content/uploads/2019/11/sieu-thi-go-da-nang.png",
                "user_id" =>3,
                "category_id" => 4,
            ],
            [
                 
                "name" => "Indochina Riverside Mall",
                "description" => "Thêm một trung tâm thương mại Đà Nẵng dành cho bạn nữa là Indochina Riverside Mall. Trung tâm này có vị trí tọa lạc ngay ở trung tâm thành phố nên thu hút được nhiều khách hàng. Điểm nhấn của đơn vị này là có kiến trúc đặc sắc hưởng trọn vẹn khung cảnh Sông Hàn. Tại đây có nhiều tiện ích dành cho khách hàng như: Khu mua sắm hàng hiệu, cà phê, làm đẹp, khu trò chơi và ẩm thực đặc sắc.
            
                Indochina Riverside Mall là cái tên còn khá mới mẻ tại Đà Nẵng. Tuy chỉ mới thành lập nhưng trung tâm đang dần khẳng định vị thế của mình khi trở thành nhà phân phối của nhiều sản phẩm có thương hiệu nổi tiếng. Nhiều thương hiệu cao cấp, nhà hàng, cà phê nổi tiếng như Pizza 4P’s, El Gaucho, Dookki, Highlands Coffee, Pedro, Giordano…đều có mặt ở đây. Trung tâm hy vọng đem đến cho khách hàng sự thoải mái khi lựa chọn sản phẩm và dịch vụ ở đây.
                ",
                "address" =>"74 Bạch Đằng, Hải Châu, Đà Nẵng",
                "rating"=> 0,
                "image"=>"http://csdl.vietnamtourism.gov.vn/uploads/logo/01_3/CSDLDIEMMUASAM2020/DaNang/TTTMIndochinaRiverside/foody-trung-tam-thuong-mai-indochina-riverside-834-637123606957245552.jpg",
                "user_id" =>2,
                "category_id" => 4,
            ],
            [
                 
                "name" => "Co.opmart Đà Nẵng ",
                "description" => "Không thể thiếu trong danh sách này là siêu thị Co.opmart Đà Nẵng. Đây là một trong những trung tâm mua sắm hàng đầu tại thành phố biển. Cả hai cơ sở siêu thị Co.opmart tại Đà Nẵng đều được thiết kế hiện đại và đầu tư trang thiết bị tiên tiến. Các mặt hàng hóa tại đây rất đa dạng, phong phú. Tất cả đều có xuất xứ rõ ràng, đảm bảo chất lượng tốt.
            
                Siêu thị có cơ cấu hàng Việt hơn 90% tổng số lượng sản phẩm. Bao gồm thực phẩm tươi sống, thực phẩm công nghệ, hóa mỹ phẩm, thời trang và đồ dùng gia dụng cùng nhiều dịch vụ tiện ích. Đội ngũ nhân viên luôn làm việc nhiệt tình và luôn quan tâm khách hàng. Siêu thị cũng thường xuyên tổ chức các chương trình khuyến mãi, giảm giá cực kỳ hấp dẫn cho khách hàng.
                ",
                "address" =>"478 Điện Biên Phủ, Thanh Khê Đông, Thanh Khê, TP. Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://images.foody.vn/res/g65/641598/prof/s1242x600/foody-mobile-m-mat-jpg-939-636245845441837676.jpg",
                "user_id" =>1,
                "category_id" => 4,
            ],
            [
                 
                "name" => "Pavo Cuisine & Mixology (Pavo Lounge)",
                "description" => "Một mô hình mới lạ lần đầu tiên xuất hiện tại Đà Nẵng và gây dựng thương hiệu trở thành một nơi đáng đến của thành phố đáng sống, Pavo Cuisine & Mixology.
            
                Pavo Cuisine & Mixology (Pavo Lounge) chính là điểm quẩy “siêu HOT” dành cho các “dân chơi” bởi không gian cực kì sang trọng, rộng rãi mang xu hướng Thiên Nhiên Địa 
                Trung Hải, quầy Bar được thiết kế 360 độ nằm ngay giữa vị trí trung tâm dành cho các khách hàng muốn hòa mình vào thế giới cocktails và bắt đầu cuộc hành trình truy tìm những loại đồ uống “chuẩn gu” với mình.
                
                Pavo Lounge luôn “chơi lớn” khi trình làng đến các “homie” hàng loạt Show mới lạ được diễn ra hằng ngày như Tiết mục Biễn Diễn Bartender Flair , Dàn “Dars” Chuyên Nghiệp cứ phải gọi là “Siêu Hot Siêu Sexy”, Vũ Điệu Xiếc Trên Không đẳng cấp...được trình diễn ngay trung tâm bục sân khấu chính giữa có thể chiêm ngưỡng được từ các góc ngồi khác nhau. Ngoài ra, nơi đây còn là điểm biểu diễn “chạy show” liên tục của nhiều DJ chuyên nghiệp, ca sĩ nổi tiếng. Thế mới nói Pavo Lounge không hổ danh là sự lựa chọn hàng đầu dành cho các “dân chơi”.
                
                Ngoài không gian đẳng cấp, đồ uống cocktails chỉnh chu, đa dạng các loại rượu vang, champagne,… Pavo Lounge còn là nơi trải nghiệm thưởng thức ẩm thực Nhật cao cấp được phục vụ chuyên nghiệp và đa dạng.
                
                Nói về dòng âm nhạc tại Pavo Lounge, bạn có thể chìm đắm trong không khí đầy sôi động từ những bản nhạc hot trend của các dòng nhạc khác nhau như deep house, hiphop, R&B…
                
                Sự kết hợp của không gian cùng với âm nhạc, ẩm thực và ánh sáng hoàn hảo hứa hẹn là điểm vui chơi, giải trí xứng đáng đồng tiền bát gạo bỏ ra mà du khách không nên bỏ lỡ.
                ",
                "address" =>"11B Trần Phú, quận Hải Châu, TP. Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://chillvietnam.com/wp-content/uploads/elementor/thumbs/pavo-cuisine-mixology-pavo-lounge-quyen-ru-va-vo-cung-noi-bat-1666390537-pwjnf1cscds0m98r7dnqwam1mozn6cz8g1kreo2ai0.jpg",
                "user_id" =>3,
                "category_id" => 5,
            ],
            [
                 
                "name" => "Chicland Lounge",
                "description" => "Tọa lạc tại tầng mái của Chicland Lounge – một công trình xanh nổi bật trên đường Võ Nguyên Giáp, Chicland Lounge mang một nét hài hòa đặc sắc giữa một không gian xanh mát, tràn ngập hương vị của biển cả và đây cũng là một trong những quán bar đang hot trong thời gian gần đây tại Đà Nẵng.
            
                So với nhiều Lounge cùng quy mô thì Chicland Lounge có những nét độc đáo đầy riêng biệt không lẫn vào đâu được. Chẳng phải là ồn ào hay náo nhiệt, Chicland Lounge thích hợp với những ai yêu thích sự nhẹ nhàng, tinh tế và thời thượng.
                
                Với sự pha trộn giữa giai điệu gió biển nồng nàn, không gian xanh và những thức uống mixology hay những món ăn kèm finger food mang một chút vị nhiệt đới cùng rất nhiều nét văn hóa bản địa trong đó, Chicland Lounge chắc chắn sẽ mang đến cho bạn những trải nghiệm đầy thú vị.
                
                Đặc biệt, Chicland Lounge có dạng rooftop với không gian xanh mát, view hướng ra biển Mỹ Khê. Không gian tại đây vô cùng thích hợp để bạn có thể thư giãn, trò chuyện, gặp gỡ bạn bè. Toàn bộ cảnh đẹp của bãi biển Mỹ Khê sẽ được thu gọn trong tầm mắt với điểm nhìn từ trên cao xuống.
                
                Ngoài việc sở hữu một không gian đắc địa thì Chicland Lounge sẽ làm mê mẩn bất cứ vị khách nào đến đây bởi những loại cocktail và các món ăn độc đáo nhất. Đồ uống chủ đạo tại đây là các loại cocktail vị Việt, craft beer, kèm theo rượu vang và rượu mạnh. Cocktail tại Chicland Lounge chắc chắn sẽ làm bạn bất ngờ với những phong cách chẳng giống bất cứ đâu. Cocktail được pha chế mang đậm vị Việt nhưng cũng rất lạ thường. Những bạn yêu thích cocktail hay sành sỏi về thức uống spirit sẽ bị chinh phục bởi những hương vị này.
                
                Bên cạnh những món cocktail, các món ăn tại Chicland cũng độc đáo và đặc sắc không kém. Món ăn ở đây chủ yếu là đồ ăn nhẹ Tapas. Nhưng được chế biến theo phong cách Việt Nam. Bên cạnh đó, snack, Sharing Platter hay những món Dessert với hương vị tuyệt vời cũng rất đáng để bạn nếm thử khi đến đây.
                
                Với thiết kế không gian mở thoáng đãng, bao quát toàn thành phố, lại nằm trên trục đường biển Võ Nguyễn Giáp, ngồi tại tại Chicland Lounge bạn sẽ được tận hưởng những làn gió tươi mát từ biển cả. Vào một ngày đẹp trời nào đó, hãy dành chút thời gian đến với Chicland Lounge, ngồi nhấm nháp ly cocktail đặc biệt được chế biến từ trái cây tươi và thưởng ngoạn cảnh sắc hoàng hôn huyền ảo, chắc chắn sẽ mang đến cho bạn những kỷ niệm khó quên!
                ",
                "address" =>"210 Võ Nguyên Giáp, bãi biển Mỹ Khê, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://media.foody.vn/res/g92/919917/prof/s/foody-upload-api-foody-mobile-screen-shot-2019-05--190521152955.jpg",
                "user_id" =>2,
                "category_id" => 5,
            ],
            [
                 
                "name" => "YACHY",
                "description" => "Tọa lạc trên “nóc” du thuyền Marina diễm lệ trên dòng sông Hàn, với tầm view 360 độ tới tất cả iconic của thành phố, YACHY là mô hình kết hợp club lounge đầu tiên tại Đà Nẵng, được mệnh danh là “Miami của Việt Nam”.
            
                YACHY sở hữu không gian sang trọng, đẳng cấp với không khí tiệc tùng cháy hơn bao giờ hết. Đây cũng là nơi diễn ra nhiều sự kiện âm nhạc, giải trí hoành tráng sự góp mặt của những ngôi sao sáng nhất Showbiz.
                
                Đến YACHY để thưởng thức champagne hảo hạng, lắc lư, nhún nhảy trong không khí party “đu đưa” sang chảnh không bao giờ nhàm chán. Bởi YACHY không ngừng tạo nên những event độc đáo để mang đến cho giới trẻ Đà Thành một sân chơi độc nhất vô nhị, đẳng cấp hàng đầu.
                
                Vì đẳng cấp chính là YACHY – Một địa điểm tuyệt vời đang chờ đợi những dân chơi chuộng lifestyle sang trọng, không thua kém bất kỳ celebs “xịn xò” nào.
                ",
                "address" =>"Tầng 5 - 6, Du Thuyền Marina, TP. Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://vietnamnightlife.com/uploads/images/2022/07/1657597776-single_product2-yachyloungeclubdanangcoverphoto.png",
                "user_id" =>1,
                "category_id" => 5,
            ],
            [
                 
                "name" => "Sophie Mixology ",
                "description" => "Sẽ không có gì tuyệt vời hơn khi được đến Sophie Mixology 150 Bạch Đằng, Đà Nẵng, một viên đá quý lung linh sắc màu lung linh cả bầu trời NightLife thành phố Đà Nẵng. Khoác trên mình khung cảnh bao quát chễm chệ nhìn trực quan được cầu sông Hàn và cầu Rồng, một chiếc bar lounge độc tôn view “triệu đô” ở nơi đây.
            
                Trong quãng thời gian gần đây, Sophie rất lấy làm tự tin khi là 1 tụ điểm ăn chơi đứng đầu trong list “top trending” của các dân chơi Đà thành. Biểu hiện chính là tình trạng “tắc đường” diễn ra hằng đêm. Gọi Sophie là sông Bạch Đằng, vì lúc nào cũng luôn trong trình trạng đặt cọc… bàn !!!
                
                Mỗi tháng, Sophie luôn được chọn là nơi “đặt chân” của các DJ “gạo cội” Việt Nam, các sự kiện âm nhạc của các nghệ sĩ hàng đầu showbiz như: Karik, Tlinh, Quân A.P, Wren Evans,… Ngoài ra, vào mỗi tối các event độc đáo, thú vị luôn tạo được không khí sôi động, náo nhiệt mà không nơi nào có được.
                
                Chìm đắm trong visual đỉnh cao, các bản mixtape với tiếng bass giòn tan “xào nấu” bởi các DJ TGiF sẽ làm bùng nổ các buổi tiệc sinh nhật kèm theo lớp “dạy nhảy” bởi các dancer quyến rũ chắc chắn sẽ làm các dân chơi đứng ngồi không yên.
                
                Sẵn sàng “quẩy tung nóc” cùng với Sophie chưa nào?
                ",
                "address" =>"150 Bạch Đằng, quận Hải Châu, TP. Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://media-cdn.tripadvisor.com/media/photo-s/25/18/78/c7/sophie-mixology-150-b.jpg",
                "user_id" =>3,
                "category_id" => 5,
            ],
            [
                 
                "name" => "Sky 36",
                "description" => "Nếu New Phương Đông được mệnh danh là quán Bar lâu đời và lớn nhất Việt Nam thì Sky 36 sẽ là quán Bar cao nhất Việt Nam với độ cao 166m. Nằm trên tầng 35, 36 của khách sạn Novotel Da Nang Premier Han River do tập đoàn Sun Group làm chủ, có thể nói Sky 36 sở hữu một vị trí đáng mơ ước.
            
                Mặc dù đi vào hoạt động chưa lâu nhưng Sky 36 đã trở thành điểm đến cực kỳ thu hút của giới trẻ cũng như các du khách khi đến Đà Nẵng. Với diện tích hơn 1000m², không gian của Sky 36 là sự kết hợp hài hòa giữa bar ngoài trời, bed sofa và khu vực Vip Lounge bên trong. Tất cả đều được thiết kế lịch lãm, mỗi khu vực với những decor khác nhau cùng ánh sáng xanh bao trùm làm toát lên một thế giới giải trí đẳng cấp, sang trọng. Khiến cho ai bước vào cũng cảm thấy dường như mình biến thành những vị thượng khách lịch lãm, sành điệu.
                
                Không những phần thiết kế độc đáo mà từ vị trí này, các bạn có thể ngắm cảnh mặt trời lặn đẹp đến say đắm, buổi tối bạn sẽ được chiêm ngưỡng Đà Nẵng kiều diễm trong bộ váy đen điểm xuyết những đốm đèn xanh đỏ vừa huyền ảo vừa lộng lẫy khiến ai cũng muốn yêu ngay thành phố này. Chưa dừng lại ở đó, bạn còn được ngắm sông Hàn lặng lẽ vắt ngang giữa lòng thành phố cùng những cây cầu tuyệt mỹ.
                
                Và bạn sẽ càng muốn đến đây nữa nếu biết rằng, dàn âm thanh ánh sáng của Sky 36 tất cả đều được trang bị rất tối tân. Âm thanh ở đây được đánh giá là rất đã khiến cho ai dù uống Cocktail thôi cũng sẽ không kiềm lòng được mà đung đưa cơ thể theo từng nhịp xập xình.
                
                Âm nhạc ở đây được dẫn dắt bởi những DJ chuyên nghiệp với dòng nhạc thịnh hành: EDM, Electro, Progressive, Hip-Hop, R&B, Techno,... Chương trình sẽ nóng dần về đêm, không những thế bạn còn được nhận những phần quà hấp dẫn theo quy định của Bar nữa. Chất lượng phục vụ chu đáo, nhân viên được trang bị đèn pin nên nếu được nhờ chụp hình thì các bạn nhân viên sẽ chiếu sáng để có được những tấm hình thêm lung linh.
                
                Thực đơn phong phú, đa dạng với những món ăn nhẹ, món Cocktail thơm nồng, những màn trình diễn cuốn hút, đẹp mắt của những Bartender hàng đầu đảm bảo sẽ khiến bạn đã đến một lần sẽ muốn đến nhiều lần sau đó nữa. Tuy nhiên có một điểm đáng chú ý đó là khi đến đây tất cả các bạn phải mang giày và các bạn nam phải mang quần dài thì mới được bảo vệ cho vào.
                ",
                "address" =>"Tầng 36, số 36 đường Bạch Đằng, phường Thạch Thang, quận Hải Châu, TP. Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://images.foody.vn/res/g9/84268/prof/s576x330/foody-mobile-36-jpg-769-636350124519283976.jpg",
                "user_id" =>2,
                "category_id" => 5,
            ],
            [
                 
                "name" => "New Phương Đông Club",
                "description" => "Nhắc đến Bar ở Đà Nẵng mà không kể New Phương Đông Club thì quả là một thiếu sót quá lớn bởi đây là quán Bar rất nổi tiếng đã gắn liền với thành phố này 23 năm. Một con số vô cùng kỷ lục mà chưa có vũ trường nào tại Việt Nam có thể vượt qua. Nằm tại số 20 đường Đống Đa, quận Hải Châu, thành phố Đà Nẵng, New Phương Đông dễ dàng được nhận ra bởi mặt tiền rộng lớn với thiết kế bề ngoài nổi bật, hoành tráng. Sở hữu tổng diện tích lên tới 2000m² với sức chứa hơn một ngàn người đã giúp cho New Phương Đông trở thành quán Bar lớn nhất Việt Nam.
            
                Bước chân vào bên trong, bạn sẽ tận mắt chứng kiến một sân khấu hoành tráng nằm chính giữa với ba tầng biểu diễn. Sân khấu được trang bị màn hình Led có thể thay đổi hình ảnh một cách đa dạng, linh hoạt. Tùy theo từng tiết mục mà bục biểu diễn sẽ được thả từ trên xuống hoặc đưa từ dưới lên khiến cho khán giả bất ngờ, thích thú. Điểm tạo nên sự nổi tiếng của New Phương Đông có lẽ chính là hệ thống âm thanh và ánh sáng hiện đại, hoạt động với công suất lớn đảm bảo cho tiếng nhạc len lỏi trong mọi góc ngách để ai cũng có thể nhún nhảy theo từng điệu nhạc.
                
                Nhạc của Phương Đông được các DJ chuyên nghiệp chơi rất sôi động, đặc biệt là dòng nhạc Nonstop với âm bass khá mạnh khiến cho bất cứ ai dù ngoài thế giới kia có dịu dàng, rụt rè đến đâu khi bước vào đây cũng phải lắc lư theo từng giai điệu. Hằng đêm đều có những chương trình ca nhạc đặc sắc do những ca sĩ nổi tiếng thể hiện, những màn trình diễn được chế tác dành riêng cho New Phương Đông sẽ khiến cho bạn không ngừng hát theo những ca khúc quen thuộc.
                
                New Phương Đông Club với menu đồ uống đa dạng, thức ăn mang hương vị đẳng cấp, số lượng vũ công lên đến con số hàng chục và đội ngũ nhân viên chuyên nghiệp cùng chương trình được liên tục thay đổi phù hợp với từng đối tượng của mỗi tối đảm bảo sẽ mang đến cho bạn những cảm xúc hoàn toàn mới lạ. Và nếu đi đông thì hãy điện thoại đặt chỗ trước nhé!
                ",
                "address" =>"Số 20 đường Đống Đa, quận Hải Châu, TP. Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://monngondathanh.com/wp-content/uploads/2017/06/New-Ph%C6%B0%C6%A1ng-%C4%90%C3%B4ng-%C4%90%C3%A0-N%E1%BA%B5ng-1.jpg",
                "user_id" =>1,
                "category_id" => 5,
            ],
            [
                 
                "name" => "On The Radio Bar",
                "description" => "On The Radio có mặt đã lâu nhưng đến nay vẫn giữ vững phong độ, không những thế các bạn trẻ còn đến đây ngày một đông hơn. Quán có độ cách âm rất tốt bởi vậy nên khi vừa mới đến, nhìn thấy cánh cửa đóng kín bạn sẽ thấy không có gì thu hút lắm. Nhưng đừng vội, một khi bạn đẩy cánh cửa đó thì đằng sau nó là một không gian thực sự tuyệt vời khiến bạn muốn lao vào ngày để hòa cùng sự sôi động đó. Khi bước vào, đập ngay vào mắt bạn là bàn bida dành cho những vị khách muốn chơi vài ván để giảm Stress.
            
                Không gian của quán được thiết kế mang phong cách ấm áp, gần gũi. Nếu bạn đến đây vào những ngày cận kề Giáng Sinh này, bạn sẽ thấy rạo rực vì không khí Noel tràn ngập quán. Góc quán, được thiết kế một mô hình nhà theo phong cách phương Tây, trước cửa nhà là cây thông noel và chú người tuyết có cái mũi dài, đội chiếc mũ màu đỏ ngộ nghĩnh. Đến On The Radio không chỉ được đắm chìm trong âm nhạc mà bạn còn có được những bức hình đón chào Giáng Sinh cực kỳ lung linh.
                
                Thực đơn món phong phú, đồ uống có sự đầu tư về hình thức với giá vô cùng hợp lý. Không những thế nhạc được chơi ở On The Radio còn đáp ứng được những gout âm nhạc khác nhau của mọi người. Nếu bạn là người thích không gian lãng mạn thì bạn nên đến đây vào những ngày từ thứ hai đến thứ sáu để được thưởng thức những bản tình ca Ballad, Country được thể hiện bằng những giọng ca ngọt ngào, sâu lắng. Nếu bạn thích sự sôi động thì hãy tìm đến quán vào thứ bảy và chủ nhật để được quán chiêu đãi những tiết mục Rock cực kỳ cháy lửa. Và sau 10h tối là lúc bạn thể hiện tài năng ca hát của mình.
                
                Radio Band của quán ngoài những vocal được nhiều người yêu thích còn có những tay Guitar với kỹ năng điêu luyện có thể chơi đàn khi nó được để sau đầu. Chưa hết, quán còn là nơi dừng chân của những tour diễn xuyên Việt của những ban nhạc nổi tiếng như Cá Hồi Hoang với những màn trình diễn chuyên nghiệp. Bar thường xuyên có những ưu đãi cực kỳ hấp dẫn. Hiện nay, quán đang chạy chương trình khuyến mãi tặng 1 Jug Cocktail 1L tự chọn dành tặng cho bàn có 4 bạn nữ trở lên. Chương trình áp dụng trước 22h vào mỗi thứ ba hàng tuần. Với ai thích sự gần gũi thì On The Radio sẽ là điểm đến hợp lý để bạn thỏa sức thể hiện đam mê âm nhạc của mình.
                ",
                "address" =>"Số 76 đường Thái Phiên, quận Hải Châu, TP. Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://media.foody.vn/res/g10/97599/prof/s/foody-mobile-foody-album10633454_-822-635495004190002207.jpg",
                "user_id" =>3,
                "category_id" => 5,
            ],
            [
                 
                "name" => "Bamboo Bar",
                "description" => "Bamboo Bar nằm khiêm tốn một góc phố, nơi giao nhau giữa đường Bạch Đằng và Thái Phiên, phía trước là dòng sông Hàn thơ mộng. Khi đến đây, đảm bảo bạn sẽ thấy thích với phong cách thiết kế chủ yếu bằng tre nứa tuy đơn giản nhưng mang lại cảm giác mộc mạc, yên bình.
            
                Với diện tích nhỏ nhắn, Bamboo Bar đã rất thông minh khi thiết kể quán thành ba tầng với những chức năng khác nhau. Tầng một là sự kết hợp giữa trong nhà và ngoài trời là nơi để khách nhâm nhi chai bia lạnh, đung đưa theo tiếng nhạc, trò chuyện cùng nhau và nhìn dòng người tấp nập qua lại. Tầng hai được bố trí bàn bida để khách có thể giải trí. Vì quán khá nhỏ nên tầng ba được dành riêng cho việc chế biến. Nhờ sự tách rời giữa quầy bar và nhà bếp nên mùi thức ăn không bị lan tỏa trong không gian gây sự khó chịu.
                
                Thực đơn của quán được viết song ngữ Anh-Việt. Đồ uống và thức ăn của quán rất ngon, nhiều loại bia ngoại, cocktail mang hương vị châu Âu. Đặc biệt sinh tố và nước ép trái cây ở đây rất ngon được rất nhiều người dùng. Khi đến đây bạn cũng nên thử những món ăn như: Pizza ben's, Bò bittet, Hamburger kiểu Úc,...
                
                Có thể thấy mọi thiết kế, sắp đặt của Bar phần lớn đều hướng đến những du khách nước ngoài khi đáp ứng hầu hết những sở thích cơ bản của họ. Có lẽ vì thế, khi đến đây bạn sẽ bắt gặp chủ yếu là khách nước ngoài với những quốc tịch khác nhau. Đôi khi, đang ngồi ở Bamboo Bar nhưng bạn lại có cảm giác như đang ngồi Bar ở một đất nước Châu Âu nào đó.
                
                Dòng nhạc được chơi chủ yếu ở đây là Country, Pop, Chillout,... và thỉnh thoảng sẽ có chút Dance với âm lượng vừa đủ để khách có thể trò chuyện với nhau. Nhân viên ở đây rất thân thiện, bạn nào cũng vui vẻ và có vốn tiếng Anh khá tốt. Giá cả ở đây cũng được đánh giá là hợp lý. Bar thường mở cửa lúc 17h và sẽ đóng cửa khi vị khách cuối cùng rời đi.
                ",
                "address" =>"Số 216 đường Bạch Đằng, quận Hải Châu, TP. Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://d3tosvr3yotk6r.cloudfront.net/Content/UserUploads/Images/Locations/4/2115/medium_fgwrfew.PNG",
                "user_id" =>2,
                "category_id" => 5,
            ],
            [
                 
                "name" => "Memory Lounge Bar & Restaurant",
                "description" => "Memory Lounge Bar & Restaurant là một trong những nhà hàng quán bar có vị trí đắc địa ngay cạnh sông Hàn và thật khó để không lui tới đây thưởng thức dù chỉ một lần. Bước chân vào quán dường như bạn đang chìm vào không gian một phòng trà hải ngoại, ánh đèn lung linh, thức uống đồ ăn đậm vị và tiếng nhạc vang lên ngọt. Nhà hàng có khu quầy Bar, với kiến trúc, không gian được thiết kế theo phong cách ấn tượng, sang trọng và ấm áp cùng với việc tập trung đầu tư chất lượng âm thanh, ánh sáng kĩ lưỡng đến từng chi tiết hứa hẹn không chỉ đem đến cho bạn những giây phút thăng hoa mà còn giúp bạn đánh tan mọi lo âu, muộn phiền trong cuộc sống.
            
                Bạn có thể lựa chọn cho mình một phòng VIP có máy lạnh để tụ tập hay sở hữu ngay một góc để tận hưởng vẻ đẹp sông Hàn ban đêm với những chiếc tàu thuyền đi lại. Chính bởi sự thiết kế như chiếc lá ngay trên bờ sông Hàn mà tại đây luôn là địa điểm lý tưởng cho khách. Không gian rộng lớn sang trọng đầy tinh tế, thoáng mát, phục vụ nhiệt tình là đa số những số nhận xét của khách hàng ưu ái Memory Lounge Bar & Restaurant.
                ",
                "address" =>"Số 7 đường Bạch Đằng, quận Hải Châu, TP. Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://monngondathanh.com/wp-content/uploads/2017/06/Untitled-11.jpg",
                "user_id" =>1,
                "category_id" => 5,
            ],
            [
                 
                "name" => "Horizon Bar",
                "description" => "Horizon Bar nằm trên tầng 36 của điểm đến vô cùng sang chảnh mới nổi- Four Points By Sheraton Đà Nẵng. Tọa lạc ngay mặt tiền đường Võ Nguyên Giáp, gần công viên Biển Đông, Four Points By Sheraton có lợi thế vàng. Với view bao trọn thành phố và bãi biển Đà Nẵng, Horizon Bar sẽ không làm bạn thất vọng với những tấm hình hay những clip “ra lò” từ background xanh biêng biếc tại đây.
            
                Tại sao không đưa cả gia đình hoặc hội bạn thân lên Horizon Bar, gọi một vài món ăn yêu thích, nhấm nháp 1 ly cà phê nóng hổi ngắm toàn cảnh Đà Nẵng với những dải núi xanh mát, chùa Linh Ứng linh thiêng, bãi biển trong xanh... và thả lỏng tâm hồn, tận hưởng từng cơn gió biển thoáng mát nhỉ. Thực đơn ở đây khá phong phú với nhiều món ăn, đồ uống cự kì sang chảnh. Chẳng hạn bò nướng cao cấp, cá hồi sốt chanh leo, đùi vịt hầm thơm bơ...được chế biến bởi bàn tay của những đầu bếp nổi tiếng. Đồ uống cũng có rất nhiều loại như: vodka thượng hạng, cà phê, nước ép, sinh tố...
                ",
                "address" =>"Số 118 - 120 đường Võ Nguyên Giáp, quận Sơn Trà, TP. Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://media-cdn.tripadvisor.com/media/photo-s/15/f5/8d/c4/horizon-bar.jpg",
                "user_id" =>3,
                "category_id" => 5,
            ],
            [
                 
                "name" => "YOLO CLUB",
                "description" => "Mô hình nightclub hoạt động ngay trung tâm TP Đà Nẵng. Đây là địa điểm giải trí được cộng đồng “chọn mặt gửi vàng” để thể hiện cái tôi, sự ngông nghênh của tuổi trẻ.",
                "address" =>"11B Trần Phú, quận Hải Châu, TP. Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://ww2.kqed.org/app/uploads/sites/2/2021/06/YOLO.Main_-1020x574.jpg",
                "user_id" =>2,
                "category_id" => 6,
            ],
            [
                 
                "name" => "OQ Lounge Pub DnD",
                "description" => "Nhắc đến pub tại Đà Nẵng nổi tiếng nhất thì ta không thể bỏ qua cái tên OQ Lounge Pub DnD – một trong những địa điểm pub sang trọng bậc nhất Đà thành. Quán nằm ngay trên con đường Bạch Đằng nhộn nhịp, tấp nập người qua kẻ lại. Nhìn từ ngoài vào, OQ Lounge Pub mang vẻ đẹp trầm tĩnh, nhẹ nhàng nhưng càng đi sâu vào bên trong, bạn sẽ trầm trồ kinh ngạc bởi sự sôi động, náo nhiệt, khác hoàn toàn với thế giới êm đềm ngoài kia.",
                "address" =>"18-20 Bạch Đằng, Quận Hải Châu, TP. Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://i.ytimg.com/vi/mGKOO_A0uIc/maxresdefault.jpg",
                "user_id" =>1,
                "category_id" => 6,
            ],
            [
                 
                "name" => "Golden Pine Pub",
                "description" => "Golden Pine Pub chắc hẳn là địa điểm quen thuộc không chỉ với giới trẻ Đà Nẵng mà còn với hay du khách đến du lịch tại Đà Nẵng. Ở đây thường tổ chức Happy Tour vào 17:00 đến 19:30 tối hằng ngày. Nếu bạn đến quán vào thời gian này và mua hai thức uống, bạn sẽ được miễn phí 1 loại đồ uống tự chọn. Chính điểm đặc biệt đó làm nên nét riêng thú vị của quán pub tại Đà Nẵng này, thu hút rất đông giới trẻ đến đây.",
                "address" =>"52 Bạch Đằng, Quận Hải Châu, TP. Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://images.foody.vn/res/g2/12347/prof/s/foody-mobile-gol-jpg-129-636335452969062262.jpg",
                "user_id" =>3,
                "category_id" => 6,
            ],
            [
                 
                "name" => "Memory Lounge Bar & Restaurant",
                "description" => "Memory Lounge Bar là một trong những nhà hàng quán bar có thiết kế đẹp, độc, lạ nhất giữa rất nhiều quán pub tại Đà Nẵng. Vị trí nhà hàng đắc địa nằm trên bờ sông Hàn cùng với lối kiến trúc sang trọng hiện đại bao quanh bằng kính, bạn có thể nhìn ngắm mặt nước sông Hàn với nhiều màu sắc từ những ánh đèn phản chiếu xuống vô cùng hấp dẫn, thú vị.",
                "address" =>"07 Bạch Đằng, Quận Hải Châu, TP. Đà Nẵng",
                "rating"=> 0,
                "image"=>"image.png",
                "user_id" =>2,
                "category_id" => 6,
            ],
            [
                 
                "name" => "Bar LIBRE",
                "description" => "Thêm một địa chỉ nổi tiếng về pub tại Đà Nẵng mà ReviewNao muốn đề cập đến đó là Bar LIBRE. Đây là địa điểm tích hợp giữa nhà hàng ăn và bar rượu. Nằm trên con đường náo nhiệt Nguyễn Chí Thanh, Bar LIBRE với thiết kế quán sang trọng, hiện đại và đẳng cấp, quán luôn thu hút đông đảo giới trẻ và cả những doanh nhân cũng tin tưởng lựa chọn.",
                "address" =>"125A Nguyễn Chí Thanh, Quận Hải Châu, TP. Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://chillvietnam.com/wp-content/uploads/elementor/thumbs/bar-libre-da-nang-huong-vi-co-dien-xu-da-1666220342-1-pwg7z8n448jygi3uv0ufg66fl5wi0certad2eaxcx4.jpg",
                "user_id" =>1,
                "category_id" => 6,
            ],
            [
                 
                "name" => "Sky Pub",
                "description" => "Một trong những cái tên quen thuộc mà mỗi lần nhắc đến pub tại Đà Nẵng cực chất không thể bỏ qua chính là Sky Pub. Tọa lạc trên con đường sầm uất nhất Đà Nẵng, quán khoác lên mình lối kiến trúc nhỏ nhắn nhưng mang đậm nét châu Âu xịn sò. Ngoài ra, khi đến đây bạn còn có thể chiêm ngưỡng vẻ đẹp của dòng sông Hàn lộng lẫy về đêm.",
                "address" =>"214 Bạch Đằng, Quận Hải Châu, TP. Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://dulichhaiphongdanang.com/upload/top-6-quan-bar-pub-soi-dong-noi-tieng-thu-hut-gioi-tre-da-thanh-1.jpg",
                "user_id" =>3,
                "category_id" => 6,
            ],
            [
                 
                "name" => "On The Radio Bar",
                "description" => "On The Radio Bar là một trong những cái tên xứng đáng lọt vào Top những quán pub tại Đà Nẵng nổi tiếng nhất. Phải nói rằng nơi đây được khá nhiều giới trẻ Đà thành lựa chọn để tụ tập bạn bè giải trí. Đến đây, bạn sẽ bị cuốn hút bởi không gian âm nhạc sôi động, náo nhiệt và được trải nghiệm những đồ uống ngon, hấp dẫn. Ngoài nước uống ra, quán còn phục vụ nhiều món ăn đa dạng, đẳng cấp được chế biến từ những nguồn nguyên liệu tươi sạch. Vậy nên bạn hoàn toàn yên tâm thưởng thức mà không cần lo về vấn đề vệ sinh nhé!",
                "address" =>"76 Thái Phiên, Quận Hải Châu, TP. Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://media-cdn.tripadvisor.com/media/photo-s/1a/3e/d8/c0/live-bands-and-djs-everynight.jpg",
                "user_id" =>2,
                "category_id" => 6,
            ],
            [
                 
                "name" => "Bamboo 2 Bar",
                "description" => "Bamboo 2 Bar là một trong những quán bar, pub tại Đà Nẵng nổi tiếng và được nhiều bạn trẻ lui tới. Quán có phong cách thiết kế độc đáo, hiện đại, bàn ghế được làm bằng chất liệu tre giống như tên quán mang lại vẻ đẹp gần gũi, dễ chịu.",
                "address" =>"216 Bạch Đằng, Quận Hải Châu, TP. Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://d3tosvr3yotk6r.cloudfront.net/Content/UserUploads/Images/Locations/4/2115/medium_fgwrfew.PNG",
                "user_id" =>1,
                "category_id" => 6,
            ],
            [
                 
                "name" => "Hair Of The Dog Bar",
                "description" => "Thêm một cái tên mà ReviewNao không thể không giới thiệu đến bạn là Hair Of The Dog Bar – một trong những địa chỉ pub tại Đà Nẵng xứng đáng đặt chân đến dù chỉ một lần. Không khí nơi đây luôn sôi động, náo nhiệt và được nhiều giới trẻ thường xuyên lui tới.",
                "address" =>"06 Trần Quốc Toản, Quận Hải Châu, TP. Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://d3tosvr3yotk6r.cloudfront.net/Content/UserUploads/Images/Locations/4/2118/medium_101715723_2610135879209597_8637267519603736576_o.jpg",
                "user_id" =>3,
                "category_id" => 6,
            ],
            [
                 
                "name" => "Mì Quảng Bà Mua",
                "description" => "Dù có nguồn gốc từ Quảng Nam, mì Quảng vẫn luôn là một trong những món ăn đầu tiên được nhắc đến khi nói về đặc sản Đà Nẵng. Một tô mì Quảng đúng vị gồm sợi mì bằng bột gạo dai dày, thịt heo, thịt gà, chả, tôm, trứng cút… được xếp đầy, sau đó chan nước dùng xăm xắp. Khi thưởng thức, bạn sẽ ăn kèm rau sống, bánh tráng nướng và đậu phộng rang. Chỉ bằng các nguyên liệu đơn giản và nguyên thuộc, người dân ở đây đã tạo nên một món ăn “gây nghiện” lạ kỳ.
                ",
                "address" =>"19 Trần Bình Trọng, Hải Châu, Đà Nẵng.",
                "rating"=> 0,
                "image"=>"https://www.wikidanang.com/tin-tuc/images/Wiki/quan-an/ba-mua/my-quang-ba-mua-tbt-1.jpg",
                "user_id" =>2,
                "category_id" => 7,
            ],
            [
                 
                "name" => "Bún chả cá Hờn",
                "description" => "Bún chả cá được nấu bằng nước ninh xương đậm đà, bí đỏ, bắp cải, thơm và cà chua, măng khô,... Khi dọn lên, người bán sẽ cho vào một ít bún, chả cá hấp, chả cá chiên, đôi khi là một lát cá thu hấp tươi rói rồi chan nước dùng và thêm một chút hành ngò. Không có quá nhiều nguyên liệu phức tạp, bún chả cá vẫn khiến bạn tấm tắc mãi bởi vị ngọt thanh của nước, dai thơm từ cá, đậm đà của ruốc, cay cay của ớt và tất nhiên không thể thiếu là độ tươi ngon của rau sống ăn kèm.
                ",
                "address" =>"113/3 Nguyễn Chí Thanh. Hải Châu, Đà Nẵng.",
                "rating"=> 0,
                "image"=>"https://statics.vinpearl.com/bun-cha-ca-da-nang-6_1629088577.jpg",
                "user_id" =>1,
                "category_id" => 7,
            ],
            [
                 
                "name" => "Bánh mì Madam Khánh",
                "description" => "Nhắc đến món ngon Đà Nẵng - Hội An, du khách nhất định không thể bỏ qua món bánh mì nức tiếng phố cổ. Ổ bánh mì được đặc trưng bởi hình dáng thon dài, nhọn hai đầu. Khi đứng trước quầy bánh mì, bạn sẽ chẳng thể nào cưỡng lại cơn thèm trước tủ nhân đa dạng từ thịt nướng, thịt nguội, xúc xích cho đến phô mai, pate, trứng,... thơm ngào ngạt. Một ổ bánh mì nóng giòn ú nu được nêm nếm vừa miệng, thêm chút đồ chua, dưa leo, hành ngò cho đỡ ngán và nước thịt hòa trộn nên một hương vị ngon khó cưỡng.
                ",
                "address" =>" 115 Trần Cao Vân, Hội An, Quảng Nam",
                "rating"=> 0,
                "image"=>"https://media.foody.vn/res/g10/92195/prof/s/foody-upload-api-foody-mobile-26-200625153947.jpg",
                "user_id" =>3,
                "category_id" => 7,
            ],
            [
                 
                "name" => "Đặc sản bà Mua",
                "description" => "Không có quá nhiều dầu mỡ hay tinh bột, bánh tráng cuốn thịt heo là một trong những đặc sản Đà Nẵng hoàn hảo cho một buổi trưa hay tối nhẹ bụng. Một phần ăn được dọn lên sẽ khiến bạn bất ngờ bởi sự đa dạng về nguyên liệu: bánh tráng mềm dai, thịt heo hai đầu da với tỷ lệ nạc mỡ hoàn hảo, dĩa rau ăn kèm với xoài thái sợi, dưa leo, giá, xà lách, các loại đủ loại,... Cuốn tất cả thành phần với bánh tráng, chấm một ít mắm nêm ngon sẽ khiến bạn muốn ăn mãi không thôi.
                ",
                "address" =>"93 Nguyễn Chí Thanh, Hải Châu, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://dacsandathanh.com/wp-content/uploads/2018/06/quanbamua-min.jpg",
                "user_id" =>2,
                "category_id" => 7,
            ],
            [
                 
                "name" => "Bánh xèo Bà Dưỡng",
                "description" => "Là một món ăn quen thuộc, người dân Đà Nẵng vẫn tạo nên một món bánh xèo độc đáo theo cách riêng. Không đổ bánh lớn như trong miền Nam, bánh xèo Đà Nẵng được làm từ bột gạo xay với màu vàng vỏ bánh lấy từ lòng đỏ trứng và bột nghệ. Bánh vẫn có phần nhân phổ biến là thịt heo, tôm và giá đỗ. 
            
                Cách ăn bánh xèo miền Trung đúng điệu cần một lớp bánh tráng hoặc rau cải cay, tiếp đó là rau sống đủ loại và bánh giòn rụm rồi cuốn thành cuộn dài, chấm cùng chén nước chấm thơm mùi đậu phộng và nước mắm ớt tỏi cay nồng.
                ",
                "address" =>"K280/23 Hoàng Diệu, Hải Châu, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://media.foody.vn/res/g1/6081/prof/s/file_restaurant_photo_ales_16012-c627fb1d-200928162157.jpg",
                "user_id" =>1,
                "category_id" => 7,
            ],
            [
                 
                "name" => "Bún mắm Vân",
                "description" => "Để phân biệt với bún mắm miền Tây, du khách thường gọi bún mắm Đà Nẵng là bún mắm nêm. Món ăn tưởng chừng khá kén chọn với mùi mắm đặc trưng nhưng lại khiến thực khách “phát cuồng” khi đã thưởng thức. 
            
                Một tô bún mắm nêm gồm các nguyên liệu như thịt luộc, heo quay, chả lụa, nem chua, rau sống, bún gạo, đậu phộng,... Tất cả được trộn đều với mắm nêm ngon tự pha, thơm đậm đà, cực kỳ thích hợp cho một ngày mát trời. 
                ",
                "address" =>"K23/4 Trần Kế Xương, Hải Châu, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://images.foody.vn/res/g68/673107/prof/s640x400/foody-mobile-v2-jpg.jpg",
                "user_id" =>3,
                "category_id" => 7,
            ],
            [
                 
                "name" => "Mít trộn Bà Già",
                "description" => "Là một trong các món ăn vặt ngon Đà Nẵng, mít trộn ghi điểm bởi sự mới lạ, nguyên liệu đơn giản nhưng cách chế biến khá công phu. Mít non xé sợi, tai heo thái mỏng, tôm bóc vỏ được trộn đều cùng nước mắm chua ngọt cay cay. Xúc một miếng mít trộn cùng bánh tráng nướng, đủ mọi hương vị từ thơm bùi cho đến giòn sực; tạo nên một hương vị dân dã nhưng ngon mê ly.
                ",
                "address" =>" Kiệt 47 Lý Thái Tổ, Thanh Khê, Đà Nẵng",
                "rating"=> 0,
                "image"=>"http://giadinh.mediacdn.vn/2017/photo-0-1502691054915.jpg",
                "user_id" =>2,
                "category_id" => 7,
            ],
            [
                 
                "name" => "Quán Cây Bàng",
                "description" => "Dành cho những chiếc bụng đói vào buổi xế chiều, ram cuốn cải là một lựa chọn không tồi. Với nhân thịt và mộc nhĩ, ram được cuốn chắc tay, chiên vàng đều và giòn tan. Để món ăn không bị ngán bởi dầu mỡ, người dân ở đây cuốn cùng rau xà lách và bánh tráng, chấm với nước mắm chua ngọt cực kỳ “bắt miệng”.
                ",
                "address" =>"Khu vực cầu Trần Thị Lý, Sơn Trà, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://tradanang.com/wp-content/uploads/2020/01/ram-bap-quang-ngai-quan-phan-tu-Da-Nang.jpg",
                "user_id" =>1,
                "category_id" => 7,
            ],
            [
                 
                "name" => "Quán 59 - Làng Yaourt Muối",
                "description" => "Nếu như quá ngán với các món mặn, bạn có thể “đổi gió” với yaourt muối - một trong những món ăn ngon - bổ - rẻ ở Đà Nẵng mà lại cực kỳ lạ miệng. Cho một ít muối vào đầu muỗng rồi múc kèm yaourt để ăn, bạn sẽ nếm được độ ngọt béo của sữa chua, mằn mặn của muối tạo nên hương vị siêu ghiền.
                ",
                "address" =>"59 Phan Huy Chú, Sơn Trà, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://media.foody.vn/res/g5/44364/prof/s/foody-mobile-yaout-muoi-da-nang-j-610-635786169304238430.jpg",
                "user_id" =>3,
                "category_id" => 7,
            ],
            [
                 
                "name" => "Chả Bà Đệ",
                "description" => "Chả bò Đà Nẵng từ lâu đã nức tiếng với hương vị bò đặc trưng, chất lượng khó nơi đâu sánh bằng. Bí quyết để tạo nên món đặc sản hấp dẫn này là chả phải được làm 100% từ thịt bò, ướp gia vị theo bí quyết gia truyền, không cho hàn the hay chất bảo quản. Chả khi cắt ra có màu hồng sẫm quyến rũ, thơm mùi bò, chắc thịt, ngọt và dai dai, cực kỳ “tốn mồi” cho những dịp lai rai.
                ",
                "address" =>"77 Hải Phòng, Hải Châu, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://media.foody.vn/res/g67/662277/prof/s/foody-mobile-ba-de-jpg.jpg",
                "user_id" =>2,
                "category_id" => 7,
            ],
            [
                 
                "name" => "Sun World Bà Nà Hills",
                "description" => "Thuộc hệ thống thương hiệu giải trí Sun World, cách trung tâm thành phố Đà Nẵng hơn 20km, Sun World Bà Nà Hills là quần thể du lịch nghỉ dưỡng kết hợp vui chơi giải trí đẳng cấp bậc nhất Việt Nam. 4 năm liên tiếp từ năm 2015 đến năm 2018, Sun World Bà Nà Hills đã vinh dự đạt được danh hiệu Khu du lịch hàng đầu Việt Nam, do Tổng cục Du lịch Việt Nam trao tặng.
            
                Kiến trúc kiểu Âu cổ đầy quyến rũ, mị hoặc, những khu vui chơi giải trí vui nhộn, hay những vườn hoa tươi khoe sắc quanh năm đều sẽ khiến bạn “đến không muốn về”.
                
                Sun World Bà Nà Hills sở hữu tiết trời mát mẻ quanh năm, nên lúc nào cũng là thời điểm lý tưởng để ghé. Nếu thích náo nhiệt, đông vui, bạn có thể chọn đến trong khoảng tháng 4 đến tháng 8 – mùa trọng điểm du lịch. Còn nếu muốn hưởng trọn không gian yên bình, thư thái, hãy ghé vào mùa xuân (tháng 1 đến tháng 3) hoặc mùa đông (tháng 10 đến tháng 12) nhé.
                
                Đáp ứng nhu cầu của hàng triệu du khách đến với Bà Nà, Sun World Bà Nà Hills có 5 tuyến cáp treo, trong đó có nhiều tuyến đạt kỉ lục thế giới và các giải thưởng quốc tế với tổng công suất gần 7000 khách/giờ, do hãng Doppermayer chế tạo.
                
                Du khách còn có cơ hội tham quan và trải nghiệm những công trình và điểm đến độc đáo. Một trong những công trình được du khách yêu thích nhất khi đến Bà Nà Hills là Làng Pháp, nơi tái hiện một nước Pháp cổ kính và lãng mạn với những công trình kiến trúc cổ điển độc đáo như quảng trường, nhà thờ, thị trấn, làng cổ và khách sạn. Ngoài ra, nói đến Bà Nà thì không thể quên Cầu Vàng, công trình vừa được chính thức ra mắt từ tháng 6/2018 và đã được tạp chí TIME vinh danh trong Top 10 điểm đến tuyệt vời nhất thế giới năm 2018 và trang Guardian công nhận là Cây cầu đi bộ ấn tượng nhất thế giới.
                
                Không những thế, Sun World Bà Nà Hills còn là điểm đến yêu thích của các bạn trẻ ưa hoạt động bởi nơi đây sở hữu khu vui chơi tổ hợp trong nhà vô cùng sôi động và hấp dẫn. Fantasy Park là khu vui chơi trong nhà lớn nhất Việt Nam với nhiều trò chơi giải trí, vận động dành cho cả gia đình; Công viên khủng long là nơi không thể bỏ lỡ đối với những bạn nhỏ yêu thích loạt phim Công viên kỉ Jura.
                
                Với hệ thống hơn 30 nhà hàng trải dài tại 3 khu vực chính: Làng Pháp, Quảng trường Du Dome, Vườn hoa Le Jardin, du khách có rất nhiều hình thức ẩm thực như buffet hoặc gọi món để lựa chọn.
                ",
                "address" =>"Thôn An Sơn, Hòa Ninh, Hòa Vang, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://banahills.sunworld.vn/wp-content/uploads/2018/10/thanhhuong-174817034803-da-nang-ba-na.jpg",
                "user_id" =>1,
                "category_id" => 8,
            ],
            [
                 
                "name" => "Công viên Suối khoáng nóng núi Thần Tài",
                "description" => "Hai năm trở lại đây, sự xuất hiện đầy bất ngờ của công viên suối khoáng nóng núi Thần Tài khiến khách du lịch đứng ngồi không yên khi ghé thăm thành phố du lịch Đà Nẵng. Bên cạnh những bãi biển xanh ngát, những cù lao xanh rì, hay view núi rừng đại ngàn thì suối khoáng nóng là sự hấp dẫn mới lạ không thể chối từ ở nơi đây.
            
                Công viên suối khoáng nóng núi Thần Tài được bao bọc bởi núi Thanh Long và núi Bạch Hổ, nằm trong khuôn viên của khu bảo tồn thiên nhiên Bà Nà Núi Chúa, thuộc thôn Phú Túc, xã Hòa Phú, huyện Hòa Vang, thành phố Đà Nẵng. Tại ngọn núi này, tận sâu dưới lòng đất hàng ngàn mét là sự đứt gãy, biến dạng của của các lớp nham thạch do sự chuyển động mạnh của lớp vỏ trái đất. Sự biến chuyển dữ dội dưới lòng đất gây nhiệt độ áp suất lớn làm phun trào những mạch nước khoáng nóng qua khe đá, tạo nên suối nước nóng quý của thiên nhiên.
                
                Tận dụng nguồn quý của thiên nhiên ban tặng, núi Thần Tài đã được khai thác thành một khu du lịch sinh thái hoành tráng. Công viên Suối khoáng nóng núi Thần Tài là một địa điểm du lịch ở Đà Nẵng hấp dẫn cho khách du lịch giải nhiệt mùa hè, cũng như là nơi tận hưởng nghỉ dưỡng tốt cho sức khỏe. Nằm về phía tây của thành phố Đà Nẵng khoảng 30 km, công viên suối khoáng nóng núi Thần tài không khó tìm đối với du khách. Chỉ cần chạy dọc theo quốc lộ 14B, hướng lên huyện miền núi Đông Giang sau khi đến ngã ba Túy Loan thì bạn sẽ đến nơi. Vì khá gần Bà Nà Hills nên thường thì du khách sẽ kết hợp lộ trình du lịch đến đây.
                
                Công viên suối khoáng nóng núi Thần Tài sẽ cho du khách được tận hưởng và trải nghiệm tắm khoáng nóng theo phong cách tắm tiên của Nhật Bản (tắm Onsen). Được biết, đây là một hoạt động vô cùng có lợi cho sức khỏe. Tắm khoáng nóng là giải pháp tốt nhất để điều hòa và bài tiết cơ thể, giải độc trong người, làm đẹp cho làn da của bạn. Đối với chị em phụ nữ, thì suối khoáng nóng Thần Tài luôn là sự lựa chọn đầu tiên. Thấu hiểu nhu cầu của chị em, tại đây có thường có chương trình giảm giá vào những dịp lễ, Tết, đặc biệt vào các ngày lễ dành cho chị em phụ nữ như 8/3 hay 20/10.
                
                Công viên suối khoáng nóng Thần Tài được sự hỗ trợ của những kỹ sư và chuyên gia Nhật Bản, nên có thể nói đây là một trong những khu suối khoáng nóng có kiến trúc hiện đại, và độc đáo nhất Việt Nam. Với tính chất gần gũi với thiên nhiên, những bồn tắm lộ thiên ở đây được thiết kế bằng những khối đá tự nhiên, kết hợp với dịch vụ thưởng thức trà, rượu vang, cafe, bánh ngọt ngay ở suối khoáng nóng.
                
                Ngoài việc thưởng thức suối khoáng nóng, công viên còn có các khu tắm nước lạnh với các trò chơi dưới nước hấp dẫn giới trẻ. Nếu có ghé thăm Đà thành, đừng bỏ lỡ cơ hội đến với thiên nhiên tuyệt vời như thế này nhé!
                ",
                "address" =>"Quốc lộ 14G, Hòa Phú, Hòa Vang, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://res.klook.com/images/fl_lossy.progressive,q_65/c_fill,w_1295,h_863/w_80,x_15,y_15,g_south_west,l_Klook_water_br_trans_yhcmh3/activities/zywx19josyknpx0mhrzy/V%C3%A9C%C3%B4ngVi%C3%AAnSu%E1%BB%91iKho%C3%A1ngN%C3%B3ngN%C3%BAiTh%E1%BA%A7nT%C3%A0i%C4%90%C3%A0N%E1%BA%B5ng.jpg",
                "user_id" =>3,
                "category_id" => 8,
            ],
            [
                 
                "name" => "Cung văn hóa Thiếu nhi Đà Nẵng",
                "description" => "Cung văn hóa thiếu nhi Đà Nẵng với phong cách thiết kế hiện đại, đậm chất nghệ thuật đã trở thành một điểm tham quan, du lịch hấp dẫn du khách, đặc biệt là những bạn trẻ yêu thích khám phá, chụp hình.
            
                Cung văn hóa thiếu nhi Đà Nẵng hay còn được nhắc đến với tên gọi Nhà văn hóa thiếu nhi Đà Nẵng được xây dựng vào khoảng giữa năm 2015 với số tiền đầu tư lên tới 250 tỷ đồng. Công trình này được xây trên một diện tích đất rộng khoảng 33.000 m2. Với nhiều hạng mục công trình khác nhau, phần diện tích đất xây dựng vào khoảng 6.845 m2, diện tích trồng cây xanh, hồ nước, đất trống khoảng 18.000 m2, và hơn 7.700 m2 để làm các lối đi và bãi đỗ xe.
                
                Với quy mô 3 tầng công trình này được chia thành nhiều khu vực vui chơi, học tập khác nhau như: Phòng học, khu đa chức năng, thư viện, hội trùng, khu vui chơi giải trí…
                
                Ở phần trung tâm là một khoảng khuôn viên rộng rãi, thoáng mát với nhiều cây xanh để làm khu vui chơi ngoài trời, tổ chức các hoạt động sinh hoạt chung… Với vị trí trung tâm cùng số vốn đầu tư khá lớn, công trình Cung văn hóa thiếu nhi Đà Nẵng được xem là một trong những công trình trọng điểm của thành phố, góp phần tạo nên điểm nhấn độc đáo, nổi bật cho Đà Nẵng.
                
                Công trình này nằm ngay cạnh khu giải trí Helio, cách Công viên Châu Á (Asia Park) chừng 1 km, khu phía Nam là Đài tưởng niệm… Vậy nên trong hành trình tìm đến Cung văn hóa này bạn có thể kết hợp với việc tham quan thêm nhiều địa điểm khác trong thành phố. Giờ mở cửa Cung văn hóa thiếu nhi Đà Nẵng là từ 7h tới 21h30, khoảng thời gian này đủ để bạn có thể khám phá trọn vẹn nơi đây.
                
                Chắc hẳn với những bạn lần đầu tới địa điểm này sẽ đều phải ngỡ ngàng trước một công trình đồ sộ, mang đậm tính nghệ thuật trừu tượng. Được lấy ý tưởng từ cách sắp xếp những khối hình học cơ bản từ trò chơi “Tangram” để tạo nên những hình ảnh con vật sống động. Việc sử dụng kiểu thiết kế có độ thống nhất cao như vậy sẽ tạo cho công trình có nhiều không gian đa dạng hơn, thuận tiện trong quá trình sử dụng, hơn thế nữa là nó tạo nên sự độc đáo, khác biệt so với những công trình khác.
                
                Không gian bên trong của công trình này là rất nhiều các lớp học năng khiếu như: Vẽ, võ, đàn, cầu lông, bóng rổ… chủ yếu là các lớp học dành cho các em thiếu nhi từ 6 - 15 tuổi.
                
                Dù mới được đưa vào hoạt động cách đây không lâu nhưng Cung văn hóa thiếu nhi Đà Nẵng đã nhanh chóng trở thành điểm đến yêu thích của các bạn trẻ. Nếu có dịp du lịch Đà Nẵng bạn có thể tìm đến địa điểm mới lạ, hấp dẫn này. chắc chắn bạn sẽ có những giờ phút trải nghiệm thú vị cùng những bức hình vô cùng độc đáo.
                ",
                "address" =>"Số 2A Phan Đăng Lưu, khu công viên Bắc Tượng đài 2/9, Hải Châu, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://cdn.vntrip.vn/cam-nang/wp-content/uploads/2018/05/cungvanhoathieunhi-danang-vntrip.jpg",
                "user_id" =>2,
                "category_id" => 8,
            ],
            [
                 
                "name" => "Công viên Châu Á - Asia Park",
                "description" => "Ngay ngày đầu khai trương, Asia Park đã đưa Đà Nẵng vào sách kỉ lục Guiness của thế giới ở mục Top 10 vòng quay cao nhất thế giới với Sun Wheel cao 115m (tương đương tòa nhà 25 tầng). Asia Park là công viên của những kỉ lục bởi nơi đây sở hữu tàu điện trên cao hiện đại bậc nhất Việt Nam - Monorail, tàu lượn dạng treo lớn nhất Việt Nam với 5 vòng xoắn 360 độ liên tục trên độ cao 34m - Queen Cobra, tháp rơi tự do cao nhất Việt Nam với chiều cao 47m (tương đương tòa nhà 13 tầng) - Golden Sky Tower...
            
                Asia Park còn được gọi là Châu Á thu nhỏ khi sở hữu các công trình kiến trúc mang đặc trưng văn hóa của 10 nước: Nhật Bản, Ấn Độ, Campuchia, Indonesia, Singapore, Thái Lan, Hàn Quốc, Trung Quốc, Nepal, Việt Nam. Tuy nhiên, khối kiến trúc độc đáo nhất tại Asia Park
                
                Ở Đêm hội sắc màu, du khách sẽ có cơ hội đắm chìm theo những điệu múa Manipuri nổi tiếng của Ấn Độ. Trung thu trong Asia Park, du khách sẽ được chứng kiến màn trình carnival của những nhân vật được hóa trang sặc sỡ theo đúng phong cách Lễ hội những nụ cười Masskara được tổ chức tại thành phố Bacolod, đảo Visayas, Phillippines...
                
                Ẩn bên trong Asia Park là một vương quốc trò chơi dành cho bé và gia đình. Vòng đu quay Festival Carousel, đoàn xe dạo trong công viên khủng long Dino Island, ngôi nhà trên cây Tree House Playland hay vùng đất kẹo ở Happy Choo Choo, trường đua Angry Motors... Bên cạnh đó, còn có hàng trăm trò chơi tưng bừng náo nhiệt để cả nhà cùng chơi ở khu trò chơi trong nhà Soft Play hay Sun Blaster - khu game bắn súng hơi quy mô lớn nhất Việt Nam với diện tích 250m vuông.
                
                Bên cạnh đó, Asia Park sở hữu hơn 5000 cây xanh nhiều chủng loại, từ phượng vĩ, sưa, muồng anh đào, muồng hoàng yến, bằng lăng, hoa vô ưu, lộc vừng... có cả những loại đặc trưng như Tùng La Hán vốn chỉ xuất hiện trong các khu vườn quý tộc Nhật Bản. Thảm thực vật xanh ngát tạo nên bầu không khí trong lành, thoáng đãng, hoàn toàn là nơi phù hợp cho ngày picnic cuối tuần.
                ",
                "address" =>"Quảng trường 2/9, đường 2/9, Hải Châu, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://6f3ebe2ff971707.cmccloud.com.vn/tour/wp-content/uploads/2022/02/image-9.png",
                "user_id" =>1,
                "category_id" => 8,
            ],
            [
                 
                "name" => "Helio Center",
                "description" => "Helio Center là một tổ hợp vui chơi và chợ đêm lớn nhất Đà Nẵng với đa dạng các hoạt động giải trí khác nhau: khu game trong nhà, khu vui chơi trẻ em, chợ đêm và cụm rạp chiếu phim. Helio Center có diện tích hơn 35000m vuông, tọa lạc trên trục đường 2/9, ngay trung tâm thành phố Đà Nẵng, là một lựa chọn không thể bỏ lỡ của người dân địa phương và du khách.
            
                Tại Helio Center sẽ có hẳn một thiên đường dành riêng cho trẻ nhỏ - Helio Kids. Đây là một khu vui chơi mang tính giáo dục xen lẫn với giải trí, dành cho bé từ 0 - 9 tuổi. Với diện tích 2700m vuông cùng 15 phòng chơi được thiết kế dựa trên mô hình vui chơi vừa chơi vừa học tiên tiến nhất trên thế giới hiện nay, Helio Kids thực sự là một điểm đến dành cho bé được các phụ huynh tin tưởng. Bên trong Helio Kids có các phòng chơi đa dạng và hấp dẫn như: siêu thị, nhà hàng, phòng hóa trang, studio chụp ảnh, vịnh hải dương, ga xe lửa, công trường, xưởng nghệ thuật, bếp mini, câu cá, nhà hơi,...
                
                Tiếp đến chính là Helio Play, là khu game lớn nhất Đà Nẵng, với hàng trăm trò chơi siêu hấp dẫn, mang đến cho người chơi trải nghiệm tuyệt vời nhất. Tại đây có hàng loạt các trò chơi nổi tiếng như: đua xe, bắn súng, đập búa, thực tế ảo VR, nhảy Wii,... hay những trò cảm giác mạnh, kích thích nỗi sợ như Spinning Coaster, vòi rồng Tornado...
                
                Hoạt động từ 17h đến 22h30 với hơn 150 gian hàng ẩm thực đa dạng được chia thành 3 phân khu chính. Những món ăn vặt phổ biến như trà sữa, đồ nướng xiên que hay những món ăn no đều có thể được tìm thấy tại khu chợ đêm Helio.
                ",
                "address" =>"số 01 đường 2/9, Hải Châu, Đà Nẵng (ngay ngã 4 Phan Đăng Lưu giao với đường 2/9)",
                "rating"=> 0,
                "image"=>"https://danangfantasticity.com/wp-content/uploads/2016/11/helio-center-cho-dem-da-nang-fantasticity-com.jpg",
                "user_id" =>3,
                "category_id" => 8,
            ],
            [
                 
                "name" => "Khu du lịch Hoà Phú Thành",
                "description" => "Khu du lịch Hoà Phú Thành nằm trên địa bàn huyện Hòa Vang tiếp nối với khu du lịch Bà Nà Hills cùng với các khu du lịch khác như khu du lịch sinh thái Ngầm Đôi, khu du lịch Suối Hoa, khu du lịch nước khoáng nóng Suối Đời,... Vì vậy, nếu bạn có một kì nghỉ dài thì hãy đến với khu du lịch Hòa Phú Thành để có thể dễ dàng trải nghiệm nhiều phong cách nghỉ dưỡng khác nhau.
            
                Khu du lịch Hòa Phú Thành có sông và suối chảy qua với chiều dài trên 3km, len lỏi giữa những núi đồi. Nơi đây được tạo nên bởi sự đóng góp của nhiều kiến trúc sư tài năng trong và ngoài nước cùng với bàn tay tài tình của những người thợ tốt nhất từ mọi miền đất nước.
                
                Với ưu thế có nhiều sông suối, trò chơi trượt thác tại Hòa Phú Thành trở thành điểm thu hút với du khách khi đến đây. Bạn sẽ được trải nghiệm cảm giác ngồi trên con xuồng, rồi trượt dài xuống những con dốc suối hay đỉnh đồi từ trên cao, cảm nhận được hơi nước mát lạnh của con suối chạm vào làn da sẽ mang đến cảm giác sảng khoái, mát mẻ. Du khách cũng cần lưu ý trước khi chơi nên thay đồ bơi và mặc áo phao để bảo hộ an toàn. Tại đây có tủ để đồ nên du khách có thể an tâm gửi đồ cá nhân của mình để tránh mất cắp, thất lạc.
                
                Bên cạnh đó, khu du lịch Hòa Phú Thành còn thu hút du khách bởi một trò chơi rất mới mang tên zipline. Đây là trò chơi đu dây mạo hiểm đầu tiên có tại Đà Nẵng. Địa hình nơi đây có độ dốc lớn với chiều dài hơn 300m cho nên đã ra đời đường trượt này. Đường trượt dài với 2 dây cáp có độ an toàn cao, bạn cũng sẽ được bảo hộ với dây cáp cùng với sự chỉ dẫn tận tình của nhân viên hướng dẫn. Nếu là một người đam mê thử thách bản thân, đường trượt zipline này là dành cho bạn bởi đó là một trải nghiệm tuyệt vời trên độ cao không tưởng và còn được ngắm nhìn khung cảnh thiên nhiên của núi rừng, bầu trời, sông suối thơ mộng.
                
                Nếu trò chơi mạo hiểm như trượt thác hay trượt dây cáp không phải là điều bạn mong đợi thì massage cá chính là trải nghiệm tuyệt vời mà bạn nên thử. Chỉ với một lần massage, cơ thể sẽ liền cảm thấy thư giãn và thoải mái hơn. Cách massage này không những giúp bạn loại bỏ da chết, mà còn tạo ra cảm giác thích thú, thư thái.
                
                Ngoài ra khu du lịch Hòa Phú Thành còn phục vụ ăn uống, dịch vụ cho du khách có nhu cầu nghỉ qua đêm tại đây. Với nhiều món ăn như: bánh tráng nướng, gà đồi, cá suối nướng chiên giòn,.. Bên cạnh đó, để buổi tối thêm phần hoàn hảo, bạn có thể vừa thưởng thức ẩm thực, vừa đốt lửa trại và giao lưu văn nghệ.
                
                Nếu bạn chán nản những xô bồ, tấp nập của thành phố thì khu du lịch Hòa Phú Thành chính là giải pháp hoàn hảo cho bạn bởi bạn sẽ có dịp dành trọn một ngày cùng hòa mình với thiên nhiên trong lành, tươi mát cùng gia đình, bạn bè của mình tại đây.
                ",
                "address" =>"Km20, quốc lộ 14G, Hòa Phú, Hòa Vang, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://www.hoaphuthanh.com.vn/upload/hinhanh/29496690_1635927423111071_5791052080162892962_n-1457.jpg",
                "user_id" =>2,
                "category_id" => 8,
            ],
            [
                 
                "name" => "Cầu tình yêu Đà Nẵng",
                "description" => "Cầu tình yêu chính là địa điểm đầu tiên nằm trong top 10 điểm đến lãng mạn dành cho cặp đôi mà siêu ứng dụng MoMo muốn giới thiệu đến bạn trong chuyến du lịch Đà Nẵng.
            
                Được lấy ý tưởng từ hình ảnh chiếc cầu Pont des Arts đầy khóa tình yêu bắc qua con sông Seine của thủ đô Paris hoa lệ, cầu tình yêu Đà Nẵng cũng là địa điểm bạn có thể khắc tên mình và người thương lên cùng một nơi. Chiếc ổ khóa trái tim được treo lên thành cầu và thả chìa khóa xuống dòng sông Hàn thơ mộng sẽ mang ý nghĩa về tình yêu bền chặt và chung thủy không tách rời. 
                
                Cầu tình yêu Đà Nẵng thường đông khách nhất vào buổi chiều và tối. Bởi lúc này, những chiếc đèn lồng treo dọc thân cầu sẽ được bật sáng và phản chiếu xuống mặt nước, tạo nên một khung cảnh huyền ảo và lãng mạn khiến ai cũng phải trầm trồ. Những bức ảnh tại cầu tình yêu hứa hẹn sẽ là những kỉ niệm lãng mạn, ngọt ngào của đôi bạn đó!
                ",
                "address" =>"Đường Trần Hưng Đạo, Phường An Hải Tây, Quận Sơn Trà, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://motogo.vn/wp-content/uploads/2020/02/cau-tau-tinh-tinh-yen-4.jpg",
                "user_id" =>1,
                "category_id" => 9,
            ],
            [
                 
                "name" => "Đỉnh Bàn Cờ",
                "description" => "Đỉnh Bàn Cờ chính là một trong những địa điểm lãng mạn tuy cũ mà mới dành cho những cặp đôi yêu thích trải nghiệm và muốn có cho mình giây phút riêng tư. Nằm ngay trên đỉnh bán đảo Sơn Trà với độ cao trên 700m so với mực nước biển, tại đây, hai bạn sẽ được hòa mình vào thiên nhiên với những mảng xanh của cây cối, được tách biệt hoàn toàn với sự tấp nập nhộn nhịp của đô thị và được chìm đắm trong khung cảnh tuyệt đẹp của thành phố Đà Nẵng khi nhìn từ trên cao.
            
                Đỉnh Bàn Cờ cực kỳ phù hợp với những cặp đôi yêu thích trekking hay những buổi cắm trại giữa không gian trong lành và gần gũi với thiên nhiên. Đặc biệt, vào những dịp Đà Nẵng tổ chức cuộc thi bắn pháo hoa quốc tế hay những dịp kỷ niệm như 30/4 - 1/5 thì địa điểm này là một trong những nơi sở hữu view đẹp nhất giúp bạn ngắm nhìn được toàn bộ khung cảnh lộng lẫy của những màn pháo hoa tuyệt sắc.
                ",
                "address" =>"Bán đảo Sơn Trà, Phường Thọ Quang, Quận Sơn Trà, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://cdn.vntrip.vn/cam-nang/wp-content/uploads/2017/08/dinh-ban-co-e1503282647938.jpg",
                "user_id" =>3,
                "category_id" => 9,
            ],
            [
                 
                "name" => "Đèo Hải Vân",
                "description" => "Tiếp theo danh sách top 10 trải nghiệm du lịch cặp đôi ở Đà Nẵng là một địa điểm dành riêng cho những tín đồ phượt và thích thử thách những cung đường đèo hiểm trở. Đó chính là Đèo Hải Vân. Con đường đèo dài 20km cắt ngang dãy Bạch Mã này là điểm nối liền thành phố Đà Nẵng và tỉnh Thừa Thiên Huế.
            
                Đèo Hải Vân còn được dân du lịch gọi là đèo Mây, do trên đỉnh đèo quanh năm đều có mây trắng bao phủ, tựa chốn bồng lai. Chỉ cách trung tâm Đà Nẵng chưa tới 30km, địa điểm này được bình chọn là 1 trong top 10 cung đường biển đẹp nhất thế giới với tầm nhìn toàn cảnh bán đảo Sơn Trà và vịnh Lăng Cô có “một không hai”. 
                
                Với độ cao lên tới 500m so với mực nước biển, cung đường chinh phục đèo Hải Vân không dành cho những ai có tay lái yếu. Đường đèo khá khúc khuỷu, uốn lượn men theo triền núi và vô cùng chênh vênh. Vì vậy, để có được trải nghiệm lãng mạn này, bạn sẽ phải thật chắc tay lái, quan sát kĩ và nắm rõ nguyên tắc khi đi đèo dốc nhé!
                ",
                "address" =>"Phường Hòa Hiệp Bắc, Quận Liên Chiểu, Đà Nẵng",
                "rating"=> 0,
                "image"=>"http://docs.portal.danang.gov.vn/images/image/h5_1636497263667.jpg",
                "user_id" =>2,
                "category_id" => 9,
            ],
            [
                 
                "name" => "Rạp chiếu phim",
                "description" => "Một trong những điểm đến dành riêng cho buổi hẹn hò lãng mạn chắc chắn không thể thiếu những giây phút tựa đầu vào nhau và cùng xem những bộ phim tình cảm tại rạp chiếu phim. Trong chuyến du lịch Đà Nẵng, không khó để bạn có thể tìm thấy địa điểm xem phim dành cho cặp đôi. Thành phố có đến 2 cụm rạp lớn là Lotte Cinema và CGV Vĩnh Trung Plaza, hay còn được biết đến chốn hẹn hò lý tưởng vào những ngày cuối tuần.
            
                Rạp được trang bị những tiện ích hiện đại nhất, ghế ngồi thoải mái và đa dạng với các loại ghế như V.I.P, Deluxe, Sweetbox, giường nằm và dàn âm thanh ứng dụng công nghệ cao. Bạn sẽ có những giây phút cực kỳ thư giãn và ý nghĩa bên cạnh nửa kia của mình, cùng “hâm nóng” tình cảm bởi những thước phim “tình bể tình” đầy ngọt ngào!
                
                Đừng quên tham khảo ngay mục Giải trí của Siêu ứng dụng MoMo để có thể đặt vé xem phim giá tốt và thanh toán nhanh gọn bạn nhé!
                ",
                "address" =>"Tầng 5 Lotte Mart Đà Nẵng - 6 Nại Nam, Phường Hòa Cường Bắc, Quận Hải Hải Châu, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://conbaoso.com/wp-content/uploads/2020/09/DIGIcafe-Phong-cach-rap-chieu-phim-chuyen-nghiep.jpg",
                "user_id" =>1,
                "category_id" => 9,
            ],
            [
                 
                "name" => "Bãi biển Mỹ Khê",
                "description" => "Bãi biển Mỹ Khê là một bãi biển tuyệt đẹp nằm tại quận Sơn Trà, được tạp chí Forbes uy tín bình chọn là 1 trong 6 bãi tắm đẹp nhất hành tinh. Bãi biển này có thể gây thương nhớ cho bất kỳ ai bởi vẻ đẹp thanh bình của mình. Những thảm cát trắng mịn bao quanh rặng dừa xanh biếc, dòng nước ấm quanh năm, cùng với nhịp sống êm đềm hứa hẹn mang đến những trải nghiệm thư giãn, lãng mạn vô cùng. 
            
                Chính vì thế, khu vực biển Mỹ Khê thường được các cặp đôi mới cưới lựa chọn cho kỳ trăng mật của mình. MoMo bật mí là những khách sạn và khu nghỉ dưỡng ven biển với tầm nhìn bao quát toàn bộ biển xanh là điểm dừng chân được yêu thích hàng đầu. Trong khung cảnh của buổi hoàng hôn, hãy nắm chặt tay nửa kia và cùng nhau dạo bước trên bờ biển, đón những làn gió biển mát lành và lưu giữ lại những kỉ niệm hạnh phúc bên nhau nhé! 
                ",
                "address" =>"Đường Võ Nguyên Giáp, Phường Phước Mỹ, Quận Sơn Trà, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://statics.vinpearl.com/bai-bien-My-Khe-Da-Nang-02.jpg",
                "user_id" =>3,
                "category_id" => 9,
            ],
            [
                 
                "name" => "Goblin Coffee & Dessert",
                "description" => "Đối với những cặp đôi yêu nhau, việc hẹn hò tại những quán cafe lãng mạn chắc chắn là hoạt động không thể thiếu. Nếu bạn đang trong chuyến du lịch cặp đôi ở Đà Nẵng, hãy dắt ngay nàng tới Goblin Coffee & Dessert để chìm đắm trong khung cảnh đậm chất Hàn Quốc và thưởng thức những thức uống tình nhân độc đáo nhé!
            
                Goblin Coffee & Dessert nằm ngay trên trục đường Lê Hồng Phong sầm uất, là một trong những quán cafe check in đẹp ở Đà Nẵng. Nếu không giới thiệu, chắc có lẽ bạn sẽ nhầm tưởng địa điểm này là một studio chụp ảnh chuyên nghiệp bởi khung cảnh cực kỳ “art” và vô cùng có gu. 
                
                Lấy cảm hứng từ bộ phim Yêu Tinh đã từng làm mưa làm gió ở xứ sở Kim Chi, Goblin Coffee & Dessert mang một sắc màu trầm lắng với những góc ảnh ngọt ngào. Những chi tiết bàn ghế hay những góc decor nhỏ cũng được chủ quán chọn lựa kỹ lưỡng tạo nên vô vàn góc sống ảo dành riêng cho những cặp đôi muốn lưu lại những khoảnh khắc bên nhau.
                ",
                "address" =>"18 Lê Hồng Phong, Phường Phước Ninh, Quận Hải Châu, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://diadiemdanang.vn/wp-content/uploads/2020/02/goblin-cafe-8.jpg",
                "user_id" =>2,
                "category_id" => 9,
            ],
            [
                 
                "name" => "Phố cổ Hội An",
                "description" => "Mọi điểm đến đều trở nên thật tuyệt vời nếu bạn đi cùng với người mình yêu, đặc biệt là Hội An - mảnh đất được mệnh danh là “con tim của xứ Quảng”. Không gian hoài cổ và sâu lắng nơi đây sẽ thêm chút hương vị nhẹ nhàng, đậm đà cho câu chuyện tình yêu của bạn đó.
            
                Đến Hội An cùng người yêu, bạn hãy thử một lần xuôi theo dòng sông Hoài để cảm nhận bầu không khí trầm mặc của phố cổ và ngắm nhìn vẻ lung linh của những ngọn đèn hoa đăng. Hoặc một buổi chiều thuê xe đạp, chở nàng dạo chơi giữa những con phố lợp đầy lồng đèn xanh đỏ cũng sẽ là một trải nghiệm lý thú. Đây sẽ là lúc đôi bạn cùng rỉ tai những câu chuyện dễ thương và cảm nhận cái ôm thật chặt từ phía sau. Mới nghe MoMo gợi ý thôi mà đã thật nôn nao rồi phải không nào!
                ",
                "address" =>"Phường Minh An, Hội An, Tỉnh Quảng Nam",
                "rating"=> 0,
                "image"=>"https://cdn.vntrip.vn/cam-nang/wp-content/uploads/2017/08/hoi-an-quang-nam-vntrip.jpg",
                "user_id" =>1,
                "category_id" => 9,
            ],
            [
                 
                "name" => "Du thuyền trên sông Hàn",
                "description" => "Vẻ đẹp thơ mộng của dòng sông Hàn sẽ không bao giờ được lột tả hết nếu bạn chỉ đứng trên bờ mà chiêm ngưỡng. Hãy cùng người thương trải nghiệm du thuyền sông Hàn nếu có chuyến ghé thăm Đà Nẵng, để có thể ngắm nhìn toàn cảnh bức tranh lung linh của thành phố về đêm và chiêm ngưỡng tuyệt tác Cầu Rồng phun lửa.
            
                Đây là một trong những trải nghiệm “hot” nhất khi du lịch cặp đôi ở Đà Nẵng. Vì thế để chọn được một chỗ ngồi lý tưởng cho buổi hẹn hò, bạn nên đặt bàn sớm, nhất là vào khoảng thời gian cuối tuần hay những dịp lễ hội như Festival pháo hoa, Lễ 2/9 hay 30/4 - 1/5. 
                
                Hiện nay, có rất nhiều đơn vị kinh doanh dịch vụ du thuyền trên sông Hàn như du thuyền RV Han Princess, du thuyền Phú Quý hay Tiên Sa… Đây đều là những đơn vị uy tín và đã hoạt động lâu năm, nên bạn có thể yên tâm chọn chuyến đi phù hợp với lịch trình và sở thích của mình nhất nhé.
                ",
                "address" =>"Sông Hàn, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://statics.vinpearl.com/du-thuyen-tren-song-han-1_1634658629.jpg",
                "user_id" =>3,
                "category_id" => 9,
            ],
            [
                 
                "name" => "Yên Retreat",
                "description" => "Nằm tại huyện Hòa Vang - một huyện ngoại thành xa xa của thành phố, Yên Retreat là một địa điểm mới toanh được dân xê dịch khám phá trong thời gian gần đây. Đây cũng chính là địa điểm tiếp theo trong top 10 điểm du lịch cặp đôi ở Đà Nẵng mà Siêu ứng dụng MoMo muốn gợi ý cho kỳ nghỉ ngọt ngào của bạn cùng “nửa kia”.
            
                Yên Retreat chắc chắn sẽ khiến nhiều cặp đôi mê đắm bởi khung cảnh cực kỳ “chill” với cảnh sắc thiên nhiên yên bình. Những chiếc lều với phong cách du mục nổi bật trên nền xanh của những bãi cỏ dài, bên cạnh là dòng sông thơ êm đềm chảy qua; tất cả tạo nên một khung cảnh đậm chất thơ trong những bộ phim châu Âu.
                
                Hãy dành tặng một bất ngờ nhỏ cho người thương bằng một buổi tiệc giữa thiên nhiên cùng với nến và hoa tại Yên Retreat. MoMo tin rằng dẫu là nàng hay chàng thì cũng sẽ phải liêu xiêu trước khung cảnh lãng mạn của nơi đây đó!
                ",
                "address" =>"Hoà Bắc, huyện Hòa Vang, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://dulichkhampha24.com/wp-content/uploads/2021/01/khu-cam-trai-ben-song-yen-retreat-da-nang-c.jpg",
                "user_id" =>2,
                "category_id" => 9,
            ],
            [
                 
                "name" => "Sun World Bà Nà Hills Đà Nẵng",
                "description" => "Một trong những điểm đến tạo nên danh tiếng của một Đà Nẵng tuyệt vời như ngày nay chính là Sun World Bà Nà Hills. Nơi đây được mệnh danh là chốn tiên cảnh nhân gian và là “nhân tố vàng” thu hút hàng triệu lượt khách du lịch đến với thành phố biển hằng năm.
            
                Bà Nà Hills là một tổ hợp gồm khu vui chơi giải trí - nghỉ dưỡng, mang đến những cảnh quan tuyệt sắc và thiên đường ẩm thực phong phú. Với những trải nghiệm đa dạng được làm nền bởi bầu không khí se lạnh tựa châu Âu, nơi đây là điểm dừng chân không thể hoàn hảo hơn cho chuyến du lịch cặp đôi ở Đà Nẵng. 
                
                Đến với Bà Nà Hills, bạn hãy cùng người thương check in mọi ngóc ngách của “xứ sở thần tiên” này để lưu giữ lại những khoảnh khắc lãng mạn. Được cùng nhau viếng chùa Linh Ứng để cầu nguyện những điều tốt đẹp cho gia đình, hay trải nghiệm những phút yên bình trên chuyến tàu hỏa leo núi sẽ đều là những kỉ niệm đáng nhớ cho đôi bạn đó.
                ",
                "address" =>"Hoà Phú, huyện Hòa Vang, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://media.vneconomy.vn/images/upload/2022/02/25/sun-world-ba-na-hills-10.jpg",
                "user_id" =>1,
                "category_id" => 10,
            ],
            [
                 
                "name" => "Giếng Trời Đà Nẵng",
                "description" => "Giếng Trời là địa điểm check in mới tại Đà Nẵng nằm ở một cánh rừng nguyên sinh thuộc huyện Hòa Vang. Đây là điểm đến của các bạn trẻ yêu thích trải nghiệm, với núi rừng hùng vĩ, cùng các hoạt động tắm suối, câu cá, cắm trại và tận hưởng không khí trong lành.
            
                Đường đến Giếng Trời khá khó đi nên bạn cần chắc tay lái. Bạn sẽ phải vượt qua 10km đường đồi thoải từ dốc gần nhà giữ xe của Bà Nà Hills. Sau đó, bạn sẽ đi qua con dốc dựng đứng, đi men theo đường mòn đến một hồ nước xanh ngắt nằm lưng chừng núi.
                
                ",
                "address" =>"Hoà Ninh, Hòa Vang, Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://statics.vinpearl.com/gieng-troi-da%20nang-1_1629123521.jpg",
                "user_id" =>3,
                "category_id" => 10,
            ],
            [
                 
                "name" => "Hồ Hòa Trung",
                "description" => "Nhắc đến địa điểm check in đẹp ở Đà Nẵng, nhiều bạn trẻ bị mê hoặc bởi vẻ đẹp của hồ Hòa Trung. Tại nơi không gian đẹp như tranh thủy mặc, bạn sẽ được hòa mình vào đồng cỏ xanh và thiên nhiên trong lành để tận hưởng cảm giác yên bình, nhẹ nhàng. Không nghi ngờ gì nữa, hồ Hòa Trung chính là nơi lý tưởng để cắm trại và picnic cùng hội bạn.
            
            
                Đường đi đến hồ Hòa Trung khá dễ và thuận tiện, vì vậy phần lớn các bạn trẻ chọn di chuyển bằng xe máy. Từ trung tâm thành phố, men theo đường Điện Biên Phủ, qua cầu vượt Ngã Ba Huế rồi chạy xe vào tuyến đường Bà Nà - Suối Mơ.
                
                Bạn cũng có thể chọn cung đường qua quốc lộ 14B, đường biển Nguyễn Tất Thành, rẽ vào đường Hoàng Văn Thái, rẽ phải tại ngã từ giao với Quốc lộ 1A là đến nơi.
                ",
                "address" =>"Hoà Liên - Hoà Ninh, Q. Liên Chiểu, TP. Đà Nẵng",
                "rating"=> 0,
                "image"=>"https://static.vinwonders.com/2022/03/ho-hoa-trung-da-nang-05.jpg",
                "user_id" =>2,
                "category_id" => 10,
            ],
            [
                 
                "name" => "Hồ Đồng Xanh - Đồng Nghệ",
                "description" => "Hồ Đồng Xanh - Đồng Nghệ tọa lạc tại địa phận xã Hòa Khương, huyện Hòa Vang, là một trong các địa điểm check-in đẹp ở Đà Nẵng mà không phải ai cũng biết. Đồng Xanh - Đồng nghệ được bao phủ bởi núi non xanh mướt mắt, và hồ nước trong, lăn tăn nhẹ nhàng.
            
                Để di chuyển đến hồ Đồng Xanh - Đồng Nghệ, bạn có thể từ cầu vượt Hòa Cầm, di chuyển theo hướng quốc lộ 14B về hướng suối nước nóng Phước Nhơn. Khi thấy một con đập ngăn nước dài bên cạnh hồ trong xanh là bạn đã đến nơi.
                ",
                "address" =>"Hòa Khương, huyện Hòa Vang",
                "rating"=> 0,
                "image"=>"https://statics.vinpearl.com/ho-dong-xanh-dong-nghe-1_1632401986.jpg",
                "user_id" =>1,
                "category_id" => 10,
            ],
            [
                 
                "name" => "Cảnh Dương Beach Camp",
                "description" => "Cảnh Dương Beach Camp nổi tiếng với bãi biển đẹp, cát trắng trải dài, nước biển trong xanh còn đậm nét hoang sơ. Trong một vài năm gần đây, Cảnh Dương Beach Camp nổi lên là một điểm check in đẹp ở Đà Nẵng, chinh phục không ít tín đồ mê du lịch biển.
            
            
                Đường tới Cảnh Dương Beach Camp khá đơn giản, chỉ cần men theo quốc lộ 1A trên tuyến Huế - Đà Nẵng. Khi thấy biển “Chốt kiểm dịch động vật và cảng Chân Mây” thì bạn rẽ vào và đi thêm 3km nữa là biển sẽ hiện ra trước mắt.
                ",
                "address" =>"cảnh dương, lộc vĩnh, phú lộc, thừa thiên huế",
                "rating"=> 0,
                "image"=>"https://kinhnghiemdulichdn.com/wp-content/uploads/2017/07/lo-trinh-du-lich-canh-duong-beach-camp.jpg",
                "user_id" =>3,
                "category_id" => 10,
            ],
            [
                 
                "name" => "Bán đảo Sơn Trà",
                "description" => "Nổi tiếng nhất trong các địa điểm check in đẹp ở Đà Nẵng phải kể đến bán đảo Sơn Trà. Cắm trại ở Bán Đảo Sơn Trà là thú vui siêu hot của giới trẻ Đà Nẵng trong thời gian gần đây. Với địa hình đa dạng có cả núi và biển, các bạn trẻ có rất nhiều sự lựa chọn địa điểm để cắm trại và ngắm thành phố Đà Nẵng về đêm.
            
                Bạn có thể di chuyển tới bán đảo Sơn Trà bằng xe máy hoặc ô tô với khoảng cách từ trung tâm tầm 10km. Bạn chỉ cần đi dọc theo sườn Chùa Linh Ứng, bạn sẽ thấy nhiều bờ đá, bãi cát để cắm lều. Một số bãi đẹp để cắm trại có thể kể đến như: Bãi Đá Đen, Bãi Bụt, Bãi Rạng và Ghềnh Bàng.
                ",
                "address" =>"Thọ Quang, quận Sơn Trà",
                "rating"=> 0,
                "image"=>"https://cdn.vntrip.vn/cam-nang/wp-content/uploads/2017/08/ban-dao-son-tra-da-nang.jpg",
                "user_id" =>2,
                "category_id" => 10,
            ],
        ]);
    }
}
