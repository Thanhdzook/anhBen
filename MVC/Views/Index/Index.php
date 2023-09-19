<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="/Project---CTStore---WD1110/MVC/wwwroot/img/t2.png"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="/Project---CTStore---WD1110/MVC/wwwroot/css/layout/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/Project---CTStore---WD1110/MVC/wwwroot/bootstrap-5.0.2-dist/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="/anh ben/MVC/wwwroot/css/Index/Index.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <style>
        body{
            background-color: #ffe6bc;
        }
        header {
            padding: 10px 10px;
            background-color: #f6f6f6;
            border-radius: 10px;
            margin: 10px 10px;
        }
        .hr1{
            border: none;
            height: 2px;
            /* Set the hr color */
            color: #2f2f2f; /* old IE */
            background-color: #2f2f2f; /* Modern Browsers */
        }
        .hr2 {
            border: none;
            height: 0.5px;
            /* Set the hr color */
            color: #2f2f2f; /* old IE */
            background-color: #2f2f2f; /* Modern Browsers */
        }
        img.banner {
            content: center;
            max-width: 100%;
            border-radius: 15px;
            height: auto;
        }
        @media (max-width: 768px) {
            .banner{
            max-width: 100%;
            }
        }
        .icon{
            /* position: absolute; */
        }
        .img {
            margin-top: 10px;
        }
        
        .kodfun-galeri {
            display : flex;
            height : 20rem;
            gap : 1rem
        }
        .kodfun-galeri > div {
            flex : 1;
            border-radius: 1rem;
            background-position: center;
            background-repeat: no-repeat;
            background-size: auto 100%;
            transition: all .8s cubic-bezier(.25 , .4 , .45 , 1.4);
        }
        .kodfun-galeri > div:hover {
            flex : 5;
        }

        /* .member-right , .member-left {
            display: flex;
            border-radius: 10px;
            margin: 10px 0;
            padding: 10px 10px;
        }
        
        .member-right , .member-left img {
            max-width: 200px;
        }

        .member-right {
            
        }

        div .text {
            margin: 0 10px;
            border-radius: 10px;
            background-color: white;
            width: 100%;
        } */

        content {
            display: flex;
            background-color: #f6f6f6;
            border-radius: 10px;
            margin: 10px 10px;
        }

        .introduce {
            margin: 10px 10px;
            border-radius: 10px;
            /* padding: 10px 10px;
            background-color: #f6f6f6;
            border-radius: 10px; */
        }

        .video {
            margin: 10px 10px;
            border-radius: 10px;
        }
        .introduce_text {
            font-size: 20px;
        }

        .t1 {
            padding: 10px 10px;
            background-color: white;
            border-radius: 10px;
            margin: 10px 10px;
        }

        .t2 {
            text-align: center;
            top : 200px
        }

        .icon {
            font-size: 50px;   
        }

        i {
            margin: 20px;
        }
        
        @media (max-width: 768px) {
            content {
            display: block;
            }
            
            .t1 {
                width: 350px;
            }

            h1 {
                font-size: 20px;
            }

            .icon {
            font-size: 30px;   
            }

            .kodfun-galeri {
            height : 5rem;
            }   
        }
    </style>
