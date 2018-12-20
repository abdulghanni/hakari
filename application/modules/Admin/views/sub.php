<select class="form-control" id="sub">
    <option value="-">-- Pilih Sub Kategori --</option>
    <?php foreach ($sub->result() as $r) {?>
    <option value="<?=$r->id?>"><?=$r->title?></option>
    <?php } ?>
</select>