<div class="page">
    <div class="page-content">
        <div class="panel">
            <header class="panel-heading">
                <div class="panel-actions"></div>
                <h3 class="panel-title">Ubah Pengguna</h3>
            </header>
            <div class="panel-body">
                <div class="col-md-12 col-lg-12">
                  <!-- Example Basic Form Without Label -->
                  <div class="example-wrap">
                    <div class="example">
                      <form action="<?=base_url("Admin/pengguna_edit/".$id)?>" method = 'POST'>
                        <div class="row">
                          <div class="form-group form-material col-md-6">
                           <div class="form-group form-material" data-plugin="formMaterial">
			                  <label class="form-control-label" for="inputText">Username</label>
			                  <input type="text" class="form-control" id="inputText" name="username" placeholder="Text" value="<?=$data->username?>" readonly />
			                </div>
                          </div>
                          <div class="form-group form-material col-md-6" id="sub_form">
                            <div class="form-group form-material" data-plugin="formMaterial">
			                  <label class="form-control-label" for="inputText">Password Baru</label>
			                  <input type="password" class="form-control" id="inputText" name="password" placeholder="Text"  value=""/>
			                </div>
                          </div>
                        </div>
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
