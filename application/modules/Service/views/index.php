<?= $ci->load->view('front/header')?>
<style type="text/css">
    
.gallery-title
{
    font-size: 36px;
    color: #42B32F;
    text-align: center;
    font-weight: 500;
    margin-bottom: 70px;
}
.gallery-title:after {
    content: "";
    position: absolute;
    width: 7.5%;
    left: 46.5%;
    height: 45px;
    border-bottom: 1px solid #5e5e5e;
}
.filter-button
{
    font-size: 18px;
    border: 1px solid #42B32F;
    border-radius: 5px;
    text-align: center;
    color: #42B32F;
    margin-bottom: 30px;

}
.filter-button:hover
{
    font-size: 18px;
    border: 1px solid #42B32F;
    border-radius: 5px;
    text-align: center;
    color: #ffffff;
    background-color: #42B32F;

}
.btn-default:active .filter-button:active
{
    background-color: #42B32F;
    color: white;
}

.port-image
{
    width: 100%;
}

.gallery_product
{
    margin-bottom: 30px;
}

.my-gallery {
  width: 100%;
  float: left;
}
.my-gallery img {
  width: 100%;
  height: 383px;
}
.my-gallery figure {
  display: block;
  float: left;
  margin: 0 5px 5px 0;
  width: 450px;
  height: : 383px;
}
.my-gallery figcaption {
  display: none;
}
</style>
<!--breadcrumb-->
<section class="row header-breadcrumb">
    <div class="container">
            <div class="row m0 page-cover">
                <h2 class="page-cover-tittle">Produk</h2>
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Produk</li>
            </ol>
            </div>
        </div>
</section>

