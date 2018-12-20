<?= $ci->load->view('front/header')?>
<!--breadcrumb-->
<section class="row header-breadcrumb">
    <div class="container">
            <div class="row m0 page-cover">
                <h2 class="page-cover-tittle">Tentang Kami</h2>
            <ol class="breadcrumb">
                <li><a href="index.html">Beranda</a></li>
                <li class="active">Tentang Kami</li>
            </ol>
            </div>
        </div>
</section>

<!--who-are-->
<section class=" row who-area sectpad">
    <div class="container">
        <div class="row m0 section_header color">
            <h2>Tentang Kami</h2> 
        </div>
        <div class="row">
            <div class="col-sm-4 col-lg-3 who-are">
                <div class="who-are-image row m0">
                    <img src="images/who-area/1.jpg" alt="">
                </div>
            </div>
            <div class="col-sm-8 col-lg-9 who-are-texts">
                <div class="who-text">
                    <h3>PT. Graha Utama Timber (GUT)</h3>
                    <?=$data?>
                    <div class="row m0">
                        <ul class="two-col-list nav">
                            <li>Meubel & Furniture</li>
                            <li>Tenda & Gazebo</li>
                            <li>Building Material </li>
                            <li>Flooring Indoor & outdoor </li>
                            <li>Stainless steel</li>
                            <li>Tembaga</li>
                        </ul>
                    </div>
                </div>
                <div class="who-text-box row m0 hidden-xs hidden-sm">
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img src="images/who-area/box-image.png" alt="">
                        </a>
                      </div>
                      <div class="media-body">
                        <p>PT. Graha Utama Timber (GUT)</p>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $ci->load->view('front/footer')?>