</head>
<body>
    <!-- <div class="contact">
        <i class="fa-brands fa-facebook" style="color: #b87142;"></i>
    </div> -->
    <header>
        <div class="banner">
            <!-- <a class="icon"><i class="fa-brands fa-facebook" style="color: #b87142; font-size: 50px; "></i></a> -->
            <img src="/anh ben/MVC/wwwroot/img/z4696117406556_1ad1a7d20ecadd5e3d312c7ea3fedc8e.png" alt="" class="banner">
        </div>
        <div class="img">
            <div class="kodfun-galeri">
                <div style="background-image: url('/anh ben/MVC/wwwroot/img/z4696113478650_0e39c0f238ce18c7c4f4bb23f6830e6f.png');"></div>
                <div style="background-image: url('/anh ben/MVC/wwwroot/img/z4696113927396_04cf093de7a15316c4a7a100bb681962.png');"></div>
                <div style="background-image: url('/anh ben/MVC/wwwroot/img/z4696114130686_adf5d583513133fd1fddca1a27f72ee8.png');"></div>
                <div style="background-image: url('/anh ben/MVC/wwwroot/img/z4696115368055_32391d10a03f80eea05de20db1702f07.png');"></div>
                <div style="background-image: url('/anh ben/MVC/wwwroot/img/z4696118338762_0fcfa1638175afeaaff5bb1c112174b1.png');"></div>
                <div style="background-image: url('/anh ben/MVC/wwwroot/img/z4696123913009_c345e775e15ab1f57248902358a3b14c.png');"></div>
                <div style="background-image: url('/anh ben/MVC/wwwroot/img/z4696128069723_bda8ea21ce152d066f06d720d2503ca8.png');"></div>
                <div style="background-image: url('/anh ben/MVC/wwwroot/img/Hung.png');"></div>
                <div style="background-image: url('/anh ben/MVC/wwwroot/img/Lýpng.png');"></div>
                <div style="background-image: url('/anh ben/MVC/wwwroot/img/Long.png');"></div>
            </div>
        </div>
        <!-- <div class="slideshow">
            <div class="slider slider-1">
                <div class="item">
                <img src="https://images.unsplash.com/photo-1465935343323-d742334bcbda?crop=entropy&fit=crop&fm=jpg&h=975&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=1925">
                </div>
                <div class="item">
                <img src="https://images.unsplash.com/photo-1443890923422-7819ed4101c0?crop=entropy&fit=crop&fm=jpg&h=975&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=1925">
                </div>
                <div class="item">
                <img src="https://images.unsplash.com/photo-1474861644511-0f2775ae97cc?crop=entropy&fit=crop&fm=jpg&h=975&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=1925">
                </div>
            </div>
        </div> -->
    </header>
    
    <!-- <div class="member">
        <div class="member-left">
            <img src="/anh ben/MVC/wwwroot/img/Untitled.png" alt="" class="banner">
            <div class="text">asdsad</div>
        </div>
        <div class="member-right">
            <div class="text">asdasd</div>
            <img src="/anh ben/MVC/wwwroot/img/Untitled.png" alt="" class="banner">
        </div>
        <div class="member-left">
            <img src="/anh ben/MVC/wwwroot/img/Untitled.png" alt="" class="banner">
            <div class="text">asdsad</div>
        </div>
        <div class="member-right">
            <div class="text">asdasd</div>
            <img src="/anh ben/MVC/wwwroot/img/Untitled.png" alt="" class="banner">
        </div>
        <div class="member-left">
            <img src="/anh ben/MVC/wwwroot/img/Untitled.png" alt="" class="banner">
            <div class="text">asdsad</div>
        </div>
        <div class="member-right">
            <div class="text">asdasd</div>
            <img src="/anh ben/MVC/wwwroot/img/Untitled.png" alt="" class="banner">
        </div>
        <div class="member-left">
            <img src="/anh ben/MVC/wwwroot/img/Untitled.png" alt="" class="banner">
            <div class="text">asdsad</div>
        </div>
        <div class="member-right">
            <div class="text">asdasd</div>
            <img src="/anh ben/MVC/wwwroot/img/Untitled.png" alt="" class="banner">
        </div>
        <div class="member-left">
            <img src="/anh ben/MVC/wwwroot/img/Untitled.png" alt="" class="banner">
            <div class="text">asdsad</div>
        </div>
        <div class="member-right" style="background-color: red;">
            <div class="text">asdasd</div>
            <img src="/anh ben/MVC/wwwroot/img/Untitled.png" alt="" class="banner">
        </div>
    </div> -->
    <content >
        <div class="t1 col-xl-7 col">
            <div class="introduce">
                <hr class="hr1">
                <h1>Giới thiệu</h1>
                <hr class="hr2">
                <h2>BAN NHẠC</h2>
                <p class="introduce_text">BENLYS là một ban nhạc đa màu sắc người Việt Nam được thành lập vào năm 2022 bởi Hà Minh Hải (Trưởng nhóm, Vocalist, Sáng tác).  
