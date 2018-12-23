<?= $ci->load->view('front/header')?>

<!--breadcumb-3 area are start-->
        <div class="breadcumb-area breadcumb-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="breadcumb-3-area">
                            <div class="bread-main-3">
                                <div class="bred-hading text-center">
                                    <ol class="breadcrumb">
                                        <li class="home"><a title="Go to Home Page" href="<?=base_url()?>">Home</a></li>
                                        <li class="active">Contact</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcumb-3 area are start-->
        <!--informaton area start-->
        <div class="informaton-area pt-75 pb-75">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="single-informaton text-center">
                            <div class="si-icon">
                                <i class="zmdi zmdi-phone"></i>
                            </div>
                            <div class="si-content">
                                <p>(030) 333 456 789 – 686</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="single-informaton text-center">
                            <div class="si-icon">
                                <i class="zmdi zmdi-pin"></i>
                            </div>
                            <div class="si-content">
                                <p>68 5th Ave Street, Suite 836 NY 8362-1800</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="single-informaton text-center">
                            <div class="si-icon">
                                <i class="zmdi zmdi-email"></i>
                            </div>
                            <div class="si-content">
                                <a href="#">Infor@wright.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--informaton are end-->

        <!--we will love area start-->
        <div class="we-love-wraper pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="catagory-title cat-tit-3 text-center">
                            <h3>Contact Us</h3>
                        </div>
                        <div class="clearfix"></div>
                        <div class="we-love-area">
                            <form action="http://demo.hasthemes.com/wright/wright/mail.php" method="post">
                                <div class="row">
                                    <div class="col-lg-6 offset-lg-3">
                                        <div class="input-box">
                                            <input type="text" name="name1" class="info" placeholder="Your Name*">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 offset-lg-3">
                                        <div class="input-box">
                                            <input type="email" name="email" class="info" placeholder="Your Email*">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 offset-lg-3">
                                        <div class="input-box">
                                            <input type="text" name="subject" class="info" placeholder="subject*">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 offset-lg-3">
                                        <div class="input-box">
                                            <textarea name="message" class="area-tex" placeholder="Your Message*"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 offset-lg-3">
                                        <div class="input-box">
                                            <input type="submit" name="submit" class="submit-btn" value="Send Mail">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--we will love area end-->
        
        
<!--MapBox-->
<?= $ci->load->view('front/footer')?>
