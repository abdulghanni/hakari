<div class="page">
    <div class="page-content container-fluid">
      <div class="row">
        <div class="col-md-12">
          <!-- Panel Static Labels -->
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Kontak</h3>
            </div>
            <div class="panel-body container-fluid">
              <form action="<?=base_url("Admin/kontak_add")?>" method="post">
                <div class="form-group form-material" data-plugin="formMaterial">
                  <label class="form-control-label" for="inputText">Alamat</label>
                  <input type="text" class="form-control" id="inputText" name="alamat" placeholder="Text" value="<?=$alamat?>"
                  />
                </div>
                <div class="form-group form-material" data-plugin="formMaterial">
                  <label class="form-control-label" for="inputEmail">Email</label>
                  <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email 1" value="<?=$email?>"/>
                  <input type="email" class="form-control" id="inputEmail" name="email2" placeholder="Email 2" value="<?=$email2?>"/>
                </div>
                <div class="form-group form-material" data-plugin="formMaterial">
                  <label class="form-control-label" for="inputPassword">Telpon</label>
                  <input type="text" class="form-control" id="inputPassword" name="telpon"
                    placeholder="Telpon 1" value="<?=$telpon?>" />
                  <input type="text" class="form-control" id="inputPassword" name="telpon2"
                    placeholder="Telpon 2" value="<?=$telpon2?>" />
                </div>
                <div class="input-group-btn">
                    <button type="submit" class="btn btn-info" type="button"> Save</button>
                </div>
              </form>
            </div>
          </div>
          <!-- End Panel Static Labels -->
        </div>
</div>
<input type="hidden" id="url" name="" value="<?=base_url("Admin")?>">
<!-- End Panel Basic -->
