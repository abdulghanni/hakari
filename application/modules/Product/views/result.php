<div class="btn-group btn-group-toggle" data-toggle="buttons">
  <button class="btn btn-success  btn-lg active" onclick="select_all('<?=$id?>')"> Show all</button>
  <?php foreach ($sub->result() as $r) {?>
  <button class="btn btn-success btn-lg" onclick="select_cat('<?=$id?>', '<?=$r->id?>')"> <?=$r->title?></button>
  <?php } ?>
</div>
<div id="sub_image">

<?php if($img->num_rows() > 0){?>
<div class="produk">
<?php foreach($img->result() as $r){?>
  <a href="<?=base_url('uploads/').$r->filename?>">
    <img alt="caption for image 1" src="<?=base_url('uploads/').$r->filename?>"/>
  </a>
<?php } ?>
</div>
<?php } else{
echo '<br/><br/><h3>Belum Ada Gambar Untuk Kategori Ini</h3>';
}
?>
</div>
<script type="text/javascript">
function select_cat(id, sub_id){
    img_url = "<?=base_url()?>assets/plugins/tinymce/skins/lightgray/img/loader.gif";
    $.ajax({
    url: "<?=base_url()?>Product/show_sub/"+id+"/"+sub_id,
    // data: "kategori="+kategori,
    dataType: "html",
    type: "POST",
    before: function(){
        $("#sub_image").html('<img src='+'"'+img_url+'"'+' />')
    },
    success: function(data) {
        $("#sub_image").html(data);
    }
    });
}

function select_all(id){
    img_url = "<?=base_url()?>assets/plugins/tinymce/skins/lightgray/img/loader.gif";
    $.ajax({
    url: "<?=base_url()?>Product/show_all/"+id,
    // data: "kategori="+kategori,
    dataType: "html",
    type: "POST",
    before: function(){
        $("#sub_image").html('<img src='+'"'+img_url+'"'+' />')
    },
    success: function(data) {
        $("#sub_image").html(data);
    }
    });
}

$('.produk').justifiedGallery({
    rowHeight : 200,
    lastRow : 'justify',
    margins : 5,
    border : 15
});
</script>