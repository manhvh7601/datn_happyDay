@extends('client.index')
@section('content')
    {{-- Check date --}}
    <section class="ftco-booking">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form action="#" class="booking-form">
                        <div class="row">
                            <div class="col-md-3 d-flex">
                                <div class="form-group p-4 align-self-stretch d-flex align-items-end">
                                    <div class="wrap">
                                        <label for="#">Ngày Đến</label>
                                        <input type="text" class="form-control checkin_date" placeholder="Check-in date">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 d-flex">
                                <div class="form-group p-4 align-self-stretch d-flex align-items-end">
                                    <div class="wrap">
                                        <label for="#">Ngày Đi</label>
                                        <input type="text" class="form-control checkout_date" placeholder="Check-out date">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md d-flex">
                                <div class="form-group p-4 align-self-stretch d-flex align-items-end">
                                    <div class="wrap">
                                        <label for="#">Phòng</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="ion-ios-arrow-down"></span>
                                                </div>
                                                <select name="" id="" class="form-control">
                                                    <option value="">Suite</option>
                                                    <option value="">Phòng gia đình </option>
                                                    <option value="">Deluxe Room</option>
                                                    <option value="">Phòng cổ điển</option>
                                                    <option value="">Phòng Superior</option>
                                                    <option value="">Phòng sang trọng </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md d-flex">
                                <div class="form-group p-4 align-self-stretch d-flex align-items-end">
                                    <div class="wrap">
                                        <label for="#">Khách Hàng</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="ion-ios-arrow-down"></span>
                                                </div>
                                                <select name="" id="" class="form-control">
                                                    <option value="">1 Người</option>
                                                    <option value="">2 Người</option>
                                                    <option value="">3 Người</option>
                                                    <option value="">4 Người</option>
                                                    <option value="">5 Người</option>
                                                    <option value="">6 Người</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md d-flex">
                                <div class="form-group d-flex align-self-stretch">
                                    <input type="submit" value="Check Availability"
                                        class="btn btn-primary py-3 px-4 align-self-stretch">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftc-no-pb ftc-no-pt">
        <div class="container">
            <div class="row">
                <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center"
                    style="background-image: url({{ asset('clientcss/images/bg_2.jpg') }})">
                    <a href="https://vimeo.com/45830194"
                        class="icon popup-vimeo d-flex justify-content-center align-items-center">
                        <span class="icon-play"></span>
                    </a>
                </div>
                <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
                    <div class="heading-section heading-section-wo-line pt-md-5 pl-md-5 mb-5">
                        <div class="ml-md-0">
                            <span class="subheading">Chào mừng đến với HappyDay</span>
                            <h2 class="mb-4">Chào mừng đến với Resort của chúng tôi</h2>
                        </div>
                    </div>
                    <div class="pb-md-5">
                        <p>Trên đường đi, cô đã gặp một bản sao. Bản sao cảnh báo Văn bản Người mù, rằng nơi xuất phát
                            của nó sẽ được viết lại hàng nghìn lần và mọi thứ còn lại từ nguồn gốc của nó sẽ là từ "và"
                            và Văn bản Người mù nhỏ nên quay lại và trở lại như cũ, đất nước an toàn. Nhưng không có gì
                            bản sao nói có thể thuyết phục cô ấy và vì vậy không mất nhiều thời gian cho đến khi một vài
                            Copy Writers quỷ quyệt phục kích cô ấy, làm cho cô ấy say rượu với Longe và Parole và kéo cô
                            ấy vào cơ quan của họ, nơi họ lạm dụng cô ấy vì họ.</p>
                        <p>Khi đến những ngọn đồi đầu tiên của Dãy núi Italic, cô đã có cái nhìn cuối cùng về đường chân
                            trời của Bookmarksgrove quê hương cô, dòng tiêu đề của Alphabet Village và dòng phụ trên con
                            đường của riêng cô, Line Lane. Đáng tiếc, một câu hỏi thần thoại lướt qua má cô, rồi cô tiếp
                            tục đi. </p>
                        <ul class="ftco-social d-flex">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services py-4 d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-reception-bell"></span>
                            </div>
                        </div>
                        <div class="media-body p-2 mt-2">
                            <h3 class="heading mb-3">Lễ tân 24/7</h3>
                            <p>Một con sông nhỏ tên là Duden chảy qua nơi ở và nguồn cung cấp của họ.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services py-4 d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-serving-dish"></span>
                            </div>
                        </div>
                        <div class="media-body p-2 mt-2">
                            <h3 class="heading mb-3">Quầy bar nhà hàng</h3>
                            <p>Một con sông nhỏ tên là Duden chảy qua nơi ở và nguồn cung cấp của họ.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-sel Searchf-stretch ftco-animate">
                    <div class="media block-6 services py-4 d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-car"></span>
                            </div>
                        </div>
                        <div class="media-body p-2 mt-2">
                            <h3 class="heading mb-3">Dịch vụ chuyển tiền</h3>
                            <p>Một con sông nhỏ tên là Duden chảy qua nơi ở và nguồn cung cấp của họ.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services py-4 d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-spa"></span>
                            </div>
                        </div>
                        <div class="media-body p-2 mt-2">
                            <h3 class="heading mb-3">Spa</h3>
                            <p>Một con sông nhỏ tên là Duden chảy qua nơi ở và nguồn cung cấp của họ.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Những Resort Của Chúng Tôi</h2>
                </div>
            </div>
            <div class="row">
                {{-- Show resort --}}
                <div class="col-sm col-md-6 col-lg-4 ftco-animate">
                    <div class="room">
                        <a href="rooms.blade.php" class="img d-flex justify-content-center align-items-center"
                            style="background-image: url({{ asset('clientcss/images/room-1.jpg') }})">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-search2"></span>
                            </div>
                        </a>
                        <div class="text p-3 text-center">
                            <h3 class="mb-3"><a href="rooms.blade.php">Phòng Vip Pro</a></h3>
                            <p><span class="price mr-2">1.120.00 VND</span> <span class="per">Mỗi
                                    đêm</span></p>
                            <hr>
                            <p class="pt-1"><a href="rooms-single.blade.php" class="btn-custom">Xem chi
                                    tiết <span class="icon-long-arrow-right"></span></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm col-md-6 col-lg-4 ftco-animate">
                    <div class="room">
                        <a href="rooms.blade.php" class="img d-flex justify-content-center align-items-center"
                            style="background-image: url({{ asset('clientcss/images/room-1.jpg') }})">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-search2"></span>
                            </div>
                        </a>
                        <div class="text p-3 text-center">
                            <h3 class="mb-3"><a href="rooms.blade.php">Phòng Vip Pro</a></h3>
                            <p><span class="price mr-2">1.120.00 VND</span> <span class="per">Mỗi
                                    đêm</span></p>
                            <hr>
                            <p class="pt-1"><a href="rooms-single.blade.php" class="btn-custom">Xem chi
                                    tiết <span class="icon-long-arrow-right"></span></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm col-md-6 col-lg-4 ftco-animate">
                    <div class="room">
                        <a href="rooms.blade.php" class="img d-flex justify-content-center align-items-center"
                            style="background-image: url({{ asset('clientcss/images/room-1.jpg') }})">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-search2"></span>
                            </div>
                        </a>
                        <div class="text p-3 text-center">
                            <h3 class="mb-3"><a href="rooms.blade.php">Phòng Vip Pro</a></h3>
                            <p><span class="price mr-2">1.120.00 VND</span> <span class="per">Mỗi
                                    đêm</span></p>
                            <hr>
                            <p class="pt-1"><a href="rooms-single.blade.php" class="btn-custom">Xem chi
                                    tiết <span class="icon-long-arrow-right"></span></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm col-md-6 col-lg-4 ftco-animate">
                    <div class="room">
                        <a href="rooms.blade.php" class="img d-flex justify-content-center align-items-center"
                            style="background-image: url({{ asset('clientcss/images/room-1.jpg') }})">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-search2"></span>
                            </div>
                        </a>
                        <div class="text p-3 text-center">
                            <h3 class="mb-3"><a href="rooms.blade.php">Phòng Vip Pro</a></h3>
                            <p><span class="price mr-2">1.120.00 VND</span> <span class="per">Mỗi
                                    đêm</span></p>
                            <hr>
                            <p class="pt-1"><a href="rooms-single.blade.php" class="btn-custom">Xem chi
                                    tiết <span class="icon-long-arrow-right"></span></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm col-md-6 col-lg-4 ftco-animate">
                    <div class="room">
                        <a href="rooms.blade.php" class="img d-flex justify-content-center align-items-center"
                            style="background-image: url({{ asset('clientcss/images/room-1.jpg') }})">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-search2"></span>
                            </div>
                        </a>
                        <div class="text p-3 text-center">
                            <h3 class="mb-3"><a href="rooms.blade.php">Phòng Vip Pro</a></h3>
                            <p><span class="price mr-2">1.120.00 VND</span> <span class="per">Mỗi
                                    đêm</span></p>
                            <hr>
                            <p class="pt-1"><a href="rooms-single.blade.php" class="btn-custom">Xem chi
                                    tiết <span class="icon-long-arrow-right"></span></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm col-md-6 col-lg-4 ftco-animate">
                    <div class="room">
                        <a href="rooms.blade.php" class="img d-flex justify-content-center align-items-center"
                            style="background-image: url({{ asset('clientcss/images/room-1.jpg') }})">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-search2"></span>
                            </div>
                        </a>
                        <div class="text p-3 text-center">
                            <h3 class="mb-3"><a href="rooms.blade.php">Phòng Vip Pro</a></h3>
                            <p><span class="price mr-2">1.120.00 VND</span> <span class="per">Mỗi
                                    đêm</span></p>
                            <hr>
                            <p class="pt-1"><a href="rooms-single.blade.php" class="btn-custom">Xem chi
                                    tiết <span class="icon-long-arrow-right"></span></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-counter img" id="section-counter"
        style="background-image: url({{ asset('clientcss/images/bg_1.jpg') }})">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="50000">0</strong>
                                    <span>Khách vui vẻ </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="3000">0</strong>
                                    <span>Phòng</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="1000">0</strong>
                                    <span>Nhân Viên</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="100">0</strong>
                                    <span>Điểm Đến</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Review Khach hang --}}
    <section class="ftco-section testimony-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 ftco-animate">
                    <div class="row ftco-animate">
                        <div class="col-md-12">
                            <div class="carousel-testimony owl-carousel ftco-owl">
                                <div class="item">
                                    <div class="testimony-wrap py-4 pb-5">
                                        <div class="user-img mb-4"
                                            style="background-image: url({{ asset('clientcss/images/person_1.jpg') }})">
                                            <span class="quote d-flex align-items-center justify-content-center">
                                                <i class="icon-quote-left"></i>
                                            </span>
                                        </div>
                                        <div class="text text-center">
                                            <p class="mb-4">Một con sông nhỏ có tên Duden chảy qua nơi ở và
                                                nguồn cung
                                                cấp của họ
                                                nó với regelialia cần thiết. Nó là một đất nước hoang tưởng, ở
                                                những phần rang của câu bay vào miệng của bạn. </p>
                                            <p class="name">Tùng</p>
                                            <span class="position">Khách</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimony-wrap py-4 pb-5">
                                        <div class="user-img mb-4"
                                            style="background-image: url({{ asset('clientcss/images/person_1.jpg') }})">
                                            <span class="quote d-flex align-items-center justify-content-center">
                                                <i class="icon-quote-left"></i>
                                            </span>
                                        </div>
                                        <div class="text text-center">
                                            <p class="mb-4">Một con sông nhỏ có tên Duden chảy qua nơi ở và
                                                nguồn cung
                                                cấp của họ
                                                nó với regelialia cần thiết. Nó là một đất nước hoang tưởng, ở
                                                những phần rang của câu bay vào miệng của bạn. </p>
                                            <p class="name">Tùng</p>
                                            <span class="position">Khách</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimony-wrap py-4 pb-5">
                                        <div class="user-img mb-4"
                                            style="background-image: url({{ asset('clientcss/images/person_1.jpg') }})">
                                            <span class="quote d-flex align-items-center justify-content-center">
                                                <i class="icon-quote-left"></i>
                                            </span>
                                        </div>
                                        <div class="text text-center">
                                            <p class="mb-4">Một con sông nhỏ có tên Duden chảy qua nơi ở và
                                                nguồn cung
                                                cấp của họ
                                                nó với regelialia cần thiết. Nó là một đất nước hoang tưởng, ở
                                                những phần rang của câu bay vào miệng của bạn. </p>
                                            <p class="name">Tùng</p>
                                            <span class="position">Khách</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimony-wrap py-4 pb-5">
                                        <div class="user-img mb-4"
                                            style="background-image: url({{ asset('clientcss/images/person_1.jpg') }})">
                                            <span class="quote d-flex align-items-center justify-content-center">
                                                <i class="icon-quote-left"></i>
                                            </span>
                                        </div>
                                        <div class="text text-center">
                                            <p class="mb-4">Một con sông nhỏ có tên Duden chảy qua nơi ở và
                                                nguồn cung
                                                cấp của họ
                                                nó với regelialia cần thiết. Nó là một đất nước hoang tưởng, ở
                                                những phần rang của câu bay vào miệng của bạn. </p>
                                            <p class="name">Tùng</p>
                                            <span class="position">Khách</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimony-wrap py-4 pb-5">
                                        <div class="user-img mb-4"
                                            style="background-image: url({{ asset('clientcss/images/person_1.jpg') }})">
                                            <span class="quote d-flex align-items-center justify-content-center">
                                                <i class="icon-quote-left"></i>
                                            </span>
                                        </div>
                                        <div class="text text-center">
                                            <p class="mb-4">Một con sông nhỏ có tên Duden chảy qua nơi ở và
                                                nguồn cung
                                                cấp của họ
                                                nó với regelialia cần thiết. Nó là một đất nước hoang tưởng, ở
                                                những phần rang của câu bay vào miệng của bạn. </p>
                                            <p class="name">Tùng</p>
                                            <span class="position">Khách</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Show tin tuc --}}
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2>Tin Gần Đây</h2>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-3 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.blade.php" class="block-20"
                            style="background-image: url({{ asset('clientcss/images/image_4.jpg') }})">
                        </a>
                        <div class="text mt-3">
                            <h3 class="heading mt-3"><a href="#">Ngay cả Pointing toàn năng cũng không kiểm soát được
                                    các văn bản mù quáng</a></h3>
                            <div class="meta mb-3">
                                <div><a href="#">6 Tháng 12, 2018</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.blade.php" class="block-20"
                            style="background-image: url({{ asset('clientcss/images/image_4.jpg') }})">
                        </a>
                        <div class="text mt-3">
                            <h3 class="heading mt-3"><a href="#">Ngay cả Pointing toàn năng cũng không kiểm soát được
                                    các văn bản mù quáng</a></h3>
                            <div class="meta mb-3">
                                <div><a href="#">6 Tháng 12, 2018</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.blade.php" class="block-20"
                            style="background-image: url({{ asset('clientcss/images/image_4.jpg') }})">
                        </a>
                        <div class="text mt-3">
                            <h3 class="heading mt-3"><a href="#">Ngay cả Pointing toàn năng cũng không kiểm soát được
                                    các văn bản mù quáng</a></h3>
                            <div class="meta mb-3">
                                <div><a href="#">6 Tháng 12, 2018</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.blade.php" class="block-20"
                            style="background-image: url({{ asset('clientcss/images/image_4.jpg') }})">
                        </a>
                        <div class="text mt-3">
                            <h3 class="heading mt-3"><a href="#">Ngay cả Pointing toàn năng cũng không kiểm soát được
                                    các văn bản mù quáng</a></h3>
                            <div class="meta mb-3">
                                <div><a href="#">6 Tháng 12, 2018</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
