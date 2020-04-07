@extends('layouts.PillowTheme.mastermain')

@section('content')

    <!-- breadcrumb part start-->
    <section class="breadcrumb_part single_product_breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <h2>صفحه داخلی محصول</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end-->

  <!--================Single Product Area =================-->
  <div class="product_image_area">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="product_img_slide owl-carousel" dir="ltr">
            <div class="single_product_img">
              <img src="img/product/single_product.png" alt="#" class="img-fluid">
            </div>
            <div class="single_product_img">
              <img src="img/product/single_product.png" alt="#" class="img-fluid">
            </div>
            <div class="single_product_img">
              <img src="img/product/single_product.png" alt="#" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="single_product_text text-center">
            <h3>بالشتک های طبی از جنس فوم</h3>
            <p>
                این محصول مناسب برای افرادی است که سابقه بیماری و درد در گردن دارند.
            </p>
            <div class="card_area">
                <div class="product_count_area">
                    <p>تعداد</p>
                    <div class="product_count d-inline-block">
                        <span class="product_count_item inumber-decrement"> <i class="ti-minus"></i></span>
                        <input class="product_count_item input-number" type="text" value="1" min="0" max="10">
                        <span class="product_count_item number-increment"> <i class="ti-plus"></i></span>
                    </div>
                    <p>15000 تومان</p>
                </div>
              <div class="add_to_cart">
                  <a href="#" class="btn_3">اضافه کردن به سبد خرید</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--================End Single Product Area =================-->
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

