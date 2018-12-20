<div class="page">
    <div class="page-content">
        <div class="panel">
            <header class="panel-heading">
                <div class="panel-actions"></div>
                <h3 class="panel-title">Tambah Produk</h3>
            </header>
            <div class="panel-body">
                <div class="col-md-12 col-lg-6">
                  <!-- Example Basic Form Without Label -->
                  <div class="example-wrap">
                    <div class="example">
                      <form action="<?=base_url("Admin/upload")?>" class="dropzone" id="myDrop">
                        <div class="row">
                          <div class="form-group form-material col-md-6">
                            <select class="form-control" onchange="getSub()" id="kategori" name="kategori">
                                <option value="-">-- Pilih Kategori --</option>
                                <?php foreach ($kategori->result() as $r) {?>
                                <option value="<?=$r->id?>"><?=$r->title?></option>
                                <?php } ?>
                            </select>
                          </div>
                          <div class="form-group form-material col-md-6" id="sub_form" style="display: none">
                            <select class="form-control" id="sub" name="sub">
                                <option>-- Pilih Sub Kategori --</option>
                            </select>
                          </div>
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
