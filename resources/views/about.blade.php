@extends('client.about')
@section('content')
    <div class="container">
        <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url({{ asset('clientcss/images/bg_2.jpg')}});">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                                <div class="block-18 text-center">
                                    <div class="text">
                                        <strong class="number" data-number="50000">0</strong>
                                        <span>Người tham quan</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                                <div class="block-18 text-center">
                                    <div class="text">
                                        <strong class="number" data-number="3000">0</strong>
                                        <span>Resort</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                                <div class="block-18 text-center">
                                    <div class="text">
                                        <strong class="number" data-number="1000">0</strong>
                                        <span>Nhân viên</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                                <div class="block-18 text-center">
                                    <div class="text">
                                        <strong class="number" data-number="100">0</strong>
                                        <span>Điểm đến</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-section ftc-no-pb ftc-no-pt">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 p-md-5 img img-2 img-3 d-flex justify-content-center align-items-center"
                        style="background-image: url({{ asset('clientcss/images/bg_2.jpg')}});">
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
                                của nó sẽ
                                được viết lại hàng nghìn lần và mọi thứ còn lại từ nguồn gốc của nó sẽ là từ "và" và Văn bản
                                Người mù nhỏ
                                nên quay lại và trở lại như cũ, đất nước an toàn. Nhưng không có gì mà bản sao nói có thể
                                thuyết phục cô
                                ấy và vì vậy không mất nhiều thời gian cho đến khi một vài Copy Writers quỷ quyệt phục kích
                                cô ấy, khiến
                                cô ấy say xỉn với Longe và Parole và kéo cô ấy vào cơ quan của họ, nơi họ lạm dụng cô ấy vì
                                họ.</p>
                            <p>Khi đến những ngọn đồi đầu tiên của Dãy núi Italic, cô có cái nhìn cuối cùng về đường chân
                                trời của
                                Bookmarksgrove quê hương cô, dòng tiêu đề của Làng Alphabet và dòng phụ trên con đường của
                                riêng cô, Line
                                Lane. Đáng tiếc, một câu hỏi thần thoại lướt qua má cô, rồi cô tiếp tục đi.

                            </p>
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
                                <p>
                                    Một con sông nhỏ tên là Duden chảy qua nơi ở và nguồn cung cấp của họ.</p>
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
                                <p>
                                    Một con sông nhỏ tên là Duden chảy qua nơi ở và nguồn cung cấp của họ.</p>
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
                                <p>
                                    Một con sông nhỏ tên là Duden chảy qua nơi ở và nguồn cung cấp của họ.</p>
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
    </div>
@endsection
