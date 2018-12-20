<div class="page">
    <div class="page-content">
        <div class="panel">
            <header class="panel-heading">
                <div class="panel-actions"></div>
                <h3 class="panel-title">Sub Kategori Untuk <?=$kategori?></h3>
            </header>
            <div class="panel-body">
                <div class="col-md-12 col-lg-6">
                  <!-- Example Basic Form Without Label -->
                  <div class="example-wrap">
                    <div class="example">
                      <form action="<?=base_url("Admin/upload")?>" class="dropzone" id="myDrop">
                        <div class="row">
                            <button id="addToTable"  data-target="#exampleFillIn" data-toggle="modal"
                                type="button" class="btn btn-primary waves-effect waves-classic pull-right" type="button">
                                    <i class="icon md-plus" aria-hidden="true"></i> Tambah Sub Kategori
                                </button>
                            <table class="table table-hover table-striped w-full" align="center">
                            <thead>
                                <tr>
                                    <th width="60%">Sub Kategori</th>
                                    <th width="10%">Urutan</th>
                                    <th width="30%" class="text-center">#</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($data->result() as $r){?>
                                <tr>
                                    <td><?=$r->title?></td>
                                    <td><?=$r->order?></td>
                                    <td class="text-center">
                                        <a href="<?=base_url('Admin/kategori_sub_delete/'.$r->id.'/'.$id)?>">
                                        <button type="button" class="btn btn-danger btn-xs"><i class="icon md-delete"></i> Hapus</button>
                                    </a>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                            </table>
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
<!-- Modal -->
<div class="modal fade modal-fill-in" id="exampleFillIn" aria-hidden="false" aria-labelledby="exampleFillIn"
role="dialog" tabindex="-1">
<div class="modal-dialog modal-simple">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title" id="exampleFillInModalTitle">Tambah Sub Kategori Untuk <?=$kategori?></h4>
    </div>
    <div class="modal-body">
        <form action="<?=base_url("Admin/kategori_sub_add/".$id)?>" method="post">
        <div class="row">
            <div class="col-md-12 form-group">
            <input type="text" class="form-control" name="title" placeholder="Nama Sub Kategori">
            </div>
            <div class="col-md-5 form-group">
            <input type="number" class="form-control" name="order" placeholder="Urutan">
            </div>
            <div class="col-md-12">
                <button id="addToTable" type="submit" class="btn btn-primary waves-effect waves-classic pull-right">
                    <i class="icon md-play-for-work" aria-hidden="true"></i> Save
                </button>
            </div>
        </div>
        </form>
    </div>
    </div>
</div>
<input type="hidden" id="url" name="" value="<?=base_url("Admin")?>">
<!-- End Panel Basic -->