Được biết đến là một ban nhạc trẻ trung với các bạn sinh viên - những nười có niềm đam mê và nhiệt huyết sâu sắc, muốn cống hiến cho âm nhạc nói riêng và nghệ thuật nói chung. Mong muốn của ban nhạc là có thể tạo ra các sản phẩm, di sản mang đậm bản sắc riêng, có giá trị cảm xúc sâu sắc, đắm chìm trong dòng nhạc nhẹ.

Ban nhạc dần phát triển và mở rộng ra theo xu hướng âm nhạc thị trường; nhưng không dừng  lại ở đó, ban nhạc có rất nhiều âm hưởng khác nhau từ các dòng nhạc trẻ thập niên 8x, 9x đến những dòng nhạc trữ tình, từ những màu sắc âm nhạc sâu lắng cho đến những bài nhạc trẻ trung, năng lượng.
</p>
                <h2>Ý NGHĨA TÊN BAN NHẠC</h2>
                <p class="introduce_text">Cái tên BENLYS được lấy cảm hứng từ những đức tính quý giá và sâu sắc từ những thế hệ đi trước, những thầy cô trường nhạc viện - thể hiện cho sự khát khao và tinh thần của những người nghệ sĩ:
</p>
                <ul>
                    <li>Brave: Thể hiện sự dũng cảm, dám nghĩ dám làm, đương đầu với thử thách, không phàn nàn, không ngại ngại khó khăn cũng như vấp ngã.
</li>
                    <li>Energy: Thể hiện cho lòng nhiệt huyết, tinh thần trách nhiệm, tính kỷ luật, sự cẩn thận trong từng công việc từ nhỏ đến lớn.</li>
                    <li>Nobody: Thể hiện rằng không một quyền lực hay lợi ích của cá nhân nào lớn hơn hay ảnh hưởng đến tinh thần và sức mạnh của tập thể.</li>
                    <li>Love: Thể hiện cho sự đam mê âm nhạc và nghệ thuật to lớn - được cộng hưởng bởi tình yêu cũng như sự nghiêm túc của mỗi người nghệ sĩ.</li>
                    <li>Yield: Thể hiện cho tính năng suất, hiệu quả, làm việc thông minh, chăm chỉ, sự kết nối bền chặt giữa các thành viên với nhau.</li>
                    <li>Shine: Thể hiện cho sự rực cháy, tỏa sáng hết mình trong từng khoảnh khắc để luôn bùng nổ, cảm thấy ý nghĩa, hạnh phúc trong từng giây phút cuộc đời.</li>
                <ul>
                <!-- <p class="introduce_text">nhóm gồm abc acb acb</p>
                <p class="introduce_text">nhóm gồm abc acb acb</p>
                <p class="introduce_text">nhóm gồm abc acb acb</p> -->
            </div>

            <div class="video">
                <hr class="hr1">
                <h1>Video</h1>
                <hr class="hr2">
                <p class="introduce_text">nhóm gồm abc acb acb</p>
                <p class="introduce_text">nhóm gồm abc acb acb</p>
                <p class="introduce_text">nhóm gồm abc acb acb</p>
            </div>
        </div>
        <div class="t2 col-xl-5 col">
            <h1 class="LH">LIÊN HỆ VỚI CHÚNG TÔI</h1>
            <div class="icon"><a href="#"><i class="fa-brands fa-facebook fa-beat" style="color: #d7c465;"></i></a><a href="#"><i class="fa-brands fa-square-instagram fa-beat" style="color: #d7c465;"></i></a><a href="#"><i class="fa-brands fa-tiktok fa-beat" style="color: #d7c465;"></i></a><a href="#"><i class="fa-solid fa-phone fa-beat" style="color: #d7c465;"></i></a>
            </div>
            <p style="font-size : 20px">Làm việc 24/7 </p>
        </div>
    </content>
    <!-- <script src="/anh ben/MVC/wwwroot/js/index.js"></script> -->
</body>
</html>