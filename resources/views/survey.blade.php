<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Khảo sát nhận quà - Hoàng Hải Mobile JP">
    <meta name="author" content="Sweetsica">
    <title>Khảo sát nhận quà - Hoàng Hải Mobile JP</title>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Caveat|Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
    <!-- BASE CSS -->
    <link href="{{asset('survey/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('survey/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('survey/css/vendors.css')}}" rel="stylesheet">
    <!-- YOUR CUSTOM CSS -->
    <link href="{{asset('survey/css/custom.css')}}" rel="stylesheet">
</head>
<body class="style_2">
<div id="preloader">
    <div data-loader="circle-side"></div>
</div><!-- /Preload -->
<div id="loader_form">
    <div data-loader="circle-side-2"></div>
</div><!-- /loader_form -->
<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 custom-logo">
                <a href="https://hoanghaimobile.jp"><img src="https://muahang.hoanghaimobile.jp/assets/logo.png" alt="" width="230" height="55"></a>
            </div>

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</header>
<!-- /header -->
<div class="wrapper_centering">
    <div class="container_centering">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-6 col-lg-6 d-flex align-items-center">
                    <div class="main_title_1">
                        <h3><img src="{{asset('survey/img/main_icon_1.svg')}}" width="80" height="80" alt="">  Khảo sát</h3>
                        <p>Nhằm thấu hiểu và nâng cấp trải nghiệm của khách hàng, xin quý khách vui lòng thực hiện khảo sát nhỏ sau đây nhé.</p>
                        <p><em>- Hoang Hai Mobile</em></p>
                    </div>
                </div>
                <!-- /col -->
                <div class="col-xl-5 col-lg-5">
                    <div id="wizard_container">
                        <div id="top-wizard">
                            <div id="progressbar"></div>
                        </div>
                        <!-- /top-wizard -->
                        <form id="wrapped" method="POST" autocomplete="off" action="{{route('khaosat.save')}}">
                            @csrf
                            <input id="website" name="website" type="text" value="">
                            <!-- Leave for security protection, read docs for details -->
                            <div id="middle-wizard">
                                <div class="step">
                                    <h3 class="main_question"><strong>1 of 6</strong>Bạn thấy chất lượng phục vụ tại Hoàng Hải như thế nào ?</h3>
                                    <div class="review_block_smiles">
                                        <ul class="clearfix">
                                            <li>
                                                <div class="container_smile">
                                                    <input type="radio" id="tuyet_voi_1" name="question_1" class="required" value="Tuyệt vời" onchange="getVals(this, 'question_1');">
                                                    <label class="radio smile_5" for="tuyet_voi_1"><span>Tuyệt vời</span></label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_smile">
                                                    <input type="radio" id="binh_thuong_1" name="question_1" class="required" value="Bình thường" onchange="getVals(this, 'question_1');">
                                                    <label class="radio smile_4" for="binh_thuong_1"><span>Bình thường</span></label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_smile">
                                                    <input type="radio" id="tam_on_1" name="question_1" class="required" value="Tạm ổn" onchange="getVals(this, 'question_1');">
                                                    <label class="radio smile_3" for="tam_on_1"><span>Tạm ổn</span></label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_smile">
                                                    <input type="radio" id="khong_tot_1" name="question_1" class="required" value="Không tốt" onchange="getVals(this, 'question_1');">
                                                    <label class="radio smile_2" for="khong_tot_1"><span>Không tốt</span></label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_smile">
                                                    <input type="radio" id="rat_te_1" name="question_1" class="required" value="Rất tệ" onchange="getVals(this, 'question_1');">
                                                    <label class="radio smile_1" for="rat_te_1"><span>Rất tệ</span></label>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="row justify-content-between add_bottom_25">
                                            <div class="col-4">
                                                <em>Tuyệt vời</em>
                                            </div>
                                            <div class="col-4 text-end">
                                                <em>Rất tệ</em>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="additional_message_label">Nhận xét</label>
                                        <textarea name="additional_message" id="additional_message_label" class="form-control" style="height:180px;" onkeyup="getVals(this, 'additional_message');"></textarea>
                                    </div>
                                </div>
                                <!-- /step 1-->
                                <div class="step">
                                    <h3 class="main_question mb-4"><strong>2 of 6</strong>Bạn nghĩ Hoàng Hải cần cải thiện dịch vụ nào trong thời gian tới?</h3>
                                    <div class="review_block">
                                        <ul>
                                            <li>
                                                <div class="checkbox_radio_container">
                                                    <input type="radio" id="dich_vu_nhan_tin_2" name="question_2" class="required" value="Dịch vụ nhắn tin tư vấn" onchange="getVals(this, 'question_2');">
                                                    <label class="radio" for="dich_vu_nhan_tin_2"></label>
                                                    <label for="dich_vu_nhan_tin_2" class="wrapper">Dịch vụ nhắn tin tư vấn</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox_radio_container">
                                                    <input type="radio" id="dich_vu_dong_goi_2" name="question_2" class="required" value="Dịch vụ đóng gói hàng hoá" onchange="getVals(this, 'question_2');">
                                                    <label class="radio" for="dich_vu_dong_goi_2"></label>
                                                    <label for="dich_vu_dong_goi_2" class="wrapper">Dịch vụ đóng gói hàng hoá</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox_radio_container">
                                                    <input type="radio" id="dich_vu_qua_tang_2" name="question_2" class="required" value="Dịch vụ quà tặng , chăm sóc" onchange="getVals(this, 'question_2');">
                                                    <label class="radio" for="dich_vu_qua_tang_2"></label>
                                                    <label for="dich_vu_qua_tang_2" class="wrapper">Dịch vụ quà tặng , chăm sóc</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox_radio_container">
                                                    <input type="radio" id="thai_do_nhan_vien_2" name="question_2" class="required" value="Thái độ nhân viên tại cửa hàng" onchange="getVals(this, 'question_2');">
                                                    <label class="radio" for="thai_do_nhan_vien_2"></label>
                                                    <label for="thai_do_nhan_vien_2" class="wrapper">Thái độ nhân viên tại cửa hàng</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /step 2-->
                                <div class="step">
                                    <h3 class="main_question"><strong>3 of 6</strong>Bạn biết đến Hoàng Hải từ kênh nào ?</h3>
                                    <div class="review_block">
                                        <ul>
                                            <li>
                                                <div class="checkbox_radio_container">
                                                    <input type="checkbox" id="question_3_opt_1" name="question_3[]" class="required" value="Facebook" onchange="getVals(this, 'question_3');">
                                                    <label class="checkbox" for="question_3_opt_1"></label>
                                                    <label for="question_3_opt_1" class="wrapper">Facebook</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox_radio_container">
                                                    <input type="checkbox" id="question_3_opt_2" name="question_3[]" class="required" value="Tiktok" onchange="getVals(this, 'question_3');">
                                                    <label class="checkbox" for="question_3_opt_2"></label>
                                                    <label for="question_3_opt_2" class="wrapper">Tiktok</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox_radio_container">
                                                    <input type="checkbox" id="question_3_opt_3" name="question_3[]" class="required" value="Website - Google" onchange="getVals(this, 'question_3');">
                                                    <label class="checkbox" for="question_3_opt_3"></label>
                                                    <label for="question_3_opt_3" class="wrapper">Website - Google</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox_radio_container">
                                                    <input type="checkbox" id="question_3_opt_4" name="question_3[]" class="required" value="Bạn bè giới thiệu" onchange="getVals(this, 'question_3');">
                                                    <label class="checkbox" for="question_3_opt_4"></label>
                                                    <label for="question_3_opt_4" class="wrapper">Bạn bè giới thiệu</label>
                                                </div>
                                            </li>
                                        </ul>
                                        <small><em>Có thể chọn nhiều phương án*</em></small>
                                    </div>
                                </div>
                                <!-- /step 3-->
                                <div class="step">
                                    <h3 class="main_question mb-4"><strong>4 of 6</strong>Góp ý thêm về tên nhân viên tư vấn:</h3>
                                    <div class="review_block">
                                        <ul>
                                            <li>
                                                <div class="checkbox_radio_container">
                                                    <input type="radio" id="rat_nhiet_tinh_4" name="question_4" class="required" value="Rất nhiệt tình" onchange="getVals(this, 'question_4');">
                                                    <label class="radio" for="rat_nhiet_tinh_4"></label>
                                                    <label for="rat_nhiet_tinh_4" class="wrapper">Rất nhiệt tình</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox_radio_container">
                                                    <input type="radio" id="tam_duoc_4" name="question_4" class="required" value="Tạm được" onchange="getVals(this, 'question_4');">
                                                    <label class="radio" for="tam_duoc_4"></label>
                                                    <label for="tam_duoc_4" class="wrapper">Tạm được</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox_radio_container">
                                                    <input type="radio" id="tu_van_sai_4" name="question_4" class="required" value="Tư vấn sai nhiều" onchange="getVals(this, 'question_4');">
                                                    <label class="radio" for="tu_van_sai_4"></label>
                                                    <label for="tu_van_sai_4" class="wrapper">Tư vấn sai nhiều</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox_radio_container">
                                                    <input type="radio" id="khong_nhiet_tinh_4" name="question_4" class="required" value="Không nhiệt tình" onchange="getVals(this, 'question_4');">
                                                    <label class="radio" for="khong_nhiet_tinh_4"></label>
                                                    <label for="khong_nhiet_tinh_4" class="wrapper">Không nhiệt tình</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="form-group">
                                        <label for="additional_message_4_label">Tên nhân viên</label>
                                        <textarea name="additional_message_4" id="additional_message_4_label" class="form-control" style="height:180px;" onkeyup="getVals(this, 'additional_message_4');"></textarea>
                                    </div>
                                </div>
                                <!-- /step 4-->
                                <div class="step">
                                    <h3 class="main_question"><strong>5 of 6</strong>Tổng kết</h3>
                                    <div class="summary">
                                        <ul>
                                            <li>
                                                <strong>1</strong>
                                                <h5>Bạn thấy chất lượng phục vụ tại Hoàng Hải như thế nào?</h5>
                                                <p id="question_1" class="mb-2"></p>
                                                <p id="additional_message"></p>
                                            </li>
                                            <li>
                                                <strong>2</strong>
                                                <h5>Bạn nghĩ Hoàng Hải cần cải thiện dịch vụ nào trong thời gian tới?</h5>
                                                <p id="question_2" class="mb-2"></p>
                                            </li>
                                            <li>
                                                <strong>3</strong>
                                                <h5>Bạn biết đến Hoàng Hải từ kênh nào?</h5>
                                                <p id="question_3"></p>
                                            </li>
                                            <li>
                                                <strong>3</strong>
                                                <h5>Góp ý thêm về tên nhân viên tư vấn:</h5>
                                                <p id="question_4" class="mb-2"></p>
                                                <p id="additional_message_4"></p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /step 5-->

                                <div class="submit step">
                                    <h3 class="main_question"><strong>6 of 6</strong>Cảm ơn bạn đã góp ý , bạn điền chút thông tin để bên mình gửi tặng voucher giảm giá lần sau nhé:</h3>
                                    <div class="form-group">
                                        <label for="name">Họ tên</label>
                                        <input type="text" name="nameCustomer" id="name" class="form-control required">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="emailCustomer" id="email" class="form-control required">
                                    </div>
                                </div>
                                <!-- /step 6-->
                            </div>
                            <!-- /middle-wizard -->
                            <div id="bottom-wizard">
                                <button type="button" name="backward" class="backward">Trở lại</button>
                                <button type="button" name="forward" class="forward">Tiếp</button>
                                <button type="submit" name="process" class="submit">Gửi</button>
                            </div>
                            <!-- /bottom-wizard -->
                        </form>
                    </div>
                    <!-- /Wizard container -->
                </div>
                <!-- /col -->
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container_centering -->
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    ©2021 Sweetsica
                </div>
                <div class="col-md-9">
                    <ul class="clearfix">
                        <li><a href="https://hoanghaimobile.jp" class="animated_link">Hoàng Hải Mobile</a></li>
                        <li><a href="https://www.facebook.com/hoanghaiconnect" class="animated_link">Hoàng Hải Connect</a></li>
                        <li><a href="https://www.facebook.com/hoanghaicomputerjapan" class="animated_link">Hoàng Hải Computer</a></li>
                        <li><a href="https://www.facebook.com/hoanghaiexpressjapan" class="animated_link">Hoàng Hải Express</a></li>
                    </ul>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container-fluid -->
    </footer>
    <!-- /footer -->
</div>
<!-- /wrapper_centering -->
<!-- COMMON SCRIPTS -->
<script src="{{asset('survey/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('survey/js/common_scripts.min.js')}}"></script>
<script src="{{asset('survey/js/functions.js')}}"></script>
<!-- Wizard script -->
<script src="{{asset('survey/js/survey_func.js')}}"></script>

</body>
</html>
