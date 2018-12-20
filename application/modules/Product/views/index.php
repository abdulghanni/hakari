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
                    <?php foreach($kategori as $r){?>
                    <li role="presentation" id="<?=$r->id?>" onclick="showP(<?=$r->id?>)">
                        <a href="javascript:void(0);">
                            <?=$r->title?>
                        </a>
                    </li>
                    <?php } ?>  
                </ul>
                <div class="row m0 downloads">
                    <h4>DOWNLOADS</h4> 
                    <div class="dload">
                        <div class="dlbg">
                            <a href="#">Brosur PDF</a>
                            <a href="#"><i class="fa fa-file-pdf-o"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-9 tab_pages" id="list-produk">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane" id="content-2">
                        <div class="row m0 tab_inn_cont_1 ">
                            <div class="tab_inn_cont_2 row">
                                <div class="cont_left col-sm-12">
                                    <div class="row m0 section_header color">
                                        <h2>Meubel & Furniture</h2> 
                                    </div>
                                    <div>
                                    <?=$ci->load->view('Service/meubel')?>
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
    function showP($id){
        // alert("tedt");
        img_url = "<?=base_url()?>assets/plugins/tinymce/skins/lightgray/img/loader.gif";
        $.ajax({
        url: "<?=base_url()?>Product/show/"+$id,
        // data: "kategori="+kategori,
        dataType: "html",
        type: "POST",
        before: function(){
            $("#list-produk").html('<img src='+'"'+img_url+'"'+' />')
        },
        success: function(data) {
            $("#list-produk").html(data);
        }
        });
    }
    $( window ).load(function() {
      $("#1").trigger( "click" );
    });
</script>
