<div class="page">
    <div class="page-content">
        <div class="panel">
            <header class="panel-heading">
                <div class="panel-actions"></div>
                <h3 class="panel-title">Daftar Produk</h3>
            </header>
            <div class="panel-body">
                <a href="<?=base_url('Admin/produk_add')?>">
                    <button id="addToTable" class="btn btn-primary waves-effect waves-classic pull-right" type="button">
                        <i class="icon md-plus" aria-hidden="true"></i> Tambah Produk
                    </button>
                </a>
                <table class="table table-hover table-striped w-full" align="center">
                <thead>
                    <tr>
                        <th width="25%">Kategori</th>
                        <th width="20%">Sub Kategori</th>
                        <th width="20%">Dibuat Oleh</th>
                        <th width="20%">Terakhir diperbarui</th>
                        <th width="15%" class="text-center">#</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data->result() as $r){?>
                    <tr>
                        <td><?=$r->kategori?></td>
                        <td><?=$r->sub?></td>
                        <td><?=$r->created_by?></td>
                        <td><?=$r->modified_date?></td>
                        <td class="text-center">
                            <a href="<?=base_url('Admin/produk_edit/'.$r->produk_id)?>"><button class="btn btn-primary btn-xs"><i class="icon md-edit"></i> Edit</button></a> ||
                            <a href="<?=base_url('Admin/produk_delete/'.$r->produk_id)?>"><button type="button" class="btn btn-danger btn-xs"><i class="icon md-delete"></i> Hapus</button></a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- End Panel Basic -->
