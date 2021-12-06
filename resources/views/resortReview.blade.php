@extends('client.resortReview')
@section('content')
    <div class="container">
        <section class="ftco-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-12 ftco-animate">
                                <h2 class="mb-4">Resort</h2>
                                <div class="single-slider owl-carousel">
                                    <div class="item">
                                        <div class="room-img"
                                            style="background-image: url({{ asset('clientcss/images/room-1.jpg') }})"></div>
                                    </div>
                                    <div class="item">
                                        <div class="room-img"
                                            style="background-image: url({{ asset('clientcss/images/room-2.jpg') }})"></div>
                                    </div>
                                    <div class="item">
                                        <div class="room-img"
                                            style="background-image: url({{ asset('clientcss/images/room-3.jpg') }})"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 room-single mt-4 mb-5 ftco-animate">
                                <p>Khi đến những ngọn đồi đầu tiên của Dãy núi Italic, cô đã có cái nhìn cuối cùng về đường
                                    chân trời của
                                    Bookmarksgrove quê hương cô, dòng tiêu đề của Alphabet Village và dòng phụ trên con
                                    đường của riêng cô,
                                    Line Lane. Đáng tiếc, một câu hỏi thần thoại lướt qua má cô, rồi cô tiếp tục đi.</p>
                                <div class="d-md-flex mt-5 mb-5">
                                    <ul class="list">
                                        <li><span>Max:</span> 3 Người</li>
                                        <li><span>Size:</span> 45 m2</li>
                                    </ul>
                                    <ul class="list ml-md-5">
                                        <li><span>View:</span> Hướng Biển</li>
                                        <li><span>Bed:</span> 1</li>
                                    </ul>
                                </div>
                                <p>Khi đến những ngọn đồi đầu tiên của Dãy núi Italic, cô đã có cái nhìn cuối cùng về đường
                                    chân trời của
                                    Bookmarksgrove quê hương cô, dòng tiêu đề của Alphabet Village và dòng phụ trên con
                                    đường của riêng cô,
                                    Line Lane. Đáng tiếc, một câu hỏi thần thoại lướt qua má cô, rồi cô tiếp tục đi. </p>
                            </div>
                            <div class="col-md-12 room-single ftco-animate mb-5 mt-4">
                                <h3 class="mb-4">Take A Tour</h3>
                                <div class="block-16">
                                    <figure>
                                        <img src="images/room-4.jpg" alt="Image placeholder" class="img-fluid">
                                        <a href="https://vimeo.com/45830194" class="play-button popup-vimeo"><span
                                                class="icon-play"></span></a>
                                    </figure>
                                </div>
                            </div>

                            <div class="col-md-12 properties-single ftco-animate mb-5 mt-4">
                                <h4 class="mb-4">Review &amp; Đánh Giá</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <form method="post" class="star-rating">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">
                                                    <p class="rate"><span><i class="icon-star"></i><i
                                                                class="icon-star"></i><i class="icon-star"></i><i
                                                                class="icon-star"></i><i class="icon-star"></i>
                                                            100
                                                            Đánh Giá</span></p>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">
                                                    <p class="rate"><span><i class="icon-star"></i><i
                                                                class="icon-star"></i><i class="icon-star"></i><i
                                                                class="icon-star"></i><i class="icon-star-o"></i> 30
                                                            Đánh Giá</span></p>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">
                                                    <p class="rate"><span><i class="icon-star"></i><i
                                                                class="icon-star"></i><i class="icon-star"></i><i
                                                                class="icon-star-o"></i><i class="icon-star-o"></i> 5
                                                            Đánh Giá</span></p>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">
                                                    <p class="rate"><span><i class="icon-star"></i><i
                                                                class="icon-star"></i><i class="icon-star-o"></i><i
                                                                class="icon-star-o"></i><i class="icon-star-o"></i> 0
                                                            Đánh Giá</span></p>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">
                                                    <p class="rate"><span><i class="icon-star"></i><i
                                                                class="icon-star-o"></i><i class="icon-star-o"></i><i
                                                                class="icon-star-o"></i><i class="icon-star-o"></i> 0
                                                            Đánh Giá</span></p>
                                                </label>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 room-single ftco-animate mb-5 mt-5">
                                <h4 class="mb-4">Resort hiện có</h4>
                                <div class="row">
                                    <div class="col-sm col-md-6 ftco-animate">
                                        <div class="room">
                                            <a href="{{ route('resort') }}"
                                                class="img img-2 d-flex justify-content-center align-items-center"
                                                style="background-image: url({{ asset('clientcss/images/room-2.jpg') }})">
                                                <div class="icon d-flex justify-content-center align-items-center">
                                                    <span class="icon-search2"></span>
                                                </div>
                                            </a>
                                            <div class="text p-3 text-center">
                                                <h3 class="mb-3"><a href="{{ route('resort') }}">Family Room</a>
                                                </h3>
                                                <p><span class="price mr-2">20.00 VND</span> <span
                                                        class="per">Một đêm</span></p>
                                                <hr>
                                                <p class="pt-1"><a href="{{route('resortReview')}}"
                                                        class="btn-custom">Chi Tiết <span
                                                            class="icon-long-arrow-right"></span></a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm col-md-6 ftco-animate">
                                        <div class="room">
                                            <a href="{{ route('resort') }}"
                                                class="img img-2 d-flex justify-content-center align-items-center"
                                                style="background-image: url({{ asset('clientcss/images/room-2.jpg') }})">
                                                <div class="icon d-flex justify-content-center align-items-center">
                                                    <span class="icon-search2"></span>
                                                </div>
                                            </a>
                                            <div class="text p-3 text-center">
                                                <h3 class="mb-3"><a href="{{ route('resort') }}">Family Room</a>
                                                </h3>
                                                <p><span class="price mr-2">$20.00</span> <span
                                                        class="per">Một đêm</span></p>
                                                <hr>
                                                <p class="pt-1"><a href="{{route('resortReview')}}"
                                                        class="btn-custom">Chi Tiết <span
                                                            class="icon-long-arrow-right"></span></a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div> <!-- .col-md-8 -->
                    <div class="col-lg-4 sidebar ftco-animate">
                        <div class="sidebar-box">
                            <form action="#" class="search-form">
                                <div class="form-group">
                                    <span class="icon fa fa-search"></span>
                                    <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-box ftco-animate">
                            <div class="categories">
                                <h3>Danh Mục</h3>
                                <li><a href="#">Thuộc tính <span>(12)</span></a></li>
                                <li><a href="#">Trang Chủ <span>(22)</span></a></li>
                                <li><a href="#">Nhà <span>(37)</span></a></li>
                                <li><a href="#">Villa <span>(42)</span></a></li>
                            </div>
                        </div>

                        <div class="sidebar-box ftco-animate">
                            <h3>Tin Tức</h3>
                            <div class="block-21 mb-4 d-flex">
                                <a class="blog-img mr-4"
                                    style="background-image: url({{ asset('clientcss/images/room-3.jpg') }})"></a>
                                <div class="text">
                                    <h3 class="heading"><a href="#">
                                            Ngay cả Pointing toàn năng cũng không kiểm soát được các văn bản mù quáng</a>
                                    </h3>
                                    <div class="meta">
                                        <div><a href="#"><span class="icon-calendar"></span> Ngày 12 tháng 7 năm 2018</a>
                                        </div>
                                        <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                        <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-21 mb-4 d-flex">
                                <a class="blog-img mr-4"
                                    style="background-image: url({{ asset('clientcss/images/room-3.jpg') }})"></a>
                                <div class="text">
                                    <h3 class="heading"><a href="#">
                                            Ngay cả Pointing toàn năng cũng không kiểm soát được các văn bản mù quáng</a>
                                    </h3>
                                    <div class="meta">
                                        <div><a href="#"><span class="icon-calendar"></span> Ngày 12 tháng 7 năm 2018</a>
                                        </div>
                                        <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                        <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-21 mb-4 d-flex">
                                <a class="blog-img mr-4"
                                    style="background-image: url({{ asset('clientcss/images/room-3.jpg') }})"></a>
                                <div class="text">
                                    <h3 class="heading"><a href="#">
                                            Ngay cả Pointing toàn năng cũng không kiểm soát được các văn bản mù quáng</a>
                                    </h3>
                                    <div class="meta">
                                        <div><a href="#"><span class="icon-calendar"></span> Ngày 12 tháng 7 năm 2018</a>
                                        </div>
                                        <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                        <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar-box ftco-animate">
                            <h3>Tag</h3>
                            <div class="tagcloud">
                                <a href="#" class="tag-cloud-link">monan</a>
                                <a href="#" class="tag-cloud-link">thucdon</a>
                                <a href="#" class="tag-cloud-link">doan</a>
                                <a href="#" class="tag-cloud-link">ngot</a>
                            </div>
                        </div>

                        <div class="sidebar-box ftco-animate">
                            <h3>Đoạn văn</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem
                                necessitatibus voluptate
                                quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique,
                                inventore eos
                                fugit cupiditate numquam!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
