<style type="text/css">
	img{
    width:100%;
    max-width:500px;
    max-height:300px;
}
</style>
<div class="page">
    <div class="page-content">
        <div class="panel">
            <header class="panel-heading">
                <div class="panel-actions"></div>
                <h3 class="panel-title">Ubah Produk</h3>
            </header>
            <div class="panel-body">
                <div class="col-md-12 col-lg-12">
                  <!-- Example Basic Form Without Label -->
                  <div class="example-wrap">
                    <div class="example">
                      <form action="<?=base_url("Admin/upload_edit/".$id)?>" class="dropzone" id="myDrop">
                        <div class="row">
                          <div class="form-group form-material col-md-6">
                           <div class="form-group form-material" data-plugin="formMaterial">
			                  <label class="form-control-label" for="inputText">Kategori</label>
			                  <input type="text" class="form-control" id="inputText" name="inputText" placeholder="Text" value="<?=$kategori?>" readonly />
			                </div>
                          </div>
                          <div class="form-group form-material col-md-6" id="sub_form">
                            <div class="form-group form-material" data-plugin="formMaterial">
			                  <label class="form-control-label" for="inputText">Sub Kategori</label>
			                  <input type="text" class="form-control" id="inputText" name="inputText" placeholder="Text"  value="<?=$sub?>" readonly/>
			                </div>
                          </div>

                          
				                  <?php foreach($image->result() as $r){
				                  	?>
				                  	<div class="col-md-4">
				                  	<button type="button" class="btn btn-danger btn-xs" onclick="deleteImage(<?=$r->id?>)">X</button>
				                  	<a href="<?=base_url('uploads/').$r->filename?>">
				                  		<img src="<?=base_url('uploads/').$r->filename?>">
				                  	</a>
				                  </div>
				                  <?php } ?>
                        </div>
                          <div class="dropzone-previews"></div> <!-- this is were the previews should be shown. -->
                          <div class="dz-message" data-dz-message><span>Klik Disini Atau Drag Gambar Disini Untuk Mengupload</span></div>
                        <div class="form-group">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </form>
                    </div>
                  </div>
                  <!-- End Example Basic Form Without Label -->
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
<input type="hidden" id="url" name="" value="<?=base_url("Admin")?>">
<!-- End Panel Basic -->

<script type="text/javascript">
  function deleteImage(id){
    toUrl = $("#url").val();
    if(confirm("Apa anda yaki ingin menghapus gambar ini ?")){
      $.ajax({
          url: toUrl+"/delete_img/"+id,
          // data: "kategori="+kategori,
          // dataType: "html",
          // type: "POST",
          success: function(data) {
              alert(data);
              window.location.href = toUrl+"/produk_edit/<?=$id?>"
          }
      });
    }
  }
</script>
