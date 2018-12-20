
<div class="page">
    <div class="page-content container-fluid">
      <div class="row">
        <div class="col-md-12">
          <!-- Panel Static Labels -->
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Tentang Perusahaan</h3>
            </div>
            <div class="panel-body container-fluid">
              <form action="<?=base_url("Admin/tentang_add")?>" method="post">
                <div class="form-group form-material" data-plugin="formMaterial">
                  <label class="form-control-label" for="textarea">Tuliskan Tentang Perusahaan Disini</label>
                  <textarea class="form-control" id="textarea" name="tentang" rows="15"><?=$data?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
              </form>
            </div>
          </div>
          <!-- End Panel Static Labels -->
        </div>
</div>
<input type="hidden" id="url" name="" value="<?=base_url("Admin")?>">
<!-- End Panel Basic -->
