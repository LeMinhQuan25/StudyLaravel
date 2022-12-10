@extends('layout')

@section('content')

<!-- page_header start -->
<div class="page_header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-xs-12 col-sm-6">
                <h1>Contact Us 01</h1>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                <div class="sub_title_section">
                    <ul class="sub_title">
                        <li> <a href="#"> Home </a> <i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                        <li> Contact Us 01</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page_header end -->

<!-- about_text_section start -->
<div class="about_text_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <div class="about_text_wrapper">
                    <h2>Need Help?</h2>
                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus. This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin.</p>
                    <div class="about_text_wrapper_btn">
                        <button class="btn_discover" type="button">Discover</button>
                        <button class="btn_read_more" type="button">read more</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about_text_section end -->

<!-- contact_info_section start -->
<div class="contact_info_section">
    <div class="contact_info_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                <!-- contact_details_wrapper start-->
                <div class="contact_details_wrapper">
                    <h2>Contact Details</h2>
                    <!-- contact_details_content start-->
                    <div class="contact_details_content">

                        <div class="contact_heading">
                            <span>Head</span>
                        </div>
                        <div class="contact_details">
                            <span>Webstrot Web Company,  5, Lala Lajpath Rai Marg</span>
                        </div>
                        <div class="contact_heading">
                            <span>Office:</span>
                        </div>
                        <div class="contact_details">
                            <span>Dewas, M.P.  India 455001</span>
                        </div>
                    </div>
                    <!-- contact_details_content end-->

                    <!-- contact_details_content start-->
                    <div class="contact_details_content">
                        <div class="contact_heading">
                            <span>Branch</span>
                        </div>
                        <div class="contact_details">
                            <span>Webstrot Web Company, 162-A Kalani Bag</span>
                        </div>
                        <div class="contact_heading">
                            <span>Office:</span>
                        </div>
                        <div class="contact_details">
                            <span>Dewas, M.P.  India 455001</span>
                        </div>
                    </div>
                    <!-- contact_details_content end-->

                    <!-- contact_details_content start-->
                    <div class="contact_details_content">
                        <div class="contact_heading">
                            <span>Phone:</span>
                        </div>
                        <div class="contact_details">
                            <span><a href="#">+1-804-548-5214</a></span>
                        </div>
                        <div class="contact_heading">
                            <span></span>
                        </div>
                        <div class="contact_details">
                            <span class="pd_left"><a href="#">+1-804-548-5215</a></span>
                        </div>
                    </div>
                    <!-- contact_details_content end-->

                    <!-- contact_details_content start-->
                    <div class="contact_details_content">
                        <div class="contact_heading">
                            <span>Email:</span>
                        </div>
                        <div class="contact_details">
                            <span>example@gmail.com</span>
                        </div>
                        <div class="contact_heading">
                            <span></span>
                        </div>
                        <div class="contact_details">
                            <span class="pd_left">support@gmail.com</span>
                        </div>
                    </div>
                    <!-- contact_details_content end-->
                </div>
                <!-- contact_details_wrapper end-->
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                <!-- google_map_section start-->
                <div class="google_map_wrapper">
                    <div id="map"></div>
                </div>
                <!-- google_map_section end-->
            </div>
        </div>
    </div>
</div>
<!-- contact_info_section end -->

<!-- call_to_action start -->
<div class="call_to_action">
    <div class="container">
        <div class="callout_wrap">
            <div class="callout_content">
                <h2>Get in touch with us now</h2>
            </div>
        </div>
    </div>
</div>
<!-- call_to_action end -->

<!-- comments_form_wrapper start -->
<div class="comments_form_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="formsix-pos">
                    <div class="form-group i-name">
                        <label class="sr-only">Name</label>
                        <input type="text" class="form-control" required="" id="name" placeholder="Full Name *">
                    </div>
                </div>
                <div class="formsix-e">
                    <div class="form-group i-email">
                        <label class="sr-only">Email Address</label>
                        <input type="email" class="form-control" required="" id="email" placeholder="Email Address *">
                    </div>
                </div>
                <div class="formsix-e">
                    <div class="form-group i-subject">
                        <label class="sr-only">Subject</label>
                        <input type="text" class="form-control" required="" id="subject" placeholder="Subject">
                    </div>
                </div>
            </div>
            <!-- /.col-md-6 -->
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="formsix-m">
                    <div class="form-group i-message">
                        <label class="sr-only">Message</label>
                        <textarea class="form-control" required="" rows="7" id="message" placeholder="Message"></textarea>
                    </div>
                </div>

            </div>
            <!-- /.col-md-6 -->
        </div>
        <!-- /.row-->
        <button type="submit" class="btn btn-primary">Send Now !</button>
    </div>
    <!-- /.container-->
</div>
<!-- /.comments_form_section end-->

<!-- social_icon_section start -->
<div class="social_icon_section">
    <div class="social_icon_content">
        <a href="#">
            <div class="social_icon_img facebook">
                <i class="fa fa-facebook-square"></i>
            </div>
            <div class="social_icon_heading">
                <span>Facebook</span>
            </div>
        </a>
    </div>
    <div class="social_icon_content">
        <a href="#">
            <div class="social_icon_img twitter">
                <i class="fa fa-twitter-square"></i>
            </div>
            <div class="social_icon_heading">
                <span>Twitter</span>
            </div>
        </a>
    </div>
    <div class="social_icon_content">
        <a href="#">
            <div class="social_icon_img youtube">
                <i class="fa fa-youtube-square"></i>
            </div>
            <div class="social_icon_heading">
                <span>Youtube</span>
            </div>
        </a>
    </div>
    <div class="social_icon_content">
        <a href="#">
            <div class="social_icon_img linkedin">
                <i class="fa fa-linkedin-square"></i>
            </div>
            <div class="social_icon_heading">
                <span>Linkedin</span>
            </div>
        </a>
    </div>
    <div class="social_icon_content">
        <a href="#">
            <div class="social_icon_img google_plus">
                <i class="fa fa-google-plus-square"></i>
            </div>
            <div class="social_icon_heading">
                <span>Google Plus</span>
            </div>
        </a>
    </div>
</div>
<!-- social_icon_section end -->

@endsection


