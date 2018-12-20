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
<script type="text/javascript">
	$('.produk').justifiedGallery({
    rowHeight : 200,
    lastRow : 'justify',
    margins : 5,
    border : 15
});
</script>