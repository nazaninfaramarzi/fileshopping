@extends('layouts.PillowTheme.mastermain')

@section('content')

    <!-- breadcrumb part start-->
    <section class="breadcrumb_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <h2>لیست محصولات</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end-->
    
    <!-- product list part start-->
    <section class="product_list section_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="product_sidebar">
                        <div class="single_sedebar">
                            <form action="#">
                                <input type="text" name="#" placeholder="جست و جو">
                                <i class="ti-search"></i>
                            </form>
                        </div>
                        <div class="single_sedebar">
                            <div class="select_option">
                                <div class="select_option_list">دسته ها <i class="right fas fa-caret-down"></i> </div>
                                <div class="select_option_dropdown">
                                    <p><a href="#">دسته 1</a></p>
                                    <p><a href="#">دسته 2</a></p>
                                    <p><a href="#">دسته 3</a></p>
                                    <p><a href="#">دسته 4</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="single_sedebar">
                            <div class="select_option">
                                <div class="select_option_list">مدل <i class="right fas fa-caret-down"></i> </div>
                                <div class="select_option_dropdown">
                                    <p><a href="#">مدل 1</a></p>
                                    <p><a href="#">مدل 2</a></p>
                                    <p><a href="#">مدل 3</a></p>
                                    <p><a href="#">مدل 4</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="product_list">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_item">
                                    <img src="img/product/product_list_1.png" alt="#" class="img-fluid">
                                    <h3> <a href="single-product">بالشتک های طبی از جنس فوم</a> </h3>
                                    <p>شروع قیمت از 15000 تومان</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_item">
                                    <img src="img/product/product_list_2.png" alt="#" class="img-fluid">
                                    <h3> <a href="single-product">بالشتک  از جنس فوم</a> </h3>
                                    <p>شروع قیمت از 15000 تومان</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_item">
                                    <img src="img/product/product_list_3.png" alt="#" class="img-fluid">
                                    <h3> <a href="single-product">بالشتک  از جنس فوم</a> </h3>
                                    <p>شروع قیمت از 15000 تومان</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_item">
                                    <img src="img/product/product_list_4.png" alt="#" class="img-fluid">
                                    <h3> <a href="single-product">بالشتک  از جنس فوم</a> </h3>
                                    <p>شروع قیمت از 15000 تومان</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_item">
                                    <img src="img/product/product_list_5.png" alt="#" class="img-fluid">
                                    <h3> <a href="single-product">بالشتک  از جنس فوم</a> </h3>
                                    <p>شروع قیمت از 15000 تومان</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_item">
                                    <img src="img/product/product_list_6.png" alt="#" class="img-fluid">
                                    <h3> <a href="single-product">بالشتک های طبی از جنس فوم برای مسافرت</a> </h3>
                                    <p>شروع قیمت از 15000 تومان</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_item">
                                    <img src="img/product/product_list_7.png" alt="#" class="img-fluid">
                                    <h3> <a href="single-product">بالشتک  از جنس فوم</a> </h3>
                                    <p>شروع قیمت از 15000 تومان</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_item">
                                    <img src="img/product/product_list_8.png" alt="#" class="img-fluid">
                                    <h3> <a href="single-product">بالشتک های طبی از جنس فوم برای مسافرت</a> </h3>
                                    <p>شروع قیمت از 15000 تومان</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_item">
                                    <img src="img/product/product_list_9.png" alt="#" class="img-fluid">
                                    <h3> <a href="single-product">بالشتک  از جنس فوم</a> </h3>
                                    <p>شروع قیمت از 15000 تومان</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_item">
                                    <img src="img/product/product_list_10.png" alt="#" class="img-fluid">
                                    <h3> <a href="single-product">بالشتک  از جنس فوم</a> </h3>
                                    <p>شروع قیمت از 15000 تومان</p>
                                </div>
                            </div>
                        </div>
                        <div class="load_more_btn text-center">
                            <a href="#" class="btn_3">جزئیات بیشتر</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product list part end-->
    
    <!-- client review part here -->
    <section class="client_review">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="client_review_slider owl-carousel" dir="ltr">
                        <div class="single_client_review" dir="rtl">
                            <div class="client_img">
                                <img src="img/client.png" alt="#">
                            </div>
                            <p>"استفاده از بالش های طبی را در سفرهای طولانی مدت پیشنهاد می کنم.</p>
                            <h5>- رضا محمدی</h5>
                        </div>
                        <div class="single_client_review" dir="rtl">
                            <div class="client_img">
                                <img src="img/client_1.png" alt="#">
                            </div>
                            <p>"برای جلوگیری از گردن درد گزینه های مناسبی هستند.</p>
                            <h5>- امیر امیری</h5>
                        </div>
                        <div class="single_client_review" dir="rtl">
                            <div class="client_img">
                                <img src="img/client_2.png" alt="#">
                            </div>
                            <p>"برای نشستن های طولانی مدت روی مبل قابل قبول اند.</p>
                            <h5>- محمد موسوی</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- client review part end -->

    <!-- feature part here -->
    <section class="feature_part section_padding">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <div class="feature_part_tittle">
                        <h3>با استفاده از مواد ارگانیک، محصولات استانداردی در اینجا تولید می شود.</h3>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="feature_part_content">
                        <p>“شرکت ما با بهره گیری از استراتژی های مختلف و استفاده از مواد ارگانیک و طبیعی سعی در تولید محصولاتی با کیفیت و مطابق نیاز شما دارد.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="img/icon/feature_icon_1.svg" alt="#">
                        <h4>پشتیبانی کارت های اعتباری</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="img/icon/feature_icon_2.svg" alt="#">
                        <h4>سفارش آنلاین</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="img/icon/feature_icon_3.svg" alt="#">
                        <h4>تحویل رایگان</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="img/icon/feature_icon_4.svg" alt="#">
                        <h4>محصولات همراه با جایزه</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature part end -->

    <!-- subscribe part here -->
    <section class="subscribe_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="subscribe_part_content">
                        <h2>به روز رسانی و مطالب پیشرفته!</h2>
                        <p>ما سعی در ارائه محصولات با کیفیت تر و با دوام تر با توجه با استانداردهای روز جهان داریم .</p>
                        <div class="subscribe_form">
                            <input type="email" placeholder="ایمیل خود را وارد کنید">
                            <a href="#" class="btn_1">تایید پرداخت</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe part end -->

    @endsection