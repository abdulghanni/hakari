<?= $ci->load->view('front/header')?>

<!--breadcrumb-->
<section class="row header-breadcrumb">
    <div class="container">
        <div class="row m0 page-cover">
            <h2 class="page-cover-tittle">Kontak</h2>
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Kontak</li>
            </ol>
        </div>
    </div>
</section>

<section class="row touch">
    <div class="sectpad touch_bg">
        <div class="container">
            <div class="row m0 section_header color">
                <h2>Hubungi Kami</h2>
                <p>Jam buka kantor senin-jumat pukul 08.00-17.00</p>
            </div>
            
            <div class="row touch_middle">
                <div class="col-md-4 open_hours">
                    <div class="row m0 touch_top">
                        <ul class="nav">
                            <li class="item">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <i class="fa fa-map-marker"></i>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        Jl. Raya Pondok Cabe Udik No. 8A.<br/>
                                        Pondok Cabe Udik. Pamulang Kota<br/>
                                        Tangerang Selatan Banten 15418
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <i class="fa fa-envelope-o"></i>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        info@grahautamatimber.com
                                        sales@grahautamatimber.com
                                    </div>
                                </div>
                            </li>
                            <li  class="item">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <i class="fa fa-phone"></i>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        + 021-7490588<br>
                                        + 0815-13566037
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8 input_form">
                    <form action="<?=base_url('Contact/send')?>" method="post" id="contactForm">
                        <input type="text" class="form-control" id="yourname" name="name" placeholder="First">
                        <input type="email" class="form-control" id="youremail" name="email" placeholder="Email">
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                        <textarea class="form-control" rows="6" id="message" name="message" placeholder="Message"></textarea>
                        <div class="row m0">
                            <button type="submit" class="btn btn-default submit">Submit Now</button>
                        </div>
                    </form>
                    <div id="success"><p>Your message sent successfully.</p></div>
                    <div id="error"><p>Something is wrong. Message cant be sent!</p></div>
                </div>
            </div>           
        </div>
    </div>
</section>
<!--MapBox-->
<?= $ci->load->view('front/footer')?>
