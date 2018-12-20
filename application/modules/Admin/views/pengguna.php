<div class="page">
    <div class="page-content">
        <div class="panel">
            <header class="panel-heading">
                <div class="panel-actions"></div>
                <h3 class="panel-title">Daftar Pengguna</h3>
            </header>
            <div class="panel-body">
                    <button id="addToTable"  data-target="#exampleFillIn" data-toggle="modal"
                    type="button" class="btn btn-primary waves-effect waves-classic pull-right" type="button">
                        <i class="icon md-plus" aria-hidden="true"></i> Tambah Pengguna Baru
                    </button>
                <table class="table table-hover table-striped w-full" align="center">
                <thead>
                    <tr>
                        <th width="5%">id</th>
                        <th width="60%">Username</th>
                        <th width="10%">Status</th>
                        <th width="25%" class="text-center">#</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data->result() as $r){?>
                    <tr>
                        <td><?=$r->id?></td>
                        <td><?=$r->username?></td>
                        <td><?=($r->status == 1) ? 'Aktif' : 'Tidak Aktif';?></td>
                        <td class="text-center">
                            <a href="<?=base_url('Admin/ubah_pengguna/'.$r->id)?>"><button class="btn btn-primary btn-xs"><i class="icon md-edit"></i> Edit</button></a> ||
                            <a href="<?=base_url('Admin/ubah_status/'.$r->id.'/'.$r->status)?>"><button class="btn btn-danger btn-xs"><i class="icon md-delete"></i> <?=($r->status == 1) ? 'Non Aktifkan' : 'Aktifkan';?></button></a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
                </table>
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
        <h4 class="modal-title" id="exampleFillInModalTitle">Tambah Pengguna Baru</h4>
    </div>
    <div class="modal-body">
        <form action="<?=base_url("Admin/pengguna_add")?>" method="post">
        <div class="row">
            <div class="col-md-12 form-group">
            <input type="text" class="form-control" name="username" placeholder="Username">
            </div>
            <div class="col-md-5 form-group">
            <input type="password" class="form-control" name="password" placeholder="Password">
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
</div>
<!-- End Modal -->
<!-- End Panel Basic -->