<!--services-2-->
<section class="row sectpad services">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 sidebar">
                <ul class="nav nav-tabs" role="tablist">
                    
                    <li role="presentation" class="active">
                        <a href="#content-3" aria-controls="content-3" role="tab" data-toggle="tab">
                            Building Material 
                        </a>
                    </li>

                    
                    <li role="presentation">
                        <a href="#content-4" aria-controls="content-4" role="tab" data-toggle="tab">
                            Flooring Indoor & outdoor 
                        </a>
                    </li>

                    <li role="presentation">
                        <a href="#content-2" aria-controls="content-2" role="tab" data-toggle="tab">
                            Meubel & Furniture
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#content-1" aria-controls="content-1" role="tab" data-toggle="tab">
                           Tenda & Gazebo
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#content-6" aria-controls="content-6" role="tab" data-toggle="tab">
                            Tembaga
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#content-5" aria-controls="content-5" role="tab" data-toggle="tab" onclick="showsteel()">
                            Stainless steel
                        </a>
                    </li>
                </ul>
                <div class="row m0 downloads">
                    <h4>DOWNLOADS</h4> 
                    <div class="dload">
                        <div class="dlbg">
                            <a href="<?=base_url('uploads/katalog/Katalog GUT.pdf')?>">Download Katalog</a>
                            <a href="<?=base_url('uploads/katalog/Katalog GUT.pdf')?>"><i class="fa fa-file-pdf-o"></i></a>
                        </div>
                    </div>
                    <!-- <div class="dload">
                        <div class="dlbg">
                            <a href="#" class="recent">Our Recent Project</a>
                            <a href="#"><i class="icon icon-Download"></i></a>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="col-sm-9 tab_pages">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane" id="content-2">
                        <div class="row m0 tab_inn_cont_1 ">
                            <div class="tab_inn_cont_2 row">
                                <div class="cont_left col-sm-12">
                                    <div class="row m0 section_header color">
                                        <h2>Meubel & Furniture</h2> 
                                    </div>
                                    <?=$ci->load->view('Service/meubel')?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="content-1">
                        <div class="row m0 tab_inn_cont_1 ">
                            <div class="tab_inn_cont_2 row">
                                <div class="cont_left col-sm-8">
                                    <div class="row m0 section_header color">
                                        <h2>Tenda & Gazebo</h2> 
                                    </div>
                                    <p>Tenda adalah tempat pelindung yang terdiri dari lembaran kain atau bahan lainnya menutupi yang melekat pada kerangka tiang atau menempel pada tali pendukung. Beberapa tenda tidak perlu berdiri diatas tanah karena ada beberapa model tenda yang menggantung di pohon.

                                    Tenda banyak digunakan oleh tentara maupun sebagai tempat pempunagn korban bencana alam dan secara umum tenda digunakan untuk tujuan rekreasi. Tenda merupakan rumah bagi pendaki gunung, tempat kita melepas lelah setelah menempuh beberapa lama perjalanan mendaki suatu gunung, tenda juga melindungi kita dari cuaca yang kadang ektrim sekalipun.

                                    Tenda biasanya mempunyai dua prinsip pelapisan perlindungan, yaitu dinding bagian dalam yang terbuat dari bahan yang bernafas (breathable) atau bahan non-waterproof dan dinding luar (flysheet) yang terbuat dari bahan yang anti air. Ini bertujuan mengatasi faktor kondensasi yang dihasilkan oleh tubuh dan beberapa aktifitas di dalam tenda. Kondensasi terjadi karena hawa panas yang dihasilkan oleh tubuh dan atau memasak di dalam tenda, jadi untuk mengatasi hal tersebut diperlukan dinding dalam tenda terbuat dari bahan yang non waterproof, agar hawa panas tersebut bisa keluar. </p>
                                </div>
                                <div class="cont_right col-sm-4">
                                    <img src="images/services_2/tenda/1.jpg" alt="">                                
                                    <img src="images/services_2/tenda/3.jpg" alt="">
                                </div>
                            </div>
                            <img src="images/services_2/tenda/full.jpg" alt="">
                        </div> 
                    </div>
                    <div role="tabpanel" class="tab-pane active" id="content-3">
                        <div class="row m0 tab_inn_cont_1 ">
                            <div class="tab_inn_cont_2 row">
                                <div class="cont_left col-sm-12">
                                    <div class="row m0 section_header color">
                                        <h2>Building Material </h2> 
                                    </div>
                                    <?=$ci->load->view('Service/material')?>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div role="tabpanel" class="tab-pane" id="content-4">
                        <div class="row m0 tab_inn_cont_1 ">
                            <div class="tab_inn_cont_2 row">
                                <div class="cont_left col-sm-12">
                                    <div class="row m0 section_header color">
                                        <h2>Flooring Indoor & outdoor </h2> 
                                    </div>
                                    <?=$ci->load->view('Service/flooring')?>
                                </div>
                            </div> 
                        </div> 
                    </div>
                    <div role="tabpanel" class="tab-pane" id="content-5">
                        <div class="row m0 tab_inn_cont_1 ">
                            <div class="tab_inn_cont_2 row">
                                <div class="cont_left col-sm-12">
                                    <div class="row m0 section_header color">
                                        <h2>Stainless steel</h2> 
                                    </div>
                                    <div class="produk" id="steel" style="display:none">
                                    <?php for($i=1;$i<11;$i++){?>
                                        <a href="images/services_2/steel/<?=$i?>.jpg">
                                            <img alt="caption for image 1" src="images/services_2/steel/<?=$i?>.jpg"/>
                                        </a>
                                    <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <img src="images/services_2/3.jpg" alt="">   
                        </div> 
                    </div>
                    <div role="tabpanel" class="tab-pane" id="content-6">
                        <div class="row m0 tab_inn_cont_1 ">
                            <div class="tab_inn_cont_2 row">
                                <div class="cont_left col-sm-12">
                                    <div class="row m0 section_header color">
                                        <h2>Tembaga</h2> 
                                    </div>
                                    <div class="container">
                                    <div class="row"></div>
                                        <div class="my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
                                            <?php for($i=1;$i<10;$i++){?>
                                            <figure itemprop="associatedMedia" itemscope itemtype="">
                                            <a href="images/services_2/tembaga/<?=$i?>.jpg" itemprop="contentUrl" data-size="1024x1024">
                                                <img src="images/services_2/tembaga/<?=$i?>.jpg" itemprop="thumbnail" alt="Image description" />
                                            </a>
                                            <!-- <figcaption itemprop="caption description">Image caption  1</figcaption> -->
                                            </figure>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>   
                        </div> 
                    </div>
                </div>
            </div>                     
        </div>
    </div>
</section>
<?= $ci->load->view('front/footer')?>
<script>
function showsteel(){
    $("#steel").show("slow");
}
</script>
