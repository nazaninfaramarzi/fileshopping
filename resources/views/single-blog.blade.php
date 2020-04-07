@extends('layouts.PillowTheme.mastermain')

@section('content')

    <!-- breadcrumb part start-->
    <section class="breadcrumb_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <h2>صفحه داخلی وبلاگ</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end-->
   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section_padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src="img/blog/single_blog_1.png" alt="">
                  </div>
                  <div class="blog_details">
                     <h2>جدیدترین اخبار و اطلاعات
                     </h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="#"><i class="far fa-user"></i> رضا</a></li>
                        <li><a href="#"><i class="far fa-comments"></i> 3 نظر</a></li>
                     </ul>
                     <p class="excert">
                        برای اطلاع از آخرین اخبار مربوط به تکنولوژی می توانید به این سایت مراجعه کنید.
                     </p>
                     <p>
                         برای اطلاع از آخرین اخبار مربوط به تکنولوژی می توانید به این سایت مراجعه کنید.
                     </p>
                     <div class="quote-wrapper">
                        <div class="quotes">
                            برای اطلاع از آخرین اخبار مربوط به تکنولوژی می توانید به این سایت مراجعه کنید.
                        </div>
                     </div>
                     <p>
                         برای اطلاع از آخرین اخبار مربوط به تکنولوژی می توانید به این سایت مراجعه کنید.
                     </p>
                     <p>
                         برای اطلاع از آخرین اخبار مربوط به تکنولوژی می توانید به این سایت مراجعه کنید.
                     </p>
                  </div>
               </div>
               <div class="navigation-top">
                  <div class="d-sm-flex justify-content-between text-center">
                     <p class="like-info"><span class="align-middle"><i class="far fa-heart"></i></span> </p>
                     <div class="col-sm-4 text-center my-2 my-sm-0">
                        <!-- <p class="comment-count"><span class="align-middle"><i class="far fa-comment"></i></span> 06 Comments</p> -->
                     </div>
                     <ul class="social-icons" dir="ltr">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                     </ul>
                  </div>
                  <div class="navigation-area">
                     <div class="row">
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                           <div class="thumb">
                              <a href="#">
                                 <img class="img-fluid" src="img/post/preview.png" alt="">
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="#">
                                 <span class="lnr text-white ti-arrow-left"></span>
                              </a>
                           </div>
                           <div class="detials">
                              <p>مطلب قبل</p>
                              <a href="#">
                                 <h4>روزنامه ها</h4>
                              </a>
                           </div>
                        </div>
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                           <div class="detials">
                              <p>مطلب بعد</p>
                              <a href="#">
                                 <h4>اختراعات</h4>
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="#">
                                 <span class="lnr text-white ti-arrow-right"></span>
                              </a>
                           </div>
                           <div class="thumb">
                              <a href="#">
                                 <img class="img-fluid" src="img/post/next.png" alt="">
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="blog-author" >
                  <div class="media align-items-center" >
                     <img src="img/blog/author.png" alt="">
                     <div class="media-body">
                        <a href="#">
                           <h4>محمد محمدی</h4>
                        </a>
                        <p>برنامه نویسی وب از طراحی وب سایت ها تا نوشتن برنامه های تحت وب را شامل می شود. برنامه نویسی در این حوزه بسایر  لذت بخش است. کارهای که شما در این حوزه انجام میدهید  را خیلی ها میبینند. شما می توانید به راحتی برای خودتان و یا بسیاری از شرکتها کار کنید. هرچند در حال حاضر تقریبا هر سازمان، شرکت و شخصی یک وب سایت دارد و همچنین تعداد برنامه نویسان این حوزه خیلی زیاد هست اما برنامه نویسان وب با استفاده از خلاقیت و پشتکار می توانند براحتی در هرکدام از شرکت ها یا سازمان ها مشغول به کار شوند .</p>
                     </div>
                  </div>
               </div>
               <div class="comments-area" >
                  <h4>5 نظر</h4>
                  <div class="comment-list">
                     <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                           <div class="thumb">
                              <img src="img/comment/comment_1.png" alt="">
                           </div>
                           <div class="desc">
                              <p class="comment">
                                 مطالب خیلی به من کمک کرد.
                              </p>
                              <div class="d-flex justify-content-between">
                                 <div class="d-flex align-items-center">
                                    <h5>
                                       <a href="#">رضا رضایی</a>
                                    </h5>
                                    <p class="date">4 آبان 1398، 19:05  </p>
                                 </div>
                                 <div class="reply-btn">
                                    <a href="#" class="btn-reply text-uppercase">پاسخ</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="comment-list">
                     <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                           <div class="thumb">
                              <img src="img/comment/comment_2.png" alt="">
                           </div>
                           <div class="desc">
                              <p class="comment">
                                 اطلاعات خیلی خوبی به من داده شد.
                              </p>
                              <div class="d-flex justify-content-between">
                                 <div class="d-flex align-items-center">
                                    <h5>
                                       <a href="#">ارسلان رضایی</a>
                                    </h5>
                                    <p class="date">4 آبان 1398، 19:05 </p>
                                 </div>
                                 <div class="reply-btn">
                                    <a href="#" class="btn-reply text-uppercase">پاسخ</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="comment-list">
                     <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                           <div class="thumb">
                              <img src="img/comment/comment_3.png" alt="">
                           </div>
                           <div class="desc">
                              <p class="comment">
                                 سپاسگزارم.
                              </p>
                              <div class="d-flex justify-content-between">
                                 <div class="d-flex align-items-center">
                                    <h5>
                                       <a href="#">رضا موسوی</a>
                                    </h5>
                                    <p class="date">4 آبان 1398، 19:05 </p>
                                 </div>
                                 <div class="reply-btn">
                                    <a href="#" class="btn-reply text-uppercase">پاسخ</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="comment-form">
                  <h4>جواب دادن</h4>
                  <form class="form-contact comment_form" action="#" id="commentForm">
                     <div class="row">
                        <div class="col-12">
                           <div class="form-group">
                              <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                 placeholder="نظر خود را اینجا بنویسید"></textarea>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="name" id="name" type="text" placeholder="نام">
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="email" id="email" type="email" placeholder="ایمیل">
                           </div>
                        </div>
                        <div class="col-12">
                           <div class="form-group">
                              <input class="form-control" name="website" id="website" type="text" placeholder="وب سایت">
                           </div>
                        </div>
                     </div>
                     <div class="form-group mt-3">
                        <a href="#" class="btn_3 button-contactForm">ارسال پیام</a>
                     </div>
                  </form>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="blog_right_sidebar">
                  <aside class="single_sidebar_widget search_widget">
                     <form action="#">
                        <div class="form-group">
                           <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder='جست و جو'
                                 onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                              <div class="input-group-append">
                                 <button class="btn" type="button"><i class="ti-search"></i></button>
                              </div>
                           </div>
                        </div>
                        <button class="button rounded-0 primary-bg text-white w-100 btn_1" type="submit">جست و جو</button>
                     </form>
                  </aside>
                  <aside class="single_sidebar_widget post_category_widget">
                     <h4 class="widget_title">دسته ها</h4>
                     <ul class="list cat-list">
                        <li>
                           <a href="#" class="d-flex">
                              <p>غذای رستوران</p>
                              <p>(37)</p>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="d-flex">
                              <p>اخبار مسافرت</p>
                              <p>(10)</p>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="d-flex">
                              <p>تکنولوژی مدرن</p>
                              <p>(03)</p>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="d-flex">
                              <p>محصولات</p>
                              <p>(11)</p>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="d-flex">
                              <p>تاثیرگذار</p>
                              <p>(21)</p>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="d-flex">
                              <p>مراقبت از سلامتی</p>
                              <p>(21)</p>
                           </a>
                        </li>
                     </ul>
                  </aside>
                  <aside class="single_sidebar_widget popular_post_widget">
                     <h3 class="widget_title">مطالب اخیر</h3>
                     <div class="media post_item">
                        <img src="img/post/post_1.png" alt="post">
                        <div class="media-body">
                           <a href="single-blog.html">
                              <h3>زندگی دریایی...</h3>
                           </a>
                           <p>12 آبان 1397</p>
                        </div>
                     </div>
                     <div class="media post_item">
                        <img src="img/post/post_2.png" alt="post">
                        <div class="media-body">
                           <a href="single-blog.html">
                              <h3>سرگرمی ها</h3>
                           </a>
                           <p>2 ساعت پیش</p>
                        </div>
                     </div>
                     <div class="media post_item">
                        <img src="img/post/post_3.png" alt="post">
                        <div class="media-body">
                           <a href="single-blog.html">
                              <h3>نجوم</h3>
                           </a>
                           <p>3 ساعت پیش</p>
                        </div>
                     </div>
                     <div class="media post_item">
                        <img src="img/post/post_4.png" alt="post">
                        <div class="media-body">
                           <a href="single-blog.html">
                              <h3>تلسکوپ</h3>
                           </a>
                           <p>1 ساعت پیش</p>
                        </div>
                     </div>
                  </aside>
                  <aside class="single_sidebar_widget tag_cloud_widget">
                     <h4 class="widget_title">برچسب ها</h4>
                     <ul class="list">
                        <li>
                           <a href="#">پروژه</a>
                        </li>
                        <li>
                           <a href="#">علایق</a>
                        </li>
                        <li>
                           <a href="#">تکنولوژی</a>
                        </li>
                        <li>
                           <a href="#">سفر</a>
                        </li>
                        <li>
                           <a href="#">رستوران</a>
                        </li>
                        <li>
                           <a href="#">سبک زندگی</a>
                        </li>
                        <li>
                           <a href="#">طراحی</a>
                        </li>
                        <li>
                           <a href="#">توضیحات</a>
                        </li>
                     </ul>
                  </aside>
                  <aside class="single_sidebar_widget instagram_feeds">
                     <h4 class="widget_title">مطالب اینستاگرام</h4>
                     <ul class="instagram_row flex-wrap">
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="img/post/post_5.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="img/post/post_6.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="img/post/post_7.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="img/post/post_8.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="img/post/post_9.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="img/post/post_10.png" alt="">
                           </a>
                        </li>
                     </ul>
                  </aside>
                  <aside class="single_sidebar_widget newsletter_widget">
                     <h4 class="widget_title">خبرنامه</h4>
                     <form action="#">
                        <div class="form-group">
                           <input type="email" class="form-control" onfocus="this.placeholder = ''"
                              onblur="this.placeholder = 'Enter email'" placeholder='ایمیل' required>
                        </div>
                        <button class="button rounded-0 primary-bg text-white w-100 btn_1"
                           type="submit">تایید</button>
                     </form>
                  </aside>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--================Blog Area end =================-->

   @endsection